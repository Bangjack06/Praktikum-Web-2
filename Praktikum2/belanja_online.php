<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .harga-list {
            list-style-type: none;
            padding: 0;
        }
        .harga-item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Jack Jus</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="Belanja_Online.php">
                    <div class="form-group">
                        <label for="customer">Nama Customer:</label>
                        <input type="text" class="form-control" id="customer" name="customer">
                    </div>
                    <div class="form-group">
                        <label>Pilih Produk:</label><br>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="produk" value="jus strawberry"> JUS STRAWBERRY
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="produk" value="jus mangga"> JUS MANGGA
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="produk" value="jus alpukat"> JUS ALPUKAT
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                    </div>
                    <button type="submit" class="btn btn-primary" name="proses">Kirim</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Daftar Harga</h4>
                <ul class="harga-list">
                    <li class="harga-item">JUS STRAWBERRY : 10.000</li>
                    <li class="harga-item">JUS MANGGA : 10.000</li>
                    <li class="harga-item"> JUS ALPUKAT : 10.000</li>
                </ul>
                <p>SERBA 10.000.</p>
            </div>
        </div>
        <hr>
        <?php
        if(isset($_POST['proses'])) {
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];
            $total_harga = 0;
            if ($produk == "JUS STRAWBERRY") {
                $total_harga = 10000 * $jumlah;
            } elseif ($produk == "JUS MANGGA") {
                $total_harga = 10000 * $jumlah;
            }
              elseif ($produk == "JUS ALPUKAT") {
            $total_harga = 10000 * $jumlah;
        }
            echo "<h4>Nama Customer: $customer</h4>";
            echo "<p>Produk Pilihan: $produk</p>";
            echo "<p>Jumlah Beli: $jumlah</p>";
            echo "<p>Total Belanja Rp. " . number_format($total_harga) . ",-</p>";
        }
        ?>
    </div>
</body>
</html>