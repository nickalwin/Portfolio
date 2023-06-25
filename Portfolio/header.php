<nav class="navbar">
    <ul class="navbar-nav">
        <?php
        foreach ($globalVar["pages"] as $key => $value) {
            echo "<li class='nav-item'>";
            echo "<a href='$value' class='nav-link'>$key</a>";
            echo "</li>";
        }
        ?>
    </ul>
</nav>
