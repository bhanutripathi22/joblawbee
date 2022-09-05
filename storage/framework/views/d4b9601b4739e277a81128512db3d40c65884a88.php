<div class="modal fade" id="myModal" role="dialog" style="padding-top:7%;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#171715;">
             <h4 class="modal-title">Subscribe For Job Alert</h4>
          
          <button type="button" class="close coloredClose closeCustomModal" data-dismiss="modal"  aria-label="Close">
							<i class="fa fa-window-close" style="background-color:#fff"  aria-hidden="true"></i>
						</button>
         
        </div>
        <div class="modal-body">
        <form id="subscription-form" method="POST" action="<?php echo e(route('subscribe')); ?>">
            <?php echo csrf_field(); ?>
           <div class="row">
            <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fname" placeholder="First Name" value="<?php echo e($company->profile->email ?? old('email')); ?>"  required />
                            <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="lname" placeholder="Last Name" value="<?php echo e($company->profile->email ?? old('email')); ?>" required/>
                            <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                  
                  </div>


            <div class="row">
         <div class="col-md-6">
                        <div class="form-group">
                            <label>Email ID <span style="color: red;">*</span></label>
                            <input type="email" class="form-control <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" placeholder="Email" value="<?php echo e($company->profile->email ?? old('email')); ?>" required/>
                            <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                     

                       <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact No. <span style="color: red;">*</span></label>
                            <input type="text" class="form-control <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="contact_no" placeholder="Mobile No." value="<?php echo e($company->profile->email ?? old('email')); ?>" required/>
                            <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

        </div>



                  <div class="row">
                         <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Experience <span style="color: red;">*</span></label>
                           <select  class="form-control num-only <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="minimum_experience"  value="<?php echo e(old('minimum_experience')); ?>" required>
                             <option disabled selected>Experience</option>
                                      <option>1</option>
                                       <option>2</option>
                                        <option>3</option>
                                          <option>4</option>
                                           <option>5</option>
                                            <option>6</option>
                                             <option>7</option>
                                              <option>8</option>
                                               <option>9</option>
                                                <option>10</option>
                                                  <option>11</option>
                                                  <option>12</option>
                                        <option>13</option>
                                          <option>14</option>
                                           <option>15</option>
                                            <option>16</option>
                                             <option>17</option>
                                              <option>18</option>
                                               <option>19</option>
                                                <option>20</option>

                                             <option>21</option>
                                          <option>22</option>
                                           <option>23</option>
                                            <option>24</option>
                                             <option>25</option>
                                              <option>26</option>
                                               <option>27</option>
                                                <option>28</option>
                                                   <option>29</option>
                                          <option>30</option>
                                           <option>31</option>
                                            <option>32</option>
                                             <option>33</option>
                                              <option>34</option>
                                               <option>35</option>
                                                <option>36</option>
                                                 <option>37</option>
                                                  <option>38</option>
                                                   <option>39</option>
                                                    <option>40</option>
                        </select>
                        </div>
                    </div>
                     

                       <div class="col-md-6">
                        <div class="form-group">
                            <label>Location <span style="color: red;">*</span></label>
                            <select class="form-control num-only <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="" name="location" placeholder="City" required>
                                  <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($city->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                    </div>

        </div>


                  <div class="row">
         <div class="col-md-12">
                        <div class="form-group">
                            <label>Practice Area <span style="color: red;">*</span></label>
                             <select class="form-control num-only <?php if ($errors->has('practice_area')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('practice_area'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="multiple_practice_area" name="practice_area[]" multiple="multiple">
                                  <?php $__currentLoopData = $practice_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $practice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($practice->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                    </div>
                   

        </div>

        <div class="col-md-12" style="padding-left: 1%;
    padding-bottom: 3%;" >
          <button type="submit" class="btn btn-success" >Submit</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  
</div>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('#multiple_practice_area').select2({
       width: '100%',
       placeholder: 'Select Practice Areas (max 3)',
       maximumSelectionLength: 3
     });

     $("#subscription-form").on("submit", function() {
      $('button[type="submit"]').attr("disabled", true);
     });

   });
</script>
<?php $__env->stopPush(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/partials/job_alert.blade.php ENDPATH**/ ?>