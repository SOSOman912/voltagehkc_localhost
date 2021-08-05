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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/clients.htm */
class __TwigTemplate_6a73a664b9f67ffe3979fe00158fb04b170716edc09f403617d82857cfdcc2dc extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "        <div id=\"page-content\">
            <div class=\"clearfix space120 hidden-991\"></div>
            <div class=\"clearfix space60 hidden-991\"></div>

            <div class=\"clearfix space30 showin-991\"></div>
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">

                        <div class=\"headline mb-60\">
                            <h3>Clients</h3>    
                
                        </div>
                    </div>
                </div>
            </div>                        
                        
            <div class=\"container clients\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                            <ul class=\"happy-clients-list clearfix\">
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 25
            echo "                                <li>
                                    <img src=\"";
            // line 26
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "/storage/app/media/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "image", [], "any", false, false, false, 26), "html", null, true);
            echo "\"  alt=\"\">
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </ul>
                            
                            <div class=\"clearfix space30\"></div> <div class=\"clearfix space30\"></div> <div class=\"clearfix space30\"></div>
                    </div>
                </div>
            </div>
            
            </div>
            </body>

";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/clients.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  83 => 29,  72 => 26,  69 => 25,  65 => 24,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header2' %}
        <div id=\"page-content\">
            <div class=\"clearfix space120 hidden-991\"></div>
            <div class=\"clearfix space60 hidden-991\"></div>

            <div class=\"clearfix space30 showin-991\"></div>
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">

                        <div class=\"headline mb-60\">
                            <h3>Clients</h3>    
                
                        </div>
                    </div>
                </div>
            </div>                        
                        
            <div class=\"container clients\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                            <ul class=\"happy-clients-list clearfix\">
                                {% for client in clients%}
                                <li>
                                    <img src=\"{{ 'home' | page }}/storage/app/media/{{ client.image }}\"  alt=\"\">
                                    </li>
                                {% endfor %}
                            </ul>
                            
                            <div class=\"clearfix space30\"></div> <div class=\"clearfix space30\"></div> <div class=\"clearfix space30\"></div>
                    </div>
                </div>
            </div>
            
            </div>
            </body>

{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/clients.htm", "");
    }
}
