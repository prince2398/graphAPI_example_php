<?php
  if (isset($_GET['submit'])) {
    if (!empty($_GET['proId'])) {
      $url ="http://graph.facebook.com/".$_GET["proId"]."/picture?type=large";
    }else {
      echo "Please enter a proId.";
    }
  }


 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>picFB</title>
  </head>
  <body>
    <form action="" method="GET">
      profile pic id :
      <input type="text" name="proId" >
      <button type="submit" name="submit">Submit</button><br><br>
      <?php
      if (isset($_GET['proId'])){
        echo "<img src=\"".$url."\" alt=\"image\">";
      }
      ?>
    </form>
  </body>
</html>
