<?php
namespace ModulesTests\ApplicationTest\Document;

use PHPUnit_Framework_TestCase;
use ModulesTests\ServiceManagerGrabber;

class UserTest extends PHPUnit_Framework_TestCase
{
    protected $serviceManager;

    public function setUp()
    {
        $serviceManagerGrabber   = new ServiceManagerGrabber();
        $this->serviceManager = $serviceManagerGrabber->getServiceManager();
    }

    public function testDatabaseIsConnected()
    {
        $dm = $this->serviceManager->get('doctrine.documentmanager.odm_default');
        $isConnected = $dm->getConnection()->isConnected();
        die(var_dump($isConnected));
        $this->assertTrue($isConnected);
    }

    public function testAtLeastOneUser()
    {
        $dm = $this->serviceManager->get('doctrine.documentmanager.odm_default');
        $count = $dm->getRepository('Application\Document\User')->count();
        $this->assertGreaterThanOrEqual(1, $count);
    }
}