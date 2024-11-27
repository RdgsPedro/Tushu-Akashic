<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
  />
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/categoria.css">
</head>
<body>
    <aside class="sidebar">
        <header class="sidebar__header">
            <a href="Home.php">
                <span>
                    <img src="img/toshu__menu.png" alt="Logo" class="logo__img">
                    <span>Home</span>
                </span>  
            </a>
        </header>
        <nav>
            <a href="Cliente.php">
                <span>
                    <i class="material-symbols-outlined">person</i>
                    <span>Cliente</span>
                </span>
            </a>

            <a href="Funcionario.php">
                <span>
                    <i class="material-symbols-outlined">work</i>
                    <span>Funcionario</span>
                </span>
            </a>

            <a href="Fornecedor.php">
                <span>
                    <i class="material-symbols-outlined">local_shipping</i>
                    <span>Fornecedor</span>
                </span>
            </a>

            <a href="Lancamento.php">
                <span>
                    <i class="material-symbols-outlined">payments</i>
                    <span>Lançamento</span>
                </span>
            </a>

            <a href="Categoria.php">
                <span id="ativo">
                    <i class="material-symbols-outlined">category</i>
                    <span>Categoria</span>
                </span>
            </a>
            
            <a href="php/logout.php" class="sair">
                <span>
                    <i class="material-symbols-outlined">logout</i>
                    <span>Sair</span>
                </span>
            </a>
        </nav>  
    </aside>
    <main class="main">
        <section class="main__section">
        <form action="php/categoria.php" method="post">
        <h2 class="textoCadastroCliente">Cadastro de categoria</h2> 
        <div class="caixa__inputs">

        <div class="inputs__1">
          <label for="id" class="label__form">
            <h1 class="label__text">ID</h1>
            <input type="text" name="id" class="inputs__form id__input" disabled="">
          </label>

          <label for="nome" class="label__form">
            <h1 class="label__text">Nome da categoria</h1>
            <input type="text" name="nome" class="inputs__form nome__input">
          </label>
          
        </div>

        <div class="inputs__2">
          <label for="descricao" class="label__form">
            <h1 class="label__text">descricao</h1>
            <textarea name="descricao" id="descricao" cols="30" rows="10" class="inputs__form descricao__input"></textarea>
          </label>
        </div>
      </div>

        <div class="caixa__logo">
          <img src="img/toshu__menu.png" alt="logo">
          <h1>Dados</h1>
        </div>
    
        <div class="botoes">
          <input type="reset" value="Fechar" class="botoes__form" id="closeBtn">
          <input type="submit" value="Cadastrar" class="botoes__form">
        </div>
       </form>
        </section>
    </main>
</body>
</html>

