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

/* /Users/dickylam/Desktop/website/windmaker/public_html/themes/voltage/partials/header.htm */
class __TwigTemplate_f5d71ff29a7b8c27d23c0ce6640c5519859bd79729b37664e137e854752b51fd extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<body>
     
    <div id=\"main-container\">

        <!-- HEADER -->
        <header id=\"header\" class=\"header-style-two\">
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-3\">

                        <!-- LOGO -->
                        <div id=\"logo\">
                            <a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                                <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\" class=\"logo-light\">
                                <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-dark.png");
        echo "\" alt=\"\" class=\"logo-dark\">
                            </a>
                        </div><!-- LOGO -->    
                    </div><!-- col -->

                    <div class=\"col-sm-9\">
                        <!-- MENU --> 
                        <nav>
                            ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "                        </nav>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->    
                    
        </header><!-- HEADER -->";
    }

    public function getTemplateName()
    {
        return "/Users/dickylam/Desktop/website/windmaker/public_html/themes/voltage/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  75 => 25,  64 => 17,  60 => 16,  56 => 15,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'head' %}
<body>
     
    <div id=\"main-container\">

        <!-- HEADER -->
        <header id=\"header\" class=\"header-style-two\">
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-3\">

                        <!-- LOGO -->
                        <div id=\"logo\">
                            <a href=\"{{'home' | page}}\">
                                <img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\" class=\"logo-light\">
                                <img src=\"{{ 'assets/images/logo-dark.png'|theme }}\" alt=\"\" class=\"logo-dark\">
                            </a>
                        </div><!-- LOGO -->    
                    </div><!-- col -->

                    <div class=\"col-sm-9\">
                        <!-- MENU --> 
                        <nav>
                            {% partial 'nav' %}
                        </nav>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->    
                    
        </header><!-- HEADER -->", "/Users/dickylam/Desktop/website/windmaker/public_html/themes/voltage/partials/header.htm", "");
    }
}
