

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-6 mt-5">

<form class ="form-group">
<label for="">Name</label>
<input type="text" name = "name" id ="name" class = "form-control">
<label for="">Email</label>
<input type="text" name = "email" id ="email" class = "form-control">
<label for="">Password</label>
<input type="Password" name = "pass" id ="pass" class = "form-control">
<br>
<input type="submit" id = "load" value = "Register" Class = "btn btn-success">


</form>

</div>


<div class="col-md-6 mt-5">
<h1>Registered User Data</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody id ="tab">
   
    
  </tbody>
</table>
</div>



</div>
</div>
<!-- <button class ="btn btn danger" id="load">Button</button> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
let btn = $('#load');
let tab = $('#tab');
let name = $('#name');
let email = $('#email');
let pass = $('#pass');
console.log(btn);

function loaddata(){
$.ajax({
    url: 'fetch.php',
            type: 'POST',
            success: function(data){
                tab.html(data)
                console.log(data);

            }

})

}



loaddata()
btn.click(function(e){
e.preventDefault();
$.ajax({
  url: 'insert.php',
  type:'POST',
  data:{
     name : name.val(),
     email:email.val(),
     password: pass.val()
     
  },
  success: function(result){
    loaddata()
    console.log(result)
  }

})
})

})



</script>
</body>
</html>






























