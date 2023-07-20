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

  </header>
  <main>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-box">
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

    

<form action="/user/<?php echo e($user->id); ?>/update" id="form" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <table align="center" cellspacing=4 cellpadding=5 >
        <hr>
        <?php echo method_field('PUT'); ?>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="fname" id="lname" value="<?php echo e(old('name',$user->First_name)); ?>" ></td>
            <?php if($errors->has('fname')): ?>
            <span class="text-danger">The first name required </span>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" id="lname" value="<?php echo e(old('lname',$user->Last_name)); ?>" ></td>
        </tr> <tr>
            <td>Date OF Birth</td>
            <td><input type="date" name="dob" id="dob" value="<?php echo e(old('dob',$user->dob)); ?>" ></td>
        </tr> 
        <tr>
            <td>Email Id</td>
            <td><input type="email" name="uemail" value="<?php echo e(old('uemail',$user->email)); ?>" ></td>
        </tr>
        <tr>
            <td>Mobile No</td>
            <td><input type="text" name="phone" value="<?php echo e(old('phone',$user->phoneNo)); ?>" ></td>
        </tr>
         <tr>
            <?php
            $g= array($user->gender);
            ?>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="m" <?php echo e(in_array('m',$g)?'checked':''); ?>>Male
                <input type="radio" name="gender" value="f" >Female
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="address" id="address" cols="30" rows="5"  ><?php echo e(old('address',$user->address)); ?></textarea></td>
        </tr>
        <tr>
            <td>Country</td>
            <td>
                <select name="country" id="country">
                    <option value="India">India</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Chaina">Chaina</option>

                </select>
            </td>
        </tr>
        <tr>
            <td>State</td>
            <td>
                <select name="state" id="state">
                    <option value="Gujarat">Gujarat</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Maharastra">Maharastra</option>

                </select>
            </td>
        </tr>
        <tr>
            <td>City</td>
            <td>
                <select name="city" id="city">
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Junagadh">Junagadh</option>
                    <option value="Mubai">Mubai</option>
                    <option value="Rajkot">Rajkot</option>
                    <option value="Pune">Pune</option>
                </select>
            </td>
        </tr>
                <?php
                $hb= json_decode($user->hobbies);
                ?>
        <tr>
            <td>Hobbies</td>
            <td><input type="checkbox" name="hobbies[]" value="Drawing" <?php echo e(in_array('Drawing',$hb)? 'checked':''); ?>>Drawing
                <input type="checkbox" name="hobbies[]" value="Singing" <?php echo e(in_array('Singing',$hb)? 'checked':''); ?>>Singing
                <input type="checkbox" name="hobbies[]" value="Dancing" <?php echo e(in_array('Dancing',$hb)? 'checked':''); ?>>Dancing
                <input type="checkbox" name="hobbies[]" value="Sketch" <?php echo e(in_array('Sketch',$hb)? 'checked':''); ?>>Sketch
            </td>
        </tr>

         <tr>
            <td>Photo</td>
            <td><input type="file" name="image" id="image" value="<?php echo e(old('image',$user->image)); ?>" >(Max=2mb)</td>
        </tr> 
        <tr><td>Login Details</td></tr>
        <tr><td><hr></td>
        <td><hr></td></tr>

        <tr>
            <td>User Name</td>
            <td><input type="text" name="userName" id="userName" value="<?php echo e(old('userName',$user->userName)); ?>" ></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="userPass" id="userPass " ></td>
        </tr>
        

        <tr><td></td>
            <td><input type="reset" value="Reset" id="ret">
                <input type="submit" value="Submit" id="sub">
            </td>
        </tr>

    </table>
</form>


<div id="msg"></div>




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
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
  <script src="<?php echo e(asset('assets/js/validation.js')); ?>"></script>


  <script>
    
// jQuery('#form').submit(function(e){
// e.preventDefualt();
// jQuery('#btn').attr('disabled',true);
// jQuery.ajax({

//   url:"/user/<?php echo e($user->id); ?>/update",
//   data:jQuery('#form').serialize(),
  
//   success:function(result){
//     jQuery('#message').html(result.msg);
//     jQuery('#form').['0'].reset();
//     jQuery('#btn').attr('disabled',false);
//   }
// });
// });
   </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\crud\resources\views/edit.blade.php ENDPATH**/ ?>