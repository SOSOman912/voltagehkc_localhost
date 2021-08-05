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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/robots.htm */
class __TwigTemplate_523ed7dbe189407d0e757b526121aa2feb0981753f9e9807e47a6357c26f42b4 extends \Twig\Template
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
        echo "User-agent: *
Crawl-delay: 10
Disallow: /backend/cms

https://www.voltagehk.com/sitemap.xml";
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/robots.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("User-agent: *
Crawl-delay: 10
Disallow: /backend/cms

https://www.voltagehk.com/sitemap.xml", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/robots.htm", "");
    }
}
