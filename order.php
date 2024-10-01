<?php
$namafilm  = $_POST['judul'];
$harga  = $_POST['harga'];
$rupiah = number_format($harga, 2, ',', '.');
$poster = $_POST['poster'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row text-center fw-bold" style="font-size: 4rem; color: #e50914">
      <div class="col pb-5">
        Order
      </div>
    </div>
    <div class="card mb-3 border-0">
      <div class="row g-0">
        <div class="col-md-4 px-3">
          <img src="<?php echo $poster ?>" class="img-fluid rounded-start" alt="<?php echo $namafilm ?>">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <div class="pb-4">
              <h5 class="text-center pb-2">Movie Detail</h5>
              <table>
                <tr>
                  <td>Nama</td>
                  <td class="ps-5 pe-1">: </td>
                  <td><?php echo $namafilm ?></td>
                </tr>
                <tr>
                  <td>Monthly price</td>
                  <td class="ps-5 pe-1">: </td>
                  <td><?php echo "Rp$rupiah" ?></td>
                </tr>
              </table>
              <form action="payment.php" method="post" autocomplete="off">
                <h5 class="text-center pt-3 pb-2">Rent Detail</h5>
                <div class="mb-3">
                  <label for="fullname" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="fullname" name="fullname">
                </div>
                <div class="mb-3">
                  <label for="duration" class="form-label">Rent Duration (Month)</label>
                  <input type="number" class="form-control" id="duration" name="duration">
                </div>
                <fieldset>
                  <label class="pb-1">Payment Method</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="cash" value="Cash">
                    <label class="form-check-label" for="cash">
                      Cash
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="creditcard" value="Credit Card">
                    <label class="form-check-label" for="creditcard">
                      Credit Card
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="debitcard" value="Debit card">
                    <label class="form-check-label" for="debitcard">
                      Debit card
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="emoney" value="E-Money">
                    <label class="form-check-label" for="emoney">
                      E-Money
                    </label>
                  </div>
                </fieldset>
                <input type="hidden" name="judul" value="<?php echo $namafilm ?>">
                <input type="hidden" name="harga" value="<?php echo $harga ?>">
                <div class="d-grid mt-3">
                  <button class="btn btn-danger" type="submit">Place order</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>