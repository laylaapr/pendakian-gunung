<?php
#error_reporting(0);
include "koneksi.php";
//tambah data
if(isset($_POST['add']))
{
		$id_kuota = $_POST['id_kuota'];
		$kuota = $_POST['kuota'];
		$status_gunung = $_POST['status_gunung'];
		$bulan = $_POST['bulan'];
		$time = $_POST['time'];
		$sql = mysqli_query ( $koneksi," INSERT INTO kuota set id_kuota='$id_kuota', kuota='$kuota', status_gunung='$status_gunung', bulan='$bulan', time='$time' ");

		if($sql)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=kuota' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=kuota' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Gagal!</strong>
						</div>";
		}
}

//tambah edit
if(isset($_POST['edit']))
{
		$id_kuota = $_POST['id_kuota'];
		$kuota = $_POST['kuota'];
		$status_gunung = $_POST['status_gunung'];
		$bulan = $_POST['bulan'];
		$time = $_POST['time'];
		$sql = mysqli_query ( $koneksi," UPDATE kuota set id_kuota ='$id_kuota', kuota='$kuota', status_gunung='$status_gunung', bulan='$bulan', time='$time' where id_kuota ='$id_kuota' ");

		if($sql)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=kuota' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses edit Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=kuota' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses edit Gagal!</strong>
						</div>";
		}
}
//tambah delete
if(isset($_GET['deleteid_kuota']))
{
	$id   =  $_GET['deleteid_kuota'];
		$del=mysqli_query($koneksi,"DELETE from kuota where id_kuota='$id'");
		if($del)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=kuota' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses Hapus Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=kuota' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses hapus Gagal!</strong>
						</div>";
		}
		
		
		
}
?>