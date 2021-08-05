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

/* /Users/dickylam/Desktop/website/windmaker/public_html/themes/voltage/partials/footer.htm */
class __TwigTemplate_c0e2df4a3eeaab5c3b1d79d70c19c6ead8cb713b7796084f324a877bf5625f6b extends \Twig\Template
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
        echo "<!-- FOOTER -->
        <div id=\"footer\">
            
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-sm-3 text-center\">
                        
                        <div class=\"widget widget-logo pull-left\">
                            <figure>
                                <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                                    <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-footer.png");
        echo "\" alt=\"\">
                                </a>
                            </figure>
                        </div><!-- widget-logo -->
                        
                    </div><!-- col -->

                    <div class=\"col-sm-9 text-center\">
                        <div class=\"clearfix space30 hidden-767\"></div>
                        <nav class=\"navigation-footer pull-right\">
                            <ul>
                                <li class=\"\">
                                    <a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">About Us</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("what-we-do");
        echo "\">What We Do</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"#\">Clients</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("case-study");
        echo "\">Case Study</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-list");
        echo "\">Blog</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <hr class=\"footer-sep\">
                    </div>
                </div>
                <div class=\"row\">
                    
                    <div class=\"col-sm-6 text-left\">
                        
                        <div class=\"widget widget-text widget-copyright\">

                            <div>
                                <p class=\"last\">Copyright 2020 Voltage. All Rights Reserved.</p>
                            </div>
                            
                        </div><!-- / .widget-text -->
                        
                    </div><!-- col -->
                    
                    <div class=\"col-sm-6 text-right\">
                        
                        <div class=\"widget widget-text widget-copyright\">

                            <div>
                                <p class=\"last\">Follow Us:                     
                                    <a href=\"https://www.facebook.com/VoltagePR/\" target='_blank'><i class=\"fa fa-facebook\" style=' margin-left: 10px;font-size: 17px;'></i></a>
                                    <a href=\"https://www.instagram.com/voltage.pr/\" target='_blank'><i class=\"fa fa-instagram\" style='    margin-left: 10px;
    margin-right: 0px;
    font-size: 17px;'></i></a>
                                    <a href=\"https://www.linkedin.com/company/voltage-hong-kong/\" target='_blank'><i class=\"fa fa-linkedin\" style='    margin-left: 10px;
    margin-right: 10px;
    font-size: 17px;'></i></a>
                               
                                    
                                    
                                </p>
                            </div>
                            
                        </div><!-- / .widget-text -->
                        
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- FOOTER -->
    
    </div><!-- / MAIN CONTAINER -->

    <!-- GO TOP -->
    <a id=\"scroll-up\"><i class=\"fa fa-chevron-up\"></i></a>
    


    <!-- jQUERY -->
    <script src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/jquery/jquery-2.2.0.min.js");
        echo "\"></script>
     ";
        // line 103
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 104
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js\">
    <!-- BOOTSTRAP JS -->
    <script src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap/js/bootstrap.min.js");
        echo "\"></script>

    <!-- VIEWPORT -->
    <script src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/viewport/jquery.viewport.js");
        echo "\"></script>

    <!-- MENU -->
    <script src=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/menu/hoverIntent.js");
        echo "\"></script>
    <script src=\"";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/menu/superfish.js");
        echo "\"></script>

    <!-- FANCYBOX -->
    <script src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/fancybox/jquery.fancybox.pack.js");
        echo "\"></script>

    <!-- REVOLUTION SLIDER -->
    <script src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js");
        echo "\"></script>
    <script src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js");
        echo "\"></script>
    <script src=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js");
        echo "\"></script>
    <script src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js");
        echo "\"></script>
    <script src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js");
        echo "\"></script>
    <script src=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js");
        echo "\"></script>


    <!-- OWL Carousel -->
    <script src=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/owl-carousel/owl.carousel.min.js");
        echo "\"></script>

    <!-- PARALLAX -->
    <script src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/parallax/jquery.stellar.min.js");
        echo "\"></script>

    <!-- ISOTOPE -->
    <script src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/isotope/imagesloaded.pkgd.min.js");
        echo "\"></script>
    <script src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/isotope/isotope.pkgd.min.js");
        echo "\"></script>

    <!-- PLACEHOLDER -->
    <script src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/placeholders/jquery.placeholder.min.js");
        echo "\"></script>

    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/validate/jquery.validate.min.js");
        echo "\"></script>
    <script src=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/submit/jquery.form.min.js");
        echo "\"></script>

    <!-- GOOGLE MAPS -->
    <script src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDsoyR90BjuoBC75rcrb-S_QzW9qyjlOt4\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/googlemaps/gmap3.min.js");
        echo "\"></script>

    <!-- CHARTS -->
    <script src=\"";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/charts/jquery.easypiechart.min.js");
        echo "\"></script>
    <script src=\"";
        // line 156
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/instafeed.js");
        echo "\"></script>
    <!-- COUNTER -->
    <script src=\"";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/counter/jQuerySimpleCounter.js");
        echo "\"></script>

    <!-- YOUTUBE PLAYER -->
    <script src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/ytplayer/jquery.mb.YTPlayer.min.js");
        echo "\"></script>

    <!-- ANIMATIONS -->
    <script src=\"";
        // line 164
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/animations/wow.min.js");
        echo "\"></script>

    <!-- CUSTOM JS -->
    <script src=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js?v=20200506");
        echo "\"></script> 
    <script src=\"";
        // line 168
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scripts.js");
        echo "\"></script> 
    
   <script type=\"text/javascript\">
  var userFeed = new Instafeed({
    get: 'user',
    userId: '1093002435',
    clientId: 'c0b5c05fed3e4a7b9180c6db26eb092d',
    accessToken: '1093002435.c0b5c05.e6fcec4008db4ffaa9f0fb7d09404471',
    sortBy: 'most-recent',
    limit: 8
  });
  userFeed.run();
