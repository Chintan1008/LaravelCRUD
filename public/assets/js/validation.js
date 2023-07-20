    
jQuery('#form').validate({

rules:{

fname:{
   required:true,
   nowhitespace:true,
 },
 lname:{
   nowhitespace:true,
   required:true,
 },
 dob:{
   required:true,
 },
 uemail:{
       required:true,
       email:true,
       nowhitespace:true,
 },
 phone:{
       required:true,
       nowhitespace:true,
       minlength:10,
       maxlength:10,
 }, 
 gender:{
       required:true,
     
 }, 
 address:{
       required:true,
 }, 
 city:{
       required:true,
 },
 country:{
       required:true,
 },
 
 userName:{
       required:true,
       nowhitespace:true,
       maxlength:20,
 }, 
 userPass:{
       required:true,
       nowhitespace:true,
       minlength:6,
 },
 image:{
   required:false,
   accept: "image/jpeg, image/pjpeg ,image/png"
 },
 

}, 

messages:{
     
   fname:{
     required:"please enter First Name",
     nowhitespace:"No white space plese",
   },
   lname:{
     required:"please enter Last Name",
     nowhitespace:"No white space plese",
   },  
   uemail:{
       required:"please enter your Email",
       email:"Enter Valid Email",
       nowhitespace:"No white space plese",
   },
   dob:{
     required:"please Select Date of Birth",
   },
   phone:{
       required:"please Enter Phone no",
       nowhitespace:"No white space please",
       minlength:"phone no length minimum 10",
       maxlength:"phone no length maximum 10",
   },
   address:{
    required:"Please Enter Address",
   }, 
   country:{
       required:"please Enter Phone no",
   },
   userPass:{
       required:"Please Enter Password",
       nowhitespace:"No white space please",
       minlength:"password Length must be Greaterthan 6",
 },
   image:{
      required:"Please select Image",
      accept: "Aceept only jpeg,pjpeg,png"
   },
   userName:{
       required:"Please Enter User Name",
       nowhitespace:"no white space Please",
       minlength:6,
   },
 },


//   errorPlacement:function (error,element){
//     if(element.is(":radio")){
//         error.appendTo(elelment.parent('.gen'));
//     }
//     else{
//         error.insertAfter(element);
//     }
//   },

submitHandler:function(form){
  form.submit();
}


});


// jQuery('#form').submit(function(e){
// e.preventDefualt();
// jQuery('#btn').attr('disabled',true);
// jQuery.ajax({

//   url:"{{url('registration')}}",
//   data:jQuery('#form').serialize(),
//   type:'post',
//   success:function(result){
//     jQuery('#message').html(result.msg);
//     jQuery('#form').['0'].reset();
//     jQuery('#btn').attr('disabled',false);
//   }
// });
// });