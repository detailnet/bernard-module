<?php

namespace DetailTest\Bernard\Factory\Options;

use PHPUnit_Framework_TestCase as TestCase;

use Zend\ServiceManager\ServiceManager;

use Detail\Bernard\Factory\Options\ModuleOptionsFactory;

class ModuleOptionsFactoryTest extends TestCase
{
    public function testCreateService()
    {
        $moduleOptions = $this->createModuleOptions(array('bernard' => array()));

        $this->assertInstanceOf('Detail\Bernard\Options\ModuleOptions', $moduleOptions);
    }

    public function testCreateServiceThrowsExceptionForInvalidConfiguration()
    {
        $this->setExpectedException('Detail\Bernard\Exception\ConfigException');
        $this->createModuleOptions();
    }

    protected function createModuleOptions(array $options = array())
    {
        $serviceManager = new ServiceManager();
        $serviceManager->setService('Config', $options);

        $factory = new ModuleOptionsFactory();

        return $factory->createService($serviceManager);
    }
}
