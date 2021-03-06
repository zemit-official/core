<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */


namespace Zemit\Provider\Security;

use Zemit\Provider\AbstractServiceProvider;
use Zemit\Security;

/**
 * Class ServiceProvider
 *
 * @author Julien Turbide <jturbide@nuagerie.com>
 * @copyright Zemit Team <contact@zemit.com>
 *
 * @since 1.0
 * @version 1.0
 *
 * @package Zemit\Provider\Security
 */
class ServiceProvider extends AbstractServiceProvider
{
    const DEFAULT_WORK_FACTOR = 12;
    
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'security';
    
    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function register(\Phalcon\Di\DiInterface $di): void
    {
        $di->setShared($this->getName(), function() use ($di) {
            $config = $di->get('config');
            $security = new Security();
            
            $workFactor = self::DEFAULT_WORK_FACTOR;
            if (!empty($config->security->workfactor)) {
                $workFactor = (int)$config->security->workfactor;
            }
            
            $security->setWorkFactor($workFactor);
            
            return $security;
        });
    }
}
