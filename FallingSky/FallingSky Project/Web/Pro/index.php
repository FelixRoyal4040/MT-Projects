<?php
  session_start();

  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: 0");

  if(!isset($_SESSION['user_id']) || $_SESSION['tipo_id'] !== 3){
   header('Location: ../../Login-Registration/login.php');
   exit; 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pro Panel</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/side-menu.css">
  <link rel="stylesheet" href="css/container.css">
  <link rel="stylesheet" href="css/content.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/media_query.css">
</head>
<body>
  <div class="side-menu">
    <div class="brand-name">
      <img src="images/logo.png" alt="" width="80">
      <h1 class="h1">FALLINGSKY</h1>
    </div>
    <ul>
      <li class="active" content-id="dashboard"><ion-icon name="home-outline"></ion-icon>&nbsp; <span>Home</span></li>
      <li content-id="user"><ion-icon name="archive-outline"></ion-icon>&nbsp; <span>Products</span></li>
      <li content-id="courses"><ion-icon name="clipboard-outline"></ion-icon>&nbsp; <span>Courses</span></li>
      <li content-id="stock"><ion-icon name="clipboard-outline"></ion-icon>&nbsp; <span>Stock</span></li>
      <li content-id="income"><ion-icon name="add-outline"></ion-icon>&nbsp; <span>Income</span></li>
      <!--<li content-id="settings"><ion-icon name="settings-outline"></ion-icon>&nbsp; <span>Settings</span></li>
      <li content-id="user"><ion-icon name="person-outline"></ion-icon>&nbsp; <span>Sallers</span></li>-->
      <a href="php/logout.php" style="text-decoration: none;"><li><ion-icon name="log-out-outline"></ion-icon>&nbsp; <span>Log Out</span></li></a>
    </ul>
  </div>

  <div class="container">
    
    <!--Dashboard-->
    <div class="content show" id="dashboard">
      <div class="header header-dashboard">
      <div class="text">Dashboard</div>
      <div class="account">
        <div class="img-case">
          <img src="images/sky.png" alt="" width="60">
        </div>

        <div>
          <span><?php echo $_SESSION['nome']; ?></span>
          <p style="font-size: 10px;">Pro User</p>
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
              <ion-icon name="person-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <h1 class="js-admins-count count"></h1>
            <h3>Courses</h3>
          </div>
          <div class="icon-case">
              <ion-icon name="person-outline"></ion-icon>
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

      <div class="content-2">
        <div class="table2">
          <div class="title">
            <h2>Tranding Products</h2>
            <a href="" class="btn">View All</a>
          </div>
          <table>
            
          </table>
        </div>

        <div class="table">
          <div class="title">
            <h2>New Buyers</h2>
            <a href="html/buyers.html" class="btn">View All</a>
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

      <!--Products-->
    
      <div class="content content-product" id="user">
        <div class="header">
          <div class="nav">
            <div class="search">
              <input type="text" placeholder="Search Products...">
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

      <h1 class="h">Products</h1>
      <button class="addProducts" onclick="
        viewForm();
      "><span>Add Products</span><ion-icon name="add-outline"></ion-icon></button>
      <div class="modal-product">
        <div class="wrapper">
          <span class="icon-close" onclick="
            closeForm(); 
            "><ion-icon name="close-outline"></ion-icon>
          </span>
          <div class="form-box">
            <h2 style="color: rgb(83, 164, 195);">Add New Product</h2>
            <form id="productForm" enctype="multipart/form-data">
              <div id="box-input">
                <div class="box-input">
                  <div class="input-box">
                    <span class="icon"><ion-icon name="tv-outline"></ion-icon></span>
                    <input type="text" name="product_name" placeholder="Product Name" required>
                  </div>
                  <div class="input-box">
                    <select name="category" id="" class="input">
                      <option value="" disabled selected>Category</option>
                      <option value="1">Computers</option>
                      <option value="2">Smartphones</option>
                      <option value="3">Domestic Electronics</option>     
                    </select>
                  </div>
                </div>
                <div class="box-input">
                  <div class="input-box">
                    <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                    <input type="number" step="0.01" name="price" placeholder="Price" required>
                  </div>
                  <div class="input-box">
                    <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                    <input type="number" name="quantity" placeholder="Quantity" required>
                  </div>
                </div>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="images-outline"></ion-icon></span>
                <input type="file" name="image" required>
              </div>
              <div class="input-box textarea">
                <textarea name="about" id="" rows="6" placeholder="Product description"  class="input2"></textarea>
              </div>
              <button type="submit" class="btnProduct">Add Product</button>
            </form>
          </div>
        </div>
      </div>
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
              <th>Option</th>
            </tr>
            <tbody id="product-list">
              
            </tbody>
          </table>
        </div>
        </div>
      </div>

      <!--Courses-->
      <div class="content" id="courses">
        <div class="header">
          <div class="nav">
            <div class="search">
              <input type="text" placeholder="Search Courses...">
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

      <h1 class="h">Course</h1>
      <button class="addCourses" onclick="
        viewFormCourse();
      "><span>Add Courses</span><ion-icon name="add-outline"></ion-icon></button>
      <div class="modal-course">
        <div class="wrapper wrapper-course">
          <span class="icon-close" onclick="
            closeFormCourse(); 
            "><ion-icon name="close-outline"></ion-icon>
          </span>
          <div class="form-box">
            <h2 style="color: rgb(83, 164, 195);">Add New Course</h2>
            <form method="POST" action="php/add_courses.php">
              <div class="input-box">
                <span class="icon"><ion-icon name="tv-outline"></ion-icon></span>
                <input type="text" name="course_name" placeholder="Course Name" required>
              </div>
              <div class="input-box">
                <select name="category" id="" class="input">
                  <option value="" disabled selected>Category</option>
                  <option value="Electronics">General Electronics</option> 
                  <option value="Computers">Computers</option>
                  <option value="Smartphones">Smartphones</option>     
                </select>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                <input type="number" step="0.01" name="price" placeholder="Price" required>
              </div>
              
              <button type="submit" class="btnCourse">Add Course</button>
            </form>
          </div>
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
            </tr>
            <tbody id="course-form"></tbody>
          </table>
        </div>
        </div>
      </div>
      <!--Buyers-->
    <div class="content" id="income">
      <h1>In Production</h1>   
    </div>

      
    <!--Stock-->
    <div class="content" id="stock">
      <h1>In Production</h1>   
    </div>

    <!--Settings-->
    <div class="content" id="settings">
      <h1>In Production</h1>   
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="script.js"></script>
<script src="js/script2.js"></script>
<script src="js/form-modals.js"></script>
<script src="js/product-AJAX.js"></script>

</body>
</html>