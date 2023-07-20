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
        <h2 class="text-ceneter">Edit User</h2>
    </div>

    {{-- /user/{{$user->id}}/update --}}
        <div class="container-md">

     <form action="/user/{{$user->id}}/update" id="form" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="row justify-content-center align-items-center g-1">
              <div class="col-3">
                <div class="mb-2">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" name="fname" id="fname" value="{{ old('name',$user->First_name)}}" class="form-control" placeholder="Enter Last Name" aria-describedby="fname">
                  <small id="fname" class="text-muted"></small>
                </div>
              </div>
            </div>
            <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" id="lname" value="{{  old('lname',$user->Last_name)}}" class="form-control" placeholder="Enter Last Name" aria-describedby="lname">
                    <small id="lname" class="text-muted"></small>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob',$user->dob)}}" aria-describedby="dob">
                    <small id="dob" class="text-muted"></small>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="uemail" class="form-label">Email</label>
                    <input type="uemail" name="uemail" id="uemail" class="form-control" value="{{ old('uemail',$user->email)}}" placeholder="Example@gmail.com" aria-describedby="email">
                    <small id="uemail" class="text-muted"></small>
                  </div>
                </div>
              </div>
              
              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone',$user->phoneNo)}}" placeholder="Enter Phone Number" aria-describedby="phone">
                    <small id="phone" class="text-muted text-danger"></small>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center align-items-center g-1 pb-2">
                <div class="col-3">
                    @php
                    if($user->gender){
                        $g= array($user->gender);
                    }
                    @endphp
                    Gender
                </div>
                <div class="gen">
              </div>
              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="m" {{in_array('m',$g)?'checked':''}}>
                    <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="f" {{in_array('f',$g)?'checked':''}}>
                    <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
              </div>
            </div>
            

              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="address" rows="3">{{ old('address',$user->address)}}</textarea>
                  </div>
              </div>


              @php
                    if ($user->country) {
                        $country=array($user->country);
                    }
                    @endphp
              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                    <div class="mb-2">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" aria-label="country select" name="country">
                            <option value="India" {{in_array('India',$country)?'selected':''}}>India</option>
                            <option value="Dubai" {{in_array('Dubai',$country)?'selected':''}}>Dubai</option>
                            <option value="Chaina" {{in_array('Chaina',$country)?'selected':''}}>Chaina</option>
                          </select>
                      </div>
                    </div>
                    
                    @php
                    if ($user->state) {
                        $state=array($user->state);
                    }
                    @endphp
                    <div class="row justify-content-center align-items-center g-1">
                      <div class="col-3">
                          <div class="mb-2">
                              <label for="state" class="form-label">state</label>
                              <select class="form-select" aria-label="select state" name="state">
                                  <option value="Gujarat" {{in_array('Gujarat',$state)?'selected':''}}>Gujarat</option>
                                  <option value="Maharastra" {{in_array('Maharastra',$state)?'selected':''}}>Maharastra</option>
                                  <option value="Rajsthan" {{in_array('Rajsthan',$state)?'selected':''}}>Rajsthan</option>
                                </select>
                            </div>
                    </div>

                    @php
                    if ($user->city) {
                        $city=array($user->city);
                    }
                    @endphp
              <div class="row justify-content-center align-items-center g-1">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="city" class="form-label">City</label>
                    <select class="form-select" aria-label="city select " name="city">
                        <option value="Ahmedabad" {{in_array('Ahmedabad',$city)?'selected':''}}>Ahmedabad</option>
                        <option value="Junagadh" {{in_array('Junagadh',$city)?'selected':''}}>Junagadh</option>
                        <option value="Mubai" {{in_array('Mubai',$city)?'selected':''}}>Mubai</option>
                        <option value="Rajkot" {{in_array('Rajkot',$city)?'selected':''}}>Rajkot</option>
                        <option value="Pune" {{in_array('Pune',$city)?'selected':''}}>Pune</option>
                      </select>
                  </div>
              </div>




              <div class="row justify-content-center align-items-center ">
                <div class="col-3">
                    Hobbies
@php
if($user->hobbies){
$hb= json_decode($user->hobbies);
}
@endphp
                </div>
              </div>

              <div class="row justify-content-center align-items-center ">
                  <div class="col-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkbox1" name="hobbies[]" value="Drwaing" {{ in_array('Drawing',$hb)? 'checked':''}}>
                    <label class="form-check-label" for="">Drwaing</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkbox2" name="hobbies[]" value="Sketch" {{ in_array('Sketch',$hb)? 'checked':''}}>
                    <label class="form-check-label" for="">Sketch</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkbox3" name="hobbies[]" value="Dancing" {{ in_array('Dancing',$hb)? 'checked':''}}>
                    <label class="form-check-label" for="">Dancing</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkbox4" name="hobbies[]" value="Singing" {{ in_array('Singing',$hb)? 'checked':''}}>
                    <label class="form-check-label" for="">Singing</label>
                    </div>
                </div>
              </div>

              @php
if($user->image){
$image= ($user->image);
$val=asset('uploads/user/'.$image);
}
@endphp
{{-- <img src="{{ asset('uploads/user/'.$image) }}" alt=""> --}}

              <div class="row justify-content-center align-items-center g-1 ">
                <div class="col-3">
                    <div class="mb-2">
                      <label for="image" class="form-label">Choose Image</label>
                      <input type="file" class="form-control" name="image" id="image" value="{{$val}}" placeholder="" aria-describedby="image">
                      <div id="image" class="form-text"></div>
                      {{-- value="{{ asset(uploads/user/.$user->image) }}" --}}
                    </div>
                </div>
              </div>

              <hr>

              <div class="row justify-content-center align-items-center">
                <div class="col-3">
                  <div class="mb-2">
                    <label for="userName" class="form-label">User Name</label>
                    <input type="text" name="userName" id="userName" class="form-control" value="{{ old('userName',$user->userName)}}" placeholder="Enter User Name" aria-describedby="uname">
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

              <div class="row justify-content-center align-items-center m-2">
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