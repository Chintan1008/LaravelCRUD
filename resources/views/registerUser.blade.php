<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        label.error{
            display: block;
            color: red;
            font-size: 12px;
        }
    </style>

    
</head>

<body>
  <header>
  </header>
  <main>
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-box">
        <strong>{{$message}}</strong>
    </div>
    @endif

    <div class="text-center">
        <h2 class="text-ceneter">Registration form</h2>
    </div>

  
        <div class="container-md">

     <form action="{{url('registration')}}" id="form" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row justify-content-center align-items-center g-1">
              <div class="col-3">
                <div class="mb-2">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Last Name" aria-describedby="fname">
                  <small id="fname" class="text-muted"></small>
                </div>
              </div>
            </div>
            <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" aria-describedby="lname">
                    <small id="lname" class="text-muted"></small>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" aria-describedby="dob">
                    <small id="dob" class="text-muted"></small>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="uemail" class="form-label">Email</label>
                    <input type="uemail" name="uemail" id="uemail" class="form-control" placeholder="Example@gmail.com" aria-describedby="email">
                    <small id="uemail" class="text-muted"></small>
                  </div>
                </div>
              </div>
              
              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" aria-describedby="phone">
                    <small id="phone" class="text-muted text-danger"></small>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center align-items-center g-1 pb-2">
                <div class="col-3">
                    Gender
                </div>
                <div class="gen">
              </div>
              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="m">
                    <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="f">
                    <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
              </div>
            </div>
            

              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                  </div>
              </div>

              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                    <div class="mb-2">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" aria-label="country select" id="country" name="country">
                            <option selected>Select Country</option>
                            <option value="India">India</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Chaina">Chaina</option>
                          </select>
                      </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center g-1">
                      <div class="col-3">
                          <div class="mb-2">
                              <label for="state" class="form-label">state</label>
                              <select class="form-select" aria-label="select state" id="state" name="state">
                                  <option selected>Select state</option>
                                  <option value="Gujarat">Gujarat</option>
                                  <option value="Maharastra">Maharastra</option>
                                  <option value="Rajsthan">Rajsthan</option>
                                </select>
                            </div>
                    </div>

              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="city" class="form-label" id="city">City</label>
                    <select class="form-select" aria-label="city select " id="city" name="city">
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Junagadh">Junagadh</option>
                        <option value="Mubai">Mubai</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Pune">Pune</option>
                      </select>
                  </div>
              </div>




              <div class="row justify-content-center align-items-center g-1 pb-2">
                <div class="col-3">
                  <div class="mb-2">
                    Hobbies
                </div>
              </div>
              </div>

              <div class="row justify-content-center align-items-center g-1">
                  <div class="col-3">
                    <div class="mb-2">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkbox1" name="hobbies[]" value="Drwaing">
                    <label class="form-check-label" for="">Drwaing</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkbox2" name="hobbies[]" value="Sketch">
                    <label class="form-check-label" for="">Sketch</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkbox3" name="hobbies[]" value="Dancing">
                    <label class="form-check-label" for="">Dancing</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkbox4" name="hobbies[]" value="Singing">
                    <label class="form-check-label" for="">Singing</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center align-items-center g-1 ">
                <div class="col-3">
                    <div class="mb-2">
                      <label for="image" class="form-label">Choose Image</label>
                      <input type="file" class="form-control" name="image" id="image" placeholder="" aria-describedby="image">
                      <div id="image" class="form-text"></div>
                    </div>
                </div>
              </div>

              <hr>

              <div class="row justify-content-center align-items-center">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="userName" class="form-label">User Name</label>
                    <input type="text" name="userName" id="userName" class="form-control" placeholder="Enter User Name" aria-describedby="uname">
                    <small id="userName" class="text-muted"></small>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center align-items-center">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="userPass" class="form-label">Password</label>
                    <input type="password " name="userPass" id="userPass" class="form-control" placeholder="Enter Password" aria-describedby="password">
                    <small id="userPass" class="text-muted"></small>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center align-items-center mt-2">
                <div class="col-3">
                    <input type="reset" value="Reset" id="ret" class="btn btn-dark">
                <input type="submit" value="Submit" id="sub" class="btn btn-primary">
                </div>
            </div>

            </form>
        </div>
 
  </main>
  <footer>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>




<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  {{-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> --}}



<script src="{{ asset('assets/js/validation.js')}}"></script>
 






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>