<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/testimonials.htm */
class __TwigTemplate_7ca056ab75aa1d4c25f37121be02f11af56d9d33e8bc8cce3c12369305f9f428 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"testimonial-carousel owl-carousel\">

        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testi"]) {
            // line 4
            echo "                                    
                                    <div class=\"testimonial  wow fadeInLeft\" data-wow-duration=\".6s\" data-wow-delay=\"0s\">
                                        <blockquote>
                                        
                                            <h4 class=\"wow fadeInRight\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "quote", [], "any", false, false, false, 8), "html", null, true);
            echo "</h4>
                                        
                                        </blockquote>
                                        
                                        ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["testi"], "image", [], "any", false, false, false, 12)) {
                // line 13
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["testi"], "link", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                                                <a target='_blank' href='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "link", [], "any", false, false, false, 14), "html", null, true);
                    echo "'>
                                                <img class='testti' src='";
                    // line 15
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                    echo "/storage/app/media/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "image", [], "any", false, false, false, 15), "html", null, true);
                    echo "' width='100' data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                                </a>
                                            ";
                } else {
                    // line 18
                    echo "                                                <img class='testti' src='";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                    echo "/storage/app/media/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "image", [], "any", false, false, false, 18), "html", null, true);
                    echo "' width='100' data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                            ";
                }
                // line 20
                echo "                                        ";
            }
            // line 21
            echo "                                        <div class=\"testimonials-footer\">
                                            <img class=\"testimonials-headshots fadeInUp\" src=\"";
            // line 22
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/headshot/example.jpg");
            echo "\" alt=\"\">
                                            <div>
                                                <h4 class=\"text-uppercase nospace-bottom font-16 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                                    ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["testi"], "link", [], "any", false, false, false, 25)) {
                // line 26
                echo "                                                        <a target='_blank' href='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "link", [], "any", false, false, false, 26), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>
                                                    ";
            } else {
                // line 28
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "
                                                    ";
            }
            // line 30
            echo "                                                    </h4>
                                                
                                                    <h6 class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"1.1s\">
                                                    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["testi"], "link", [], "any", false, false, false, 33)) {
                // line 34
                echo "                                                        <a target='_blank' href='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "link", [], "any", false, false, false, 34), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "title", [], "any", false, false, false, 34), "html", null, true);
                echo "</a>
                                                     ";
            } else {
                // line 36
                echo "                                                         ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testi"], "title", [], "any", false, false, false, 36), "html", null, true);
                echo "
                                                     ";
            }
            // line 38
            echo "                                                    </h6>
                                            </div>
                                        </div>
                                    </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 43,  133 => 38,  127 => 36,  119 => 34,  117 => 33,  112 => 30,  106 => 28,  98 => 26,  96 => 25,  90 => 22,  87 => 21,  84 => 20,  76 => 18,  68 => 15,  63 => 14,  60 => 13,  58 => 12,  51 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"testimonial-carousel owl-carousel\">

        {% for testi in testimonials %}
                                    
                                    <div class=\"testimonial  wow fadeInLeft\" data-wow-duration=\".6s\" data-wow-delay=\"0s\">
                                        <blockquote>
                                        
                                            <h4 class=\"wow fadeInRight\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">{{ testi.quote }}</h4>
                                        
                                        </blockquote>
                                        
                                        {% if testi.image %}
                                            {% if testi.link %}
                                                <a target='_blank' href='{{ testi.link }}'>
                                                <img class='testti' src='{{ 'home' | page }}/storage/app/media/{{ testi.image }}' width='100' data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                                </a>
                                            {% else %}
                                                <img class='testti' src='{{ 'home' | page }}/storage/app/media/{{ testi.image }}' width='100' data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                            {% endif %}
                                        {% endif %}
                                        <div class=\"testimonials-footer\">
                                            <img class=\"testimonials-headshots fadeInUp\" src=\"{{ 'assets/images/headshot/example.jpg'|theme }}\" alt=\"\">
                                            <div>
                                                <h4 class=\"text-uppercase nospace-bottom font-16 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                                    {% if testi.link %}
                                                        <a target='_blank' href='{{ testi.link }}'>{{ testi.name }}</a>
                                                    {% else %}
                                                        {{ testi.name }}
                                                    {% endif %}
                                                    </h4>
                                                
                                                    <h6 class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"1.1s\">
                                                    {% if testi.link %}
                                                        <a target='_blank' href='{{ testi.link }}'>{{ testi.title }}</a>
                                                     {% else %}
                                                         {{ testi.title }}
                                                     {% endif %}
                                                    </h6>
                                            </div>
                                        </div>
                                    </div>
       {% endfor %}
</div>", "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/testimonials.htm", "");
    }
}
