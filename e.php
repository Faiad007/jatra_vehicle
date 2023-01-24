<!doctype html>
<html>
    <head></head>
    <style>
      p{
        color:white;
      }
      .div-1 {
        background-color: black;
    }
        .column {
  float: left;
  width: 32%;
  padding: 5px;
  height: 450px; /* Should be removed. Only for demonstration */
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
div.gallery {
    
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width: 450px;
}
div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 180px;
}

div.desc {
  padding: 10px;
  text-align: center;
}
</style>
    <body>
    <?php
    session_start();
    $email=$_SESSION['email'];
$hostname='localhost';
$username='root';
$password='';
$dbname='jatra';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if($con)
{
	echo"conn true";
}
else
{
	echo"conn false";
}
$sr="SELECT * FROM register WHERE email='$email'";
$rr=mysqli_query($con,$sr);
$data=mysqli_fetch_assoc($rr); 
if(mysqli_num_rows($rr)>0)
{
    ?>
    <div class="div-1">
        <div class="row">
          <div class="column">
          <div class="gallery">
          <?php
    
          $q="SELECT * FROM package";
          $r=mysqli_query($con,$q);
            while($data=mysqli_fetch_assoc($r)){
              if($data['p_id']=='1'){
              $p_id=$data['p_id'];
              $Price=$data['Price'];
              echo"<a href='a_package.php?p_id=$data[p_id] & Price=$data[Price]'><img src='Blank 4 Grids Collage (2).jpg' alt='Norway' style='width:100%' padding:10px /></a>";
          
        }
      }
    
          ?>
         <p align='center'><b>2 days and 2 night in sea-crown with attractive spot(radiant world,inani_beach</b></p>
         <p align='center'><b>From:19.5.22 to 21.5.22</b></p>
         <p align='center'><b>10000 BDT</b></p>
          
    </body>
    </html>
    <?php
}
else{
  ?>
  <html>
  <body style="background-color:black;text-align:center">
  <h1 style='color:white;'>please login first</h1>
    </body>
  </html>
<?php
}
?>

