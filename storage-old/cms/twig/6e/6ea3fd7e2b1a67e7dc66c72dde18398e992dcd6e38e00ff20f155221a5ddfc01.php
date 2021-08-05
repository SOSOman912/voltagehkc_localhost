<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/portfolio-detail.htm */
class __TwigTemplate_130a329f122a80fa927ffc405b37fb87b18d35370398be23253ed28ac31d64ec extends Twig_Template
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
        echo "<style>
#main-container{
    background-color: #fff;
}
</style>
       <div id=\"page-content\" style='background-color: #fff;'>
       
            <div class=\"mt106 owl-carousel custom-content content-portfolio-detail mb0\">
                
                                  
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "image1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
            // line 13
            echo "                             <section class=\"content-portfolio-detail-item\">    
                                 <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pic"], "path", array()), "html", null, true);
            echo "\" style='width:100%' >
                             </section>            
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            
          </div><!-- / .owl-carousel .custom-content .content-portfolio-detail -->

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <ol class=\"breadcrumb custom-breadcrumbs mt30 mb60\">
                            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("case-study");
        echo "\">Case Study</a></li>
                            
                            
                            
                                                ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "categories", array()), "count", array())) {
            echo " 
                                                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "categories", array()));
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
                // line 32
                echo "                                                        <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("case-study");
                echo "/?thecat=thecat";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
                echo "\">
                                                        ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo "  ";
                }
                // line 34
                echo "                                                        </a></li>
                                                    ";
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
            // line 36
            echo "                                                ";
        }
        // line 37
        echo "                            
                            
                            
                            <li class=\"active\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "title", array()), "html", null, true);
        echo "</li>
                        </ol>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
<!--
                    <div class=\"col-sm-3\">  
                        <div class=\"widget widget-list style-2\">
                            <h3 class=\"widget-title\">Case Studies</h3>

                            <div>
                                <ul>
                                    <li><a href=\"#\">Company Name</a></li>
                                    <li><a href=\"#\">Website</a></li>
                                    <li><a href=\"#\">Contact Info</a></li>
                                    <li><a href=\"#\">Category</a></li>
                                </ul>
                            </div>
                        </div> --><!-- / .widget-list -->
