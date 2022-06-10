<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class ProductController extends AbstractController
{
	public function readAction(): void
	{
		$con = Connection::getConnection();

		$result = $con->prepare('SELECT * FROM product;');
		$result->execute();

		parent::render('product/list', $result->fetchAll(\PDO::FETCH_ASSOC));
	}

	public function createAction(): void
	{
		$con = Connection::getConnection();

		if ($_POST) {
			extract($_POST);
			$createdAt = date('Y-m-d H:i:s');

			$query = "INSERT INTO product (name, description, image, price, quantity, categoryId, createdAt)
			VALUES
			(
				'{$name}',
				'{$description}',
				'{$image}',
				{$price},
				{$quantity},
				{$category},
				'{$createdAt}'
			)";

			$result = $con->prepare($query);
			$result->execute();

			echo "Categoria criada com sucesso!";
		}

		$query = "SELECT * FROM category;";

		$result = $con->prepare($query);
		$result->execute();

		parent::render('product/add', $result->fetchAll(\PDO::FETCH_ASSOC));
	}

	public function updateAction(): void
	{
		$id = $_GET['id'] ?? 0;

		$con = Connection::getConnection();

		if ($_POST) {
			extract($_POST);

			$query = "UPDATE product SET
				name = '{$name}',
				description = '{$description}',
				image = '{$image}',
				price = {$price},
				quantity = {$quantity},
				categoryId = {$category}
			WHERE id = {$id};";

			$result = $con->prepare($query);
			$result->execute();

			header('Location: /produtos');
		}

		$query = "SELECT * FROM product WHERE id = {$id};";

		$product = $con->prepare($query);
		$product->execute();

		$query = "SELECT * FROM category;";

		$category = $con->prepare($query);
		$category->execute();

		$data = [
			'category' => $category->fetchAll(\PDO::FETCH_ASSOC),
			'product' => $product->fetch(\PDO::FETCH_ASSOC),
		];

		parent::render('product/edit', $data);
	}

	public function deleteAction(): void
	{
		$id = $_GET['id'] ?? 0;

		$con = Connection::getConnection();

		$query = "DELETE FROM product WHERE id = {$id};";

		$result = $con->prepare($query);
		$result->execute();

		parent::render('product/delete');
	}

	public function reportAction(): void
	{
		$con = Connection::getConnection();

		$query = "SELECT pro.id, pro.name, pro.categoryId, pro.quantity, pro.price, cat.name AS category FROM product pro INNER JOIN category cat ON pro.categoryId = cat.id;";

		$result = $con->prepare($query);
		$result->execute();

		$html = "
			<table border='1' width='100%'>
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Qntd.</th>
						<th>Preço</th>
						<th>Categoria</th>
					</tr>
				</thead>
				<tbody>
		";

		foreach ($result->fetchAll(\PDO::FETCH_ASSOC) as $product) {
			extract($product);
			$html .= "
				<tr>
					<td>{$id}</td>
					<td>{$name}</td>
					<td>{$quantity}</td>
					<td>{$price}</td>
					<td>{$category}</td>
				</tr>
			";
		}

		$html .= "
				</tbody>
			</table>
		";

		parent::toPDF($html);
	}
}
