<?php
//views/mailing_list/view_mailing_list.php
if($query->num_rows() > 0):
?>

	<?php foreach($query->result() as $row) : ?>

		<?=$row->userid;?>
		<?=$row->first_name;?>
		<?=$row->last_name;?>


	<?php endforeach; ?>

<?php endif; ?>