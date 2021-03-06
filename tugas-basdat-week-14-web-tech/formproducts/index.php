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
          <h1>Form Product Baru</h1>
          <div class="card">
            <div class="card-body">
              <form id="formproducts" method="post" action="action.php">
                <label for="label-product">Product Code</label><br />
                <input type="text" name="product_code" placeholder="Masukkan product code" /><br />
                <label for="label-product">Product Name</label><br />
                <input type="text" name="product_name" placeholder="Masukkan product code" /><br />
                <label for="label-product">Product Line</label>
                <select id="product_line" class="form-select" name="product_line" form="formproducts">
                      <option value="Classic Cars">Classic Cars</option>
                      <option value="Motorcycles">Motorcycles</option>
                      <option value="Planes">Planes</option>
                      <option value="Ships">Ships</option>
                      <option value="Trains">Trains</option>
                      <option value="Trucks and Buses">Trucks and Buses</option>
                      <option value="Vintage Cars">Vintage Cars</option>
                </select>
                <label for="label-product">Product Scale</label><br />
                <input type="text" name="product_scale" placeholder="Masukkan product code" /><br />
                <label for="label-product">Product vendor</label><br />
                <input type="text" name="product_vendor" placeholder="Masukkan product code" /><br />
                <label for="label-product">Product Description</label><br />
                <textarea type="text" name="product_description"></textarea><br />
                <label for="label-product">Quantity in Stock</label><br />
                <input type="number" name="product_quantity-in-stock" placeholder="Masukkan product code" /><br />
                <label for="label-product">Buy Price</label><br />
                <input type="number" name="product_buy-price" placeholder="Masukkan product code" /><br />
                <label for="label-product">MSRP</label><br />
                <input type="number" name="product_msrp" placeholder="Masukkan product code" /><br />

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
