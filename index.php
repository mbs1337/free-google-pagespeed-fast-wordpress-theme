<?php
/**
 * The main template file
 *
 * @package mbsTECH
 */

get_header();
?>

<!-- Hero Section with Animated Text -->
<div class="hero-section-modern">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-7">
                <h1 class="hero-title mb-4">
                    Lorem ipsum dolor sit amet. <br /> Consectetur adipiscing elit sed do.
                    <span class="highlight-gradient">Lorem</span>
                    ipsum dolor
                </h1>
                <p class="hero-lead mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="hero-cta d-flex flex-wrap gap-3">
                    <a href="#services" class="btn btn-primary btn-lg">
                        Lorem ipsum
                    </a>
                    <a href="<?php echo esc_url( home_url( '/skills/' ) ); ?>" class="btn btn-secondary btn-lg">
                        Dolor sit
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div class="code-preview-card">
                    <div class="code-preview-header">
                        <span class="code-dot"></span>
                        <span class="code-dot"></span>
                        <span class="code-dot"></span>
                    </div>
                    <pre class="code-preview-content"><code class="language-php">class WebDeveloper {
  private $experience = 25;
  private $passion = 'technology';
  private $creativity = true;

  public function buildSolutions() {
    return $this->experience
         . $this->passion
         . $this->creativity;
  }

  public function getSkills() {
    return [
      'WordPress', 'PHP', 'SQL',
      'HTML', 'CSS', 'JavaScript'
    ];
  }
}</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tab Section - Services Overview -->
<section id="services" class="tab-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Lorem ipsum</h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur</p>
        </div>

        <div class="tabs-container">
            <div class="tabs-nav" role="tablist">
                <button class="tab-button active" data-tab="wordpress" role="tab">
                <svg width="24" height="24" fill="white" viewBox="0 0 16 16">
                                <g transform="scale(0.1662)">
                                    <path d="M48.122,0C21.587,0,0.001,21.585,0.001,48.118c0,26.535,21.587,48.122,48.12,48.122c26.532,0,48.117-21.587,48.117-48.122 C96.239,21.586,74.654,0,48.122,0z M4.857,48.118c0-6.271,1.345-12.227,3.746-17.606l20.638,56.544 C14.81,80.042,4.857,65.243,4.857,48.118z M48.122,91.385c-4.247,0-8.346-0.623-12.222-1.763L48.88,51.903l13.301,36.433 c0.086,0.215,0.191,0.411,0.308,0.596C57.992,90.514,53.16,91.385,48.122,91.385z M54.083,27.834 c2.604-0.137,4.953-0.412,4.953-0.412c2.33-0.276,2.057-3.701-0.277-3.564c0,0-7.007,0.549-11.532,0.549 c-4.25,0-11.396-0.549-11.396-0.549c-2.332-0.137-2.604,3.427-0.273,3.564c0,0,2.208,0.275,4.537,0.412l6.74,18.469l-9.468,28.395 L21.615,27.835c2.608-0.136,4.952-0.412,4.952-0.412c2.33-0.275,2.055-3.702-0.278-3.562c0,0-7.004,0.549-11.53,0.549 c-0.813,0-1.77-0.021-2.784-0.052C19.709,12.611,33.008,4.856,48.122,4.856c11.265,0,21.519,4.306,29.215,11.357 c-0.187-0.01-0.368-0.035-0.562-0.035c-4.248,0-7.264,3.702-7.264,7.679c0,3.564,2.055,6.582,4.248,10.146 c1.647,2.882,3.567,6.585,3.567,11.932c0,3.704-1.422,8-3.293,13.986l-4.315,14.421L54.083,27.834z M69.871,85.516l13.215-38.208 c2.471-6.171,3.29-11.106,3.29-15.497c0-1.591-0.104-3.07-0.292-4.449c3.38,6.163,5.303,13.236,5.301,20.758 C91.384,64.08,82.732,78.016,69.871,85.516z"></path>
                                </g>
                            </svg>
                    Lorem
                </button>
                <button class="tab-button" data-tab="webapp" role="tab">
                <svg width="24" height="24" fill="white" viewBox="0 0 16 16">
                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"></path>
                                </svg>
                    Ipsum
                </button>
                <button class="tab-button" data-tab="support" role="tab">
                <svg width="24" height="24" fill="white" viewBox="0 0 16 16">
                                    <path d="M8 1a6 6 0 0 0-6 6v3a2 2 0 0 0 2 2h1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3V7a5 5 0 0 1 10 0v1h-2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h1a2 2 0 0 0 2-2V7a6 6 0 0 0-6-6z"></path>
                                    <path d="M5 12.5a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 .5.5v.5A1.5 1.5 0 0 1 6 14.5H5a.5.5 0 0 1 0-1h1a.5.5 0 0 0 .5-.5v-.5H5.5a.5.5 0 0 1-.5-.5z"></path>
                                </svg>
                    Dolor
                </button>
            </div>

            <div class="tabs-content">
                <div class="tab-pane active" id="wordpress" role="tabpanel">
                    <div class="row align-items-start">
                        <div class="col-lg-6">
                            <h3 class="mb-3">Lorem</h3>
                            <p class="text-muted mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed do eiusmod tempor incididunt ut labore.
                            </p>
                            <ul class="feature-list pb-4">
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Lorem ipsum dolor sit</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Consectetur adipiscing elit</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Sed do eiusmod tempor</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Ut labore et dolore</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="code-example-card">
                                <div class="code-example-header">functions.php</div>
                                <pre class="code-example-content"><code class="language-php">add_action('init', function () {
    register_post_type('project', [
        'labels' => [
            'name'          => __('Projects', 'theme'),
            'singular_name' => __('Project', 'theme'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'show_in_rest' => true,
        'supports'     => ['title', 'editor', 'thumbnail'],
        'rewrite'      => ['slug' => 'projects'],
    ]);
});</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="webapp" role="tabpanel">
                    <div class="row align-items-start">
                        <div class="col-lg-6">
                            <h3 class="mb-3">Ipsum</h3>
                            <p class="text-muted mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Ut enim ad minim veniam, quis nostrud exercitation.
                            </p>
                            <ul class="feature-list pb-4">
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Lorem ipsum dolor sit</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Consectetur adipiscing elit</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Sed do eiusmod tempor</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Ut labore et dolore</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="code-example-card">
                                <div class="code-example-header">server.js</div>
                                <pre class="code-example-content"><code class="language-javascript">import express from 'express';
import pool from './db.js';

const app = express();

app.get('/api/projects', async (req, res) => {
  try {
    const { rows } = await pool.query(
      'SELECT * FROM projects WHERE status = $1',
      ['active']
    );
    res.json({ success: true, data: rows });
  } catch (error) {
    res.status(500).json({ success: false });
  }
});

app.listen(process.env.PORT || 3000);</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="support" role="tabpanel">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="mb-3">Dolor</h3>
                            <p class="text-muted mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Duis aute irure dolor in reprehenderit in voluptate.
                            </p>
                            <ul class="feature-list pb-4">
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Lorem ipsum dolor sit</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Consectetur adipiscing elit</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Sed do eiusmod tempor</li>
                                <li><svg width="16" height="16" fill="var(--primary-green)" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg> Ut labore et dolore</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="support-metrics">
                                <div class="metric-card">
                                    <div class="metric-value">10+</div>
                                    <div class="metric-label">Lorem years</div>
                                </div>
                                <div class="metric-card">
                                    <div class="metric-value">100+</div>
                                    <div class="metric-label">Demo projects</div>
                                </div>
                                <div class="metric-card">
                                    <div class="metric-value">99%</div>
                                    <div class="metric-label">Ipsum rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Swiper/Slider Section - Technology Stack -->
<section class="swiper-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Lorem ipsum</h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur</p>
        </div>

        <div class="tech-swiper-container">
            <div class="tech-swiper">
                <div class="swiper-slide active">
                    <div class="tech-category">
                        <h3 class="tech-category-title">
                            Lorem
                        </h3>
                        <div class="tech-grid">
                        <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/rwd-icon.png' ); ?>" alt="RWD"></span>
                                <span class="tech-name">RWD</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/css3-icon.png' ); ?>" alt="CSS3"></span>
                                <span class="tech-name">CSS3</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/figma-icon.png' ); ?>" alt="Figma"></span>
                                <span class="tech-name">Figma</span>
                                <span class="tech-level">★★★☆☆</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="tech-category">
                        <h3 class="tech-category-title">
                            Ipsum dolor
                        </h3>
                        <div class="tech-grid">
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/php-icon.png' ); ?>" alt="PHP"></span>
                                <span class="tech-name">PHP</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/mysql-icon.png' ); ?>" alt="MySQL"></span>
                                <span class="tech-name">MySQL</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/python-icon.png' ); ?>" alt="Python"></span>
                                <span class="tech-name">Python</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="tech-category">
                        <h3 class="tech-category-title">
                            Sit amet
                        </h3>
                        <div class="tech-grid">
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/wp-icon.png' ); ?>" alt="WordPress"></span>
                                <span class="tech-name">WordPress</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/e-studio-e-icon.png' ); ?>" alt="Custom Shop"></span>
                                <span class="tech-name">Custom Shop</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/wc-icon.png' ); ?>" alt="WooCommerce"></span>
                                <span class="tech-name">WooCommerce</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="tech-category">
                        <h3 class="tech-category-title">
                            Consectetur
                        </h3>
                        <div class="tech-grid">
                        <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/linux-icon.png' ); ?>" alt="Linux"></span>
                                <span class="tech-name">Linux</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/mcp-icon.png' ); ?>" alt="MCP"></span>
                                <span class="tech-name">MCP</span>
                                <span class="tech-level">★★★★☆</span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/docker-icon.png' ); ?>" alt="Docker"></span>
                                <span class="tech-name">Docker</span>
                                <span class="tech-level">★★★☆☆</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-dots"></div>
        <p class="text-center pt-5"><a href="<?php echo esc_url( home_url( '/skills/' ) ); ?>">View all</a></p>
    </div>
</section>

<!-- Recent Blog Posts -->
<section class="recent-posts py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Dolor sit amet</h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
        </div>

        <?php
        // Query posts from "Home" category
        $home_query = new WP_Query([
            'category_name' => 'home',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC'
        ]);

        if ($home_query->have_posts()) : ?>
            <div class="blog-posts-container">
                <div class="row blog-posts-row">
                    <?php
                    $post_count = 0;
                    while ($home_query->have_posts()) : $home_query->the_post();
                        $post_count++;

                        if ($post_count === 1) :
                    ?>
                        <div class="col-12 mb-0 mb-sm-4 blog-post-slide">
                        <article class="post-card post-card-featured">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail mb-3">
                                    <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                                </div>
                            <?php endif; ?>

                            <?php mbstech_post_categories(); ?>

                            <h2 class="mb-3">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <?php mbstech_post_meta(); ?>

                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                Read more
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="ms-2">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </article>
                        </div>
                    <?php else : ?>
                        <div class="col-md-6 col-lg-4 mb-4 blog-post-slide">
                        <article class="post-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail mb-3">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php mbstech_post_categories(); ?>

                            <h3 class="h5">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <?php mbstech_post_meta(); ?>

                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-success">
                                Read More
                            </a>
                        </article>
                        </div>
                    <?php
                        endif;

                        if ($post_count >= 7) break;
                    endwhile;
                    ?>
                </div>
                <div class="blog-swiper-dots"></div>
            </div>

            <?php mbstech_pagination(); ?>

        <?php
            wp_reset_postdata(); // Reset post data after custom query
        else : ?>
            <div class="row">
                <div class="col-12">
                    <div class="no-posts text-center py-5">
                        <h2>No posts yet</h2>
                        <p class="text-muted">Nothing here right now. Check back later.</p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Quick Code Snippets Section -->
<section class="code-snippets-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Lorem ipsum dolor</h2>
            <p class="section-subtitle">Sed do eiusmod tempor incididunt ut labore et dolore</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="snippet-card">
                    <div class="snippet-header">
                        <span class="snippet-lang">PHP</span>
                        <h4>Lorem ipsum</h4>
                    </div>
                    <pre class="snippet-code"><code class="language-php">$q = new WP_Query([
  'post_type' => 'project',
  'posts_per_page' => 6,
  'meta_key' => 'featured',
  'meta_value' => '1',
]);

while ($q->have_posts()) {
  $q->the_post();
  echo esc_html(get_the_title());
}
wp_reset_postdata();</code></pre>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="snippet-card">
                    <div class="snippet-header">
                        <span class="snippet-lang">JavaScript</span>
                        <h4>Dolor sit amet</h4>
                    </div>
                    <pre class="snippet-code"><code class="language-javascript">async function fetchData(url) {
  const res = await fetch(url, {
    credentials: 'same-origin',
  });
  if (!res.ok) {
    throw new Error(res.statusText);
  }
  return res.json();
}</code></pre>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="snippet-card">
                    <div class="snippet-header">
                        <span class="snippet-lang">SQL</span>
                        <h4>Consectetur elit</h4>
                    </div>
                    <pre class="snippet-code"><code class="language-sql">SELECT p.id, p.title,
  COUNT(c.id) AS comments
FROM posts p
LEFT JOIN comments c
  ON c.post_id = p.id
WHERE p.status = 'published'
GROUP BY p.id
ORDER BY comments DESC
LIMIT 5;</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Journey Section -->
<section class="timeline-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Lorem ipsum</h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker">1999</div>
                <div class="timeline-content">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="timeline-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">PHP</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">2004</div>
                <div class="timeline-content">
                    <h4>Dolor sit amet</h4>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="timeline-tags">
                        <span class="tag">WordPress</span>
                        <span class="tag">Themes</span>
                        <span class="tag">CMS</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">2011</div>
                <div class="timeline-content">
                    <h4>Consectetur elit</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="timeline-tags">
                        <span class="tag">RWD</span>
                        <span class="tag">Bootstrap</span>
                        <span class="tag">jQuery</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">2014</div>
                <div class="timeline-content">
                    <h4>Adipiscing elit</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="timeline-tags">
                        <span class="tag">WooCommerce</span>
                        <span class="tag">Webshops</span>
                        <span class="tag">Commerce</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">2021</div>
                <div class="timeline-content">
                    <h4>Sed do eiusmod</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <div class="timeline-tags">
                        <span class="tag">Linux</span>
                        <span class="tag">Docker</span>
                        <span class="tag">Hosting</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">2026</div>
                <div class="timeline-content">
                    <h4>Tempor incididunt</h4>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    <div class="timeline-tags">
                        <span class="tag">AI</span>
                        <span class="tag">Tools</span>
                        <span class="tag">Automation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5 my-5">
    <div class="container">
        <div class="cta-card">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="cta-title mb-3">Lorem ipsum dolor sit amet?</h2>
                    <p class="cta-text mb-lg-0">
                        Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#" id="get-in-touch-link" class="btn btn-primary btn-lg mb-2" rel="nofollow" aria-describedby="get-in-touch-popover" role="button">
                        Lorem ipsum
                    </a>
                    <br class="d-block d-lg-none">
                    <a href="<?php echo esc_url( home_url( '/work/#portfolio' ) ); ?>" class="btn btn-secondary btn-lg">
                        Dolor sit
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

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

<?php get_footer(); ?>
