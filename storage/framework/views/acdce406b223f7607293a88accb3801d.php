<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
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

<div class="continer ">
  <div class="row justify-content-end">
    <div class="col-2">
  <a href="<?php echo e(url('/logout')); ?>" class="btn btn-danger mt-2">Log Out</a>
</div>
</div>
</div>
    <div class="container-sm mt-4">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="table-responsive-sm">
                    <table class="table table-striped
                    table-hover	
                    table-borderless
                    table-secondary
                    align-middle">
                        <thead class="table-light">
                            <caption>User Data</caption>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <tr class="table-dark" >
                                    <td scope="row"><?php echo e($loop->index+1); ?></td>
                                    <td><?php echo e($item->userName); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <?php if($item->image): ?>
                                  <td> <img src="<?php echo e(asset('uploads/user/'.$item->image)); ?>" style="height: 100px;width:100px;">
                                  </td>
                                    <?php else: ?> 
                                    <td><span>No image found!</span></td>
                                    <?php endif; ?>
                                    
                                    <td><a href="user/<?php echo e(($item->id)); ?>/delete" class="btn btn-danger">Delete</a>
                                        <a href="user/<?php echo e(($item->id)); ?>/edit" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                            
                    </table>
                </div>
                
            </div>
        </div>
    </div>



  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\crud\resources\views/userData.blade.php ENDPATH**/ ?>