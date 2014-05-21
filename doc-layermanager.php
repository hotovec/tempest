<?php include("templates/html-header.php"); ?>

<style>
    .demo-color-1 {
        background-color: #ff8486;
    }

    .demo-color-2 {
        background-color: #a0a8ff;
    }

    .demo-color-3 {
        background-color: #9fffd1;
    }

    .demo-transparent {
        background-color: transparent;
    }

    .demo-transparent90 {
        background-color: rgba(225, 255, 255, .9);
    }

    .demo-enable-click-thru {
        pointer-events: none;
    }

    .demo-enable-click-thru .custom-container {
        pointer-events: auto;
    }

    .demo-half-container {
        background-color: transparent;
    }

    .demo-half-container .custom-container {
        height: 50%;
        background-color: orange;
    }

    .demo-half-container-bottom {
        background-color: transparent;
    }

    .demo-half-container-bottom .custom-container {
        position: fixed;
        margin: auto;
        bottom: 0;
        height: 50%;
        width: 100%;
        background-color: pink;
    }

    .demo-half-container-center {
        background-color: rgba(0,0,0,.8);
    }
    .demo-half-container-center .custom-container {
        position: fixed;
        margin: auto;
        bottom: 20%;
        left: 20%;
        right: 20%;
        top: 20%;
        background-color: pink;
    }


</style>

<!-- layer manager wprapper also moved by offcanavas -->
<div id="pt-main" class="pt-perspective">

<!-- content in layers -->

<!-- first(default) content layer-->
<div class="pt-layer pt-layer-main scrollable">

    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1>
                    Layer manager examples </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <p>You can open new layer by class
                    <button data-layer="open" data-animation="1" data-layer-target=".myFirstLayer"> open layer by class</button>
                    <button data-layer="open" data-animation="3" data-layer-target=".myFirstLayer"> open layer by class (different animation)</button>
                </p>

                <p>You can open new layer by ID
                    <button data-layer="open" data-animation="1" data-layer-target="#mySecondLayer"> open layer by ID</button>
                    <button data-layer="open" data-animation="4" data-layer-target="#mySecondLayer"> open layer by ID (different animation)</button>
                </p>

                <p>Layer is only container and it can hold whatever you want
                    <button data-layer="open" data-animation="1" data-layer-target="#myTransparentOverlay"> open semi transparent layer</button>
                </p>

                <p>Layer is only container and it can hold custom sizes of content
                    <button data-layer="open" data-animation="1" data-layer-target="#myHalfOverlay"> half page top container</button>
                    <button data-layer="open" data-animation="1" data-layer-target="#myHalfOverlayBottom"> half page bottom container</button>
                </p>

                <p>Of course you can use some different crazy animations on that
                    <button data-layer="open" data-animation="22" data-layer-target="#myHalfOverlay"> half page top container</button>
                    <button data-layer="open" data-animation="32" data-layer-target="#myHalfOverlayBottom"> half page bottom container</button>
                </p>

                <p>And you can enable interaction to background
                    <button data-layer="open" data-animation="32" data-layer-target="#myHalfOverlayBottomClickThru"> half page bottom container with interaction to BG</button>
                </p>

                <p>And many layers
                    <button data-layer="open" data-animation="1" data-layer-target="#myTransparentOverlay2"> more layers overlay</button>
                </p>

                <hr />
                <h2>transitions</h2>
                <p>
                    - not finished closing handler, it use opposite transition to simulate close effect <br />
                    - not all transitions moved to JS controller (use only 1-5 right now)
                </p>
                <p>
                    <button data-layer="transition" data-animation="1" data-layer-target="#myTransitionLayer">Open by transition</button>

                </p>

                <hr />

                <h2> offcanavas included </h2>

                <p>open left offcanvas container
                    <button data-layer="offcanavas" data-offcanavas-target=".mm-custom-pane-1"> Open left canavas</button>
                </p>
                <p>try different offcanvases
                    <button data-layer="offcanavas" data-offcanavas-target=".mm-custom-pane-2"> Open right canavas</button>
                    <button data-layer="offcanavas" data-offcanavas-target=".mm-custom-pane-3"> offcanvas top</button>
                    <button data-layer="offcanavas" data-offcanavas-target=".mm-custom-pane-4"> offcanava bottom</button>
                </p>

                <p>open layers directly from offcanvases
                    <button data-layer="offcanavas" data-offcanavas-target=".mm-custom-pane-4"> offcanava bottom</button>
                </p>

            </div>
        </div>

        <h2>dummy content</h2>

        <div class="row">
            <div class="col-sm-12">
                <div data-lorem="20p"></div>
            </div>
        </div>

    </div>
