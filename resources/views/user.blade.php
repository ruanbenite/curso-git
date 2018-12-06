<h1> Users </h1>
<form  method="get" {{ action('ControllerUser@buscar') }} >
    <label >Pesquisa por Nome: </label>
    <input name="filtro" type="text">
    <input type="submit" value="Buscar">
    <form>

<?php
  $html = '<ul>';
foreach($user as $data){
    $html .= '<li>';
    $html .= 'Nome: '.$data['name'].' </br>';
    $html .= 'Obs: '.$data['obs'].' </br>';
    $html .= 'Data: '.$data['date'].' </br>';
    $html .= 'Descri: '.$data['desc'].' </br>';
    $html .= 'Nano: '.$data['nano'].' </br>'.' </br>';
    $html .= '</li>';

    if($filtro != Null){
       echo  $key = array_search("$filtro",$data);
        if($key){
            echo '<br>';
            echo   'A pesquisa retornou: '.$data["$key"];
    }    
}
   
}
$html .= '</ul>';
echo $html;




$ch = curl_init("https://www.schoolofnet.com/curso/php/linguagem-php/apis-graphql-com-php/");
$fp = fopen("copia.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);