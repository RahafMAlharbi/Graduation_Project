<?php
// mysql connection000
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muqu";

$con = mysqli_connect($servername, $username, $password, $dbname) or die("Error: " . mysqli_error($con));

session_start();
$check['userId']=$_SESSION['userid'];
$userid= $check['userId'];
// fetch records saved =0 that Will be showing in the page
//and fk.saved='0'
$result = @mysqli_query($con, "SELECT * FROM complaint pk, assign fk where pk.complaintId =fk.compliantId and fk.userId=$userid and fk.saved='0'") or die("Error: " . mysqli_error($con));

echo(mysqli_error($con));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css"href="style.CSS">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<!-- for font -->  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1" name="viewport" >
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
<!--    <script src="~/Scripts/jquery-3.4.1.js"></Script>-->
    <style>

        /* The popup form - hidden by default */
        .form-popup {
            display: none;

            bottom: 20%;
            right: 20%;
            left: 20%;

            border: 3px solid #f1f1f1;
            z-index: 9;
        }
        .yellow {
            background-color: #F4F6F6;
        }
        body {
            background: #FFFFFF
        }

        .height {
            height: 100vh
        }
        .modal-backdrop {
            z-index: -1;
        }

        /* Add styles to the form container */

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
            border-radius:3px;}




/*--------------------------------*/


h6.mytitelscss{
color: #676767;
font-family: 'Rambla';font-size: 18px

}
h5.mytitelscs0{
  color: #2F5972;
  font-family: 'Roboto Mono';font-size: 17px;

  }
  h5.mytiteldetails{
    color: #F6F4F1;
    font-family: 'Roboto Mono';font-size: 17px;

    }

tbody{
  background-color: #F6F4F1;
  color: #676767;
  font-family: 'Rambla';font-size: 15px ;


}
thead {
  background-color: #2F5972;
    color: #FFFFFF;
    font-family: 'Roboto Mono';font-size: 18px ;
font-style: italic;



  }

/*تنسيق الديل والريزن */div .csstext{
  background: #F6F4F1;
border-radius: 4px;
border: 3px solid #2F5972;
}
h5.mytitelreson{
  color: #F6F4F1;
  font-family: 'Roboto Mono';font-size: 17px;

}
.xc
{
  padding: 0;
  border: none;
  background: none;
  text-decoration: underline;
}
div.modelhedercss{
background: #2F5972;
height: 40px;
  width: 100%;

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
</head>

<body>
  <div class="b-example-divider pt-5 pb-5 pe-5">


    </div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class=" text-left">
                <div class="card-body">
                  <form method="post" id="form" action="workerbutton.php" class="">
                        <input type="hidden" name="comment" id="comment2">
                        <div class="col col-md-12">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for complaint id..">
                            <br/>
                              <br/>
                            <table class="table " id="myTable">
                                <thead  >
                                <tr>
                                    <th><input type="checkbox" value="bar1" id="select-all" onclick="toggle(this)"/></th>
                                    </th>
                                    <th >ID</th>
                                    <th>Date</th>
                                    <th>Category</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr>

                                        <td scope="row"><input name="chk_id[]" type="checkbox"
                                                               onchange="callFunction();callFunction1()"
                                                               onclick="chk(this)" class="chkbox"
                                                               value="<?php echo $row['complaintId']; ?>"/></td>

                                        <?php echo '
                     <td name=name_"' . $row["complaintId"] . '">
                     <button id="YourID" type="button" name=' . $row["complaintId"] . ' value=' . $row["complaintId"] . '
                      class="xc" data-toggle="modal" data-target="#exampleModal"
                       onclick="selectRoomNum(this)"><b>
                     ' . $row["complaintId"] . '</b></button></td>'; ?>


                                        <input type="hidden" name="chk_complaint[]"
                                               value="<?php echo $row['complaintId']; ?>"></td>

                                        <td><label><?php echo $row['date']; ?></label>
                                            <input type="hidden" name="chk_date[]" value="<?php echo $row['date']; ?>">
                                        </td>

                                        <td><label><?php echo $row['category']; ?></label>
                                            <input type="hidden" name="chk_category[]"
                                                   value="<?php echo $row['category']; ?>"></td>


                                        <td><input type="hidden" name="chk_wrkid[]"
                                                   value="<?php echo $row['userId']; ?>"></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <input type="submit" value="completed" name="submit" class="btn btn-primary"
                                   disabled="disabled" id="Assign">
                            <input type="button" value="uncompleted" class="btn btn-primary" disabled id=""
                                   data-toggle="modal" disabled data-target="#exampleModal2"
                                   onclick="idcomp();idcomp1()">
                            <!--
                                        <input type="checkbox" class="hidden" id="un" name="un" onclick="chk()">
                                        <label for="un">Uncompleted</label>

                                        <div class="form-popup" id="myForm">
                                          <p>What is the reason</p>
                                          <textarea name="comment" rows="3" cols="40"></textarea>
                                        </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content  csstext">
          <div class="modal-header modelhedercss ">
              <h5 class=" m-4  mytitelreson">Uccompleted<h5>
              </div>
                <div class="modal-body">
                <h6 class= "modal-title mytitelscss  ">Please enter the reason</h6>

                <div class="text-right"><i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i></div>
            </div>

                <div>
                    <label>
                        <textarea onkeyup="getTheReason()" class="form-control ms-2 me-2 mt-1 "id="comment" rows="5" cols="54"></textarea>
                    </label>
                </div>
                <input type="hidden" readonly class="form-control-plaintext" value="" name="workerIdname"
                       id="workerIDUncomliet"/>
                <input type="hidden" readonly class="form-control-plaintext" value="" name="ClassroomN"
                       id="compalintIDreassign"/>
            </div>
          </div>
          <div class="modal-footer">

                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                <button form="form" value="submit2" name="submit2" type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content csstext ">
                                    <div class="modal-header modelhedercss">
                                        <h5 class="modal-title mytiteldetails" id="exampleModalLabel">complaint details</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
                                    </div>
                                    <div id="Ctable" class="modal-body">

                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <script>


                                function selectRoomNum(strq) {
                                    var str = strq.value;

                                    if (str == "") {
                                        document.getElementById("exampleModal").innerHTML = "";
                                        return;
                                    }
                                    var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function () {
                                        if (this.readyState == 4 && this.status == 200) {


                                            document.getElementById("Ctable").innerHTML = this.responseText;

                                        }
                                        ;
                                    }
                                    xmlhttp.open("GET", "getComplaint.php?q=" + str, true);
                                    xmlhttp.send();

                                }

                                $(document).ready(function () {
                                    $('.chkbox').change(function () {
                                        var ckd = $('.chkbox:checked').length
                                        //alert(ckd);
                                        if (ckd > 0) {
                                            $('#save').prop("disabled", false);

                                        } else {
                                            $('#save').prop("disabled", true);
                                        }
                                    });
                                });



                                function mycomplaininfo() {

                                    var allCheBox = document.querySelectorAll(".box");
                                    for (var checkboxee of allCheBox) {
                                        var ourboxx = checkboxee.id;
                                        var ourBoxId = ourboxx.replace(/\D+/, "");
                                        var f = "129";

                                    }
                                }



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
                                    } else
                                        document.querySelectorAll('input[type="submit"]')[0].disabled = true;
                                }

                                // for enable button2
                                function callFunction1() {
                                    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                                    var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

                                    if (checkedOne) {
                                        document.querySelectorAll('input[type="button"]')[0].disabled = false;
                                    } else
                                        document.querySelectorAll('input[type="button"]')[0].disabled = true;
                                }


                                function enable(boxx) {

                                    var ourbox = boxx.id;
                                    var ourBoxId = ourbox.replace(/\D+/, "");
                                    let part1 = "SelectPicker_";
                                    let result = part1.concat(ourBoxId);
                                    var ds = document.getElementById(result);
                                    ds.disabled = boxx.checked ? false : true;
                                    if (!ds.disabled) {
                                        ds.focus();
                                    } else {

                                        ds.value = 0;

                                    }
                                    var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

                                    if (checkboxes.length > 0) {
                                        document.querySelectorAll('input[type="submit"]')[0].disabled = false;


                                    } else
                                        document.querySelectorAll('input[type="submit"]')[0].disabled = true;

                                }