</script>
    ";
        // line 181
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 181), "url", [], "any", false, false, false, 181) == "/")) {
            // line 182
            echo "    <!-- popup -->
    
    ";
            // line 184
            if (twig_get_attribute($this->env, $this->source, ($context["popup"] ?? null), "enable", [], "any", false, false, false, 184)) {
                // line 185
                echo "    
    
    
    <script>
        \$(document).ready(function(){
            \$('#popjackclick').click();
        });
    </script>
    
    <a class=\"fancybox\" href=\"#popjack\" id='popjackclick'>123</a>
    
    
   
        ";
                // line 198
                if (twig_get_attribute($this->env, $this->source, ($context["popup"] ?? null), "image", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "        <div id='popjack'>
        <a href='";
                    // line 200
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["popup"] ?? null), "link", [], "any", false, false, false, 200), "html", null, true);
                    echo "' target='_blank'>
            <img src='";
                    // line 201
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                    echo "/storage/app/media/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["popup"] ?? null), "image", [], "any", false, false, false, 201), "html", null, true);
                    echo "'>
        </a>
        </div>
        ";
                } else {
                    // line 205
                    echo "        
        <style>
            #popjack{
                width:100%;height:500px;max-width:100%;background:white;border:30px solid #416cdd;    padding: 45px;    
            }
            #popjack h3{
                      font-size: 41px;
    line-height: 46px;
    margin-bottom: 49px;
            }
            
            #popjack h5{
                    margin-bottom: 19px;
            }
            #popjack input{
                height: 50px;
    width: 339px;    
            }
        </style>
        
        <div id='popjack' style=''>
            <h3>GET YOUR DAILY
            \t<br>INSPIRATION RIGHT IN
            \t<br>YOUR INBOX</h3>
            
            <h5>SIGN UP FOR OUR NEWSLETTER</h5>
                                <div id=\"pppcontainer\">
                                    <form
                                        data-request=\"";
                    // line 233
                    echo twig_escape_filter($this->env, ($context["mailSignup2"] ?? null), "html", null, true);
                    echo "::onSignup\"
                                        data-request-update=\"'";
                    // line 234
                    echo twig_escape_filter($this->env, ($context["mailSignup2"] ?? null), "html", null, true);
                    echo "::result': '#pppcontainer'\">
                                
                                        <div class=\"input-group\">
                                            <input name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Enter your email...\"/>
                                  
                                                <button class=\"btn btn-default\" type=\"submit\">Subscribe</button>
                                 
                                        </div>
                                     
                                
                                    </form>
                                </div>
            
            <p>By signing up, I agree to recieve emails from Voltage</p>
        </div>     
        ";
                }
                // line 250
                echo "   
    ";
            }
            // line 252
            echo "    
     <!-- popup -->
     ";
        }
        // line 255
        echo "     
     <script type=\"application/ld+json\">{\"@context\":\"http://schema.org\",\"@type\":\"WebSite\",\"@id\":\"https://www.voltagehk.com#website\",\"name\":\"Voltage PR\",\"description\":\"A Hong Kong-based PR, digital and events marketing agency, specialized in delivering messages that resonate.\",\"url\":\"https://www.voltagehk.com\"}</script>
     <script type=\"application/ld+json\">{\"@context\":\"http://schema.org\",\"@type\":\"ItemList\",\"itemListElement\":[{\"@type\":\"SiteNavigationElement\",\"name\":\"About Us\",\"url\":\"http://www.voltagehk.com/about-us\",\"position\":\"1\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"What We Do\",\"url\":\"http://www.voltagehk.com/what-we-do\",\"position\":\"2\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"Clients\",\"url\":\"http://www.voltagehk.com/clients\",\"position\":\"3\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"Case Study\",\"url\":\"http://www.voltagehk.com/case-study\",\"position\":\"4\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"Blog\",\"url\":\"http://www.voltagehk.com/Stories\",\"position\":\"5\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"Contact\",\"url\":\"http://www.voltagehk.com/contact\",\"position\":\"6\"}]}</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/dickylam/Desktop/website/windmaker/public_html/themes/voltage/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 255,  446 => 252,  442 => 250,  423 => 234,  419 => 233,  389 => 205,  380 => 201,  376 => 200,  373 => 199,  371 => 198,  356 => 185,  354 => 184,  350 => 182,  348 => 181,  332 => 168,  328 => 167,  322 => 164,  316 => 161,  310 => 158,  305 => 156,  301 => 155,  295 => 152,  287 => 147,  283 => 146,  277 => 143,  271 => 140,  267 => 139,  261 => 136,  255 => 133,  248 => 129,  244 => 128,  240 => 127,  236 => 126,  232 => 125,  228 => 124,  224 => 123,  220 => 122,  216 => 121,  212 => 120,  208 => 119,  202 => 116,  196 => 113,  192 => 112,  186 => 109,  180 => 106,  176 => 104,  165 => 103,  161 => 102,  95 => 39,  89 => 36,  83 => 33,  74 => 27,  68 => 24,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- FOOTER -->
        <div id=\"footer\">
            
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-sm-3 text-center\">
                        
                        <div class=\"widget widget-logo pull-left\">
                            <figure>
                                <a href=\"{{ 'home' | page }}\">
                                    <img src=\"{{ 'assets/images/logo-footer.png'|theme }}\" alt=\"\">
                                </a>
                            </figure>
                        </div><!-- widget-logo -->
                        
                    </div><!-- col -->

                    <div class=\"col-sm-9 text-center\">
                        <div class=\"clearfix space30 hidden-767\"></div>
                        <nav class=\"navigation-footer pull-right\">
                            <ul>
                                <li class=\"\">
                                    <a href=\"{{ 'about-us' | page }}\">About Us</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'what-we-do' | page }}\">What We Do</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"#\">Clients</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'case-study' | page }}\">Case Study</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'blog-list' | page }}\">Blog</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"{{ 'contact' | page }}\">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <hr class=\"footer-sep\">
                    </div>
                </div>
                <div class=\"row\">
                    
                    <div class=\"col-sm-6 text-left\">
                        
                        <div class=\"widget widget-text widget-copyright\">

                            <div>
                                <p class=\"last\">Copyright 2020 Voltage. All Rights Reserved.</p>
                            </div>
                            
                        </div><!-- / .widget-text -->
                        
                    </div><!-- col -->
                    
                    <div class=\"col-sm-6 text-right\">
                        
                        <div class=\"widget widget-text widget-copyright\">

                            <div>
                                <p class=\"last\">Follow Us:                     
                                    <a href=\"https://www.facebook.com/VoltagePR/\" target='_blank'><i class=\"fa fa-facebook\" style=' margin-left: 10px;font-size: 17px;'></i></a>
                                    <a href=\"https://www.instagram.com/voltage.pr/\" target='_blank'><i class=\"fa fa-instagram\" style='    margin-left: 10px;
    margin-right: 0px;
    font-size: 17px;'></i></a>
                                    <a href=\"https://www.linkedin.com/company/voltage-hong-kong/\" target='_blank'><i class=\"fa fa-linkedin\" style='    margin-left: 10px;
    margin-right: 10px;
    font-size: 17px;'></i></a>
                               
                                    
                                    
                                </p>
                            </div>
                            
                        </div><!-- / .widget-text -->
                        
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- FOOTER -->
    
    </div><!-- / MAIN CONTAINER -->

    <!-- GO TOP -->
    <a id=\"scroll-up\"><i class=\"fa fa-chevron-up\"></i></a>
    


    <!-- jQUERY -->
    <script src=\"{{ 'assets/plugins/jquery/jquery-2.2.0.min.js'|theme }}\"></script>
     {% framework extras %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js\">
    <!-- BOOTSTRAP JS -->
    <script src=\"{{ 'assets/bootstrap/js/bootstrap.min.js'|theme }}\"></script>

    <!-- VIEWPORT -->
    <script src=\"{{ 'assets/plugins/viewport/jquery.viewport.js'|theme }}\"></script>

    <!-- MENU -->
    <script src=\"{{ 'assets/plugins/menu/hoverIntent.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/menu/superfish.js'|theme }}\"></script>

    <!-- FANCYBOX -->
    <script src=\"{{ 'assets/plugins/fancybox/jquery.fancybox.pack.js'|theme }}\"></script>

    <!-- REVOLUTION SLIDER -->
    <script src=\"{{ 'assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js'|theme }}\"></script>


    <!-- OWL Carousel -->
    <script src=\"{{ 'assets/plugins/owl-carousel/owl.carousel.min.js'|theme }}\"></script>

    <!-- PARALLAX -->
    <script src=\"{{ 'assets/plugins/parallax/jquery.stellar.min.js'|theme }}\"></script>

    <!-- ISOTOPE -->
    <script src=\"{{ 'assets/plugins/isotope/imagesloaded.pkgd.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/isotope/isotope.pkgd.min.js'|theme }}\"></script>

    <!-- PLACEHOLDER -->
    <script src=\"{{ 'assets/plugins/placeholders/jquery.placeholder.min.js'|theme }}\"></script>

    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src=\"{{ 'assets/plugins/validate/jquery.validate.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/plugins/submit/jquery.form.min.js'|theme }}\"></script>

    <!-- GOOGLE MAPS -->
    <script src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDsoyR90BjuoBC75rcrb-S_QzW9qyjlOt4\" type=\"text/javascript\"></script>
    <script src=\"{{ 'assets/plugins/googlemaps/gmap3.min.js'|theme }}\"></script>

    <!-- CHARTS -->
    <script src=\"{{ 'assets/plugins/charts/jquery.easypiechart.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/instafeed.js'|theme }}\"></script>
    <!-- COUNTER -->
    <script src=\"{{ 'assets/plugins/counter/jQuerySimpleCounter.js'|theme }}\"></script>

    <!-- YOUTUBE PLAYER -->
    <script src=\"{{ 'assets/plugins/ytplayer/jquery.mb.YTPlayer.min.js'|theme }}\"></script>

    <!-- ANIMATIONS -->
    <script src=\"{{ 'assets/plugins/animations/wow.min.js'|theme }}\"></script>

    <!-- CUSTOM JS -->
    <script src=\"{{ 'assets/js/custom.js?v=20200506'|theme }}\"></script> 
    <script src=\"{{ 'assets/js/scripts.js'|theme }}\"></script> 
    
   <script type=\"text/javascript\">
  var userFeed = new Instafeed({
    get: 'user',
    userId: '1093002435',
    clientId: 'c0b5c05fed3e4a7b9180c6db26eb092d',
    accessToken: '1093002435.c0b5c05.e6fcec4008db4ffaa9f0fb7d09404471',
    sortBy: 'most-recent',
    limit: 8
  });
  userFeed.run();
</script>
    {% if (this.page.url=='/') %}
    <!-- popup -->
    
    {% if popup.enable %}
    
    
    
    <script>
        \$(document).ready(function(){
            \$('#popjackclick').click();
        });
    </script>
    
    <a class=\"fancybox\" href=\"#popjack\" id='popjackclick'>123</a>
    
    
   
        {% if popup.image %}
        <div id='popjack'>
        <a href='{{ popup.link }}' target='_blank'>
            <img src='{{ 'home' | page }}/storage/app/media/{{ popup.image }}'>
        </a>
        </div>
        {% else %}
        
        <style>
            #popjack{
                width:100%;height:500px;max-width:100%;background:white;border:30px solid #416cdd;    padding: 45px;    
            }
            #popjack h3{
                      font-size: 41px;
    line-height: 46px;
    margin-bottom: 49px;
            }
            
            #popjack h5{
                    margin-bottom: 19px;
            }
            #popjack input{
                height: 50px;
    width: 339px;    
            }
        </style>
        
        <div id='popjack' style=''>
            <h3>GET YOUR DAILY
            \t<br>INSPIRATION RIGHT IN
            \t<br>YOUR INBOX</h3>
            
            <h5>SIGN UP FOR OUR NEWSLETTER</h5>
                                <div id=\"pppcontainer\">
                                    <form
                                        data-request=\"{{ mailSignup2 }}::onSignup\"
                                        data-request-update=\"'{{ mailSignup2 }}::result': '#pppcontainer'\">
                                
                                        <div class=\"input-group\">
                                            <input name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Enter your email...\"/>
                                  
                                                <button class=\"btn btn-default\" type=\"submit\">Subscribe</button>
                                 
                                        </div>
                                     
                                
                                    </form>
                                </div>
            
            <p>By signing up, I agree to recieve emails from Voltage</p>
        </div>     
        {% endif %}
   
    {% endif %}
    
     <!-- popup -->
     {% endif %}
     
     <script type=\"application/ld+json\">{\"@context\":\"http://schema.org\",\"@type\":\"WebSite\",\"@id\":\"https://www.voltagehk.com#website\",\"name\":\"Voltage PR\",\"description\":\"A Hong Kong-based PR, digital and events marketing agency, specialized in delivering messages that resonate.\",\"url\":\"https://www.voltagehk.com\"}</script>
     <script type=\"application/ld+json\">{\"@context\":\"http://schema.org\",\"@type\":\"ItemList\",\"itemListElement\":[{\"@type\":\"SiteNavigationElement\",\"name\":\"About Us\",\"url\":\"http://www.voltagehk.com/about-us\",\"position\":\"1\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"What We Do\",\"url\":\"http://www.voltagehk.com/what-we-do\",\"position\":\"2\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"Clients\",\"url\":\"http://www.voltagehk.com/clients\",\"position\":\"3\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"Case Study\",\"url\":\"http://www.voltagehk.com/case-study\",\"position\":\"4\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"Blog\",\"url\":\"http://www.voltagehk.com/Stories\",\"position\":\"5\"},{\"@type\":\"SiteNavigationElement\",\"name\":\"Contact\",\"url\":\"http://www.voltagehk.com/contact\",\"position\":\"6\"}]}</script>
</body>
</html>", "/Users/dickylam/Desktop/website/windmaker/public_html/themes/voltage/partials/footer.htm", "");
    }
}
