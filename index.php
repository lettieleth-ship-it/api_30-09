<?php 
function verificarURL($url) {
    return $url == parse_url($_SERVER ['REQUEST_URI'], PHP_URL_PATH);
  }

function verificarmetodo($metodo){
    return $metodo == $_SERVER ['REQUEST_METHOD'];
}
$rotas = [
    [
        "url" => "/",
        "metodo" => "get",
        "conteudo" => "pagina principal"
    ],
    [
        "url" => "/perfil",
        "metodo" => "get",
        "conteudo" => "pagina de perfil",
    ],
[
    "url" => "/perfil/amigos",
    "metodo" => "get",
        "conteudo" => "pagina de amigos",
]
];

foreach ($rotas as $rota) { 
    if(verificarURL($rota ['metodo'])) {
            echo $rota[ 'conteudo'];
    }
}
  ?>
  