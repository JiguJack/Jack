<!doctype html>
<html lang="en">

<head>
  <title>Register User</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .reglogin {
      margin-left: 20px; 
      color: #ffffff;
      background-color: #000000;
      border: 2px solid black;
      padding: 7px;
      border-radius: 5px;
      text-decoration: none;
    }
    .reglogin:hover {
      color: #ffffff;
      background-color: #1a1a1a;
      text-decoration: none;
    }
  </style>

</head>

<body>
  <h1 class="text-center">Update Form</h1>
  <div class="container w-50">

    <!-- <form action="<?php echo e(url('/')); ?>/user/update/{userid}" method="post"> -->
    <form action="<?php echo e(route('updated.user',$data->userid)); ?>" method="post">

      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

      <!-- <div class="form-group">
        <label for="userid">UserID<span class="text-danger">*</span></label>
        <input type="text" name="userid" id="" class="form-control" placeholder="" value="<?php echo e($data -> userid); ?>" aria-describedby="helpId">
      </div> -->

                                                  <!-- USER NEW FIRST NAME      -->
      <div class="form-group">
        <label for="newfirstName">Update First Name<span class="text-danger">*</span></label>
        <input type="text" name="newfirstName" id="" class="form-control" placeholder="" value="<?php echo e($data -> firstName); ?>" aria-describedby="helpId">
        <span class="text-danger">
          <?php $__errorArgs = ['newfirstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <?php echo e($message); ?>

          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
      </div>

                                                  <!-- USER NEW LAST NAME -->
      <div class="form-group">
        <label for="newlastName">Update Last Name<span class="text-danger">*</span></label>
        <input type="text" name="newlastName" id="" class="form-control" placeholder="" value="<?php echo e($data -> lastName); ?>" aria-describedby="helpId">
        <span class="text-danger">
          <?php $__errorArgs = ['newlastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <?php echo e($message); ?>

          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
      </div>

                                                    <!-- USER NEW EMAIL -->
      <div class="form-group">
        <label for="newemail">Update Email<span class="text-danger">*</span></label>
        <input type="text" name="newemail" id="" class="form-control" placeholder="" value="<?php echo e($data -> email); ?>" aria-describedby="helpId">
        <span class="text-danger">
          <?php $__errorArgs = ['newemail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <?php echo e($message); ?>

          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
      </div>

                                                  <!-- USER NEW PASSWORD -->
      <div class="form-group">
        <label for="newpassword">Update Password<span class="text-danger">*</span></label>
        <input type="password" name="newpassword" id="pass" class="form-control" placeholder="" aria-describedby="helpId">
        <input type="checkbox" onclick="myFunction()"> Show Password
                        <script>
                            function myFunction() {
                                var x = document.getElementById('pass');
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
        <span class="text-danger">
          <?php $__errorArgs = ['newpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <?php echo e($message); ?>

          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
      </div>

      <div class="form-group">
        <label for="newconfirm_password">Confirm Password<span class="text-danger">*</span></label>
        <input type="password" name="newconfirm_password" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <span class="text-danger">
          <?php $__errorArgs = ['newconfirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <?php echo e($message); ?>

          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
      </div>

      <div class="form-group">
        <button class="btn btn-primary">Update</button>
        <a href="<?php echo e(url('/')); ?>/login" class="reglogin">Home</a>
      </div>
      
    </form>
  </div>
</body>

</html><?php /**PATH C:\laragon\www\Project1\resources\views/updateUser.blade.php ENDPATH**/ ?>