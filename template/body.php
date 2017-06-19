<style scoped>
    article {
        color: #444444;
        flex: 1 1 0%;
    }

    article content {
        display: block;
        max-width: 1024px;
        padding: 5px 0;
        /*-webkit-box-direction: normal;*/
    }

    @media screen and (max-width: 48em) {
        /* up to medium sized displays */
        article content {
            max-width: 100%;
        }
    }

    @media screen and (min-width: 64em) {
        /* from large sized displays and up ≥ 1024px */
        article content {
            font-size: 200% !important;
        }
    }
</style>
<article class="flex-column center-center">
    <content class="pure-g"><?php $this->pageContent(); ?></content>
</article>
