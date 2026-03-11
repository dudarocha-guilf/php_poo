<?php 

$dudaNome = "Maria Eduarda";
$dudaPeso = 60;
$dudaAltura= 1.65;
$dudaImc = number_format($dudaPeso/($dudaAltura*$dudaAltura), 2, ',', '.');

echo "Querido(a) $dudaNome o seu IMC é de $dudaImc. <br>";
