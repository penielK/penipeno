<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
<?php include ("includes/head.php"); ?>
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
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="assets/img/avatar.png" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $value["full_name"]; ?></a>
                      </div>
                      
                      <div class="author-box-job">Web Developer</div>
                    </div>
                    <div class="text-center">
                      <div class="author-box-description">
                      </div>
                      <div class="mb-2 mt-3">
                        <div class="text-small font-weight-bold"></div>
                      </div>
                      <a href="#" class="btn btn-social-icon-primary mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon-primary mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon-primary mr-1 btn-github">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon-primary mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h4>Skills</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Java</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-primary" data-width="70%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Web Design</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-warning" data-width="80%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Photoshop</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-green" data-width="48%"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">A propos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Edit</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <?php
                          include 'profilaction.php';
                          $query = $conn->query("SELECT * FROM profil ORDER BY id DESC");
                          $rows = $query->fetchAll();
                          ?>
                          <?php
                          if ($rows) {
                          //sortie des datas\
                            foreach($rows as $value) {
                            ?>
                            <tr>
                            <?php   }
                          }
                          ?>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Nom et Prenoms</strong>
                            <br>
                            <p class="text-muted"><?php echo $value["full_name"]; ?></p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Telephone</strong>
                            <br>
                            <p class="text-muted"><?php echo $value["mobile"]; ?></p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted"><?php echo $value["email"]; ?></p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>habitation</strong>
                            <br>
                            <p class="text-muted"><?php echo $value["habitation"]; ?></p>
                          </div>

                        </div>
                        <div class="section-title">Manuel d' Usage</div>
                        <ul>
                          <li>Pour ajouter un formateur rendez vous sur le dashbord appuyez l'onglet formateurs ensuite formateur ADD</li>
                          <li>Pour lister la listes des formateurs rendez vous sur le dashbord l'onglet Formateur ensuite liste formateurs.</li>
                          <li>Pour ajouter un participants rendez vous sur le dashbord appuyez l'onglet participants ADD</li>
                          <li>Pour lister la listes des participants rendez vous sur le dashbord l'onglet participants ensuite liste participants.
                          </li>
                          <li>Pour ajouter une formation rendez vous sur le dashbord l'onglet formations ou formations/modules ADD.</li>
                          <li>Pour lister la listes des formations rendez vous sur le dashbord l'onglet formations ensuite liste formations.
                          </li>
                          
                          <label>NB : </label>
                          <p> Cette application est censer vous aidez a automatiser les taches en ce qui concerne l'ajout des formateurs et participants ensuite a les lister au fur a mesure les formateurs et participants
                        </ul>
                        <a href="editprofiles.php?modif= <?php echo $value ["id"]; ?>">
                        <input type="submit"name="add" class="btn btn-primary  btn-block" value="Modifier(profil)">
                      </a>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" action="profilaction.php" class="needs-validation">
                          <div class="card-header">
                            <h4 href="#Modifier">Edit Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Nom prenom </label>
                                <input name="fullname"required type="text" class="form-control" value="">
                                <div class="invalid-feedback">
                                  Please fill in the first name
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Lieux Habitation</label>
                                <input name="habitation" required type="text" class="form-control" value="">
                                <div class="invalid-feedback">
                                  Please fill in the last name
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Email</label>
                                <input name="email" pattern="[a-zA-Z][\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}" type="email" class="form-control" value="">
                                <div class="invalid-feedback">
                                  Please fill in the email
                                </div>
                              </div>
                              <div class="form-group col-md-5 col-12">
                                <label>Phone</label>
                                <input name="phone" pattern="(\+225|0)([ \-_/]*)(\d[ \-_/]*){10}" type="tel" class="form-control" value="">
                              </div>
                            </div>

                            <div class="row">
                              <div class="form-group mb-0 col-12">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer text-right">
                            <input type="submit" name="add" class="btn btn-success btn-block" value="Sauvegarder">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
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
