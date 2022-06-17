<h1 class="mb-3">Editar o produto</h1>

<hr>

<form action="" method="POST">
	<select name="category" class="form-control mt-3" required>
		<option value="" selected disabled>SELECIONE UMA CATEGORIA</option>
		<?php
foreach ($data['category'] as $category) {
	extract($category);

	echo "<option value='{$id}'>{$name}</option>";
}
?>
	</select>
	<?php
extract($data['product']);
?>
	<input value="<?php echo $name; ?>" required name="name" type="text" class="form-control mt-2" placeholder="Digite o nome da categoria...">
	<input value="<?php echo $image; ?>" required name="image" type="text" class="form-control mt-2" placeholder="Cole aqui a url da imagem...">
	<input value="<?php echo $price; ?>" required name="price" type="number" class="form-control mt-2" placeholder="Digite o valor do produto...">
	<input value="<?php echo $quantity; ?>" required name="quantity" type="text" class="form-control mt-2" placeholder="Quantidade disponível...">
	<textarea required name="description" class="form-control mt-2" placeholder="Digite a descrição..."><?php echo $description; ?></textarea>

	<button type="submit" class="btn btn-primary mt-3">Atualizar!</button>
</form>