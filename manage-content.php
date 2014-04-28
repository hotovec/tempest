<?php include("templates/html-header.php"); ?>
<!-- offcanavas containers -->
<div class="offcanavas-menu-left offcanavas-menu offcanvas">left offside menu</div>
<div class="offcanavas-menu-right offcanavas-menu offcanvas">right offside menu</div>
<div class="offcanavas-menu-bottom offcanavas-menu offcanvas">bottom offside menu</div>
<div class="offcanavas-menu-top offcanavas-menu offcanvas">top offside menu</div>


<!-- main container-->
<div class="container">

    <!-- navbar -->
    <nav class="navbar navbar-main" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">XOV</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <!-- tmp offcanavas menu buttons -->
    <div class="row">
        <div class="col-sm-8">
            <button  type="submit" data-toggle="offcanvas" data-target=".offcanavas-menu-left" data-canvas="body">open offcanavas left</button>
            <button  type="submit" data-toggle="offcanvas" data-target=".offcanavas-menu-top" data-canvas="body">open offcanavas top</button>
            <button  type="submit" data-toggle="offcanvas" data-target=".offcanavas-menu-bottom" data-canvas="body">open offcanavas bottom</button>
            <button class="right" type="submit" data-toggle="offcanvas" data-target=".offcanavas-menu-right" data-canvas="body">open offcanavas right</button>
        </div>
    </div>

    <!-- filters / tags -->
    <div class="row content-management-presets">
    	<div class="col-sm-12">
            		<input type="text" name="" id="mytags" placeholder="presets" value="Articles,Products,Ready for Edit,Last Week" data-role="tagsinput">
    	</div>
    </div>

    <!-- content table - list -->
    <table class="table content-management_list">
        <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>title</th>
            <th>author</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php for($i=1; $i<= 10; $i++) { ?>
        <tr>
            <td><i class="fa fa-shopping-cart" data-toggle="tooltip" data-placement="top" title="product"></i></td>
            <td><i class="fa fa-adjust"  data-toggle="tooltip" data-placement="top" title="not ready" ></i></td>
            <td><i class="fa fa-circle" data-toggle="tooltip" data-placement="top" title="published"></i></td>
            <td><img class="thumbnail" src="assets/images/image.jpg" class="img-responsive" alt="Image"></td>

            <td>I’m Almost 24 And I Can’t Stop Buying Cute Things With ...</td>
            <td>Alle Heris
            </td>

            <td>Mar 06, 2014 18:02:02</td>
            <td><i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="featured"></i></td>
            <td><i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="DELETE"></i></td>

        </tr>
        <?php } ?>
        </tbody>
    </table>


</div>
<?php include("templates/html-footer.php"); ?>