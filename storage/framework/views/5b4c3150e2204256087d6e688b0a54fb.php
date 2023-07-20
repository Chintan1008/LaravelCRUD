<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

    <?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-box">
    <strong><?php echo e($message); ?></strong>
</div>

<?php endif; ?>

<div class="container-sm">
    <h2 class="text-center pb-3">Login In</h2>

    <?php if(Session::has('success')): ?>
    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
    <?php endif; ?>
    <?php if(Session::has('fail')): ?>
    <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
    <?php endif; ?>

    <form action='<?php echo e(url('/login_user')); ?>' id="loginForm" method="post" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="UserName" name="UserName" value="<?php echo e(old('UserName')); ?>"  >
          </div>
          <label for="UserName"></label>

          <?php if($errors->has('UserName')): ?>
            <span class="text-danger">The User name required </span>
            <?php endif; ?>
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="password" name="password" >
          </div>
          <?php if($errors->has('password')): ?>
            <span class="text-danger">The password Required </span>
            <?php endif; ?>
        </div>
       <div class="row mb-3 justify-content-center">
        <div class="col-sm-2"></div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
       </div>

    </form>
    <div class="container-sm">
        <div class="row justify-content-center">
            <div class="col-sm-4 p-2">
        <a href="registration" class="btn btn-primary text-center ">Sing Up Here</a>
    </div>
</div>
</div>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
 jQuery('#loginForm').validate({

  rules:{
    UserName:{
      nowhitespace:true,
      required:true,
    },
    password:{
      required:true,
      nowhitespace:true,
      minlength:6,
    },


  }, message:{
    UserName:{
      required:"please enter User Name",
    },
    password:{
      required:"please enter Password",
      minlength:"password Length must be 6",

    },
  },
  submitHandler:function(form){
    form.submit();
  }

 });

</script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\crud\resources\views/login.blade.php ENDPATH**/ ?>