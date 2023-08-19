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
  <h1 class="text-center">Registration Form</h1>
  <div class="container w-50">
    <form action="<?php echo e(url('/')); ?>/register" method="post">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
      <div class="form-group">
        <label for="firstName">First Name<span class="text-danger">*</span></label>
        <input type="text" name="firstName" id="" class="form-control" placeholder="" value="<?php echo e(old('firstName')); ?>" aria-describedby="helpId">
        <span class="text-danger">
          <?php $__errorArgs = ['firstName'];
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
        <label for="lastName">Last Name<span class="text-danger">*</span></label>
        <input type="text" name="lastName" id="" class="form-control" placeholder="" value="<?php echo e(old('lastName')); ?>" aria-describedby="helpId">
        <span class="text-danger">
          <?php $__errorArgs = ['lastName'];
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
        <label for="email">Email<span class="text-danger">*</span></label>
        <input type="text" name="email" id="" class="form-control" placeholder="" value="<?php echo e(old('email')); ?>" aria-describedby="helpId">
        <span class="text-danger">
          <?php $__errorArgs = ['email'];
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
        <label for="password">Password<span class="text-danger">*</span></label>
        <input type="password" name="password" id="pass" class="form-control" placeholder="" aria-describedby="helpId">
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
          <?php $__errorArgs = ['password'];
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
        <label for="confirm_password">Confirm Password<span class="text-danger">*</span></label>
        <input type="password" name="confirm_password" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <span class="text-danger">
          <?php $__errorArgs = ['confirm_password'];
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
        <button class="btn btn-primary">Submit</button>
        <a href="<?php echo e(url('/')); ?>/login" class="reglogin">Login Here</a>
      </div>
    </form>
  </div>
</body>

</html><?php /**PATH C:\laragon\www\Project1\resources\views/registration.blade.php ENDPATH**/ ?>