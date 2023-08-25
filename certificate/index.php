<?php 
require('connection.php');
require('fpdf/fpdf.php');
header('content-type:image/jpeg');
$font = "C:/xamppp/htdocs/certificate/Calibri_Regular.ttf";
$select_query = mysqli_query($connection,"select * from certificate_details");
while($certificate = mysqli_fetch_array($select_query))
{
	$image = imagecreatefromjpeg("E-Certificate.jpg");
	$color = imagecolorallocate($image, 19,21,22);
	$id = $certificate['reference_no'];
	$name = $certificate['name'];
	imagettftext($image, 90,0,690,800, $color, $font, $id);
	imagettftext($image, 90,0,1110,800, $color, $font, $name);
	imagejpeg($image,"download-certificate/$id.jpg");
	imagedestroy($image);
}
?>