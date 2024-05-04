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

/* layout.html.twig */
class __TwigTemplate_fd972bbae97ffcb946fa8fa94304d754 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        yield "<!doctype html>
<!--[if IE 9]> <html class=\"no-js ie9 fixed-layout\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js \" lang=\"en\"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- Mobile Meta -->
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <!-- Site Meta -->
    <title>Edulogy</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Site Icons -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\" />
    <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i\" rel=\"stylesheet\">

    <!-- Custom & Default Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carousel.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">

    <!--[if lt IE 9]>
    <script src=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/html5shiv.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/respond.min.js"), "html", null, true);
        yield "\"></script>
    <![endif]-->

</head>
<body>

<!-- LOADER -->
<div id=\"preloader\">
    <img class=\"preloader\" src=\"";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loader.gif"), "html", null, true);
        yield "\" alt=\"\">
</div><!-- end loader -->
<!-- END LOADER -->

<div id=\"wrapper\">
    <!-- BEGIN # MODAL LOGIN -->
    <div class=\"modal fade\" id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Begin # DIV Form -->
                <div id=\"div-forms\">
                    <form id=\"login-form\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span class=\"flaticon-add\" aria-hidden=\"true\"></span>
                        </button>
                        <div class=\"modal-body\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"What you are looking for?\" required>
                        </div>
                    </form><!-- End # Login Form -->
                </div><!-- End # DIV Form -->
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

    <header class=\"header header-normal\">
        <div class=\"topbar clearfix\">
            <div class=\"container\">
                <div class=\"row-fluid\">
                    <div class=\"col-md-6 col-sm-6 text-left\">
                        <p>
                            <strong><i class=\"fa fa-phone\"></i></strong> +221 77 721 52 33 &nbsp;&nbsp;
                            <strong><i class=\"fa fa-envelope\"></i></strong> <a href=\"mailto:#\">contact@webisfly.com</a>
                        </p>
                    </div><!-- end left -->
                    <div class=\"col-md-6 col-sm-6 hidden-xs text-right\">
                        <div class=\"social\">
                            <a class=\"facebook\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
                            <a class=\"twitter\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
                            <a class=\"google\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Google Plus\"><i class=\"fa fa-google-plus\"></i></a>
                            <a class=\"linkedin\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a>
                            <a class=\"pinterest\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"fa fa-pinterest\"></i></a>
                        </div><!-- end social -->
                    </div><!-- end left -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <div class=\"container\">
            <nav class=\"navbar navbar-default yamm\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"logo-normal\">
                        <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 102
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-dark.png"), "html", null, true);
        yield "\" alt=\"\"></a>
                    </div>
                </div>

                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">Accueil</a></li>
                        <li><a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\">A propos</a></li>
";
        // line 147
        yield "                        <li><a href=\"events.html\">Evenements</a></li>
                        <li class=\"dropdown hassubmenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Produit <span class=\"fa fa-angle-down\"></span></a>
";
        // line 154
        yield "                        </li>
                        <li class=\"dropdown hassubmenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Blog <span class=\"fa fa-angle-down\"></span></a>
";
        // line 164
        yield "                        </li>
                        <li><a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a></li>
