<?php defined('SYSPATH') or die('No direct script access.');

if ( !empty($users) ): ?>

	<h2>User list</h2>
	<ul class="user_list">
	<?php foreach ( $users as $one_person ): ?>
		<li>
			<a href="http://twitter.com/<?php echo $one_person['name']; ?>">
				<img src="<?php echo $one_person['profile_image_url']; ?>" />
				<span><?php echo $one_person['name']; ?></span>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
<?php else: ?>

<h2>This list is empty</h2>

<?php endif; ?>