//اللون لما نعمل تشيك
                                function chk(result) {
                                    if (result.checked) {
                                        result.parentNode.parentNode.style.backgroundColor = "";
                                        result.parentNode.parentNode.style.color = "black";
                                    } else {
                                        result.parentNode.parentNode.style.backgroundColor = "";
                                        result.parentNode.parentNode.style.color = "";
                                    }
                                }


                                $('#select-all').click(function(event) {
                                    if(this.checked) {
                                        // Iterate each checkbox
                                        $(':checkbox').each(function() {
                                            this.checked = true;
                                            // this.changBackground="#D7D0D0";
                                             $(this).parent().parent().css('background','');
                                        });
                                    }
                                    else {
                                        $(':checkbox').each(function() {
                                            this.checked = false;
                                            $(this).parent().parent().css('background','');
                                        });
                                    }

                                    callFunction();
                                    callFunction1();
                                });


                                function ajaxpost() {
// (A) GET FORM DATA
                                    var form = document.getElementById("form");
                                    var data = new FormData(form);

// (B) AJAX
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "SetComlintdone.php");
// What to do when server responds
                                    xhr.onload = function () {
                                        console.log(this.response);
                                    };
                                    xhr.send(data);

// (C) PREVENT HTML FORM SUBMIT
                                    return false;
                                }

                                //post Reassign form2 ajax
                                function ajaxpostReassign() {
                                    var form1 = document.getElementById("formReassign");
                                    var data1 = new FormData(form1);

// (B) AJAX
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "uncompletepost.php");
// What to do when server responds
                                    xhr.onload = function () {
                                        console.log(this.response);
                                    };
                                    xhr.send(data1);

// (C) PREVENT HTML FORM SUBMIT
                                    return false;
                                }

                                function idcomp() {
                                    var allCheckedBox = document.querySelectorAll('input[type="checkbox"]:checked');
                                    for (var checkbox of allCheckedBox) { // to check if it select an employee
                                        var ourbox = checkbox.id;
                                        var ourBoxId = ourbox.replace(/\D+/, "");
                                        // alert(ourBoxId);
                                        document.getElementById("compalintIDreassign").value = ourBoxId;

                                    }
                                }



                                ////////
                                function idcomp1() {
                                    var allCheckedBox = document.querySelectorAll('input[type="checkbox"]:checked');
                                    for (var checkbox of allCheckedBox) { // to check if it select an employee
                                        var ourbox = checkbox.id;
                                        var ourBoxId = ourbox.replace(/\D+/, "");

                                        var ds = document.getElementById("Worker").value;
                                        document.getElementById("workerIDUncomliet").value = ds;


                                    }
                                }






                            </script>
    <script>
        function getTheReason() {
            let comment = $("#comment").val();
            $("#comment2").val(comment)
        }
        /////////
        function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
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

    </script>
</body>
</html>
