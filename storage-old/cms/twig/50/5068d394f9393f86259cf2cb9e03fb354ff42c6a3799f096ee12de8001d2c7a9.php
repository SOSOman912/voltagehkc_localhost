<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-list.htm */
class __TwigTemplate_f98f28b3b04f39a0291e837be2d06105808af624688024baf5ab8b4d8f107496 extends Twig_Template
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
                            <h3>Stories</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-9\">
                    
                    
";
        // line 39
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPosts"] ?? null), "posts", array());
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 48
                echo "                                 
                                       <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pic"], "path", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
                                
                                <p>
                                    <span class=\"text-blue\">";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</span>
                                    <!-- &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>in <a href=\"#\">Design</a> -->
                                </p>
                                                                   
                            </div><!-- blog-article-details -->
                            
                            <p>";
            // line 67
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array());
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 74
            echo "                            <ul class=\"pagination\">
                                ";
            // line 75
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 76
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
                                ";
            }
            // line 78
            echo "                        
                                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 80
                echo "                                    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                                        <a href=\"";
                // line 81
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
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
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()))) {
                // line 86
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) + 1)));
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
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 98,  187 => 90,  183 => 88,  177 => 86,  175 => 85,  172 => 84,  161 => 81,  156 => 80,  152 => 79,  149 => 78,  143 => 76,  141 => 75,  138 => 74,  136 => 73,  132 => 71,  122 => 67,  113 => 61,  105 => 58,  97 => 52,  88 => 49,  85 => 48,  81 => 47,  77 => 46,  71 => 42,  67 => 41,  64 => 40,  62 => 39,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'header2' %}

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
                            <h3>Stories</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container\">
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
{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-list.htm", "");
    }
}
