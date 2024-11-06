<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
  />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/Home.css" />
</head>
<body>
    <aside class="sidebar">
        <header class="sidebar__header">
            <a href="#">
                <span id="ativo">
                    <img src="img/toshu__menu.png" alt="Logo" class="logo__img">
                    <span>Home <?php
                        session_start();
                        if (isset($_SESSION['nm_funcionario'])) {
                        $nome = $_SESSION['nm_funcionario'];
                        echo "Olá ".$nome;
                        }else{
                            echo "<script>alert('Você não está Logado!'); history.back() </script>";
                        }
                    ?></span>
                </span>  
            </a>
            <a href="php/logout.php">
                <span>
                    <i class="material-symbols-outlined">work</i>
                    <span>Sair</span>
                </span>
            </a>
        </header>
        <nav>
            <a href="Cliente.html">
                <span>
                    <i class="material-symbols-outlined">person</i>
                    <span>Cliente</span>
                </span>
            </a>

            <a href="Funcionario.html">
                <span>
                    <i class="material-symbols-outlined">work</i>
                    <span>Funcionario</span>
                </span>
            </a>
            

            <a href="Fornecedor.html">
                <span>
                    <i class="material-symbols-outlined">local_shipping</i>
                    <span>Fornecedor</span>
                </span>
            </a>

            <a href="Lancamento.html">
                <span>
                    <i class="material-symbols-outlined">payments</i>
                    <span>Lançamento</span>
                </span>
            </a>

            <a href="Categoria.html">
                <span>
                    <i class="material-symbols-outlined">category</i>
                    <span>Categoria</span>
                </span>
            </a>
            
            <a href="#" class="config">
                <span>
                    <i class="material-symbols-outlined">settings</i>
                    <span>Configurações</span>
                </span>
            </a>
        </nav>
        
            
    </aside>
    <main class="main">
        <section class="main__section">
            <div class="section_tushu">
                <h1>歡迎來到圖書</h1>
                <h2>Tushu Akashic</h2>
            </div>
        </section>
    </main>
</body>
</html>

