<?php
$contacts = [
  ["name" => "nil", "phone"=>"363636"],
  ["name" => "nash", "phone"=>"34784747"],
  ["name" => "milli", "phone"=>"3287484747"],
  ["name" => "vanilli", "phone"=>"304855465"],
  ["name" => "vanilla", "phone"=>"45444444"],
  ["name" => "kill", "phone"=>"304788876"],
  ["name" => "billi", "phone"=>"56654436"],
  ["name" => "cooper", "phone"=>"37766778856"]
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.2/darkly/bootstrap.min.css" 
    integrity="sha512-KREAPYEoSKKkg2oqvahwsfZkMDfFe1i5G4cL/1y0xdAauwjoO5nNe6jdY2pEiNdh0Dqs39Pnilq7Zbl3e0FjGw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />

    <script 
    defer
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
    </script>

    <title>Contact App</title>


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand font-weight-bold" href="#">
            <img class="mr-2" src="./static/img/node-js.png" />
            ContactsApp
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add.html">Add Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
        <div class="container pt-4 p-3">
          <div class="row">
          <?php foreach ($contacts as $contact){ ?>

            <div class="col-md-4 mb-3">
              <div class="card text-center">
                <div class="card-body">
                  <h3 class="card-title text-capitalize"> <?= $contact["name"] ?> </h3>
                  <p class="m-2"> <?= $contact["phone"] ?> </p>
                  <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
                  <a href="#" class="btn btn-danger mb-2">Delete Contact</a>
                </div>
              </div>
            </div>

          <?php } ?>
         
          </div>
        </div>
    </main>

</body>
</html>