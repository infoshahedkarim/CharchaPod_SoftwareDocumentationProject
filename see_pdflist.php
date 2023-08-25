

<?php

   $db_name = 'mysql:host=localhost;dbname=course_db';
   $user_name = 'root';
   $user_password = '';

   $conn = new PDO($db_name, $user_name, $user_password);

   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $n = mt_rand(0, $length);
          $rand[] = $str[$n];
      }
      return implode($rand);
   }

?>
<?php

//Check for connection error
$query = "SELECT pdf FROM `doc`";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)){
  $pdf_file = $row->filename;
  $path_file = $row->directory;
}
?>
<div>
<?php
echo $path_file.$pdf_file;
?>
</div>