<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Skanet Kompos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=bahan_penjualan/index">Bahan Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=penjualan/index">Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=bahan/index">Bahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <?php
    include 'isi.php';
    ?>
</div>