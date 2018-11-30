<?php

namespace Zemit\Core\Cli\Tasks;

use Zemit\Core\Cli\Task;

class HelpTask extends Task
{
    /**
     * @var string
     */
    public $consoleDoc = <<<DOC
Usage:
  zemit console <task> [<action>] [<params> ...]

Options:
  task: build,cron


DOC;
    
    public function buildAction() {
        $this->dispatcher->forward(['task' => 'build', 'action' => 'help']);
    }
    
    public function CronAction() {
        $this->dispatcher->forward(['task' => 'cron', 'action' => 'help']);
    }
}