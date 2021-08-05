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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-list.htm */
class __TwigTemplate_898c2ff4db96adfc01d3a48285248679deb133f3186330d83be9063ae6169138 extends \Twig\Template
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
                    
                    <div class=\"headline mb-60\">
                        <h3>Blog</h3>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 blog-list\">
                
                    ";
        // line 38
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 38);
        // line 39
        echo "
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 41
            echo "                    <div class=\"blog-article\">
                        <div class=\"blog-article-thumbnail\"> 
                            <div class=\"figure\">
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 45)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, false, 45), "html", null, true);
            echo "\" >
                                </a>
                            </div>
                        </div><!-- blog-article-thumbnail -->
                        
                        <div class=\"blog-article-details\">
                            
                            <h2><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 52), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 52), "html", null, true);
            echo "</a></h2>
                            
                            <p>
                                <span class=\"text-blue\">";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 55), "M d, Y"), "html", null, true);
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
        // line 63
        echo "                    
                    
                    ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 65) > 1)) {
            // line 66
            echo "                        <ul class=\"pagination\">
                            ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 67) > 1)) {
                // line 68
                echo "                                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 68), "baseFileName", [], "any", false, false, false, 68), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 68) - 1)]);
                echo "\">&larr; Prev</a></li>
                            ";
            }
            // line 70
            echo "                    
                            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 71)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 72
                echo "                                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 72) == $context["page"])) ? ("active") : (null));
                echo "\">
                                    <a href=\"";
                // line 73
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 73), "baseFileName", [], "any", false, false, false, 73), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                    
                            ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 77) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 77))) {
                // line 78
                echo "                                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 78), "baseFileName", [], "any", false, false, false, 78), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 78) + 1)]);
                echo "\">Next &rarr;</a></li>
                            ";
            }
            // line 80
            echo "                        </ul>
                    ";
        }
        // line 82
        echo "                    <div class=\"loading\"></div>
                    <div class=\"loadmore\"></div>
                    <div class=\"clearfix space120 hidden-only-480\"></div>
                </div>
            </div>
        </div>

    </div><!-- / PAGE CONTENT -->
";
        // line 90
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 90,  184 => 82,  180 => 80,  174 => 78,  172 => 77,  169 => 76,  158 => 73,  153 => 72,  149 => 71,  146 => 70,  140 => 68,  138 => 67,  135 => 66,  133 => 65,  129 => 63,  115 => 55,  107 => 52,  97 => 45,  93 => 44,  88 => 41,  84 => 40,  81 => 39,  79 => 38,  41 => 2,  37 => 1,);
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
                    
                    <div class=\"headline mb-60\">
                        <h3>Blog</h3>
                    </div>

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
{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-list.htm", "");
    }
}
