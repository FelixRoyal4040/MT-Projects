<?php
  session_start();

  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: 0");

  if(!isset($_SESSION['user_id'])){
   header('Location: ../../Login-Registration/login.php');
   exit; 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Panel</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/heading.css">
  <link rel="stylesheet" href="css/side-menu.css">
  <link rel="stylesheet" href="css/container.css">
  <link rel="stylesheet" href="css/content.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/media_query.css">
</head>
<body>
  <!--
  <div class="side-menu">
    <div class="brand-name">
      <img src="images/logo.png" alt="" width="80">
      <h1 class="h1">FALLINGSKY</h1>
    </div>
    <ul>
      <li class="active" content-id="dashboard"><ion-icon name="home-outline"></ion-icon>&nbsp; <span>Dashboard</span></li>
      <li content-id="user"><ion-icon name="person-outline"></ion-icon>&nbsp; <span>Users</span></li>
      <li content-id="stock"><ion-icon name="clipboard-outline"></ion-icon>&nbsp; <span>Stock</span></li>
      <!--<li content-id="notification"><ion-icon name="notifications-outline"></ion-icon>&nbsp; <span>Notification</span></li>-->
      <!--<li content-id="income"><ion-icon name="add-outline"></ion-icon>&nbsp; <span>Income</span></li>-->
      <!--<li content-id="settings"><ion-icon name="settings-outline"></ion-icon>&nbsp; <span>Settings</span></li>-->
      <!--<a href="php/logout.php" style="text-decoration: none;"><li><ion-icon name="log-out-outline"></ion-icon>&nbsp; <span>Log Out</span></li></a>
    </ul>
  </div>-->
  <header>
    <div class="container-header">
      <div class="brand-name">
        <a href=""><img src="images/logo.png" alt="" width="70"></a>
        <a href=""><h3>FALLINGSKY</h3></a>
      </div>
      <button class="navbar-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>
      <nav class="navbar-menu">
        <a href="#dashboard" content-id="dashboard" class="selected">Home</a>
        <a href="#" content-id="user">Cursos</a>
        <a href="#" content-id="loja">Loja</a>   
        <a href="#" content-id="sobre">Sobre nós</a>
        <a href="#" content-id="ct">Contacto</a>
        <div class="user">
          <ion-icon name="notifications-outline" title="Notification"></ion-icon>
          <div class="img-case">
            <ion-icon name="person-circle-outline" title="Profile"></ion-icon>
          </div>
          <ion-icon name="settings-outline" title="Settings"></ion-icon>
        </div>        
      </nav>
      
    </div>
    
  </header>
  <div class="container">
    <!--
    <div class="header">
      <div class="nav">
        <div class="search">
          <input type="text" placeholder="Search..">
          <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
        </div>
        <div class="user">
          <ion-icon name="notifications-outline" title="Notification"></ion-icon>
          <div class="img-case">
            <ion-icon name="person-circle-outline" title="Profile"></ion-icon>
          </div>
          <ion-icon name="settings-outline" title="Settings"></ion-icon>
        </div>
      </div>
    </div>-->
    <!--Dashboard-->
    <div class="content show" id="dashboard">
      
      <div class="container-box">
        <p>
          <h1 class="h1"><?php
            echo "Welcome, User " . $_SESSION['nome'];
          ?></h1>
        </p>
        <br>
        <p>  
          <h2 class="h1">Esta é a Dashboard do usuário</h2>
        </p>

        <div class="logout">
          <a href="php/logout.php" style="text-decoration: none;"><ion-icon name="log-out-outline"></ion-icon>&nbsp; <span>Log Out</span></a>
        </div>
      </div>
      
      <div class="cards">
        <div class="card c">
          <div class="box">
            <h1 class="js-costumers-count count"></h1>
            <h3>Buyers</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="person-outline"></ion-icon>
          </div>
        </div>
      
        <div class="card c">
          <div class="box">
            <h1 class="js-workers-count count"></h1>
            <h3>Products</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="archive-outline"></ion-icon>
          </div>
        </div>

        <div class="card c">
          <div class="box">
            <h1 class="js-admins-count count"></h1>
            <h3>Courses</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="clipboard-outline"></ion-icon>
          </div>
        </div>
      </div>
        
      <div class="cards">
        <div class="card">
          <div class="box">
            <h1 class="js-costumers-count count"></h1>
            <h3>Buyers</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="person-outline"></ion-icon>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <h1 class="js-workers-count count"></h1>
            <h3>Products</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="archive-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <h1 class="js-admins-count count"></h1>
            <h3>Courses</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="clipboard-outline"></ion-icon>
          </div>
        </div>
        
          <div class="card">
            <div class="box">
              <h1>0</h1>
              <h3>Stock</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="clipboard-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
  

  <!--Dashboard-->
    <div class="content" id="user">
      
      <div class="container-box">
        <p>
          <h1 class="h1"><?php
            echo "Welcome, User " . $_SESSION['nome'];
          ?></h1>
        </p>
        <br>
        <p>  
          <h2 class="h1">Em construção!</h2>
        </p>

        <div class="logout">
          <a href="php/logout.php" style="text-decoration: none;"><ion-icon name="log-out-outline"></ion-icon>&nbsp; <span>Log Out</span></a>
        </div>
      </div>
    
      </div>

    <div class="content" id="sobre">
      
      <div class="container-box">
        <p>
          <h1 class="h1"><?php
            echo "Welcome, User " . $_SESSION['nome'];
          ?></h1>
        </p>
        <br>
        <p>  
          <h2 class="h1">Em construção!</h2>
        </p>

        <div class="logout">
          <a href="php/logout.php" style="text-decoration: none;"><ion-icon name="log-out-outline"></ion-icon>&nbsp; <span>Log Out</span></a>
        </div>
      </div>
    
      </div>


      <div class="content" id="loja">
      
      <div class="container-box">
        <p>
          <h1 class="h1"><?php
            echo "Welcome, User " . $_SESSION['nome'];
          ?></h1>
        </p>
        <br>
        <p>  
          <h2 class="h1">Em construção!</h2>
        </p>

        <div class="logout">
          <a href="php/logout.php" style="text-decoration: none;"><ion-icon name="log-out-outline"></ion-icon>&nbsp; <span>Log Out</span></a>
        </div>
      </div>
    
      </div>


      <div class="content" id="ct">
      
      <div class="container-box">
        <p>
          <h1 class="h1"><?php
            echo "Welcome, User " . $_SESSION['nome'];
          ?></h1>
        </p>
        <br>
        <p>  
          <h2 class="h1">Em construção!</h2>
        </p>

        <div class="logout">
          <a href="php/logout.php" style="text-decoration: none;"><ion-icon name="log-out-outline"></ion-icon>&nbsp; <span>Log Out</span></a>
        </div>
      </div>
    
      </div>
    </div>
  <div class="footer-principal">
    <div class="footer">
    <section>
      <div class="f-description">
        <h3 class="h1">FallingSky</h3>
        <div>FallingSky é uma ideia de projecto que, inicialmente, era apenas uma ideia de criança (nasceu em 2016) e agora pretendo torná-la real. O motivo da escolha do projecto dá-se pelo facto da evolução das tecnologias actuais, onde viso aos usuários terem o máximo de conhecimento possível das novas demandas do mercado digital, com a ajuda de profissionais, bem como, terem acesso a produtos de qualidade, ou seja, pretendo atingir as pessoas interessadas em aprender ou evoluir na área de TI, assim como consumir de equipamentos e soluções tecnológicas.</div>
      </div>
    </section>

    <section>
      <div class="inputs-registration">
        <h3 class="h1">Envie uma mensagem</h3>
        <input type="text" class="small-input" placeholder="escreva seu email">
        <input type="text" class="big-input" placeholder="descrição da mensagem">
        <button class="btn-enviar">
          Enviar
        </button>
      </div>
    </section>

    <section>
      <div class="f-services">
        <h3 class="h1">Serviços</h3>
        <br>
        <span>Formação de Profissionais</span>
        <span>Criação de Startups</span>
        <span>Conexões</span>
      </div>
    </section>

    <section>
      <div class="f-services">
        <h3 class="h1">Contacta-nos</h3>
        <br>
        <span>gamerpolicarpo444@gmail.com</span>
        <span>Facebook: FallingSky</span>
        <span>Instagram: @FallingSky</span>
        <span>LinkedIn: Fábio Policarpo</span>
      </div>
    </section>
    </div>
  </div>

  <div class="footer-secundaria">
    
    <p>© 2025 All Rights Reserved. Design by canga dev</p>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="js/heading.js"></script>
  <script src="js/script2.js"></script>
</body>
</html>