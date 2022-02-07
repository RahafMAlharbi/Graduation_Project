<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <title></title>
  </head>
  <body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,"muqu");

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    <?php
     $query = mysqli_query($conn,"select roomNumber from classroom");
     $rowcount=mysqli_num_rows($query);
    ?>
    <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Room Number</label>
      <select class="form-select" id="validationCustom04" required>
        <?php
          for($i=1;$i<=$rowcount;$i++){
          $row=mysqli_fetch_array($query);
         ?>
        <option value="<?php echo $row["roomNumber"]?>"> <?php echo $row["roomNumber"]?> </option>
        <?php
      }
         ?>
      </select>
      <div class="invalid-feedback">
        Please select a room number.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Floor</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option> \\from database...........!!
      </select>
      <div class="invalid-feedback">
        Please select a floor.
      </div>
    </div>
    <div class="col-md-2">
      <label for="validationCustom04" class="form-label">Building</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option> \\from database...........!!
      </select>
      <div class="invalid-feedback">
        Please select a floor.
      </div>
    </div>
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Description</label>
      </div>
      <div class="mb-2">
        <input type="file"id="img" name="img" accept="image/*">
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <form method="post" action="">
  <input type="checkbox" name="cricket" value="cricket" />Cricket<br/>
  <input type="checkbox" name="football" value="football" />Football<br/>
  <input type="checkbox" name="hockey" value="hockey" />Hockey<br/><br/>
 <span id="error"></span>
  </form>
<script>

  $(document).ready(function(){
       var error = document.getElementById("error")
    $("form").submit(function(){
		if ($('input:checkbox').filter(':checked').length < 1){
      error.textContent = "Please enter a valid number"
      error.style.color = "red"
		}
    });
});
</script>

<script>
(function () {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
  </body>
</html>
