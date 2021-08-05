<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/case-study.htm */
class __TwigTemplate_fb57f41e29550a33b68440efed8456685fe15a4c0a676f80a330c8d1caa06eaf extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "' data-filter=\".cat";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
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

                        <div class=\"isotope col-3 gutter clearfix\">

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
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["case"], "categories", array()), "count", array())) {
                echo " 
                                                    ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["case"], "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 52
                    echo "                                                        cat";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
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
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "/portfolio-detail/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["case"], "slug", array()), "html", null, true);
            echo "\" class=\"portfolio-item-thumbnail\">
                                            
                                     
                                        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["case"], "image3", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 64
                echo "                                      
                                               <img src=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pic"], "path", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["case"], "title", array()), "html", null, true);
            echo "</h4>
                                                
                                                <h6>
                                                ";
            // line 78
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["case"], "categories", array()), "count", array())) {
                echo " 
                                                    ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["case"], "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 80
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
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

                    </div>
                </div>
            </div>

        </div><!-- / PAGE CONTENT -->
</body>


";
        // line 110
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 111
        echo "
";
        // line 112
        if (($context["theclick"] ?? null)) {
            // line 113
            echo "<script>
    (function(\$) {
         setTimeout(function(){ 
          
            \$('.";
            // line 117
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
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/case-study.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 117,  272 => 113,  270 => 112,  267 => 111,  263 => 110,  248 => 97,  229 => 83,  226 => 82,  212 => 81,  206 => 80,  189 => 79,  185 => 78,  179 => 75,  170 => 68,  161 => 65,  158 => 64,  154 => 63,  146 => 60,  139 => 55,  136 => 54,  122 => 53,  116 => 52,  99 => 51,  95 => 50,  90 => 47,  86 => 46,  71 => 33,  58 => 30,  55 => 29,  51 => 28,  23 => 2,  19 => 1,);
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

                        <div class=\"isotope col-3 gutter clearfix\">

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
{% endif %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/case-study.htm", "");
    }
}
