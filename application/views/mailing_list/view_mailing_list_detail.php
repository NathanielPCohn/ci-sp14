<?php
//views/mailing_list/view_mailing_list_detail.php
if($query->num_rows() > 0):
?>

	<?php foreach($query->result() as $row) : ?>
	<h1><?=$row->first_name;?> <?=$row->last_name;?> </h1>
	<p>
		<?php
		/* 
		 Modify	userid	first_name	last_name	email	address	state_code	zip_postal	username	password	bio	interests	num_tours */
		?>
		
		<p>userid: <?=$row->userid;?></p>
		<p>first_name:<?=$row->first_name;?></p>
		<p>last_name: <?=$row->last_name;?></p>
		<p>email: <?=$row->email;?></p>
		<p>address: <?=$row->address;?></p>
		<p>state_code: <?=$row->state_code;?></p>
		<p>zip_postal: <?=$row->zip_postal;?></p>
		<p>username: <?=$row->username;?></p>
		<p>password: <?=$row->password;?></p>
		<p>bio: <?=$row->bio;?></p>
		<p>interests: <?=$row->interests;?></p>
		<p>num_tours: <?=$row->num_tours;?></p>
	</p>

	<?php endforeach; ?>

<?php endif; ?>