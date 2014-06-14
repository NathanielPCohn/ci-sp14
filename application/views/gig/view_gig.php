<?php
//views/gig/view_gig.php

	//$this->load->view('header');
?>
	<h1><?php echo $title; ?></h1>
	<?php if($query->num_rows() > 0) : ?>
	<section>
		<?php foreach($query->result() as $row) : ?>
		<p>
			<h4>
				<?php echo $row->positionTitle . ' for '. $row->companyName . '<br />'; ?>
			</h4>
			<?php
				echo anchor('gig/view/' . $row->id, 'See Gig');
			?>
		</p>
		<?php endforeach; ?>
		<?php echo $links; ?>
	</section>
	<?php endif; ?>
<?php
	//$this->load->view('footer');

?>