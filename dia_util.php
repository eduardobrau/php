<?php

function isFeriado($data){

    $feriados = array(
        '2018' => array(
            '01-01-2018',
            '30-03-2018',
            '01-04-2018',
            '21-04-2018',
            '01-05-2018',
            '31-05-2018',
        )
    );
    /* Formata a data passada para o formato do array $feriados
    ao qual vai ser feita a comparação */
    $dtBrasil = date( 'd-m-Y', strtotime($data) );
    /** 
     * Formata a data passada, para o ano e atribui a $dtAno
     * ao qual vai ser feita a comparação no indice do array $feriados 
    */
    $dtAno = date( 'Y', strtotime($dtBrasil) );
        
    foreach ($feriados as $ano => $dia) {

        if( $ano == $dtAno ):
            foreach ($dia as $key => $dateAno) {
                if($dtBrasil == $dateAno):
                    $feriado = $dateAno;
                    break;
                else:
                    $feriado = false;
                endif;
            }  
        endif;

    }

    return $feriado;

}

/**
 * Requer uma data em texto no formato Americano e retorna o dia da semana.
 * strtotime Parse English textual datetimes into 
 * Unix timestamps (the number of seconds since January 1 1970 00:00:00 GMT).
 * The getdate() function returns date/time information of a timestamp or the
 * current local date/time.
 * 
*/
function getDiaDaSemana($data){

  $timestamp = strtotime($data);
  $dia = getdate($timestamp);
  $diaSemana = $dia['weekday'];
  /* echo "<pre>";
  print_r(date('d/m/Y', $dia['0']));
  echo "</pre>"; */
  if (preg_match('/(sunday|domingo)/mi', $diaSemana)) $diaSemana = 'Domingo';
  else if (preg_match('/(monday|segunda)/mi', $diaSemana)) $diaSemana = 'Segunda';
  else if (preg_match('/(tuesday|terça)/mi', $diaSemana)) $diaSemana = 'Terça';
  else if (preg_match('/(wednesday|quarta)/mi', $diaSemana)) $diaSemana = 'Quarta';
  else if (preg_match('/(thursday|quinta)/mi', $diaSemana)) $diaSemana = 'Quinta';
  else if (preg_match('/(friday|sexta)/mi', $diaSemana)) $diaSemana = 'Sexta';
  else if (preg_match('/(saturday|sábado)/mi', $diaSemana)) $diaSemana = 'Sábado';
  
  return $diaSemana;

}
/**
 * Gera o vencimento do boleto, se nenhuma data for passada
 * $data assume a data de hoje somando mais tantos dias ($limitePag) 
 * que será o vencimento do boleto. 
*/
function vencimentoBoleto($data, $limitePag)
{
    
    $data = date('Y-m-d', strtotime($data . '+ ' . $limitePag . ' days'));
    

    if( isFeriado($data) ){
        $feriado = $data;
        $data = date('d-m-Y', strtotime($feriado . '+ 1 days'));
    }
    
    if (getDiaDaSemana($data) == ("Sábado")) 
        $data = date('d-m-Y', strtotime($data . ' + 2 days'));
    else if (getDiaDaSemana($data) == ("Domingo")) 
        $data = date('d-m-Y', strtotime($data . '+ 1 days'));

    return $data;
}


$hoje = '2018-04-25';
$vencimento = vencimentoBoleto($hoje,6);
die($vencimento);
