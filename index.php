<?php 
//Arquivo index responsável pela inicialização do sistema
//declare(strict_types = 1);


require_once 'sistema/configuracao.php';
include_once 'Helpers.php';
/* date_default_timezone_set("America/Sao_Paulo"); */

contarTempo('2025-04-14 23:30:15');

$data = date('d/m/Y H:i:s');
echo '<hr>'.$data;

/* echo '<h1>arquivo index teste</h1>';
echo "texto dentroii de aspas duplas";
print "<p>texto usando print</p>";
print "<small> texto dentro de aspas dupla</small>";
 */
$texto = '      <h1>texto</h1> <p>para</p> resumir';
/* $texto = strip_tags($texto); */
echo "<hr>";
echo resumirTexto($texto, 17,'leia mais...<br>');


echo formatarValor(2);
echo "<br>";
echo formatarNumero(5000);
/* $valor = ''; */

/* echo ($valor? $valor: 0);
echo $valor? $valor: 0; */
/* echo $valor? : 0; */

/* if($valor) {
    echo $valor;
}else {
    echo 0;
} */

//$texto = 1.2;

/* echo $total = mb_strlen(trim($texto));
echo "<hr>";

echo $resumo = mb_substr($texto,1,3);
echo "<hr>";
echo $ocorrencia = mb_strrpos($texto, 'o'); */

//echo '<hr>';
/* echo saudacao(); */
/* echo "<br>";
echo saudacao();
echo '<hr>';
*/


/* $string = 1;
$int = 10;
$float = 9.99;
$bool = false;
$nulo = null; */

/* echo '<hr>';
var_dump($texto); */



//comentário de uma linha
#comentário de uma linha
/*
linha1
linha2
linha3
*/


