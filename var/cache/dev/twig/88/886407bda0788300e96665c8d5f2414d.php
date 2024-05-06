<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* santart/accueil.html.twig */
class __TwigTemplate_a92b9da727cd36454f67c0bb972bfbb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'about' => [$this, 'block_about'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "santart/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "santart/accueil.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "santart/accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A propos"), "html", null, true);
        yield " - SantartBusiness ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <section id=\"home\" class=\"video-section js-height-full\">
        <div class=\"overlay\"></div>
        <div class=\"home-text-wrapper relative container\">
            <div class=\"home-message\">
                <p>Découvrez l'immersion culturelle.</p>
                <small>Plongez dans l'essence de la culture locale avec Sant'arts Business. Explorez un univers riche en traditions, en arts et en histoires captivantes. Laissez-vous emporter par une expérience culturelle authentique et inoubliable.</small>
                <div class=\"btn-wrapper\">
                    <div class=\"text-center\">
                        <a href=\"#\" class=\"btn btn-primary wow slideInLeft\">Lire plus</a> &nbsp;&nbsp;&nbsp;<a href=\"#\" class=\"btn btn-default wow slideInRight\">Buy Now</a>
                    </div>
                </div><!-- end row -->
            </div>
        </div>
        <div class=\"slider-bottom\">
            <span>Explore <i class=\"fa fa-angle-down\"></i></span>
        </div>
    </section>

    <section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"custom-module\">
                        <img src=\"";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/people_04.jpeg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-responsive wow slideInLeft\">
                    </div><!-- end module -->
                </div><!-- end col -->
                <div class=\"col-md-6\">
                    <div class=\"custom-module p40l\">
                        <h2>QUI SOMMES-NOUS</h2>

                        <p class=\"para\">Sant'arts Business est née de la volonté de promouvoir le talent des artistes locaux, de valoriser les espaces historiques et de préserver la tradition orale. Nous nous engageons dans la redynamisation de l'action culturelle en offrant une plateforme audiovisuelle pour documenter nos activités et promouvoir la diversité culturelle africaine.</p>
                        <p class=\"para\">Sant'arts Business est née de la volonté de promouvoir le talent des artistes locaux, de valoriser les espaces historiques et de préserver la tradition orale. Nous nous engageons dans la redynamisation de l'action culturelle en offrant une plateforme audiovisuelle pour documenter nos activités et promouvoir la diversité culturelle africaine.</p>

                        <hr class=\"invis\">

                        <div class=\"btn-wrapper\">
                            <a href=\"#\" class=\"btn btn-primary\">A savoir plus...</a>
                        </div>

                    </div><!-- end module -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class=\"section gb\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Nos produits</h3>
