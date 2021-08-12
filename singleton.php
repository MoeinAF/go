<?php
//General singleton class 
class Singleton 
{
    //Hold the class instance
    private static $instance = null;
    //The constructor is private 
    //To prevent inition to outer code
    private function __construct() 
    {
            // The expensive process (e.g.,db connection) goes here.
    }
    //The object is created from within the class itself
    //Only if the class has no instance.
    public static function getInstance()
    {
        if(self::$instance == null) 
        {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}