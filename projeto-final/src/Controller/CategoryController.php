<?php

declare(strict_types = 1)
;

namespace App\Controller;

use App\Connection\Connection;
use App\Model\Category;

class CategoryController extends AbstractController
{
	public function readAction(): void
	{
		$result = (new Category())->read();

		parent::render('category/list', $result);
	}

	public function createAction(): void
	{
		if ($_POST) {
			extract($_POST);

			(new Category($name, $description))->create();

			echo "Categoria criada com sucesso!";
		}

		parent::render('category/add');
	}

	public function deleteAction(): void
	{
		$id = $_GET['id'] ?? '0';

		(new Category())->delete($id);

		parent::render('category/delete');
	}

	public function updateAction(): void
	{
		$id = $_GET['id'] ?? '0';

		if ($_POST) {
			extract($_POST);

			(new Category($name, $description))->update($id);
		}

		$result = (new Category())->read($id);

		parent::render('category/edit', $result[0]);
	}
}
