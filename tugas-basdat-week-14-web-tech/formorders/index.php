<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <title>Form Order Baru</title>
  </head>

  <body>
    <section class="content">
      <div class="position-relative">
        <div class="position-absolute start-50 translate-middle-x text-center">
          <h1>Form Order Baru</h1>
          <div class="card">
            <div class="card-body">
              <!-- <p>Lacak nama customer berdasarkan kota</p> -->
              <form id="formorders" method="post" action="action.php">
                <label for="label-order">Order Number</label><br />
                <input type="number" name="order_number" placeholder="Masukkan order number" /><br />
                <label for="label-order">Customer Number</label><br />
                <input type="number" name="customer_number" /><br />
                <label for="label-order">Order Date</label><br />
                <input type="date" name="order_date" /><br />
                <label for="label-order">Required Date</label><br />
                <input type="date" name="required_date" /><br />
                <label for="label-order">Shipped Date</label><br />
                <input type="date" name="shipped_date" /><br />
                <label for="status">Status</label><br />
                <select class="form-select" id="status" name="status" form="formorders">
                  <option value="Shipped">Shipped</option>
                  <option value="Resolved">Resolved</option>
                  <option value="On Hold">On Hold</option>
                  <option value="In Process">In Process</option>
                  <option value="Disputed">Disputed</option>
                  <option value="Cancelled">Cancelled</option>
                </select>
                <label for="label-order">Comments</label><br />
                <textarea type="text" name="comments"></textarea><br />
                <input class="submit" type="submit" value="Submit" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
