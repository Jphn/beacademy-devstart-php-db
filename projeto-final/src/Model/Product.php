<?php

declare(strict_types = 1)
;

namespace App\Model;
use App\Connection\Connection;

class Product
{
	private \PDO $conn;
	private string $createdAt;

	public function __construct(private
		string $name = '', private
		string $description = '', private
		string $image = '', private
		string $price = '0', private
		string $quantity = '0', private
		string $categoryId = '0'
		)
	{
		$this->createdAt = date('Y-m-d H:i:s');
		$this->conn = Connection::getConnection();
	}

	public function create()
	{
		$query = "INSERT INTO product (name, description, image, price, quantity, categoryId, createdAt)
		VALUES
		(
			'{$this->name}',
			'{$this->description}',
			'{$this->image}',
			{$this->price},
			{$this->quantity},
			{$this->categoryId},
			'{$this->createdAt}'
		)";

		$result = $this->conn->prepare($query);
		$result->execute();
	}

	public function read(string $id = '0')
	{
		$query = $id != '0'
			? "SELECT * FROM product WHERE id = {$id};"
			: 'SELECT * FROM product;';

		$result = $this->conn->prepare($query);
		$result->execute();

		return $result->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function update(string $id)
	{
		$query = "UPDATE product SET
			name = '{$this->name}',
			description = '{$this->description}',
			image = '{$this->image}',
			price = {$this->price},
			quantity = {$this->quantity},
			categoryId = {$this->categoryId}
		WHERE id = {$id};";

		$result = $this->conn->prepare($query);
		$result->execute();
	}

	public function delete(string $id)
	{
		$query = "DELETE FROM product WHERE id = {$id};";

		$result = $this->conn->prepare($query);
		$result->execute();
	}
}