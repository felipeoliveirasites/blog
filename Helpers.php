<?php

echo '<br>arquivo de funções';

echo "<hr>";
function contarTempo(string $data) 
{
    echo $agora = strtotime(date('Y-m-d H:i:s'));
    echo '<hr>';
    echo $tempo = strtotime($data);
    echo '<hr>';
    $diferenca = $agora - $tempo;
    echo '<br>'.$diferenca;
    echo "<br>";
    return var_dump($agora, $tempo, $diferenca);
}

echo "<br>";

/** 
*formata um valor com ponto e virgula
* @param float $valor
* @return string
*/
function formatarValor(?float $valor = 0): string
{
return 'R$ '.number_format(($valor ? $valor : 5), 2,',', '.');
}

/**
 * formata um número com pontos
 * @param int $numero
 * @return string
 */
function formatarNumero (?int $numero = null): string
{
    return number_format($numero? $numero : 0, 0, null, '.');
}

function saudacao() : string
{
    echo $hora = date('H'); //'H:i:s'  hora minuto e segundos
    /* $saudacao = '';

    if($hora >= 0 && $hora <= 5) {
        $saudacao = 'boa madrugada';
    }
    if($hora >= 6 && $hora <= 12) {
        $saudacao = 'bom dia';
    } */
    if($hora >= 0 AND $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif($hora >= 6 AND $hora <=12){
        $saudacao = 'bom dia';
    } elseif($hora >= 13 AND $hora <=18){
        $saudacao = "boa tarde";
    } else {
        $saudacao = 'boa noite';
    }
    return $saudacao;
}


/**
 * Resume um texto
 * 
 * @param string $texto para resumir
 * @param int $limite quantidade de caracteres
 * @param string $continue opcional - o que deve ser exibido ao final do resumo
 * @return string texto resumido
 */
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim(strip_tags($texto));
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $textoCortado = mb_substr($textoLimpo,0, $limite);
    $resumirTexto = mb_substr($textoLimpo,0,mb_strrpos( $textoCortado,' '));

    return $resumirTexto.' '.$continue;
}