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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-old.htm */
class __TwigTemplate_0fd33db32fcc5c0d54980242b240a854d210d43cd5159fd33a375c3492488fb3 extends \Twig\Template
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
                            <li class=\"active\">Stories</li>
                        </ol>

                    </div>
                </div>
            </div>
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                            <h3>COMING SOON!</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\" style=\"display:none;\">
                <div class=\"row\">
                    <div class=\"col-sm-9\">
                    
                    
";
        // line 39
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 39);
        // line 40
        echo "
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 42
            echo "                        <div class=\"blog-article\">

                            <div class=\"blog-article-thumbnail\"> 
                            
                               <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 48
                echo "                                 
                                       <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pic"], "path", [], "any", false, false, false, 49), "html", null, true);
                echo "\" >
                              
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                               </a>

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
                            
                            <p>";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 67);
            echo ".</p>
                            
                        </div><!-- blog-article -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        
                        
                        ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 73) > 1)) {
            // line 74
            echo "                            <ul class=\"pagination\">
                                ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 75) > 1)) {
                // line 76
                echo "                                    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 76), "baseFileName", [], "any", false, false, false, 76), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 76) - 1)]);
                echo "\">&larr; Prev</a></li>
                                ";
            }
            // line 78
            echo "                        
                                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 79)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 80
                echo "                                    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 80) == $context["page"])) ? ("active") : (null));
                echo "\">
                                        <a href=\"";
                // line 81
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 81), "baseFileName", [], "any", false, false, false, 81), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                        
                                ";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 85) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 85))) {
                // line 86
                echo "                                    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 86), "baseFileName", [], "any", false, false, false, 86), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 86) + 1)]);
                echo "\">Next &rarr;</a></li>
                                ";
            }
            // line 88
            echo "                            </ul>
                        ";
        }
        // line 90
        echo "
                        <div class=\"clearfix space120 hidden-only-480\"></div>
                    </div>
                </div>
            </div>

        </div><!-- / PAGE CONTENT -->
</body>
";
        // line 98
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-old.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 98,  205 => 90,  201 => 88,  195 => 86,  193 => 85,  190 => 84,  179 => 81,  174 => 80,  170 => 79,  167 => 78,  161 => 76,  159 => 75,  156 => 74,  154 => 73,  150 => 71,  140 => 67,  131 => 61,  123 => 58,  115 => 52,  106 => 49,  103 => 48,  99 => 47,  95 => 46,  89 => 42,  85 => 41,  82 => 40,  80 => 39,  41 => 2,  37 => 1,);
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
                            <li class=\"active\">Stories</li>
                        </ol>

                    </div>
                </div>
            </div>
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"headline mb-60\">
                            <h3>COMING SOON!</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\" style=\"display:none;\">
                <div class=\"row\">
                    <div class=\"col-sm-9\">
                    
                    
{% set posts = blogPosts.posts %}

                        {% for post in posts %}
                        <div class=\"blog-article\">

                            <div class=\"blog-article-thumbnail\"> 
                            
                               <a href=\"{{ post.url }}\">
                                {% for pic in post.featured_images %}
                                 
                                       <img src=\"{{ pic.path }}\" >
                              
                                {% endfor %}
                               </a>

                            </div><!-- blog-article-thumbnail -->
                            
                            <div class=\"blog-article-details\">
                                
                                <h2><a href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                                
                                <p>
                                    <span class=\"text-blue\">{{ post.published_at|date('M d, Y') }}</span>
                                    <!-- &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>in <a href=\"#\">Design</a> -->
                                </p>
                                                                   
                            </div><!-- blog-article-details -->
                            
                            <p>{{ post.summary|raw }}.</p>
                            
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

                        <div class=\"clearfix space120 hidden-only-480\"></div>
                    </div>
                </div>
            </div>

        </div><!-- / PAGE CONTENT -->
</body>
{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-old.htm", "");
    }
}
