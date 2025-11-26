<?php

  $media1 = $_POST['media1'];
  $media2 = $_POST['media2'];
  $media3 = $_POST['media3'];
  $media4 = $_POST['media4'];
  $media5 = $_POST['media5'];

  //calculo das médias das médias
  $media = ($media1 + $media2 + $media3 + $media4 + $media5)/5;

  //checagem da notas, se o aluno está aprovado, reprovado ou en recuperação
  if ($media >= 7)
  {
    echo "O aluno está aprovado, a nota é " .  $media;
  }
  elseif ($media >= 5 && $media < 7)
{
    echo "O aluno está de recuperação, a nota é " .    $media;
}
else 
{
    echo "O aluno está reprovado, a nota é " .   $media;
}

?> 