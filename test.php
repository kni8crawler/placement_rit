<?php
   include('session.php');
?>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'password';
   $dbase = 'rit_tpo';
   $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);
// Include the main TCPDF library (search for installation path).
   $sql = "SELECT * FROM records WHERE usn = '$login_session'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
    $name = $row["name"];
    $usn = $row["usn"];
    $email = $row["email"];
    $mno = $row["mno"];
    $gender = $row["gender"];
    $dob = $row["dob"];
    $sslc = $row["sslc"];
    $pudip = $row["pudip"];
    $sql = "SELECT * FROM be_data WHERE usn = '$login_session'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
    $sem1 = $row["sem1"];
    $sem2 = $row["sem2"];
    $sem3 = $row["sem3"];
    $sem4 = $row["sem4"];
    $sem5 = $row["sem5"];
    $sem6 = $row["sem6"];
    $sem7 = $row["sem7"];
    $sem8 = $row["sem8"];
    $overall = $row["overall"];	
    $back = $row["back"];
    $nob = $row["nob"];
    $yop = $row["yop"];
    if ($sem6==0) $sem6='N/A';
    if ($sem7==0) $sem7='N/A';
    if ($sem8==0) $sem8='N/A';
    if ($nob==0) $nob='N/A';

  require_once('tcpdf.php');


// Extend the TCPDF class to create custom Header and Footer
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = 'images/logo1.jpg';
        $this->Image($image_file, 12, 18, 30, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        //$this->SetFont('helvetica', 'B', 20);
        // Title
        //$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Karthik GN');
$pdf->SetTitle('Report');
$pdf->SetSubject('RIT');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
//$pdf->SetFont('helvetica', 'BI', 12);

// add a page
$pdf->AddPage();

$html = '
   <head>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="custom.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <link ref="stylesheet" href="css/material.min.css">
    <link ref="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/material.css">
    <script type="text/javascript" src="js/material.min.js"></script>
    <style>th td { }
    </head>
    <body>';
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
// ---------------------------------------------------------




 $html='<div style="text-align:center; line-height: 90%; font:Times New Roman; font-style:normal;">
<h1>Rajeev Institute of Technology</h1>
<h2 >Department of Training and Placements</h2>
<h6>Plot 1-D, Growth Center, Industrial Area, B-M Bypass Road, Hassan, Karnataka 573201</h6>
</div><hr/>';
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
// ---------------------------------------------------------
//-----------------------------------------------

$html = '<div style="text-align:center; line-height: 90%; font:Times New Roman; font-style:normal; font-weight:bolder;font-size:20px;">
STUDENT PROFILE';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

//-----------------------------------------------

$html = '<br/><br/><div class="mdl-cell"><table align="center"><tr><td >NAME    :   '.$name.'</td><td>USN    :  '.$usn.'</td></tr><br/><tr><td>EMAIL    :   '.$email.'</td><td>MOBILE NO.    :   '.$mno.'</td></tr><br/><tr><td>GENDER    :    '.$gender.'</td><td >DOB    :    '.$dob.'</td></tr><br/><tr><td >SSLC%    :   '.$sslc.'%</td><td>PUC / XII / DIPLOMA%    :    '.$pudip.'%</td></tr></div>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


//-----------------------------------------------

$html = '<br/><h3 style="text-align:center;">B.E Details</h3><br/>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

//-----------------------------------------------

$html = '<table style=" white-space:nowrap; position: absolute; top: 0; bottom: 0; left: 0; right: 0;border:1px solid black;"><tr><th style="width:18%;border: 1px solid black;">Semester</th><th style="width:8%;border: 1px solid black;">1</th><th style="width:8%;border: 1px solid black;">2</th><th style="width:8%;border: 1px solid black;">3</th><th style="width:8%;border: 1px solid black;">4</th><th style="width:8%;border: 1px solid black;">5</th><th style="width:8%;border: 1px solid black;">6</th><th style="width:8%;border: 1px solid black;">7</th><th style="width:8%;border: 1px solid black;">8</th><th style="width:18%;border: 1px solid black;">Overall</th></tr><tr><td style="width:18%;border: 1px solid black;">Percentage</td><td style="width:8%;border: 1px solid black;">'.$sem1.'</td><td style="width:8%;border: 1px solid black;">'.$sem2.'</td><td style="width:8%;border: 1px solid black;">'.$sem3.'</td><td style="width:8%;border: 1px solid black;">'.$sem4.'</td><td style="width:8%;border: 1px solid black;">'.$sem5.'</td><td style="width:8%;border: 1px solid black;">'.$sem6.'</td><td style="width:8%;border: 1px solid black;">'.$sem7.'</td><td style="width:8%;border: 1px solid black;">'.$sem8.'</td><td style="width:18%;border: 1px solid black;">'.$overall.'</td></tr></table><p style="font-size:10px;">#For any changes or corrections, please do contact the Placements officer RIT Hassan.<p>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

//-----------------------------------------------

$html = '<br/><h3 style="text-align:center;">Additional Details</h3><br/><table><tr><td>Any Active Backlogs  :  '.$back.'</td><td>Number of Backlogs (if any)  :  '.$nob.'</td></tr><br/><tr><td>Year of Passing  :  '.$yop.'</td></tr></table>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
//-----------------------------------------------

$html = '<h5 style="text-align:right;margin-right:10px;">sd/-</h5>
<br/><h5 style="text-align:right;">Training & Placement Officer</h5><br/>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

//-----------------------------------------------

$html = '<br/><button style="text-align:center;"><a href="welcome.php" style="text-decoration:none;">Back Home</a></button><br/>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
