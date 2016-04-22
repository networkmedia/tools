
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Instagram Media Checker - NetworkMedia.Inc</title>

    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<body background="http://agrawalshubham.com/wp-content/uploads/2015/03/papersco-v_b3gljTXT.jpg">
<div class="container">
<center>
<br/>
<div class="page-header">
  <h1>NetworkMedia.Inc Instagram <small>Media Checker Valid !</small></h1>
</div>
<div class="panel panel-default" style="width:663px;">
  <div class="panel-heading">Instagram Media Checker</div>
  <div class="panel-body">
<form style="text-align:left;" action="" id="form" method="post">
<label>URL Photo: </label>
<input type="text" id="url" class="form-control" name="url" placeholder="http://instagram.com/p/XXXXX/?order-by=xxxx" />
<br/><input type="submit"  name="submit" value="Check" class="btn btn-success"/> <input type="button" onclick="reset()" value="Reset" class="btn btn-danger"/>
</form>
  </div>
</div>
<?php
error_reporting(0);
if (isset($_POST['submit'])){ 
$url = $_POST['url'];
if (empty($url)){
		echo "<div class=\"alert alert-warning\" role=\"alert\">Mohon maaf, URL Photo tidak sepatutnya kosong !</div>";
exit;
}
$a = substr($url,0,8);
$b = substr($url,0,7);
if ($a != "https://" && $b != "http://"){
			echo "<div class=\"alert alert-warning\" role=\"alert\">Mohon maaf, URL Photo harus menggunakan <b>http://</b> atau <b>https://</b></div>";
exit;
}
$s = file_get_contents("https://api.instagram.com/oembed/?url=".$url);
$a = json_decode($s, true);
if ($s === false){
				echo "<div class=\"alert alert-warning\" role=\"alert\">URL Photo Error, Tidak Valid. Sila Pastikan Account Tidak Private !</div>";
exit;
}
//print_r($a);
echo '<div class="panel panel-default" style="width:663px;">  <div class="panel-body" style="text-align:left;">';
  echo "<b>Media ID<b/>	: ".$a['media_id'];
  echo "<br/><b>Owner</b> : <a style=\"text-decoration:none;\" href=\"http://instagram.com/".$a['author_name']."\"><i class=\"fa fa-instagram\"></i> ".$a['author_name']."</a>";
  
  echo "</div></div>";
echo $a['html'];
}
?>
<br/><br/>
<footer>Copyright NetworkMedia.Inc</footer><br/>
</center>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript">
function reset() {
    document.getElementById("form").reset();
}</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>  </body>
</html>