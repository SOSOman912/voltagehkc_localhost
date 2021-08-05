<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-single.htm */
class __TwigTemplate_e9fff26c04dbc87fefcb3d4a50263c65b3edccf7d20e656c5bdf3cf47737aab2 extends Twig_Template
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

";
        // line 4
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPost"] ?? null), "post", array());
        // line 5
        echo "
        <div id=\"page-content\">
            <div class=\"clearfix space120 hidden-991\"></div>
            <div class=\"clearfix space60 hidden-991\"></div>

            <div class=\"clearfix space30 showin-991\"></div>
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-9\">

                        <div class=\"blog-article\">

                            <div class=\"blog-article-thumbnail\"> 
                            
                                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            echo "                                    
                                                <img
                                                    data-src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()), "html", null, true);
            echo "\"
                                                    src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
            echo "\"
                                                    alt=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()), "html", null, true);
            echo "\"
                                                    />
                                    
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                               

                            </div><!-- blog-article-thumbnail -->
                            
                            <div class=\"blog-article-details\">
                                
                                <h2>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
                                
                                <p>
                                    <span class=\"text-blue\">";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
                                </p>
                                                                   
                            </div><!-- blog-article-details -->
                            
                            ";
        // line 42
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "
                            
                            <div class=\"clearfix space30\"></div>
                            <p><a href=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog-list");
        echo "\">< Back</a></p>
                            
                        </div><!-- blog-article -->

                    </div>
                </div>
            </div>

        </div><!-- / PAGE CONTENT -->
</body>
";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 55,  100 => 45,  94 => 42,  86 => 37,  80 => 34,  72 => 28,  62 => 25,  58 => 24,  54 => 23,  50 => 21,  46 => 20,  29 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'header2' %}


{% set post = blogPost.post %}

        <div id=\"page-content\">
            <div class=\"clearfix space120 hidden-991\"></div>
            <div class=\"clearfix space60 hidden-991\"></div>

            <div class=\"clearfix space30 showin-991\"></div>
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-9\">

                        <div class=\"blog-article\">

                            <div class=\"blog-article-thumbnail\"> 
                            
                                        {% for image in post.featured_images %}
                                    
                                                <img
                                                    data-src=\"{{ image.filename }}\"
                                                    src=\"{{ image.path }}\"
                                                    alt=\"{{ image.description }}\"
                                                    />
                                    
                                        {% endfor %}                               

                            </div><!-- blog-article-thumbnail -->
                            
                            <div class=\"blog-article-details\">
                                
                                <h2>{{ post.title }}</h2>
                                
                                <p>
                                    <span class=\"text-blue\">{{ post.published_at|date('M d, Y') }}</span>
                                </p>
                                                                   
                            </div><!-- blog-article-details -->
                            
                            {{ post.content_html|raw }}
                            
                            <div class=\"clearfix space30\"></div>
                            <p><a href=\"{{ 'blog-list' | page }}\">< Back</a></p>
                            
                        </div><!-- blog-article -->

                    </div>
                </div>
            </div>

        </div><!-- / PAGE CONTENT -->
</body>
{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/blog-single.htm", "");
    }
}
