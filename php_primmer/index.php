<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ty">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ser">contact</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/pexels-andrés-garcía-6991569.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tokyo</h5>
                    <p>my favourite city.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../image/pexels-roberto-vivancos-2190283.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>New York</h5>
                    <p>my dream city to live.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../image/89.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Italy</h5>
                    <p>Best country for honey moon.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="my-5">
        <div>
            <h1 class="text-center">
                About Us
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="../image/pexels-roberto-vivancos-2190283.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">i am yash the great</h2>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore doloribus quaerat nulla quidem odio delectus porro maxime consectetur mollitia corrupti accusantium, sit eaque quo et illum nostrum harum architecto ab?</p>
                    <a href="about.php" class="btn btn-success"> check more</a>
                </div>
            </div>
        </div>

    </section>
    <section class="my-5" id="ty">
        <div>
            <h1 class="text-center">
                Services
            </h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 services">
                    <div class="card mx-5" style="width: 18rem;">
                        <img src="../image/89.jpg" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card  mx-5" style="width: 18rem;">
                        <img src="../image/89.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card  mx-5" style="width: 18rem;">
                        <img src="../image/89.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5" id="ser">
        <div>
            <h1 class="text-center">
                Contact Us Form
            </h1>
        </div> 
        <div class="w-50 m-auto">
        <form action="" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="Mobile" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control"  name="phnum" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control"  name="email" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="JOB POST" class="form-label">JOB POST </label>
                            <input type="text" class="form-control"  name="job" id="exampleFormControlInput1" required>


                        </div>
                        <div class="mb-3 mt-3">
                            
                            <input type="submit" class="btn btn-warning" name ="submit">
                        </div>
                    </form>
                    <?php

include 'connection.php';
   if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $phnum=$_POST['phnum'];
       $email=$_POST['email'];
       $job=$_POST['job'];
    //    $pass=password_hash($job,PASSWORD_ARGON2I);
       $inset="INSERT INTO `student_table`( `Name`, `email`, `mobile`, `password`)  VALUES ('$name','$email','$phnum','$job')";
      $gho =mysqli_query($con,$inset);
      if($gho){
        ?>
        <script>
            alert("data send successfully")
        </script>
        <?php
      }else{
        ?>
        <script>
            alert("fuck you")
        </script>
        <?php
      }
   }
  
   

?>
        </div>
        
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>