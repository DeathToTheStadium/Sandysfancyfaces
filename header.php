<?php wp_head() ?>

<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sandys fancy Faces</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<!--  bootstrap-css  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!--  bootstrap-css-end   -->
  


<!--  Font-Awsome  -->
  <script src="https://kit.fontawesome.com/223dd324fd.js" crossorigin="anonymous"></script>
<!--  Font-awsome-end  -->
</head>
<body>
  <nav>
    <?php wp_nav_menu( "myfirsttheme",array(
      "menu" =>'',
      "menu_class" =>'navbar-nav navbar',
      "menu_id" =>'navigation',
      "echo" => true,
      "before"=> "<li class="."nav-item"."><a class="."nav-link"." href="."#".">",
      "after" => "</a></li>"
    ) ) ?>
  </nav>
  <header class="jumbotron-grad">
    <nav class="navbar navbar-expand-sm navbar-dark stick-top">
      <a class="navbar-brand flex" href="<?php echo home_url(); ?>">
          <div class="flex-container">
            <img class='rounded-circle' width="75px" src="http://localhost/Sandyswebsite/wordpress/wp-content/uploads/2020/06/inbound8873260563998666165.jpg" alt="Sandys-logo">
            <h1>Sandys <br> Fancy Faces</h1>
          </div>
        </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon" type="button"> 
        </span> 
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav navbar">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-primary" href="#" style="font-weight: bold;">Contact us</a> 
          </li>
        </ul>
      </div>
    </nav>

    <div class="container shadow" style="background-color: rgba(0, 0,0,.1);">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner container">
                <div class="carousel-item py-5 active">
                    <div class="row p-5">
                        <div class="col-sm-6">
                            <img class="rounded shadow" src="Assets/MEDIA/belly-painting.jpg" width="500px" height="250px" alt="belly_painting">
                        </div>
                        <div class="col-sm-6 p-5">
                            <h2>Some text</h2>
                            <hr>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quaerat! </p>
                            <button>Call US +1-888-777-9999</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row p-5">
                        <div class="col-sm-6">
                            <img src="Assets/MEDIA/belly-painting.jpg" width="500px" height="250px" alt="belly_painting">
                        </div>
                        <div class="col-sm-6 p-5">
                            <h2>Some text</h2>
                            <hr>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quaerat! </p>
                            <button>Call US +1-888-777-9999</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row p-5">
                        <div class="col-sm-6">
                            <img src="Assets/MEDIA/belly-painting.jpg" width="500px" height="250px" alt="belly_painting">
                        </div>
                        <div class="col-sm-6 p-5">
                            <h2>Some text</h2>
                            <hr>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quaerat! </p>
                            <button>Call US +1-888-777-9999</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row p-5">
                        <div class="col-sm-6">
                            <img src="Assets/MEDIA/belly-painting.jpg" width="500px" height="250px" alt="belly_painting">
                        </div>
                        <div class="col-sm-6 p-5">
                            <h2>Some text</h2>
                            <hr>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quaerat! </p>
                            <button>Call US +1-888-777-9999</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
    </div>

    <!-- <div class="container">
      <div class="row">
        <div class="col-sm-6">
            <img class="img-fluid" src="Assets/MEDIA/belly-painting.jpg" alt="">
        </div>
        <div class="col-sm-6 pb-5">
          <h2>Need to book a party</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolores quis suscipit eius tempora impedit consequuntur placeat itaque! In, error tenetur ab doloribus dolorum sed.</p>
        </div>
      </div>
    </div> -->

  </header>