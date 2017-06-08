<html>
<head>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/store.css">
    <title>Congratulations</title>
    <script type="text/javascript" id="ca_eum_ba" agent=browser async
            src="https://axa.saas.ca.com/mdo/v1/sdks/browser/BA.js"
            data-profileUrl="https://collector.axa.saas.ca.com/api/1/urn:ca:tenantId:48B428C9-C483-B954-105A-A612C70885A2/urn:ca:appId:Raffle%20Application/profile?agent=browser"
            data-tenantID="48B428C9-C483-B954-105A-A612C70885A2"
            data-appID="Raffle Application"
            data-appKey="fa732d70-269e-11e7-b5cd-994429ed59ce"></script>

</head>
<body>
<?php include('includes/header.php') ?>

<?php

if(isset($_POST['Name'])&&!empty($_POST['Name'])) {
    $data = $_POST['Name'] . "\n";

//    $fileinput = file_get_contents('/var/www/html/mydata.txt');
    $fileinput = file_get_contents('mydata.txt');
    if (stripos($fileinput, $data) !== false)
    {
    }
    else

        $ret = file_put_contents('/var/www/html/mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret == false) {
        $Success = 'has already been entered for the raffle, please use your full name and remember only one entry per raffle is allowed';
    }
    else {

        $Success = ' - your entry for the raffle has been accepted';
    }
}
else {
    $Success = 'The field cannot be empty.  Please click the home button to return to the entry form and re-enter your name.';
    //die('no post data to process');
}
?>

<div class="content pure-u-1 pure-u-md-3-4">

    <br>

    <p>   <b> <?=$data?> <?=$Success?> </b> </p>


    <?php include('includes/footer.php') ?>

</body>
</html>
