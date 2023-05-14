<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sal's store</title>
        <!-- Favicon-->
        <link rel="icon" href="img/sophie martin.png" />
        <link rel="stylesheet" href="fontaweasome/css/all.min.css">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background : pink">
            <div class="container px-4 px-lg-5" style="background : pink">
                <a class="navbar-brand" href="index.php?hal=body.php">SAL'S STORE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background : pink">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php?hal=body">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php?hal=produk_form">Tambah Produk</a></li>   
                            </ul> 
                        </li>                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pelanggan</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php?hal=pelanggan">List Pelanggan</a></li>
                                <li><a class="dropdown-item" href="index.php?hal=pelanggan_form">Tambah Pelanggan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Jenis produk</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php?hal=jenis_produk">Data jenis produk</a></li>
                                <li><a class="dropdown-item" href="index.php?hal=jenis_form">Tambah jenis produk</a></li> 
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5" style="background : pink">
            <div class="container px-4 px-lg-6 my-7" style="background : pink" > 
                <div class="text-center text-white" style="background : pink">
                    <h1 class="display-4 fw-bolder">SAL'S STORE</h1>
                    <p class="lead fw-normal text-white-50 mb-0">welcome to website sal's store enjoy your shopping</p>
                </div>
            </div>
        </header>
    </body>
</html>