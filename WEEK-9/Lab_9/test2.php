<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP</title>


    <style>
        .container{
            margin:0;
            padding: 23px;
            background-color: lightblue;
            box-sizing: border-box;
            align-items: center;
            margin-left: 10vh;
            margin-right: 10vh;
            text-align: center;
        }

    </style>    
</head>
<body>


    <div class="container">
        <h2>Welcome to PHP</h2>

        <?php
            $i = 10;

            while($i>=0){
                echo "<br> My value is: ".$i;
                $i--;
            }


            // Array 

            $myArray = array("one","two","three","car","bike");

            foreach($myArray as $value){
                echo "<br>My Array value is : ".$value;
            }

            function myFunction($iteration){
                echo "<br> This is My Function ".$iteration;
            }

            myFunction(1);
            myFunction(2);
            myFunction(3);


            $str = "Balaji Kartheek";

            
        ?>
    </div>
    
</body>
</html>