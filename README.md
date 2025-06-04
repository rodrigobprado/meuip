# meuip
Exibe o ipv4 e/ou ipv6 da sua conexão atual

Para exibir o IP real do visitante mesmo quando o servidor estiver atrás de proxies,
os arquivos `ipv4/index.php` e `ipv6/index.php` agora verificam os cabeçalhos
`X-Forwarded-For` e `Client-IP` antes de recorrer ao `REMOTE_ADDR`.

Esse sistema funciona com 3 sites ou subdomínios diferentes.

O site meuip sendo o site principal que carrega os outros 2 sites vindo de subdomínios ou sites diferentes.
O site ipv4 carrega e deve ler apenas, única e exclusivamente o "listen" em ipv4
O site ipv6 carrega e deve ler apenas, única e exclusivamente o "listen" em ipv6

No diretório sample existe um exemplo de configuração do nginx para isso funcionar.

Divirta-se
