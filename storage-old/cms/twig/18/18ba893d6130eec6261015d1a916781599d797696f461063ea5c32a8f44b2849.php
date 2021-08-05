<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/clients.htm */
class __TwigTemplate_a024ce2def005530908a04005c0beaabaee5d77bbcafb4503f0bf7a47935d401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
                        
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                            <ul class=\"happy-clients-list clearfix\">
                                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 24
            echo "                                <li>
                                    <img src=\"";
            // line 25
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "/storage/app/media/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "image", array()), "html", null, true);
            echo "\"  alt=\"\">
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                            </ul>
                            
                            <div class=\"clearfix space30\"></div> <div class=\"clearfix space30\"></div> <div class=\"clearfix space30\"></div>
                    </div>
                </div>
            </div>
            
            </div>
            </body>

";
        // line 38
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
        return array (  76 => 38,  64 => 28,  53 => 25,  50 => 24,  46 => 23,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'header2' %}
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
                        
            <div class=\"container\">
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
