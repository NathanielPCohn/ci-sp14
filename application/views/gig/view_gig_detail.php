<?php
//views/gig/view_gig_detail.php

	//$this->load->view('header');
	/*
		string companyName
		string companyURL (optional)
		string companyEmail
		string companyPhone (optional)
		string gigType (can be full-time, part-time, volunteer, contract or internship)
		string gigLocation
		array gigCategories (can include art, design, development, programming, mobile, front-end, back-end and other)
		string positionTitle
		string positionId (optional)
		string positionDesc
	*/
?>
	
	<?php if($query->num_rows() > 0) : ?>
	<?php foreach($query->result() as $row) : ?>
	<section>
		<h1><?php echo $row->positionTitle . ' for '. $row->companyName; ?></h1>
		<p><?=$row->companyName;?></p>
		<p><?=$row->companyURL;?></p>
		<p><?=$row->companyEmail;?></p>
		<p><?=$row->companyPhone;?></p>
		<p><?=$row->gigType;?></p>
		<p><?=$row->gigLocation;?></p>
		<p><?=$row->gigCategories;?></p>
		<p><?=$row->positionTitle;?></p>
		<p><?=$row->positionId;?></p>
		<p><?=$row->positionDesc;?></p>
	</section>
	<?php endforeach; ?>
	<?php endif; ?>
<?php
	//$this->load->view('footer');

?>