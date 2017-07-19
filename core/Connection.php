 <?php

 class Connection
 {
 	public static function make()
 	{
 		$db = include ROOT.'/config/db.php';

 		$config = $db[BDCONNECTION];
    try {
			return new PDO(
				$config['driver'].':host='.$config['host'].';dbname='.$config['database'], 
				$config['username'],
				$config['password'],
				$config['options']
			);

		} catch (PDOException $e) {
			die($e->getMessage());
		}
 	}
 }
