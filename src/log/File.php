<?php
namespace Test\log;

use Test\run\Base;

class File extends Base{
    public function run()
    {
        return $this;
    }

    public function write(){
        print_r('hello word');
    }
}