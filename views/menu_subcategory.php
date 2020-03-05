<?php
$a = 0;
?>
<?php foreach($subs as $sub): ?>
<li class="menu-item">
	<a href="<?php echo BASE_URL.'categories/enter/'.$sub['id']; ?>">
		<?php
		
		echo $sub['name'];

		?>
	</a>
</li>

<?php
if($a >= 4) {
	$a = 0;
	echo '</ol><ol class="sub-menu">';
} else {
	$a++;
}
?>
<?php
if(count($sub['subs']) > 0) {

	$this->loadView('menu_subcategory', array(
		'subs' => $sub['subs'],
		'level' => $level + 1
	));
}
?>
<?php endforeach; ?>