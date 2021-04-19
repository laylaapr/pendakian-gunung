<div class="row">
 <div class="col-md-4">  
  </div>
 <div class="col-md-4">  
  <div class="page-header">
   <h3 style="color: #508abb;"><b>Tambah Admin Baru</b></h3>
  </div>
	<?php include_once "kuota/crud.php"; ?>
  <form role="form" action="" method="POST" class="form-horizontal">
    <div class="form-group">
    <label>Id Kuota</label>
    <input type="text" name="id_kuota" class="form-control">
   </div>
   <div class="form-group">
    <label>Kuota</label>
    <input type="text" name="kuota" class="form-control">
   </div>
   <div class="form-group">
    <label>Status Gunung</label>
    <input type="text" name="status_gunung" class="form-control">
   </div>
   <div class="form-group">
   <label>Bulan</label>
   <select class="form-control" name="bulan">
    <option value="">-</option>
    <option value="01">Januari</option>
	<option value="02">Februari</option>
	<option value="03">Maret</option>
	<option value="04">April</option>
	<option value="05">Mei</option>
	<option value="06">Juni</option>
	<option value="07">Juli</option>
	<option value="08">Agustus</option>
	<option value="09">September</option>
	<option value="10">Oktober</option>
	<option value="11">November</option>
	<option value="12">Desember</option>
	</select>
</div>
   <div class="form-group">
    <label>Time</label>
    <input type="text" name="time" class="form-control" placeholder="Please entry format date yyyy-mm-dd" required>
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
