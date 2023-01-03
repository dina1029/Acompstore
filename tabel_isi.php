<?php
require('koneksi.php');

$keyword = $_GET["keyword"];
$query = "select beli.Tanggal, beli.idBeli, kategori.NamaKategori, 
        detailbeli.Jumlah, kategori.HargaKategori, kategori.Diskon, detailbeli.DetailHarga, beli.Status
        from beli join kategori on beli.Beli_idPembeli = kategori.Kategori_idBarang 
        join detailbeli on beli.idBeli = detailbeli.Detbel_idBeli 
        WHERE beli.Tanggal like '%$keyword%' or beli.idBeli like '%$keyword%' or kategori.NamaKategori like '%$keyword%' order by beli.idBeli";
$result = mysqli_query($koneksi, $query);
?>

<div class="card">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Kategori</th>
                <th scope="col">QTY</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Diskon</th>
                <th scope="col">Sub-Total</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 1;

            if (isset($_GET['keyword'])) {
                $sql = mysqli_query($koneksi, "select beli.Tanggal, beli.idBeli, kategori.NamaKategori, 
                detailbeli.Jumlah, kategori.HargaKategori, kategori.Diskon, detailbeli.DetailHarga, beli.Status
                from beli join kategori on beli.Beli_idPembeli = kategori.Kategori_idBarang 
                join detailbeli on beli.idBeli = detailbeli.Detbel_idBeli 
                WHERE beli.Tanggal like '%$keyword%' or beli.idBeli like '%$keyword%' or kategori.NamaKategori like '%$keyword%' order by beli.idBeli");
            } else {
                $sql = mysqli_query($koneksi, $sql);
            }

            while ($data = mysqli_fetch_array($sql)) {

            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['Tanggal']; ?></td>
                    <td><?php echo $data['idBeli']; ?></td>
                    <td><?php echo $data['NamaKategori']; ?></td>
                    <td><?php echo $data['Jumlah']; ?></td>
                    <td><?php echo 'Rp. ' . number_format($data['HargaKategori'], 2, ',', '.'); ?></td>
                    <td><?php echo $data['Diskon']; ?></td>
                    <td><?php echo 'Rp. ' . number_format($data['DetailHarga'], 2, ',', '.'); ?></td>
                    <td><?php echo $data['Status']; ?></td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>