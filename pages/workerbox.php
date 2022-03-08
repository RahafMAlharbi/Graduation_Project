
<?php
// mysql connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muqu";

$con = mysqli_connect($servername, $username, $password, $dbname) or die("Error: " . mysqli_error($con));

// fetch records saved =0 that Will be showing in the page
$result = @mysqli_query($con, "SELECT * FROM complaint pk, assign fk where pk.complaintId =fk.compliantId and fk.saved='0'  ") or die("Error: " . mysqli_error($con));

echo(mysqli_error($con));
?>

<!DOCTYPE html>
<html>
<header>
  <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="bootstrap5/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
  <script src="html5-qrcode.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


    <script src="~/Scripts/jquery-3.4.1.js"></Script>



</header>
<head>
  <style>
  table1{
  border:1px solid black;
  border-collapse: collapse;
  }
  td{
  border:1px solid black;
  }
  #form1 {
  display:none;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;

  bottom: 20%;
  right: 20%;
  left: 20%;

  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 150px;
  padding: 12px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.hidden {
  position: absolute;
  visibility: hidden;
  opacity: 0;

}

input[type=checkbox]+label {
  color: #fff;
  padding: 8px;
    background-color: #a0b6d5;
    border-color: #a0b6d5;
    border-radius:3px;
}

