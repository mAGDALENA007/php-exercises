<?php require('001partials/head.php'); ?>

<br><br>
	<h4> Class - podstawy działania </h4>
	<p>Lista toDo.</p>
<br><br>

<ul>
	<?php foreach ($tasks as $task) : ?>
		<li>

			<?php if ($task->completed) : ?>
				<strike><?= $task->description; ?></strike> /*output DESCRIPTION */
			
			<?php else: ?>
				<?= $task->description; ?>
			<?php endif; ?>	

		</li>

	<?php endforeach; ?>
</ul>

<?php require('001partials/footer.php'); ?>