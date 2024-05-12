<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <!-- custom css link  -->
  <link rel="stylesheet" href="../custom_css/style.css">
  <!-- <link rel="stylesheet" href="../custom_css/bootstrap.min.css"> -->

  <!-- custom js link  -->
  <script src="../js_data/data.js" defer></script>
  <!-- <script src="../js_data/bootstrap.min.js"  defer></script> -->
</head>

<body>
<noscript>
  <style>
    .container-lg{
      display: none;
    }
    h4{
      width: 100vw;
      height: 70vh;
      font-size: 50px;
      margin-top: 15vh;
      padding-top: 10%;
      padding-bottom: 10%;
    }
    </style>
    <h4 class="text-center text-primary">javascript is disable ! If you want use this site  enable javascript.</h4>
</noscript>
  <div class="container-lg">

    <!-- Navbar start here  -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"><span>S</span>chool<span>M</span>ate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contact.php">contact</a>
            </li>
          </ul>
          <form class="d-flex changeafter">
            <input class="form-control me-2" type="search" placeholder="Hello User" readonly aria-label="Search">
            <a href="../login.php"><button class="btn btn-outline-success" type="button">Login</button></a>
          </form>
        </div>
      </div>
    </nav>
    <?php
    error_reporting(1);
    if ($_SESSION['sAdminName'] != "") {
    ?>
      <script type="text/javascript">
        const loginSpan = document.querySelector('.changeafter');
        loginSpan.innerHTML = ' <input class="form-control me-2" type="search" placeholder="Welcome : <?= $_SESSION['sAdminName'] ?>" readonly aria-label="Search"><a href="../logout.php"><button class="btn btn-outline-success" type="button">Logout</button></a>';

        const navCon = document.querySelector('.navbar-nav');
        const spanliE = document.createElement('li');
        spanliE.classList.add('nav-item');
        spanliE.innerHTML = '<a class="nav-link "  href="../Event.php">Event</a>';
        navCon.append(spanliE);
        const secliW = document.createElement('li');
        secliW.classList.add('nav-item');
        secliW.innerHTML = '<a class="nav-link "  href="../profile.php">profile</a>';
        navCon.append(secliW);
        const spanli = document.createElement('li');
        spanli.classList.add('nav-item');
        spanli.innerHTML = '<a class="nav-link "  href="./message.php">Message</a>';
        navCon.append(spanli);
        const secli = document.createElement('li');
        secli.classList.add('nav-item');
        secli.innerHTML = '<a class="nav-link "  href="./registerData.php">RegisterData</a>';
        navCon.append(secli);
      </script>
    <?php
    }
    ?>
    <!-- Navbar end here  -->