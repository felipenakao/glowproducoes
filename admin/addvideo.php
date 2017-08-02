<?php

function Connect()
{
 $dbhost = "localhost";
 $dbuser = "glowprod";
 $dbpass = "halamena@8";
 $dbname = "glowprod_db";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

$conn = Connect();
$cliente_string    = $conn->real_escape_string($_POST['cliente_string']);
$producao_string   = $conn->real_escape_string($_POST['producao_string']);
$ano_string    = $conn->real_escape_string($_POST['ano_string']);
$video_string = $conn->real_escape_string($_POST['video_string']);
$categoria_string = $conn->real_escape_string($_POST['categoria_string']);
$image_string = $conn->real_escape_string($_POST['image_string']);
$query   = "INSERT into portfolio (cliente,producao,ano,video,categoria,thumbnail) VALUES('" . $cliente_string . "','" . $producao_string . "','" . $ano_string . "','" . $video_string . "','" . $categoria_string . "','http://glowproducoes.com.br/sites/glow2017/admin/images/$image_string')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}

if(isset($_FILES['image'])){

 $errors= array();
 $file_name = $_FILES['image_string']['name'];
 $file_size =$_FILES['image_string']['size'];
 $file_tmp =$_FILES['image_string']['tmp_name'];
 $file_type=$_FILES['image_string']['type'];
 $file_ext=strtolower(end(explode('.',$_FILES['image_string']['name'])));

 $expensions= array("jpeg","jpg","png");

 if(in_array($file_ext,$expensions)=== false){
    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
 }

 if($file_size > 2097152){
    $errors[]='File size must be excately 2 MB';

 }

 if(empty($errors)==true){
    move_uploaded_file($file_tmp,"images/".$file_name);

 }else{
    print_r($errors);
 }
}

echo "<script>
alert('Vídeo adicionado com sucesso!');
document.location = 'http://glowproducoes.com.br/sites/glow2017/admin/';
</script>";


$conn->close();


?>
