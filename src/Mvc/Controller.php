<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Zemit\Mvc;

use Zemit\Bootstrap;
use Zemit\Bootstrap\Config;
use Zemit\Db\Profiler;
use Zemit\Escaper;
use Zemit\Filter;
use Zemit\Identity;
use Zemit\Tag;
use Zemit\Utils;
use Xenolope\Quahog\Client as Clamav;

/**
 * Class Controller
 * {@inheritDoc}
 *
 * @author Julien Turbide <jturbide@nuagerie.com>
 * @copyright Zemit Team <contact@zemit.com>
 *
 * @since 1.0
 * @version 1.0
 *
 * @property Application $application
 * @property Bootstrap $bootstrap
 * @property Utils $utils
 * @property Profiler $profiler
 * @property Identity $identity
 * @property Config $config
 * @property Clamav $clamav
 * @property Tag $tag
 * @property Escaper $escaper
 * @property Filter $filter
 * @property Dispatcher $dispatcher
 * @property Router $router
 */
class Controller extends \Phalcon\Mvc\Controller
{

}
