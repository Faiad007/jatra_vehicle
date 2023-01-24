
<html>

    
   
    
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
<body>
<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='jatra';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if($con)
{
	echo"";
}
else
{
	echo"conn false";
}
$s="SELECT AVG(rating)AS R FROM review";
$qr=mysqli_query($con,$s);
if($qr)
{
while($data=mysqli_fetch_assoc($qr))
{
$rating=$data['R'];
echo"<h2 style='text-align:center;'>avarage rating</h2>";
?>
<div align="center">
    <?php
for($s=0;$s<$rating;$s++)
{
    ?>
    
    <span  class="fa fa-star checked"></span>

    <?php
}

for($s=0;$s<4-$rating;$s++)
{
    ?>
    <span class="fa fa-star"></span>
    <?php
}
?>
</div>
<?php
}
}
$show="SELECT * FROM review ORDER BY name";
$q=mysqli_query($con,$show);
if($q)
{
while($data=mysqli_fetch_assoc($q))
{
	$name=$data['name'];
$rating=$data['rating'];
$comment=$data['comment'];
echo"<h2>$name</h2>";
for($s=0;$s<$rating;$s++)
{
    ?>
    <span class="fa fa-star checked"></span>
    <?php
}
for($s=0;$s<5-$rating;$s++)
{
    ?>
    <span class="fa fa-star"></span>
    <?php
}
?>
<br>
<?php
echo$comment;
}
}
?>
</body>
</html>