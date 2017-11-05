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
    $winnersfile = fopen ("winnersData.txt","a");
    fwrite($winnersfile,"$drawtime,  " . join(", ", $winners) . " \r\n");
    fclose ($winnersfile);

    $winnersCount = count($winners);
}
?>
<style scoped>
    .guitar {
        background-image: src(/assets/images/Guitar-Angled.png);
    }
h1 {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  font-size: 70px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
}
h1.elegantshadow {
  color: #f48f42;
  background-color: #FFFFFF;
  letter-spacing: .15em;
  text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d, -10px 20px 1px #949392, -11px 22px 1px #999897, -12px 24px 1px #9e9c9c, -13px 26px 1px #a3a1a1, -14px 28px 1px #a8a6a6, -15px 30px 1px #adabab, -16px 32px 1px #b2b1b0, -17px 34px 1px #b7b6b5, -18px 36px 1px #bcbbba, -19px 38px 1px #c1bfbf, -20px 40px 1px #c6c4c4, -21px 42px 1px #cbc9c8, -22px 44px 1px #cfcdcd, -23px 46px 1px #d4d2d1, -24px 48px 1px #d8d6d5, -25px 50px 1px #dbdad9, -26px 52px 1px #dfdddc, -27px 54px 1px #e2e0df, -28px 56px 1px #e4e3e2;
}
h1.deepshadow {
  color: #f48f42;
  background-color: #FFFFFF;
  letter-spacing: .1em;
  text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
}

</style>

<spacer class="pure-u-1"></spacer>
<?php if ($notenough) { ?>
    <h1 class="error pure-u-1 pure-u-md-1 centered-text"><?=$notenough?></h1>
<?php } else { foreach ($winners as &$winner) { ?>

<h1 class='deepshadow'><font color="#f48f42"><h1><?=$winner?></h1>


<div class="guitar">
   <img src="/assets/images/Guitar-Angled.png" style="width:100%;">
</div>
<?php } } ?>

