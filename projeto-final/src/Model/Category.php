<?php

declare(strict_types = 1)
;

namespace App\Model;
use App\Connection\Connection;

class Category
{
	private \PDO $conn;
	public function __construct(private
		string $name = '', private
		string $description = '')
	{
		$this->conn = Connection::getConnection();
	}

	public function create()
	{
		$query = "INSERT INTO category (name, description) VALUES ('{$this->name}', '{$this->description}')";

		$result = $this->conn->prepare($query);
		$result->execute();
	}

	public function read(string $id = '0')
	{
		$query = $id != '0'
			? "SELECT * FROM category WHERE id = {$id};"
			: 'SELECT * FROM category;';

		$result = $this->conn->prepare($query);
		$result->execute();

		return $result->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function update(string $id)
	{
		$query = "UPDATE category SET name = '{$this->name}', description = '{$this->description}' WHERE id = {$id};";

		$result = $this->conn->prepare($query);
		$result->execute();
	}

	public function delete(string $id)
	{
		$query = "DELETE FROM category WHERE id = {$id};";

		$result = $this->conn->prepare($query);
		$result->execute();
	}
}