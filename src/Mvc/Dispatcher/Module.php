<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Zemit\Mvc\Dispatcher;

use Zemit\Di\Injectable;
use Phalcon\Mvc\DispatcherInterface;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Events\Event;
use Phalcon\Text;

/**
 * Class Module
 * @todo make it work?
 *
 * @author Julien Turbide <jturbide@nuagerie.com>
 * @copyright Zemit Team <contact@zemit.com>
 *
 * @since 1.0
 * @version 1.0
 *
 * @package Zemit\Mvc\Dispatcher
 */
class Module extends Injectable
{
    public function beforeDispatchLoop(Event $event, DispatcherInterface $dispatcher)
    {
        $module = $this->getDI()->get('config')->modules->{$dispatcher->getModuleName()};
        if (is_array($module) || $module instanceof \Traversable) {
            foreach ($module as $module) {
                if (is_callable($module)) {
                }
            }
        }
    }
}
