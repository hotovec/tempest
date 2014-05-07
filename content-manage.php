<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>tempest</title>

    <link rel="stylesheet" media="screen" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

    <!-- font awesome-->
    <link rel="stylesheet" media="screen" href="assets/font-awesome/css/font-awesome.min.css">

    <!-- editable tags input-->
    <link rel="stylesheet" href="bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

    <link rel="stylesheet" type="text/css" href="assets/js/layer-transitions/css/component.css"/>
    <link rel="stylesheet" type="text/css" href="assets/js/layer-transitions/css/animations.css"/>


    <!-- custom overide compiled by codekit -->
    <link rel="stylesheet" media="screen" href="css/main.css">

    <script src="bower_components/requirejs/require.js"></script>
    <script src="assets/js/layer-transitions/js/modernizr.custom.js"></script>

</head>
<body>

<!-- main pages -->
<div id="pt-main" class="pt-perspective m-content m-content-manage">

<!-- navbar -->
<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#" data-layer="offcanavas" style="float: left; ">XOV</a>

        <div class="search-tags">
            <div class="search-field">
                <div id="searchOptionsButton" class="search-button"><i class="fa fa-angle-down"></i> <i
                        class="fa fa-search"></i></div>
                <input class="search" type="text" name="" id="mytags" placeholder="presets"
                       value="Articles,Products,Ready for Edit,Last Week" data-role="tagsinput">
            </div>
            <div class="search-tags--options hide">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div><i class="fa fa-star"></i> starred</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <h4>content type</h4>

                        <div><i class="fa fa-file-text-o"></i> article</div>
                        <div><i class="fa fa-shopping-cart"></i> product</div>
                        <div><i class="fa fa-user-md"></i> author profile</div>
                        <div><i class="fa fa-user"></i> person</div>
                        <div><i class="fa fa-file"></i> basic page</div>
                        <div><i class="fa fa-bar-chart-o"></i> data</div>
                        <div><i class="fa fa-link"></i> link</div>
                        <div><i class="fa fa-tag"></i> rich term</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <h4>Authoring status</h4>

                        <div><i class="fa fa-circle-o"></i> draft</div>
                        <div><i class="fa fa-adjust"></i> ready for edit</div>
                        <div><i class="fa fa-circle"></i> complete</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <h4>Publication status</h4>

                        <div><i class="fa fa-circle color-unpublished"></i> unpublished</div>
                        <div><i class="fa fa-circle color-scheduled"></i> scheduled</div>
                        <div><i class="fa fa-circle color-published"></i> published</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <h4>Date range</h4>

                        <div class="input-group">
                            <input type="text" class="form-control">

                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i
                                        class="fa fa-calendar"></i></button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">add calednar here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                        </div>
                        <!-- /input-group -->

                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row content-management-presets">
            <div class="col-sm-12">
                <div id="filter-pillbox" class="pillbox navbar">
                    <button type="button" class="add-filter" class="btn btn-default">Default <i class="fa fa-times-circle"></i></button>
                    <button type="button" class="btn btn-success">Success <i class="fa fa-times-circle"></i></button>
                    <button type="button" class="btn btn-info">Info <i class="fa fa-times-circle"></i></button>
                    <button type="button" class="btn btn-warning">Warning <i class="fa fa-times-circle"></i></button>
                    <button type="button" class="btn btn-danger">Danger <i class="fa fa-times-circle"></i></button>
                    <!-- add new filter button-->
                    <button type="button" class="btn btn-primary">Add new filter <i class="fa fa-plus-circle"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- navbar end-->

