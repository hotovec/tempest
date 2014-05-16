<?php include("templates/html-header.php"); ?>

<!-- main pages -->
<div id="pt-main" class="pt-perspective m-content m-content-edit">
<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" data-layer="offcanavas">XOV</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><i class="fa fa-copy"></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-circle-o"></i> Draft <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Draft</a></li>
                        <li><a href="#"><i class="fa fa-adjust"></i> Ready for edit</a></li>
                        <li><a href="#"> <i class="fa fa-circle"></i> Complete</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-circle-o"></i> Unpublished <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-layer="open" data-animation="1" data-layer-target=".modal-publish"><i class="fa fa-circle"></i> Publish now</a></li>
                        <li><a href="#" data-layer="open" data-animation="1" data-layer-target=".modal-schedule"><i class="fa fa-calendar"></i> Schedule</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="nav  navbar-right">
                <li class="navbar-text"><i class="fa fa-save"></i> SAVED 2 SECS AGO</li>
                <li class="navbar-text"><i class="fa fa-clock-o"></i> 2.2 MINUTES</li>
                <li class="navbar-text"><i class="fa fa-align-left"></i> 504 WORDS</li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- navbar end-->
    <div class="pt-layer pt-layer-0 has-navbar">


        <!-- page 0 content -->

        <div class="container m-content-edit--main">

            <div class="row">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    ARTICLE TITLE
                </div>
                <div class="title col-xs-9 col-sm-9">
                    <textarea name="" id="" cols="30" rows="3" placeholder="enter title"></textarea>
                </div>
            </div>

            <div class="row ">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    ABSTRACT
                </div>
                <div class="abstract col-xs-9 col-sm-7">
                    <textarea name="" id="" cols="30" placeholder="article abstract"></textarea>
                </div>
            </div>

            <div class="row dashed">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    CONTENT
                </div>
                <div class="content col-xs-9 col-sm-7">
                    <textarea name="" id="" cols="60" rows="10" placeholder="enter article content"></textarea>
                </div>
            </div>

            <div class="row ">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Author
                </div>
                <div class="author col-xs-9 col-sm-7">
                    <input type="text" id="" value="Marci Robin" placeholder="author name">
                </div>
            </div>

            <div class="row">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Promo Title
                </div>
                <div class="promo-title col-xs-9 col-sm-7">
                    <textarea name="" id="" cols="30" rows="3" placeholder="promo title"></textarea>

                </div>
            </div>

            <div class="row">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Promo Image
                </div>
                <div class="promo-title col-xs-9 col-sm-7">
                    image
                    <button type="submit" data-layer="open" data-animation="2" data-layer-target=".modal-media-library"> Select image</button>

                </div>
            </div>

            <div class="row">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Section name
                </div>
                <div class="promo-title col-xs-9 col-sm-7">
                    <input type="text" name="" id="" value="" placeholder="section name"/>
                </div>
            </div>

            <div class="row">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Slug
                </div>
                <div class="promo-title col-xs-9 col-sm-7">
                    <input type="text" name="" id="" value="" placeholder="slug"/>
                </div>
            </div>

            <div class="row">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Tags
                </div>
                <div class="promo-title col-xs-9 col-sm-7">
                    <input class="search" type="text" name="" id="mytags" placeholder="add new tag"
                           value="AutorName" data-role="tagsinput">
                </div>
            </div>

            <div class="row">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Article type
                </div>
                <div class="promo-title col-xs-9 col-sm-7">
                    <select class="form-control">
                        <option value="">standard</option>
                        <option value="">featured</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="m-label col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Card type
                </div>
                <div class="promo-title col-xs-9 col-sm-7">
                    <select class="form-control">
                        <option value="">image</option>
                        <option value="">text</option>
                        <option value="">standard</option>
                    </select>
                </div>
            </div>




        </div> <!-- page 0 content end -->
    </div> <!-- end base page 0-->

    <div class="pt-layer pt-layer-1 m-modal mm-full modal-delete">
        <!-- layer content-->
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
                            <div><i class="fa fa-circle"></i>Draft</div>
                            <div><i class="fa fa-circle"></i>Unpublished</div>
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
                <button type="button" class="btn btn-cancel" data-layer="dimmis">Cancel</button>
                <button type="button" class="btn btn-action" data-layer="dimmis">Delete</button>


                </div>


            </form>
        </div>
        <!-- end of layer content-->
    </div>
    <div class="pt-layer pt-layer-2 m-modal mm-full modal-publish">
        <!-- layer content-->
        <div class="modal-body">
            <form role="form">

                <div class="modal-body-content center">
                    <div class="modal--hed">Are you sure you want to publish now?</div>
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-layer="dimmis">Cancel</button>
                <button type="button" class="btn btn-action" data-layer="open" data-animation="1" data-layer-target=".modal-published">Publish</button>


                </div>


            </form>
        </div>
        <!-- end of layer content-->
    </div>
    <div class="pt-layer pt-layer-3 m-modal mm-full modal-schedule">
        <!-- layer content-->
        <div class="modal-body">
            <form role="form">

                <div class="modal-body-content center">
                    <div class="modal--hed">Schedule Publish Date/Time</div>

                    <div> calednar/widget here</div>

                    <div> set to publish at:</div>

                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-layer="dimmis">Cancel</button>
                <button type="button" class="btn btn-action" data-layer="open" data-animation="1" data-layer-target=".modal-scheduled">Schedule it!</button>
                <div class="help">ESC to cancel</div>

                </div>


            </form>
        </div>
        <!-- end of layer content-->
    </div>
    <div class="pt-layer pt-layer-4 m-modal mm-full modal-scheduled">
        <!-- layer content-->
        <div class="modal-body">
            <form role="form">

                <div class="modal-body-content center">
                    <div class="modal--hed"><i class="fa fa-clock-o"></i> Scheduled!</div>

                    <div> Your article has been scheduled to publish on xoVain at:</div>

                    <div> 03/14/2014 - 1:34 PM - PST</div>

                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-layer="dimmis-all">Close</button>

                </div>

            </form>
        </div>
        <!-- end of layer content-->
    </div>
    <div class="pt-layer pt-layer-5 m-modal mm-full modal-published">
        <!-- layer content-->
        <div class="modal-body">
            <form role="form">

                <div class="modal-body-content center">
                    <div class="modal--hed"><i class="fa fa-trophy"></i> Awesome!</div>

                    <div> Your article has been published on xoVain at:</div>

                    <div> 03/14/2014 - 1:34 PM - PST</div>

                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-layer="dimmis-all">Close</button>

                </div>

            </form>
        </div>
        <!-- end of layer content-->
    </div>

    <?php include("templates/media-library.php"); ?>

    <?php include("templates/modal-content--create-content.php"); ?>

</div>

<!-- offcanavas menu -->
<?php include("templates/html-offcanavas-menu.php"); ?>



<!-- link required scripts -->
<?php include("templates/html-scripts-global.php"); ?>

<script>
    $(function () {
       // LayerTransitions.showSinglePage(1, '.modal-content-create');
    });

</script>

<?php include("templates/html-footer.php"); ?>
