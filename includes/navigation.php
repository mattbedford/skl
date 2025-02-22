<?php

    $pages = [
        ['Home', '/'],
        ['About', '/about'],
        ['Projects', '/projects'],
        ['Contact', '/contact']
    ];

?>
<?php include("includes/topbar.php");?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between py-3 mx-auto container">

        <a class="navbar-brand" href="/">
            <img src="../img/skl-logo-brownmed.webp" alt="Logo" height="100" class="d-inline-block align-top" />
        </a>
        <ul class="navbar-nav">
            <?php foreach($pages as $page) {
                $class = "nav-link";
                if(ltrim($page[1], '/') === get_page_path()) {
                    $class = "nav-link active";
                }
                if(ltrim(lcfirst($page[1]), '/') === 'contact') {
                    $class = "btn btn-base rounded-1 menu-btn";
                }

                echo "<a href='" . lcfirst($page[1]) . "' class='" . $class . " mx-3'>";
                echo "<li class='nav-item text-uppercase'><strong>";
                echo $page[0];
                echo "</strong></li>";
                echo "</a>";

            }
            ?>
        </ul>
    </nav>
</header>