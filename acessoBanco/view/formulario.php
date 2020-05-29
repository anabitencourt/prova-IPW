<!DOCTYPE html>
<html  lang = " pt-br " dir = " ltr " >
  <head>
    <meta  charset = " utf-8 " >
    <title > </title >
  </head>
  <body>
  <?php
    if (isset($_GET [ "mensagem" ]) &!empty ($_GET["mensagem"])) {
      if ( $_GET [ "mensagem" ] == "sucesso" ) {
        echo  "Dados gravados com sucesso !!!";
      } else if ( $_GET [ "mensagem" ] == "erro" ) {
        echo  "Erro ao gravar os dados !!!";
      }
    }
    ?>
    <form  action = " ../controle/controle.php " method = "post" >
      <label > Nome: </label >
      <input  type = "text" name = "nome" value = "" >
      <label > E-mail: </ label >
      <input  type = "email" name = "email" value = "" >
      <label> Telefone: </label>
      <input  type = "text" name = "telefone" value = "" >
      <input  type = "submit" name = "" value = "Enviar" >
    </form >
  </body>
</html >
