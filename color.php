<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
                @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
                body {
                    margin: 30px;
                    background: #93FFEF;
                    font-family: 'Roboto';
                    color: gray;
                }

                input {
                    width: 150px;
                    height: 50px;
                    border-radius: 15px;                    
                }

                select, button {
                    height: 50px;
                    background-color: lightsalmon;
                    border-radius: 15px;
                }

                div {
                    font-size: 2em;
                    height: 300px;
                }

                footer {
                    position: fixed;
                    bottom: 20px;
                }
                
            </style> 
            <title>Pick a Color</title>
    </head>
    <body id="body">
            <h1>Pick a Color</h1>
            <p>Enter 3 numbers between 0 and 255 to each cell.</p><br>
            <form action="color.php" method="GET">
                <input type="text" name="num1" placeholder="Enter a number">            
                <input type="text" name="num2" placeholder="Enter a number">            
                <input type="text" name="num3" placeholder="Enter a number">
                <button type="submit">Color</button>
            </form><br>
                
            <?php
                if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])):
                    $num1 = $_GET["num1"];
                    $num2 = $_GET["num2"];
                    $num3 = $_GET["num3"];
                
                    function pickColor($num1, $num2, $num3) {
                        $rgb = "RGB({$num1}, {$num2}, {$num3})";
                        return $rgb;
                    }
                    echo "<div style='background: " . pickColor($num1, $num2, $num3) ."'><br>This is the " . pickColor($num1, $num2, $num3) . " color that you chose!</div>";
                    
                endif;

                
                
                $date = date("Y/m/d");
                echo "<footer>Date: $date</footer>";
            ?>
        </body>
</html>