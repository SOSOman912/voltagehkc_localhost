<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/testimonials.htm */
class __TwigTemplate_446fc8c5fab6ef8a0cffdd3532c50739f75b36636aee3dfb8dc48b7d398a0945 extends Twig_Template
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
        echo "<div class=\"testimonial-carousel owl-carousel\">

        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testi"]) {
            // line 4
            echo "                                    
                                    <div class=\"testimonial  wow fadeInLeft\" data-wow-duration=\".6s\" data-wow-delay=\"0s\">
                                        <blockquote>
                                        
                                            <h4 class=\"wow fadeInRight\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["testi"], "quote", array()), "html", null, true);
            echo "</h4>
                                        
                                        </blockquote>
                                        
                                        ";
            // line 12
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["testi"], "image", array())) {
                // line 13
                echo "                                        
                                        <img class='testti' src='";
                // line 14
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
                echo "/storage/app/media/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["testi"], "image", array()), "html", null, true);
                echo "' width='100' data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                        
                                        ";
            }
            // line 17
            echo "                                        
                                        <h4 class=\"text-uppercase nospace-bottom font-16 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                        
                                            <a target='_blank' href='";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["testi"], "link", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["testi"], "name", array()), "html", null, true);
            echo "</a>
                                            
                                        </h4>
                                        
                                        <h6 class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"1.1s\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["testi"], "title", array()), "html", null, true);
            echo "</h6>

                                    </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  67 => 24,  58 => 20,  53 => 17,  45 => 14,  42 => 13,  40 => 12,  33 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"testimonial-carousel owl-carousel\">

        {% for testi in testimonials %}
                                    
                                    <div class=\"testimonial  wow fadeInLeft\" data-wow-duration=\".6s\" data-wow-delay=\"0s\">
                                        <blockquote>
                                        
                                            <h4 class=\"wow fadeInRight\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">{{ testi.quote }}</h4>
                                        
                                        </blockquote>
                                        
                                        {% if testi.image %}
                                        
                                        <img class='testti' src='{{ 'home' | page }}/storage/app/media/{{ testi.image }}' width='100' data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                        
                                        {% endif %}
                                        
                                        <h4 class=\"text-uppercase nospace-bottom font-16 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                                        
                                            <a target='_blank' href='{{ testi.link }}'>{{ testi.name }}</a>
                                            
                                        </h4>
                                        
                                        <h6 class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"1.1s\">{{ testi.title }}</h6>

                                    </div>
       {% endfor %}
</div>", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/testimonials.htm", "");
    }
}
