<?php


?>
<h1>Where would you like directions to?</h1>
<?=form_open('directions/map');?>

<?php
$address = array(
'name' => 'address',
'id' => 'address',
'value' => set_value('address',''),
);
echo form_label('Address','address') . ': ';
echo form_input($address);
?>

<?=form_submit('submit','Find Address');?>
<?=form_close();?>