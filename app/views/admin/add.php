<?php require VIEW_ROOT . '/templates/header.php'; ?>
	
	<h2>Add a Page</h2>
	<form method="POST" action="<?php echo BASE_URL; ?>/admin/add.php"  autocomplete="off">
		<label for="title">
			Title
			<input type="text" name="title" id="title">
		</label>
		
		<label for="label">
			Label
			<input type="text" name="label" id="label">
		</label>

		<label for="slug">
			Slug
			<input type="text" name="slug" id="slug">
		</label>

		<label for="body">
			Body
			<textarea name="body" id="body" cols="30" rows="10"></textarea>

			<input type="submit" value="ADD">
		</label>

	</form>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
