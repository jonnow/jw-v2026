<button class="menu-control-open" id="menuControlOpen" command="show-popover" commandfor="site_nav">
    <svg width="10" height="15">
        <circle r="3" cx="5" cy="5"></circle>
        <line x1="5" x2="5" y1="7" y2="13"></line>
    </svg>
    Menu
</button>
<nav id="site_nav" popover>
    <div class="menu-inner">
        <button aria-label="Close navigation menu" id="menuControlClose" class="menu-control-close" command="hide-popover" commandfor="site_nav">Close</button>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="nav-meta">
            <span class="version">2026.0.1</span>
            <!--    This could link to a picture / video of me working in the RadCam    -->
            <span class="madeIn">Made in Oxfordshire</span>
        </div>
    </div>
</nav>
<script type="text/javascript">
    // Unset the nav popover if open and transitioning from mobile to desktop sizes
    const nav = document.getElementById('site_nav'),
        desktopQuery = window.matchMedia("(min-width: 601px)");

    function unsetPopover(e) {
        if(e.matches && nav.matches(':popover-open')) {
            nav.hidePopover();
        }
    }

    desktopQuery.addEventListener('change', unsetPopover);
</script>