</div>

<!-- delete modal layer -->


<div class="pt-layer myFirstLayer demo-color-1">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1>
                    this is .myFirstLayer </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <button data-layer="dimmis"> close layer</button>

            </div>
        </div>
    </div>
</div>

<div id="mySecondLayer" class="pt-layer demo-color-2">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1>
                    this is #mySecondLayer </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <p>Press ESC to close the layer</p>

            </div>
        </div>
    </div>
</div>
<div id="myTransitionLayer" class="pt-layer demo-color-1">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1>
                    Opened by transition </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <button data-layer="transition" data-animation="2" data-layer-target=".pt-layer-main">close by transition</button>

            </div>
        </div>
    </div>
</div>

<div id="myTransparentOverlay" class="pt-layer demo-transparent90">
    <div class="custom container">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        I'm semi transparent </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <button data-layer="dimmis"> close layer</button>
                    </p>

                    <h2>
                        all layers lock interaction behind itself, they work as modals by default </h2>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="myTransparentOverlay2" class="pt-layer demo-transparent90">
    <div class="custom container">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        Open something over me </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <p>
                        <button data-layer="open" data-animation="4" data-layer-target="#myHalfOverlay"> half page top container</button>
                        <button data-layer="open" data-animation="6" data-layer-target="#myHalfOverlayBottom"> half page bottom container</button>

                    </p>

                    <h2> Important for canceling and confirmations  - Close them all</h2>
                    <p>
                        <button data-layer="open" data-animation="2" data-layer-target="#myHalfOverlayCloseAll"> this is important</button>
                    </p>



                </div>
            </div>
        </div>
    </div>
</div>


<div id="myHalfOverlay" class="pt-layer demo-half-container">
    <div class="custom-container">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        I'm half layer </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <button data-layer="dimmis"> close layer</button>
                    </p>

                    <h2>
                        layer is container and content does not depends on it </h2>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="myHalfOverlayBottom" class="pt-layer demo-half-container-bottom">
    <div class="custom-container">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        I'm semi transparent </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <button data-layer="dimmis"> close layer</button>
                    </p>

                    <h2>
                        layer is container and content does not depends on it </h2>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="myHalfOverlayBottomClickThru" class="pt-layer demo-half-container-bottom demo-enable-click-thru">
    <div class="custom-container">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        Interaction depends on your CSS </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <button data-layer="dimmis"> close layer</button>
                    </p>

                    <h2>
                        BG is now clickable and scrollable. </h2>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="myHalfOverlayCloseAll" class="pt-layer demo-half-container-center ">
    <div class="custom-container">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        You Really want exit?</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <h2>
                        OK </h2>
                    <p>
                        <button data-layer="dimmis-all"> let's close all</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>





</div> <!-- end of layer manager #pt-main wrapper -->




<!-- offcanavases menu -->

<div class="mm-custom-pane-1" data-offcanavas-pane="left">
    <div class="oc-menu m-offcanavas-menu">
        <div class="m-author">left canavas</div>
            <p>
            you can open different offcanvas from here

            </p>
            <p>
            <button data-layer="offcanavas" data-offcanavas-target=".mm-custom-pane-2">Right one</button>

            </p>
    </div>
</div>

<div class="mm-custom-pane-2" data-offcanavas-pane="right">
    <div class="oc-menu m-offcanavas-menu">
        <div class="m-author">right canavas</div>
        <p>
            <button data-layer="offcanavas" data-offcanavas-target=".mm-custom-pane-3">Top one</button>

        </p>
    </div>
</div>

<div class="mm-custom-pane-3" data-offcanavas-pane="top">
    <div class="oc-menu m-offcanavas-menu">
        <div class="m-author">top canavas</div>
        <p>
            <button data-layer="offcanavas" data-offcanavas-target=".mm-custom-pane-4">Bottom one</button>

        </p>
    </div>
</div>

<div class="mm-custom-pane-4" data-offcanavas-pane="bottom">
    <div class="oc-menu m-offcanavas-menu">
        <div class="m-author">bottom canavas</div>
        <p>
        you can open new layer from anywhere

        </p>
        <p>
            <button data-layer="open" data-animation="1" data-layer-target="#myTransparentOverlay2"> open layer </button>

        </p>

    </div>
</div>

<div class="oc-overlay"></div>






<!-- link required scripts + app.js global scripts-->
<?php include("templates/html-scripts-global.php"); ?>

<?php include("templates/html-footer.php"); ?>
