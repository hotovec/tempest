<?php include("html-header.php"); ?>
<?php include("templates/module-navbar.php"); ?>


<!-- main container-->
<div class="container">
edit content
    </div>

<!-- offcanavas containers -->
<div class="offcanavas-menu-left offcanavas-menu offcanvas">
    <?php include("templates/module-offcanavas-menu.php"); ?>
</div>
<div class="offcanavas-menu-right offcanavas-menu offcanvas">right offside menu</div>
<div class="offcanavas-menu-bottom offcanavas-menu offcanvas">bottom offside menu</div>
<div class="offcanavas-menu-top offcanavas-menu offcanvas">top offside menu</div>


<!-- global scripts-->
<?php include("scripts.php"); ?>
<!-- custom page scripts-->

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable( {
            "aaSorting": [[ 4, "desc" ]]
        } );
    } );
</script>

<?php include("html-footer.php"); ?>