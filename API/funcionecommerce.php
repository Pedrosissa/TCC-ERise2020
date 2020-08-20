<?php
    $cont = "1";

    if($cont === "1"){
      $copiar = 'ecommerce';
      $colar = 'id_nomeempresa';
      
      if (!copy($copiar, $colar)){
          echo "falha ao copiar $copiar...\n";
      }
         
    }elseif($cont === "2"){
      $copiar = 'example.txt';
      $colar = 'example.txt.bak';
      
      if (!copy($copiar, $colar)){
          echo "falha ao copiar $copiar...\n";
      }
    }elseif($cont === "3"){
      $copiar = 'example.txt';
      $colar = 'example.txt.bak';
      
      if (!copy($copiar, $colar)){
          echo "falha ao copiar $copiar...\n";
      }
    }else{
        echo "Arquivo não encontrado";
        echo "Entre em contato com o administrador";
    }

?>