";
        // line 55
        yield "            </div><!-- end title -->

            <div id=\"owl-01\" class=\"owl-carousel owl-theme owl-theme-01\">
                <div class=\"caro-item\">
                    <div class=\"course-box shop-wrapper\">
                        <div class=\"image-wrap entry\">
                            <img src=\"";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/shop_01.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"shop-single.html\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div>
                        <!-- end image-wrap -->
                        <div class=\"course-details shop-box text-center\">
                            <h4>
                                <a href=\"shop-single.html\" title=\"\">Brown leather bag</a>
                                <small>Bags</small>
                            </h4>
                        </div>
                        <!-- end details -->
                        <div class=\"course-footer clearfix\">
                            <div class=\"pull-left\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-shopping-basket\"></i> Add Cart</a></li>
                                </ul>
                            </div><!-- end left -->

                            <div class=\"pull-right\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\">\$441.00</a></li>
                                </ul>
                            </div><!-- end left -->
                        </div><!-- end footer -->
                    </div><!-- end box -->
                </div>
                <div class=\"caro-item\">
                    <div class=\"course-box shop-wrapper\">
                        <div class=\"image-wrap entry\">
                            <img src=\"";
        // line 92
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/shop_01.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"shop-single.html\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div>
                        <!-- end image-wrap -->
                        <div class=\"course-details shop-box text-center\">
                            <h4>
                                <a href=\"shop-single.html\" title=\"\">Brown leather bag</a>
                                <small>Bags</small>
                            </h4>
                        </div>
                        <!-- end details -->
                        <div class=\"course-footer clearfix\">
                            <div class=\"pull-left\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-shopping-basket\"></i> Add Cart</a></li>
                                </ul>
                            </div><!-- end left -->

                            <div class=\"pull-right\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\">\$441.00</a></li>
                                </ul>
                            </div><!-- end left -->
                        </div><!-- end footer -->
                    </div><!-- end box -->
                </div>
            </div><!-- end row -->

            <hr class=\"invis\">

            <div class=\"section-button text-center\">
                <a href=\"#\" class=\"btn btn-primary\">View All Courses</a>
            </div>
        </div><!-- end container -->
    </section>

    <section class=\"section db p120\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"tagline-message text-center\">
                        <h3>Howdy, we are Edulogy, we have brought together the best quality services, offers, projects for you!</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class=\"section gb nopadtop\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"box m30\">
                        <i class=\"flaticon-computer-tool-for-education\"></i>
                        <h4>Learning system</h4>
                        <p>All sections required for online training are included to Edulogy.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->

                <div class=\"col-md-6\">
                    <div class=\"box m30\">
                        <i class=\"flaticon-monitor-tablet-and-smartohone\"></i>
                        <h4>Works all mobile devices</h4>
                        <p>The most important feature of this template is that it is compatible with all mobile devices. Your customers can also visit your site easily from tablets and phones.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->

                <div class=\"col-md-3\">
                    <div class=\"box m30\">
                        <i class=\"flaticon-download-business-statistics-symbol-of-a-graphic\"></i>
                        <h4>User Dashboard</h4>
                        <p>We designed the design of all the sub-pages needed for the users.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class=\"invis\">

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"box\">
                        <i class=\"flaticon-html5\"></i> <i class=\"flaticon-css-3\"></i>
                        <h4>Compatible HTML5 & CSS3</h4>
                        <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->

                <div class=\"col-md-6\">
                    <div class=\"box\">
                        <i class=\"flaticon-html-coding\"></i>
                        <h4>Bootstrap Framework</h4>
                        <p>Bootstrap is a technique of loading a program into a computer by means of a few initial instructions which enable the introduction of the rest of the program from an input device.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class=\"section db\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"stat-count\">
                        <h4 class=\"stat-timer\">1230</h4>
                        <h3><i class=\"flaticon-black-graduation-cap-tool-of-university-student-for-head\"></i> Happy Students</h3>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"stat-count\">
                        <h4 class=\"stat-timer\">331</h4>
                        <h3><i class=\"flaticon-online-course\"></i> Course Done</h3>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"stat-count\">
                        <h4 class=\"stat-timer\">8901</h4>
                        <h3><i class=\"flaticon-coffee-cup\"></i> Ordered Coffe's</h3>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class=\"section\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Testimonials</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"box testimonial\">
                        <p class=\"testiname\"><strong><img src=\"";
        // line 237
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/testimonial_01.png"), "html", null, true);
        yield "\" alt=\"\" class=\"img-circle\"> Jenny LUXURY</strong></p>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                    </div><!-- end testimonial -->
                </div><!-- end col -->

                <div class=\"col-md-4\">
                    <div class=\"box testimonial\">
                        <p class=\"testiname\"><strong><img src=\"";
        // line 251
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/testimonial_02.png"), "html", null, true);
        yield "\" alt=\"\" class=\"img-circle\"> Martin LEO</strong></p>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-o\"></i>
                        </div>
                    </div><!-- end testimonial -->
                </div><!-- end col -->

                <div class=\"col-md-4\">
                    <div class=\"box testimonial\">
                        <p class=\"testiname\"><strong><img src=\"";
        // line 265
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/testimonial_03.png"), "html", null, true);
        yield "\" alt=\"\" class=\"img-circle\"> John DOE</strong></p>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                    </div><!-- end testimonial -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class=\"section gb\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Blog</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"blog-box\">
                        <div class=\"image-wrap entry\">
                            <img src=\"";
        // line 291
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/blog_01.jpeg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"";
        // line 293
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-single.html"), "html", null, true);
        yield "\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class=\"blog-desc\">
                            <h4><a href=\"";
        // line 298
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-single.html"), "html", null, true);
        yield "\">How to learn perfect code with Javascript</a></h4>
                            <p>Praesent at suscipit ligula. Suspendisse pre neque, quis suscipit enim. sed maximus, mia auctor.</p>
                        </div><!-- end blog-desc -->

                        <div class=\"post-meta\">
                            <ul class=\"list-inline\">
                                <li><a href=\"#\">21 March 2017</a></li>
                                <li><a href=\"#\">by WP Destek</a></li>
                                <li><a href=\"#\">14 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"blog-box\">
                        <div class=\"image-wrap entry\">
                            <img src=\"";
        // line 315
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/blog_02.jpeg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"blog-single.html\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class=\"blog-desc\">
                            <h4><a href=\"blog-single.html\">The most suitable web design & development tutorials</a></h4>
                            <p>Sed suscipit neque in erat posuere tristique aliquam porta vestibulum. Cras placerat tincidunt. </p>
                        </div><!-- end blog-desc -->

                        <div class=\"post-meta\">
                            <ul class=\"list-inline\">
                                <li><a href=\"#\">20 March 2017</a></li>
                                <li><a href=\"#\">by WP Destek</a></li>
                                <li><a href=\"#\">11 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"blog-box\">
                        <div class=\"image-wrap entry\">
                            <img src=\"";
        // line 339
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/blog_03.jpeg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"blog-single.html\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class=\"blog-desc\">
                            <h4><a href=\"blog-single.html\">Design for all mobile devices! This is name \"responsive\"</a></h4>
                            <p>Suspendisse scelerisque ex ac mattis molestie vel enim ut massa placerat faucibus sed ut dui vivamus. </p>
                        </div><!-- end blog-desc -->

                        <div class=\"post-meta\">
                            <ul class=\"list-inline\">
                                <li><a href=\"#\">19 March 2017</a></li>
                                <li><a href=\"#\">by WP Destek</a></li>
                                <li><a href=\"#\">44 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

