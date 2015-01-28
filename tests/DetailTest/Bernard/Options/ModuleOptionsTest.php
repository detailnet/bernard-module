<?php

namespace DetailTest\Bernard\Options;

class ModuleOptionsTest extends OptionsTestCase
{
    /**
     * @var \Detail\Bernard\Options\ModuleOptions
     */
    protected $options;

    protected function setUp()
    {
        $this->options = $this->getOptions(
            'Detail\Bernard\Options\ModuleOptions',
            array(
                'getDirectory',
                'setDirectory',
            )
        );
    }

    public function testDirectoryCanBeSet()
    {
        $directory = 'path/to/queues/directory';

        $this->assertNull($this->options->getDirectory());

        $this->options->setDirectory($directory);

        $this->assertEquals($directory, $this->options->getDirectory());
    }
}
