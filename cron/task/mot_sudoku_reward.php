<?php
/**
*
* @package MoT Sudoku v0.13.0
* @copyright (c) 2024 - 2026 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace mot\sudoku\cron\task;

class mot_sudoku_reward extends \phpbb\cron\task\base
{
	public function __construct(protected \phpbb\config\config $config, protected \phpbb\extension\manager $phpbb_extension_manager, protected \mot\sudoku\includes\mot_sudoku_functions $mot_sudoku_functions)
	{
	}

	/**
	* Runs this cron task.
	*/
	public function run() : void
	{
		$this->mot_sudoku_functions->check_rewards();

		// Set the last run config variable
		$this->config->set('mot_sudoku_reward_last_gc', time());
	}

	/**
	* Returns whether this cron task can run, given current board configuration.
	*/
	public function is_runnable() : bool
	{
		// Run only if UP is active and rewards are enabled, must not run if UP is deactivated
		return $this->phpbb_extension_manager->is_enabled('dmzx/ultimatepoints') && $this->config['mot_sudoku_points_enable'] && $this->config['mot_sudoku_reward_enable'];
	}

	/**
	* Returns whether this cron task should run now, because enough time
	* has passed since it was last run.
	*
	* The interval between topics tidying is specified in extension
	* configuration.
	*/
	public function should_run() : bool
	{
		return $this->config['mot_sudoku_reward_last_gc'] < time() - $this->config['mot_sudoku_reward_gc'];
	}
}
