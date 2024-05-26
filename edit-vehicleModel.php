<?php
require_once './autoload.php';
require_once './Classes/Vehicle-model.php';

$modelId = $_GET['id'];


$vehicleModel = Vehicle_model::getVehicleMoodelWithId($dbConn, $modelId);
$vehicle = $vehicleModel['vehicle_model'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <h1 class="text-center mb-3">Update Vehicle Model</h1>
                <form action="update-vehicleModel.php" method="POST">

                    <input type="hidden" name="id" value="<?= $modelId ?>">
                    <div class="mb-3">
                        <label for="oldModel" class="form-label"> Current Model</label>
                        <input name="oldModel" type="text" value="<?= $vehicle ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="oldModel" class="form-label"> New Model</label>
                        <input name="newModel" type="text" class="form-control">
                    </div>
                    <button class=" btn btn-primary" type="submit">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!-- POPPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>