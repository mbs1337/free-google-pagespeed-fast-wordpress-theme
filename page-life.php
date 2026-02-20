<?php
/**
 * Template Name: Life Page
 * Template for displaying personal life and interests
 *
 * @package mbsTECH
 */

get_header();
?>

<div class="life-page py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>

            <!-- Life Description -->
            <div class="skills-intro text-center mb-5 py-4">
                <h1 class="hero-title mb-4">Lorem <span class="highlight-gradient">Ipsum</span> Dolor</h1>
                <p class="hero-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br /><br />Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris.</p>
            </div>

            <!-- Interests Section -->
            <section class="interests-section mt-5">
                <h2 class="mb-4 text-center">Lorem Ipsum</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🔬</span>
                                Lorem Ipsum
                            </h3>
                            <p class="text-muted">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🌐</span>
                                Dolor Sit Amet
                            </h3>
                            <p class="text-muted">
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🧘</span>
                                Consectetur Adipiscing
                            </h3>
                            <p class="text-muted">
                                Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid commodi.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🎵</span>
                                Sed Eiusmod
                            </h3>
                            <p class="text-muted">
                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">📚</span>
                                Tempor Incididunt
                            </h3>
                            <p class="text-muted">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🌍</span>
                                Labore Et Dolore
                            </h3>
                            <p class="text-muted">
                                Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

  <!-- CTA Section -->
  <section class="cta-section mt-5 pt-5 text-center">
                <div class="post-card">
                    <h2 class="mb-4">Dolor Sit Amet</h2>
                    <p class="lead text-muted mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                    <a href="#" id="get-in-touch-link" class="btn btn-primary" rel="nofollow" aria-describedby="get-in-touch-popover" role="button">
                        Lorem Ipsum
                    </a>
                        <a href="<?php echo esc_url(home_url('/skills/')); ?>" class="btn btn-secondary">Dolor Sit</a>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
	var getInTouchLink = document.getElementById('get-in-touch-link');
	if (!getInTouchLink || typeof window.bootstrap === 'undefined' || !window.bootstrap.Popover) {
		return;
	}

	var emailLocalPart = 'hello';
	var emailDomain = 'example.com';
	var emailAddress = emailLocalPart + '@' + emailDomain;

	var popover = new window.bootstrap.Popover(getInTouchLink, {
		trigger: 'click',
		placement: 'bottom',
		container: 'body',
		customClass: 'connect-popover',
		html: true,
		sanitize: false,
		content: '<div class="d-flex align-items-center gap-2" id="get-in-touch-popover">' +
			'<code class="px-1">' + emailAddress + '</code>' +
			'<button type="button" class="btn btn-sm btn-primary" id="copy-email-btn-cta" aria-label="Copy email">Copy</button>' +
		'</div>'
	});

	getInTouchLink.addEventListener('click', function (e) {
		e.preventDefault();
	});

	getInTouchLink.addEventListener('shown.bs.popover', function () {
		var copyBtn = document.getElementById('copy-email-btn-cta');
		if (!copyBtn) return;
		copyBtn.addEventListener('click', function () {
			var restoreText = function (text) {
				setTimeout(function () { copyBtn.textContent = text; }, 1500);
			};
			if (navigator.clipboard && navigator.clipboard.writeText) {
				navigator.clipboard.writeText(emailAddress).then(function () {
					var oldText = copyBtn.textContent;
					copyBtn.textContent = 'Copied';
					restoreText(oldText);
				}).catch(function () {
					var oldText = copyBtn.textContent;
					copyBtn.textContent = 'Error';
					restoreText(oldText);
				});
			} else {
				// Fallback: create a temporary input for older browsers
				var temp = document.createElement('input');
				temp.value = emailAddress;
				document.body.appendChild(temp);
				temp.select();
				try { document.execCommand('copy'); } catch (err) {}
				document.body.removeChild(temp);
				var oldText = copyBtn.textContent;
				copyBtn.textContent = 'Copied';
				setTimeout(function () { copyBtn.textContent = oldText; }, 1500);
			}
		});
	});
});
</script>


<!-- Timeline Section -->
<section class="timeline-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Consectetur</h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet</p>
        </div>

        <div class="timeline">
            <!-- Period 1 -->
            <div class="timeline-item">
                <div class="timeline-marker">2015</div>
                <div class="timeline-content">
                    <h4>Lorem Ipsum</h4>
                    <ul class="mb-0">
                        <li>Project Alpha</li>
                        <li>Project Beta</li>
                        <li>Project Gamma</li>
                        <li>Project Delta</li>
                    </ul>
                </div>
            </div>

            <!-- Period 2 -->
            <div class="timeline-item">
                <div class="timeline-marker">2017</div>
                <div class="timeline-content">
                    <h4>Dolor Sit Amet</h4>
                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                </div>
            </div>

            <!-- Period 3 -->
            <div class="timeline-item timeline-item-party">
                <div class="timeline-marker">2019</div>
                <div class="timeline-content">
                    <h4>Consectetur</h4>
                    <p class="mb-0" style="color: var(--primary-green); font-weight: 600;">Adipiscing Elit!</p>
                </div>
            </div>

            <!-- Period 4 -->
            <div class="timeline-item">
                <div class="timeline-marker">2021</div>
                <div class="timeline-content">
                    <h4>Sed Eiusmod</h4>
                    <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                </div>
            </div>

            <!-- Period 5 -->
            <div class="timeline-item timeline-item-current">
                <div class="timeline-marker">Now</div>
                <div class="timeline-content">
                    <h4>Present Day</h4>
                    <p class="text-muted">Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Additional styles for timeline projects on Life page */
    .timeline-projects {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-top: 1rem;
    }

    .timeline-project {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: rgba(46, 152, 27, 0.05);
        border-radius: 8px;
        border: 1px solid transparent;
        transition: all 0.2s ease;
    }

    .timeline-project:hover {
        background: rgba(46, 152, 27, 0.1);
        border-color: var(--primary-green);
    }

    .timeline-project img {
        border-radius: 8px;
        padding: 5px;
        height: 80px;
        width: auto;
        flex-shrink: 0;
    }

    .timeline-project a {
        color: var(--primary-green);
        text-decoration: none;
        font-weight: 600;
    }

    .timeline-project a:hover {
        text-decoration: underline;
    }

    .timeline-item-party .timeline-content {
        text-align: left;
        background: linear-gradient(135deg, var(--card-bg) 0%, rgba(46, 152, 27) 100%);
    }

    .timeline-content ul {
        padding-left: 1.5rem;
        color: var(--light-text);
    }

    .timeline-content ul li {
        padding: 0.25rem 0;
    }

    @media (max-width: 768px) {
        .timeline-project {
            gap: 0.55rem;
            padding: 0.55rem;
        }

        .timeline-project img {
            height: 40px;
        }
    }
</style>

<!-- Quote Section -->
<div class="life-page py-5">
    <div class="container">
        <section class="quote-section mt-5 pt-4 pb-5 text-center">
            <div class="post-card">
                <blockquote class="blockquote mb-0">
                    <p class="h4 mb-4">"Lorem ipsum dolor sit amet consectetur!"</p>
                    <footer class="blockquote-footer text-muted">
                        Your Name Here
                    </footer>
                </blockquote>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