input[type=checkbox]:checked+label {
  color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
    padding: 8px;
    border-radius:3px;

}
  </style>
  <script>
    function chk(){
      var checkBox = document.getElementById("un");
      if (checkBox.checked == true){
        openForm();
      } else {
        closeForm() ;
      }
    }
  function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("save").innerHTML="Save as uncompleted"
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("save").innerHTML="Save completed"

}
</script>
<header class="navbar navbar-expand-md navbar-dark bd-navbar   "  > </header>
<div class="container-fluid">
  <div class="row justify-content-center ">
    <div class="col-md-8 col-md-offset-2">
    <div class="card text-left">
      <div class="card-header">
      <h2> Worker page</h2>

      </div>
      <div class="card-body">

    <meta content="width=device-width, initial-scale=1" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form method="post" id="form" action="workerbutton.php" class="" novalidate>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for complaint id.." >
            <br/>
            <table class="table table-bordered" id="dev-table">
              <thead class="table-light">
                    <tr>
                    <th > <input type="checkbox"  value="bar1" onClick="toggle(this)"  /></th> </th>
                    <th >ID  </th>
                    <th>DATE</th>
                    <th >Category</th>
                      <th >  </th>

                    </tr>
                </thead>
                <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>

                    <td scope="row"><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $row['complaintId']; ?>"/></td>

                    <td><label><?php echo $row['complaintId'];?></label>
                    <input type="hidden" name="chk_complaint[]" value="<?php echo $row['complaintId'];?>"></td>

                    <td><label><?php echo $row['date'];?></label>
                    <input type="hidden" name="chk_date[]" value="<?php echo $row['date'];?>"></td>

                    <td><label><?php echo $row['category'];?></label>
                    <input type="hidden" name="chk_category[]" value="<?php echo $row['category'];?>"></td>


                  <td><input type="hidden" name="chk_wrkid[]" value="<?php echo $row['userId'];?>"></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

            <input type="checkbox" class="hidden" id="un" name="un" onclick="chk()">
            <label for="un">Uncompleted</label>

            <div class="form-popup" id="myForm">
              <p>What is the reason</p>
              <textarea name="comment" rows="3" cols="40"></textarea>
            </div>
            <button type="submit" disabled="disabled"name="submit" class="btn btn-primary" id="save" data-bs-toggle="modal">Save completed</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
      $('.chkbox').change(function() {
      var ckd=  $('.chkbox:checked').length
      //alert(ckd);
      if(ckd>0)
      {
        $('#save').prop("disabled", false);

      }else
      {
        $('#save').prop("disabled", true);
      }
      });
    });</script>
    <script>
      /* function validateMyForm(event)
       {
         var allCheckedBox =document.querySelectorAll(".box:checked");
         for (var checkbox of allCheckedBox) { // to check if it select an employee
           var ourbox = checkbox.id;
           var ourBoxId = ourbox.replace(/\D+/,"");
           let part1 = "SelectPicker_";
           let result = part1.concat(ourBoxId);
           var ds =document.getElementById(result);
           var strUser = ds.options[ds.selectedIndex].value;

           //var strUser1 = e.options[e.selectedIndex].text;
           if(strUser==0)
           {
              ds.classList.add("is-invalid");
              ds.focus();

             event.preventDefault();
             event.stopPropagation();
             //window.history.back();
             return false;
           }else{

             ds.classList.remove("is-invalid");

           }

                 // returnToPreviousPage();

         }


                 return true;
       }*/

 function mycomplaininfo(){

   var allCheBox =document.querySelectorAll(".box");
   for (var checkboxee of allCheBox) {
     var ourboxx = checkboxee.id;
     var ourBoxId = ourboxx.replace(/\D+/,"");
     var f="129";

 }
 }


 /*$(document).ready(function(){
   //document.querySelectorAll("[name^=q1_]")

   var myrow1=0;
   $(".box").each(function() {
     myrow1=myrow1+1;
     $(this).attr("id","box_"+ myrow1);
   });
  var myrow2=0;
   $(".form-select").each(function() {
     myrow2=myrow2+1;
     $(this).attr("id","SelectPicker_"+ myrow2);
   });

 });
*/

 function myFunction() {
   var input, filter, table, tr, td, i, txtValue;
   input = document.getElementById("myInput");
   filter = input.value.toUpperCase();
   table = document.getElementById("dev-table");
   tr = table.getElementsByTagName("tr");
   for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[1];
     if (td) {
       txtValue = td.textContent || td.innerText;
       if (txtValue.toUpperCase().indexOf(filter) > -1) {
         tr[i].style.display = "";
       } else {
         tr[i].style.display = "none";
       }
     }
   }
 }



 function callFunction() {
   var checkboxes = document.querySelectorAll('input[type="checkbox"]');
   var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

   if (checkedOne) {
     document.querySelectorAll('input[type="submit"]')[0].disabled = false;
   }	else
     document.querySelectorAll('input[type="submit"]')[0].disabled = true;
 }




 function enable(boxx) {

      var ourbox = boxx.id;
      var ourBoxId = ourbox.replace(/\D+/,"");
      let part1 = "SelectPicker_";
      let result = part1.concat(ourBoxId);
      var ds =document.getElementById(result);
     ds.disabled=boxx.checked ? false : true;
     if(!ds.disabled){
       ds.focus();
     }else {

        ds.value = 0 ;

     }
     var checkboxes = document. querySelectorAll('input[type="checkbox"]:checked');

     if(checkboxes. length> 0 ){
         document.querySelectorAll('input[type="submit"]')[0].disabled = false;


     }else
     document.querySelectorAll('input[type="submit"]')[0].disabled = true;

   }





 function chk(result){
   if(result.checked){
     result.parentNode.parentNode.style.backgroundColor="#D7D0D0";
     result.parentNode.parentNode.style.color="black";
   } else{
     result.parentNode.parentNode.style.backgroundColor="";
     result.parentNode.parentNode.style.color="";
   }
 }

   /*function toggle(source) {
    var  checkboxes = document.getElementsByClassName("box");
     for(var i=0, n=checkboxes.length;i<n;i++) {
       checkboxes[i].checked = source.checked;
       chk(checkboxes[i]);
       enable(checkboxes[i]);
       callFunction();
     }
   }

 //  $('input[name="foo"]').on('change', function() {
 //  $(this).closest('tr').toggleClass('yellow', $(this).is(':checked'));
 //});





   </script>
</body>
</html>
