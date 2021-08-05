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

/* /Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/pages/blog-list.htm */
class __TwigTemplate_fe372d624423740219efe95dbeabb1ee7405c3cacd7112a8e32b7856f7876512 extends \Twig\Template
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
        echo "
    <div id=\"page-content\">
        <div class=\"clearfix space120 hidden-991\"></div>
        <div class=\"clearfix space60 hidden-991\"></div>

        <div class=\" hidden-only-480 clearfix space30 showin-991\"></div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    
                    <ol class=\"breadcrumb custom-breadcrumbs\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">Blog</li>
                    </ol>

                </div>
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    
                    <ul class=\"filter text-center\">
                        <li>
                            <a class=\"active\" href=\"#\" data-filter=\"*\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "category", [], "any", false, false, false, 28), "html", null, true);
        echo "</a>
                        </li>
                            <li>
                                <a href=\"#\" class='thecat";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "' data-filter=\".cat";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>
                            </li>                            

                    </ul>

                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 blog-list\">
                
                    ";
        // line 44
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 44);
        // line 45
        echo "
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 47
            echo "                    <div class=\"blog-article\">
                        <div class=\"blog-article-thumbnail\"> 
                            <div class=\"figure\">
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 50), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 51)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, false, 51), "html", null, true);
            echo "\" >
                                </a>
                            </div>
                        </div><!-- blog-article-thumbnail -->
                        
                        <div class=\"blog-article-details\">
                            
                            <h2><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 58), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 58), "html", null, true);
            echo "</a></h2>
                            
                            <p>
                                <span class=\"text-blue\">";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 61), "M d, Y"), "html", null, true);
            echo "</span>
                                <!-- &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>in <a href=\"#\">Design</a> -->
                            </p>
                                                               
                        </div><!-- blog-article-details -->
                        
                    </div><!-- blog-article -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    
                    
                    ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 71) > 1)) {
            // line 72
            echo "                        <ul class=\"pagination\">
                            ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 73) > 1)) {
                // line 74
                echo "                                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 74), "baseFileName", [], "any", false, false, false, 74), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 74) - 1)]);
                echo "\">&larr; Prev</a></li>
                            ";
            }
            // line 76
            echo "                    
                            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 77)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 78
                echo "                                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 78) == $context["page"])) ? ("active") : (null));
                echo "\">
                                    <a href=\"";
                // line 79
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 79), "baseFileName", [], "any", false, false, false, 79), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    
                            ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 83) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 83))) {
                // line 84
                echo "                                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 84), "baseFileName", [], "any", false, false, false, 84), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 84) + 1)]);
                echo "\">Next &rarr;</a></li>
                            ";
            }
            // line 86
            echo "                        </ul>
                    ";
        }
        // line 88
        echo "                    <div class=\"loading\"></div>
                    <div class=\"loadmore\"></div>
                    <div class=\"clearfix space120 hidden-only-480\"></div>
                </div>
            </div>
        </div>

    </div><!-- / PAGE CONTENT -->
";
        // line 96
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/pages/blog-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 96,  200 => 88,  196 => 86,  190 => 84,  188 => 83,  185 => 82,  174 => 79,  169 => 78,  165 => 77,  162 => 76,  156 => 74,  154 => 73,  151 => 72,  149 => 71,  145 => 69,  131 => 61,  123 => 58,  113 => 51,  109 => 50,  104 => 47,  100 => 46,  97 => 45,  95 => 44,  75 => 31,  69 => 28,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header2' %}

    <div id=\"page-content\">
        <div class=\"clearfix space120 hidden-991\"></div>
        <div class=\"clearfix space60 hidden-991\"></div>

        <div class=\" hidden-only-480 clearfix space30 showin-991\"></div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    
                    <ol class=\"breadcrumb custom-breadcrumbs\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">Blog</li>
                    </ol>

                </div>
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    
                    <ul class=\"filter text-center\">
                        <li>
                            <a class=\"active\" href=\"#\" data-filter=\"*\">{{ blogPosts.category }}</a>
                        </li>
                            <li>
                                <a href=\"#\" class='thecat{{ category.id }}' data-filter=\".cat{{ category.id }}\">{{ category.title }}</a>
                            </li>                            

                    </ul>

                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 blog-list\">
                
                    {% set posts = blogPosts.posts %}

                    {% for post in posts %}
                    <div class=\"blog-article\">
                        <div class=\"blog-article-thumbnail\"> 
                            <div class=\"figure\">
                                <a href=\"{{ post.url }}\">
                                    <img src=\"{{ post.featured_images[0].path }}\" >
                                </a>
                            </div>
                        </div><!-- blog-article-thumbnail -->
                        
                        <div class=\"blog-article-details\">
                            
                            <h2><a href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                            
                            <p>
                                <span class=\"text-blue\">{{ post.published_at|date('M d, Y') }}</span>
                                <!-- &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>in <a href=\"#\">Design</a> -->
                            </p>
                                                               
                        </div><!-- blog-article-details -->
                        
                    </div><!-- blog-article -->
                    {% endfor %}
                    
                    
                    {% if posts.lastPage > 1 %}
                        <ul class=\"pagination\">
                            {% if posts.currentPage > 1 %}
                                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
                            {% endif %}
                    
                            {% for page in 1..posts.lastPage %}
                                <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                                    <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                                </li>
                            {% endfor %}
                    
                            {% if posts.lastPage > posts.currentPage %}
                                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
                            {% endif %}
                        </ul>
                    {% endif %}
                    <div class=\"loading\"></div>
                    <div class=\"loadmore\"></div>
                    <div class=\"clearfix space120 hidden-only-480\"></div>
                </div>
            </div>
        </div>

    </div><!-- / PAGE CONTENT -->
{% partial 'footer' %}", "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/pages/blog-list.htm", "");
    }
}
