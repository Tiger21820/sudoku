<?php
/**
*
* @package MoT Sudoku v0.13.0
* @copyright (c) 2023 - 2026 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace mot\sudoku\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class mot_sudoku_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return array(
			'core.user_setup'			=> 'load_language_on_setup',
			'core.page_header'			=> 'add_page_header_link',
			'core.page_footer'			=> 'get_visited_page',
			'core.delete_user_after'	=> 'delete_user_after',
			'core.permissions'			=> 'load_permissions'
		);
	}

	public function __construct(protected \phpbb\auth\auth $auth, protected \phpbb\config\config $config, protected \phpbb\db\driver\driver_interface $db, protected \phpbb\controller\helper $helper,
								protected \phpbb\language\language $language, protected \phpbb\template\template $template, protected \phpbb\user $user, protected \mot\sudoku\includes\mot_sudoku_functions $mot_sudoku_functions,
								protected $sudoku_fame_table, protected $sudoku_fame_month_table, protected $sudoku_fame_year_table, protected $sudoku_games_table,
								protected $sudoku_stats_table, protected $sudoku_saved_games_table)
	{
	}

	/**
	 * Load language files
	 *
	 * @param \phpbb\event\data $event
	 */
	public function load_language_on_setup(object $event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name' => 'mot/sudoku',
			'lang_set' => 'mot_sudoku_common',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	 * Add a page header nav bar link
	 *
	 * @param \phpbb\event\data $event The event object
	 */
	public function add_page_header_link()
	{
		// Check first for a new month or year and update FAME_MONTH_TABLE  and FAME_YEAR_TABLE
		$this->mot_sudoku_functions->check_month_year();

		$this->template->assign_vars([
			'U_MOT_SUDOKU' 			=> $this->helper->route('mot_sudoku_main'),
			'U_MOT_SUDOKU_PLAY'		=> ($this->config['mot_sudoku_enable'] && $this->auth->acl_get('u_play_mot_sudoku')) || $this->user->data['user_type'] == USER_FOUNDER,
		]);
	}

	/**
	* Get all users playing Sudoku from the SESSIONS_TABLE
	*
	*/
	public function get_visited_page()
	{
		$sql_ary = [
			'SELECT'	=> 's.session_user_id, u.username, u.user_colour',

			'FROM'		=> [
				SESSIONS_TABLE	=> 's',
			],

			'LEFT_JOIN'	=> [
				[
					'FROM'	=> [USERS_TABLE	=> 'u'],
					'ON'	=> 'u.user_id = s.session_user_id'
				],
			],

			'WHERE'		=> 	"s.session_page LIKE '%sudoku%'
							AND s.session_user_id <> " . ANONYMOUS,

			'ORDER_BY'	=> 's.session_user_id ASC',
		];
		$sql = $this->db->sql_build_query('SELECT_DISTINCT', $sql_ary);
		$result = $this->db->sql_query($sql);
		$sudoku_users = $this->db->sql_fetchrowset($result);
		$this->db->sql_freeresult($result);

		$sudoku_users_count = $this->language->lang('MOT_SUDOKU_TOTAL_PLAYERS', count($sudoku_users));
		$sudoku_user_list = '';
		foreach ($sudoku_users as $row)
		{
			$sudoku_user = '<span style="color: #' . $row['user_colour'] . ';">' . $row['username'] . '</span>';
			$sudoku_user_list .= $sudoku_user_list != '' ? ', ' . $sudoku_user : $sudoku_user;
		}

		$this->template->assign_vars([
			'MOT_SUDOKU_TOTAL_USERS_ONLINE'	=> $sudoku_users_count . $sudoku_user_list,
		]);
	}

	/**
	* Delete a user from mot_sudoku_games table, mot_sudoku_stats table and mot_sudoku_fame tables after he was deleted from the users table
	*
	* @params:	mode, retain_username, user_ids, user_rows
	*/
	public function delete_user_after($event)
	{
		$table_ary = [
			$this->sudoku_fame_table, $this->sudoku_fame_month_table, $this->sudoku_fame_year_table, $this->sudoku_games_table, $this->sudoku_stats_table, $this->sudoku_saved_games_table
		];
		// get the user_id's stored in an indexed array
		$user_id_ary = $event['user_ids'];
		// if user(s) got deleted we need to delete them from all tables in the a.m. array
		foreach ($user_id_ary as $value)
		{
			foreach ($table_ary as $table)
			{
				$sql = 'DELETE FROM ' . $table . '
						WHERE user_id = ' . (int) $value;
				$this->db->sql_query($sql);
			}
		}
	}

	/**
	* Load permissions
	*/
	public function load_permissions($event)
	{
		$event->update_subarray('permissions', 'a_manage_mot_sudoku', ['lang' => 'ACL_A_MOT_SUDOKU_MANAGE', 'cat' => 'misc']);
		$event->update_subarray('permissions', 'u_play_mot_sudoku', ['lang' => 'ACL_U_MOT_SUDOKU_PLAY', 'cat' => 'misc']);
	}
}
