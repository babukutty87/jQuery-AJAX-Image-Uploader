<?php
	$fieldname = $_REQUEST['fieldname'];
	$uploaddir = 'path/to/upload/directory/';
	$uploadfile = $uploaddir.basename($_FILES[$fieldname]['name']);
	
	if(move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadfile)) {
		echo 'uploads/'.basename($_FILES[$fieldname]['name']); // success
	}else{
		// WARNING! DO NOT USE "FALSE" STRING AS A RESPONSE!
		// Otherwise onSubmit event will not be fired
		echo 'error';
	};
?>
