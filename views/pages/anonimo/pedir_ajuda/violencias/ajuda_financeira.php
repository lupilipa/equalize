<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violência Financeira - Equalize</title>
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
         <h1>Violência Financeira</h1>
      </div>
      <div class="form">
         <form action="../../../../../logica/controllers/ControllerAjuda.php" method="post">
               <div class="input">
                  <label for="controle">Você tem controle sobre o seu próprio dinheiro ou salário?</label></br>
                  <select id="controle" name="controle">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>

               <div class="input">
                  <label for="impedido">Alguém impede você de trabalhar ou tomar decisões financeiras?</label></br>
                  <select id="impedido" name="impedido">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="acesso">Você tem acesso a recursos financeiros básicos (dinheiro, cartão, contas)?</label></br>
                  <select id="acesso" name="acesso">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="controlador">Quem controla suas finanças?</label></br>
                  <select id="controlador" name="controlador">
                        <option value="parceiro">Parceiro</option>
                        <option value="familiar">Familiar</option>
                        <option value="outro">Outro</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="coagido">Você já se sentiu obrigado(a) a entregar seu dinheiro para alguém?</label></br>
                  <select id="coagido" name="coagido">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="procurou_ajuda">Você já procurou ajuda ou orientação financeira?</label></br>
                  <select id="procurou_ajuda" name="procurou_ajuda">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="button">
                  <button type="submit" value="ajuda_financeira" name="ajuda_financeira">Enviar</button>
               </div>
         </form>
      </div>
    </section>
    
</body>

</html>