<?php
/**
 * Template Name: Work Page
 * Template for displaying work and portfolio
 *
 * @package mbsTECH
 */

get_header();
?>

<div class="work-page py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>

            <!-- Work Description -->
            <div class="skills-intro text-center mb-5 py-4">
                <h1 class="hero-title mb-4">Lorem & <span class="highlight-gradient">Ipsum</span></h1>
                <p class="hero-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                <br /><br />Ut enim ad minim veniam quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
            </div>

            <!-- Featured Projects Section -->
            <section class="projects-section mt-5">
                <h2 class="mb-4 text-center">Dolor Sit</h2>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                            <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                <g transform="scale(0.1662)">
                                    <path d="M48.122,0C21.587,0,0.001,21.585,0.001,48.118c0,26.535,21.587,48.122,48.12,48.122c26.532,0,48.117-21.587,48.117-48.122 C96.239,21.586,74.654,0,48.122,0z M4.857,48.118c0-6.271,1.345-12.227,3.746-17.606l20.638,56.544 C14.81,80.042,4.857,65.243,4.857,48.118z M48.122,91.385c-4.247,0-8.346-0.623-12.222-1.763L48.88,51.903l13.301,36.433 c0.086,0.215,0.191,0.411,0.308,0.596C57.992,90.514,53.16,91.385,48.122,91.385z M54.083,27.834 c2.604-0.137,4.953-0.412,4.953-0.412c2.33-0.276,2.057-3.701-0.277-3.564c0,0-7.007,0.549-11.532,0.549 c-4.25,0-11.396-0.549-11.396-0.549c-2.332-0.137-2.604,3.427-0.273,3.564c0,0,2.208,0.275,4.537,0.412l6.74,18.469l-9.468,28.395 L21.615,27.835c2.608-0.136,4.952-0.412,4.952-0.412c2.33-0.275,2.055-3.702-0.278-3.562c0,0-7.004,0.549-11.53,0.549 c-0.813,0-1.77-0.021-2.784-0.052C19.709,12.611,33.008,4.856,48.122,4.856c11.265,0,21.519,4.306,29.215,11.357 c-0.187-0.01-0.368-0.035-0.562-0.035c-4.248,0-7.264,3.702-7.264,7.679c0,3.564,2.055,6.582,4.248,10.146 c1.647,2.882,3.567,6.585,3.567,11.932c0,3.704-1.422,8-3.293,13.986l-4.315,14.421L54.083,27.834z M69.871,85.516l13.215-38.208 c2.471-6.171,3.29-11.106,3.29-15.497c0-1.591-0.104-3.07-0.292-4.449c3.38,6.163,5.303,13.236,5.301,20.758 C91.384,64.08,82.732,78.016,69.871,85.516z"></path>
                                </g>
                            </svg>
                            </div>
                            <h3 class="h5">Service One</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            <ul class="list-unstyled text-muted">
                                <li>✓ Lorem ipsum dolor</li>
                                <li>✓ Consectetur adipiscing</li>
                                <li>✓ Sed eiusmod tempor</li>
                                <li>✓ Incididunt labore</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                </svg>
                            </div>
                            <h3 class="h5">Service Two</h3>
                            <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas</p>
                            <ul class="list-unstyled text-muted">
                                <li>✓ Neque porro quisquam</li>
                                <li>✓ Qui dolorem ipsum</li>
                                <li>✓ Sit amet consectetur</li>
                                <li>✓ Adipisci velit</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M8 1a6 6 0 0 0-6 6v3a2 2 0 0 0 2 2h1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3V7a5 5 0 0 1 10 0v1h-2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h1a2 2 0 0 0 2-2V7a6 6 0 0 0-6-6z"/>
                                    <path d="M5 12.5a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 .5.5v.5A1.5 1.5 0 0 1 6 14.5H5a.5.5 0 0 1 0-1h1a.5.5 0 0 0 .5-.5v-.5H5.5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                            <h3 class="h5">Service Three</h3>
                            <p class="text-muted">Ut enim ad minima veniam quis nostrum</p>
                            <ul class="list-unstyled text-muted">
                                <li>✓ Quis autem vel eum</li>
                                <li>✓ Reprehenderit qui</li>
                                <li>✓ In ea voluptate</li>
                                <li>✓ Velit esse quam</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v8A1.5 1.5 0 0 1 14.5 11H1.5A1.5 1.5 0 0 1 0 9.5v-8zm1.5-.5a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-13z"/>
                                    <path d="M0 12.5h16V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-1.5z"/>
                                </svg>
                            </div>
                            <h3 class="h5">Service Four</h3>
                            <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos</p>
                            <ul class="list-unstyled text-muted">
                                <li>✓ Ducimus qui blanditiis</li>
                                <li>✓ Praesentium voluptatum</li>
                                <li>✓ Deleniti atque corrupti</li>
                                <li>✓ Quos dolores et quas</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                                </svg>
                            </div>
                            <h3 class="h5">Service Five</h3>
                            <p class="text-muted">Nam libero tempore cum soluta nobis est eligendi</p>
                            <ul class="list-unstyled text-muted">
                                <li>✓ Optio cumque nihil</li>
                                <li>✓ Impedit quo minus</li>
                                <li>✓ Id quod maxime placeat</li>
                                <li>✓ Facere possimus omnis</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                            </div>
                            <h3 class="h5">Service Six</h3>
                            <p class="text-muted">Temporibus autem quibusdam et aut officiis debitis</p>
                            <ul class="list-unstyled text-muted">
                                <li>✓ Rerum necessitatibus</li>
                                <li>✓ Saepe eveniet ut</li>
                                <li>✓ Voluptates repudiandae</li>
                                <li>✓ Sint et molestiae</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Technologies Section -->
            <section class="technologies-section mt-5 pt-5">
                <h2 class="text-center mb-4 pb-3">Amet Consectetur</h2>
                <div class="row text-center">
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Lorem</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Lorem</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Lorem</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Lorem</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Lorem</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Lorem</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Lorem</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Lorem</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section mt-5 pt-5 pb-3 text-center">
                <div class="post-card">
                    <h2 class="mb-4">Adipiscing Elit</h2>
                    <p class="lead text-muted mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                    <a href="#" id="get-in-touch-link" class="btn btn-primary" rel="nofollow" aria-describedby="get-in-touch-popover" role="button">
                        Lorem Ipsum
                    </a>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">Dolor Sit</a>
                    </div>
                </div>
            </section>

  <!-- Portfolio Filter Section -->
  <section class="portfolio-filter-section mt-5 pt-5">
                <h2 id="portfolio" class="text-center mb-4">Sed Eiusmod</h2>

                <!-- Filter Tabs -->
                <div class="filter-tabs mb-5">
                    <div class="d-flex justify-content-center gap-2 flex-wrap position-relative">
                        <button class="filter-btn" data-filter="all">All</button>
                        <button class="filter-btn" data-filter="homepage">Category A</button>
                        <button class="filter-btn" data-filter="webshop">Category B</button>
                        <button class="filter-btn" data-filter="mixed">Category C</button>
                        <button class="filter-btn" data-filter="2019">Period 1</button>
                        <button class="filter-btn" data-filter="2012">Period 2</button>
                        <button class="filter-btn-none" data-filter="none" title="Clear filter">×</button>
                    </div>
                </div>

                <!-- Empty State Message -->
                <div class="portfolio-empty-state" id="emptyState">
                    <div class="empty-state-content">
                        <p>Select a category above to view projects</p>
                    </div>
                </div>

                <!-- Portfolio Items -->
                <div class="portfolio-grid" style="display: none;">
                    <!-- Category A - Period 1 -->
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Lorem Ipsum One</h5>
                            <span class="badge bg-secondary">Category A</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Lorem Ipsum Two</h5>
                            <span class="badge bg-secondary">Category A</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Lorem Ipsum Three</h5>
                            <span class="badge bg-secondary">Category A</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Lorem Ipsum Four</h5>
                            <span class="badge bg-secondary">Category A</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>

                    <!-- Category B - Period 1 -->
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>Dolor Sit One</h5>
                            <span class="badge bg-success">Category B</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>Dolor Sit Two</h5>
                            <span class="badge bg-success">Category B</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>Dolor Sit Three</h5>
                            <span class="badge bg-success">Category B</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>Dolor Sit Four</h5>
                            <span class="badge bg-success">Category B</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>

                    <!-- Category C - Period 1 -->
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>Amet Consectetur One</h5>
                            <span class="badge bg-warning text-dark">Category C</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>Amet Consectetur Two</h5>
                            <span class="badge bg-warning text-dark">Category C</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>Amet Consectetur Three</h5>
                            <span class="badge bg-warning text-dark">Category C</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>Amet Consectetur Four</h5>
                            <span class="badge bg-warning text-dark">Category C</span>
                            <span class="badge bg-info">Period 1</span>
                        </div>
                    </div>

                    <!-- Category A - Period 2 -->
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Adipiscing One</h5>
                            <span class="badge bg-secondary">Category A</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Adipiscing Two</h5>
                            <span class="badge bg-secondary">Category A</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Adipiscing Three</h5>
                            <span class="badge bg-secondary">Category A</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Adipiscing Four</h5>
                            <span class="badge bg-secondary">Category A</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>

                    <!-- Category B - Period 2 -->
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Elit Sed One</h5>
                            <span class="badge bg-success">Category B</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Elit Sed Two</h5>
                            <span class="badge bg-success">Category B</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Elit Sed Three</h5>
                            <span class="badge bg-success">Category B</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Elit Sed Four</h5>
                            <span class="badge bg-success">Category B</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>

                    <!-- Category C - Period 2 -->
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Eiusmod Tempor One</h5>
                            <span class="badge bg-warning text-dark">Category C</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Eiusmod Tempor Two</h5>
                            <span class="badge bg-warning text-dark">Category C</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Eiusmod Tempor Three</h5>
                            <span class="badge bg-warning text-dark">Category C</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Eiusmod Tempor Four</h5>
                            <span class="badge bg-warning text-dark">Category C</span>
                            <span class="badge bg-primary">Period 2</span>
                        </div>
                    </div>
                </div>

                <style>
                    .filter-tabs {
                        margin-bottom: 2rem;
                    }

                    .filter-btn {
                        background: transparent;
                        border: 1px solid var(--border-color);
                        color: var(--text-color);
                        padding: 0.5rem 1.25rem;
                        border-radius: 6px;
                        cursor: pointer;
                        transition: all 0.2s;
                        font-size: 0.9rem;
                    }

                    .filter-btn:hover {
                        border-color: var(--primary-green);
                        color: var(--primary-green);
                    }

                    .filter-btn.active {
                        background: var(--primary-green);
                        color: white;
                        border-color: var(--primary-green);
                    }

                    .portfolio-grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                        gap: 1.5rem;
                    }

                    .portfolio-item {
                        opacity: 1;
                        transform: scale(1);
                        transition: all 0.3s;
                    }

                    .portfolio-item.hidden {
                        display: none;
                    }

                    .portfolio-card {
                        background: var(--card-bg);
                        border: 1px solid var(--border-color);
                        border-radius: 8px;
                        padding: 1.5rem;
                        height: 100%;
                        transition: all 0.2s;
                    }

                    .portfolio-card:hover {
                        border-color: var(--primary-green);
                        transform: translateY(-2px);
                        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                    }

                    .portfolio-card h5 {
                        margin-bottom: 0.75rem;
                        font-size: 1rem;
                        font-weight: 600;
                    }

                    .portfolio-card .badge {
                        font-size: 0.75rem;
                        margin-right: 0.5rem;
                    }

                    /* Custom badge colors */
                    .badge.bg-primary {
                        background-color: #ffc107 !important;
                        color: #000 !important;
                    }

                    .badge.bg-info {
                        background-color: #8b0000 !important;
                        color: #fff !important;
                    }

                    .badge.bg-secondary {
                        background-color: #6c757d !important;
                        color: #fff !important;
                    }

                    .badge.bg-success {
                        background-color: #1a1a1a !important;
                        color: #fff !important;
                    }

                    .badge.bg-warning {
                        background-color: #fff !important;
                        color: #000 !important;
                        border: 1px solid #dee2e6;
                    }

                    /* Empty State */
                    .portfolio-empty-state {
                        text-align: center;
                        padding: 0;
                        min-height: 100px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .empty-state-content {
                        max-width: 400px;
                    }

                    .empty-state-content p {
                        font-size: 1.1rem;
                        color: grey;
                        margin: 0;
                    }

                    /* None button styling */
                    .filter-btn-none {
                        position: absolute;
                        top: -30px;
                        right: 0;
                        background: transparent;
                        border: none;
                        color: rgba(108, 117, 125, 0.3);
                        font-size: 1.2rem;
                        line-height: 1;
                        padding: 0.25rem 0.5rem;
                        cursor: pointer;
                        transition: all 0.2s;
                    }

                    .filter-btn-none:hover {
                        color: rgba(108, 117, 125, 0.5);
                    }

                    .filter-btn-none.active {
                        color: rgba(108, 117, 125, 0.7);
                    }
                </style>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const filterBtns = document.querySelectorAll('.filter-btn');
                    const noneBtn = document.querySelector('.filter-btn-none');
                    const portfolioItems = document.querySelectorAll('.portfolio-item');
                    const portfolioGrid = document.querySelector('.portfolio-grid');
                    const emptyState = document.getElementById('emptyState');

                    // Handle regular filter buttons
                    filterBtns.forEach(btn => {
                        btn.addEventListener('click', function() {
                            const filter = this.getAttribute('data-filter');

                            // Update active button
                            filterBtns.forEach(b => b.classList.remove('active'));
                            noneBtn.classList.remove('active');
                            this.classList.add('active');

                            // Hide empty state and show grid
                            emptyState.style.display = 'none';
                            portfolioGrid.style.display = 'grid';

                            // Filter items
                            portfolioItems.forEach(item => {
                                if (filter === 'all') {
                                    item.classList.remove('hidden');
                                } else {
                                    const categories = item.getAttribute('data-category').split(' ');
                                    if (categories.includes(filter)) {
                                        item.classList.remove('hidden');
                                    } else {
                                        item.classList.add('hidden');
                                    }
                                }
                            });
                        });
                    });

                    // Handle none button
                    noneBtn.addEventListener('click', function() {
                        // Remove active from all filter buttons
                        filterBtns.forEach(b => b.classList.remove('active'));
                        noneBtn.classList.add('active');

                        // Show empty state, hide grid
                        emptyState.style.display = 'flex';
                        portfolioGrid.style.display = 'none';
                    });
                });
                </script>
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

<?php get_footer(); ?>
