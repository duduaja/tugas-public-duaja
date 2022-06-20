<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <title>Nama Customer</title>
  </head>
  <body>
    <div class="position-relative">
        <div class="position-absolute start-50 translate-middle-x text-center">
            <div class="card">
                <div class="card-body">
                <?php
                   
                       $pemakai="root";
                       $password="";
                       $id_mysql=mysqli_connect("localhost",$pemakai,$password);
                       if(!$id_mysql){
                       die("Database gagal");}
                       if(!mysqli_select_db($id_mysql,"classicmodels")){
                       die("Database tidak ada");
                       }
                       
                       $shippeddate = $_POST["shippeddate"];
                       
                       
                       $perintah = "SELECT DISTINCT c.customerName
                       FROM customers as c
                       INNER JOIN orders as o
                       ON c.customerNumber = o.customerNumber
                       WHERE o.shippedDate = \"$shippeddate\";";

                       
                       $hasil = mysqli_query($id_mysql,$perintah);
                       if(!$hasil){
                       die("Query Gagal");
                       }
                       
                       print("<p class=\"text-center\">Data Nama Customer dengan shipped date $shippeddate </p>");                
                       print("<table class=\"table table-striped table-hover align-middle\">");
                       $n = 0;
                       print("<thead><tr><td>No </td><td>Nama Customer</td></tr></thead>");
                       print("<tbody>");
                       while($baris=mysqli_fetch_row($hasil))
                       {$n++;
                       print("<tr><td>$n</td><td>$baris[0]</td></tr>");}
                       print("</tbody>");
                       print("</table>");
                       $row = mysqli_num_rows($hasil);
                       print("Terdapat $row pelanggan dengan shipped date $shippeddate");
                       mysqli_close($id_mysql);
                 ?>
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

