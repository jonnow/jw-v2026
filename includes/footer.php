<?php
function write_copyright_notice() {
    $year = date('Y');
    echo '<p class="copyright">&copy; All images, content and code copyright Jonno Witts, ' . $year . '</p>';
}
?>

<footer>
    <section class="current-activity">
        <canvas id="current_activity" aria-label="Visual display of current activity">
            Current activity visual display
        </canvas>
    </section>
    <section class="thanks">
        <img alt="picture of the author" src="" />
        <p>Thanks for stopping by!</p>
    </section>
    <section>
        <p class="footer-name">Jonno Witts</p>
        <ul>
            <li><a href="http://jonnowitts.com/contact">Get in touch</a></li>
            <li><a href="http://github.com/jonnow">Github</a></li>
            <li><a href="http://codepen.io/jonnowitts">CodePen</a></li>
            <li><a href="http://jonnowitts.com/feed.xml">RSS Feed</a></li>
        </ul>
        <?php write_copyright_notice() ?>
    </section>
</footer>
</body>
</html>