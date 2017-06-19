<?php
$dataFileName = getcwd() . DIRECTORY_SEPARATOR . 'mydata.txt';
$count = file_exists($dataFileName) ? COUNT(FILE($dataFileName)) : 0;

$drawtime = date("D M j G:i:s T Y");
$notenough = NULL;

if ($count == 0) {
    $notenough = "Not enough raffle entries, please try again";
} else {
    $lines = file($dataFileName,FILE_IGNORE_NEW_LINES);//file in to an array
    shuffle ($lines);
    $winners = [$lines[0]];
    if ($count > 1) {
        $winners[] = $lines[1];
    }
    if ($count > 2) {
        $winners[] = $lines[2];
    }
    $winnersfile = fopen ("winnersData.txt","a");
    fwrite($winnersfile,"$drawtime,  " . join(", ", $winners) . " \r\n");
    fclose ($winnersfile);

    $winnersCount = count($winners);
}
?>

<style scoped>
    content {
        height: 100%;
    }
    .chaching {
        width: 460px;
    }
    .chaching img {
        margin-top: -50px !important;
        position: relative;
    }
    .error {
        color: red;
        text-align: center;
    }
    .trophy {
        height: 155px;
    }
    spacer { height: 25px; }

    .l-box h3 { margin-top: 0.5em; }

    @media screen and (max-width: 35.5em) {
        /* up to small sized displays */
        .chaching { width: 230px; }
        .chaching img { height: 150px; }
        .trophy {
            height: 76px;
        }
    }
</style>

<div class="pure-u-1 pure-u-md-1">
    <div class="chaching horizontal-center"><img src="/assets/images/cha_ching.png"/></div>
</div>
<spacer class="pure-u-1"></spacer>
<?php if ($notenough) { ?>
    <h1 class="error pure-u-1 pure-u-md-1 centered-text"><?=$notenough?></h1>
<?php } else { foreach ($winners as &$winner) { ?>
    <div class="pure-u-1 pure-u-md-1-<?=$winnersCount?> l-box centered-text">
        <img class="trophy horizontal-center" src="/assets/images/trophy.png"/>
        <h3><?=$winner?></h3>
    </div>
<?php } } ?>
