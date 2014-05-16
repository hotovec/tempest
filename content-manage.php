<?php include("templates/html-header.php"); ?>

<!-- layer manager wprapper also moved by offcanavas -->
<div id="pt-main" class="pt-perspective m-content m-content-manage">

    <!-- brand logo-->
    <?php include("templates/brand.php"); ?>

    <!-- navbar -->
    <?php include("templates/navbar.php"); ?>


    <!-- content in layers -->

    <!-- first(default) content layer-->
    <div class="pt-layer pt-layer-0 has-navbar m-content m-content-manage">
        <div class="container">
            <!-- filters / tags -->

            <!-- content table - list -->
            <div id="records" class="m-records list-view">
                <!-- records header -->
                <div class="record-header">
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
                </div>

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
    <div class="pt-layer pt-layer-1 m-content-manage m-modal mm-full modal-delete">
        <?php include("templates/modal-content--delete.php"); ?>
    </div>


    <!-- create content layer-->
    <div class="pt-layer m-modal mm-full modal-content-create">
        <?php include("templates/modal-content--create-content.php"); ?>
    </div>

</div> <!-- end of layer manager #pt-main wrapper -->



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
