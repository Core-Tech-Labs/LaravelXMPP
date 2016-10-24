<?php
namespace CTL\XMPPMessageBase\Test;

use CTL\XMPPMessageBase\IM;


class IMFacadeTest extends TestCase{

  public function testFacade(){
    $facade = IM::class;
    $this->assertEquals('CTL\XMPPMessageBase\IM', $facade);
  }

}