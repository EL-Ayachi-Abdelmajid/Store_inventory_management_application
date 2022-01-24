<?php 
session_start();
if(!isset($_SESSION['g'])){
  header('location:login/connexion.php');
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Accueil</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,800;1,300;1,400;1,700&display=swap');
  </style>
  <link rel="stylesheet" href='style/style.css'>
</head>

<body class="sign-mode">
  <!-- header -->
  <?php require_once 'nav-bar.php'; ?>
  <main>
    <!-- write code here   -->
    <div class="chiffre">
      <div class="gain-jour">
        <h3>Les gains du jour</h3>
        <p>2000,500 DH</p>
      </div>
      <div class="gain-mois">
        <h3>Return de mois</h3>
        <p>12.000,300 DH</p>
      </div>
      <div class="total-gain">
        <h3>Total Sales de mois</h3>
        <p>60.980,119 DH</p>
      </div>
    </div>

    <div class="cat-class">
      <div class="box_">

        <div class="box--img"><img src="image/wash/wc3.png" alt="Machine a laver" id="cat1"></div>
        <div class="name-cate">
          <p>Machine a laver</p>
        </div>

      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/tv/tv2.jpg" alt="Télévision" id="cat2">
        </div>
        <div class="name-cate">
          <p>Télévision</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/seo/sh2.jpg" alt="Machine a coudre" id="cat2">
        </div>
        <div class="name-cate">
          <p>Machine a coudre</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/forno/oven1.png" alt="Four electrique" id="cat2">
        </div>
        <div class="name-cate">
          <p>Four electrique</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/cafe/c2.jpg" alt="Machine à café" id="cat2">
        </div>
        <div class="name-cate">
          <p>Machine à café</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/refrigerator/fr1.jpg" alt="Réfrigérateur" id="cat2">
        </div>
        <div class="name-cate">
          <p>Réfrigérateur</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/clean/n2.jpg" alt="Inspirateur" id="cat2">
        </div>
        <div class="name-cate">
          <p>Inspirateur</p>
        </div>
      </div>
      <div class="box_">
        <div class="box--img">
          <img src="image/ice/ice-fr5.jpg" alt="Machine a vaisselle" id="cat2">
        </div>
        <div class="name-cate">
          <p>Machine a vaisselle</p>
        </div>
      </div>
    </div>
<!-- 
        $count=0;
        
        if($count==0){
          echo $dt;
          $connect=true;
        }
        

    $database = mysqli_select_db($conn, $db);
    if (isset($_POST['cin'])) {
      $cin = $_POST['cin'];
      $password_ = $_POST['password'];
      $sql_login = "SELECT * FROM `employe` WHERE CIN='" . $cin . "' AND PASSWORD='" . $password_ . "'limit 1";
      $result = mysqli_query($conn, $sql_login);
      if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('you logged in')</script>";
        $connect=true;
        exit();
      } else {
        echo $dt;
        $connect=false;
        exit();
      }
    }
    

    ?> -->
   

  </main>

  <!-- javascript code -->
  <script type="text/javaScript" src="js.js">
  </script>

</body>

</html>