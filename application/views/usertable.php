<?php defined('SYSPATH') or die('No direct script access.');

if ( !empty($users) ): ?>

	<h2>User list</h2>
	<ul class="user_list">
	<?php foreach ( $users as $one_person ): ?>
		<li>
			<img src="<?php echo $one_person['profile_image_url']; ?>" />
			<p><?php echo $one_person['name']; ?></p>
		</li>
	<?php endforeach; ?>
	</ul>
<?php else: ?>

<h2>This list is empty</h2>

<?php endif; ?>