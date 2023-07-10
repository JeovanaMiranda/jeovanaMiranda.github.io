
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/styleAreaDados.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
          <p>Logo</p></div
          <p>Main</p>
    </div>

        <div class="pesquisa">
            <div class="barraDePesquisa" >
                <img class="iconesA"src="../img/magnifying-glass.png" alt="">
                <input type="text" name="pesquisar" class="inputPesquisa"placeholder="Pesquisar">
            </div>
        </div>
    </div>
    <div class="perfil">
        <div class="conteudo">
            <div class="imagem">
                <img id="usuario"src="../img/user.png" alt="">
            </div>
            <div class="dados">
                <div class="text">
                    <form action="areaDados.php" method="post">
                        <input type="text" name="nome" class="dado nome" readonly=“true” value= "Nome de usuário">
                        <input type="text" name="city" class="dado" readonly=“true” value= "Cidade">
                        <input type="button" value="Editar Perfil" class="editar">
</form>
                </div>
            </div>

        </div>
    </div>
    <div class="areaProjeto">
        <div class="tipos">
           <button class="nomeProjeto"id="bnt1">PSW</button>
           <button class="nomeProjeto"id="bnt2">Projeto Integrador</button>
            <button class="nomeProjeto" id="bnt3">Freelancer</button>
        </div>
        <div class="novoProjeto">
            <div class="criar" id="div1">
                <div class="div_figura">
                    <img src="../img/ideia.png" alt="">
                </div>
                <div class="div_botao">
                <img src="../img/new-project.png" alt="" class="iconesA" id="newP">
                <button class="botaoCriar" id="psw">Criar Novo ProjetoA</button>
                </div>
            </div>
            <div class="criar hidden" id="div2">
                <img src="../img/new-project.png" alt="" class="iconesA" id="newP">
                <button class="botaoCriar" id="pi">Criar Novo ProjetoB</button>
            </div>
            <div class="criar hidden" id="div3">
                <img src="../img/new-project.png" alt="" class="iconesA" id="newP">
                <button class="botaoCriar" id="frelancer">Criar Novo ProjetoC</button>
            </div>
            
        </div>
    </div>
    
      
</body>
</html>