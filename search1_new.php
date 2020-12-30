<?php
{
include("session1.php");
}
?>
<?php
   include("dbconfig.php");
      $sslc = mysqli_real_escape_string($db,$_POST['sslc']);
      $pudip = mysqli_real_escape_string($db,$_POST['pudip']);
      $overall1 = mysqli_real_escape_string($db,$_POST['overall1']);
      $overall = mysqli_real_escape_string($db,$_POST['overall']);
      $nob = mysqli_real_escape_string($db,$_POST['nob']);
      $yop = mysqli_real_escape_string($db,$_POST['yop']);
      $branch = mysqli_real_escape_string($db,$_POST['branch']);
      $sql = "SELECT r.name, r.usn, r.email, r.mno, r.sslc, r.pudip, b.branch, b.overall1, b.overall, b.nob, b.yop, b.branch FROM records r, be_data b WHERE r.usn = b.usn AND r.sslc REGEXP '$sslc' AND r.pudip REGEXP '$pudip' AND b.overall1 REGEXP '$overall1' AND b.overall REGEXP '$overall' AND b.nob REGEXP '$nob' AND b.yop REGEXP '$yop' AND b.branch REGEXP '$branch'";

      $result = mysqli_query($db,$sql);
      $rows = mysqli_num_rows($result); 

?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Search Records</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="custom.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <link ref="stylesheet" href="css/material.min.css">
    <link ref="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/material.css">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-1.8.3.min"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/material.min.js"></script>
 <body style="background: url(images/back1.png); background-size: cover; background-repeat:  no-repeat; background-attachment: fixed;">
          <div class="mdl-layout--large-screen-only">
          <a href="admin_home.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary " style="background-color: black; box-shadow: 10px 10px 5px black;">
              <i class="material-icons" >home</i>
          </button></a>
          </div> 
<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
    <div class="mdl-cell mdl-cell--12-col" >
    <div class="card text-center" style=" margin-bottom:auto; background-color: rgba(245, 245, 245, 0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
      <center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 15%; max-height: auto;"></center>
      <div class="card-body" >
      <table align="center" cellspacing="5px">
        <tr>
	<th style="border: 1px solid black;color: blue; text-align: center;">Sl. No</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">USN</th>
          <th style="width:10%;border: 1px solid black;color: blue; text-align: center;">NAME</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">BRANCH</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">SSLC</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">PUC/XII/DIPLOMA</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">FINAL SCGPA</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">AGGREGATE PERCENTAGE(%)</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">EMAIL</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">MOBILE NO.</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">BACKLOGS</th>
          <th style="border: 1px solid black;color: blue; text-align: center;">YEAR OF PASSING</th>
        </tr>
      <?php
      for ($j = 0 ; $j < $rows; $j++)
      {

            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$k = $j+1;
        echo "<tr>";
	echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$k."</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['usn']."</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['name']."</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['branch']."</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['sslc']."%</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['pudip']."%</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['overall']."</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['overall1']."</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['email']."</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['mno']."</td>";
      
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['nob']."</td>";
        echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['yop']."</td>";
        echo "</tr>";

      }
      ?>
      </table>
        <input type="submit" value="Generate CSV" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="req" name="req" onclick="exportTableToCSV('members.csv')">
      </div>
    </div>
  </div>  
       
          
     
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-1.8.3.min"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
<script type="text/javascript">
  function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}

function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}

</script>
</head>
</html>
