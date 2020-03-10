<?php
class Connection
{
 
    private static $dbHost = 'localhost::3308' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
    private static $dbName = '' ; 
    private static $con  = null;
    
    public function __construct()
    {
        die("we have a problem in the connection");
    }
    function __destruct()
    {
        self::$con = null;
    }
    public static function connection()
    {
        if(self::$con == null)
        {
            try
            {
             self::$con =  new mysqli(self::$dbHost,self::$dbUsername,self::$dbUserPassword,self::$dbName);
                
            }catch(Exception $e)
            {
           echo "error :-> ".$e->getmessage();
            }
        }
        return self::$con;
    }
    
    
    
    public static function select ($query)
    {   
        try
        {
        $result = self::connection()->query($query);
        return  $result;
        }catch(Exception $e)
        {
            echo "we have a problem in the select";
        }
    }
}
