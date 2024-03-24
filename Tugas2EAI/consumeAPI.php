<?php 

$sumber = 'https://apiv3.apifootball.com/?action=get_countries&APIkey=68e2ebecba2f2c270324758263d7d2c11b27a617a934016bf2ed3b15a8079cdc';
$ubahdata = file_get_contents($sumber);
$decode = json_decode($ubahdata, true);
?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Consume API</title>
  </head>
  <body>
    <h4 class="text-center mt-3">Tugas 1 EAI</h4>
    
    <div class="container">
        <div class="row">
          <?php foreach ($decode as $value) {
          ?>
            <div class="col-3 m-3">
                <div class="card" style="width: 18rem;">
                    <img src=" <?php echo $value['country_logo'] ?> " class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6><?php echo $value['country_id'] ?><h6>
                      <hr>
                      <p class="card-text"><?php echo $value['country_name'] ?></p>
                    </div>
                </div>
            </div>
          <?php } ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   
  </body>
</html>