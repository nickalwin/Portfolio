<nav class="navbar">
    <ul class="navbar-nav">
        <?php
        echo "<li class='nav-item'>";
        $home = $globalVar["pages"]["home"];
        $logo = $globalVar["images"]["logo"];
        echo "<a href='$home' class='nav-link'><img alt='logo' src='$logo' style='max-height: 30px'></a>";
        foreach ($globalVar["pages"] as $key => $value) {
            echo "<li class='nav-item'>";
            echo "<a href='$value' class='nav-link'>$key</a>";
            echo "</li>";
        }
        ?>
    </ul>
</nav>
