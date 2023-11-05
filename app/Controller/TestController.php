<?php 

class TestController extends AppController
{
    public function index()
    {
        $test = 'hello cebu';
        $this->set('test', $test);
    }
}