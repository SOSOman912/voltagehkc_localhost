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

/* /Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/nav.htm */
class __TwigTemplate_c92b184ea004aee9d5ad2c1f68d1341a6c2b4b08d75987d10532feb89d904fc1 extends \Twig\Template
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
        echo "<a id=\"mobile-menu-button\" href=\"#\" style\"z-index:999;\">=</a>
                                             
                            <ul class=\"menu clearfix\" id=\"menu\">
                                <li class=\"\" data-item=\"about-us\">
                                    <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">About Us</a>
                                </li>
                                <li class=\"\" data-item=\"what-we-do\">
                                    <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("what-we-do");
        echo "\">What We Do</a>
                                </li>
                                <li class=\"\" data-item=\"clients\">
                                    <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("clients");
        echo "\">Clients</a>
                                </li>
                                <li class=\"\" data-item=\"case-study\">
                                    <a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("case-study");
        echo "\">Case Study</a>
                                </li>
                                <li class=\"\" data-item=\"blog\">
                                    <a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-list");
        echo "\">Blog</a>
                                </li>
                                <li class=\"\" data-item=\"contact\">
                                    <a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
                                </li>
                            </ul>";
    }

    public function getTemplateName()
    {
        return "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  67 => 17,  61 => 14,  55 => 11,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"mobile-menu-button\" href=\"#\" style\"z-index:999;\">=</a>
                                             
                            <ul class=\"menu clearfix\" id=\"menu\">
                                <li class=\"\" data-item=\"about-us\">
                                    <a href=\"{{ 'about-us' | page }}\">About Us</a>
                                </li>
                                <li class=\"\" data-item=\"what-we-do\">
                                    <a href=\"{{ 'what-we-do' | page }}\">What We Do</a>
                                </li>
                                <li class=\"\" data-item=\"clients\">
                                    <a href=\"{{ 'clients' | page }}\">Clients</a>
                                </li>
                                <li class=\"\" data-item=\"case-study\">
                                    <a href=\"{{ 'case-study' | page }}\">Case Study</a>
                                </li>
                                <li class=\"\" data-item=\"blog\">
                                    <a href=\"{{ 'blog-list' | page }}\">Blog</a>
                                </li>
                                <li class=\"\" data-item=\"contact\">
                                    <a href=\"{{ 'contact' | page }}\">Contact</a>
                                </li>
                            </ul>", "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/nav.htm", "");
    }
}
