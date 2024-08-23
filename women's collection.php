<?php
include 'databaseconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Women's Collection</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/2df014e953.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="Logo.png">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Fira+Code:wght@300..700&family=Hind+Siliguri:wght@300;400;500;600;700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Protest+Riot&family=Tiro+Bangla:ital@0;1&display=swap" rel="stylesheet">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- css link -->
    <link rel="stylesheet" href="styless.css">
    <!-- search bar styling -->
    <style>
        .search-container {
            display: flex;
            align-items: center;
            border: 2px solid grey;
            border-radius: 25px;
            padding: 5px;
            width:500px;
            background-color: #fff;
            margin-left:50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .search-input {
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 10px;
            flex-grow: 1;
            font-size: 16px;
            width:100%;
            min-width: 200px;
        }

        .search-button {
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 0 5px;
        }

        .search-button img {
            width: 20px;
            height: 20px;
        }

        .search-input::placeholder {
            color: #999;
        }
  </style>

</head>
<body>
    <!-- <nav class="mb-2 w-100 shadow-sm navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand logo-size" href="home.php"><img src="png/Myntra.png" style="width: 70px;
        left: 15px; position: relative"/></a>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-button"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7_Ef8p3AiMNU7SmrPBzPrmlRM9kFAR1zYgw&s" alt="Search" /></button>
        </div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
      
  </a>
<span class="collapse navbar-collapse">
  <span class="container clearfix">
  <ul class="navbar-nav mr-auto mb-2 mb-lg-0 float-right">
      <li class="nav-item"><a class="nav-link" href="women's collection.php">Women's Section</a></li>
      <li class="nav-item"><a class="nav-link" href="men's collection.php">Men's Section</a></li>
      <li class="nav-item"><a class="nav-link" href="customize.php">Kid's sectionn</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Game</a></li>
    </ul>
      </span>
</nav> -->
<header>
        <div class="header_top">
            <div class="logo headhover">
              <a href="home.php"><img src="walmartLogo.svg" alt=""></a>
            </div>
            <div class="head_sec2 headhover">
                <span class="material-symbols-outlined">
                    widgets
                </span>
                <p class="hsec2_bottom">Departments</p>
            </div>
            <div class="head_sec3 headhover">
                <span class="material-symbols-outlined">
                    view_cozy
                    </span>
                <p class="hsec2_right">Services</p>
            </div>
            <div class="headsearch">
                <div class="input_search">
                    <input type="search" placeholder="Search evrything at Walmart online and in store">
                </div>
                <div class="icon_search">
                    <span class="material-symbols-outlined">
                        search
                        </span>
                </div>
            </div>
            <div class="headsec5 headhover">
                <div class="hs5_icon">
                    <span class="material-symbols-outlined">
                        favorite
                    </span>
                </div>
                <div class="hs5_para">
                    <p class="up">Reorder</p>
                    <p class="down">My Items</p>
                </div>
            </div>
            <div class="headsec5 headhover">
                <div class="hs5_icon">
                    <span class="material-symbols-outlined">
                        person
                        </span>
                </div>
                <div class="hs5_para">
                    <p class="up">Sign In</p>
                    <p class="down">Account</p>
                </div>
            </div>
            <div class="head_cart headhover">
                <div class="carticon">
                    <span class="material-symbols-outlined">
                        shopping_cart
                        </span>
                        <p class="price">$0.00</p>
                </div>
                <div class="cart_value">
                    <p class="value">0</p>
                </div>
            </div>
        </div>

        <div class="header_bootom">
            <div class="headbtm_left">
                <div class="hbtm_left">
                    <div class="hbleft_icon">
                        <span class="material-symbols-outlined">
                            handshake
                            </span>
                    </div>
                    <div class="hbleft_info">
                        <p>How do you want your items?
                        </p>
                    </div>
                    <div class="hbleft1_icon2">
                        <span class="material-symbols-outlined">
                            expand_more
                            </span>
                    </div>
                    <div class="spaser">
                        <pre>  |  </pre>
                    </div>
                    <div class="hbleft_icon3">
                        <span class="material-symbols-outlined">
                            location_on
                            </span>
                    </div>
                    <div class="hbleft_info2">
                        <p>Chandigarh, 85945</p>
                    </div>
                    <div class="hbleft_icon4">
                        <span class="material-symbols-outlined">
                            warehouse
                        </span>
                    </div>
                    <div class="hbleft_info3">
                        <p>Chandigarh Supercenter</p>
                    </div>

                </div>
            </div>
            <div class="headbtm_right">
                    <p class="underline"><a href="home.php" style="color: white;">Home</a></p>
                    <p class="underline"><a href="women's collection.php" style="color: white;">Women's</a></p>
                    <p class="underline"><a href="customize.php" style="color: white;">Virtual</a></p>
					          <p class="underline"><a href="men's collection.php" style="color: white;">Men's</a></p>
                    <p class="underline"><a href="accessories.php" style="color: white;">Game</a></p>
                    <p class="underline">Black & Unlimited</p>
                    <p class="underline">Fashion</p>
                    <p class="underline">Electronics</p>
            </div>
        </div>
</header>


<?php
if(isset($_POST["submit1"])) {
    $file_name = $_FILES["image"]["name"];
    $file_size = $_FILES["image"]["size"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];
    move_uploaded_file($file_tmp , "uploads/" . $file_name);
    $path = "/uploads/".$file_name;
    /*echo $path;*/
    $q = json_decode(shell_exec("python search.py $path"));
    ?>
    <div class="container mb-5 mt-5" id="pro">
          <div class="row">
            <?php 
    foreach ($q as $value)
    {
      if (substr($value, 0,4)=='macc' or substr($value, 0,4)=='mclo') {
        continue;
      }
              $i = str_replace("\\", "/", $value);
              $i = 'img_fashion/'.$i;
              $queri = mysqli_query($conn,"SELECT * FROM wclothes WHERE img_path = '$i'");
              $row = mysqli_fetch_assoc($queri);
              if ($row['img_path']=='') {
                continue;
              }
              ?>
              <div class="col-md-4">
                <div class="card mt-3">
                  <div class="product-1 align-items-center p-2 text-center">
                        <div id="m1div">
                          <img src="<?php echo $row['img_path']; ?>" style="width:180px">
                          <h5><?php echo $row['title']?></h5>
                  <div class="mt-3 info">
                    <span class="text1 d-block">Available in S-3XL</span>
                  </div>
                  <div class="cost mt-3 text-dark">
                    <span ><?php echo $row['price'];?></span>
                    <div class="star mt-3 align-items-center">
                      <?php
                      $rating =  $row['rating'];
                      for($i=0;$i<$rating;$i++){ ?>
                      <i class="fa fa-star" style="color:orange"></i>
                      <?php
                      } 
                      ?>
                      <?php for($i=0;$i<(5-$rating);$i++){ ?>
                      <i class="fa fa-star"></i>
                      <?php 
                    }
                    ?>
                    </div>
                  </div>
                </div>
                <!--button-->
                <button type="button" class="w-100 btn btn-success"><img src="png/shopping-bag.png" style="margin-right: 0.4em;">Add to cart</button>
              </div>
            </div>
          </div> 
    <?php
}?>
</div>
    </div>
    <?php }
    elseif (isset($_POST["submit2"])) {
      $file_name = $_FILES["image"]["name"];
    $file_size = $_FILES["image"]["size"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];
    move_uploaded_file($file_tmp , "uploads/" . $file_name);
    $path = "/uploads/".$file_name;
    /*echo $path;*/
    $q = json_decode(shell_exec("python search.py $path"));
    ?>
    <div class="container mb-5 mt-5" id="pro">
          <div class="row">
            <?php 
    foreach ($q as $value)
    {
      if (substr($value, 0,4)=='macc' or substr($value, 0,4)=='mclo' or substr($value, 0,4)=='wclo') {
        continue;
      }
              $i = str_replace("\\", "/", $value);
              $i = 'img_fashion/'.$i;
              $queri = mysqli_query($conn,"SELECT * FROM wacc WHERE img_path = '$i'");
              $row = mysqli_fetch_assoc($queri);
              if ($row['img_path']=='') {
                continue;
              }
              ?>
              <div class="col-md-4">
                <div class="card mt-3">
                  <div class="product-1 align-items-center p-2 text-center">
                        <div id="m1div">
                          <img src="<?php echo $row['img_path']; ?>" style="width:200px">
                          <h5><?php echo $row['title']?></h5>
                  <div class="mt-3 info">
                    <span class="text1 d-block">Available in S-3XL</span>
                  </div>
                  <div class="cost mt-3 text-dark">
                    <span ><?php echo $row['price'];?></span>
                    <div class="star mt-3 align-items-center">
                      <?php
                      $rating =  $row['rating'];
                      for($i=0;$i<$rating;$i++){ ?>
                      <i class="fa fa-star" style="color:orange"></i>
                      <?php
                      } 
                      ?>
                      <?php for($i=0;$i<(5-$rating);$i++){ ?>
                      <i class="fa fa-star"></i>
                      <?php 
                    }
                    ?>
                    </div>
                  </div>
                </div>
                <!--button-->
                <button type="button" class="w-100 btn btn-success"><img src="png/shopping-bag.png" style="margin-right: 0.4em;">Add to cart</button>
              </div>
            </div>
          </div> 
    <?php
}?>
</div>
    </div>
    <?php }
    else{?>

    
<div class="container mb-5 mt-5" id="pro">
  <?php
    $query = mysqli_query($conn,"SELECT * FROM wclothes");
    $rows = mysqli_num_rows($query); 
   ?>

  <div class="row">
     <?php
      if($rows>0)
    {
      while($row = mysqli_fetch_assoc($query))
      {
  ?> <div class="col-md-4 p-4" style="cursor: pointer;">
        <div class="card mt-3">
          <div class="product-1 align-items-center p-2 text-center">
            <img src="<?php echo $row['img_path'] ?>" alt="" class="rounded" width="160">
            <h6><?php echo $row['title']; ?></h6>
            <div class="info">
               <span class="text1 d-block">Available in S-3XL</span>
            </div>
            <div class="cost text-dark">
              <span><b><?php echo $row['price']; ?>/-</b></span>
              <div class="star align-items-center">

                <?php
                $rating =  $row['rating'];
                for($i=0;$i<$rating;$i++){ ?>
                <i class="fa fa-star" style="color:orange"></i>
                <?php
                } 
                ?>
                <?php for($i=0;$i<(5-$rating);$i++){ ?>
                <i class="fa fa-star"></i>
                <?php 
              }
              ?>
              </div>
            </div>
          </div>
          <button type="button" class="w-100 btn btn-success"><img src="png/shopping-bag.png" style="margin-right: 0.4em;">Add to cart</button>
        </div>
      </div>
      <?php 
    }
    }
    ?>

<!--end-->

  </div>
</div>

    <?php 
}
?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>