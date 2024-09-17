<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violência Digital - Equalize</title>
    <link rel="icon" href="../../../../media/logos.png" type="image/png">
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
         <h1>Violência Digital</h1>
      </div>
      <div class="form">
         <form action="../../../../../logica/controllers/ControllerAjuda.php" method="post">
               <div class="input">
                  <label for="vitima">Você já foi vítima de cyberbullying, exposição indevida ou invasão de privacidade?</label></br>
                  <select id="vitima" name="vitima">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>

               <div class="input">
                  <label for="frequencia">Com que frequência você é alvo de comportamentos agressivos online?</label></br>
                  <select id="frequencia" name="frequencia">
                        <option value="diariamente">Diariamente</option>
                        <option value="semanalmente">Semanalmente</option>
                        <option value="mensalmente">Mensalmente</option>
                        <option value="ocasionalmente">Ocasionalmente</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="agressor">Quem são os agressores?</label></br>
                  <select id="agressor" name="agressor">
                        <option value="conhecidos">Conhecidos</option>
                        <option value="estranhos">Estranhos</option>
                        <option value="outro">Outra Pessoa</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="inseguro">Você já se sentiu inseguro(a) ao usar a internet ou redes sociais?</label></br>
                  <select id="inseguro" name="inseguro">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="ja_denunciou">Você já bloqueou ou denunciou esses agressores?</label></br>
                  <select id="ja_denunciou" name="ja_denunciou">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="protegido">Você tem conhecimento de como se proteger melhor online?</label></br>
                  <select id="protegido" name="protegido">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="button">
                  <button type="submit" value="ajuda_digital" name="ajuda_digital">Enviar</button>
               </div>
         </form>
      </div>
    </section>
    
</body>

</html>