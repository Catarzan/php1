<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Lab 4 Act</title>
</head>
<body>
<h3> Require Student Information </h3>
<table border="1">
<?php
$student_info = array(
    "Student ID" => "25206194", 
    "Full Name" => "Rabaya, Joswei Loi M.", 
    "Program" => "BSIT",
    "Year Level"=>"3",
    "Section"=>"3C",
    "Email"=>"rabayajosweiloi@gmail.com",
    "Status"=>"Single"

);
?>

        <?php 
        foreach ($student_info as $key => $info){
            echo"<tr>";
            echo "<th>" . $key . "</th>";
            echo "<td>" . $info . "</td>";
            echo"</tr>";
        }
        ?>
</table>
</body>
</html>