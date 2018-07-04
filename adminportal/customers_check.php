<?php
 $connect = mysqli_connect("127.0.0.1","root","","nationex_smartzip") or die("Connection Not Set Up");

	foreach($_GET as $key => $value) {
		$data[$key] = filter($value); // post variables are filtered
	}
	$typereg = $data['type'];
if($typereg){

	switch ($typereg) {
        case 'new':
		$old = "";
		break;

		case 'returning':
		$old = "yes";
		break;
	}
	$sql_newr_orders = mysqli_query($connect, "SELECT * FROM `register` WHERE `email` != '' AND `account_id`!='' AND `status`='Enabled' AND `old`='$old' ORDER BY ID DESC");
		$row_newr_orders = mysqli_num_rows($sql_newr_orders);
		$val_newr_orders = mysqli_fetch_assoc($sql_newr_orders);


}elseif(!$typereg){
		$sql_newr_orders = mysqli_query($connect, "SELECT * FROM `register` WHERE `email` != '' AND `account_id`!='' AND `status`='Enabled' ORDER BY ID DESC");
		$row_newr_orders = mysqli_num_rows($sql_newr_orders);
		$val_newr_orders = mysqli_fetch_assoc($sql_newr_orders);

		//$myregacct = $val_newr_orders['account_id'];

	}

?>
