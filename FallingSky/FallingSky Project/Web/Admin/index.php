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
  <title>Admin Panel</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/side-menu.css">
  <link rel="stylesheet" href="css/container.css">
  <link rel="stylesheet" href="css/content.css">
  <link rel="stylesheet" href="css/media_query.css">
</head>
<body>
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
      <a href="php/logout.php" style="text-decoration: none;"><li><ion-icon name="log-out-outline"></ion-icon>&nbsp; <span>Log Out</span></li></a>
    </ul>
  </div>

  <div class="container">
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
    </div>
    <!--Dashboard-->
    <div class="content show" id="dashboard">
      <h1 class="h"><?php
        echo "Welcome, Admin " . $_SESSION['nome'];
      ?></h1>
      <div class="cards">
        <div class="card">
          <div class="box">
            <h1 class="js-costumers-count count"></h1>
            <h3>Costumers</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="person-outline"></ion-icon>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <h1 class="js-workers-count count"></h1>
            <h3>Workers</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="person-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <h1 class="js-admins-count count"></h1>
            <h3>Admins</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="person-outline"></ion-icon>
          </div>
        </div>
        
          <div class="card">
            <div class="box">
              <h1 class="js-stock-count count"></h1>
              <h3>Stock</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="clipboard-outline"></ion-icon>
            </div>
          </div>
        </div>

      <div class="content-2">
        <div class="table2">
          <div class="title">
            <h2>New Solicitations</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table>
            
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Option</th>
            </tr>
            
            <tbody class="js-table">

            </tbody>
          </table>
        </div>

        <div class="table">
          <div class="title">
            <h2>New Costumers</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table>
            <tr>
              <th>Profile</th>
              <th>Name</th>
              <th>Info</th>
            </tr>
          <tbody class="T2"></tbody>
        </table>  
        </div>
        </div>
      </div>

      <!--Users-->
      <div class="content" id="user">
        <h1 class="h">Users</h1>
      <div class="content-3">
        <div class="table">
          <div class="title2">
            <h2>Costumers</h2>          
          </div>
          <table>
            <tr>
              <th>Profile</th>
              <th>Name</th>
              <th>Email</th>
            </tr>
            <tbody class="js-users_table-costumers"></tbody>
          </table>
        </div>
      </div>

      <div class="content-3">
          <div class="table">
            <div class="title2">
              <h2>Workers</h2>
            </div>
            <table> 
              <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Area de Actuação</th>
                <th>Status</th>
              </tr>
              
              <tbody class="js-users_table-workers"></tbody>
            </table>
          </div>
        </div>
      </div>

      <!--Notification-->
      <div class="content" id="notification">
        <div class="content-2">
          <div class="table2">
            <div class="title2">
              <h2>Solicitations</h2>
            </div>
            <table>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Option</th>
              </tr>
              <tbody class="table"></tbody>
            </table>
          </div>
        </div>
      </div>
      <!--Stock-->
      <div class="content" id="stock">
        <h1 class="h">Stock</h1>
              <div class="content-3">
        <div class="table">
          <div class="title2">
            <h2>Products</h2>          
          </div>
          <table>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Profissional</th>
              <th>Option</th>
            </tr>
            <tbody id="product-list"></tbody>
          </table>
        </div>
        </div>
        
        <div class="content-3">
        <div class="table">
          <div class="title2">
            <h2>Courses</h2>          
          </div>
          <table>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Status</th>
              <th>Profissional</th>
              <th>Option</th>
            </tr>
            <tbody id="course-list"></tbody>
          </table>
        </div>
        </div>
      </div>

      
    <!--Income-->
    <div class="content" id="income">
      <h1>In Production</h1>   
    </div>

    <!--Settings-->
    <div class="content" id="settings">
      <h1>In Production</h1>   
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="js/script.js"></script>
  <script src="js/users_script.js"></script>
  <script src="js/script2.js"></script>
  <script src="js/product.js"></script>
  <script src="js/course.js"></script>
</body>
</html>