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

/* santart/contact.html.twig */
class __TwigTemplate_092c9bfbd0d31ee6f0a1e83abc09f4cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "santart/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "santart/contact.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "santart/contact.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "        <section class=\"section db p120\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"tagline-message page-title text-center\">
                        <h3>Nous Contactez !</h3>
                        <ul class=\"breadcrumb\">
                            <li><a href=\"javascript:void(0)\">SANT’ARTS BUSINESS</a></li>
                            <li class=\"active\">Nous Contactez !</li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class=\"section gb nopadtop\">
        <div class=\"container\">
            <div class=\"boxed boxedp4\">

                <div id=\"map\" class=\"wow slideInUp\"></div>

                <div class=\"row contactv2 text-center\">
                    <div class=\"col-md-4\">
                        <div class=\"small-box\">
                            <i class=\"flaticon-email wow fadeIn\"></i>
                            <h4>Contact us today</h4>
                            <small>Phone: +90 987 665 55 44</small>
                            <small>Fax:  +90 987 665 55 45</small>
                            <p><a href=\"mail:to\">info@yoursite.com</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->

                    <div class=\"col-md-4\">
                        <div class=\"small-box\">
                            <i class=\"flaticon-map-with-position-marker wow fadeIn\"></i>
                            <h4>Visit Our Office</h4>
                            <small>PO Box 16122 Collins Street West</small>
                            <small>Victoria 8007 Australia</small>
                            <p><a href=\"#\">View on Google Map</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->

                    <div class=\"col-md-4\">
                        <div class=\"small-box\">
                            <i class=\"flaticon-share wow fadeIn\"></i>
                            <h4>Be Social</h4>
                            <small>Twitter: @yourhandle</small>
                            <small>Facebook: facebook.com/yourhandle</small>
                            <p><a href=\"#\">Email Newsletter</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->
                </div><!-- end contactv2 -->

                <div class=\"row\">
                    <div class=\"col-md-6 col-md-offset-3\">
                        <div class=\"section-title text-center\">
                            <h3>Contact Form</h3>
                            <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div><!-- end title -->

                        <form class=\"big-contact-form\" role=\"search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter your name..\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Enter email..\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Your phone..\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Subject..\">
                            <textarea class=\"form-control\" placeholder=\"Message goes here..\"></textarea>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </form>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </section>


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
        return "santart/contact.html.twig";
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
        return array (  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block body %}
        <section class=\"section db p120\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"tagline-message page-title text-center\">
                        <h3>Nous Contactez !</h3>
                        <ul class=\"breadcrumb\">
                            <li><a href=\"javascript:void(0)\">SANT’ARTS BUSINESS</a></li>
                            <li class=\"active\">Nous Contactez !</li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class=\"section gb nopadtop\">
        <div class=\"container\">
            <div class=\"boxed boxedp4\">

                <div id=\"map\" class=\"wow slideInUp\"></div>

                <div class=\"row contactv2 text-center\">
                    <div class=\"col-md-4\">
                        <div class=\"small-box\">
                            <i class=\"flaticon-email wow fadeIn\"></i>
                            <h4>Contact us today</h4>
                            <small>Phone: +90 987 665 55 44</small>
                            <small>Fax:  +90 987 665 55 45</small>
                            <p><a href=\"mail:to\">info@yoursite.com</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->

                    <div class=\"col-md-4\">
                        <div class=\"small-box\">
                            <i class=\"flaticon-map-with-position-marker wow fadeIn\"></i>
                            <h4>Visit Our Office</h4>
                            <small>PO Box 16122 Collins Street West</small>
                            <small>Victoria 8007 Australia</small>
                            <p><a href=\"#\">View on Google Map</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->

                    <div class=\"col-md-4\">
                        <div class=\"small-box\">
                            <i class=\"flaticon-share wow fadeIn\"></i>
                            <h4>Be Social</h4>
                            <small>Twitter: @yourhandle</small>
                            <small>Facebook: facebook.com/yourhandle</small>
                            <p><a href=\"#\">Email Newsletter</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->
                </div><!-- end contactv2 -->

                <div class=\"row\">
                    <div class=\"col-md-6 col-md-offset-3\">
                        <div class=\"section-title text-center\">
                            <h3>Contact Form</h3>
                            <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div><!-- end title -->

                        <form class=\"big-contact-form\" role=\"search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter your name..\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Enter email..\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Your phone..\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Subject..\">
                            <textarea class=\"form-control\" placeholder=\"Message goes here..\"></textarea>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </form>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </section>


{% endblock %}", "santart/contact.html.twig", "C:\\wamp64\\www\\santartbusiness\\templates\\santart\\contact.html.twig");
    }
}