";
        // line 167
        yield "                        <li class=\"iconitem\"><a class=\"shopicon\" href=\"shop-cart.html\"><i class=\"fa fa-shopping-basket\"></i> &nbsp;(0)</a></li>
                    </ul>
                </div>
            </nav><!-- end navbar -->
        </div><!-- end container -->
    </header>


    ";
        // line 175
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 177
        yield "    <footer class=\"section footer noover\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"widget clearfix\">
                        <h3 class=\"widget-title\">Subscribe Our Newsletter</h3>
                        <div class=\"newsletter-widget\">
                            <p>You can opt out of our newsletters at any time.<br> See our <a href=\"#\">privacy policy</a>.</p>
                            <form class=\"form-inline\" role=\"search\">
                                <div class=\"form-1\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter email here..\">
                                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-paper-plane-o\"></i></button>
                                </div>
                            </form>
                            <img src=\"";
        // line 191
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/payments.png"), "html", null, true);
        yield "\" alt=\"\" class=\"img-responsive\">
                        </div><!-- end newsletter -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class=\"col-lg-3 col-md-3\">
                    <div class=\"widget clearfix\">
                        <h3 class=\"widget-title\">Join us today</h3>
                        <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                        <a href=\"#\" class=\"readmore\">Became a Teacher</a>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class=\"col-lg-3 col-md-3\">
                    <div class=\"widget clearfix\">
                        <h3 class=\"widget-title\">Popular Tags</h3>
                        <div class=\"tags-widget\">
                            <ul class=\"list-inline\">
                                <li><a href=\"#\">course</a></li>
                                <li><a href=\"#\">web design</a></li>
                                <li><a href=\"#\">development</a></li>
                                <li><a href=\"#\">language</a></li>
                                <li><a href=\"#\">teacher</a></li>
                                <li><a href=\"#\">speaking</a></li>
                                <li><a href=\"#\">material</a></li>
                                <li><a href=\"#\">css3</a></li>
                                <li><a href=\"#\">html</a></li>
                                <li><a href=\"#\">learning</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class=\"col-lg-2 col-md-2\">
                    <div class=\"widget clearfix\">
                        <h3 class=\"widget-title\">Support</h3>
                        <div class=\"list-widget\">
                            <ul>
                                <li><a href=\"#\">Terms of Use</a></li>
                                <li><a href=\"#\">Copyrights</a></li>
                                <li><a href=\"#\">Create a Ticket</a></li>
                                <li><a href=\"#\">Pricing & Plans</a></li>
                                <li><a href=\"#\">Carrier</a></li>
                                <li><a href=\"#\">Trademark</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class=\"copyrights\">
        <div class=\"container\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <div class=\"cop-logo\">
                        <a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a>
                    </div>
                </div>

                <div class=\"pull-right\">
                    <div class=\"footer-links\">
                        <ul class=\"list-inline\">
                            <li>Design : <a href=\"https://html.design\">HTML.Design</a></li>
                            <li>Distributed by : <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end copy -->
</div><!-- end wrapper -->

