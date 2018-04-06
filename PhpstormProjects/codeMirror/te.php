<html>
<head>
    <title>Testing php</title>
</head>

<body>

<form action="te.php" method="post" id="form">
    <textarea name="Pelas"></textarea>
    <input type="submit" name="helo">
</form>


<?php
if(isset($_POST['helo'])) {
    $file = './testingMethod.php';
    $content = read($file);
    print "<p> $content </p>";
}

function read($file) {
    ob_start();
    include($file);
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}



?>

</body>
</html>
