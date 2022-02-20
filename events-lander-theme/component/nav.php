<div class="top-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'primary_menu' ) );?>
</div>

<!-- Hamburger Nav -->
<div class="navbar">
    <a class="logo">
        <!-- <i class="fa-solid fa-tree"></i> -->
        <h2>Good Tree<br/><aside>Foundation</aside></h2>
    </a>
    <div class="button-container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>
</div>

<!-- Nav Overlay -->
<div class="overlay" id="overlay">
    <nav class="overlay-menu"><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) );?></nav>
</div>