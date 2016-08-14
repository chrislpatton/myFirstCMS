<?php require VIEW_ROOT . '/templates/header.php'; ?>
	<?php if (!$page): ?>
		<p>Sorry, there is no page found here!</p>
	<?php else: ?>
		<h2><?php echo escape($page['title']); ?></h2>
		<p><?php echo escape($page['body']); ?></p>	
		<p class="faded">Created on <?php echo $page['created']->format('M jS Y h:i a'); ?>
			<?php if($page['updated']):?>
				Last updated on <?php echo $page['updated']->format('M jS Y h:i a'); ?>
			<?php endif; ?>
		</p>
	<?php endif; ?>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>