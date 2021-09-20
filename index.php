<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {     // Post methodunu Yakalıyoruz
header('Location:succesfull.php');              // Kullanıcıyı nereye göndereceğiz
$handle = fopen('data.txt', 'a');                 // Dosya ismi
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\n");   // Kaynak-Tarih-İP
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\n");}   // Verileri yazdırıyoruz
fclose($handle);
exit;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.YAZİLİMMETHOD.com</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"></head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-danger">
        <div class="container">
            <span class="navbar-brand mb-0 h1">PHP ile Formdan Gelen Verileri .txt Dosyasına Kaydetme</span>
        </div>
    </nav>

    <!-- İletişim Formu -->

    <div class="container mt-4">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-header">
                        İletişim Formu
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">İsminiz</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E Mail Adresiniz</label>
                                <input type="email" class="form-control" name="email"  required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Konu</label>
                                <input type="text" class="form-control" name="subject"  required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mesajınız</label>
                                <textarea name="message" class="form-control" cols="30" rows="3" required></textarea>
                            </div>
                            <button type="submit" class=" float-end d-block btn btn-outline-primary" >Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>