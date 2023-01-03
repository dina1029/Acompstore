<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA</title>
</head>
<body>
  <style type="text/css">
  body{
    font-family: sans-serif;
  }
  table{
    margin: 20px auto;
    border-collapse: collapse;
  }
  table th,
  table td{
    border: 1px solid #3c3c3c;
    padding: 3px 8px;
  }
  a{
    background: blue;
    color: #fff;
    padding: 8px 10px;
    text-decoration: none;
    border-radius: 2px;
  }

    .tengah{
        text-align: center;
    }
 </style>
 
        <div class="pagetitle">
		    <h2>DATA LAPORAN PENJUALAN</h2>
        </div>

        
	<?php 
	include 'koneksi.php';
	?>
  
  <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width="1%">No.</th>
                    <th scope="col">Tanggal Pemesanan</th>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col" width="5%">QTY</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">Total</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>

                <?php 
			          $no = 1;
                
			          if(isset($_GET['cari'])){
				          $sql = mysqli_query($koneksi,"select beli.Tanggal, beli.idBeli, kategori.NamaKategori, 
                  detailbeli.Jumlah, kategori.HargaKategori, kategori.Diskon, detailbeli.DetailHarga, beli.Status
                   from beli join kategori on beli.Beli_idPembeli = kategori.Kategori_idBarang 
                  join detailbeli on beli.idBeli = detailbeli.Detbel_idBeli 
                  WHERE Tanggal BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."' group by beli.idBeli");
                  
			          }else{
				          $sql = mysqli_query($koneksi, "select beli.Tanggal, beli.idBeli, kategori.NamaKategori, 
                  detailbeli.Jumlah, kategori.HargaKategori, kategori.Diskon, detailbeli.DetailHarga, beli.Status
                   from beli join kategori on beli.Beli_idPembeli = kategori.Kategori_idBarang 
                  join detailbeli on beli.idBeli = detailbeli.Detbel_idBeli group by beli.idBeli;");
			          }

			            while($data = mysqli_fetch_array($sql)){
                  $total += $data['DetailHarga'];

			          ?>
                <tr>
				          <td><?php echo $no++; ?></td>
				          <td><?php echo $data['Tanggal']; ?></td>
				          <td><?php echo $data['idBeli']; ?></td>
				          <td><?php echo $data['NamaKategori']; ?></td>
                  <td><?php echo $data['Jumlah']; ?></td>
                  <td><?php echo 'Rp. ' . number_format($data['HargaKategori'],2,',','.'); ?></td>
                  <td><?php echo $data['Diskon']; ?></td>
                  <td><?php echo 'Rp. ' . number_format($data['DetailHarga'],2,',','.'); ?></td>
                  <td><?php echo $data['Status']; ?>
			          </tr>

                <?php
                }
                ?>

                <tr>
                  <td colspan="2"><b>Total</b></td>
                  <td><b>Rp.<?php echo number_format($total);?>,00</b></td>
                </tr>
                
                </tbody>
              </table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>