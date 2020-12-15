<?php
session_start(); ob_start();
if(empty($_SESSION["SelectedLang"])){
  $_SESSION["SelectedLang"]="tr";
}

if ( $_SESSION["SelectedLang"] =="tr")
{
  include("LngTR.php");

}
else
{
  include("LngEN.php");
}
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
</head>

<body>
<div class="jumbotron">
  <div class="container">
  <h3> <?php echo multilangsample; ?></h3>
<hr>
  <a href="LangSelect.php?Lng=tr"><?php echo turkish; ?> </a> |   <a href="LangSelect.php?Lng=en"> <?php echo english; ?> </a>
  <hr>
  <table class="table table-bordered">
  <tr>
  <td class="active" > <?php echo active; ?></td>
  <td class="success"> <?php echo success; ?></td>
  <td class="warning"> <?php echo warning; ?></td>
  <td class="danger"> <?php echo danger; ?></td>
  <td class="info">info</td>
</tr>


</table>



  </div>
</div>


</body>


</html>
<?php
 
ob_end_flush();
?>

