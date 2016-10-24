<?php
namespace CTL\XMPPMessageBase\Test;

use CTL\XMPPMessageBase\IMServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase{

  protected function getServiceProviderClass($app){
    return IMServiceProvider::class;
  }

}