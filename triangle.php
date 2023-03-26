<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>
<body>
    <?php
        function triangle($deger){
            for($i = 1;$i <= $deger;$i++){
                $sayac = 0;
                while($sayac < $i){
                    echo "0";
                    $sayac++;
                }
                echo "<br>";
            }
            
        }
        triangle(15);
?>
</body>
</html>

