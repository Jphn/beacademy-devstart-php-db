<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
	protected function render(string $viewName, array $data = null): void
	{
		include __DIR__ . '/../View/_partials/header.php';
		include __DIR__ . "/../View/{$viewName}.php";
		include __DIR__ . '/../View/_partials/footer.php';
	}

	protected function toPDF(string $html): void
	{
		include __DIR__ . '/../View/report.php';
	}
}
