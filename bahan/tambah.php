<br>
<br>

<h1>Tambah Data Bahan</h1>

<hr>

<form action="?page=bahan/simpan" method="post">

    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stok" class="form-control">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control">
        <div class="form-text"></div>
    </div>
    <br>

    <button class="btn btn-primary">Simpan</button>

</form>