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
    h1, h2, h3 {
        text-align: center;
        /*font-size: 1em;*/
    }
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
        width: 117px;
        height: 155px;
    }
</style>

<div class="pure-u-1 pure-u-md-1">
    <div class="chaching horizontal-center"><img src="/assets/images/cha_ching.png"/></div>
</div>
<?php if ($notenough) { ?>
    <h1 class="error pure-u-1 pure-u-md-1"><?=$notenough?></h1>
<?php } else { ?>
    <?php foreach ($winners as &$winner) { ?>
        <div class="pure-u-1 pure-u-md-1-<?=$winnersCount?> l-box">
            <img class="trophy horizontal-center" src="/assets/images/trophy.png"/>
            <h3><?=$winner?></h3>
        </div>
    <?php } ?>
<?php } ?>
