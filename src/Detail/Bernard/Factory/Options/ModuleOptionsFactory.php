<?php

namespace Detail\Bernard\Factory\Options;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use Detail\Bernard\Exception\ConfigException;
use Detail\Bernard\Options\ModuleOptions;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * @return ModuleOptions
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        if (!isset($config['bernard'])) {
            throw new ConfigException('Config for Bernard is not set');
        }

        return new ModuleOptions($config['bernard']);
    }
}
