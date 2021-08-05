<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/layouts/fallback.htm */
class __TwigTemplate_5b3d782fd87fdabf706694a61de057af58371d96c35b46dfa9d06bd0d1d94c16 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/layouts/fallback.htm", "");
    }
}
