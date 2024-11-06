<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
        <?php
        $personal_data = ['name'=>'onion','price'=>'200','weight'=>'160'];
        echo $personal_data['name'];
        echo'<br>';
        echo $personal_data['price'];
        echo'<br>';
        echo $personal_data['weight'];
     ?>
    </p> 
 </body>

</html>