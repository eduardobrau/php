<?php
/**
 * Requer uma data em texto no formato Americano'
 * strtotime Parse English textual datetimes into 
 * Unix timestamps (the number of seconds since January 1 1970 00:00:00 GMT).
 * 
*/
function getDiaDaSemana($data)
{
  $timestamp = strtotime($data);
  $dia = getdate($timestamp);
  $diaSemana = $dia['weekday'];
  echo "<pre>";
  print_r($dia);
  echo "</pre>";

  if (preg_match('/(sunday|domingo)/mi', $diaSemana)) $diaSemana = 'Domingo';
  else if (preg_match('/(monday|segunda)/mi', $diaSemana)) $diaSemana = 'Segunda';
  else if (preg_match('/(tuesday|terça)/mi', $diaSemana)) $diaSemana = 'Terça';
  else if (preg_match('/(wednesday|quarta)/mi', $diaSemana)) $diaSemana = 'Quarta';
  else if (preg_match('/(thursday|quinta)/mi', $diaSemana)) $diaSemana = 'Quinta';
  else if (preg_match('/(friday|sexta)/mi', $diaSemana)) $diaSemana = 'Sexta';
  else if (preg_match('/(saturday|sábado)/mi', $diaSemana)) $diaSemana = 'Sábado';
  return $diaSemana;
}

function vencimentoBoleto($data, $limitePag)
{
    //$data = date('Y-m-d', strtotime($data . ' +' $limitePag . ' days'));
    $data = date('Y-m-d', strtotime('+ ' . $limitePag . ' days'));
    if (getDiaDaSemana($data) == ("Sábado")) {
        $data = date('Y-m-d', strtotime($data . ' + 2 days'));
    } else if (getDiaDaSemana($data) == ("Domingo")) {
        $data = date('Y-m-d', strtotime($data . '+ 1 days'));
    }
    return $data;
}


function feriadoAno($ano){
    $_2018 = array('year' => array(
        '2018' => array(
            '01-01-2018',
            '30-03-2018',
            '01-04-2018',
            '21-04-2018',
            '01-05-2018',
            '31-05-2018',

        )
    ));

}

$hoje = date('Y-m-d');
$dia = getDiaDaSemana($hoje);
echo "<pre>";
print_r($dia);
echo "</pre>";

// $vencimento = vencimentoBoleto($hoje, 7);
// echo $vencimento;

// $pascoa = date('d/m/Y', easter_date(2018));

// echo $pascoa;