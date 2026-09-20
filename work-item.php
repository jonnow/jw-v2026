<?php include './includes/header.php'; ?>
<main id="site_content">
    <article class="work-item">
        <div class="content-container">
            <header class="layout--grid">
                <h1>Getting food from Farm to Fork</h1>
                <h2 class="subheading">Case study</h2>
                <p>Working on a contract for the Foods Standards Agency (FSA) to redesign back office processes that get our food out of the field and onto our plates. I was an Interaction Design & User Research for several short projects. I conducted user interviews with FSA Inspectors, attended a site inspection and designed and prototyped several new systems to support FSA processes.</p>
                <ul class="tags">
                    <li><a class="pill" href="/work?tag=design">Design</a></li>
                    <li><a class="pill" href="/work?tag=prototyping">Prototyping</a></li>
                    <li><a class="pill" href="/work?tag=user-research">User research</a></li>
                </ul>
                <img src="./public/images/work-item.png" alt="knife and fork next to a browser window"/>
            </header>
            <nav class="contents">
                <h3>Contents</h3>
                <ol>
                    <li><a href="#overview">Overview</a></li>
                    <li><a href="#user_research">User research</a></li>
                    <li><a href="#impact">Impact</a></li>
                    <li><a href="#summary">Summary</a></li>
                </ol>
            </nav>
            <div class="post-body">
                <section id="overview" class="layout--grid">
                    <h2>1. Overview</h2>
                    <h3>The problem</h3>
                    <p>Working on a contract for the Foods Standards Agency (FSA) to redesign back office processes that get our food out of the field and onto our plates. I was an Interaction Design & User Research for several short projects. I conducted user interviews with FSA Inspectors, attended a site inspection and designed and prototyped several new systems to support FSA processes.</p>
                    <h3>What I did</h3>
                    <p>I was an Interaction Design & User Research for several short projects. I conducted user interviews with FSA Inspectors, attended a site inspection and designed and prototyped several new systems to support FSA processes.</p>
                    <div class="row row-2 image-container">
                        <img alt="Alt tag for this image" src=""/>
                        <img alt="Alt tag for this image" src=""/>
                    </div>
                </section>
                <section id="user_research" class="layout--grid">
                    <h2>2. User research</h2>
                    <p>Working on a contract for the Foods Standards Agency (FSA) to redesign back office processes that get our food out of the field and onto our plates. I was an Interaction Design & User Research for several short projects. I conducted user interviews with FSA Inspectors, attended a site inspection and designed and prototyped several new systems to support FSA processes.</p>
                    <div class="row row-1 image-container">
                        <img alt="alt tag for this image" src=""/>
                    </div>
                    <div class="polaroids">
                        <img alt="alt tag for this image" src=""/>
                        <img alt="alt tag for this image" src=""/>
                        <img alt="alt tag for this image" src=""/>
                        <img alt="alt tag for this image" src=""/>
                        <img alt="alt tag for this image" src=""/>
                    </div>
                </section>
                <section id="impact" class="layout--grid">
                    <h2>3. Impact and what I learned</h2>
                    <p>A single brief introductory sentence to say how great everything was. Probably two sentences to go over more than one line.</p>
                    <ul>
                        <li>Outcome one</li>
                        <li>Outcome the second</li>
                        <li>Reduced administrative processing time by 50%</li>
                    </ul>
                    <div class="call-out-box">
                        <h3>What I would do differently</h3>
                        <p>Ask for more money and less time at work. This is a takeaway for me, to show growth and as a method of personal reflection. It’s open to the world, so how honest it should be is debateable. But a real learning would be a good idea....if you can remember back that far.</p>
                    </div>
                </section>
            </div>
            <aside class="project-wrap">
                <h4>Behind the scenes, beyond the project</h4>
                <div class="row">
                    <a href="#">
                        <h5>How it's built</h5>
                        <p>Interested in how I built this website?
                            Check out the repo on Github or read more on the blog.</p>
                    </a>
                    <a href="#">
                        <h5>From the blog</h5>
                        <p>Read from my musings, ramblings, and witterings.</p>
                    </a>
                </div>
            </aside>
        </div>
    </article>
</main>
<?php include './includes/footer.php'; ?>
<!--
Include this for pinned support
<script>
    const el = document.querySelector(".contents")
    const observer = new IntersectionObserver(
        ([e]) => e.target.classList.toggle("is-pinned", e.intersectionRatio < 1),
        { threshold: [1] }
    );

    observer.observe(el);
</script>
-->