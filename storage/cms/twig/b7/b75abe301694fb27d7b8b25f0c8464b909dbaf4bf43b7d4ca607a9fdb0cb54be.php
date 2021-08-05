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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-detail.htm */
class __TwigTemplate_703eca275a56d1b4e5fc62163df252effffafa1ba4576d41e937f30a5b70f751 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<style>
#main-container{
    background-color: #fff;
}
</style>

<div id=\"page-content\" style='background-color: #fff;'>

";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10)) {
            // line 11
            echo "    ";
            $context["previousPostRecord"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "controller", [], "any", false, false, false, 11), "pageObject", [], "any", false, false, false, 11), "previousPost", [0 => ($context["post"] ?? null)], "method", false, false, false, 11);
            // line 12
            echo "\t";
            $context["nextPostRecord"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "controller", [], "any", false, false, false, 12), "pageObject", [], "any", false, false, false, 12), "nextPost", [0 => ($context["post"] ?? null)], "method", false, false, false, 12);
            // line 13
            echo "    
    <div class=\"mt106 ";
            // line 14
            echo (((($context["imageCount"] ?? null) > 1)) ? ("owl-carousel custom-content content-portfolio-detail") : (""));
            echo " mb0\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 16
                echo "      <section class=\"content-portfolio-detail-item\">
      \t<img src=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 17), "html", null, true);
                echo "\" style='width:100%'>
\t  </section>
\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t</div>
\t
\t<div class=\"container\">
        <div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<ol class=\"breadcrumb custom-breadcrumbs mt30 mb60\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 27
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 30
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-list");
            echo "\">Blog</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t    <div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t<h3 class='mb60 textupper'>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</h3>
\t\t\t\t<p>";
            // line 42
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 42);
            echo "</p>
\t\t\t\t
\t\t\t\t<div class='qcontact'>
\t\t\t\t    <div class=\"blog-previous-next\">
\t\t\t\t        <div class=\"blog-previous\">
        \t\t\t\t\t";
            // line 47
            if (($context["previousPostRecord"] ?? null)) {
                // line 48
                echo "\t\t\t\t\t        <div class=\"arrow-icon\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["previousPostRecord"] ?? null), "url", [], "any", false, false, false, 48), "html", null, true);
                echo "\"><img src=\"/storage/app/media/icon-previous.png\" /></a></div>
\t\t\t\t\t        <div class=\"blog-featured-image\">
\t\t\t\t\t            <div class=\"figure\">
    \t\t\t\t\t            <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["previousPostRecord"] ?? null), "url", [], "any", false, false, false, 51), "html", null, true);
                echo "\">
                                        <img src=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["previousPostRecord"] ?? null), "featured_images", [], "any", false, false, false, 52)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, false, 52), "html", null, true);
                echo "\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"blog-title\"><a href=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["previousPostRecord"] ?? null), "url", [], "any", false, false, false, 56), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["previousPostRecord"] ?? null), "title", [], "any", false, false, false, 56), "html", null, true);
                echo "</a></div>
                            ";
            }
            // line 58
            echo "                        </div>
                        <div class=\"blog-next\">
                        \t";
            // line 60
            if (($context["nextPostRecord"] ?? null)) {
                // line 61
                echo "                            <div class=\"blog-featured-image\">
                                <div class=\"figure\">
                                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nextPostRecord"] ?? null), "url", [], "any", false, false, false, 63), "html", null, true);
                echo "\">
                                        <img src=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["nextPostRecord"] ?? null), "featured_images", [], "any", false, false, false, 64)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "path", [], "any", false, false, false, 64), "html", null, true);
                echo "\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"blog-title\"><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nextPostRecord"] ?? null), "url", [], "any", false, false, false, 68), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nextPostRecord"] ?? null), "title", [], "any", false, false, false, 68), "html", null, true);
                echo "</a></div>
                            <div class=\"arrow-icon\"><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nextPostRecord"] ?? null), "url", [], "any", false, false, false, 69), "html", null, true);
                echo "\"><img src=\"/storage/app/media/icon-next.png\" /></a></div>
                            ";
            }
            // line 71
            echo "                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        } else {
            // line 78
            echo "    <div class=\"mt106 mb0\">
