<?php
//views/mailing_list/add_mailing_list.php
//an add form to add an item to the table
/*
	first_name: John
	last_name: Doe
	email: 
	address
	state_code
	zip_postal
	username
	password
	bio
	interests
	num_tours
*/
echo '<p></p>';
echo validation_errors();

?>
<h1>Add to Mailing List</h1>
<?=form_open('mailing_list/insert');?>
<?php
$first_name = array(
'name' => 'first_name',
'id' => 'first_name',
);
echo form_label('First Name','first_name') . ': ';
echo form_input($first_name) . '<br />';

$last_name = array(
'name' => 'last_name',
'id' => 'last_name',
);
echo form_label('Last Name','last_name') . ': ';
echo form_input($last_name) . '<br />';

$email = array(
'name' => 'email',
'id' => 'email',
);
echo form_label('Email','email') . ': ';
echo form_input($email) . '<br />';

$address = array(
'name' => 'address',
'id' => 'address',
);
echo form_label('Address','address') . ': ';
echo form_input($address) . '<br />';

$zip_postal = array(
'name' => 'zip_postal',
'id' => 'zip_postal',
);
echo form_label('Zip Code','zip_postal') . ': ';
echo form_input($zip_postal) . '<br />';

$num_tours1 = array(
'name' => 'num_tours',
'id' => 'num_tours1',
'value' => '0',
'checked' => TRUE,
);
$num_tours2 = array(
'name' => 'num_tours',
'id' => 'num_tours2',
'value' => '1-3',
);
$num_tours3 = array(
'name' => 'num_tours',
'id' => 'num_tours3',
'value' => '4-6',
);

echo '<fieldset>';
echo '<legend>Number of tours: </legend>';
echo form_label('None','num_tours1') . ': ';
echo form_radio($num_tours1) . '<br />';
echo form_label('1-3','num_tours2') . ': ';
echo form_radio($num_tours2) . '<br />';
echo form_label('4-6','num_tours3') . ': ';
echo form_radio($num_tours3) . '<br />';
echo '</fieldset>';
?>


<?=form_close();?>