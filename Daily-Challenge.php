<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>title</title>
    <style type="text/css" media="screen">
    table{border: 2px solid black}
    td{width: 100px; height: 80px; float: left; border: 1px solid black}
    </style>
    <title>Daily Challenge</title>
</head>
<body>


  <div class="container" >
<table>
    <?php 
    $ligne =8;
    $colone = 8;
     for ($i=0; $i < $ligne ; $i++) {

        echo "<tr>";
          for ($y=0; $y <$colone ; $y++) { 
            $som =$i + $y ;
            if ($som%2 == 0) {
                echo "<td style='background-color:black'></td>";
            }else {
                echo "<td style='background-color:white'></td>";
            }
            
          }

        echo "</tr>";
        
    }
        
     ?>
</table>
 </div>
</body>
</html>