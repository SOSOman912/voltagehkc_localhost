<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/contact.htm */
class __TwigTemplate_6f2864e02d0b2e88b6b618846f8bd797da2a5817f6d981c54495c2d09331ff1a extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
        <div id=\"page-content\">

            <!-- background-image: url(";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/page-bg/222.jpg");
        echo "); -->
            <div class=\"parallax nospace-bottom\" id=\"page-header\" style=\"background-image: url(";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/page-bg/111.jpg");
        echo ");\" >  
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            
                            <h2 class=\"page-header-title\">Contact</h2>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->

            <div class=\"wrapper-strip\">
                <div class=\"container-offset container bg-white\">
                    
                    <div class=\"row\">    
                        <div class=\"col-sm-7\" id='contactupdate'>
                            <h3 class=\"text-uppercase\">Leave Us a Message</h3>
                            <div class=\"clearfix space15\"></div>
                            <p>Take charge of your brand message and contact Voltage, today! If you would like to make a positive impact and create waves with the team, we're always on the lookout for sharp, social-savvy individuals. Look forward to hearing from you!</p>

                            <form name=\"contact-form\" id=\"contact-form\" data-request=\"onUpdateform\" data-request-update=\"pcontact: '#contactupdate'\">
                                <fieldset>
                                    
                                    <div id=\"alert-area\"></div>
                                            
                                    <input type=\"text\" placeholder=\"name\" name=\"name\" id=\"name\" class=\"col-xs-12\">
                                    
                                    <input type=\"email\" placeholder=\"e-mail\" name=\"email\" id=\"email\" class=\"col-xs-12\">
                                    
                                    <input type=\"text\" placeholder=\"subject\" name=\"subject\" id=\"subject\" class=\"col-xs-12\">

                                    <textarea placeholder=\"message\" cols=\"25\" rows=\"5\" name=\"message\" id=\"message\" class=\"col-xs-12\"></textarea>
                                
                                    <button value=\"\" name=\"submit\" type=\"submit\" class=\"btn btn-default\" id=\"submit\">Send</button>
                                    
                                </fieldset>
                            </form>
                        </div>

                        <div class=\"col-sm-4 col-sm-offset-1\">
                            <div class=\"clearfix space30\"></div>
                            <div class=\"widget widget-contact\">
                                <h6 class=\"widget-title\">Address</h6>

                                <ul>
                                    <li>Unit 3, 15/F, Wayson Commercial Building <br>28 Connaught Road West <br>Sheung Wan</li>
                                </ul>
                            </div><!-- / .widget-contact -->

                            <div class=\"widget widget-contact\">
                                <h6 class=\"widget-title\">Phone Number</h6>

                                <ul>
                                    <li>+852 9663 3023</li>
                                </ul>
                            </div><!-- / .widget-contact -->

                            <div class=\"widget widget-contact\">
                                <h6 class=\"widget-title\">Email</h6>

                                <ul>
                                    <li>
                                        <a href=\"mailto:hello@voltage-pr.com\">hello@voltage-pr.com</a>
                                    </li>
                                </ul>
                            </div><!-- / .widget-contact -->                                
                            
                        </div>
                    </div>

                </div>
            </div><!-- / .wrapper-strip -->

            <div class=\"map nospace-bottom\" data-zoom=\"16\" data-address=\"Wayson Commercial Building, 28 Connaught Road West, Sheung Wan\" data-address-details=\"Unit 3, 15/F, Wayson Commercial Building, 28 Connaught Road West, Sheung Wan\"></div>

        </div><!-- / PAGE CONTENT -->
</body>
";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 84,  32 => 6,  28 => 5,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%partial 'header' %}

        <div id=\"page-content\">

            <!-- background-image: url({{'assets/images/page-bg/222.jpg'|theme}}); -->
            <div class=\"parallax nospace-bottom\" id=\"page-header\" style=\"background-image: url({{'assets/images/page-bg/111.jpg'|theme}});\" >  
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            
                            <h2 class=\"page-header-title\">Contact</h2>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->

            <div class=\"wrapper-strip\">
                <div class=\"container-offset container bg-white\">
                    
                    <div class=\"row\">    
                        <div class=\"col-sm-7\" id='contactupdate'>
                            <h3 class=\"text-uppercase\">Leave Us a Message</h3>
                            <div class=\"clearfix space15\"></div>
                            <p>Take charge of your brand message and contact Voltage, today! If you would like to make a positive impact and create waves with the team, we're always on the lookout for sharp, social-savvy individuals. Look forward to hearing from you!</p>

                            <form name=\"contact-form\" id=\"contact-form\" data-request=\"onUpdateform\" data-request-update=\"pcontact: '#contactupdate'\">
                                <fieldset>
                                    
                                    <div id=\"alert-area\"></div>
                                            
                                    <input type=\"text\" placeholder=\"name\" name=\"name\" id=\"name\" class=\"col-xs-12\">
                                    
                                    <input type=\"email\" placeholder=\"e-mail\" name=\"email\" id=\"email\" class=\"col-xs-12\">
                                    
                                    <input type=\"text\" placeholder=\"subject\" name=\"subject\" id=\"subject\" class=\"col-xs-12\">

                                    <textarea placeholder=\"message\" cols=\"25\" rows=\"5\" name=\"message\" id=\"message\" class=\"col-xs-12\"></textarea>
                                
                                    <button value=\"\" name=\"submit\" type=\"submit\" class=\"btn btn-default\" id=\"submit\">Send</button>
                                    
                                </fieldset>
                            </form>
                        </div>

                        <div class=\"col-sm-4 col-sm-offset-1\">
                            <div class=\"clearfix space30\"></div>
                            <div class=\"widget widget-contact\">
                                <h6 class=\"widget-title\">Address</h6>

                                <ul>
                                    <li>Unit 3, 15/F, Wayson Commercial Building <br>28 Connaught Road West <br>Sheung Wan</li>
                                </ul>
                            </div><!-- / .widget-contact -->

                            <div class=\"widget widget-contact\">
                                <h6 class=\"widget-title\">Phone Number</h6>

                                <ul>
                                    <li>+852 9663 3023</li>
                                </ul>
                            </div><!-- / .widget-contact -->

                            <div class=\"widget widget-contact\">
                                <h6 class=\"widget-title\">Email</h6>

                                <ul>
                                    <li>
                                        <a href=\"mailto:hello@voltage-pr.com\">hello@voltage-pr.com</a>
                                    </li>
                                </ul>
                            </div><!-- / .widget-contact -->                                
                            
                        </div>
                    </div>

                </div>
            </div><!-- / .wrapper-strip -->

            <div class=\"map nospace-bottom\" data-zoom=\"16\" data-address=\"Wayson Commercial Building, 28 Connaught Road West, Sheung Wan\" data-address-details=\"Unit 3, 15/F, Wayson Commercial Building, 28 Connaught Road West, Sheung Wan\"></div>

        </div><!-- / PAGE CONTENT -->
</body>
{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/contact.htm", "");
    }
}
