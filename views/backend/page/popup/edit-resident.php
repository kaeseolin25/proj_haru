<!-- Main Content -->
<div id="content">
   <div class="container">
      <?php echo validation_errors(); ?>
      <?php
if(isset($_SESSION['error'])):?>
	<div style="color:red;"><?= $_SESSION['error'] ?></div>
<?php endif;?>
            <br>
      <form method="POST" enctype="multipart/form-data"action="<?= base_url('index.php/dashboard/edit-resident/'.$resident_data->resident_id); ?>">

         <!-- First Row -->
         <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" value="<?= $resident_data->first_name?>" class="form-control">
            <span><?= form_error('first_name') ?></span>
         </div>
         <div class="form-group">
            <label>Middle Name</label>
            <input type="text" name="middle_name" value="<?= $resident_data->middle_name?>" class="form-control"/>
            <span><?= form_error('middle_name') ?></span>
         </div>
         <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?= $resident_data->last_name?>" class="form-control"/>
            <span><?= form_error('last_name') ?></span>
         </div>
         <div class="form-group">
            <label>Name Extension</label>
            <input type="text" name="name_ex" value="<?= $resident_data->name_ex?>" class="form-control"/>
            <span><?= form_error('name_ex') ?></span>
         </div>

         <!-- Second Row -->
         <div class="form-group">
            <label>Sex</label>
            <select name="sex" value="<?= $resident_data->sex?>" class="form-control">
               <option value="male">Male</option>
               <option value="female">Female</option>
            </select>
            <span><?= form_error('sex') ?></span>
         </div>
         <div class="form-group">
            <label>Birth Date</label>
            <input type="date" name="birth_date"value="<?= $resident_data->birth_date?>" class="form-control"/>
            <span><?= form_error('birth_date') ?></span>
         </div>
         <div class="form-group">
            <label>Birth Place</label>
            <input type="text" name="birth_place"value="<?= $resident_data->birth_place?>" class="form-control"/>
            <span><?= form_error('birth_place') ?></span>
         </div>
         <div class="form-group">
            <label>Email</label>
            <input type="email" name="email"value="<?= $resident_data->email?>" class="form-control"/>
            <span><?= form_error('email') ?></span>
         </div>
         <div class="form-group">
            <label>Contact</label>
            <input type="tel" name="contact"value="<?= $resident_data->contact?>" class="form-control"/>
            <span><?= form_error('contact') ?></span>
         </div>

         <!-- Third Row -->
         <div class="form-group">
            <div class="row">
             
               <div class="col-sm-4">
                  <label for="purok">Purok</label>
                  <input type="text" name="purok" value="<?= $resident_data->purok?>"placeholder="Purok" class="form-control"/>
                  <span><?= form_error('purok') ?></span>
               </div>
               <div class="col-sm-4">
                  <label for="barangay">Barangay</label>
                  <input type="text" name="barangay" value="<?= $resident_data->barangay?>"placeholder="Barangay" class="form-control"/>
                  <span><?= form_error('barangay') ?></span>
               </div> 
                <div class="col-sm-4">
                  <label for="occupation">Occupation</label>
                  <input type="text" name="occupation" value="<?= $resident_data->occupation?>"placeholder="Occupation" class="form-control"/>
                  <span><?= form_error('occupation') ?></span>
               </div>
            </div>
         </div>

         <!-- Fourth Row -->
         <div class="form-group">
            <label>Civil Status</label>
            <select name="civil_status" value="<?= $resident_data->civil_status?>" class="form-control">
               <option value="single">Single</option>
               <option value="married">Married</option>
               <option value="separated">Separated</option>
               <option value="widowed">Widowed</option>
            </select>
            <span><?= form_error('civil_status') ?></span>
         </div>
         <div class="col-sm-4">
                  <label for="religion">Religion</label>
                  <input type="text" name="religion" value="<?= $resident_data->religion?>"placeholder="Occupation" class="form-control"/>
                  <span><?= form_error('religion') ?></span>
               </div>
               <div class="form-group">
            <label>Nationality</label>
            <input type="text" name="nationality" value="<?= $resident_data->nationality?>"class="form-control"/>
            <span><?= form_error('nationality') ?></span>
         </div>
         
         <div class="form-group">
            <label>Educational Attainment</label>
            <select name="educational" value="<?= $resident_data->educational?>" class="form-control" required>
               <option value="">--Select Attainment--</option>
               <option value="No Schooling Completed">No schooling completed</option>
               <option value="Elementary Graduate">Elementary Graduate</option>
               <option value="Elementary Undergraduate">Elementary Undergraduate</option>
               <option value="High School Graduate">High School Graduate</option>
               <option value="HighSchool Undergraduate">HighSchool Undergraduate</option>
               <option value="College UnderGraduate">College UnderGraduate</option>
               <option value="Vocational">Vocational</option>
               <option value="Bachelor's Degree">Bachelor's Degree</option>
               <option value=">Master Degree">Master Degree</option>
               <option value="Doctorate Degree">Doctorate Degree</option>
            </select>
            <span class="text-danger"><?= form_error('educational') ?></span>
         </div>
         <div class="form-group col-md-2">
            <label for="monthly_income">Monthly Income</label>
            <input type="text" name="monthly_income"  value="<?= $resident_data->monthly_income?>" id="monthly_income" class="form-control" required />
            <span class="text-danger"><?= form_error('monthly_income') ?></span>
         </div>
         <div class="form-group col-md-3">
            <label for="tot_housemember">Total Household Member</label>
            <input type="text" name="tot_housemember" value="<?= $resident_data->tot_housemember?>" id="tot_housemember" class="form-control" required />
            <span class="text-danger"><?= form_error('tot_housemember') ?></span>
         </div>

         <!-- Fifth Row -->
         
         

         <!-- Sixth Row -->
         <div class="form-group">
            <label>Land Ownership Status</label>
            <select name="land_own"  value="<?= $resident_data->land_own?>" id="land_own" class="form-control" required>
               <option value="">--Select Ownership--</option>
               <option value="owned">Owned</option>
               <option value="landless">Landless</option>
               <option value="tenant">Tenant</option>
               <option value="caretaker">Caretaker</option>
            </select>
            <span class="text-danger"><?= form_error('land_own') ?></span>
         </div>
         <div class="form-group">
            <label>House Ownership</label>
            <select name="house_own" value="<?= $resident_data->house_own?>" class="form-control" required>
               <option value="">--Select Ownership--</option>
               <option value="own house">Own House</option>
               <option value="renting">Renting</option>
               <option value="living with Parents">Living with Parents</option>
            </select>
            <span class="text-danger"><?= form_error('house_own') ?></span>
         </div>
         <div class="form-group">
            <label>Differently Abled</label>
            <input type="text" name="diff_abled" value="<?= $resident_data->diff_abled?>" class="form-control"/>
            <span><?= form_error('diff_abled') ?></span>
         </div>
         <?php
if(isset($_SESSION['error'])):?>
	<div style="color:red;"><?= $_SESSION['error'] ?></div>
<?php endif;?>

<?php
if(isset($_SESSION['success'])):?>
	<div style="color:green;"><?= $_SESSION['success'] ?></div>
<?php endif;?>
            <!--    <form action="<?base_url('index.php/dashboard/add-resident/') ?>" method="POST" enctype="multipart/form-data">-->
                <div class="form-group col">
                        <label for="image">Image:</label>
                        <input type="hidden" name="old_prod_image" value="<?= $resident_data->image; ?>" />
                        <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                        
                        <span><?= form_error('image') ?></span>
                    </div>
<!--</form>-->
                <br>
                <?php if (!empty($resident_data->image)) : ?>
                <div class="form-row">
                    <div class="form-group col">
                <img src="<?php echo base_url($resident_data->image); ?>" height="100" width="100" alt="Resident Image">
                </div>
                </div>
             <?php endif; ?>
                <br>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button class="btn btn-primary">Update</button>
      </div>
      </form>
   </div>
</div>
