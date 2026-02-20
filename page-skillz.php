<?php
/**
 * Template Name: Skills Page
 * Template for displaying skills and expertise
 *
 * @package mbsTECH
 */

get_header();
?>

<div class="skills-page py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>

            <!-- Professional Description -->
            <div class="skills-intro mb-5 text-center py-4">
                <h1 class="hero-title mb-4">Lorem <span class="highlight-gradient">Ipsum</span> Dolor Sit</h1>
                <p class="hero-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitationem.<br /><br />Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
            </div>

            <!-- Skills Grid Section -->

            <!-- Web Development -->
            <section class="skills-section mt-5 mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-code-slash"></i> Category One</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/rwd-icon.png" alt="RWD">
                        </div>
                        <h3 class="h6 mt-3">RWD</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/html5-icon.png" alt="HTML5">
                        </div>
                        <h3 class="h6 mt-3">HTML5</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/css3-icon.png" alt="CSS3">
                        </div>
                        <h3 class="h6 mt-3">CSS3</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/javascript-icon.png" alt="JavaScript">
                        </div>
                        <h3 class="h6 mt-3">JavaScript</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/php-icon.png" alt="PHP">
                        </div>
                        <h3 class="h6 mt-3">PHP</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/python-icon.png" alt="Python">
                        </div>
                        <h3 class="h6 mt-3">Python</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mariadb-icon.png" alt="MariaDB">
                        </div>
                        <h3 class="h6 mt-3">MariaDB</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mysql-icon.png" alt="MySQL">
                        </div>
                        <h3 class="h6 mt-3">MySQL</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/jquery-icon.png" alt="jQuery">
                        </div>
                        <h3 class="h6 mt-3">jQuery</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/smarty-icon.png" alt="Smarty">
                        </div>
                        <h3 class="h6 mt-3">Smarty</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/react-icon.png" alt="Node.js">
                        </div>
                        <h3 class="h6 mt-3">React</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/angular-icon.png" alt="Node.js">
                        </div>
                        <h3 class="h6 mt-3">Angular</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/node-icon.png" alt="Node.js">
                        </div>
                        <h3 class="h6 mt-3">Node.js</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/laravel-icon.png" alt="Laravel">
                        </div>
                        <h3 class="h6 mt-3">Laravel</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>
                </div>
            </section>

            <!-- CMS & E-commerce -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-shop"></i> Category Two</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/wp-icon.png" alt="WordPress">
                        </div>
                        <h3 class="h6 mt-3">WordPress</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/e-studio-e-icon.png" alt="e-shop.dk">
                        </div>
                        <h3 class="h6 mt-3">e-shop.dk</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/wc-icon.png" alt="WooCommerce">
                        </div>
                        <h3 class="h6 mt-3">WooCommerce</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/seo-icon.png" alt="SEO">
                        </div>
                        <h3 class="h6 mt-3">SEO</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/prestashop-icon.png" alt="Prestashop">
                        </div>
                        <h3 class="h6 mt-3">Prestashop</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/wannafind-icon.png" alt="Wannafind">
                        </div>
                        <h3 class="h6 mt-3">Wannafind</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/dandomain-icon.png" alt="Dandomain">
                        </div>
                        <h3 class="h6 mt-3">Dandomain</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/smartweb-icon.png" alt="Smartweb">
                        </div>
                        <h3 class="h6 mt-3">Smartweb</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/drupal-icon.png" alt="Drupal">
                        </div>
                        <h3 class="h6 mt-3">Drupal</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/magento-icon.png" alt="Magento">
                        </div>
                        <h3 class="h6 mt-3">Magento</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shopify-icon.png" alt="Shopify">
                        </div>
                        <h3 class="h6 mt-3">Shopify</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>
                </div>
            </section>

            <!-- Design & Creative Tools -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-palette"></i> Category Three</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/gimp-icon.png" alt="Gimp">
                        </div>
                        <h3 class="h6 mt-3">Gimp</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/penpot-icon.png" alt="Penpot">
                        </div>
                        <h3 class="h6 mt-3">Penpot</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/excalidraw-icon.png" alt="Excalidraw">
                        </div>
                        <h3 class="h6 mt-3">Excalidraw</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/figma-icon.png" alt="Figma">
                        </div>
                        <h3 class="h6 mt-3">Figma</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photoshop-icon.png" alt="Photoshop">
                        </div>
                        <h3 class="h6 mt-3">Photoshop</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/indesign-icon.png" alt="InDesign">
                        </div>
                        <h3 class="h6 mt-3">InDesign</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/illustrator-icon.png" alt="Illustrator">
                        </div>
                        <h3 class="h6 mt-3">Illustrator</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>
                </div>
            </section>

            <!-- Development Tools -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-tools"></i> Category Four</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/notepad-icon.png" alt="Notepad++">
                        </div>
                        <h3 class="h6 mt-3">Notepad++</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/filezilla-icon.png" alt="FileZilla">
                        </div>
                        <h3 class="h6 mt-3">FileZilla</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cursor-icon.png" alt="Cursor">
                        </div>
                        <h3 class="h6 mt-3">Cursor</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/vscode-icon.png" alt="VS Code">
                        </div>
                        <h3 class="h6 mt-3">VS Code</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/rest-api-icon.png" alt="REST APIs">
                        </div>
                        <h3 class="h6 mt-3">REST APIs</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/github-icon.png" alt="Git/GitHub">
                        </div>
                        <h3 class="h6 mt-3">Git/GitHub</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/npm-icon.png" alt="npm/Composer">
                        </div>
                        <h3 class="h6 mt-3">npm/Composer</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                </div>
            </section>

             <!-- LLM Tools -->
             <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-robot"></i> Category Five</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ollama-icon.png" alt="Ollama">
                        </div>
                        <h3 class="h6 mt-3">Ollama</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/langchain-icon.png" alt="LangChain">
                        </div>
                        <h3 class="h6 mt-3">LangChain</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mcp-icon.png" alt="MCP">
                        </div>
                        <h3 class="h6 mt-3">MCP</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/claude-icon.png" alt="Claude Code">
                        </div>
                        <h3 class="h6 mt-3">Claude Code</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/lechat-icon.png" alt="LeChat Mistral">
                        </div>
                        <h3 class="h6 mt-3">Mistral</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/chatgpt-icon.png" alt="ChatGPT">
                        </div>
                        <h3 class="h6 mt-3">ChatGPT</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                </div>
            </section>

            <!-- System & Infrastructure -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-server"></i> Category Six</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/linux-icon.png" alt="Linux">
                        </div>
                        <h3 class="h6 mt-3">Linux</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/windows-icon.png" alt="Windows">
                        </div>
                        <h3 class="h6 mt-3">Windows</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hosting-icon.png" alt="Hosting/Cloud">
                        </div>
                        <h3 class="h6 mt-3">Hosting/Cloud</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/bash-icon.png" alt="Bash">
                        </div>
                        <h3 class="h6 mt-3">Bash</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/docker-icon.png" alt="Docker">
                        </div>
                        <h3 class="h6 mt-3">Docker</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/network-icon.png" alt="Network">
                        </div>
                        <h3 class="h6 mt-3">Network</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hardware-icon.png" alt="Hardware">
                        </div>
                        <h3 class="h6 mt-3">Hardware</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/software-icon.png" alt="Software">
                        </div>
                        <h3 class="h6 mt-3">Software</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>
                </div>
            </section>

            <!-- Optimization & Performance -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-speedometer2"></i> Category Seven</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hastighedoptimering-icon.png" alt="Speed Optimization">
                        </div>
                        <h3 class="h6 mt-3">Speed Optimization</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sikkerhed-icon.png" alt="Security">
                        </div>
                        <h3 class="h6 mt-3">Security</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/fejlsogning-icon.png" alt="Troubleshooting">
                        </div>
                        <h3 class="h6 mt-3">Troubleshooting</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/analyse-icon.png" alt="Analysis">
                        </div>
                        <h3 class="h6 mt-3">Analysis</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>
                </div>
            </section>

            <!-- Platforms & Applications -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-laptop"></i> Category Eight</h2>
                <div class="skills-grid">

                <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/thunderbird-icon.png" alt="Thunderbird">
                        </div>
                        <h3 class="h6 mt-3">Thunderbird</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/chrome-icon.png" alt="Chrome">
                        </div>
                        <h3 class="h6 mt-3">Chrome</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/firefox-icon.png" alt="Firefox">
                        </div>
                        <h3 class="h6 mt-3">Firefox</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/brave-icon.png" alt="Brave">
                        </div>
                        <h3 class="h6 mt-3">Brave</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/android-icon.png" alt="Android">
                        </div>
                        <h3 class="h6 mt-3">Android</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sailfish-icon.png" alt="Sailfish OS">
                        </div>
                        <h3 class="h6 mt-3">Sailfish OS</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/office365-icon.png" alt="Office 365">
                        </div>
                        <h3 class="h6 mt-3">Office 365</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/apple-icon.png" alt="Apple">
                        </div>
                        <h3 class="h6 mt-3">Apple</h3>
                        <p class="skill-rating">☆☆☆☆☆</p>
                    </div>
                </div>
            </section>

            <!-- Knowledge & Interests -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-book"></i> Category Nine</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/videnskab-icon.png" alt="Science">
                        </div>
                        <h3 class="h6 mt-3">Science</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/teknologi-icon.png" alt="Technology">
                        </div>
                        <h3 class="h6 mt-3">Technology</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/spiritualitet-icon.png" alt="Spirituality">
                        </div>
                        <h3 class="h6 mt-3">Spirituality</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/historie-icon.png" alt="History">
                        </div>
                        <h3 class="h6 mt-3">History</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/bitcoin-icon.png" alt="Bitcoin">
                        </div>
                        <h3 class="h6 mt-3">Bitcoin</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/musik-icon.png" alt="Music">
                        </div>
                        <h3 class="h6 mt-3">Music</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/politik-icon.png" alt="Politics">
                        </div>
                        <h3 class="h6 mt-3">Politics</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/religion-icon.png" alt="Religion">
                        </div>
                        <h3 class="h6 mt-3">Religion</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/psykologi-icon.png" alt="Psychology">
                        </div>
                        <h3 class="h6 mt-3">Psychology</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>
                </div>
            </section>


            <!-- CTA Section -->
            <section class="cta-section mt-5 pt-5 text-center">
                <div class="post-card mt-5">
                    <h2 class="mb-4">Amet Consectetur</h2>
                    <p class="lead text-muted mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                    <a href="#" id="get-in-touch-link" class="btn btn-primary" rel="nofollow" aria-describedby="get-in-touch-popover" role="button">
                        Lorem Ipsum
                    </a>
                        <a href="<?php echo esc_url(home_url('/life/')); ?>" class="btn btn-secondary">Dolor Sit</a>
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

<?php get_footer(); ?>
