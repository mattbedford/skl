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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../img/skl-logo-brownmed.webp" alt="Logo" height="100" class="d-inline-block align-text-top">
            </a>

            <!-- Hamburger Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach($pages as $page) {
                        $class = "nav-link";
                        if (ltrim($page[1], '/') === get_page_path()) {
                            $class = "nav-link active";
                        }
                        if (ltrim(lcfirst($page[1]), '/') === 'contact') {
                            $class = "btn btn-base rounded-1 menu-btn";
                        }
                        echo "<li class='nav-item'>";
                        echo "<a href='" . lcfirst($page[1]) . "' class='" . $class . "'>";
                        echo $page[0];
                        echo "</a>";
                        echo "</li>";
                    } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>