<!--
                        <div class=\"widget widget-text style-2\">
                            <h3 class=\"widget-title\">Interested?</h3>

                            <div>
                                <p>Don't be afraid to tell us about your project's timeline and budget. We're straightforward with our abilities & pricing, and knowing where you're coming from helps us hit the target</p>
                                
                                <div class=\"clearfix space15\"></div>
                                <a href=\"#\" class=\"btn btn-default btn-big\">Contact Us Now!</a>
                            </div>
                        </div> --><!-- / .widget-list -->
                <!--    </div> -->
                
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h3 class='mb60 textupper'>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
                        <h4>Overview</h4>

                        <p>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "overview", array()), "html", null, true);
        echo "</p>

                        
                        <h4>Strategy</h4>
                        <p>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "strategy", array()), "html", null, true);
        echo "</p>
                        <h4>Results</h4>
                        <p>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "result", array()), "html", null, true);
        echo "</p>
                        
                        
                        ";
        // line 89
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "prvalue", array())) {
            // line 90
            echo "                        <div class=\"portfolio-block mt30 mb30\">
                            <div class='row'>
                            \t<div class='col-md-4'>
                            \t\t<img src=\"http://139.162.35.237/voltage/themes/voltage/assets/images/porfolio-visitor.png\" alt=\"visitor\">
                            \t
                            \t\t<div class=\"counter\">
                            
                                        <div class=\"counter-value\" data-value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "prvalue", array()), "html", null, true);
            echo "\"></div>
                                        
                                        <div class=\"counter-details\">
                                            <h4>PR Value</h4>
                                        </div><!-- counter-details -->
                                        
                                    </div><!-- counter -->
                            \t\t
                            \t</div>
                            \t<div class='col-md-4'>
                            \t\t<img src=\"http://139.162.35.237/voltage/themes/voltage/assets/images/porfolio-leader.png\" alt=\"leader\">
                            \t
                            \t    <div class=\"counter\">
                            
                                        <div class=\"counter-value\" data-value=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "leader", array()), "html", null, true);
            echo "\"></div>
                                        
                                        <div class=\"counter-details\">
                                            <h4>Industry leaders attended</h4>
                                        </div><!-- counter-details -->
                                        
                                    </div><!-- counter -->
                            \t
                            \t
                            \t\t
                            \t</div>
                            \t<div class='col-md-4'>
                            \t\t<img src=\"http://139.162.35.237/voltage/themes/voltage/assets/images/portfolio-media.png\" alt=\"media\">
                            \t\t
                            \t\t<div class=\"counter\">
                            
                                        <div class=\"counter-value\" data-value=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "coverage", array()), "html", null, true);
            echo "\"></div>
                                        
                                        <div class=\"counter-details\">
                                            <h4>coverage in media</h4>
                                        </div><!-- counter-details -->
                                        
                                    </div><!-- counter -->
                            \t
                            \t</div>
                            </div>
                        </div>
                        ";
        }
        // line 139
        echo "                        
                        <div class=\"mtn30 owl-carousel custom-content content-portfolio-detail nonav mb0\">
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "image2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
            // line 142
            echo "                             <section class=\"content-portfolio-detail-item\">    
                                 <img src=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pic"], "path", array()), "html", null, true);
            echo "\" >
                             </section>            
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                        
                        </div><!-- / .owl-carousel .custom-content .content-portfolio-detail -->
                        
                        
                        ";
        // line 150
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "testimonial", array())) {
            // line 151
            echo "                        <div class=\"testimonial\">
                            <blockquote>
                                        
                                            <h4>&quot;";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "testimonial", array()), "html", null, true);
            echo "&quot;</h4>
                                        
                            </blockquote>
                                        
                            <h4 class='newj'>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "testimonialname", array()), "html", null, true);
            echo "</h4>
                                        
                            <h6>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["case"] ?? null), "testimonialtitle", array()), "html", null, true);
            echo "</h6>

                         </div>
                         ";
        }
        // line 164
        echo "                         
                         <div class='qcontact text-center'>
                             <h3>INTERESTED?</h3>
                             <p>Don't be afraid to tell us your next project's timeline and budget!</p>
                             <a class=\"btn btn-default btn-min-width wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\" href=\"";
        // line 168
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact Us</a>
                         </div>


                   
                </div>
            </div>

            <div class=\"clearfix space60 showin-1200\"></div>
            <div class=\"clearfix space15 showin-1200\"></div>


        </div>
        
        <div class=\"isotope-fit-columns-lp clearfix nospace-bottom isotope-lp isotope-lp-inner hidden-991\">
                <div class=\"portfolio-item item-casestudy w2 one\">
                        
                    <a href=\"http://139.162.35.237/voltage/portfolio-detail/topfit\" class=\"portfolio-item-thumbnail\">
                            
                        <img src=\"";
        // line 187
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/case-study/topfit2.jpg");
        echo "\" alt=\"\">
                        
                        <div class=\"portfolio-item-hover\">
                            
       
                            
                            <div class=\"portfolio-item-description\">
                                
                                <h4>Top Fit</h4>
                                
                                <span>learn More</span>
                                
                            </div><!-- portfolio-item-description -->
                            
                        </div><!-- portfolio-item-hover -->
                        
                    </a><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

                <div class=\"portfolio-item item-casestudy w3 two\">
                        
                    <a href=\"http://139.162.35.237/voltage/portfolio-detail/kben-hol\" class=\"portfolio-item-thumbnail\">
                            
                        <img src=\"";
        // line 211
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/case-study/keb.jpg");
        echo "\" alt=\"\">
                        
                        <div class=\"portfolio-item-hover\">
                            
                
                            
                            <div class=\"portfolio-item-description\">
                                
                                <h4>KBEN & HOL</h4>
                                
                                <span>learn More</span>
                                
                            </div><!-- portfolio-item-description -->
                            
                        </div><!-- portfolio-item-hover -->
                        
                    </a><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

                <div class=\"portfolio-item item-casestudy w50 seven\">
                        
                    <a href=\"http://139.162.35.237/voltage/portfolio-detail/ce-la-vi\" class=\"portfolio-item-thumbnail\">
                            
                        <img src=\"";
        // line 235
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/case-study/celevi2.jpg");
        echo "\" alt=\"\">
                        
                        <div class=\"portfolio-item-hover\">
                            
                  
                            
                            <div class=\"portfolio-item-description\">
                                
                                <h4>Ce Le Vi</h4>
                                
                                <span>learn More</span>
                                
                            </div><!-- portfolio-item-description -->
                            
                        </div><!-- portfolio-item-hover -->
                        
                    </a><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->
    </div>
        
    </div><!-- / PAGE CONTENT -->
</body>

