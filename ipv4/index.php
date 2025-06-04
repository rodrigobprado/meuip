<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site da Quati.com.br que exibe o seu ip público atual em IPv4">
    <title>IPv4.quati.com.br</title>
</head>
<body>
<?php
function getClientIP() {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ipList[0]);
    }
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    return $_SERVER['REMOTE_ADDR'];
}
?>

<h1>IPv4.quati.com.br</h1>

<p>Seu endereço IPv4 é: <?php echo htmlspecialchars(getClientIP(), ENT_QUOTES, 'UTF-8'); ?></p>

</body>
</html>
