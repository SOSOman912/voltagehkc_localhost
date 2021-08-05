<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/header2.htm */
class __TwigTemplate_1137fa6f9922c5f7c202ba6d4325abd732330f6292df0c3d0f15bd6a5ce6ef40 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<body>
    
    <div id=\"main-container\">

        <!-- HEADER -->
        <header id=\"header\"  class=\"header-style-two style3\">
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-3\">

                        <!-- LOGO -->
                        <div id=\"logo\">
                            <a href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
                                <img src=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\" class=\"logo-light\">
                                <img src=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo-dark.png");
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
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/header2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 26,  57 => 25,  46 => 17,  42 => 16,  38 => 15,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'head' %}
<body>
    
    <div id=\"main-container\">

        <!-- HEADER -->
        <header id=\"header\"  class=\"header-style-two style3\">
            
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
                    
        </header><!-- HEADER -->", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/header2.htm", "");
    }
}
