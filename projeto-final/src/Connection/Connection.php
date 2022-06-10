<?php

declare(strict_types=1);

namespace App\Connection;

use PDO;

abstract class Connection
{
	public static function getConnection(): \PDO
	{
		$hostname = 'localhost';
		$database = 'store';
		$username = 'root';
		$password = '123';

		return new \PDO("mysql:host={$hostname};dbname={$database}", $username, $password);
	}
}