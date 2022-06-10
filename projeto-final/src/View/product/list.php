<h1 class="mb-3">Lista de produtos</h1>

<div class="mb-3 text-start">
	<a class='btn btn-primary' href='/produtos/adicionar'>Adicionar</a>
	<a class='btn btn-info' href='/produtos/relatorio'>Gerar PDF</a>
</div>

<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Imagem</th>
			<th>Descrição</th>
			<th>Preço</th>
			<th>Quantidade</th>
			<th>Ações</th>
	</thead>
	<tbody>
		<?php

		foreach ($data as $product) {
			extract($product);

			echo '<tr>';

			echo "<th>{$id}</th>";
			echo "<td>{$name}</td>";
			echo "<td><img src='{$image}' width='70'></td>";
			echo "<td>{$description}</td>";
			echo "<td>{$price}</td>";
			echo "<td>{$quantity}</td>";
			echo "<td>
			<a class='btn btn-warning btn-sm m-1' href='/produtos/atualizar?id={$id}'>Editar</a>
			<a class='btn btn-danger btn-sm m-1' href='/produtos/deletar?id={$id}'>Apagar</a>
			</td>";

			echo '</tr>';
		}

		?>
	</tbody>
</table>