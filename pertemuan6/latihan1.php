<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latiahan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: orange;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate3d(360drg);
            border-radius: 50%;
        }

        .clear {
             clear : bouth;
         }

    </style>
    
</head>
<body>

<?php 
    $angka = [
        
        [1,2,3],
        [4,5,6],
        [7,8,9]

];
?>

<?php foreach( $angka as $a ) :?>
    <?php foreach( $a as $b ) :?>
        <div class="kotak"><?= $b ?></div>
    <?php endforeach; ?>
        <div class="clear"></div>
<?php endforeach; ?>



</body>
</html>