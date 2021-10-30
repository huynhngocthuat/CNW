<html>
  <head>
    <title>Document</title>
  </head>
  <body>
    <?php 
        $sum = 1;
        for($i = 1; ; $i++){
            if($i%2===1) continue;
            else $sum=$sum*$i;
            if($i >= 10) break;
        }
        echo "10!! =", $sum;  
        ?> 
  </body>
</html>