<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
  />
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/Cliente.css">
    <link rel="stylesheet" href="css/janelaFlutuante.css">
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
                <span id="ativo">
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
                <span>
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
            <div class="cards">
                <div class="cards__card"> 
                    <button class="card__adicionar" id="openBtn">
                         <i class="material-symbols-outlined">add_circle</i>
                    </button>
                </div>
                
            </div>
        </section>
    </main>
































  <div class="overlay" id="overlay"></div>

  <div class="modal" id="modalForm">
    <form action="php/cliente.php" method="post">
        <div class="caixa__inputs">
          <label for="id" class="label__form">
            <h1 class="label__text">ID</h1>
            <input type="text" name="id" class="inputs__form id__input">
          </label>
          
          <label for="Nome" class="label__form">
            <h1 class="label__text">Nome</h1>
            <input type="text" name="nome" class="inputs__form nome__input">
          </label>
    
          <label for="contato" class="label__form">
            <h1 class="label__text">Sobrenome</h1>
            <input type="text" name="sobrenome" class="inputs__form contato__input">
          </label>
    
          <label for="email" class="label__form">
            <h1 class="label__text">E-mail</h1>
            <input type="email" name="email" class="inputs__form email__input">
          </label>
    
          <label for="telefone" class="label__form">
            <h1 class="label__text">Telefone</h1>
            <input type="tel" name="telefone" class="inputs__form telefone__input">
          </label>
    
          <label for="endereco" class="label__form">
            <h1 class="label__text">Endereço</h1>
            <input type="text" name="endereco" class="inputs__form endereco__input">
          </label>
    
          <label for="numero" class="label__form">
            <h1 class="label__text">Nº</h1>
            <input type="text" name="numero" class="inputs__form numero__input">
          </label>
        </div>
    
        <div class="caixa__logo">
          <img src="img/toshu__menu.png" alt="logo">
        </div>
    
        <div class="botoes">
          <input type="button" value="Fechar" class="botoes__form" id="closeBtn">
          <input type="submit" value="Cadastrar" class="botoes__form">
        </div>
       </form>
  </div>


  <script type="module" src="js/janelasFlutuantes.js"></script>
</body>
</html>

