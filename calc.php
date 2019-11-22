<?php

include ("./pag_calc.php");

    
    $datainicio = $_POST['datainicio'];
    $txtvalor1 = $_POST['txtvalor1'];
    $txtvalor2 = $_POST['txtvalor2'];
    
    
   
    
     
    
    
    $total = $txtvalor1 / $txtvalor2 * 60;
    $totalminutes = $total;   
    $hours = $total / 60; 
    $minutes = $total % 60;
    $cris_data_inicio = strtotime($datainicio);
    #echo $cris_data_inicio;
    echo "<br/>";
    #$cris_data_fim = strtotime(('+5 minutes'), $cris_data_inicio);
    #echo $cris_data_fim;
    echo "<br/>";
    
     
    
    echo "<br/>";
    echo "Duração da viagem: ";
    printf("%02d:%02d", $hours, $minutes);
    echo "<br/>";
    echo "<br/>";
    
    $horatotal = $hours*59.4 + $minutes;
    echo "Total de minutos: ", $horatotal;
    
    echo "<br/>";
    echo "<br/>";
    
    echo "Dia e hora da partida: ";
    echo date('d/m/Y H:i:s', $cris_data_inicio);
    echo "<br/>";
    echo "<br/>";
    
    echo "Hora de chegada certa: ";
        $horacorreta = $horatotal*60 + $cris_data_inicio;
    echo date('d/m/Y H:i:s', $horacorreta);
    
   
    
    
    
            
          
    
    

?>