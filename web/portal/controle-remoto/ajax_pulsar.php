<?php
$jsonurl = "pulsar.json";
$json = file_get_contents($jsonurl);
$json_output = json_decode($json);

foreach ($json_output as $j) {
  //echo $j->interprete->{0};
  //echo "\n".$j->titulo->{0};
  //echo "\n".$j->duracao->{0}."\n";
  $json = array(musica =>
                array(interprete => $j->interprete->{0},
                titulo => $j->titulo->{0},
                duracao => $j->duracao->{0}
           ));
}

$json = json_encode($json);
echo $json;
//var_dump($json);
 
?>