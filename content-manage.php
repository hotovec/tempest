<?php include("templates/html-header.php"); ?>

<!-- layer manager wprapper also moved by offcanavas -->
<div id="pt-main" class="pt-perspective m-content m-content-manage">

    <!-- content in layers -->

    <!-- first(default) content layer-->
    <div class="pt-layer pt-layer-main scrollable -has-navbar m-content m-content-manage">

        <div class="container">

            <!-- brand logo-->
            <?php include("templates/brand.php"); ?>

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        Manage content library
                    </h1>
                </div>
            </div>

                <!-- navbar -->
                <?php include("templates/navbar.php"); ?>

            <!-- content table - list -->
            <div id="records" class="m-records tile-view">
                <!-- records header -->
                <section class="record-header">
                    <div class="style-switch" >
                        <div class="btn-group">
                            <button type="button" id="btnSwitchToList" class="btn btn-default"><i class="fa fa-th-list"></i></button>
                            <button type="button" id="btnSwitchToTile"class="btn btn-default"><i class="fa fa-th-large"></i></button>
                        </div>
                    </div>
                    <div class="titles">
                        <div class="cell cell-check"></div>
                        <div class="cell cell-info"></div>
                        <div class="cell cell-title"><span data-toggle="tooltip" data-placement="bottom" title="order by title">title <i class="fa fa-angle-down"></i></span></div>
                        <div class="cell cell-author"><span data-toggle="tooltip" data-placement="bottom" title="order by author">author <i class="fa fa-angle-down"></i></span></div>
                        <div class="cell cell-date"><span data-toggle="tooltip" data-placement="bottom" title="order by date">published <i class="fa fa-angle-down"></i></span></div>
                        <div class="cell cell-date"><span data-toggle="tooltip" data-placement="bottom" title="order by date">last modified <i class="fa fa-angle-down"></i></span></div>
                        <div class="cell cell-actions"></div>
                    </div>
                </section>

                <?php
                // generate records
                for ($r = 1; $r <= 10; $r++) {

                    // generate first three not collapsed
                    if ($r < 3) {
                        $recClass = "";
                    } else {
                        $recClass = "mm-collapsed";
                    }

                    // include record template
                    include("templates/content-manage-record.php");

                } ?>
            </div>

        </div>
    </div>

    <!-- delete modal layer -->
    <div class="pt-layer pt-layer-1 m-content-manage modal-fullscreen modal-delete">
        <?php include("templates/modal-content--delete.php"); ?>
    </div>


    <?php include("templates/modal-content--create-content.php"); ?>

    <div class="pt-layer m-reload ">
        <div style="background-color: white; width: 100%; height: 100%;">fafasf</div>
    </div>


</div> <!-- end of layer manager #pt-main wrapper -->


<div>two page transitions:
    <button data-layer="transition" data-animation="1" data-layer-target=".modal-content-create">Open by transition</button>
    <button data-layer="transition" data-animation="2" data-layer-target=".pt-layer-main">close by transition</button>
</div>



<!-- offcanavas menu -->
<?php include("templates/html-offcanavas-menu.php"); ?>


<!-- link required scripts + app.js global scripts-->
<?php include("templates/html-scripts-global.php"); ?>

<!-- custom page scripts -->
<script>
    // colapsible elements

    $(function () {


        // switch display mode
        recordstyle = "list-view";
        $('#btnSwitchToTile').click(function(){
            console.log('cc');
            $('#records').removeClass('list-view');
            $('#records').addClass('tile-view');
        });

        $('#btnSwitchToList').click(function(){
            console.log('cc');
            $('#records').addClass('list-view');
            $('#records').removeClass('tile-view');
        });

        // collapse - expand records
        $('.cell-info').click(function(){
            var el = $(this).parent().parent();
            if(el.hasClass('mm-collapsed')) {
                el.removeClass('mm-collapsed');
            } else {
                el.addClass('mm-collapsed');
            }
        });

        // filter interactions
        $("[data-toggle='filter-add']").click(function () {
            var el = $(this);
            var filterValue = el.data('filter-name');
            $('#searchtags').tagsinput('add', filterValue);
        });

    });

</script>

<?php include("templates/html-footer.php"); ?>
