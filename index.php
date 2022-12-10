
 <?php include 'inc/header.php'; ?>
 <?php
 include 'system/libs/main.php';
 include 'system/libs/mainctrltwo.php';
 
 // $main = new main();

 $url = $_GET['url'];

 $url = rtrim($url, '/');

 $url = explode("/", $url);


 // echo $controller = $url[0]."<br>";
 // echo $method = $url[1]."<br>";
 // echo $param = $url[2]."<br>";
 // echo "<pre>";
 // print_r($url);

 // echo "</pre>"
//$dynamic_class = $url[0];
$dynamic_method = $url[1];
$dynamic_param = $url[2];

 include 'app/controllers/'.$url[0].'.php';
$obj = new $dynamic_class();
 // var_export($obj);
 $obj->$dynamic_method($dynamic_param);

?>
<?php include 'inc/footer.php'; ?>


