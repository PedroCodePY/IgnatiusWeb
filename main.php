<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="StyleMain2.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <title>Dashboard</title>
  <link rel="icon" type="image/icon" href="Logo.ico" />
</head>

<body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <div class="Main">
    <div class="Menu">
      <center>
        <img src="Logo.png" alt="" class="logo" />
        <br />
        <ul class="nav" style="border-radius: 0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i><img src="home.png" /></i>
              HOME
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="data.php">
              <i><img src="data-analytics.png" /></i>
              DATA
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="settings.html">
              <i><img src="settings.png" /></i>
              SETTINGS
            </a>
          </li>
          <br />
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="addUser.html">
              <i><img src="add-user.png" /></i>
              Add User
            </a>
          </li>
          <br />
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="addfamily.php">
              <i><img src="join.png" /></i>
              Add Family
            </a>
          </li>
          <br />
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="userManagement.php">
              <i><img src="profile.png" /></i>
              User Management
            </a>
          </li>
          <br />
          <br />
          <br />
          <li class="nav-item logout" type="button" id="signoutbtn">
            <a class="nav-link">
              <i><img src="sign-out-alt.png" /></i>
              Log Out
            </a>
          </li>
        </ul>
      </center>
    </div>
    <div class="display2">
      <div class="Profile">
        <div class="text">
          <h3 id="name">
            <strong>Pedro</strong>
          </h3>
          <?php
          $Name = urldecode($_COOKIE['variable']);
          $family = 0;
          $Anak2 = 0;
          $Remaja = 0;
          $Dewasa = 0;
          $conn = mysqli_connect("localhost", "root", "", "ignatius_data");
          $query = "SELECT * FROM status WHERE Name = '$Name'";
          $query2 = "SELECT * FROM statistik_umat";
          $result = mysqli_query($conn, $query);
          $result2 = mysqli_query($conn, $query2);
          if (mysqli_num_rows($result) > 0) {
            foreach ($result as $row) {
          ?>

              <span class="badge">
                <?php
                if ($row["Developer"] = "True") {
                  echo "<i><img src='code.png'></i>w";
                }
                if ($row["Admin"] = "True") {
                  echo "<i><img src='crown.png'></i>";
                }
                ?>
              </span>
          <?php
            }
          }
          ?>
        </div>
        <img class="user" src="user.png" alt="">
      </div>
      <h2 id="Greet"></h2>
      <div class="content">
        <div class="container text-center">
          <div class="row align-items-center">
            <div class="col">
              <div class="card text-center mb-3" style="width: 18rem">
                <div class="card-body">
                  <h5 class="card-title">Keluarga</h5>
                  <?php
                  if (mysqli_num_rows($result2) > 0) {
                    foreach ($result2 as $row) {
                      $family = $row["ID"];
                    }
                  ?><h3 class="card-text"><?php echo $family ?></h3>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center mb-3" style="width: 18rem">
                <div class="card-body">
                  <h5 class="card-title">Anak-anak</h5>
                  <?php
                  if (mysqli_num_rows($result2) > 0) {
                    foreach ($result2 as $row) {
                      $Anak2 = $Anak2 + $row["B 1sd/ 12 L"];
                      $Anak2 = $Anak2 + $row["B 1sd/ 12 P"];
                    }
                  ?><h3 class="card-text"><?php echo $Anak2 ?></h3>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center mb-3" style="width: 18rem">
                <div class="card-body">
                  <h5 class="card-title">Remaja</h5>
                  <?php
                  if (mysqli_num_rows($result2) > 0) {
                    foreach ($result2 as $row) {
                      $Remaja = $Remaja + $row["B 13sd/ 16 L"];
                      $Remaja = $Remaja + $row["B 13sd/ 16 P"];
                    }
                  ?><h3 class="card-text"><?php echo $Remaja ?></h3>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center mb-3" style="width: 18rem">
                <div class="card-body">
                  <h5 class="card-title">Dewasa</h5>
                  <?php
                  if (mysqli_num_rows($result2) > 0) {
                    foreach ($result2 as $row) {
                      $Dewasa = $Dewasa + $row["B 16+ L"];
                      $Dewasa = $Dewasa + $row["B 16+ P"];
                      $Dewasa = $Dewasa + $row["Ayah"];
                      $Dewasa = $Dewasa + $row["Ibu"];
                    }
                  ?><h3 class="card-text"><?php echo $Dewasa ?></h3>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="main.js" type="module"></script>
</body>

</html>