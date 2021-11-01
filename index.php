<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>średnia ocen</title>
    <style>
        *{
            font-family: sans-serif;
            text-align: center;
        }
        input {
            display: inline-block;
            border: 1px solid #999;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Średnia ocen</h1>
    <form action="index.php" method="get">
        <input type="text" name="num" id="">
        <input type="submit" value="OK">
    </form>

    <?php
        if(isset($_GET['num']) and !empty($_GET['num'])){
            $rating = $_GET['num'];
            $tab = explode(",", $rating);
            $sum = 0;
            $i = 0;
            
            if(is_array($tab)){
            foreach($tab as $item){
                if(is_numeric($item) and $item >=1 and $item <= 6){
                    $sum += $item;
                $i++;
                }
            }
            }
            if($i > 0){
                echo "<br> Średnia ocen wynosi: " . round($sum / $i, 2);
            }else {
                echo "<br> Nie podano żadnej oceny!";
            }
        }else {
            echo '<br>Nie podano ocen!';
        }
    ?>
</body>
</html>