<?php
  
    $paragraph = $_GET['paragraph'];
    $word = $_GET['bad-word'];
    
    $paragraph_length = strlen($paragraph);

    $paragraph = str_replace(strtolower($word) , '***' , strtolower($paragraph));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP - BadWords</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <span class="output"><?php echo $paragraph?></span>
            <span class="output">Length:<?php echo ' ' . $paragraph_length ?></span>
        </div>
    </div>
</body>
</html>