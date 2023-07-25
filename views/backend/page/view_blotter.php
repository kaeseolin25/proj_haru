<!-- Include the required CSS and JS files for Bootstrap modal
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script> -->

<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Blotter List</h1>
   <p class="mb-4">
      <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-blotter/') ?>">Add Blotter</a>
      <a href="<?= base_url('index.php/dashboard/delete-blotter/') ?>" class="btn btn-danger">Delete</a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
         <!-- Topbar Search -->
         <form class="form-inline" id="search-form">
            <div class="input-group">
               <input type="text" id="search-input" class="form-control" placeholder="Search by name" aria-label="Search" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                     <i class="fas fa-search fa-sm"></i>
                  </button>
               </div>
            </div>
         </form>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Date Recorded</th>
                     <th scope="col">Complainant</th>
                     <th scope="col">Person to Complain</th>
                     <th scope="col">Complaint</th>
                     <th scope="col">Action Taken</th>
                     <th scope="col">Status</th>
                     <th scope="col">Location of Incidence</th>
                     <th scope="col">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $counter = 1; ?>
                  <?php foreach ($blotter_list as $blotter) : ?>
                     <tr class="search-item">
                        <td><?= $counter ?></td>
                        <td><?= $blotter->date ?></td>
                        <td><?= $blotter->complainant ?></td>
                        <td><?= $blotter->complainee ?></td>
                        <td><?= $blotter->complaint ?></td>
                        <td><?= $blotter->action ?></td>
                        <td><?= $blotter->status ?></td>
                        <td><?= $blotter->location ?></td>
                        <td>
                           <button type="button" class="btn btn-primary edit-blotter-btn" data-blotter="<?= $blotter->blotter_id ?>">
                              Edit
                           </button>
                           <button type="button" class="btn btn-success view-blotter-btn" data-blotter="<?= $blotter->blotter_id ?>">
                              Edit
                           </button>
                           <button class="btn btn-danger delete-blotter-btn" data-blotter="<?= $blotter->blotter_id ?>">Delete</button>
                        </td>
                     </tr>
                     <?php $counter++; ?>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<script>
   /* AJAX */
   $(document).on('click', '.edit-blotter-btn', function() {
      var blotterId = this.dataset.blotter;

      $.ajax({
         url: '<?= base_url('index.php/dashboard/ajax-update-blotter-form') ?>',
         method: 'POST',
         data: {
            blotter_id: blotterId
         },
         success: function(response) {
            bootbox.dialog({
               title: 'Edit Blotter',
               message: ' ',
               size: 'extra-large'
            }).find('.bootbox-body').html(response);
         }
      });
   });

   $(document).on('click', '.delete-blotter-btn', function(e) {
      var blotterId = this.dataset.blotter;

      bootbox.confirm('Are you sure you want to delete this official', function(answer) {
         if (answer == true) {
            window.location = '<?= base_url('index.php/dashboard/delete-blotter/') ?>' + blotterId;
         }
      });
   });
   $(document).ready(function() {
        // Bind the click event for all buttons with class "view-resident-btn"
        $(document).on('click', '.view-blotter-btn', function() {
            var blotterId = $(this).data('blotter');

            $.ajax({
                url: '<?= base_url('index.php/dashboard/ajax_view_blotter_form') ?>',
                method: 'POST',
                data: {
                    blotter_id: blotterId
                },
                dataType: 'html',
                success: function(response) {
                    $('#view-resident-modal .modal-body').html(response);
                    $('#view-resident-modal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        });
    });
   $(document).ready(function() {
      // Search functionality
      $('#search-input').keyup(function() {
         var searchValue = $(this).val().toLowerCase();
         $('.search-item').each(function() {
            var residentName = $(this).find('td:nth-child(3)').text().toLowerCase();
            if (residentName.includes(searchValue)) {
               $(this).show();
            } else {
               $(this).hide();
            }
         });
      });
   });
</script>
