<?php
/**
 * Cross Applicant Management
 *
 * @filesource
 * @copyright (c) 2013 Cross Solution (http://cross-solution.de)
 * @license   GPLv3
 */

namespace Acl\Assertion;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\Config;
use Acl\Assertion\AssertionManager;

/**
 * Factory for creating the Auth view helper.
 */
class AssertionManagerFactory implements FactoryInterface
{
    /**
     * Creates an instance of \Auth\View\Helper\Auth
     * 
     * - Injects the AuthenticationService
     * 
     * @param ServiceLocatorInterface $helpers
     * @return \Auth\View\Helper\Auth
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $configArray = $serviceLocator->get('Config');
        $configArray = isset($configArray['acl']['assertions'])
                     ? $configArray['acl']['assertions']
                     : array(); 
        $config      = new Config($configArray);
        $manager     = new AssertionManager($config);
        
        $manager->setShareByDefault(false);
        return $manager;
    }
}