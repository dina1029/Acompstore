<?php
include('koneksi.php');

if (isset($_GET['delete'])) {
  $idpembeli = $_GET['delete'];
  $delete_query = mysqli_query($koneksi, "UPDATE `pembeli` SET ActivePembeli = '0' WHERE idPembeli = '$idpembeli'") or die('query failed');
  if ($delete_query) {
    header('location:pembeli.php');
    $message[] = 'product has been deleted';
  } else {
    header('location:pembeli.php');
    $message[] = 'product could not be deleted';
  }
};
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <title>crud dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!----css3---->
  <link rel="stylesheet" href="css/custom.css">


  <!--google fonts -->

  <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> -->


  <!--google material icon-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

</head>

<body>


  <div class="wrapper">


    <div class="body-overlay"></div>

    <!-------------------------sidebar------------>
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3><img src="img/logo.png" class="img-fluid" /><span>Vishweb design</span></h3>
      </div>
      <ul class="list-unstyled components">
        <li class="active">
          <a href="#" class="dashboard"><i class="material-icons">dashboard</i>
            <span>Pembeli</span></a>
        </li>


        <li class="dropdown">
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">aspect_ratio</i>Layouts</a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu1">
            <li>
              <a href="#">Home 1</a>
            </li>
            <li>
              <a href="#">Home 2</a>
            </li>
            <li>
              <a href="#">Home 3</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">apps</i><span>widgets</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu2">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">equalizer</i>


            <span>chart</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu3">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">extension</i><span>ui element</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu4">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">border_color</i><span>forms</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu5">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>



        <li class="dropdown">
          <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">grid_on</i><span>tables</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu6">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">content_copy</i><span>Pages</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu7">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>

        <li class="">
          <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
        </li>

        <li class="">
          <a href="#"><i class="material-icons">library_books</i><span>Calender
            </span></a>
        </li>


      </ul>


    </nav>




    <!--------page-content---------------->

    <div id="content">

      <!--top--navbar----design--------->

      <div class="top-navbar">
        <div class="xp-topbar">

          <!-- Start XP Row -->
          <div class="row">
            <!-- Start XP Col -->
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
              <div class="xp-menubar">
                <span class="material-icons text-white">signal_cellular_alt
                </span>
              </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="col-md-5 col-lg-3 order-3 order-md-2">
              <div class="xp-searchbar">
                <form>
                  <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn" type="submit" id="button-addon2">GO</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
              <div class="xp-profilebar text-right">
                <nav class="navbar p-0">
                  <ul class="nav navbar-nav flex-row ml-auto">
                    <li class="dropdown nav-item active">
                      <a href="#" class="nav-link" data-toggle="dropdown">
                        <span class="material-icons">notifications</span>
                        <span class="notification">4</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="#">You have 5 new messages</a>
                        </li>
                        <li>
                          <a href="#">You're now friend with Mike</a>
                        </li>
                        <li>
                          <a href="#">Wish Mary on her birthday!</a>
                        </li>
                        <li>
                          <a href="#">5 warnings in Server Console</a>
                        </li>

                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span class="material-icons">question_answer</span>

                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" data-toggle="dropdown">
                        <img src="img/user.jpg" style="width:40px; border-radius:50%;" />
                        <span class="xp-user-live"></span>
                      </a>
                      <ul class="dropdown-menu small-menu">
                        <li>
                          <a href="#">
                            <span class="material-icons">
                              person_outline
                            </span>Profile

                          </a>
                        </li>
                        <li>
                          <a href="#"><span class="material-icons">
                              settings
                            </span>Settings</a>
                        </li>
                        <li>
                          <a href="#"><span class="material-icons">
                              logout</span>Logout</a>
                        </li>
                      </ul>
                    </li>
                  </ul>


                </nav>

              </div>
            </div>
            <!-- End XP Col -->

          </div>
          <!-- End XP Row -->

        </div>
        <div class="xp-breadcrumbbar text-center">
          <h4 class="page-title">Pembeli</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pembeli</li>
          </ol>
        </div>
      </div>

      <!--------main-content------------->

      <div class="main-content">
        <div class="row">

          <div class="col-md-12">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">Data Pembeli</h2>
                  </div>
                  <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
                    <form method="GET" action="pembeli.php">
                      <input type="text" name="cari" value="<?php if (isset($_GET['cari'])) {
                                                              echo $_GET['cari'];
                                                            } ?>" placeholder="pencarian data"/>
                      <button type="submit" class="btn btn-primary">TAMPILKAN</button>
                    </form>
                  </div>
                  <!-- <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
          TAMBAH BARU
        </button>
        </div> -->
                </div>
              </div>

              <div class="row card shadow mb-4">

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Id Pembeli</th>
                          <th>Nama Pembeli</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Nomor Telepon</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        if (isset($_GET['cari'])) {
                          $pencarian = $_GET['cari'];
                          $query = "select * from pembeli where idPembeli like '%" . $pencarian . "%' or NamaPembeli like '%" . $pencarian . "%'";
                        } else {
                          $query = "select * from pembeli";
                        }
                        $no = 0;
                        $ActivePembeli = 1;
                        $query = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($query)) {
                          $idpembeli = $row['idPembeli'];
                          $namapembeli = $row['NamaPembeli'];
                          $emailpembeli = $row['EmailPembeli'];
                          $passwordpembeli = $row['PasswordPembeli'];
                          $nohape = $row['NoHPPembeli'];
                          $no++;

                        ?>
                          <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $idpembeli ?></td>
                            <td><?php echo $namapembeli ?></td>
                            <td><?php echo $emailpembeli ?></td>
                            <td><?php echo $passwordpembeli ?></td>
                            <td><?php echo $nohape ?></td>
                            <td>

                              <a class="material-icons" data-toggle="modal" href="#" data-target="#editEmployeeModal<?php echo $row['idPembeli']; ?>">
                                <i class="fas fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                              <div id="editEmployeeModal<?php echo $row['idPembeli']; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title"><i class="fas fa-edit"></i> Edit Produk</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="editPembeli.php" method="POST" enctype="multipart/form-data">
                                    </div>

                                    <?php
                                    $id = $row['idPembeli'];
                                    $query_edit = mysqli_query($koneksi, "SELECT * FROM pembeli WHERE idPembeli='$id'");
                                    while ($row = mysqli_fetch_array($query_edit)) {
                                    ?>
                                      <div class="form-group">
                                        <label>ID Pembeli</label>
                                        <input type="text" name="idpembeli" value="<?php echo $idpembeli; ?>" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label>Nama Pembeli</label>
                                        <input type="text" name="namapembeli" value="<?php echo $row['NamaPembeli']; ?>" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                        <label>Email Pembeli</label>
                                        <input type="text" name="emailpembeli" value="<?php echo $row['EmailPembeli']; ?>" class="form-control" required>
                                      </div>

                                      <div class="form-group">
                                        <label>Password Pembeli</label>
                                        <input type="text" name="passwordpembeli" value="<?php echo $row['PasswordPembeli']; ?>" class="form-control" required>
                                      </div>

                                      <div class="form-group">
                                        <label>Nomor Handphone</label>
                                        <input type="number" name="nohape" value="<?php echo $row['NoHPPembeli']; ?>" class="form-control" required>
                                      </div>


                                      <div class="modal-footer justify-content-between">
                                        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                                        <input type="submit" name="save" class="btn btn-info" value="Save">
                                      </div>
                                    <?php
                                    }
                                    ?>
                                    </form>
                                  </div>
                                </div>
                              </div>
                  </div>
                  </td>
                  <td>
                    <a href="pembeli.php?delete=<?php echo $idpembeli; ?>" class="delete-btn" onclick="return confirm('Yakin Ingin Menghapus Data Pembeli Ini?');">
                      <i class="material-icons">&#xE872;</i></a>
                  </td>
                  </tr>
                <?php
                        }
                ?>
                </tbody>
                </table>
                </div>
              </div>
            </div>

            <div>
            <!---footer---->
            <footer class="footer">
                <div class="container-fluid">
                  <div class="footer-in">
                    <p class="mb-0">Website App B4 - AcomptStore.</p>
                  </div>
                </div>
              </footer>
            </div>
          </div>

            <!-- <div class="modal fade" tabindex="-1" id="modal_delete" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="deletePembeli.php">
          <h5 class="modal-title text-center"> APAKAH ANDA YAKIN MENGHAPUS DATA INI?</h5>
          <div class="modal-footer justify-content-between">
          <a href="#" class="btn btn-success btn-sm" id="delete_link">HAPUS</a>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">TIDAK</button>
          </div>
        </div>
      </form>
		</div> -->


            <!----------html code compleate----------->
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="js/jquery-3.3.1.slim.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery-3.3.1.min.js"></script>


            <script type="text/javascript">
              $(document).ready(function() {
                $(".xp-menubar").on('click', function() {
                  $('#sidebar').toggleClass('active');
                  $('#content').toggleClass('active');
                });

                $(".xp-menubar,.body-overlay").on('click', function() {
                  $('#sidebar,.body-overlay').toggleClass('show-nav');
                });

              });
            </script>

</body>
<!-- The Modal -->
<!-- <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content"> -->

<!-- Modal Header -->
<!-- <div class="modal-header">
        <h4 class="modal-title">TAMBAH DATA PEMBELI</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div> -->

<!-- Modal body -->
<!-- <div class="modal-body">
        <form method="post" action="">
        <input type="text" name="namapembeli" placeholder="Nama Pembeli" class="form-control" Required>
        <br>
        <input type="text" name="email" placeholder="Email Aktif" class="form-control" Required>
        <br>
        <input type="text" name="password" placeholder="Password" class="form-control" Required>
        <br>
        <input type="text" name="nomorhandp" placeholder="Nomor Handphone aktif" class="form-control" Required>
        <br>
        <button type="submit" name="tambahdata" class="btn btn-success">SUBMIT</button>
      </form>
      </div> -->

<!-- Modal footer -->
<!-- <div class="modal-footer">
      </div> -->

<!-- </div>
  </div>
</div> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

<!-- <script type="text/javascript">
                  function confirm_modal(delete_url) {
                  $('#modal_delete').modal('show', {backdrop: 'static'});
                  document.getElementById('delete_link').setAttribute('href' , delete_url);
                  }
                </script> -->


</html>