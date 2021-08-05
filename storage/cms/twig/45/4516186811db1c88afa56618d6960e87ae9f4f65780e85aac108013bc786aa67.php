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

/* /Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/pages/case-study.htm */
class __TwigTemplate_704d58ded413f65ea5bf49be19ca1d030f0e45e44158c46d758cf821ded803fe extends \Twig\Template
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
                            <h3>Case Study</h3>    
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <ul class=\"filter text-center\">
                            <li>
                                <a class=\"active\" href=\"#\" data-filter=\"*\">All</a>
                            </li>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "                                <li>
                                    <a href=\"#\" class='thecat";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "' data-filter=\".cat";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</a>
                                </li>                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                        </ul>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">

                        <div class=\"casestudy-list isotope col-3 gutter clearfix\">

                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cases"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
            // line 47
            echo "
                            <div class=\"isotope-item
                            
                                                ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "categories", [], "any", false, false, false, 50), "count", [], "any", false, false, false, 50)) {
                echo " 
                                                    ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "categories", [], "any", false, false, false, 51));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 52
                    echo "                                                        cat";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 52)) {
                        echo "  ";
                    }
                    // line 53
                    echo "                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                                ";
            }
            // line 55
            echo "                            
                            \">

                                <div class=\"portfolio-item\">
                            
                                    <a href=\"";
            // line 60
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "/portfolio-detail/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "slug", [], "any", false, false, false, 60), "html", null, true);
            echo "\" class=\"portfolio-item-thumbnail\">
                                            
                                     
                                        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "image3", [], "any", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 64
                echo "                                      
                                               <img src=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pic"], "path", [], "any", false, false, false, 65), "html", null, true);
                echo "\" >
                                         
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                        
                                        <div class=\"portfolio-item-hover\">
                                            
                                            <span class=\"zoom-action\">+</span>

                                            <div class=\"portfolio-item-description\">
                                                        
                                                <h4>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "title", [], "any", false, false, false, 75), "html", null, true);
            echo "</h4>
                                                
                                                <h6>
                                                ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "categories", [], "any", false, false, false, 78), "count", [], "any", false, false, false, 78)) {
                echo " 
                                                    ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "categories", [], "any", false, false, false, 79));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 80
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 80), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 80)) {
                        echo ", ";
                    }
                    // line 81
                    echo "                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                                                ";
            }
            // line 83
            echo "                                                
                                                </h6>
                                                
                                            </div><!-- portfolio-item-description -->
                                            
                                        </div><!-- portfolio-item-hover -->
                                        
                                    </a><!-- portfolio-item-thumbnail -->
                                    
                                </div><!-- portfolio-item -->
                            
                            </div><!-- isotope-item -->
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                           
                            
                        </div><!-- / .gutter .isotope .col-3 -->
                        <div class=\"loading\"></div>
                        <div class=\"loadmore\"></div>

                    </div>
                </div>
            </div>

        </div><!-- / PAGE CONTENT -->
</body>


";
        // line 112
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 113
        echo "
";
        // line 114
        if (($context["theclick"] ?? null)) {
            // line 115
            echo "<script>
    (function(\$) {
         setTimeout(function(){ 
          
            \$('.";
            // line 119
            echo twig_escape_filter($this->env, ($context["theclick"] ?? null), "html", null, true);
            echo "').click();
         }, 300);
        
    })(jQuery);
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/pages/case-study.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 119,  292 => 115,  290 => 114,  287 => 113,  283 => 112,  266 => 97,  247 => 83,  244 => 82,  230 => 81,  224 => 80,  207 => 79,  203 => 78,  197 => 75,  188 => 68,  179 => 65,  176 => 64,  172 => 63,  164 => 60,  157 => 55,  154 => 54,  140 => 53,  134 => 52,  117 => 51,  113 => 50,  108 => 47,  104 => 46,  89 => 33,  76 => 30,  73 => 29,  69 => 28,  41 => 2,  37 => 1,);
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
                            <h3>Case Study</h3>    
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <ul class=\"filter text-center\">
                            <li>
                                <a class=\"active\" href=\"#\" data-filter=\"*\">All</a>
                            </li>
                            {% for category in categories %}
                                <li>
                                    <a href=\"#\" class='thecat{{ category.id }}' data-filter=\".cat{{ category.id }}\">{{ category.title }}</a>
                                </li>                            
                            {% endfor %}

                        </ul>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">

                        <div class=\"casestudy-list isotope col-3 gutter clearfix\">

                            {% for case in cases %}

                            <div class=\"isotope-item
                            
                                                {% if case.categories.count %} 
                                                    {% for category in case.categories %}
                                                        cat{{ category.id }}{% if not loop.last %}  {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                            
                            \">

                                <div class=\"portfolio-item\">
                            
                                    <a href=\"{{ 'home' | page }}/portfolio-detail/{{ case.slug }}\" class=\"portfolio-item-thumbnail\">
                                            
                                     
                                        {% for pic in case.image3 %}
                                      
                                               <img src=\"{{ pic.path }}\" >
                                         
                                        {% endfor %}
                                        
                                        <div class=\"portfolio-item-hover\">
                                            
                                            <span class=\"zoom-action\">+</span>

                                            <div class=\"portfolio-item-description\">
                                                        
                                                <h4>{{ case.title }}</h4>
                                                
                                                <h6>
                                                {% if case.categories.count %} 
                                                    {% for category in case.categories %}
                                                        {{ category.title }}{% if not loop.last %}, {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                                
                                                </h6>
                                                
                                            </div><!-- portfolio-item-description -->
                                            
                                        </div><!-- portfolio-item-hover -->
                                        
                                    </a><!-- portfolio-item-thumbnail -->
                                    
                                </div><!-- portfolio-item -->
                            
                            </div><!-- isotope-item -->
                            
                            {% endfor %}

                           
                            
                        </div><!-- / .gutter .isotope .col-3 -->
                        <div class=\"loading\"></div>
                        <div class=\"loadmore\"></div>

                    </div>
                </div>
            </div>

        </div><!-- / PAGE CONTENT -->
</body>


{% partial 'footer' %}

{% if theclick %}
<script>
    (function(\$) {
         setTimeout(function(){ 
          
            \$('.{{ theclick }}').click();
         }, 300);
        
    })(jQuery);
</script>
{% endif %}", "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/pages/case-study.htm", "");
    }
}
