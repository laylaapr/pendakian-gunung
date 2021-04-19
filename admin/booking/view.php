<?php
include_once "koneksi.php";
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
	<body style="background-color: white;">
		
		<center><h2>DATA BOOKING</h2></center>
		<table class="demo-table" style="width:800px;" >
			<form id="form-capacity" class="form-horizontal" method="post">
          <div class="box-body">
                <div class="form-group">
                <label class="col-sm-2 control-label">Cari</label>
                <div class="col-sm-10" style="margin-bottom: 10px;">
                	<input type="text" name="sc" class="form-control" placeholder="Inputkan Id Pendaki">
                </div>

                <div class="form-group">
    				<button type="submit" class="btn btn-primary" name="submit">Cari</button>
    			</div>
                </div>
            </div>
            </form>
		<thead style="background:#508abb; color: white;">
		<tr>
			<td align="center">Id Pendaki</td >
			<td align="center">Nama</td >
			<td align="center">Telepon</td >
			<td align="center">Jumlah</td >
			<td align="center">Berangkat</td >
			<td align="center">Sampai</td >
			<td align="center">Total</td >
			<td align="center">Action</td >
			<td align="center">Struk</td >
			
		</tr>
		</thead>

		  
<?php
if(!isset($_POST['submit'])){
		$sql = mysqli_query($koneksi," SELECT id_pendaki, nama, telp, jumlah, berangkat, sampai, total FROM booking where status='Booking'");

while($data = mysqli_fetch_array($sql)){
	?>
	<tbody>
		<tr>
		<td><?php echo $data['id_pendaki']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['telp']; ?></td>
		<td><?php echo $data['jumlah']; ?></td>
		<td><?php echo $data['berangkat']; ?></td>
		<td><?php echo $data['sampai']; ?></td>
		<td><?php echo $data['total']; ?></td>
		<td><center><a href="index.php?page=checkin&checkinid_pendaki=<?php echo $data['id_pendaki']; ?>" 
		onClick = "return confirm('Check In? <?php echo $data['nama']; ?>')" 
		button class="btn btn-info btn-md">Check In </a><center>
		</td>
		<td><center><a href="index.php?page=cetak&id_pendaki=<?php echo $data['id_pendaki']; ?>" 
		onClick = "return confirm('Cetak Struk  <?php echo $data['nama']; ?>?')" 
		button class="btn btn-info btn-md">Cetak </a><center>
		</td>
		</tr>
	</tbody>
	
<?php
                      
}
}
?>
<?php
if(isset($_POST['submit'])){
	$cari = $_POST['sc'];
		$sql = mysqli_query($koneksi," SELECT id_pendaki, nama, telp, jumlah, berangkat, sampai, total FROM booking where status='Booking' and id_pendaki like '%$cari%'");
		
while($data = mysqli_fetch_array($sql)){
	?>
	<tbody>
		<tr>
		<td><?php echo $data['id_pendaki']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['telp']; ?></td>
		<td><?php echo $data['jumlah']; ?></td>
		<td><?php echo $data['berangkat']; ?></td>
		<td><?php echo $data['sampai']; ?></td>
		<td><?php echo $data['total']; ?></td>
		<td><center><a href="index.php?page=checkin&checkinid_pendaki=<?php echo $data['id_pendaki']; ?>" 
		onClick = "return confirm('Check In? <?php echo $data['nama']; ?>')" 
		button class="btn btn-info btn-md">Check In </a><center>
		</td>
		<td><center><a href="index.php?page=cetak&id_pendaki=<?php echo $data['id_pendaki']; ?>" 
		onClick = "return confirm('Cetak Struk <?php echo $data['nama']; ?> ?')" 
		button class="btn btn-info btn-md">Cetak </a><center>
		</td>
		</tr>
	</tbody>
	
<?php
                      
}
}
?>
</table>

</body>
</html>