";
        // line 371
        yield "
";
        // line 379
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "santart/accueil.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  510 => 379,  507 => 371,  480 => 339,  453 => 315,  433 => 298,  425 => 293,  420 => 291,  391 => 265,  374 => 251,  357 => 237,  209 => 92,  175 => 61,  167 => 55,  138 => 28,  113 => 5,  103 => 4,  83 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %} {{ \"A propos\"|trans }} - SantartBusiness {% endblock %}
{% block about %}active{% endblock %}
{% block body %}
    <section id=\"home\" class=\"video-section js-height-full\">
        <div class=\"overlay\"></div>
        <div class=\"home-text-wrapper relative container\">
            <div class=\"home-message\">
                <p>Découvrez l'immersion culturelle.</p>
                <small>Plongez dans l'essence de la culture locale avec Sant'arts Business. Explorez un univers riche en traditions, en arts et en histoires captivantes. Laissez-vous emporter par une expérience culturelle authentique et inoubliable.</small>
                <div class=\"btn-wrapper\">
                    <div class=\"text-center\">
                        <a href=\"#\" class=\"btn btn-primary wow slideInLeft\">Lire plus</a> &nbsp;&nbsp;&nbsp;<a href=\"#\" class=\"btn btn-default wow slideInRight\">Buy Now</a>
                    </div>
                </div><!-- end row -->
            </div>
        </div>
        <div class=\"slider-bottom\">
            <span>Explore <i class=\"fa fa-angle-down\"></i></span>
        </div>
    </section>

    <section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"custom-module\">
                        <img src=\"{{ asset('upload/people_04.jpeg') }}\" alt=\"\" class=\"img-responsive wow slideInLeft\">
                    </div><!-- end module -->
                </div><!-- end col -->
                <div class=\"col-md-6\">
                    <div class=\"custom-module p40l\">
                        <h2>QUI SOMMES-NOUS</h2>

                        <p class=\"para\">Sant'arts Business est née de la volonté de promouvoir le talent des artistes locaux, de valoriser les espaces historiques et de préserver la tradition orale. Nous nous engageons dans la redynamisation de l'action culturelle en offrant une plateforme audiovisuelle pour documenter nos activités et promouvoir la diversité culturelle africaine.</p>
                        <p class=\"para\">Sant'arts Business est née de la volonté de promouvoir le talent des artistes locaux, de valoriser les espaces historiques et de préserver la tradition orale. Nous nous engageons dans la redynamisation de l'action culturelle en offrant une plateforme audiovisuelle pour documenter nos activités et promouvoir la diversité culturelle africaine.</p>

                        <hr class=\"invis\">

                        <div class=\"btn-wrapper\">
                            <a href=\"#\" class=\"btn btn-primary\">A savoir plus...</a>
                        </div>

                    </div><!-- end module -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class=\"section gb\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Nos produits</h3>
{#                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>#}
            </div><!-- end title -->

            <div id=\"owl-01\" class=\"owl-carousel owl-theme owl-theme-01\">
                <div class=\"caro-item\">
                    <div class=\"course-box shop-wrapper\">
                        <div class=\"image-wrap entry\">
                            <img src=\"{{ asset('upload/shop_01.jpg') }}\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"shop-single.html\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div>
                        <!-- end image-wrap -->
                        <div class=\"course-details shop-box text-center\">
                            <h4>
                                <a href=\"shop-single.html\" title=\"\">Brown leather bag</a>
                                <small>Bags</small>
                            </h4>
                        </div>
                        <!-- end details -->
                        <div class=\"course-footer clearfix\">
                            <div class=\"pull-left\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-shopping-basket\"></i> Add Cart</a></li>
                                </ul>
                            </div><!-- end left -->

                            <div class=\"pull-right\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\">\$441.00</a></li>
                                </ul>
                            </div><!-- end left -->
                        </div><!-- end footer -->
                    </div><!-- end box -->
                </div>
                <div class=\"caro-item\">
                    <div class=\"course-box shop-wrapper\">
                        <div class=\"image-wrap entry\">
                            <img src=\"{{ asset('upload/shop_01.jpg') }}\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"shop-single.html\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div>
                        <!-- end image-wrap -->
                        <div class=\"course-details shop-box text-center\">
                            <h4>
                                <a href=\"shop-single.html\" title=\"\">Brown leather bag</a>
                                <small>Bags</small>
                            </h4>
                        </div>
                        <!-- end details -->
                        <div class=\"course-footer clearfix\">
                            <div class=\"pull-left\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-shopping-basket\"></i> Add Cart</a></li>
                                </ul>
                            </div><!-- end left -->

                            <div class=\"pull-right\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\">\$441.00</a></li>
                                </ul>
                            </div><!-- end left -->
                        </div><!-- end footer -->
                    </div><!-- end box -->
                </div>
            </div><!-- end row -->

            <hr class=\"invis\">

            <div class=\"section-button text-center\">
                <a href=\"#\" class=\"btn btn-primary\">View All Courses</a>
            </div>
        </div><!-- end container -->
    </section>

    <section class=\"section db p120\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"tagline-message text-center\">
                        <h3>Howdy, we are Edulogy, we have brought together the best quality services, offers, projects for you!</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class=\"section gb nopadtop\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"box m30\">
                        <i class=\"flaticon-computer-tool-for-education\"></i>
                        <h4>Learning system</h4>
                        <p>All sections required for online training are included to Edulogy.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->

                <div class=\"col-md-6\">
                    <div class=\"box m30\">
                        <i class=\"flaticon-monitor-tablet-and-smartohone\"></i>
                        <h4>Works all mobile devices</h4>
                        <p>The most important feature of this template is that it is compatible with all mobile devices. Your customers can also visit your site easily from tablets and phones.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->

                <div class=\"col-md-3\">
                    <div class=\"box m30\">
                        <i class=\"flaticon-download-business-statistics-symbol-of-a-graphic\"></i>
                        <h4>User Dashboard</h4>
                        <p>We designed the design of all the sub-pages needed for the users.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class=\"invis\">

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"box\">
                        <i class=\"flaticon-html5\"></i> <i class=\"flaticon-css-3\"></i>
                        <h4>Compatible HTML5 & CSS3</h4>
                        <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->

                <div class=\"col-md-6\">
                    <div class=\"box\">
                        <i class=\"flaticon-html-coding\"></i>
                        <h4>Bootstrap Framework</h4>
                        <p>Bootstrap is a technique of loading a program into a computer by means of a few initial instructions which enable the introduction of the rest of the program from an input device.</p>
                        <a href=\"#\" class=\"readmore\">Read more</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class=\"section db\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"stat-count\">
                        <h4 class=\"stat-timer\">1230</h4>
                        <h3><i class=\"flaticon-black-graduation-cap-tool-of-university-student-for-head\"></i> Happy Students</h3>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"stat-count\">
                        <h4 class=\"stat-timer\">331</h4>
                        <h3><i class=\"flaticon-online-course\"></i> Course Done</h3>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"stat-count\">
                        <h4 class=\"stat-timer\">8901</h4>
                        <h3><i class=\"flaticon-coffee-cup\"></i> Ordered Coffe's</h3>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class=\"section\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Testimonials</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"box testimonial\">
                        <p class=\"testiname\"><strong><img src=\"{{ asset('upload/testimonial_01.png') }}\" alt=\"\" class=\"img-circle\"> Jenny LUXURY</strong></p>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                    </div><!-- end testimonial -->
                </div><!-- end col -->

                <div class=\"col-md-4\">
                    <div class=\"box testimonial\">
                        <p class=\"testiname\"><strong><img src=\"{{ asset('upload/testimonial_02.png') }}\" alt=\"\" class=\"img-circle\"> Martin LEO</strong></p>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-o\"></i>
                        </div>
                    </div><!-- end testimonial -->
                </div><!-- end col -->

                <div class=\"col-md-4\">
                    <div class=\"box testimonial\">
                        <p class=\"testiname\"><strong><img src=\"{{ asset('upload/testimonial_03.png') }}\" alt=\"\" class=\"img-circle\"> John DOE</strong></p>
                        <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                    </div><!-- end testimonial -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class=\"section gb\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Blog</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"blog-box\">
                        <div class=\"image-wrap entry\">
                            <img src=\"{{ asset('upload/blog_01.jpeg') }}\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"{{ asset('blog-single.html') }}\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class=\"blog-desc\">
                            <h4><a href=\"{{ asset('blog-single.html') }}\">How to learn perfect code with Javascript</a></h4>
                            <p>Praesent at suscipit ligula. Suspendisse pre neque, quis suscipit enim. sed maximus, mia auctor.</p>
                        </div><!-- end blog-desc -->

                        <div class=\"post-meta\">
                            <ul class=\"list-inline\">
                                <li><a href=\"#\">21 March 2017</a></li>
                                <li><a href=\"#\">by WP Destek</a></li>
                                <li><a href=\"#\">14 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"blog-box\">
                        <div class=\"image-wrap entry\">
                            <img src=\"{{ asset('upload/blog_02.jpeg') }}\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"blog-single.html\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class=\"blog-desc\">
                            <h4><a href=\"blog-single.html\">The most suitable web design & development tutorials</a></h4>
                            <p>Sed suscipit neque in erat posuere tristique aliquam porta vestibulum. Cras placerat tincidunt. </p>
                        </div><!-- end blog-desc -->

                        <div class=\"post-meta\">
                            <ul class=\"list-inline\">
                                <li><a href=\"#\">20 March 2017</a></li>
                                <li><a href=\"#\">by WP Destek</a></li>
                                <li><a href=\"#\">11 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"blog-box\">
                        <div class=\"image-wrap entry\">
                            <img src=\"{{ asset('upload/blog_03.jpeg') }}\" alt=\"\" class=\"img-responsive\">
                            <div class=\"magnifier\">
                                <a href=\"blog-single.html\" title=\"\"><i class=\"flaticon-add\"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class=\"blog-desc\">
                            <h4><a href=\"blog-single.html\">Design for all mobile devices! This is name \"responsive\"</a></h4>
                            <p>Suspendisse scelerisque ex ac mattis molestie vel enim ut massa placerat faucibus sed ut dui vivamus. </p>
                        </div><!-- end blog-desc -->

                        <div class=\"post-meta\">
                            <ul class=\"list-inline\">
                                <li><a href=\"#\">19 March 2017</a></li>
                                <li><a href=\"#\">by WP Destek</a></li>
                                <li><a href=\"#\">44 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

{#    <section class=\"section bgcolor1\">#}
{#        <div class=\"container\">#}
{#            <a href=\"#\">#}
{#                <div class=\"row callout\">#}
{#                    <div class=\"col-md-4 text-center\">#}
{#                        <h3><sup>\$</sup>49.99</h3>#}
{#                        <h4>Start your awesome course today!</h4>#}
{#                    </div><!-- end col -->#}

{#                    <div class=\"col-md-8\">#}
{#                        <p class=\"lead\">Limited time offer! Your profile will be added to our \"Students\" directory as well. </p>#}
{#                    </div>#}
{#                </div><!-- end row -->#}
{#            </a>#}
{#        </div><!-- end container -->#}
{#    </section>#}

{% endblock %}", "santart/accueil.html.twig", "C:\\wamp64\\www\\santartbusiness\\templates\\santart\\accueil.html.twig");
    }
}
