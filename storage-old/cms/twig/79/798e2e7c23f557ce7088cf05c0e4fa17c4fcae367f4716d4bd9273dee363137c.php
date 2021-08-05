<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/nav.htm */
class __TwigTemplate_2177005d004beed2e631ccfb393c6b6b20096faee802e78f9333599ace50424b extends Twig_Template
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
        echo "<a id=\"mobile-menu-button\" href=\"#\">=</a>
                                             
                            <ul class=\"menu clearfix\" id=\"menu\">
                                <li class=\"\">
                                    <a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about-us");
        echo "\">Who We Are</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("what-we-do");
        echo "\">What We Do</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("clients");
        echo "\">Clients</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("case-study");
        echo "\">Case Study</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog-list");
        echo "\">Stories</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a>
                                </li>
                            </ul>";
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  49 => 17,  43 => 14,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a id=\"mobile-menu-button\" href=\"#\">=</a>
                                             
                            <ul class=\"menu clearfix\" id=\"menu\">
                                <li class=\"\">
                                    <a href=\"{{ 'about-us' | page }}\">Who We Are</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'what-we-do' | page }}\">What We Do</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'clients' | page }}\">Clients</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'case-study' | page }}\">Case Study</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'blog-list' | page }}\">Stories</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'contact' | page }}\">Contact</a>
                                </li>
                            </ul>", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/nav.htm", "");
    }
}
