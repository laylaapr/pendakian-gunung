
<?php
include_once "koneksi.php";
session_start();
//error_reporting(0);
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
<h1> Cek Kuota </h1>
<div class="row"><div class="col-md-12">
    <div class="box">
     <form id="form-capacity" class="form-horizontal" method="get" action="">
          <div class="box-body">
                <div class="form-group">
                <label class="col-sm-2 control-label" style="margin-left: 30px;">Cari</label>
                <div class="col-sm-10" style="margin-bottom: 10px; width: 800px; ">
                	<input type="text" name="cari" class="form-control" placeholder="Silahkan cek sisa kuota disini yyyy-mm-dd">
                </div>

                <div style="margin-left: 0px;" class="form-group">
    				<button type="submit" class="btn btn-primary" >Cari</button>
    			</div>
                </div>
            </div>
            </form>
        </div>
<?php
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<div class="box">
      	<table class="demo-table" style="width:800px; margin-left: 80px; margin-bottom: 100px;">
		<thead style="background:#508abb; color: white;">
		<tr>
			<td align="center">Id Kuota</td >
			<td align="center">Kuota</td >
			<td align="center">Status Gunung</td >
			<td align="center">Bulan</td >
			<td align="center">Tanggal</td >
		</tr>
		</thead>
<?php
if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$sql = mysqli_query($koneksi,"CALL sp_search('$cari')");				
	}else{
		$sql = mysqli_query($koneksi," CALL sp_kuota()");		
	}
while($data = mysqli_fetch_array($sql)){
	?>
        <tbody>
            <tr>
            <td><?php echo $data['id_kuota']; ?></td>
            <td><?php echo $data['kuota'];?> </span></td>
            <td><?php echo $data['status_gunung'];?> </span></td>
            <td><?php echo $data['bulan'];?> </span></td>
            <td><?php echo $data['time'];?> </span></td>
            </tr>
                       
        </tbody>
        <?php                      
}
?>
    	</table>
        </div>
    </div>
</div>
</body>
</html>