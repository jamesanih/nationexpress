<?php

	foreach($_GET as $key => $value) {
		$data[$key] = filter($value); // post variables are filtered
	}
	$status = $data['status'];

		switch ($status || $b_status) {
        case 'order_booked':
		$mystatus = "Order Booked";

		break;
        case 'order_cancelled':
		$mystatus = "Order Cancelled";

		break;
		case 'undelivered':
		$mystatus = "Undelivered";

		break;
		case 'in_transit':
		$mystatus = "In Transit";

		break;
		case 'delivered':
		$mystatus = "Delivered";

		break;
		case 'out_for_delivery':
		$mystatus = "Out for Delivery";

		break;
	}

	if($status){
	$sql_tr_orders = mysqli_query($connect, "SELECT * FROM `tracking_details` WHERE `account_id`!='' AND `status`='$status' AND `old`='' ORDER BY id DESC");
	$row_tr_orders = mysqli_num_rows($sql_tr_orders);
	$val_tr_orders = mysqli_fetch_assoc($sql_tr_orders);
	}
	elseif(!$status){
	$sql_tr_orders = mysqli_query($connect, "SELECT * FROM `tracking_details` WHERE `account_id`!='' AND `status`!='' AND `old`='' ORDER BY id DESC");
	$row_tr_orders = mysqli_num_rows($sql_tr_orders);
	$val_tr_orders = mysqli_fetch_assoc($sql_tr_orders);
	}
	$myaccount_id = $val_tr_orders['account_id'];
	$b_status = $val_tr_orders['status'];

?>
