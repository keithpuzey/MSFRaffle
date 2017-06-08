<?php
$dataFileName = getcwd() . DIRECTORY_SEPARATOR . 'mydata.txt';
$count = file_exists($dataFileName) ? COUNT(FILE($dataFileName)) : 0;
?>

<style scoped>
    h2, h3 { font-size: 1em; }
    h1 { font-size: 2em; }

    content {
        height: 100%;
        padding-top: 50px;
    }

    .spinner {
        width: 168px;
        height: 163px;
        background: url(/assets/images/loader.png) no-repeat center center;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation: load8 1.1s infinite linear;
        animation: spin 1.1s infinite linear;
    }

    @media screen and (min-width: 64em) {
        h1 { font-size: 4em; }
        h3 { font-size: 2em; }
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    @keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>

<div class="pure-u-1 centered-text">
    <h3>1. GO TO <a href="http://raffle.cdbu.io">http://raffle.cdbu.io</a></h3>
    <h3>2. SUBMIT YOUR FULL NAME</h3>
    <h3>3. SHABANG! YOU'RE IN THE GAME!</h3>

    <br/><br/>

    <h1><?=$count?> Entries in the raffle</h1>

    <form action="winners" method="post" name="winnersForm"></form>

    <div id="submitBtn">
        <button onclick="getWinners()"
                class="horizontal-center pure-button pure-button-primary pure-u-1 pure-u-md-1 pure-u-lg-1-2" <?=$count ? "" : "disabled"?>>And the winners are...</button>
    </div>
    <div id="loader" style="display: none;">
        <div class="spinner horizontal-center"></div>
        <h3>Computing...</h3>
    </div>
</div>

<script type="text/javascript">
    function getWinners() {
        var loader = document.getElementById('loader');
        var submitBtn = document.getElementById('submitBtn');

        loader.style.cssText = "display: block !important;";
        submitBtn.style.display = 'none';

        setTimeout(function () {
            document.winnersForm.submit();
        }, 2000);
    }
</script>
