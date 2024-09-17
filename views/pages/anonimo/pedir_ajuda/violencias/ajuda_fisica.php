<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violência Física - Equalize</title>
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
         <h1>Violência Física</h1>
      </div>
      <div class="form">
         <form action="../../../../../logica/controllers/ControllerAjuda.php" method="post">
               <div class="input">
                  <label for="agressoes">Você já sofreu agressões físicas (socos, chutes, tapas, empurrões)?</label></br>
                  <select id="agressoes" name="agressoes">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>

               <div class="input">
                  <label for="frequencia">Com que frequência ocorrem essas agressões?</label></br>
                  <select id="frequencia" name="frequencia">
                        <option value="diariamente">Diariamente</option>
                        <option value="semanalmente">Semanalmente</option>
                        <option value="mensalmente">Mensalmente</option>
                        <option value="ocasionalmente">Ocasionalmente</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="atend_medico">Você já precisou de atendimento médico devido a essas agressões?</label></br>
                  <select id="atend_medico" name="atend_medico">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="agressor">Quem é o agressor?</label></br>
                  <select id="agressor" name="agressor">
                        <option value="parceiro">Parceiro</option>
                        <option value="familiar">Familiar</option>
                        <option value="colega">Colega de Trabalho</option>
                        <option value="outro">Outro</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="relatado">Você já relatou essas agressões para alguém?</label></br>
                  <select id="relatado" name="relatado">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                  </select>
               </div></br>
               
               <div class="input">
                  <label for="seguranca">Como você se sente em relação à sua segurança atualmente?</label></br>
                  <select id="seguranca" name="seguranca">
                        <option value="seguro">Seguro</option>
                        <option value="inseguro">Inseguro</option>
                        <option value="muito_inseguro">Muito inseguro</option>
                  </select>
               </div></br>
               
               <div class="button">
                  <button type="submit" value="ajuda_fisica" name="ajuda_fisica">Enviar</button>
               </div>
         </form>
      </div>
    </section>
    
</body>

</html>