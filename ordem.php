<?php

$notas = [ 
  ['aluno' => 'Maria', 'nota' => 10,],
  ['aluno' => 'Vinicius', 'nota' => 6,],
  ['aluno' => 'Ana', 'nota'=> 8,],
];

function ordenarNotas(array $notas1, array $notas2): int {
   if ($notas1['nota'] <=> $notas2['nota']);
  
}

usort(array:$notas, callback:'ordenarNotas');
var_dump($notas); 