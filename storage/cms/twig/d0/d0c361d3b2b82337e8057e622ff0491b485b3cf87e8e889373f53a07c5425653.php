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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/what-we-do.htm */
class __TwigTemplate_9de2ae1600fe685439b6d7d2c08ddc56aa49e4c030ff2854328957460a99bd46 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
        <div id=\"page-content\">
            
         <!--   <div class=\"parallax nospace-bottom\" data-stellar-background-ratio=\"0.2\" id=\"page-header\" style=\"background-image: url(";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/page-bg/2.jpg");
        echo ");\">-->
       <!--         <div id=\"page-header\" class=\"parallax nospace-bottom\"  style=\"background-image: url(";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/page-bg/111.jpg");
        echo ");\">  -->
                <div id=\"page-header\" class=\"parallax nospace-bottom\"  style=\"background-image: url(";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/page-bg/111.jpg");
        echo ");\"> 
                 
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            
                            <h2 class=\"page-header-title\">What We Do</h2>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->

            <div class=\"container space-section\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                            <h3>Public Relations | Digital Marketing | Influencer Marketing</h3>
                            
                        </div><!-- headline -->
                    
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

             <div class=\"container\">
                <div class=\"row\">
                    
                    ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("whatwedo2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
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
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>


            
   
            <div class=\"clearfix space30 showin-480\"></div>

            <section class=\"full-section dark-section parallax\" id=\"section-8\" data-stellar-background-ratio=\"0.2\" style=\"background-image: url(";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/section-bg/1.jpg");
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
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("case-study");
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
        // line 101
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
        return array (  167 => 101,  153 => 90,  128 => 68,  114 => 56,  110 => 55,  92 => 39,  88 => 38,  54 => 7,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

        <div id=\"page-content\">
            
         <!--   <div class=\"parallax nospace-bottom\" data-stellar-background-ratio=\"0.2\" id=\"page-header\" style=\"background-image: url({{'assets/images/page-bg/2.jpg'|theme}});\">-->
       <!--         <div id=\"page-header\" class=\"parallax nospace-bottom\"  style=\"background-image: url({{'assets/images/page-bg/111.jpg'|theme}});\">  -->
                <div id=\"page-header\" class=\"parallax nospace-bottom\"  style=\"background-image: url({{'assets/images/page-bg/111.jpg'|theme}});\"> 
                 
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            
                            <h2 class=\"page-header-title\">What We Do</h2>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->

            <div class=\"container space-section\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                            <h3>Public Relations | Digital Marketing | Influencer Marketing</h3>
                            
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
