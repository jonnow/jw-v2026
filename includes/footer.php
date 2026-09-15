<?php
function write_copyright_notice() {
    $year = date('Y');
    echo '<p class="copyright">&copy; All images, content and code copyright Jonno Witts, ' . $year . '</p>';
}
?>

<footer>
    <?php include './includes/thanks.php'; ?>
    <section>
        <p class="footer-name">Jonno Witts</p>
        <ul>
            <li><a class="pill" href="http://jonnowitts.com/contact">Get in touch</a></li>
            <li><a class="pill" href="http://github.com/jonnow">Github</a></li>
            <li><a class="pill" href="http://codepen.io/jonnowitts">CodePen</a></li>
            <li><a class="pill" href="http://jonnowitts.com/feed.xml">RSS Feed</a></li>
        </ul>
        <?php write_copyright_notice() ?>
    </section>
</footer>
</body>
</html>