<!-- jQuery Files -->
<script src=\"";
        // line 267
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 268
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 269
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/carousel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 270
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/animate.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 271
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        yield "\"></script>
<!-- VIDEO BG PLUGINS -->
<script src=";
        // line 273
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/videobg.js"), "html", null, true);
        yield "></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 175
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 176
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.html.twig";
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
        return array (  359 => 176,  349 => 175,  334 => 273,  329 => 271,  325 => 270,  321 => 269,  317 => 268,  313 => 267,  234 => 191,  218 => 177,  216 => 175,  206 => 167,  202 => 165,  199 => 164,  194 => 154,  189 => 147,  185 => 109,  181 => 108,  172 => 102,  111 => 44,  100 => 36,  96 => 35,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<!--[if IE 9]> <html class=\"no-js ie9 fixed-layout\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js \" lang=\"en\"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- Mobile Meta -->
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <!-- Site Meta -->
    <title>Edulogy</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Site Icons -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\" />
    <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i\" rel=\"stylesheet\">

    <!-- Custom & Default Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

    <!--[if lt IE 9]>
    <script src=\"{{asset('js/vendor/html5shiv.min.js')}}\"></script>
    <script src=\"{{asset('js/vendor/respond.min.js')}}\"></script>
    <![endif]-->

</head>
<body>

<!-- LOADER -->
<div id=\"preloader\">
    <img class=\"preloader\" src=\"{{ asset('images/loader.gif') }}\" alt=\"\">
</div><!-- end loader -->
<!-- END LOADER -->

<div id=\"wrapper\">
    <!-- BEGIN # MODAL LOGIN -->
    <div class=\"modal fade\" id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Begin # DIV Form -->
                <div id=\"div-forms\">
                    <form id=\"login-form\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span class=\"flaticon-add\" aria-hidden=\"true\"></span>
                        </button>
                        <div class=\"modal-body\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"What you are looking for?\" required>
                        </div>
                    </form><!-- End # Login Form -->
                </div><!-- End # DIV Form -->
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

    <header class=\"header header-normal\">
        <div class=\"topbar clearfix\">
            <div class=\"container\">
                <div class=\"row-fluid\">
                    <div class=\"col-md-6 col-sm-6 text-left\">
                        <p>
                            <strong><i class=\"fa fa-phone\"></i></strong> +221 77 721 52 33 &nbsp;&nbsp;
                            <strong><i class=\"fa fa-envelope\"></i></strong> <a href=\"mailto:#\">contact@webisfly.com</a>
                        </p>
                    </div><!-- end left -->
                    <div class=\"col-md-6 col-sm-6 hidden-xs text-right\">
                        <div class=\"social\">
                            <a class=\"facebook\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
                            <a class=\"twitter\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
                            <a class=\"google\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Google Plus\"><i class=\"fa fa-google-plus\"></i></a>
                            <a class=\"linkedin\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a>
                            <a class=\"pinterest\" href=\"#\" data-tooltip=\"tooltip\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"fa fa-pinterest\"></i></a>
                        </div><!-- end social -->
                    </div><!-- end left -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <div class=\"container\">
            <nav class=\"navbar navbar-default yamm\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"logo-normal\">
                        <a class=\"navbar-brand\" href=\"index.html\"><img src=\"{{ asset('images/logo-dark.png') }}\" alt=\"\"></a>
                    </div>
                </div>

                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"{{ path('accueil') }}\">Accueil</a></li>
                        <li><a href=\"{{ path('about') }}\">A propos</a></li>
{#                        <li class=\"dropdown yamm-fw yamm-half\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle active\">Mega Menu <b class=\"fa fa-angle-down\"></b></a>#}
{#                            <ul class=\"dropdown-menu\">#}
{#                                <li>#}
{#                                    <div class=\"yamm-content clearfix\">#}
{#                                        <div class=\"row-fluid\">#}
{#                                            <div class=\"col-md-6 col-sm-6\">#}
{#                                                <h4>Course Pages</h4>#}
{#                                                <ul>#}
{#                                                    <li><a href=\"#\">Courses Name 01</a></li>#}
{#                                                    <li><a href=\"#\">Courses Name 02</a></li>#}
{#                                                    <li><a href=\"#\">Courses Name 03</a></li>#}
{#                                                    <li><a href=\"#\">Courses Name 04</a></li>#}
{#                                                    <li><a href=\"#\">Courses Name 05</a></li>#}
{#                                                    <li><a href=\"#\">Courses Name 06</a></li>#}
{#                                                    <li><a href=\"#\">Courses Name 07</a></li>#}
{#                                                    <li><a href=\"#\">Courses Name 08</a></li>#}
{#                                                    <li><a href=\"#\">Courses Name 09</a></li>#}
{#                                                </ul>#}
{#                                            </div>#}
{#                                            <div class=\"col-md-6 col-sm-6\">#}
{#                                                <div class=\"menu-widget text-center\">#}
{#                                                    <div class=\"image-wrap entry\">#}
{#                                                        <img src=\"upload/course_01.jpg\" alt=\"\" class=\"img-responsive\">#}
{#                                                        <div class=\"magnifier\">#}
{#                                                            <a href=\"#\" title=\"\"><i class=\"flaticon-add\"></i></a>#}
{#                                                        </div>#}
{#                                                    </div><!-- end image-wrap -->#}
{#                                                    <h5><a href=\"#\">Learning Bootstrap Framework</a></h5>#}
{#                                                    <small>\$22.00</small>#}
{#                                                    <a href=\"#\" class=\"menu-button\">View Course</a>#}
{#                                                </div><!-- end widget -->#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                </li>#}
{#                            </ul>#}
{#                        </li>#}
                        <li><a href=\"events.html\">Evenements</a></li>
                        <li class=\"dropdown hassubmenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Produit <span class=\"fa fa-angle-down\"></span></a>
{#                            <ul class=\"dropdown-menu\" role=\"menu\">#}
{#                                <li><a href=\"shop.html\">Shop Layout</a></li>#}
{#                                <li><a href=\"shop-single.html\">Shop Single</a></li>#}
{#                            </ul>#}
                        </li>
                        <li class=\"dropdown hassubmenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Blog <span class=\"fa fa-angle-down\"></span></a>
{#                            <ul class=\"dropdown-menu\" role=\"menu\">#}
{#                                <li><a href=\"blog.html\">Blog Right Sidebar</a></li>#}
{#                                <li><a href=\"blog-1.html\">Blog Left Sidebar</a></li>#}
{#                                <li><a href=\"blog-2.html\">Blog Grid Sidebar</a></li>#}
{#                                <li><a href=\"blog-3.html\">Blog Grid Fullwidth</a></li>#}
{#                                <li><a href=\"blog-single.html\">Blog Single</a></li>#}
{#                            </ul>#}
                        </li>
                        <li><a href=\"{{ path('contact') }}\">Contact</a></li>
{#                        <li class=\"iconitem\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"><i class=\"fa fa-search\"></i></a></li>#}
                        <li class=\"iconitem\"><a class=\"shopicon\" href=\"shop-cart.html\"><i class=\"fa fa-shopping-basket\"></i> &nbsp;(0)</a></li>
                    </ul>
                </div>
            </nav><!-- end navbar -->
        </div><!-- end container -->
    </header>


    {% block body %}
    {% endblock %}
    <footer class=\"section footer noover\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"widget clearfix\">
                        <h3 class=\"widget-title\">Subscribe Our Newsletter</h3>
                        <div class=\"newsletter-widget\">
                            <p>You can opt out of our newsletters at any time.<br> See our <a href=\"#\">privacy policy</a>.</p>
                            <form class=\"form-inline\" role=\"search\">
                                <div class=\"form-1\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter email here..\">
                                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-paper-plane-o\"></i></button>
                                </div>
                            </form>
                            <img src=\"{{ asset('images/payments.png') }}\" alt=\"\" class=\"img-responsive\">
                        </div><!-- end newsletter -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class=\"col-lg-3 col-md-3\">
                    <div class=\"widget clearfix\">
                        <h3 class=\"widget-title\">Join us today</h3>
                        <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                        <a href=\"#\" class=\"readmore\">Became a Teacher</a>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class=\"col-lg-3 col-md-3\">
                    <div class=\"widget clearfix\">
                        <h3 class=\"widget-title\">Popular Tags</h3>
                        <div class=\"tags-widget\">
                            <ul class=\"list-inline\">
                                <li><a href=\"#\">course</a></li>
                                <li><a href=\"#\">web design</a></li>
                                <li><a href=\"#\">development</a></li>
                                <li><a href=\"#\">language</a></li>
                                <li><a href=\"#\">teacher</a></li>
                                <li><a href=\"#\">speaking</a></li>
                                <li><a href=\"#\">material</a></li>
                                <li><a href=\"#\">css3</a></li>
                                <li><a href=\"#\">html</a></li>
                                <li><a href=\"#\">learning</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class=\"col-lg-2 col-md-2\">
                    <div class=\"widget clearfix\">
                        <h3 class=\"widget-title\">Support</h3>
                        <div class=\"list-widget\">
                            <ul>
                                <li><a href=\"#\">Terms of Use</a></li>
                                <li><a href=\"#\">Copyrights</a></li>
                                <li><a href=\"#\">Create a Ticket</a></li>
                                <li><a href=\"#\">Pricing & Plans</a></li>
                                <li><a href=\"#\">Carrier</a></li>
                                <li><a href=\"#\">Trademark</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class=\"copyrights\">
        <div class=\"container\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <div class=\"cop-logo\">
                        <a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a>
                    </div>
                </div>

                <div class=\"pull-right\">
                    <div class=\"footer-links\">
                        <ul class=\"list-inline\">
                            <li>Design : <a href=\"https://html.design\">HTML.Design</a></li>
                            <li>Distributed by : <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end copy -->
</div><!-- end wrapper -->

<!-- jQuery Files -->
<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/carousel.js') }}\"></script>
<script src=\"{{ asset('js/animate.js') }}\"></script>
<script src=\"{{ asset('js/custom.js') }}\"></script>
<!-- VIDEO BG PLUGINS -->
<script src={{ asset('js/videobg.js') }}></script>

</body>
</html>", "layout.html.twig", "C:\\wamp64\\www\\santartbusiness\\templates\\layout.html.twig");
    }
}
