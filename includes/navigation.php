<?php

    $pages = [
        ['Home', '/'],
        ['About', '/about'],
        ['Contact', '/contact']
    ];

?>

<nav class="navbar navbar-expand-lg navbar-light main-light-bg justify-content-between py-3 w-75 mx-auto">
    <a class="navbar-brand" href="/">
        <img src="../img/skl-brown-logo.webp" alt="Logo" height="100" class="d-inline-block align-top" />
    </a>
    <ul class="navbar-nav">
        <?php foreach($pages as $page) {
            $class = "nav-link";
            if(ltrim($page[1], '/') === get_page_path()) {
                $class = "nav-link active";
            }
            echo "<a href='" . lcfirst($page[1]) . "' class='" . $class . "'>";
            echo "<li class='nav-item'>";
            echo $page[0];
            echo "</li>";
            echo "</a>";

        }
        ?>
    </ul>
</nav>