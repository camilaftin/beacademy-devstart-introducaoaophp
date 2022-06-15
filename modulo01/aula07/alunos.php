<?php


$a1 = [
  'nome' => 'Chiquim',
  'email' => 'chiquim@email.com',
  'telefone' => '85 9 8889-000',
  'notas' => [
    9,
    8,
    7,
    6.5
  ]

];

$a2 = [
  'nome' => 'Maria',
  'email' => 'maria@email.com',
  'telefone' => '85 9 999-000',
  'notas' => [
    5.5,
    8.9,
    7,
    6.5
  ]
  ];

  $a3 = [
    'nome' => 'Luiza',
    'email' => 'luiza@email.com',
    'telefone' => '85 9 999-000',
    'notas' => [
      5.5,
      8.9,
      7,
      6.5
    ]
    ];


$alunos = [
 $a1,
 $a2,
 $a3
];

/*foreach($alunos as $cadaAluno){
  echo $cadaAluno['nome'];
}*/
?>

<table border="1">
  <thead>
    <tr>
      <th>Nome</th>
      <th>email</th>
      <th>telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($alunos as $cadaAluno){
          echo '<tr>';
            echo '<td>'.$cadaAluno['nome'].'</td>';
            echo '<td>'.$cadaAluno['email'].'</td>';
            echo '<td>'.$cadaAluno['telefone'].'</td>';
          echo '</tr>';          
      }
    ?>
  </tbody>
</table>