<style scoped>
    header {
        background-color: #e88007;
        position: relative;
        width: 100%;
        min-height: 274px;
        color: white;
    }

    header logo { width: 100%; }
    header logo .logo {
        background-image: url(/assets/images/logo.png) !important;
        width: 175px;
        height: 147px;
    }

    header text { text-align: center; width: 100% !important; }
    header h1 { font-size: 2em; margin-bottom: 0; margin-top: 0.6em; }
    header h3 { font-size: 1em; font-weight: normal; margin: 0; }

    @media screen and (max-width: 48em) {
        /* up to medium sized displays */
        header { padding-top: 25px !important; }
    }

    @media screen and (max-width: 80em) {
        /* up to x-large sized displays */
    }

    @media screen and (min-width: 35.5em) {
        /* from small sized displays and up ≥ 568px */
        header logo { width: 100%; }
        header text { width: 100% !important; }
        header h1 { font-size: 2em; margin-top: 0.6em; }
        header h3 { font-size: 1.2em; }
    }

    @media screen and (min-width: 48em) {
        /* from medium sized displays and up ≥ 768px */
        header logo { width: 175px !important; margin: 0 20px; }
        header text { width: 70% !important; }
        header h1 { font-size: 2.8em; margin-top: 0.6em; }
        header h3 { font-size: 1.2em; }
    }

    @media screen and (min-width: 64em) {
        /* from large sized displays and up ≥ 1024px */
        header text { width: 70% !important; }
        header h1 { font-size: 3.8em; margin-top: 0.6em; }
        header h3 { font-size: 1.6em; }
    }

    @media screen and (min-width: 80em) {
        /* from x-large sized displays and up ≥ 1280px */
        header text { width: 80% !important; }
        header h1 { font-size: 5.4em; margin-top: 0.5em; }
        header h3 { font-size: 1.6em; }
    }
</style>
<header class="pure-g">
    <logo class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 flex-column center-center"><div class="icon logo horizontal-center"></div></logo>
    <text class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 flex-column center-center">
        <h1><?php $this->headerText(); ?></h1>
        <h3 style="letter-spacing: 2px;"><?php $this->subHeaderText(); ?></h3>
    </text>
</header>
