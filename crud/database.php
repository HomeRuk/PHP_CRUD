<?php
class Database 
{
	private static $dbName = 'sergoAxcNFBkFLx8' ; 
	private static $dbHost = 'ap-cdbr-azure-southeast-a.cloudapp.net' ;
	private static $dbUsername = 'bba43fb849e57c';
	private static $dbUserPassword = '12676c3a';
	
	private static $cont  = null;
	
	public function __construct() {
		exit('Init function is not allowed');
	}
	
	public static function connect()
	{
	   // One connection through whole application
       if ( null == self::$cont )
       {      
        try 
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$cont;
	}
	
	public static function disconnect()
	{
		self::$cont = null;
	}
}
?>