";
        // line 259
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/portfolio-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 259,  388 => 235,  361 => 211,  334 => 187,  312 => 168,  306 => 164,  299 => 160,  294 => 158,  287 => 154,  282 => 151,  280 => 150,  274 => 146,  265 => 143,  262 => 142,  258 => 141,  254 => 139,  239 => 127,  220 => 111,  203 => 97,  194 => 90,  192 => 89,  186 => 86,  181 => 84,  174 => 80,  168 => 77,  128 => 40,  123 => 37,  120 => 36,  105 => 34,  100 => 33,  93 => 32,  76 => 31,  72 => 30,  65 => 26,  61 => 25,  51 => 17,  42 => 14,  39 => 13,  35 => 12,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'header2' %}
<style>
#main-container{
    background-color: #fff;
}
</style>
       <div id=\"page-content\" style='background-color: #fff;'>
       
            <div class=\"mt106 owl-carousel custom-content content-portfolio-detail mb0\">
                
                                  
                            {% for pic in case.image1 %}
                             <section class=\"content-portfolio-detail-item\">    
                                 <img src=\"{{ pic.path }}\" style='width:100%' >
                             </section>            
                             {% endfor %}
            
          </div><!-- / .owl-carousel .custom-content .content-portfolio-detail -->

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <ol class=\"breadcrumb custom-breadcrumbs mt30 mb60\">
                            <li><a href=\"{{ 'home' | page }}\">Home</a></li>
                            <li><a href=\"{{ 'case-study' | page }}\">Case Study</a></li>
                            
                            
                            
                                                {% if case.categories.count %} 
                                                    {% for category in case.categories %}
                                                        <li><a href=\"{{ 'case-study' | page }}/?thecat=thecat{{ category.id }}\">
                                                        {{ category.title }}{% if not loop.last %}  {% endif %}
                                                        </a></li>
                                                    {% endfor %}
                                                {% endif %}
                            
                            
                            
                            <li class=\"active\">{{ case.title }}</li>
                        </ol>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
<!--
                    <div class=\"col-sm-3\">  
                        <div class=\"widget widget-list style-2\">
                            <h3 class=\"widget-title\">Case Studies</h3>

                            <div>
                                <ul>
                                    <li><a href=\"#\">Company Name</a></li>
                                    <li><a href=\"#\">Website</a></li>
                                    <li><a href=\"#\">Contact Info</a></li>
                                    <li><a href=\"#\">Category</a></li>
                                </ul>
                            </div>
                        </div> --><!-- / .widget-list -->
