<?php
    session_start();
    //tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
    require_once("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - User</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">GearNation Admin Page</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" id="clickKeyboard">
          <i class="fas fa-fw fa-keyboard"></i>
          <span>Keyboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="clickMouse">
          <i class="fas fa-fw fa-globe-americas"></i>
          <span>Mouse</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="clickHeadphone">
          <i class="fas fa-fw fa-headphones"></i>
          <span>Headphone</span></a>
      </li>
    </ul>


    <div id="content-wrapper">
      <!-- DataTables Keyboard -->
      <div class="container-fluid" id="table-keyboard" style="display: none;">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Keyboard</li>
        </ol>

        
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Keyboard</div>
          <div class="card-body">

            <div class="table-responsive">
            
              <form action="insert.php" method="post">
                <div class="add-">
                  <input type="hidden" name="maloaisp" value=1 >
                  <input type="text" name="name" placeholder="Name" class="form-control"> <br>
                  <input type="text" name="brand" placeholder="Brand" class="form-control"> <br>
                  <input type="text" name="amount" placeholder="Amount" class="form-control"> <br>
                  <input type="text" name="price" placeholder="Price" class="form-control"> <br>
                  <input type="text" name="date_added" placeholder="Date Added" class="form-control"> <br>
                  <input type="text" name="image_links" placeholder="Image Link" class="form-control">
                </div>
                <input type="submit" class="btn btn-info" id="btn-add" value="Add new">
                <div class="btn-group" style="float: right;">
              </div>
              </form>
              
              <br>
              <br>
              <hr>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Image link</th>
                    <th>Date Added</th>
                    <th>Price</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $sql = "SELECT * FROM product WHERE MaLoai=1";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                  <td><?php echo $row["TenSP"]; ?></td>
                    
                    <td><?php $sql2 = "SELECT TenNPP FROM vendors WHERE MaNPP = ".$row["MaNPP"];
                          $result2 = $conn->query($sql2);
                          $row2 = $result2->fetch_assoc();
                          echo $row2["TenNPP"];
                        ?>
                    </td>
                    <td><?php echo $row["SoLuong"]; ?></td>
                    <td><?php echo $row["GiaDonVi"]; ?></td>
                    <td><?php echo $row["NgayNhap"]; ?></td>
                    <td><?php echo $row["CacHinhAnh"]; ?></td>
                    <td>
                      <a href="delete.php?MaSP=<?php echo $row["MaSP"]; ?>" onclick="return confirm('are you sure');"><i class="fas fa-trash-alt"></i></a>
                      <span>/</span>
                      <a href="edit.php?MaSP=<?php echo $row["MaSP"]; ?>"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  <?php
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->


      <div class="container-fluid" id="table-mouse" style="display: none;">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Mouse</li>
          </ol>
  
          
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Mouse</div>
            <div class="card-body">
              <div class="table-responsive">
                <form action="#">
                  <div class="add-">
                    <input type="hidden" name="maloaisp" value=3 >
                    <input type="text" name="name" placeholder="Name" class="form-control"> <br>
                    <input type="text" name="brand" placeholder="Brand" class="form-control"> <br>
                  <input type="text" name="amount" placeholder="Amount" class="form-control"> <br>
                  <input type="text" name="price" placeholder="Price" class="form-control"> <br>
                  <input type="text" name="date_added" placeholder="Date Added" class="form-control"> <br>
                  <input type="text" name="image_links" placeholder="Image Link" class="form-control">
                  </div>
                  <input type="submit" class="btn btn-info" id="btn-add" value="Add new">
                </form>
                <div class="btn-group" style="float: right;">
                
                
              </div>
                  
                <br>
                <br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Brand</th>
                      <th>Image link</th>
                      <th>Date Added</th>
                      <th>Price</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $sql = "SELECT * FROM product WHERE MaLoai=3";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                  <td><?php echo $row["TenSP"]; ?></td>
                    
                    <td><?php $sql2 = "SELECT TenNPP FROM vendors WHERE MaNPP = ".$row["MaNPP"];
                          $result2 = $conn->query($sql2);
                          $row2 = $result2->fetch_assoc();
                          echo $row2["TenNPP"];
                        ?>
                    </td>
                    <td><?php echo $row["SoLuong"]; ?></td>
                    <td><?php echo $row["GiaDonVi"]; ?></td>
                    <td><?php echo $row["NgayNhap"]; ?></td>
                    <td><?php echo $row["CacHinhAnh"]; ?></td>
                    <td>
                      <a href="delete.php?MaSP=<?php echo $row["MaSP"]; ?>" onclick="return confirm('are you sure');"><i class="fas fa-trash-alt"></i></a>
                      <span>/</span>
                      <a href="edit.php?MaSP=<?php echo $row["MaSP"]; ?>" onclick="return myfunc(<?php echo $row['MaSP'] ?>);"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  <?php
                      }
                    } else {

                    }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid" id="table-headphone" style="display: none;">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Headphone</li>
            </ol>
    
            
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Headphone</div>
              <div class="card-body">
                <div class="table-responsive">
                  <form action="insert.php" method="post">
                    <div class="add-">
                      <input type="hidden" name="maloaisp" value=2 >
                      <input type="text" name="name" placeholder="Name" class="form-control"> <br>
                      <input type="text" name="brand" placeholder="Brand" class="form-control"> <br>
                      <input type="text" name="amount" placeholder="Amount" class="form-control"> <br>
                      <input type="text" name="price" placeholder="Price" class="form-control"> <br>       
                      <input type="text" name="date_added" placeholder="Date Added" class="form-control"> <br>
                      <input type="text" name="image_links" placeholder="Image Link" class="form-control"> <br>
                    </div>
                    <input type="submit" class="btn btn-info" id="btn-add" value="Add new">
                  </form>
                  <div class="btn-group" style="float: right;">
                

              </div>
              <br>
                  <br>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Amount</th>         
                        <th>Image link</th>
                        <th>Date Added</th>
                        <th>Price</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $sql = "SELECT * FROM product WHERE MaLoai=2";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $row["TenSP"]; ?></td>
                    
                    <td><?php $sql2 = "SELECT TenNPP FROM vendors WHERE MaNPP = ".$row["MaNPP"];
                          $result2 = $conn->query($sql2);
                          $row2 = $result2->fetch_assoc();
                          echo $row2["TenNPP"];
                        ?>
                    </td>
                    <td><?php echo $row["SoLuong"]; ?></td>
                    <td><?php echo $row["GiaDonVi"]; ?></td>
                    <td><?php echo $row["NgayNhap"]; ?></td>
                    <td><?php echo $row["CacHinhAnh"]; ?></td>
                    <td>
                      <a href="delete.php?MaSP=<?php echo $row["MaSP"]; ?>" onclick="return confirm('are you sure');"><i class="fas fa-trash-alt"></i></a>
                      <span>/</span>
                      <a href="edit.php?MaSP=<?php echo $row["MaSP"]; ?>"><i class="fas fa-edit" ></i></a>
                    </td>
                  </tr>
                  <?php
                      }
                    }
                  ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>   
  </div>
  <footer class="footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © GearNation</span>
        </div>
      </div>
    </footer>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script>
    $("#clickKeyboard").click(function () {
      $("#table-keyboard").show();
      $("#table-mouse").hide();
      $("#table-headphone").hide();
    });
    $("#clickMouse").click(function () {
      
      $("#table-mouse").show();
      $("#table-keyboard").hide();
      $("#table-headphone").hide();
    });
    $("#clickHeadphone").click(function () {
      
      $("#table-mouse").hide();
      $("#table-keyboard").hide();
      $("#table-headphone").show();
    });
  </script>
  <script>
    function job(param){
      $.ajax({
        method: "POST",
        url: 'ajax.php',
        data: {action: 'call_this' data: param},
        success: function(html){
          alert(html);
        }
      });
    }
  </script>
</body>

</html>