<?php
require_once ('./libs/ProfanityFilter/src/mofodojodino/ProfanityFilter/Check.php');
use mofodojodino\ProfanityFilter\Check;

$dataFileName = getcwd() . DIRECTORY_SEPARATOR . 'mydata.txt';
$BlockedDataFileName = getcwd() . DIRECTORY_SEPARATOR . 'blockeddata.txt';

$nameInput = 'name';
$message = '';
$icon = 'stop';

if (!file_exists($dataFileName)) {
    touch($dataFileName);
}

if (!file_exists($BlockedDataFileName)) {
    touch($BlockedDataFileName);
}

$inputText = isset($_POST[$nameInput]) ? trim(urldecode($_POST[$nameInput])) : "";
if(!empty($inputText)) {
    // check ban words
    $check = new Check();
    if ($check->hasProfanity($inputText)) {
        // profanity word(s) found, so
            $userName = $inputText . PHP_EOL;
            $message = "Cross your fingers $userName<br/>You’ve just entered the raffle!.";
            $icon = 'cross';
        $ret = file_put_contents($BlockedDataFileName, $userName, FILE_APPEND | LOCK_EX);
    } else {
        // check name uniqueness
        $userName = $inputText . PHP_EOL;
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
    }
} else {
    $message = 'The field cannot be empty.<br/>Please click the home button to return to the entry form and re-enter your name.';
}
?>

<style scoped>
    .stop {
        height: 300px;
        background-image: url(/assets/images/stop.png);
    }
    .cross {
        height: 300px;
        background-image: url(/assets/images/cross.png);
    }

    @media screen and (max-width: 48em) {
        /* up to medium sized displays */
        .stop { height: 150px; }
        .cross { height: 150px; }
    }

</style>

<div class="pure-u-1 pure-u-md-1 centered-text">
    <div class="icon horizontal-center <?=$icon?>"></div>
    <h3><?=$message?></h3>
</div>
