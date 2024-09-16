<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violência Institucional - Equalize</title>
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
         <h1>Violência Institucional</h1>
      </div>
      <div class="form">
         <form action="../../../../../logica/controllers/ControllerAjuda.php" method="post">
               <div class="input">
                  <label for="discriminado">Você já sofreu discriminação ou tratamento abusivo em algum serviço público ou privado?</label></br>
                  <select id="discriminado" name="discriminado">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>

               <div class="input">
                  <label for="instituicao">Em qual tipo de instituição isso ocorreu?</label></br>
                  <select id="instituicao" name="instituicao">
                        <option value="hospital">Hospital</option>
                        <option value="escola">Escola</option>
                        <option value="serviço_pub">Serviço Público</option>
                        <option value="outro">Outro</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="negligenciado">Você foi negligenciado(a) ou teve direitos negados?</label></br>
                  <select id="negligenciado" name="negligenciado">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="ja_denunciou">Você já fez uma denúncia sobre esse tratamento?</label></br>
                  <select id="ja_denunciou" name="ja_denunciou">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="afetou_acesso">Essas situações afetaram seu acesso a serviços ou direitos básicos? </label></br>
                  <select id="afetou_acesso" name="afetou_acesso">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="confianca">Como você descreveria sua confiança nas instituições atualmente?</label></br>
                  <select id="confianca" name="confianca">
                        <option value="alta">Alta</option>
                        <option value="media">Média</option>
                        <option value="baixa">Baixa</option>
                  </select>
               </div></br>
               
               <div class="button">
                  <button type="submit" value="ajuda_insti" name="ajuda_insti">Enviar</button>
               </div>
         </form>
      </div>
    </section>
    
</body>

</html>