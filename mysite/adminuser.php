<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="adminuserbody">
   <div class="container3">
   hi,<span class="name">
        <?php
        echo $_POST["username"];
        ?>
    </span>
   </div>
    <br>
    <div class="buttons">
    <button class="black">Home</button>
    <button class="black">Continue</button>
    <button class="black">About</button>
    <button class="black">Contact</button>
    </div>
</body>
</html>