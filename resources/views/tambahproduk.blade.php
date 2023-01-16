

<h3>Form Input produk</h3>
<form method="post" action="{{route('simpanproduk')}}">
    @csrf
    <div class="form-group">
        <label>Nama produk</label>
        <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required="">
    </div>
    <div class="form-group">
        <label>Harga Produk</label>
        <input type="text" name="harga_produk" class="form-control" placeholder="Harga Produk" required="">
    </div>
    <div class="form-group">
        <label>Deskripsi Produk</label>
        <input type="text" name="deskripsi_produk" class="form-control" placeholder="Deskripsi Produk" required="">
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
    </div>
</form>
