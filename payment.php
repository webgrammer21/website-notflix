<?php
$fullname = $_POST['fullname'];
$title = $_POST['judul'];
$price = $_POST['harga'];
$priceformat = number_format($price, 2, ',', '.');
$duration = $_POST['duration'];
$totalprice = $price * $duration;
$totalpriceformat = number_format($totalprice, 2, ',', '.');
$payment = $_POST['payment'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row text-center fw-bold" style="font-size: 4rem; color: #e50914">
            <div class="col">
                Payment Summary
            </div>
        </div>
        <div class="row text-center pb-5">
            <div class="col">
                Enjoy your movie!
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-6">
                <table class="table table-striped-columns">
                    <tr>
                        <td class="col-1">Fullname</td>
                        <td class="col-2"><?php echo $fullname ?></td>
                    </tr>
                    <tr>
                        <td class="col-1">Movie</td>
                        <td class="col-2"><?php echo $title ?></td>
                    </tr>
                    <tr>
                        <td class="col-1">Monthly Price</td>
                        <td class="col-2"><?php echo "Rp$priceformat" ?></td>
                    </tr>
                    <tr>
                        <td class="col-1">Rent Duration</td>
                        <td class="col-2"><?php if ($duration == 1) {
                                                echo "$duration month";
                                            } else {
                                                echo "$duration months";
                                            } ?></td>
                    </tr>
                    <tr>
                        <td class="col-1">Total Price</td>
                        <td class="col-2"><?php echo "Rp$totalpriceformat" ?></td>
                    </tr>
                    <tr>
                        <td class="col-1">Payment Method</td>
                        <td class="col-2"><?php echo $payment ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center pt-5">
            <a href="index.php"><button type="button" class="btn btn-danger">Rent Another Movie</button></a>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>