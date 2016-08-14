<?php require VIEW_ROOT . '/templates/header.php'; ?>
	
	<?php if (empty($pages)): ?>
		<p>Sorry there are no pages here at the moment!</p>
	<?php else: ?>	
		<table>
			<thead>
				<tr>
					<th>Label</th>
					<th>Title</th>
					<th>Slug</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pages as $page): ?>
					<tr>
						<td><?php echo escape($page['label']); ?></td>
						<td><?php echo escape($page['title']); ?></td>
						<td><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug'] ?>"><?php echo escape($page['slug']); ?></td>
						<td><a href="">Edit</a></td>
						<td><a href="">Delete</a></td>
					</tr>
			</tbody>
				<?php endforeach; ?>	
		</table>
	<?php endif; ?>
	<a href="<?php echo BASE_URL;?>/admin/add.php">Add a new page</a>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>