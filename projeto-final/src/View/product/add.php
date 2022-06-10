<h1 class="mb-3">Cadastrar um novo produto</h1>

<hr>

<form action="" method="POST">
	<select name="category" class="form-control mt-3" required>
		<option selected disabled>SELECIONE UMA CATEGORIA</option>
		<?php
		foreach ($data as $category) {
			extract($category);

			echo "<option value='{$id}'>{$name}</option>";
		}
		?>
	</select>
	<input required name="name" type="text" class="form-control mt-2" placeholder="Digite o nome da categoria...">
	<input required name="image" type="text" class="form-control mt-2" placeholder="Cole aqui a url da imagem...">
	<input required name="price" type="number" class="form-control mt-2" placeholder="Digite o valor do produto...">
	<input required name="quantity" type="text" class="form-control mt-2" placeholder="Quantidade disponível...">
	<textarea required name="description" class="form-control mt-2" placeholder="Digite a descrição..."></textarea>

	<button type="submit" class="btn btn-primary mt-3">Enviar!</button>
</form>