<!--
                        <div class=\"widget widget-text style-2\">
                            <h3 class=\"widget-title\">Interested?</h3>

                            <div>
                                <p>Don't be afraid to tell us about your project's timeline and budget. We're straightforward with our abilities & pricing, and knowing where you're coming from helps us hit the target</p>
                                
                                <div class=\"clearfix space15\"></div>
                                <a href=\"#\" class=\"btn btn-default btn-big\">Contact Us Now!</a>
                            </div>
                        </div> --><!-- / .widget-list -->
                <!--    </div> -->
                
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h3 class='mb60 textupper'>{{ case.title }}</h3>
                        <h4>Overview</h4>

                        <p>{{ case.overview }}</p>

                        
                        <h4>Strategy</h4>
                        <p>{{ case.strategy }}</p>
                        <h4>Results</h4>
                        <p>{{ case.result }}</p>
                        
                        
                        {% if case.prvalue %}
                        <div class=\"portfolio-block mt30 mb30\">
                            <div class='row'>
                            \t<div class='col-md-4'>
                            \t\t<img src=\"http://139.162.35.237/voltage/themes/voltage/assets/images/porfolio-visitor.png\" alt=\"visitor\">
                            \t
                            \t\t<div class=\"counter\">
                            
                                        <div class=\"counter-value\" data-value=\"{{ case.prvalue }}\"></div>
                                        
                                        <div class=\"counter-details\">
                                            <h4>PR Value</h4>
                                        </div><!-- counter-details -->
                                        
                                    </div><!-- counter -->
                            \t\t
                            \t</div>
                            \t<div class='col-md-4'>
                            \t\t<img src=\"http://139.162.35.237/voltage/themes/voltage/assets/images/porfolio-leader.png\" alt=\"leader\">
                            \t
                            \t    <div class=\"counter\">
                            
                                        <div class=\"counter-value\" data-value=\"{{ case.leader }}\"></div>
                                        
                                        <div class=\"counter-details\">
                                            <h4>Industry leaders attended</h4>
                                        </div><!-- counter-details -->
                                        
                                    </div><!-- counter -->
                            \t
                            \t
                            \t\t
                            \t</div>
                            \t<div class='col-md-4'>
                            \t\t<img src=\"http://139.162.35.237/voltage/themes/voltage/assets/images/portfolio-media.png\" alt=\"media\">
                            \t\t
                            \t\t<div class=\"counter\">
                            
                                        <div class=\"counter-value\" data-value=\"{{ case.coverage }}\"></div>
                                        
                                        <div class=\"counter-details\">
                                            <h4>coverage in media</h4>
                                        </div><!-- counter-details -->
                                        
                                    </div><!-- counter -->
                            \t
                            \t</div>
                            </div>
                        </div>
                        {% endif %}
                        
                        <div class=\"mtn30 owl-carousel custom-content content-portfolio-detail nonav mb0\">
                        {% for pic in case.image2 %}
                             <section class=\"content-portfolio-detail-item\">    
                                 <img src=\"{{ pic.path }}\" >
                             </section>            
                        {% endfor %}
                        
                        </div><!-- / .owl-carousel .custom-content .content-portfolio-detail -->
                        
                        
                        {% if  case.testimonial %}
                        <div class=\"testimonial\">
                            <blockquote>
                                        
                                            <h4>&quot;{{ case.testimonial }}&quot;</h4>
                                        
                            </blockquote>
                                        
                            <h4 class='newj'>{{ case.testimonialname }}</h4>
                                        
                            <h6>{{ case.testimonialtitle }}</h6>

                         </div>
                         {% endif %}
                         
                         <div class='qcontact text-center'>
                             <h3>INTERESTED?</h3>
                             <p>Don't be afraid to tell us your next project's timeline and budget!</p>
                             <a class=\"btn btn-default btn-min-width wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\" href=\"{{ 'contact' | page }}\">Contact Us</a>
                         </div>


                   
                </div>
            </div>

            <div class=\"clearfix space60 showin-1200\"></div>
            <div class=\"clearfix space15 showin-1200\"></div>


        </div>
        
        <div class=\"isotope-fit-columns-lp clearfix nospace-bottom isotope-lp isotope-lp-inner hidden-991\">
                <div class=\"portfolio-item item-casestudy w2 one\">
                        
                    <a href=\"http://139.162.35.237/voltage/portfolio-detail/topfit\" class=\"portfolio-item-thumbnail\">
                            
                        <img src=\"{{ 'assets/images/case-study/topfit2.jpg'|theme }}\" alt=\"\">
                        
                        <div class=\"portfolio-item-hover\">
                            
       
                            
                            <div class=\"portfolio-item-description\">
                                
                                <h4>Top Fit</h4>
                                
                                <span>learn More</span>
                                
                            </div><!-- portfolio-item-description -->
                            
                        </div><!-- portfolio-item-hover -->
                        
                    </a><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

                <div class=\"portfolio-item item-casestudy w3 two\">
                        
                    <a href=\"http://139.162.35.237/voltage/portfolio-detail/kben-hol\" class=\"portfolio-item-thumbnail\">
                            
                        <img src=\"{{ 'assets/images/case-study/keb.jpg'|theme }}\" alt=\"\">
                        
                        <div class=\"portfolio-item-hover\">
                            
                
                            
                            <div class=\"portfolio-item-description\">
                                
                                <h4>KBEN & HOL</h4>
                                
                                <span>learn More</span>
                                
                            </div><!-- portfolio-item-description -->
                            
                        </div><!-- portfolio-item-hover -->
                        
                    </a><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

                <div class=\"portfolio-item item-casestudy w50 seven\">
                        
                    <a href=\"http://139.162.35.237/voltage/portfolio-detail/ce-la-vi\" class=\"portfolio-item-thumbnail\">
                            
                        <img src=\"{{ 'assets/images/case-study/celevi2.jpg'|theme }}\" alt=\"\">
                        
                        <div class=\"portfolio-item-hover\">
                            
                  
                            
                            <div class=\"portfolio-item-description\">
                                
                                <h4>Ce Le Vi</h4>
                                
                                <span>learn More</span>
                                
                            </div><!-- portfolio-item-description -->
                            
                        </div><!-- portfolio-item-hover -->
                        
                    </a><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->
    </div>
        
    </div><!-- / PAGE CONTENT -->
</body>

{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/portfolio-detail.htm", "");
    }
}
