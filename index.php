<?php include('./includes/header.php') ?>
    <main id="content" role="main">
        <section class="hero hero--full-size">
            <h1>Designer &amp; Developer</h1>
            <p class="hero-intro">Hello! I'm Jonno Witts, a Software Designer and Developer based in Oxfordshire, England.</p>
            <p>This is my personal website where I share things I've worked on and my personal feed of personal interests, with an occasional writing thrown in for good measure.</p>
            <img src="/images/hello.svg" alt="Illustration of an Apple Macintosh with the text 'hello' on the display in a handwritten font.">
        </section>
        <section class="feed">
            <h2>Hot off the press!</h2>
            <div class="the-loop">
                <article data-type="photo">
                    <label class="type">Photo</label>
                    <img alt="alt tag for the image" />
                </article>
                <article data-type="work">
                    <label class="type">Work</label>
                    <h1>Project title</h1>
                    <img alt="alt tag for the image" />
                </article>
                <article data-type="photo">
                    <label class="type">Photo</label>
                    <img alt="alt tag for the image" />
                </article>
                <article data-type="work">
                    <label class="type">Work</label>
                    <h1>Project title</h1>
                    <img alt="alt tag for the image" />
                </article>
                <article data-type="post">
                    <label class="type">Notes</label>
                    <h1>Blog post title</h1>
                    <time datetime="2026-08-21">21 August 2026</time>
                    <p class="excerpt">The introductory paragraph, a.k.a “snippet” to an interesting blog post. Long enough to garner interest, short enough to fit in here.</p>
                    <ul class="tag-selection">
                        <li><a href="#">Thing 1</a></li>
                        <li><a href="#">Thing 2</a></li>
                        <li><a href="#">Thing 3</a></li>
                    </ul>
                </article>
                <article data-type="photo">
                    <label class="type">Photo</label>
                    <img alt="alt tag for the image" />
                </article>
            </div>
            <a href="blog">Visit the feed</a>
        </section>
    </main>
<?php include './includes/footer.php'; ?>