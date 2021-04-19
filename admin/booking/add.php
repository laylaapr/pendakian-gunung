<div class="row">
 <div class="col-md-4">  
  </div>
 <div class="col-md-4">  
  <div class="page-header">
   <h3 style="color: #508abb;"><b>Booking</b></h3>
  </div>
	<?php include_once "booking/crud.php"; ?>
  <form role="form" action="" method="POST" class="form-horizontal">
   <div class="form-group">
    <label>Id pendaki</label>
    <input type="text" name="id_pendaki" class="form-control">
   </div>
   <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control">
   </div>
   <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control">
   </div>
   <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
   </div>
   <div class="form-group">
    <label>Telp</label>
    <input type="text" name="telp" class="form-control">
   </div>
   <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis" class="form-control">
   </div>
   <div class="form-group">
    <label>Jumlah</label>
    <input type="text" name="jumlah" class="form-control">
   </div>
   <div class="form-group">
    <label>Berangkat</label>
    <input type="text" name="berangkat" class="form-control" placeholder="Please entry format date yyyy-mm-dd">
   </div>
   <div class="form-group">
    <label>Sampai</label>
    <input type="text" name="sampai" class="form-control" placeholder="Please entry format date yyyy-mm-dd">
   </div>
   <div class="form-group">
    <label>Total</label>
    <input type="text" name="total" class="form-control">
   </div>
   <div class="form-group">
    <label>Status</label>
    <input type="text" name="status" class="form-control" value="Booking" readonly>
   </div>
   <div class="form-group">
    <label>Id kuota</label>
    <input type="text" name="id_kuota" class="form-control">
   </div>
   <div class="form-group">
    <label>Id user</label>
    <input type="text" name="id_user" class="form-control" value="<?php $id_user = $_SESSION['id_user'] ; echo "$id_user" ; ?>" readonly>
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="add"> Save</button>
	<button type="reset" class="btn btn-danger"> Reset</button>
   </div>
  </form>
 </div>
 <div class="col-md-4">  
  
 </div>
</div>
