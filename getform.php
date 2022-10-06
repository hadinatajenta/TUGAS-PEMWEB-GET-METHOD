<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Data</title>
</head>

<body>
    <div class="container">
        <img src="selfie.png" alt="gambar selfie" class="selfie">
        <div class="child">
            <h1 class="sign">Beli smartphone</h1>
            <div class="form">
                <table id="customers">
                    <tr>
                        <td>
                            Smartphone
                        </td>
                        <td>
                            Warna
                        </td>
                        <td>
                            jumlah
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $_GET['smartphone']; ?>
                        </td>
                        <td>
                            <?php echo $_GET['warna']; ?>
                        </td>
                        <td>
                            <?php echo $_GET['jumlah']; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</body>

</html>