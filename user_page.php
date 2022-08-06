<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HomeAutomation || page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HOME AUTOMATION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user_page.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Home1.php">Home-1</a></li>
            <li><a class="dropdown-item" href="Home2.php">Home-2</a></li>
            
            <li><a class="dropdown-item" href="Home3.php">Home-3</a></li>
          
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
      
        <li class="nav-item">
          <!-- <a class="nav-link disabled">Disabled</a> -->
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


 <div class="container">

<div class="card" style="width: 23rem; ">
  <img src="home.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Home 1</h5>
    <p class="card-text">“Home automation” refers to the automatic and electronic control of household features, activity, and appliances.</p>
    <a href="Home1.php" class="btn btn-primary">Open</a>
  </div>
</div>
<div class="card" style="width: 23rem;">
  <img src="home.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Home 2</h5>
    <p class="card-text">“Home automation” refers to the automatic and electronic control of household features, activity, and appliances.</p>
    <a href="Home2.php" class="btn btn-primary">Open</a>
  </div>
</div>
<div class="card" style="width: 23rem;">
  <img src="home.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Home 3 </h5>
    <p class="card-text">“Home automation” refers to the automatic and electronic control of household features, activity, and appliances.</p>
    <a href="Home3.php" class="btn btn-primary">Open</a>
  </div>
</div>


<style>
  .container
{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
}
.container .card
{
   width: 330px;
   height: 650px;
   padding: 60px 30px;
   margin: 20px;
   background: #f2f3f7;
   box-shadow: 10px 10px 6px 6px rgba(255, 99, 71, 0.5);
 
  
}
body{
  background-image: url(img5.png),url();
  
  background-repeat: no-repeat;
  background-position: 1350px 150px;
  background-size: 750px 750px;
  
}
card{
  margin-top: 400px;
}

  </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>