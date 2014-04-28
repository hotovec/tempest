<?php include("templates/html-header.php"); ?>
<div class="container">

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <a class="navbar-brand" href="#">XOV</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Link</a>
            </li>
        </ul>
    </nav>

    <table class="table">
        <thead>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>Title</th>
            <th>author</th>
            <th>LM</th>
            <th>s</th>
            <th>t</th>
        </tr>
        </thead>
        <tbody>
        <?php for($i=1; $i<= 20; $i++) { ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>

            <td>I’m Almost 24 And I Can’t Stop Buying Cute Things With ...</td>
            <td>Alle Heris</td>

            <td>Mar 06, 2014 18:02:02</td>
            <td><i class="fa fa-star">Star</i></td>
            <td><i class="fa fa-tims">Delete</i></td>

        </tr>
        <?php } ?>
        </tbody>
    </table>


</div>
<?php include("templates/html-footer.php"); ?>