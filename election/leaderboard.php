<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>LeaderBoard</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
 <?php include 'include/menu.php'; ?>

<section class="engine"></section><section class="section-table cid-rv4N2sQWol" id="table1-4">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          LeaderBoard</h2>
      
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      Name</th><th class="head-item mbr-fonts-style display-7">
                      Class</th>
                      <th class="head-item mbr-fonts-style display-7">
                      Election Id</th>

                      <th class="head-item mbr-fonts-style display-7">
                      Votes</th>

                      <th class="head-item mbr-fonts-style display-7">
                      Rank</th></tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                
                
             <?php
                               
include 'include/connection.php';
                            //1 title
                        $query =" SELECT * FROM `participations` ORDER BY `count` ASC";

                        $users = mysqli_query($db, $query);

                            if($users){
                                while ($user = mysqli_fetch_assoc($users)) {

                                      $name = $user['name'];
                                      $class = $user['class'];
                                      $no = $user['no'];
                                      $count = $user['count'];


                                      $rank =1;
                                   


                                    $user_list  = '<tr>'
                                                .'<td class="body-item mbr-fonts-style display-7">'      
                                                .$name         
                                                .'</td>'
                                                .'<td class="body-item mbr-fonts-style display-7">'
                                                .$class  
                                                .'</td>'
                                                .'<td class="body-item mbr-fonts-style display-7">'
                                                .$no
                                                .'</td>'
                                                .'<td class="body-item mbr-fonts-style display-7">'
                                                .$count
                                                .'</td>'

                                                .'<td class="body-item mbr-fonts-style display-7">'
                                                .$rank
                                                .'</td>'
                                               
                                                .'</tr>';
                                                 echo $user_list;

                                                 $rank++;
                                }
                            }



                        ?> 
                      </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>