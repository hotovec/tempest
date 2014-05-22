<?php include("templates/html-header.php"); ?>

<!-- layer manager wprapper also moved by offcanavas -->
<div id="pt-main" class="pt-perspective m-content m-content-manage">

    <!-- content in layers -->

    <!-- first(default) content layer-->
    <div class="pt-layer pt-layer-main scrollable ">

        <div class="container">
            <!-- brand logo-->
            <?php include("templates/brand.php"); ?>

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        Manage vocabularies </h1>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Search for vocabulary</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" class="form-inline" role="form">

                        <div class="form-group">
                            <label class="sr-only" for="">label</label>
                            <input type="email" class="form-control" name="" id="" placeholder="Search vocablulary ...">
                        </div>
                        <button type="submit" class="btn btn-default">options</button>
                        <button type="submit" class="btn btn-primary">Search</button>

                    </form>
                </div>
            </div>

            <button data-layer="open" data-animation="1" data-layer-target=".modal-extlink-create">ExtLink</button>


            <div class="panel panel-default">
            	  <div class="panel-heading">
            			<h3 class="panel-title">RICH TERMS WITHIN THIS VOCABULARY</h3>
            	  </div>
            	  <div class="panel-body">

                      <div class="row">
                          <div class="col-xs-12 col-md-9">
                              <form action="" method="POST" class="form-inline" role="form">

                                  <div class="form-group">
                                      <label class="sr-only" for="">label</label>
                                      <input type="email" class="form-control" name="" id="" placeholder="Search Rich Terms ...">
                                  </div>

                                  <button type="submit" class="btn btn-primary">Search</button>
                              </form>
                          </div>
                          <div class="col-xs-12 col-md-3">
                              <button class="btn btn-md">next page</button>
                              <button class="btn btn-md">previous page</button>
                          </div>
                      </div>
                        <div class="row">
                            <div class="col-md-3">
                                <ul>
                                    <li>Liternum, Campania</li>
                                    <li>Virginia Beach</li>
                                    <li>Riverdale, Bronx</li>
                                    <li>Near Birmingham</li>
                                    <li>Lithonia</li>
                                    <li>Brentwood, Los Angeles</li>
                                    <li>Pellston</li>
                                    <li>Arnhem</li>
                                    <li>Hayes, Kent, England</li>
                                    <li>New Market</li>
                                    <li>Cavaillon</li>
                                    <li>Roper</li>
                                    <li>Marina del Rey</li>
                                    <li>Long Island City (Queens)</li>
                                    <li>Gorizia</li>
                                    <li>Placentia</li>
                                    <li>San Miguel de Allende</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul>
                                    <li>Liternum, Campania</li>
                                    <li>Virginia Beach</li>
                                    <li>Riverdale, Bronx</li>
                                    <li>Near Birmingham</li>
                                    <li>Lithonia</li>
                                    <li>Brentwood, Los Angeles</li>
                                    <li>Pellston</li>
                                    <li>Arnhem</li>
                                    <li>Hayes, Kent, England</li>
                                    <li>New Market</li>
                                    <li>Cavaillon</li>
                                    <li>Roper</li>
                                    <li>Marina del Rey</li>
                                    <li>Long Island City (Queens)</li>
                                    <li>Gorizia</li>
                                    <li>Placentia</li>
                                    <li>San Miguel de Allende</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul>
                                    <li>Liternum, Campania</li>
                                    <li>Virginia Beach</li>
                                    <li>Riverdale, Bronx</li>
                                    <li>Near Birmingham</li>
                                    <li>Lithonia</li>
                                    <li>Brentwood, Los Angeles</li>
                                    <li>Pellston</li>
                                    <li>Arnhem</li>
                                    <li>Hayes, Kent, England</li>
                                    <li>New Market</li>
                                    <li>Cavaillon</li>
                                    <li>Roper</li>
                                    <li>Marina del Rey</li>
                                    <li>Long Island City (Queens)</li>
                                    <li>Gorizia</li>
                                    <li>Placentia</li>
                                    <li>San Miguel de Allende</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul>
                                    <li>Liternum, Campania</li>
                                    <li>Virginia Beach</li>
                                    <li>Riverdale, Bronx</li>
                                    <li>Near Birmingham</li>
                                    <li>Lithonia</li>
                                    <li>Brentwood, Los Angeles</li>
                                    <li>Pellston</li>
                                    <li>Arnhem</li>
                                    <li>Hayes, Kent, England</li>
                                    <li>New Market</li>
                                    <li>Cavaillon</li>
                                    <li>Roper</li>
                                    <li>Marina del Rey</li>
                                    <li>Long Island City (Queens)</li>
                                    <li>Gorizia</li>
                                    <li>Placentia</li>
                                    <li>San Miguel de Allende</li>
                                </ul>
                            </div>

                        </div>

            	  </div>
            </div>

        </div>


    </div>



    <?php include("templates/modal-content--create-content.php"); ?>
    <?php include("templates/modal--create-external-link.php"); ?>


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
        $('#btnSwitchToTile').click(function () {
            console.log('cc');
            $('#records').removeClass('list-view');
            $('#records').addClass('tile-view');
        });

        $('#btnSwitchToList').click(function () {
            console.log('cc');
            $('#records').addClass('list-view');
            $('#records').removeClass('tile-view');
        });

        // collapse - expand records
        $('.cell-info').click(function () {
            var el = $(this).parent().parent();
            if (el.hasClass('mm-collapsed')) {
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
