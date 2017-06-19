<style scoped>
    fieldset div {
        padding: 1em;
    }
    .build-version {
        text-align: center;
        color: #555555;
        padding-top: 0;
    }

    form:invalid .blue-button {
        background-color: #999999;
        color: #cccccc;
        pointer-events: none;
    }
    .pure-form input:focus:invalid {
        color: inherit;
        border-color: #129FEA;
    }
</style>

<form class="pure-form" action="welcome" method="post">
    <fieldset>
        <div class="pure-u-1 pure-u-md-3-4">
            <input name="name" type="text" placeholder="Enter your full name here" required class="pure-u-1">
        </div>
        <div class="pure-u-1 pure-u-md-1-4">
            <button type="submit" class="horizontal-center pure-button blue-button pure-u-1-2 pure-u-md-1">I'm In!</button>
        </div>
        <div class="pure-u-1 pure-u-md-1 build-version">Build number: <b><?php $this->buildVersion(); ?></b></div>
    </fieldset>
</form>
