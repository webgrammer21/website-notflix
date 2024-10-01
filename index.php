<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="min-vh-100">
    <div class="container">
        <div class="row text-center fw-bold" style="font-size: 4rem; color: #e50914">
            <div class="col">
                NOTFLIX
            </div>
        </div>
        <div class="row text-center pb-5">
            <div class="col" >
                <p class="fw-bold">The cheapest movie rental platform</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto d-flex justify-content-center">
                <div class="card m-2" style="width: 21rem;">
                    <img src="assets/detective-conan.jpg" class="card-img-top" alt="Detective Conan: Black Iron Submarine">
                    <div class="card-body">
                        <p class="card-title fw-bold">Detective Conan: Black Iron Submarine</p>
                        <p class="card-text">Rp20.000,00/month</p>
                        <form action="order.php" method="post">
                            <input type="hidden" name="judul" value="Detective Conan: Black Iron Submarine">
                            <input type="hidden" name="harga" value="20000">
                            <input type="hidden" name="poster" value="assets/detective-conan.jpg">
                            <button class="btn btn-danger"><i class="bi bi-cart2 pe-1"></i>Order</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-auto d-flex justify-content-center">
                <div class="card m-2" style="width: 21rem;">
                    <img src="assets/spiderman.jpg" class="card-img-top" alt="Spider-Man: Across the Spider-Verse">
                    <div class="card-body">
                        <p class="card-title fw-bold">Spider-Man: Across the Spider-Verse</p>
                        <p class="card-text">Rp25.000,00/month</p>
                        <form action="order.php" method="post">
                            <input type="hidden" name="judul" value="Spider-Man: Across the Spider-Verse">
                            <input type="hidden" name="harga" value="25000">
                            <input type="hidden" name="poster" value="assets/spiderman.jpg">
                            <button class="btn btn-danger"><i class="bi bi-cart2 pe-1"></i>Order</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-auto d-flex justify-content-center">
                <div class="card m-2" style="width: 21rem;">
                    <img src="assets/a-haunting-in-venice.jpg" class="card-img-top" alt="A Haunting in Venice">
                    <div class="card-body">
                        <p class="card-title fw-bold">A Haunting in Venice</p>
                        <p class="card-text">Rp30.000,00/month</p>
                        <form action="order.php" method="post">
                            <input type="hidden" name="judul" value="A Haunting in Venice">
                            <input type="hidden" name="harga" value="30000">
                            <input type="hidden" name="poster" value="assets/a-haunting-in-venice.jpg">
                            <button class="btn btn-danger"><i class="bi bi-cart2 pe-1"></i>Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>