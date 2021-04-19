<?php
#error_reporting(0);
include "koneksi.php";
//tambah data
if(isset($_POST['add']))
{
		$id_pendaki = $_POST['id_pendaki'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$jenis = $_POST['jenis'];
		$jumlah = $_POST['jumlah'];
		$berangkat = $_POST['berangkat'];
		$sampai = $_POST['sampai'];
		$total = $_POST['total'];
		$status = $_POST['status'];
		$id_kuota = $_POST['id_kuota'];
		$id_user = $_POST['id_user'];
		$sql = mysqli_query ( $koneksi," INSERT INTO booking set id_pendaki='$id_pendaki', nama='$nama', alamat='$alamat', email='$email', telp='$telp', jenis='$jenis', jumlah='$jumlah', berangkat='$berangkat', sampai='$sampai', total='$total', status='$status', id_kuota='$id_kuota', id_user='$id_user'");

		if($sql)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=booking' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=booking' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Success!</strong>
						</div>";
		}
}

//tambah edit
if(isset($_POST['edit']))
{
		$username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		$sql = mysqli_query ( $koneksi," UPDATE  user set username='$username', fullname='$fullname', password='$password' where id_user ='$id ' ");

		if($sql)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=user' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses edit Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=user' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses edit Success!</strong>
						</div>";
		}
}

if(isset($_GET['checkinid_pendaki']))
{
	$id   =  $_GET['checkinid_pendaki'];
		$del=mysqli_query($koneksi,"UPDATE booking set status='Check In' where id_pendaki='$id'");
		if($del)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=booking' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses Check In Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=booking' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses hapus Gagal!</strong>
						</div>";
		}
		
		
		
}
?>