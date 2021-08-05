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

/* /Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/homeslider.htm */
class __TwigTemplate_c5f4f564727e1b9a6f467d1b0b17bbc37c80b663518fc41ca946813dd0f151be extends \Twig\Template
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
        echo "<div class=\"rev_slider_wrapper voltage_slider_wrapper\">
                <div class=\"rev_slider\" data-version=\"5.0\">
                    <ul>
                    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["homesliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 5
            echo "                       <li data-transition=\"slideup\">
                            <img src=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "/storage/app/media/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "photo", [], "any", false, false, false, 6), "html", null, true);
            echo "\" alt=\"\">

                            <div class=\"tp-caption subtitle\"
                                 id=\"Homeslider-subtitle\"  
                                 data-x=\"left\"
                                 data-y=\"320\"
                                 data-speed=\"700\"
                                 data-start=\"800\"
                                 data-hoffset=\"00\"
                                 data-transform_in=\"y:100px;opacity:0;s:1000;\"
                                 data-transform_out=\"y:0px;opacity:0;s:400;\">
                                 ";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["slide"], "text", [], "any", false, false, false, 17);
            echo "
                            </div>

                          
                            <div class=\"tp-caption\"
                                 data-x=\"left\"
                                 data-y=\"470\"
                                 data-speed=\"700\"
                                 data-start=\"1200\"
                                 data-hoffset=\"0\"
                                 data-transform_in=\"y:100px;opacity:0;s:1000;\"
                                 data-transform_out=\"y:0px;opacity:0;s:400;\">
                                 <a class=\"btn btn-default btn-min-width text-uppercase\" href=\"";
            // line 29
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
            echo "\">Connect now</a>
                            </div>

                          
                        </li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </ul>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/homeslider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  80 => 29,  65 => 17,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rev_slider_wrapper voltage_slider_wrapper\">
                <div class=\"rev_slider\" data-version=\"5.0\">
                    <ul>
                    {% for slide in homesliders %}
                       <li data-transition=\"slideup\">
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{slide.photo}}\" alt=\"\">

                            <div class=\"tp-caption subtitle\"
                                 id=\"Homeslider-subtitle\"  
                                 data-x=\"left\"
                                 data-y=\"320\"
                                 data-speed=\"700\"
                                 data-start=\"800\"
                                 data-hoffset=\"00\"
                                 data-transform_in=\"y:100px;opacity:0;s:1000;\"
                                 data-transform_out=\"y:0px;opacity:0;s:400;\">
                                 {{slide.text|raw}}
                            </div>

                          
                            <div class=\"tp-caption\"
                                 data-x=\"left\"
                                 data-y=\"470\"
                                 data-speed=\"700\"
                                 data-start=\"1200\"
                                 data-hoffset=\"0\"
                                 data-transform_in=\"y:100px;opacity:0;s:1000;\"
                                 data-transform_out=\"y:0px;opacity:0;s:400;\">
                                 <a class=\"btn btn-default btn-min-width text-uppercase\" href=\"{{ 'contact' | page }}\">Connect now</a>
                            </div>

                          
                        </li>
                      {% endfor %}
                    </ul>
                </div>
            </div>", "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/homeslider.htm", "");
    }
}
