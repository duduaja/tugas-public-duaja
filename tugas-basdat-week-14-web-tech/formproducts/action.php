<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="position-relative">
        <div class="position-absolute start-50 translate-middle-x text-center">
            <h1>Form Order Baru</h1>
                <div class="card">
                    <div class="card-body">
                        <?php
                        error_reporting(E_ALL);
                        ini_set('display_errors',1);

                        if($_SERVER['REQUEST_METHOD']=='POST'){

                            $mysql_host='localhost';
                            $mysql_username='root';
                            $mysql_password='';
                            $mysql_database='classicmodels';

                            $id_mysql=mysqli_connect("localhost",$mysql_username,$mysql_password);
                            if(!$id_mysql){
                            die("Database gagal");
                            }
                            if(!mysqli_select_db($id_mysql,"classicmodels")){
                            die("Database tidak ada");
                            }
                            
                            $productcode = $_POST["product_code"];
                            $productname = $_POST["product_name"];
                            $productline = $_POST["product_line"];
                            $productscale = $_POST["product_scale"];
                            $productvendor = $_POST['product_vendor'];
                            $productdescription = $_POST['product_description'];
                            $quantityinstock = $_POST['product_quantity-in-stock'];
                            $buyprice = $_POST['product_buy-price'];
                            $msrp = $_POST['product_msrp'];
                            
                            $perintah = "INSERT INTO products VALUES (\"".$productcode."\",\"".$productname."\",\"".$productline."\",\""
                            .$productscale."\",\"".$productvendor."\",\"".$productdescription."\",".$quantityinstock.",".$buyprice.",".$msrp.");";

                            
                            $hasil = mysqli_query($id_mysql,$perintah);
                            if($hasil){
                            die("Yeaaaa! Datanya berhasil diinput");
                            }

                            
                            mysqli_close($id_mysql);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

if($_SERVER['REQUEST_METHOD']=='POST'){

    $mysql_host='localhost';
    $mysql_username='root';
    $mysql_password='';
    $mysql_database='classicmodels';

    $id_mysql=mysqli_connect("localhost",$mysql_username,$mysql_password);
    if(!$id_mysql){
    die("Database gagal");
    }
    if(!mysqli_select_db($id_mysql,"classicmodels")){
    die("Database tidak ada");
    }
    
    $productcode = $_POST["product_code"];
    $productname = $_POST["product_name"];
    $productline = $_POST["product_line"];
    $productscale = $_POST["product_scale"];
    $productvendor = $_POST['product_vendor'];
    $productdescription = $_POST['product_description'];
    $quantityinstock = $_POST['product_quantity-in-stock'];
    $buyprice = $_POST['product_buy-price'];
    $msrp = $_POST['product_msrp'];
    
    $perintah = "INSERT INTO products VALUES (\"".$productcode."\",\"".$productname."\",\"".$productline."\",\""
    .$productscale."\",\"".$productvendor."\",\"".$productdescription."\",".$quantityinstock.",".$buyprice.",".$msrp.");";

    
    $hasil = mysqli_query($id_mysql,$perintah);
    if($hasil){
    die("Data berhasil diinput");
    }

    
    mysqli_close($id_mysql);
}
?>