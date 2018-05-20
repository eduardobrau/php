<?php

$imagens = [
  
  [
    "id" => 81214610371125,
    "diretorio" => "/uploads/desabilitar-cache-300x190-K6vtbgkK1-0oFQCowR0TEJEcJKSocGop.png",
    "anuncio_id" => 721112830191054
  ],
  [
    "id" => 768112310204115,
    "diretorio" => "/uploads/escola-municipal-samir-auada-ix0N1KfhFij2yHhYOG6rsXL-vkTMzroo.jpg",
    "anuncio_id" => 721112830191054
  ],
  [
    "id" => 781052190461112,
    "diretorio" => "/uploads/desabilitar-cache-K6vtbgkK1-0oFQCowR0TEJEcJKSocGop.png",
    "anuncio_id" => 721112830191054
  ],
];

function imagemFull($imagens=[], $condicao){
  
  foreach($imagens as $imagem){
  
    $diretorio = $imagem['diretorio'];
    
    $posicao = strpos($diretorio, $condicao);
    
    if($posicao)
      continue;
      
    $uploads[] = [
      'key' => $imagem['id'],
      'diretorio' => $imagem['diretorio']
    ]; 
    
    $dir[] = $imagem['diretorio'];
    
  }

  return $dir;

}

function imagemThumbnail($imagens=[], $condicao){
  
  foreach($imagens as $imagem){
  
    $diretorio = $imagem['diretorio'];
    
    $posicao = strpos($diretorio, $condicao);
    
    if(!$posicao)
      continue;
      
    $uploads[] = [
      'key' => $imagem['id'],
      'diretorio' => $imagem['diretorio']
    ]; 
    
    $dir[] = $imagem['diretorio'];
    
  }

  return $dir;

}

$result = imagemThumbnail($imagens,'-300x190-');
echo '<pre>'; print_r($result); echo '</pre>';

/*$imagens = "/uploads/escola-municipal-samir-auada-ix0N1KfhFij2yHhYOG6rsXL-vkTMzroo.jpg";
$posicao = strpos($imagens, '-300x190-');
//echo substr($imagens, $posicao);
var_dump($posicao);*/
