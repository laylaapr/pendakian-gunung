
<?php
$id_kuota = $_GET['id_kuota'];
//error_reporting(0);
include "koneksi.php";

		$query = mysqli_query ($koneksi,"select * from kuota where id_kuota='$id_kuota' ");
		while ($row = mysqli_fetch_assoc($query))
		{
?>
<div class="row">
 <div class="col-md-4">  
  
 </div>
 <div class="col-md-4">  
  <div class="page-header">
   <h3 style="color: #508abb;"><b>Edit Admin Baru</b></h3>
  </div>
	<?php include_once "kuota/crud.php"; ?>
  <form role="form" action="" method="POST" class="form-horizontal">
  <div class="form-group">
    <label>Id Kuota</label>
    <input type="text" name="id_kuota" class="form-control" value="<?php echo $row['id_kuota']; ?>">
   </div>
  <div class="form-group">
    <label>Kuota</label>
    <input type="text" name="kuota" class="form-control" value="<?php echo $row['kuota']; ?>">
   </div>
   <div class="form-group">
    <label>Status Gunung</label>
    <input type="text" name="status_gunung" class="form-control" value="<?php echo $row['status_gunung']; ?>">
   </div>
   <div class="form-group">
    <label>Bulan</label>
    <input type="text" name="bulan" class="form-control" placeholder="Please entry format date yyyy-mm-dd" value="<?php echo $row['bulan']; ?>" required>
   </div>
   <div class="form-group">
    <label>Time</label>
    <input type="text" name="time" class="form-control" placeholder="Please entry format date yyyy-mm-dd" value="<?php echo $row['time']; ?>" required>
   </div>
    
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
 
   </div>
  </form>
 </div>
 <div class="col-md-4">  
  
 </div>
</div>

<?php } ?>
