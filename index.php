<?php
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $word = $_GET["word"];

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
    <pre>Prova</pre>
    <p> <?php echo str_replace($word, "***", $paragraph) ?> </p>
    <p>La lunghezza del paragrafo è di <?php echo strlen(str_replace($word, "***", $paragraph)) ?> tra caratteri e spazi.</p>
    <p>La parola sostituita è "<?php echo $word ?>".</p>
</body>
</html>