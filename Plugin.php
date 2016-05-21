<?php

/**
 * Test Plugin.
*/
class TestPlugin extends \Enact\Plugin {



    public function name(){
        return 'TestPlugin';
    }//name


    public function creator(){
        return 'WebYoke';
    }//creator


    public function website(){
        return 'http://webyoke.com';
    }//website


    public function version(){
        return 1.0;
    }//version


    public function githubLink(){
        return 'https://github.com/webyoke/test-plugin';
    }//githubLink



}//CodePlugin

return new TestPlugin;
