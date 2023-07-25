<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 border rounded p-4">
            <h2 class="text-center text-primary mb-4">RESIDENT INFORMATION</h2>

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
            <div class="form-group">
                <label>Birth Date</label>
                <input type="date" name="birth_date" value="<?= $resident_data->birth_date?>" class="form-control"/>
                <span><?= form_error('birth_date') ?></span>
            </div>
            <div class="form-group">
                <label>Birth Place</label>
                <input type="text" name="birth_place" value="<?= $resident_data->birth_place?>" class="form-control"/>
                <span><?= form_error('birth_place') ?></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= $resident_data->email?>" class="form-control"/>
                <span><?= form_error('email') ?></span>
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
                <div class="row">
                    <div class="col-sm-4">
                        <label for="occupation">Occupation</label>
                        <input type="text" name="occupation" value="<?= $resident_data->occupation?>" placeholder="Occupation" class="form-control"/>
                        <span><?= form_error('occupation') ?></span>
                    </div>
                    <div class="col-sm-4">
                        <label for="purok">Purok</label>
                        <input type="text" name="purok" value="<?= $resident_data->purok?>" placeholder="Purok" class="form-control"/>
                        <span><?= form_error('purok') ?></span>
                    </div>
                    <div class="col-sm-4">
                        <label for="barangay">Barangay</label>
                        <input type="text" name="barangay" value="<?= $resident_data->barangay?>" placeholder="Barangay" class="form-control"/>
                        <span><?= form_error('barangay') ?></span>
                    </div>
                    <div class="col-sm-4">
                        <label for="diff_abled">Differently Abled</label>
                        <input type="text" name="diff_abled" value="<?= $resident_data->diff_abled?>" placeholder="Differently Abled" class="form-control"/>
                        <span><?= form_error('diff_abled') ?></span>
                    </div>
                </div>
            </div>

            <!-- Third Row -->
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
            <div class="form-group col-md-3">
                <label for="educational">Educational Attainment</label>
                <select name="educational" value="<?php echo $resident_data->educational; ?>" id="educational" class="form-control" required>
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
                <input type="text" name="monthly_income" value="<?php echo $resident_data->monthly_income; ?>" id="monthly_income" class="form-control" required />
                <span class="text-danger"><?= form_error('monthly_income') ?></span>
            </div>
            <div class="form-group col-md-3">
                <label for="tot_housemember">Total Household Member</label>
                <input type="text" name="tot_housemember" value="<?php echo $resident_data->tot_housemember; ?>" id="tot_housemember" class="form-control" required />
                <span class="text-danger"><?= form_error('tot_housemember') ?></span>
            </div>

            <!-- Fourth Row -->
            <div class="form-group">
                <label>Nationality</label>
                <input type="text" name="nationality" value="<?= $resident_data->nationality?>" class="form-control"/>
                <span><?= form_error('nationality') ?></span>
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" value="<?= $resident_data->contact?>" class="form-control"/>
                <span><?= form_error('contact') ?></span>
            </div>

            <div class="form-group">
                <label>Religion</label>
                <input type="text" name="religion" value="<?= $resident_data->religion?>" class="form-control"/>
                <span><?= form_error('religion') ?></span>
            </div>
            <div class="form-group col-md-4">
                <label for="land_own">Land Ownership Status</label>
                <select name="land_own" value="<?php echo $resident_data->land_own; ?>" id="land_own" class="form-control" required>
                    <option value="">--Select Ownership--</option>
                    <option value="owned">Owned</option>
                    <option value="landless">Landless</option>
                    <option value="tenant">Tenant</option>
                    <option value="caretaker">Caretaker</option>
                </select>
                <span class="text-danger"><?= form_error('land_own') ?></span>
            </div>
            <div class="form-group col-md-4">
                <label for="houseownership">House Ownership</label>
                <select name="houseownership" value="<?php echo $resident_data->houseownership; ?>" id="houseownership" class="form-control" required>
                    <option value="">--Select Ownership--</option>
                    <option value="own house">Own House</option>
                    <option value="renting">Renting</option>
                    <option value="living with Parents">Living with Parents</option>
                </select>
                <span class="text-danger"><?= form_error('houseownership') ?></span>
            </div>

            <!-- Image Display -->
            <?php if ($resident_data->image !== '') : ?>
                <div class="form-group">
                    <label>Resident Image</label>
                    <div>
                        <img src="<?= base_url('uploads/' . $resident_data->image) ?>" alt="Resident Image" width="100" height="100">
                    </div>
                </div>
            <?php else : ?>
                <div class="form-group">
                    <label>No Image</label>
                </div>
            <?php endif; ?>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
