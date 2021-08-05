<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/what-we-do.htm */
class __TwigTemplate_a67ce82258dd905951bc5bf42992d3036960d0c02cecc7b398145eca9bc5b695 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
        <div id=\"page-content\">
            
            <div class=\"parallax\" id=\"page-header\" style=\"background-image: url(";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/page-bg/111.jpg");
        echo ");\">  
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            
                            <h2 class=\"page-header-title\">What We Do</h2>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                            <h3>Our Expertise</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"about-us\">
                            <p>With fingertips firmly on the pulse, Voltage invigorates brand presence through a combination of carefully crafted services. These include press outreach, digital intelligence and social media, with an emphasis on KOL (key opinion leader), celebrity and blogger endorsements, that synergize to bring market-mover campaigns to life.</p>

                        </div><!-- / .about-us -->

                    </div>
                </div>
            </div>

            <div class=\"container space-section2\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                        
                            <h3>What we do</h3>
                            
                        </div><!-- headline -->
                    
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

             <div class=\"container\">
                <div class=\"row\">
                    
                    ";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("whatwedo2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "
                </div>
            </div>

            <div class=\"container space-section\"></div>
            <div class=\"clearfix space30 showin-480\"></div>

               <section class=\"full-section dark-section\" id=\"section-7\">
                
                <div class=\"full-section-overlay-color black\"></div>

                <div class=\"full-section-container\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-offset-1 col-sm-10\">

                                 ";
        // line 78
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 79
        echo "                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>

            <div class=\"container space-section2\"></div>
            <div class=\"clearfix space30 showin-480\"></div>

            ";
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("number"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 90
        echo "   
            <div class=\"clearfix space30 showin-480\"></div>

            <section class=\"full-section dark-section parallax\" id=\"section-8\" data-stellar-background-ratio=\"0.2\" style=\"background-image: url(";
        // line 93
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/section-bg/1.jpg");
        echo ");\">
                <div class=\"full-section-overlay-color purple\"></div>

                <div class=\"full-section-container\">
                    
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                
                                <div class=\"headline mb-45\">
                                    <h3>Case Study</h3>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">

                                <div class=\"text-center\">
                                    <a href=\"";
        // line 115
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("case-study");
        echo "\" class=\"btn btn-default-line btn-line-white btn-min-width\">View All</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- / .full-section -->

        </div><!-- / PAGE CONTENT -->
</body>
";
        // line 126
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/what-we-do.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 126,  159 => 115,  134 => 93,  129 => 90,  125 => 89,  113 => 79,  109 => 78,  91 => 62,  87 => 61,  28 => 5,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'header' %}

        <div id=\"page-content\">
            
            <div class=\"parallax\" id=\"page-header\" style=\"background-image: url({{'assets/images/page-bg/111.jpg'|theme}});\">  
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            
                            <h2 class=\"page-header-title\">What We Do</h2>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                            <h3>Our Expertise</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"about-us\">
                            <p>With fingertips firmly on the pulse, Voltage invigorates brand presence through a combination of carefully crafted services. These include press outreach, digital intelligence and social media, with an emphasis on KOL (key opinion leader), celebrity and blogger endorsements, that synergize to bring market-mover campaigns to life.</p>

                        </div><!-- / .about-us -->

                    </div>
                </div>
            </div>

            <div class=\"container space-section2\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                        
                            <h3>What we do</h3>
                            
                        </div><!-- headline -->
                    
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

             <div class=\"container\">
                <div class=\"row\">
                    
                    {% partial 'whatwedo2' %}

                </div>
            </div>

            <div class=\"container space-section\"></div>
            <div class=\"clearfix space30 showin-480\"></div>

               <section class=\"full-section dark-section\" id=\"section-7\">
                
                <div class=\"full-section-overlay-color black\"></div>

                <div class=\"full-section-container\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-offset-1 col-sm-10\">

                                 {% partial 'testimonials' %}
                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>

            <div class=\"container space-section2\"></div>
            <div class=\"clearfix space30 showin-480\"></div>

            {% partial 'number' %}
   
            <div class=\"clearfix space30 showin-480\"></div>

            <section class=\"full-section dark-section parallax\" id=\"section-8\" data-stellar-background-ratio=\"0.2\" style=\"background-image: url({{'assets/images/section-bg/1.jpg'|theme}});\">
                <div class=\"full-section-overlay-color purple\"></div>

                <div class=\"full-section-container\">
                    
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                
                                <div class=\"headline mb-45\">
                                    <h3>Case Study</h3>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">

                                <div class=\"text-center\">
                                    <a href=\"{{ 'case-study' | page }}\" class=\"btn btn-default-line btn-line-white btn-min-width\">View All</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- / .full-section -->

        </div><!-- / PAGE CONTENT -->
</body>
{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/what-we-do.htm", "");
    }
}
