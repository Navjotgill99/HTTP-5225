<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      <div class="row">
        
          <?php
            function getUsers(){
              $url = "users.json";
              $data = file_get_contents($url);
              //echo gettype($data);
              return json_decode($data, true);
            }
        
            $users = getUsers();
            if(!empty($users)){
              for($i = 0; $i < count($users); $i++){
                echo
                '<div class="col-md-3">
                  <div class="card" style="">
                  <div class="card-body">
                    <h5 class="card-title">' . $users[$i]['name'] . '</h5>
                    <p class="card-text">Username - ' . $users[$i]['username'] . '</p>
                    <p class="card-text">Email - ' . $users[$i]['email'] . '</p>
                    <p class="card-text">Phone - ' . $users[$i]['phone'] . '</p>
                    <p class="card-text">Website - ' . $users[$i]['website'] . '</p>
                    <h5 class="card-title">Address</h5>
                    <p class="card-text">Street - ' . $users[$i]['address']['street'] . '</p>
                    <p class="card-text">Suite - ' . $users[$i]['address']['suite'] . '</p>
                    <p class="card-text">City - ' . $users[$i]['address']['city'] . '</p>
                    <p class="card-text">Zipcode - ' . $users[$i]['address']['zipcode'] . '</p>
                    <p class="card-text">Geo -lat: ' . $users[$i]['address']['geo']['lat'] . '</p>
                    <p class="card-text">Geo -lng: ' . $users[$i]['address']['geo']['lng'] . '</p>
                    <h5 class="card-title">Company</h5>
                    <p class="card-text">Name - ' . $users[$i]['company']['name'] . '</p>
                    <p class="card-text">CatchPhrase - ' . $users[$i]['company']['catchPhrase'] . '</p>
                    <p class="card-text">Bs - ' . $users[$i]['company']['bs'] . '</p>
                  </div>
                </div>
                </div>';
              }
            }
          ?>
        </div>
      </div>
    </div>

    <?php
    
    

  ?>
</body>
</html>