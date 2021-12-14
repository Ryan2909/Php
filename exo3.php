<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>EXO 3 php</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css.css'>
  <script src='main.js'></script>
</head>
<body>
<?php
    $a = array(
    'Nom' => array('Odrzywolek','Boulanger','Dehan','Duval','Filleux','Borgne','Raoult'),
    'Prenom' => array('Ryan','Sam','Enzo','William','Geoffrey','Valentin','Gautier'),
    'MDP' => array('or','bs','de','dw','fg','bv','rg'));
?>
<table>
  
  <?php
    foreach ($a as $key => $value)
    {
      ?>
      <tr>
      <div>
        <?php
          for($j=0;$j<=6;$j++)
          {
            ?>
            <td>
            <?php
            echo $a[$key][$j]." ";
            ?>
            </td>
            <?php
          }
        ?>
      </div>
        </tr>
      <?php
    }
  ?>
</table>
</body>
</html>
