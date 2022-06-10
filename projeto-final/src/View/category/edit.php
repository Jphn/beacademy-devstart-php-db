<h1>Edit dentro da view list</h1>

<form action="" method="POST">
	<input name="name" type="text" class="form-control" placeholder="Digite o nome da categoria..."
		value="<?php echo $data['name']; ?>">
	<textarea name="description" class="form-control"
		placeholder="Digite a descrição..."><?php echo $data['description']; ?></textarea>

	<button type="submit" class="btn btn-primary">Atualizar!</button>
</form>