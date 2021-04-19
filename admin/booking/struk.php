<!DOCTYPE html>  
 <html>   
 <head>   
  <title>Struk</title>   
 </head>   
 <body>   
<?php
$id_pendaki = $_GET['id_pendaki'];
//error_reporting(0);
include "koneksi.php";

		$query = mysqli_query ($koneksi,"select * from struk where id_pendaki='$id_pendaki'");
		while ($row = mysqli_fetch_assoc($query))
		{
?> 
<h2>Cetak Struk</h2>
 <hr>   
 <table width="750" border="0" cellpadding="0" cellspacing="0" style="border: 0px solid #06f; background-color: white; margin-left: 150px;">
 <tr>
 	<td rowspan="9" width="120" style="border-right:1px solid #06f;"> </td>
 <td align="right">
 	<img src="../images/logo.jpeg" width="100" height="100"></td>
 <td align="left" colspan="3"><h4> Kuitansi Taman Nasional Tengger Semeru </h4></td>
 </tr>  
 <tr>
 	<td></td>
 	<td></td>
 	<td></td>
 </tr>
 <tr>  
     
   <td width="150" align="center"> Id Pendaki </td>  
   <td>:</td>
   <td align="left" >  <?php echo $row['id_pendaki']; ?></td>  
 </tr>  
 <tr>  
   <td align="center"  > Nama </td>  
   <td>:</td>
   <td align="left"  > <?php echo $row['nama']; ?> </td>  
 </tr>  
 <tr>  
   <td align="center"  > Berangkat </td> 
   <td>:</td> 
   <td align="left"  > <?php echo $row['berangkat']; ?></td>  
 </tr>  
 <tr>  
   <td align="center"  > Sampai </td>  
   <td>:</td>
   <td align="left"  > <?php echo $row['sampai']; ?></td>  
 </tr>  
  <tr>  
   <td align="center" > Jumlah </td>  
   <td>:</td>
   <td align="left" > <?php echo $row['jumlah']; ?> Orang</td>  
 </tr> 
 <tr>  
   <td><h4>Rp <?php echo $row['total']; ?></h4></td> 
   <td></td> 
   <td align="right" height="100" style="margin-right: 50px;"> Malang, <?php echo $row['berangkat']; ?></td>  
 </tr>  
 </table>    
 <a href="index.php?page=booking">Kembali</a> 
 <?php } ?> 
 </body>   
 </html>   
