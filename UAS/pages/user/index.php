<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User | List</title>
  <link rel="stylesheet" href="../../assets/css/main.min.css">
  <link rel="shortcut icon" href="../../assets/img/LOGO BULAT.png">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- DataTables -->
  <link href="https://cdn.datatables.net/v/bs5/dt-2.0.3/datatables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/v/bs5/dt-2.0.3/datatables.min.js"></script>

  <!-- Select2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- Theme Color -->
  <meta name="theme-color" content="#008080">
  <!-- <meta name="theme-color" content="#0d6efd"> -->
  <script>
    function confirmDelete(id) {
      document.getElementById('deleteUserId').value = id;
      var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
      deleteModal.show();
    }
  </script>

</head>

<body style="background-color: var(--bs-gray-900);" id="home">

  <!-- CONTAINER -->
  <div class="container-fluid bd-layout p-0">
    <!-- <div class="container-xxl bd-layout bg-white p-0"> -->

    <!-- HEADER -->
    <header class="bd-header shadow z-3">
      <!-- NAVBAR -->
      <nav class="bg-white p-3">
        <h5 class="m-0">
          <button class="btn btn-link d-inline-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
            <i class="bi bi-list"></i>
          </button>
          <button class="btn btn-link d-none d-lg-inline-block" type="button" id="sidebar-toggler">
            <i class="bi bi-list"></i>
          </button>
          <a href="#" class="text-dark text-decoration-none">User</a>
        </h5>
      </nav>
      <!-- END OF NAVBAR -->

    </header>
    <!-- END OF HEADER -->

    <!-- SIDEBAR -->
    <aside class="bd-sidebar">
      <div class="offcanvas-lg offcanvas-start text-bg-dark pb-5" id="sidebar">

        <!-- SIDEBAR HEADER -->
        <div class="sidebar-header p-3 position-sticky top-0 bg-dark z-3 d-block d-lg-none">
          <div class="text-end">
            <button type="button" class="btn btn-dark" data-bs-dismiss="offcanvas" data-bs-target="#sidebar">
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>
        <!-- END OF SIDEBAR HEADER -->

        <!-- LOGO -->
        <div class="p-3 text-center">
          <a href="../../index.php">
            <img src="../../assets/img/LOGO_PANJANG.png" alt="LOGO TRANSPARAN" class="img-fluid rectangular-logo">
            <img src="../../assets/img/LOGO BULAT.png" alt="LOGO BULAT TRANSPARAN" width="50" class="dark-mode-logo">
          </a>
          <!-- <img src="../../assets/img/logo greentech.png" loading="lazy" alt="" class="img-fluid"> -->
        </div>

        <!-- SIDEBAR BODY -->
        <div class="sidebar-body mb-3">

          <div class="accordion accordion-flush">

            <!-- ADMIN MENU -->
            <div class="accordion-item text-bg-dark border-0">

              <!-- ADMIN MENU HEADER -->
              <div class="accordion-header px-3">
                <button class="accordion-button text-bg-dark shadow-none p-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#submenu-admin">
                  ADMIN
                </button>
              </div>

              <!-- ADMIN SUBMENU -->
              <div id="submenu-admin" class="accordion-collapse collapse show">
                <div class="accordion-body p-0 px-3">
                  <div class="list-group list-group-flush">

                    <a href="../../index.php" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark " data-bs-placement="right" data-bs-title="Dashboard">
                      <i class="bi bi-speedometer me-3"></i>
                      <span class="submenu-title">Dashboard</span>
                    </a>

                    <a href="../article/" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Form">
                      <i class="bi bi-input-cursor me-3"></i>
                      <span class="submenu-title">Article</span>
                    </a>

                    <a href="../category/" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark " data-bs-placement="right" data-bs-title="Settings">
                      <i class="bi bi-gear me-3"></i>
                      <span class="submenu-title">Category</span>
                    </a>
                    
                    <a href="#/" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark active" data-bs-placement="right" data-bs-title="Settings">
                      <i class="bi bi-people me-3"></i>
                      <span class="submenu-title">User</span>
                    </a>
                    
                  </div>
                </div>
              </div>
              <!-- END OF ADMIN SUBMENU -->

            </div>
            <!-- END OF ADMIN MENU -->

            <!-- GENERAL MENU -->
            <div class="accordion-item text-bg-dark border-0">
              <!-- GENERAL MENU HEADER -->
              <div class="accordion-header px-3">
                <button class="accordion-button text-bg-dark shadow-none p-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#submenu-general">
                  GENERAL
                </button>
              </div>

              <!-- GENERAL SUBMENU -->
              <div id="submenu-general" class="accordion-collapse collapse show">
                <div class="accordion-body p-0 px-3">
                  <div class="list-group list-group-flush">

                    <a href="../../profile.php" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Profile">
                      <img src="../../assets/img/person-circle.svg" alt="" width="16" class="me-3 rounded-circle">
                      <span class="submenu-title">Profile</span>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-toggle="modal" data-bs-target="#logoutModal" data-bs-placement="right" data-bs-title="Log Out">
                      <i class="bi bi-box-arrow-left me-3"></i>
                      <span class="submenu-title">Log Out</span>
                    </a>

                  </div>
                </div>
              </div>
              <!-- END OF GENERAL SUBMENU -->

            </div>
            <!-- END OF GENERAL MENU -->

          </div>
        </div>
        <!-- END OF SIDEBAR BODY -->

        <!-- <div class="bg-danger" style="height: 100vh;"></div> -->

      </div>

    </aside>
    <!-- END OF SIDEBAR -->

    <!-- MAIN -->
    <main class="bd-main p-3 bg-light">
      <!-- ARTICLE LIST -->

      <?php
      include 'p_user.php';
      $users = users();
      ?>

      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <a href="./create.php" class="btn btn-primary"><i class="bi bi-plus"></i>New User</a>
          </div>
          <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="available-tab-pane">
              <div class="table-responsive">
                <table class="table table-striped table-hover w-100" id="available">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Date Created</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($users as $user) : ?>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $user->created_at; ?></td>
                        <td><?= $user->username; ?></td>
                        <td><?= $user->email; ?></td>
                        <td><?= $user->role; ?></td>
                        <td>
                          <a href="./edit.php?id=<?= htmlspecialchars($user->id) ?>" class="btn btn-warning mb-1"><i class="bi bi-pencil"></i></a>
                          <button type="button" onclick="confirmDelete(<?= $user->id; ?>)" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>

                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF ARTICLE LIST -->


    </main>
    <!-- END OF MAIN -->


    <!-- FOOTER -->
    <footer class="bd-footer text-bg-primary text-center py-3">
      Copyrigth &copy; 2024. All rights reserved
    </footer>
    <!-- END OF FOOTER -->

  </div>
  <!-- END OF CONTAINER -->

  <!-- Modals -->

  <!-- LOGOUT MODAL -->
  <div class="modal fade" id="logoutModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Log Out</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to log out?</p>
        </div>
        <div class="modal-footer">
          <a href="../../login.php" class="btn btn-primary">Yes</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF LOGOUT MODAL -->

  <!-- DELETE MODAL -->
  <div class="modal fade" id="deleteModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this user?</p>
          <form id="deleteForm" action="p_user.php" method="POST">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" id="deleteUserId" name="id" value="<?= $user->id ?>">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteForm').submit();">Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF DELETE MODAL -->


  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- ChartJS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Main Script -->
  <script src="../../assets/js/main.js"></script>
  <script>
    // window.location.href = "../../pages";
  </script>
</body>

</html>