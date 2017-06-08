<?php session_start() ;
foreach ($_SESSION as $key => $value)
{
    //$line[$i] = $_SESSION[$key] = null;
    unset($_SESSION[$key]); // - will wipe out the refs totally.
}

$_SESSION['orderConfirmFinalised'] = false;
?>

<html>

<head>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/store.css">
    <title>CA Raffle</title>
    <script type="text/javascript" id="ca_eum_ba" agent="browser" async
            src="https://axa.saas.ca.com/mdo/v1/sdks/browser/BA.js"
            data-profileUrl="https://collector.axa.saas.ca.com/api/1/urn:ca:tenantId:48B428C9-C483-B954-105A-A612C70885A2/urn:ca:appId:Raffle%20Application/profile?agent=browser"
            data-tenantID="48B428C9-C483-B954-105A-A612C70885A2"
            data-appID="Raffle Application"
            data-appKey="fa732d70-269e-11e7-b5cd-994429ed59ce"></script>
</head>
<body>
<?php include('includes/header.php') ?>
<div class="content pure-u-1 pure-u-md-3-4">
    <br>
    <br>
    <img src="images/enter-to-win.gif" alt="Enter to Win" style="width:304px;height:228px;">
    <br>
    <br>
    <div class="pure-controls">
        <form action="welcome.php" method="post">
            Enter Your First and Last Name: <input name = Name type="text" name="Enter Name">
            <br><br><br><br>

            <button type="submit" class="pure-button pure-button-primary" >Submit</button>
        </form>
        <br>
        <br>
    </div>
    <?php include('includes/footer.php') ?>
</body>
</html>
