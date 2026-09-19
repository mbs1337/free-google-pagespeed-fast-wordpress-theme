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
                <h1 class="hero-title mb-4">Lorem <span class="highlight-gradient">Life</span> Ipsum</h1>
                <p class="hero-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br /><br />Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            </div>

            <!-- Interests Section -->
            <section class="interests-section mt-5">
                <h2 class="mb-4 text-center">Lorem ipsum</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🔬</span>
                                Lorem ipsum
                            </h3>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🌐</span>
                                Dolor sit amet
                            </h3>
                            <p class="text-muted">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🧘</span>
                                Consectetur elit
                            </h3>
                            <p class="text-muted">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🎵</span>
                                Sed do eiusmod
                            </h3>
                            <p class="text-muted">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">📚</span>
                                Tempor incididunt
                            </h3>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🌍</span>
                                Ut labore magna
                            </h3>
                            <p class="text-muted">
                                Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

  <!-- CTA Section -->
  <section class="cta-section mt-5 pt-5 text-center">
                <div class="post-card">
                    <h2 class="mb-4">Lorem ipsum dolor sit amet?</h2>
                    <p class="lead text-muted mb-4">
                        Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                    <a href="#" id="get-in-touch-link" class="btn btn-primary" rel="nofollow" aria-describedby="get-in-touch-popover" role="button">
                       Lorem ipsum
                    </a>
                        <a href="<?php echo esc_url(home_url('/work/')); ?>" class="btn btn-secondary">Dolor sit</a>
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
            <h2 class="section-title">Lorem ipsum</h2>
            <p class="section-subtitle">Lorem ipsum timeline placeholder</p>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker">1999 to 2002</div>
                <div class="timeline-content">
                    <h4>Lorem ipsum</h4>
                    <ul class="mb-0">
                        <li>Demo Project Alpha</li>
                        <li>Demo Project Beta</li>
                        <li>Demo Project Gamma</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">2002 to 2007</div>
                <div class="timeline-content">
                    <h4>Dolor sit amet</h4>
                    <div class="timeline-projects">
                        <div class="timeline-project">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/mr-fister.png' ); ?>" alt="Demo Project">
                            <div>
                                <a href="#">Demo Design One</a>
                                <small class="d-block text-muted">2002-2007</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/pages-online.png' ); ?>" alt="Demo Project">
                            <div>
                                <a href="#">Demo Design Two</a>
                                <small class="d-block text-muted">2003-2005</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-item timeline-item-party">
                <div class="timeline-marker">2007 to 2014</div>
                <div class="timeline-content">
                    <h4>Consectetur elit</h4>
                    <p class="party-tagline">LOREM IPSUM, Y'ALL!!!
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">2014 to 2023</div>
                <div class="timeline-content">
                    <h4>Sed do eiusmod</h4>
                    <div class="timeline-projects">
                        <div class="timeline-project">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/powercube.dk.png' ); ?>" alt="Demo Client">
                            <div>
                                <a href="#">Demo Client One</a>
                                <small class="d-block text-muted">2014-2020</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/vestas.png' ); ?>" alt="Demo Client">
                            <div>
                                <a href="#">Demo Client Two</a>
                                <small class="d-block text-muted">2014-2015</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/ceramicspeed.png' ); ?>" alt="Demo Client">
                            <div>
                                <a href="#">Demo Client Three</a>
                                <small class="d-block text-muted">2016-2017</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">2011 to 202x</div>
                <div class="timeline-content">
                    <h4>Tempor incididunt</h4>
                    <div class="timeline-projects">
                        <div class="timeline-project">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/big-e-small.png' ); ?>" alt="Demo Project">
                            <div>
                                <a href="#">Demo Current One</a>
                                <small class="d-block text-muted">2019-202x</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/surfsmart.dk.png' ); ?>" alt="Demo Project">
                            <div>
                                <a href="#">Demo Current Two</a>
                                <small class="d-block text-muted">2011-202x</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section mt-5 pt-4 pb-5 text-center">
    <div class="container">
        <div class="post-card">
            <blockquote class="blockquote mb-0">
                <p class="h4 mb-4">"Lorem ipsum dolor sit amet!"</p>
                <footer class="blockquote-footer text-muted">
                    Demo Author
                </footer>
            </blockquote>
        </div>
    </div>
</section>

<?php get_footer(); ?>
