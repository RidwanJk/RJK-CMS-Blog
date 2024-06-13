<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Tech | Form</title>
  <link rel="stylesheet" href="./assets/css/main.min.css">
  <link rel="shortcut icon" href="./assets/img/LOGO BULAT.png">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- Select2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- Theme Color -->
  <meta name="theme-color" content="#008080">
  <!-- <meta name="theme-color" content="#0d6efd"> -->
</head>

<body style="background-color: var(--bs-gray-900);">

  <!-- CONTAINER -->
  <div class="container-fluid bd-layout p-0">
    <!-- <div class="container-xxl bd-layout p-0"> -->

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
          Form
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
          <a href="./index.html">
            <img src="./assets/img/LOGO_PANJANG.png" alt="LOGO TRANSPARAN" class="img-fluid rectangular-logo">
            <img src="./assets/img/LOGO BULAT.png" alt="LOGO BULAT TRANSPARAN" width="50" class="dark-mode-logo">
          </a>
          <!-- <img src="./assets/img/logo greentech.png" loading="lazy" alt="" class="img-fluid"> -->
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

                    <a href="./index.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Dashboard">
                      <i class="bi bi-speedometer me-3"></i>
                      <span class="submenu-title">Dashboard</span>
                    </a>

                    <a href="./table.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Table">
                      <i class="bi bi-table me-3"></i>
                      <span class="submenu-title">Table</span>
                    </a>

                    <a href="./form.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark active" data-bs-placement="right" data-bs-title="Form">
                      <i class="bi bi-input-cursor me-3"></i>
                      <span class="submenu-title">Form</span>
                    </a>

                    <a href="./settings.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Settings">
                      <i class="bi bi-gear me-3"></i>
                      <span class="submenu-title">Settings</span>
                    </a>

                  </div>
                </div>
              </div>
              <!-- END OF ADMIN SUBMENU -->

            </div>
            <!-- END OF ADMIN MENU -->

            <!-- PAGES MENU -->
            <div class="accordion-item text-bg-dark border-0">
              <!-- PAGES MENU HEADER -->
              <div class="accordion-header px-3">
                <button class="accordion-button text-bg-dark shadow-none p-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#submenu-pages">
                  PAGES
                </button>
              </div>

              <!-- PAGES SUBMENU -->
              <div id="submenu-pages" class="accordion-collapse collapse show">
                <div class="accordion-body p-0 px-3">
                  <div class="list-group list-group-flush">

                    <a href="./home.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Landing page">
                      <i class="bi bi-house me-3"></i>
                      <span class="submenu-title">Landing Page</span>
                    </a>

                    <a href="./notifications.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Notifications">
                      <i class="bi bi-bell me-3"><small class="notification-count">10</small></i>
                      <span class="submenu-title">Notifications</span>
                    </a>

                    <a href="./blank.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Blank Page">
                      <i class="bi bi-file-earmark me-3"></i>
                      <span class="submenu-title">Blank Page</span>
                    </a>

                    <a href="./login.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Log In">
                      <i class="bi bi-box-arrow-in-left me-3"></i>
                      <span class="submenu-title">Log in</span>
                    </a>

                    <a href="./register.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Register">
                      <i class="bi bi-door-open me-3"></i>
                      <span class="submenu-title">Register</span>
                    </a>

                  </div>
                </div>
              </div>
              <!-- END OF PAGES SUBMENU -->

            </div>
            <!-- END OF PAGES MENU -->

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

                    <a href="/profile.html" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Profile">
                      <img src="./assets/img/person-circle.svg" alt="" width="16" class="me-3 rounded-circle">
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

      <form action="">
        <div class="card mb-3">
          <div class="card-body">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input class="form-control" type="file" id="image" name="image">
            </div>
            <img src="./assets/img/person-circle.svg" id="preview" alt="Placeholder Image" width="100" class="img-thumbnail mb-3">
            <div class="mb-3">
              <label for="birth" class="form-label">Birth</label>
              <input type="date" class="form-control" id="birth" name="birth">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select class="form-select" id="status" name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select class="form-select" id="role" name="role">
                <option value="admin">Admin</option>
                <option value="member">Member</option>
              </select>
            </div>
          </div>
        </div>

        <!-- ACTION BUTTONS -->
        <div class="card">
          <div class="card-body">
            <div class="text-end d-grid d-lg-block gap-2">
              <button type="submit" class="btn btn-primary">Save</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </div>
        </div>
        <!-- END OF ACTION BUTTONS -->

      </form>

      <!-- <div class="bg-danger" style="height: 100vh;"></div> -->
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
          <a href="./login.html" class="btn btn-primary">Yes</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF LOGOUT MODAL -->

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Main Script -->
  <script src="./assets/js/blank.js"></script>
  <script>
    // Select2
    $('select').select2({
      theme: 'bootstrap-5'
    });

    // Image Preview
    $('#image').change(function() {
      const file = this.files[0];
      const reader = new FileReader();
      reader.onload = function(e) {
        $('#preview').attr('src', e.target.result);
      }
      reader.readAsDataURL(file);
    });
  </script>
</body>

</html>