\t</div>
\t
\t<div class=\"container\">
        <div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<ol class=\"breadcrumb custom-breadcrumbs mt30 mb60\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 86
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 89
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-list");
            echo "\">Blog</a>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t    <div class=\"col-md-8 col-md-offset-2\">
\t\t    <h2 style=\"    margin: 0 0 70px 0;
    text-align: center;\">Post Not Found</h2>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 105
        echo "
</div>

";
        // line 108
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 108,  229 => 105,  210 => 89,  204 => 86,  194 => 78,  185 => 71,  180 => 69,  174 => 68,  167 => 64,  163 => 63,  159 => 61,  157 => 60,  153 => 58,  146 => 56,  139 => 52,  135 => 51,  128 => 48,  126 => 47,  118 => 42,  114 => 41,  102 => 32,  97 => 30,  91 => 27,  82 => 20,  73 => 17,  70 => 16,  66 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  51 => 10,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header2' %}
<style>
#main-container{
    background-color: #fff;
}
</style>

<div id=\"page-content\" style='background-color: #fff;'>

{% if post.title %}
    {% set previousPostRecord = this.controller.pageObject.previousPost(post) %}
\t{% set nextPostRecord = this.controller.pageObject.nextPost(post) %}
    
    <div class=\"mt106 {{ imageCount > 1 ? 'owl-carousel custom-content content-portfolio-detail' : '' }} mb0\">
      {% for image in post.featured_images %}
      <section class=\"content-portfolio-detail-item\">
      \t<img src=\"{{ image.path }}\" style='width:100%'>
\t  </section>
\t  {% endfor %}
\t</div>
\t
\t<div class=\"container\">
        <div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<ol class=\"breadcrumb custom-breadcrumbs mt30 mb60\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ 'home' | page }}\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ 'blog-list' | page }}\">Blog</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">{{ post.title }}</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t    <div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t<h3 class='mb60 textupper'>{{ post.title }}</h3>
\t\t\t\t<p>{{ post.content_html|raw }}</p>
\t\t\t\t
\t\t\t\t<div class='qcontact'>
\t\t\t\t    <div class=\"blog-previous-next\">
\t\t\t\t        <div class=\"blog-previous\">
        \t\t\t\t\t{% if previousPostRecord %}
\t\t\t\t\t        <div class=\"arrow-icon\"><a href=\"{{ previousPostRecord.url }}\"><img src=\"/storage/app/media/icon-previous.png\" /></a></div>
\t\t\t\t\t        <div class=\"blog-featured-image\">
\t\t\t\t\t            <div class=\"figure\">
    \t\t\t\t\t            <a href=\"{{ previousPostRecord.url }}\">
                                        <img src=\"{{ previousPostRecord.featured_images[0].path }}\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"blog-title\"><a href=\"{{ previousPostRecord.url }}\">{{ previousPostRecord.title }}</a></div>
                            {% endif %}
                        </div>
                        <div class=\"blog-next\">
                        \t{% if nextPostRecord %}
                            <div class=\"blog-featured-image\">
                                <div class=\"figure\">
                                    <a href=\"{{ nextPostRecord.url }}\">
                                        <img src=\"{{ nextPostRecord.featured_images[0].path }}\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"blog-title\"><a href=\"{{ nextPostRecord.url }}\">{{ nextPostRecord.title }}</a></div>
                            <div class=\"arrow-icon\"><a href=\"{{ nextPostRecord.url }}\"><img src=\"/storage/app/media/icon-next.png\" /></a></div>
                            {% endif %}
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% else %}
    <div class=\"mt106 mb0\">
\t</div>
\t
\t<div class=\"container\">
        <div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<ol class=\"breadcrumb custom-breadcrumbs mt30 mb60\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ 'home' | page }}\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ 'blog-list' | page }}\">Blog</a>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t    <div class=\"col-md-8 col-md-offset-2\">
\t\t    <h2 style=\"    margin: 0 0 70px 0;
    text-align: center;\">Post Not Found</h2>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}

</div>

{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-detail.htm", "");
    }
}
