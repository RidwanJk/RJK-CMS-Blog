<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User | Create</title>
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

  <style>
    #container {
      width: 1000px;
      margin: 20px auto;
    }

    .ck-editor__editable[role="textbox"] {
      /* Editing area */
      min-height: 200px;
    }

    .ck-content .image {
      /* Block images */
      max-width: 80%;
      margin: 20px auto;
    }
  </style>
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
          <a href="#home" class="text-dark text-decoration-none">Create</a>
        </h5>
      </nav>
      <!-- END OF NAVBAR -->
      <?php session_start();
      $username = $_SESSION['username'];

      ?>
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

                    <a href="../article" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Form">
                      <i class="bi bi-input-cursor me-3"></i>
                      <span class="submenu-title">Article</span>
                    </a>

                    <a href="../category/" class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark" data-bs-placement="right" data-bs-title="Settings">
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
      <form action="create.php" method="POST" enctype="multipart/form-data">
        <div class="card mb-3">
          <div class="card-body">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
              <div class="mb-3">
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role">
                  <option value="admin">Admin</option>
                  <option value="author">Author</option>
                </select>
              </div>
              <div class="d-grid d-lg-block gap-2">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="../user" class="btn btn-secondary">Cancel</a>
              </div>
            </div>
          </div>
      </form>

      <?php
      include 'p_user.php';
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        $result = userCreate($username, $password, $email, $role);

        if ($result) {
          header("Location: index.php");
        } else {
          echo "Error creating user.";
        }
      }
      ?>

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
          <h5 class="modal-title">Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this item?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF DELETE MODAL -->

  <!-- USER FORM MODAL -->
  <div class="modal fade" id="userFormModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">User Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
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
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF USER FORM MODAL -->

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- CK5EDITOR -->
  <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
  <script>
    // This sample still does not showcase all CKEditor&nbsp;5 features (!)
    // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
    CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
      // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
      toolbar: {
        items: [
          'exportPDF', 'exportWord', '|',
          'findAndReplace', 'selectAll', '|',
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          '-',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
          'alignment', '|',
          'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
          'specialCharacters', 'horizontalLine', 'pageBreak', '|',
          'textPartLanguage', '|',
          'sourceEditing'
        ],
        shouldNotGroupWhenFull: true
      },
      // Changing the language of the interface requires loading the language file using the <script> tag.
      // language: 'es',
      list: {
        properties: {
          styles: true,
          startIndex: true,
          reversed: true
        }
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
      heading: {
        options: [{
            model: 'paragraph',
            title: 'Paragraph',
            class: 'ck-heading_paragraph'
          },
          {
            model: 'heading1',
            view: 'h1',
            title: 'Heading 1',
            class: 'ck-heading_heading1'
          },
          {
            model: 'heading2',
            view: 'h2',
            title: 'Heading 2',
            class: 'ck-heading_heading2'
          },
          {
            model: 'heading3',
            view: 'h3',
            title: 'Heading 3',
            class: 'ck-heading_heading3'
          },
          {
            model: 'heading4',
            view: 'h4',
            title: 'Heading 4',
            class: 'ck-heading_heading4'
          },
          {
            model: 'heading5',
            view: 'h5',
            title: 'Heading 5',
            class: 'ck-heading_heading5'
          },
          {
            model: 'heading6',
            view: 'h6',
            title: 'Heading 6',
            class: 'ck-heading_heading6'
          }
        ]
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
      placeholder: 'Write Your Article!',
      // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
      fontFamily: {
        options: [
          'default',
          'Arial, Helvetica, sans-serif',
          'Courier New, Courier, monospace',
          'Georgia, serif',
          'Lucida Sans Unicode, Lucida Grande, sans-serif',
          'Tahoma, Geneva, sans-serif',
          'Times New Roman, Times, serif',
          'Trebuchet MS, Helvetica, sans-serif',
          'Verdana, Geneva, sans-serif'
        ],
        supportAllValues: true
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
      fontSize: {
        options: [10, 12, 14, 'default', 18, 20, 22],
        supportAllValues: true
      },
      // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
      // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
      htmlSupport: {
        allow: [{
          name: /.*/,
          attributes: true,
          classes: true,
          styles: true
        }]
      },
      // Be careful with enabling previews
      // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
      htmlEmbed: {
        showPreviews: true
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
      link: {
        decorators: {
          addTargetToExternalLinks: true,
          defaultProtocol: 'https://',
          toggleDownloadable: {
            mode: 'manual',
            label: 'Downloadable',
            attributes: {
              download: 'file'
            }
          }
        }
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
      mention: {
        feeds: [{
          marker: '@',
          feed: [
            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
            '@sugar', '@sweet', '@topping', '@wafer'
          ],
          minimumCharacters: 1
        }]
      },
      // The "superbuild" contains more premium features that require additional configuration, disable them below.
      // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
      removePlugins: [
        // These two are commercial, but you can try them out without registering to a trial.
        // 'ExportPdf',
        // 'ExportWord',
        'AIAssistant',
        'CKBox',
        'CKFinder',
        'EasyImage',
        // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
        // Storing images as Base64 is usually a very bad idea.
        // Replace it on production website with other solutions:
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
        // 'Base64UploadAdapter',
        'MultiLevelList',
        'RealTimeCollaborativeComments',
        'RealTimeCollaborativeTrackChanges',
        'RealTimeCollaborativeRevisionHistory',
        'PresenceList',
        'Comments',
        'TrackChanges',
        'TrackChangesData',
        'RevisionHistory',
        'Pagination',
        'WProofreader',
        // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
        // from a local file system (file://) - load this site via HTTP server if you enable MathType.
        'MathType',
        // The following features are part of the Productivity Pack and require additional license.
        'SlashCommand',
        'Template',
        'DocumentOutline',
        'FormatPainter',
        'TableOfContents',
        'PasteFromOfficeEnhanced',
        'CaseChange'
      ]
    });
  </script>


  <!-- ChartJS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Main Script -->
  <script src="../../assets/js/main.js"></script>
  <script>
    // window.location.href = "../../pages";
  </script>
</body>

</html>