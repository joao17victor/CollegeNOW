<?php
require('carro.php');
$carro = new carro('modelo', 'cor', 'ano', 'marca', 'combustivel');
print_r($carro);
?>