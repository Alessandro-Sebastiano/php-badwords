
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP - BadWords</title>
</head>
<body>
    <div class="container">
        <div class="form-box">

        <h1>Replace badwords in the paragraph</h1>

            <form action="./php/result.php" method="get">

            <textarea name='paragraph' class="text-area" placeholder="Paragraph"></textarea>
            <input type="text" name='bad-word' class="bad-word" placeholder="Replace Badword">
            <input type="submit" class="button" value="Send">

            </form>
        </div>
    </div>
</body>
</html>