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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/pcontact.htm */
class __TwigTemplate_647553100428b583defb60a1fef2bd3d02b0214e9d8c839adb34cb62dc8422d8 extends \Twig\Template
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
        echo "<h3 class=\"text-uppercase\">Thank you! We will get back to you soon!</h3>";
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/pcontact.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 class=\"text-uppercase\">Thank you! We will get back to you soon!</h3>", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/pcontact.htm", "");
    }
}
