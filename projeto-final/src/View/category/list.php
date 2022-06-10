<h1 class="mb-3">Lista de categorias</h1>

<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Ações</th>
	</thead>
	<tbody>
		<?php

		foreach ($data as $category) {
			extract($category);

			echo '<tr>';

			echo "<th>{$id}</th>";
			echo "<td>{$name}</td>";
			echo "<td>{$description}</td>";
			echo "<td>
			<a class='btn btn-warning btn-sm' href='/categories/update?id={$id}'>Editar</a>
			<a class='btn btn-danger btn-sm' href='/categories/delete?id={$id}'>Apagar</a>
			</td>";

			echo '</tr>';
		}

		?>
	</tbody>
</table>