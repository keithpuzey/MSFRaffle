<style scoped>
    .painter {
        height: 370px;
        background-image: url(/assets/images/painter.png);
    }
    .message {
        font-size: 1em;
        margin: 7px 0;
    }

    @media screen and (max-width: 48em) {
        /* up to medium sized displays */
        .painter {
            height: 185px;
        }

        .message {
            font-size: 1em;
        }
    }
    @media screen and (max-width: 64em) {
        /* up to large sized displays */
        .blue-button {
            width: 80%;
        }
    }
</style>

<div class="pure-u-1 pure-u-md-1 centered-text">
    <div class="message bold">The feature is not ready yet</div>
    <div class="message">Some user stories were not implemented.</div>
    <div class="message">Please check you’ve deployed the latest build in the production environment.</div>
    <div class="pure-u-1">
        <div class="icon horizontal-center painter"></div>
    </div>
    <div class="pure-u-1" style="margin-top: 1em;"><a class="pure-button blue-button" href="/">Try Again</a></div>
</div>
