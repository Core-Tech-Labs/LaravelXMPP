<?php

namespace CTL\XMPPMessageBase;

use Illuminate\Support\Facades\Facade;

class IM extends Facade{

  /**
   * Facade Acessor
   * @return [type] [description]
   */
  protected static function getFacadeAcessor(){
    return 'IM';
  }

}