<?php
$dataFileName = getcwd() . '/mydata.txt';
$result = '';

if (file_exists($dataFileName)) {
    $unlinked = unlink($dataFileName);
    $result = "The file $dataFileName " . ($unlinked ? "removed" : "couldn't be removed") . ".";
} else {
    $result = "The file $dataFileName does not exist";
}
?>

<div class="pure-u-1 pure-u-md-3-4">
    <p><b><?=$result?></b></p>
</div>
