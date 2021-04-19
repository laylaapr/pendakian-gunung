	<?php
	if (isset($_GET['page'])){
	$page = $_GET['page'];
switch ($page){
	case 'default':
	include "default.php";
	break;
	
	case 'user':
	include "user/view.php";
	break;
	case 'add_user':
	include "user/add.php";
	break;
	case 'edit_user':
	include "user/edit.php";
	break;
	case 'delete_user':
	include"user/crud.php";
	break;
	case 'kuota':
	include "kuota/view.php";
	break;
	case 'add_kuota':
	include "kuota/add.php";
	break;
	case 'edit_kuota':
	include "kuota/edit.php";
	break;
	case 'delete_kuota':
	include"kuota/crud.php";
	break;
	case 'booking':
	include "booking/view.php";
	break;
	
	case 'add_booking':
	include "booking/add.php";
	break;
	case 'cetak':
	include "booking/struk.php";
	break;
	
	case 'checkin':
	include "booking/crud.php";
	break;
	
	case 'logout':
	include "logout.php";
	break;
	
	default:
	echo"<center><h3>MAAF, HALAMAN TIDAK DITEMUKAN!</h3></center>";
	break;
	}
	}else{
	include "default.php";
	}
	?>	