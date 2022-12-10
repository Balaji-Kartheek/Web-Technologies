<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2> This is my php Website</h2>

    <?php
        // First step to start the session

        
        session_start();
        if(isset($_SESSION['views'])){
            $_SESSION['views'] = $_SESSION['views'] + 1;
        }
        else{
            $_SESSION['views'] = 1;
        }
    ?>

    <form action="?" method = "POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    Enter any text here: 
                </td>
                <td>
                    <input type="text" placeholder="Enter here">
                </td>
            </tr>
        </table>
    </form>

    <h5>
        Number of views:
        <?php
            echo "is equal to : ".$_SESSION['views'];
            
        ?>
    </h5>

    <?php 
$x = 5; 
$y = 15;
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
addition(); 
echo $z; 
?>

    
</body>
</html>