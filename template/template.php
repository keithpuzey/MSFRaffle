<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">

    <title><?php $this->pageTitle(); ?> | <?php $this->siteName(); ?></title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">

    <?php $this->axaSnippet(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style type="text/css">
        * { box-sizing: border-box; }

        /* fonts */
        @font-face {
            font-family: 'CA Sans';
            src: url("/assets/fonts/ca-sans/CSSansWebRegular/ca_sans_web-regular.eot");
            src: url("/assets/fonts/ca-sans/CSSansWebRegular/ca_sans_web-regular.eot?#iefix") format("embedded-opentype"),
            url("/assets/fonts/ca-sans/CSSansWebRegular/ca_sans_web-regular.svg#CASans-Regular") format("svg"),
            url("/assets/fonts/ca-sans/CSSansWebRegular/ca_sans_web-regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'CA Sans';
            src: url("/assets/fonts/ca-sans/CSSansWebBold/ca_sans_web-bold.eot");
            src: url("/assets/fonts/ca-sans/CSSansWebBold/ca_sans_web-bold.eot?#iefix") format("embedded-opentype"),
            url("/assets/fonts/ca-sans/CSSansWebBold/ca_sans_web-bold.svg#CASans-Regular") format("svg"),
            url("/assets/fonts/ca-sans/CSSansWebBold/ca_sans_web-bold.woff") format("woff");
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'CA Sans';
            src: url("/assets/fonts/ca-sans/CSSansWebItalic/ca_sans_web-italic.eot");
            src: url("/assets/fonts/ca-sans/CSSansWebItalic/ca_sans_web-italic.eot?#iefix") format("embedded-opentype"),
            url("/assets/fonts/ca-sans/CSSansWebItalic/ca_sans_web-italic.svg#CASans-Regular") format("svg"),
            url("/assets/fonts/ca-sans/CSSansWebItalic/ca_sans_web-italic.woff") format("woff");
            font-weight: normal;
            font-style: italic;
        }

        html, button, input, select, textarea,
        .pure-g [class *= "pure-u"] {
            font-family: "CA Sans";
        }

        html, body {
            display: block;
            height: 100%;
            min-height: 100%;
            margin: 0;
        }

        body-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            min-width: 17.5rem;
            display: flex;
            flex-direction: column;
            flex: 1 0 auto;
        }

        .flex-column {
            /*flex: 1 1 0%;*/
            display: flex;
            flex-direction: column;
            align-content: flex-start;
            -webkit-box-direction: normal;
            -webkit-box-flex: 1;
        }

        .center-center {
            align-items: center;
            -webkit-align-items: center;
            align-content: center;
            -webkit-align-content: center;
            -webkit-box-pack: center;
            -webkit-box-align: center;
            -webkit-justify-content: center;
            justify-content: center;
            max-width: 100%;
        }

        .centered-text { text-align: center; }

        .horizontal-center {
            margin: 0 auto !important;
            display: block !important;
        }

        .bold { font-weight: bold; }

        .l-box { padding: 1em; }

        .blue-button {
            color: white;
            background-color: #7CB8C9;
            font-weight: bold;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            /*padding: 0.2em 0;*/
        }

        .icon {
            background: none no-repeat center center;
            background-size: contain;
        }
    </style>
</head>
<body>
    <body-wrapper>
        <?php include "template/header.php"; ?>
        <?php include "template/body.php"; ?>
    </body-wrapper>
</body>
</html>