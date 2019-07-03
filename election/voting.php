<?php 

session_start();

$_SESSION = array();


            if (isset($_COOKIE[session_name()])) {


                setcookie(session_name(), '', time()-86400,'/');    

                 }

                session_destroy();
            //header('location:voting.php');



?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">


  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">

  
  <meta name="description" content="">
  
  <title>Voting</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-section form1 cid-rv5bk8O4Hv" id="form1-8">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Voting</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Please enter your details.<br><em>(the id number is suplyed by class teacher)</em></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->


                <form  method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">


                    <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">

                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-8" class="form-control-label mbr-fonts-style display-7">Name</label>

                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-8">


                        </div>
                        <div class="col-md-4  form-group" data-for="email">

                            <label for="email-form1-8" class="form-control-label mbr-fonts-style display-7">Id</label>

                            <input type="number" name="idno" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-8">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Grade</label>
                            <input type="number" name="grade" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" maxlength="2" placeholder="ex: 11" required="required">
                        </div>
                        
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">Submit</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>
<?php 


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $idno = $_POST['idno'];
    $grade = $_POST['grade'];




}


?>

  <section class="engine"></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>