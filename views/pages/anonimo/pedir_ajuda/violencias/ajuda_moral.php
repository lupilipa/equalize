<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violência Moral - Equalize</title>
    <link rel="icon" href="../../../../media/logo.png" type="image/png">
    <link rel="stylesheet" href="../../../../css/style.css">

</head>

<body>

    <nav>
        <a class="btn-sair" href="../../../../../logica/controllers/ControllerLogin.php?logout">Sair</a></br>
        <a class="btn-menu" href="../../home_anonimo.php">Home</a></br>
        <a class="btn-menu" href="../../identificar/como_identificar.php">Como identificar?</a></br>
        <a class="btn-menu" href="../pedir_ajuda.php">Pedir Ajuda</a></br>
        <a class="btn-menu" href="../../relatos_ver.php">Relatos</a></br>
        <a class="btn-menu" href="../../projeto.php">O projeto</a></br>
        <a class="btn-menu" href="../../contatos.php">Contatos</a></br>
    </nav>

    <section>  
      <div class="titulo">
         <h1>Violência Moral</h1>
      </div>
      <div class="form">
         <form action="../../../../../logica/controllers/ControllerAjuda.php" method="post">
               <div class="input">
                  <label for="difamado">Você já foi alvo de difamação, calúnia ou injúria?</label></br>
                  <select id="difamado" name="difamado">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>

               <div class="input">
                  <label for="afetou_imagem">Essas ações afetaram sua reputação ou imagem pública?</label></br>
                  <select id="afetou_imagem" name="afetou_imagem">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>

               <div class="input">
                  <label for="agressor">Quem é o responsável por essas ações?</label></br>
                  <select id="agressor" name="agressor">
                        <option value="parceiro">Parceiro</option>
                        <option value="familiar">Familiar</option>
                        <option value="colega">Colega de Trabalho</option>
                        <option value="outro">Outro</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="perseguido">Você já sofreu algum tipo de perseguição moral ou pública?</label></br>
                  <select id="perseguido" name="perseguido">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="procurou_ajuda">Você procurou ajuda jurídica ou relatou esses casos?</label></br>
                  <select id="procurou_ajuda" name="procurou_ajuda">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="continua">Esses atos continuam acontecendo atualmente?</label></br>
                  <select id="continua" name="continua">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="button">
                  <button type="submit" value="ajuda_moral" name="ajuda_moral">Enviar</button>
               </div>
         </form>
      </div>
    </section>
    
</body>

</html>