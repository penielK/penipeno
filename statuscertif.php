<?php
include ('formationsaddaction.php');
 ?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
<?php include ("includes/head.php");
 ?>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <?php include ("includes/nav.php"); ?>

      <div class="main-sidebar sidebar-style-2">
      <?php include ("includes/sideBar.php"); ?>
    </div>
    <div class="main-content">
    <div class="card">
                  <div class="card-header">
                  <form action="" method="POST" enctype="multipart/form-data">
                    <h4>Statuts Certifications</h4>
                    <div class="card-header">
                      
                      <div class="card-header-action">
                        <form>
                            <div class="input-group-btn">
                              
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table table-striped" id="sortable-table">
                          <thead>
                            <tr>
                              <th class="text-center">
                                <i class="fas fa-th"></i>
                              </th>
                              <th>Nom certifcations</th>
                              <th>Progressions</th>
                              <th>Participants</th>
                              <th>Debut Date</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="sort-handler">
                                  <i class="fas fa-th"></i>
                                </div>
                              </td>
                              <td>Create a mobile app</td>
                              <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                  <div class="progress-bar bg-success" data-width="100"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Wildan Ahdian">
                              </td>
                              <td>2018-01-20</td>
                              <td>
                                <div class="badge badge-success">Completed</div>
                              </td>
                              <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="sort-handler">
                                  <i class="fas fa-th"></i>
                                </div>
                              </td>
                              <td>Redesign homepage</td>
                              <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="40%">
                                  <div class="progress-bar" data-width="40"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Nur Alpiana">
                                <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Hariono Yusup">
                                <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Bagus Dwi Cahya">
                              </td>
                              <td>2018-04-10</td>
                              <td>
                                <div class="badge badge-info">Todo</div>
                              </td>
                              <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="sort-handler">
                                  <i class="fas fa-th"></i>
                                </div>
                              </td>
                              <td>Backup database</td>
                              <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                                  <div class="progress-bar bg-warning" data-width="70"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Rizal Fakhri">
                                <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Hasan Basri">
                              </td>
                              <td>2018-01-29</td>
                              <td>
                                <div class="badge badge-warning">In Progress</div>
                              </td>
                              <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="sort-handler">
                                  <i class="fas fa-th"></i>
                                </div>
                              </td>
                              <td>Input data</td>
                              <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                  <div class="progress-bar bg-success" data-width="100"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Rizal Fakhri">
                                <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Isnap Kiswandi">
                                <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Yudi Nawawi">
                                <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle" width="35"
                                  data-toggle="tooltip" title="Khaerul Anwar">
                              </td>
                              <td>2018-01-16</td>
                              <td>
                                <div class="badge badge-success">Completed</div>
                              </td>
                              <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>    
                  
              </div>
              



      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <?php  include ("includes/footer.php"); ?>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
