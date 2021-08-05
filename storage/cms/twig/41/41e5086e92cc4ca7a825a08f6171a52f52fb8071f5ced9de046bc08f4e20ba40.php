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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/about-us.htm */
class __TwigTemplate_81d4de24d124c067b67307455ea6b81fb116ccb72e484fc97cdfd804084e8a01 extends \Twig\Template
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
                            
                            <h2 class=\"page-header-title\">About Us</h2>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->

            <div class=\"container space-section\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                            <h3>We are Voltage</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"about-us\">
                            <p>Voltage is a Hong Kong-based PR, digital and events marketing agency, specialized in delivering messages that resonate. Grounded in a proven - online, print and consumer facing - hybrid approach to communications, Voltage provides forward-thinking 360 engagement in an ever-changing media and consumer landscape. This multi-level strategy allows Voltage to propel brands through the clutter and to the forefront of Asia’s multilingual media arena – turning them into market leaders with concepts and experiences that people can relate to.</p>

                          
                        </div><!-- / .about-us -->

                    </div>
                </div>
            </div>

            <div class=\"container space-section\"></div>

            <section class=\"full-section dark-section parallax\" id=\"section-8\" data-stellar-background-ratio=\"0.2\" style=\"background-image: url(";
        // line 50
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
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/case-study\" class=\"btn btn-default-line btn-line-white btn-min-width\">View All</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- / .full-section -->

        </div><!-- / PAGE CONTENT --> 
</body>

";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 84,  125 => 72,  100 => 50,  54 => 7,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
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
                            
                            <h2 class=\"page-header-title\">About Us</h2>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->

            <div class=\"container space-section\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                            <h3>We are Voltage</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"about-us\">
                            <p>Voltage is a Hong Kong-based PR, digital and events marketing agency, specialized in delivering messages that resonate. Grounded in a proven - online, print and consumer facing - hybrid approach to communications, Voltage provides forward-thinking 360 engagement in an ever-changing media and consumer landscape. This multi-level strategy allows Voltage to propel brands through the clutter and to the forefront of Asia’s multilingual media arena – turning them into market leaders with concepts and experiences that people can relate to.</p>

                          
                        </div><!-- / .about-us -->

                    </div>
                </div>
            </div>

            <div class=\"container space-section\"></div>

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
                                    <a href=\"{{'home' | page }}/case-study\" class=\"btn btn-default-line btn-line-white btn-min-width\">View All</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- / .full-section -->

        </div><!-- / PAGE CONTENT --> 
</body>

{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/about-us.htm", "");
    }
}