<div class="pt-layer pt-layer-0 has-navbar m-content m-content-manage">
    <!-- page 0 content -->
    <div class="container">
        <!-- filters / tags -->

        <!-- content table - list -->
        <div id="records" class="m-records list-view">

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

            <form action="">
            <?php for($r=1; $r <= 10; $r++) {
                if($r < 3) { $recClass=""; } else {$recClass="mm-collapsed";}
            ?>

            <div class="record <?php echo $recClass; ?>">
                <div class="record-base">
                    <div class="cell cell-check"><input type="checkbox" value="" id=""></div>
                    <div class="cell cell-info"><i class="fa fa-info-circle"></i></div>
                    <div class="cell cell-title">
                        <img class="avatar" src="assets/images/image.jpg" alt=""/>
                        <a href="content-edit.html">I’m Almost 24 And I Can’t Stop Buying Cute Things With ... </a>
                    </div>
                    <div class="cell cell-author">fasdfasfd fa dfa sd</div>
                    <div class="cell cell-date"> Mar 16, 2014 at 18:02</div>
                    <div class="cell cell-date"> Mar 16, 2014 at 18:02</div>
                    <div class="cell cell-actions">
                            <span><i class="fa fa-circle-o"></i></span>
                            <span><i class="fa fa-adjust"></i></span>
                            <span><i class="fa fa-file"></i></span>
                    </div>
                </div>
                <div class="record-meta ">
                    <div class="cell cell-section">
                        <label>section</label>
                        Hairs
                    </div>
                    <div class="cell cell-publishedby">
                        <label>published by</label>
                        Marci Robin
                    </div>
                    <div class="cell cell-tags">
                        <label>tags</label>
                        hello, beauty, another, look, thrones
                    </div>
                    <div class="cell cell-slug"><label>slug</label><span>golden-beauty-looks-isnpired-by-game-fo-thrones</span></div>


                </div>
            </div>

            <?php } ?>
                </form>
        </div>

    </div>


    <!-- page 0 content end -->
</div>
<!-- end base page 0-->
<div class="pt-layer pt-layer-1 m-content-manage m-modal mm-full modal-delete">
    <!-- delete modal-->
    <div class="modal-body">
        <form role="form">

            <div class="modal-body-content">

                <div class="modal--hed">Are you sure you want to DELETE this item? You cannot undo this
                    action.
                </div>
                <div class="modal--copy">
                    <div><i class="fa fa-shopping-cart"></i></div>
                    <div>I Decree Your Thread Open! Anne-Marie</div>
                    <div>
                        <div><i class="fa fa-circle"></i> Draft</div>
                        <div><i class="fa fa-circle"></i> Unpublished</div>
                    </div>

                    <div class="row modal--confirm">
                        <div class="form-group">
                            <label for="iConfirm">If so, type DELETE in the field below.</label>
                            <input id="iConfirm" class="form-control" type="text" placeholder="type DELETE here"/>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-layer="dimmis">Cancel</button>
                <button type="button" class="btn btn-action" data-layer="dimmis">Delete</button>
                <div class="help">ESC to close</div>
            </div>


        </form>
    </div>


</div>


<!-- create content-->
<div class="pt-layer m-modal mm-full modal-content-create">
    <div class="modal-body">
        <div class="modal-body-content center">
            <div class="inc:inc-modal-create-content.html">Create content modal</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-cancel" data-layer="dimmis-all">cancel</button>
        </div>
    </div>
</div>
</div>

<!-- offcanavas menu -->
<div class="oc-layer">
    <div class="oc-menu m-offcanavas-menu">
        <div class="m-author">Marci</div>
        <ul class="">
            <li><span data-layer="open" data-animation="1" data-layer-target=".modal-content-create"
                      title="Create content">Create content</span></li>
            <li><a href="content-manage.php" title="Manage content">Manage content</a></li>
            <li><a href="#" title="Manage vocabularies">Manage vocabularies</a></li>
            <li><a href="#" title="Site programming">Site programming</a></li>
            <li><a href="#" title="Manage Users">Manage Users</a></li>
            <li><a href="#" title="Switch site">Switch site</a></li>
            <li><a href="#" title="logout" class="actionLogout">logout</a></li>
        </ul>
    </div>
</div>
<div class="oc-overlay"></div>


<!-- link required scripts -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

<script src="assets/js/jquery.tinyinc.js"></script>
<script src="assets/js/layer-transitions/js/layertransitions.js"></script>
<script src="assets/js/layer-transitions/js/layer-manager.js"></script>

<script src="assets/js/lorem/lorem.js"></script>

<script src="assets/app.js"></script>

<script>
    $(function () {
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
        $('.cell-info').click(function(){
            var el = $(this).parent().parent();
            if(el.hasClass('mm-collapsed')) {
                el.removeClass('mm-collapsed');
            } else {
                el.addClass('mm-collapsed');
            }


        });

    });

</script>

</body>
</html>