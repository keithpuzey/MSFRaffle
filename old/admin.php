<html>
<head>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/store.css">
    <script type="text/javascript" id="ca_eum_ba" agent=browser
            src="https://axa.saas.ca.com/mdo/v1/sdks/browser/BA.js"
            data-profileUrl="https://collector.axa.saas.ca.com/api/1/urn:ca:tenantId:48B428C9-C483-B954-105A-A612C70885A2/urn:ca:appId:Raffle%20Application/profile?agent=browser"
            data-tenantID="48B428C9-C483-B954-105A-A612C70885A2"
            data-appID="Raffle Application"
            data-appKey="fa732d70-269e-11e7-b5cd-994429ed59ce" ></script>
    <title>Winners</title>

</head>
<body>
<?php include('includes/adminheader.php') ?>


<?php
$myFile = "mydata.txt";
clearstatcache();
$lines = COUNT(FILE($myFile));
$drawtime = date("D M j G:i:s T Y");

if ($lines == 0) {$notenough = "Not enough raffle entries, please try again";}

else
{

    $lines = file($myFile,FILE_IGNORE_NEW_LINES);//file in to an array
    shuffle ($lines);
    $winnersfile = fopen ("winners.txt","a");
    fwrite($winnersfile,"$drawtime,  $lines[0], $lines[1], $lines[2] \r\n");
    fclose ($winnersfile);


    $lines = file($myFile,FILE_IGNORE_NEW_LINES);//file in to an array
    shuffle ($lines);
}
?>

<div class="content pure-u-1 pure-u-md-3-4">
    <center>    <h1 class="brand-title"><img src="chaching.png" /><br/>Congratulations to our Winners</h1></center>
    <br>

    <br>
    <center><font size="10" color="red"><p class="blink"><?=$notenough?> </p></font> </center>

    <center><font size="10" color="blue"><p class="blink"><?=$lines[0]?> </p></font> </center>

    <center> <font size="10" color="blue"><p class="blink"><?=$lines[1]?> </p></font> </center>
    <center> <font size="10" color="blue"><p class="blink"><?=$lines[2]?> </p></font> </center>



    <?php include('includes/footer.php') ?>

</body>
</html>
