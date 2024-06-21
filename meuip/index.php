<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="Site da Quati.com.br que exibe o seu ip público atual seja em IPv6 ou IPv4">
	    <title>Seus IPs</title>
	</head>
		<body>
		
			<h1>Seus IPs são:</h1>
    <?php
    // Função para verificar se o IPv6 está disponível
    function isIPv6Available() {
        return filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false;
    }

    // Verifica se o IPv6 está disponível
    $ipv6Available = isIPv6Available();
 
    if ($ipv6Available): 
	    echo "<iframe src=\"https://ipv6.quati.com.br\" width=\"20%\" height=\"140px\" style=\"border: 0px ;\" title=\"IPv6\"></iframe>" ;
    else: 
	    echo "<p><h1>IPv6 não disponível na sua conexão! </h1> </p>"; 
    endif; ?>
			</br>
			<iframe src="https://ipv4.quati.com.br" width="20%" height="120px" style="border: 0px ;" title="IPv4"></iframe>
			</br>
		</body>
</html>
