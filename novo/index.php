<?php
$usuario =[
    'nome'=>'Jr',
    'idade'=> 24,
    'profissão'=> 'Programador'
];
if($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissão'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="">
    <div>
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
    </div>
    <div>
        <input type="text" name="idade" placeholder="Digite sua idade" value="<? $idade ?>">
    </div>
    <div>

    <input type="text" name="profissão" placeholder="Digite sua profissão" value="<? $profissao ?>">

    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>


  </form>  
</body>
</html>