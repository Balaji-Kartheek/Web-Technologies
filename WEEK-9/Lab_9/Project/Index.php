<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Website</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h3>Welcome to Travel Form</h3>
        <p>Enter your details: </p>

        <form action="Index.php" method="POST" class="form">
            <input type="text" name="name" id="name" placeholder="Enter name">
            <input type="number" name="age" id="age" placeholder="Enter age">
            <input type="email" name="email" id="email" placeholder="Enter Email">
            <input type="text" name="report" id="report" placeholder="Enter Description">
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    

</body>
</html>