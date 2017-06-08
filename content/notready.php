<style scoped>
    .painter {
        width: 147px;
        height: 370px;
        background: url(/assets/images/painter.png) no-repeat center center;
    }
    .message {
        font-size: 2em;
        margin: 7px 0;
    }
    @media screen and (max-width: 48em) {
        .painter {
            background-size: 73px 185px;
            width: 73px;
            height: 185px;
        }

        .message {
            font-size: 1em;
        }
    }
</style>

<div class="pure-u-1 pure-u-md-1 centered-text">
    <div class="message">The feature is not ready yet</div>
    <div class="message">Some user stories were not implemented.</div>
    <div class="message">Please check you’ve deployed the latest build in the production environment.</div>
    <div class="horizontal-center painter"></div>
</div>
