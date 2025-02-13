<?php require_once APP."/views/master/header.php"; ?>

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<?php require_once APP."/views/master/{$_SESSION[USER_SESSION]['level']}_nav.php"; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fa-solid fa-circle-question fa-xs"></i> <?= LANG['support_title'] ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= URL ?>?request=home"><?= LANG['home'] ?></a></li>
              <li class="breadcrumb-item active"><?= LANG['support_title'] ?></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <table id="datable" class="table table-striped">
              <thead class="bg-dark">
                <tr>
                  <td>No.</td>
                  <td><?= LANG['field_name'] ?></td>
                  <td><?= LANG['field_email'] ?></td>
                  <td><?= LANG['field_level'] ?></td>
                  <td><?= LANG['field_subject'] ?></td>
                  <td><?= LANG['field_status'] ?></td>
                  <td><?= LANG['field_actions'] ?></td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </section>

    <div class="modal fade" id="modal-request">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h4 class="modal-title" id="name"></h4>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p id="subject"></p>
            <p id="mssg"></p>
            <div class="form-group">
              <h5 for="response"><?= LANG['support_response'] ?></h5>
              <textarea id="response" rows="8" class="form-control"></textarea>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?= LANG['close_button'] ?></button>
            <button type="button" class="btn btn-primary" id="sendres"><?= LANG['support_send_answer'] ?></button>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>


<?php require_once APP."/views/master/footer_js.php"; ?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="dist/js/datatable.js"></script>
<script src="dist/js/sudosupports.js"></script>

<?php require_once APP."/views/master/footer_end.php"; ?>