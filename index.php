<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Praktikum Basis Data</title>
    <style>
    h3 { 
        padding-top :25px;
    }
    
    </style>
</head>

<body> 

    <h3><center>SISTEM PENJUALAN SCUTO CIKARANG</center></h3>
  
    <div class="container mt-5">
        <div class="row">
            <h4>Customer</h4>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID CUSTOMER </th>
                        <th>NAMA CUSTOMER </th>
                        <th>NO HANDPHONE </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT * FROM customer';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['KODE_CUSTOMER'] ?></td>
                        <td><?php echo $row['NAMA_CUSTOMER'] ?></td>
                        <td><?php echo $row['NO_HANDPONE'] ?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h4>ADMIN</h4>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID ADMIN</th>
                        <th>NAMA ADMIN</th>
                        <th>NAMA PRODUK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT * FROM ADMIN';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['KODE_ADMIN'] ?></td>
                        <td><?php echo $row['NAMA_ADMIN'] ?></td>
                        <td><?php echo $row['NAMA_PRODUK'] ?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h4>PEMBELIAN( INNER JOIN )</h4>
            <table class="table table-striped table-bordered table-responsive-lg">
                <thead>
                    <tr>
                        <th>ID CUSTOMER</th>
                        <th>NAMA CUSTOMER</th>
                        <th>NO HANDPHONE</th>
                        <th>ID ADMIN</th>
                        <th>NAMA ADMIN</th>
                        <th>NAMA PRODUK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT customer.KODE_CUSTOMER, customer.NAMA_CUSTOMER, customer.NO_HANDPONE,customer.KODE_ADMIN,admin.NAMA_ADMIN, admin.NAMA_ADMIN, admin.NAMA_PRODUK
                            FROM customer
                            JOIN admin USING(KODE_ADMIN)';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['KODE_CUSTOMER'] ?></td>
                        <td><?php echo $row['NAMA_CUSTOMER'] ?></td>
                        <td><?php echo $row['NO_HANDPONE'] ?></td>
                        <td><?php echo $row['KODE_ADMIN'] ?></td>
                        <td><?php echo $row['NAMA_ADMIN'] ?></td>
                        <td><?php echo $row['NAMA_PRODUK'] ?></td>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

<div class="container mt-5">
        <div class="row">
            <h4>PEMBELIAN( LEFT JOIN )</h4>
            <table class="table table-striped table-bordered table-responsive-lg">
                <thead>
                    <tr>
                        <th>ID CUSTOMER</th>
                        <th>NAMA CUSTOMER</th>
                        <th>NO HANDPHONE</th>
                        <th>ID ADMIN</th>
                        <th>NAMA ADMIN</th>
                        <th>NAMA PRODUK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT customer.KODE_CUSTOMER, customer.NAMA_CUSTOMER, customer.NO_HANDPONE,customer.KODE_ADMIN,admin.NAMA_ADMIN, admin.NAMA_ADMIN, admin.NAMA_PRODUK
                            FROM customer
                            JOIN admin USING(KODE_ADMIN)';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['KODE_CUSTOMER'] ?></td>
                        <td><?php echo $row['NAMA_CUSTOMER'] ?></td>
                        <td><?php echo $row['NO_HANDPONE'] ?></td>
                        <td><?php echo $row['KODE_ADMIN'] ?></td>
                        <td><?php echo $row['NAMA_ADMIN'] ?></td>
                        <td><?php echo $row['NAMA_PRODUK'] ?></td>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>