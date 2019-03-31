<?php
$name1 = "Joao";
$sobrenome = "Rangel";
$nomeCompleto = $name1 . " " . $sobrenome; //concatenação
echo $nomeCompleto;
exit;

echo $name1;

echo "<br />";

// Destroi variáveis
unset($name1);

//isset - verifica se existe
if (isset($nome1)) {
  echo $nome1;
}
