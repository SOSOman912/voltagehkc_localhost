<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/plugins/rainlab/mailchimp/components/signup/result.htm */
class __TwigTemplate_c16569073946915e8c621d43b1513d53636dfca36d7e6f4918b45f112f3c8f3e extends Twig_Template
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
        if (($context["error"] ?? null)) {
            // line 2
            echo "    <div class=\"alert alert-danger\">Sorry there was an error: ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
";
        } else {
            // line 4
            echo "    <div class=\"alert alert-success\">Great success! Now we can keep in touch, see you soon!</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/plugins/rainlab/mailchimp/components/signup/result.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div class=\"alert alert-danger\">Sorry there was an error: {{ error }}</div>
{% else %}
    <div class=\"alert alert-success\">Great success! Now we can keep in touch, see you soon!</div>
{% endif %}
", "/home/voltagehkc/domains/voltagehk.com/public_html/plugins/rainlab/mailchimp/components/signup/result.htm", "");
    }
}
