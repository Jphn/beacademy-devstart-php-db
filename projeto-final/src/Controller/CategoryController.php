<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController
{
	public function readAction(): void
	{
		$con = Connection::getConnection();

		$result = $con->prepare('SELECT * FROM category;');
		$result->execute();

		parent::render('category/list', $result->fetchAll(\PDO::FETCH_ASSOC));
	}

	public function createAction(): void
	{
		if ($_POST) {
			extract($_POST);

			$query = "INSERT INTO category (name, description) VALUES ('{$name}', '{$description}')";

			$con = Connection::getConnection();

			$result = $con->prepare($query);
			$result->execute();

			echo "Categoria criada com sucesso!";
		}

		parent::render('category/add');
	}

	public function deleteAction(): void
	{
		$id = $_GET['id'] ?? 0;

		$con = Connection::getConnection();

		$query = "DELETE FROM category WHERE id = {$id};";

		$result = $con->prepare($query);
		$result->execute();

		parent::render('category/delete');
	}

	public function updateAction(): void
	{
		$id = $_GET['id'] ?? 0;

		$con = Connection::getConnection();

		if ($_POST) {
			extract($_POST);

			$query = "UPDATE category SET name = '{$name}', description = '{$description}' WHERE id = {$id};";

			$result = $con->prepare($query);
			$result->execute();
		}

		$query = "SELECT name, description FROM category WHERE id = {$id};";

		$result = $con->prepare($query);
		$result->execute();

		parent::render('category/edit', $result->fetch(\PDO::FETCH_ASSOC));
	}
}
