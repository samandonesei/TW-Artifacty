<html>
<body>
<?php
    $conn = oci_connect('TW', 'TW', 'localhost/XE');
    if (!$conn){
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        exit();
    }
	$comand = 
'BEGIN
  Administrator.remove_user(\''.$_GET['NameField'].'\',\''.$_GET['passField'].'\');

END;';
    $instruction = oci_parse($conn, $comand);
    oci_execute($instruction);
	ECHO "ADMIN DEleted";
?>
</body>
</html> 
