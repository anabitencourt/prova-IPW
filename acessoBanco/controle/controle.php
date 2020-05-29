<?php
  include ( "../model/aluno.php" );
  $aluno1 = new Aluno ();

  $nome = $_POST [ "nome" ];
  $email = $_POST [ "email" ];
  $telefone = $_POST [ "telefone" ];

  $inserir = $aluno1 -> cadastrar ( $nome , $email , $telefone );
  if ( $inserir == 1 ) {
    header ( 'location: ../view/formulario.php?mensagem=sucesso' );
  }else{
    header ( 'local: ../view/formulario.php?mensagem=erro' );
  }
?>
