<?php
/**
*
* @package MoT Sudoku v0.13.0
* @copyright (c) 2023 - 2026 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace mot\sudoku\migrations;

class v_0_13_0 extends \phpbb\db\migration\migration
{
	/**
	* Check whether the predecessor migration exists
	*/
	public static function depends_on()
	{
		return ['\mot\sudoku\migrations\v_0_12_0'];
	}

	public function update_data()
	{
		return [
			// Add the config variable we want to be able to set
			['config.add', ['mot_sudoku_enable_game_save', 1]],
		];
	}

	public function update_schema()
	{
		return [
			'add_tables'	=> [
				$this->table_prefix . 'mot_sudoku_saved_games'	=> [
					'COLUMNS'	=> [
						'item_id'			=> ['UINT:10', null, 'auto_increment'],
						'user_id'			=> ['UINT:10', 0],
						'game_type'			=> ['VCHAR:1', ''],
						'game_id'			=> ['UINT:10', 0],
						'reset'				=> ['UINT:1', 0],
						'buy_digit'			=> ['UINT:1', 0],
						'helper'			=> ['TINT:1', 0],
						'level'				=> ['UINT:1', 0],
						'points'			=> ['INT:4', 0],
						'player_line'		=> ['VCHAR:2000', ''],
					],
					'PRIMARY_KEY'	=> 'item_id',
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_tables'	=> [
				$this->table_prefix . 'mot_sudoku_saved_games',
			],
		];
	}
}
