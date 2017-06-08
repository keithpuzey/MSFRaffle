<?php
$dataFileName = getcwd() . DIRECTORY_SEPARATOR . 'mydata.txt';
$nameInput = 'name';
$message = '';
$icon = 'stop';

if (!file_exists($dataFileName)) {
    touch($dataFileName);
}

if(isset($_POST[$nameInput]) && !empty($_POST[$nameInput])) {
    $userName = $_POST[$nameInput] . PHP_EOL;
    $fileinput = file_get_contents($dataFileName);
    $ret = false;

    if (stripos($fileinput, $userName) === false) {
        $ret = file_put_contents($dataFileName, $userName, FILE_APPEND | LOCK_EX);
    }

    if($ret === false) {
        $message = 'Nice try...<br/>You can only enter your name once.';
    } else {
        $message = "Cross your fingers $userName<br/>You’ve just entered the raffle!";
        $icon = 'cross';
    }
} else {
    $message = 'The field cannot be empty.<br/>Please click the home button to return to the entry form and re-enter your name.';
}
?>

<style scoped>
    .stop {
        width: 200px;
        height: 300px;
        background: url(/assets/images/stop.png) no-repeat center center;
    }
    .cross {
        width: 200px;
        height: 300px;
        background: url(/assets/images/cross.png) no-repeat center center;
    }

    @media screen and (max-width: 48em) {
        .stop {
            background-size: 100px 150px;
            width: 100px;
            height: 150px;
        }
        .cross {
            background-size: 100px 150px;
            width: 100px;
            height: 150px;
        }
    }

</style>

<div class="pure-u-1 pure-u-md-1 centered-text">
    <div class="horizontal-center <?=$icon?>"></div>
    <h3><?=$message?></h3>
</div>
