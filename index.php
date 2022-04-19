<?php
    $paragraph = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam aperiam dolor tempore
    velit doloremque numquam molestiae! Sit maiores nisi eos! Porro, non. Tempore, fuga! Veniam consequuntur quasi saepe dicta!";
    
        var_dump(strlen($paragraph));
        echo str_replace("amet", "***", $paragraph)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords php</title>
</head>
<body>
        <p>La lunghezza del paragrafo è di <?php echo strlen($paragraph) ?> tra caratteri e spazi.</p>
</body>
</html>