<?php

declare(strict_types = 1)
;

namespace App\Controller;

use App\Connection\Connection;
use App\Model\Product;
use App\Model\Category;

class ProductController extends AbstractController
{
	public function readAction(): void
	{
		parent::render('product/list', (new Product())->read());
	}

	public function createAction(): void
	{
		if ($_POST) {
			extract($_POST);

			(new Product($name, $description, $image, $price, $quantity, $category))->create();

			echo "Categoria criada com sucesso!";
		}

		parent::render('product/add', (new Category())->read());
	}

	public function updateAction(): void
	{
		$id = $_GET['id'] ?? 0;

		if ($_POST) {
			extract($_POST);

			(new Product($name, $description, $image, $price, $quantity, $category))->update($id);

			header('Location: /produtos');
		}

		$data = [
			'category' => (new Category())->read(),
			'product' => (new Product())->read($id)[0]
		];

		parent::render('product/edit', $data);
	}

	public function deleteAction(): void
	{
		$id = $_GET['id'] ?? 0;

		(new Product())->delete($id);

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
