<?php
class Example3Test extends PHPUnit_Extensions_Selenium2TestCase
{
    public static function browsers()
    {
        return array(
            array(
                 'host' => '127.0.0.1',
                 'port' => 4444,
                 'browser' => 'firefox test browser',
                 'browserName' => 'firefox', 
            ),
            array(
                 'host' => '127.0.0.1',
                 'port' => 4444,
                 'browser' => 'chrome test browser',
                 'browserName' => 'chrome', 
            ),
            array(
                 'host' => '127.0.0.1',
                 'port' => 4445,
                 'browser' => 'ie test browser',
                 'browserName' => 'ie', 
            ),            
        );        
    }
    
    public function setup()
    {
        $this->setBrowserUrl('http://www.google.com/');
    }    
    
    public function test_click()
    {
        $this->url('/');
        $testImage = new imagick();
        $testImage->readimageblob($this->currentScreenshot());
        $testImage->writeimage(__DIR__."/screenshot/{$this->getBrowser()}.jpg");
    }

}