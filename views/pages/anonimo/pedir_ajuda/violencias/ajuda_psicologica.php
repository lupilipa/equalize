<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violência Psicológica - Equalize</title>
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
         <h1>Violência Psicológica</h1>
      </div>
      <div class="form">
         <form action="../../../../../logica/controllers/ControllerAjuda.php" method="post">
               <div class="input">
                  <label for="manipulado">Você sente que alguém constantemente tenta te humilhar, intimidar ou manipular?</label></br>
                  <select id="manipulado" name="manipulado">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>

               <div class="input">
                  <label for="isolado">Você é frequentemente isolado(a) de amigos ou familiares?</label></br>
                  <select id="isolado" name="isolado">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>

               <div class="input">
                  <label for="ameacado">Você já foi ameaçado(a) de alguma forma (perda de algo importante, abandono, etc.)?</label></br>
                  <select id="ameacado" name="ameacado">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="agressor">Quem é a pessoa que comete esses atos contra você?</label></br>
                  <select id="agressor" name="agressor">
                        <option value="parceiro">Parceiro</option>
                        <option value="familiar">Familiar</option>
                        <option value="colega">Colega de Trabalho</option>
                        <option value="outro">Outro</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="depressao">Esses comportamentos fazem você se sentir ansioso(a) ou deprimido(a)?</label></br>
                  <select id="depressao" name="depressao">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="procurou_ajuda">Você já procurou ajuda psicológica ou apoio emocional para lidar com isso? </label></br>
                  <select id="procurou_ajuda" name="procurou_ajuda">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="button">
                  <button type="submit" value="ajuda_psicologica" name="ajuda_psicologica">Enviar</button>
               </div>
         </form>
      </div>
    </section>
    
</body>

</html>