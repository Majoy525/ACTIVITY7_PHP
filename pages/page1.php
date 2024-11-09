<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Result</title>
</head>
<body>
<?php
     $fullname = (isset($_GET['name'])) ? $_GET['name']:"";
     $sampleage = (isset($_GET['age'])) ? $_GET['age']:"";
     $sex = (isset($_GET['gender'])) ? $_GET['gender']:"";
     $sex = (isset($_GET['Course'])) ? $_GET['course']:"";
     $sex = (isset($_GET['Campus'])) ? $_GET['campus']:"";
     $sex = (isset($_GET['college'])) ? $_GET['college']:"";

     $result ="";
     $result=($sampleage >= 20 )?"ADULT": "MINOR";
    
    ?>

<form action="" method="get">
    <label for="">Name:</label>
    <input type="text"name="fullname">
    <label for="">Age:</label>
    <input type="number"name="age">
    <label for="">Gender</label>
    <a href=""></a>
       
    
<h2>Name:<?php echo $fullname;?></h2>
    <h2>Age:<?php echo $sampleage;?></h2>
    <h2>gender:<?php echo $sex;?></h2>
    <h2>Result:<?php echo $result;?></h2>
</body>
</html>