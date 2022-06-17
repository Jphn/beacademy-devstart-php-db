<h1>Edit dentro da view list</h1>

<form action="" class="mt-3" method="POST">
	<input name="name" type="text" class="form-control" placeholder="Digite o nome da categoria..."
		value="<?php echo $data['name']; ?>">
	<textarea name="description" class="form-control mt-1"
		placeholder="Digite a descrição..."><?php echo $data['description']; ?></textarea>

	<button type="submit" class="mt-3 btn btn-primary">Atualizar!</button>
</form>