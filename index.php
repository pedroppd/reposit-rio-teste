<?php
//Arquivo para simular uma API rest (webservice)

//criar um array em json
$cardapio_dia = array(
  array(
    "titulo" => "Batatas rusticas super saborosas",
    "categoria" => "Entrada",
    "imagem" => "https://pt.petitchef.com/imgupl/recipe/batatas-rusticas-super-saborosas--md-341832p554029.jpg",
    "descricao" => "A melhor batata rústica do brasil"
  ),
  array(
    "titulo" => "Macarronada",
    "categoria" => "Principal",
    "imagem" => "http://i-exc.ccm2.net/iex/1280/1252560997/1280585.jpg",
    "descricao" => "Macarronada a bolonhesa"

  ),
  array(
    "titulo" => "brigadeirão",
    "categoria" => "Sobremesa",
    "imagem" => "https://www.receitas.eduguedes.com.br/wp-content/uploads/2017/10/edu-brigadeirao-1068x518.jpg",
    "descricao" => "Brigadeirão de chocolate com granulados"
  )

);

print_r($cardapio_dia);
