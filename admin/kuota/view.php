<?php
session_start();
error_reporting(0);
$user = $_SESSION['username'];
 if(empty($user) )
 {
	echo "<script>
			alert('Anda Bukan Admin!');
			window.location.href='../login.php'
			</script>";
 }
?>
<style type="text/css">
		/* Table */
		body {
		font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana
			
		}
		.demo-table {
			vertical-align:top;
			border-collapse: collapse;
			font-size: 13px;
			text-align:left;
			margin-bottom: 100px;
			
		}
		.demo-table th, 
		.demo-table td {
			padding: 10px 20px;
		}
		.demo-table .title {
			caption-side: bottom;
			margin-top: 11px;
		}
		.demo-table thead th:last-child,
		.demo-table tfoot th:last-child,
		.demo-table tbody td:last-child {
			border: 1px;
		}

		/* Table Header */
		.demo-table thead th {
			border-right: 1px solid #c7ecc7;;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table tbody td {
			color: #353535;
			border-right: 1px solid #c7ecc7;
			table-layout:auto;
		}
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.demo-table tbody tr:nth-child(even) td {
			background-color: #87CEFA;
		}
		.demo-table tbody td:nth-child(4),
		.demo-table tbody td:first-child,
		.demo-table tbody td:last-child {
			text-align:left;
		}
		.demo-table tbody tr:hover td {
			background-color: #CCCCCC;
			border-color: #ffff0f;
			transition: all .2s;
		}

		/* Table Footer */
		.demo-table tfoot th {
			border-left: 1px solid #c7ecc7;
		}
		.demo-table tfoot th:first-child {
			text-align:left;
		}
		</style>
<html>
	<body>
		
		<center><h2>KUOTA</h2></center>
		<table class="demo-table" style="width:800px; margin-left: 80px">
		<a href="index.php?page=add_kuota">
	<button class="btn btn-primary" style="margin-bottom:10px; width: 160px; margin-right:680px;">
	Tambah Kuota</button></a>
		<thead style="background:#508abb; color: white;">
		<tr>
			<td align="center">Id Kuota</td >
			<td align="center">Kuota</td >
			<td align="center">Status Gunung</td >
			<td align="center">Bulan</td >
			<td align="center">Time</td >
			<td align="center">Action</td >
			
		</tr>
		</thead>

		  
<?php
include_once "koneksi.php";
error_reporting(0);

$sql = mysqli_query($koneksi," SELECT * FROM kuota");
if(!$sql){
echo mysqli_error();
}
while($data = mysqli_fetch_assoc($sql)){
	?>
	<tbody>
		<tr>
		<td><?php echo $data['id_kuota']; ?></td>
		<td><?php echo $data['kuota']; ?></td>
		<td><?php echo $data['status_gunung']; ?></td>
		<td><?php echo $data['bulan']; ?></td>
		<td><?php echo $data['time']; ?></td>
		<td><center><a href="index.php?page=edit_kuota&id_kuota=<?php echo $data['id_kuota']; ?>" 
		onClick = "return confirm('Apakah Anda ingin Mengedit  <?php echo $data['time']; ?>')" 
		button class="btn btn-info btn-md">Update </a>
			<a href="index.php?page=delete_kuota&deleteid_kuota=<?php echo $data['id_kuota']; ?>" 
			onClick = "return confirm('Apakah Anda ingin menghapus <?php echo $data['time']; ?>')" 
			button class="btn btn-danger btn-md">Hapus</a><center>
		</td>
		</tr>
	</tbody>
	
<?php
                      
}
?>
</table>

</body>
</html>
