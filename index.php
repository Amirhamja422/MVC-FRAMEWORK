
 <?php include 'inc/header.php'; ?>
 <?php
 include 'system/libs/main.php';
 include 'system/libs/mainctrltwo.php';
 
 $main = new main();

 $url = $_GET['url'];

 $url = rtrim($url, '/');

 $url = explode("/", $url);


 // echo $controller = $url[0]."<br>";
 // echo $method = $url[1]."<br>";
 // echo $param = $url[2]."<br>";
 // echo "<pre>";
 // print_r($url);

 // echo "</pre>"


 include 'app/controllers/'.$url[0].'.php';

 $conclsobj = new $url[0]();
 // $conclsobj->$url[1]($url[2]);
 // $conclsobj->testmethod();'
 echo $method = $url[1]();




?>
<?php include 'inc/footer.php'; ?>


