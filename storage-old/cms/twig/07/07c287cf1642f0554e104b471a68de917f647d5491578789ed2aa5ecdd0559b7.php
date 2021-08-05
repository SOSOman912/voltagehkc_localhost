<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/footer.htm */
class __TwigTemplate_3f42776edb319f79f26bb0273d53a8ba09f75ead3ddd60a63e73b9237b9e7688 extends Twig_Template
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
        echo "<!-- FOOTER -->
        <div id=\"footer\">
            
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-sm-3 text-center\">
                        
                        <div class=\"widget widget-logo pull-left\">
                            <figure>
                                <a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
                                    <img src=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo-footer.png");
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about-us");
        echo "\">Who We Are</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("what-we-do");
        echo "\">What We Do</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"#\">Clients</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("case-study");
        echo "\">Case Study</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog-list");
        echo "\">Stories</a>
                                </li>
                                <li class=\"\">
                                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
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
                                <p class=\"last\">Copyright 2017 Voltage. All Rights Reserved.</p>
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
        // line 100
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/jquery/jquery-2.2.0.min.js");
        echo "\"></script>
     ";
        // line 101
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 102
        echo "
    <!-- BOOTSTRAP JS -->
    <script src=\"";
        // line 104
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap/js/bootstrap.min.js");
        echo "\"></script>

    <!-- VIEWPORT -->
    <script src=\"";
        // line 107
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/viewport/jquery.viewport.js");
        echo "\"></script>

    <!-- MENU -->
    <script src=\"";
        // line 110
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/menu/hoverIntent.js");
        echo "\"></script>
    <script src=\"";
        // line 111
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/menu/superfish.js");
        echo "\"></script>

    <!-- FANCYBOX -->
    <script src=\"";
        // line 114
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/fancybox/jquery.fancybox.pack.js");
        echo "\"></script>

    <!-- REVOLUTION SLIDER -->
    <script src=\"";
        // line 117
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 118
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 119
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js");
        echo "\"></script>
    <script src=\"";
        // line 120
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 121
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js");
        echo "\"></script>
    <script src=\"";
        // line 122
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 123
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js");
        echo "\"></script>
    <script src=\"";
        // line 124
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 125
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js");
        echo "\"></script>
    <script src=\"";
        // line 126
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js");
        echo "\"></script>
    <script src=\"";
        // line 127
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js");
        echo "\"></script>

    <!-- OWL Carousel -->
    <script src=\"";
        // line 130
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/owl-carousel/owl.carousel.min.js");
        echo "\"></script>

    <!-- PARALLAX -->
    <script src=\"";
        // line 133
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/parallax/jquery.stellar.min.js");
        echo "\"></script>

    <!-- ISOTOPE -->
    <script src=\"";
        // line 136
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/isotope/imagesloaded.pkgd.min.js");
        echo "\"></script>
    <script src=\"";
        // line 137
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/isotope/isotope.pkgd.min.js");
        echo "\"></script>

    <!-- PLACEHOLDER -->
    <script src=\"";
        // line 140
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/placeholders/jquery.placeholder.min.js");
        echo "\"></script>

    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src=\"";
        // line 143
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/validate/jquery.validate.min.js");
        echo "\"></script>
    <script src=\"";
        // line 144
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/submit/jquery.form.min.js");
        echo "\"></script>

    <!-- GOOGLE MAPS -->
    <script src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDsoyR90BjuoBC75rcrb-S_QzW9qyjlOt4\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 149
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/googlemaps/gmap3.min.js");
        echo "\"></script>

    <!-- CHARTS -->
    <script src=\"";
        // line 152
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/charts/jquery.easypiechart.min.js");
        echo "\"></script>

    <!-- COUNTER -->
    <script src=\"";
        // line 155
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/counter/jQuerySimpleCounter.js");
        echo "\"></script>

    <!-- YOUTUBE PLAYER -->
    <script src=\"";
        // line 158
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/ytplayer/jquery.mb.YTPlayer.min.js");
        echo "\"></script>

    <!-- ANIMATIONS -->
    <script src=\"";
        // line 161
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/animations/wow.min.js");
        echo "\"></script>

    <!-- CUSTOM JS -->
    <script src=\"";
        // line 164
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/custom.js");
        echo "\"></script> 
    <script src=\"";
        // line 165
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/scripts.js");
        echo "\"></script> 
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 165,  300 => 164,  294 => 161,  288 => 158,  282 => 155,  276 => 152,  270 => 149,  262 => 144,  258 => 143,  252 => 140,  246 => 137,  242 => 136,  236 => 133,  230 => 130,  224 => 127,  220 => 126,  216 => 125,  212 => 124,  208 => 123,  204 => 122,  200 => 121,  196 => 120,  192 => 119,  188 => 118,  184 => 117,  178 => 114,  172 => 111,  168 => 110,  162 => 107,  156 => 104,  152 => 102,  145 => 101,  141 => 100,  77 => 39,  71 => 36,  65 => 33,  56 => 27,  50 => 24,  35 => 12,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- FOOTER -->
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
                                    <a href=\"{{ 'about-us' | page }}\">Who We Are</a>
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
                                    <a href=\"{{ 'blog-list' | page }}\">Stories</a>
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
                                <p class=\"last\">Copyright 2017 Voltage. All Rights Reserved.</p>
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

    <!-- COUNTER -->
    <script src=\"{{ 'assets/plugins/counter/jQuerySimpleCounter.js'|theme }}\"></script>

    <!-- YOUTUBE PLAYER -->
    <script src=\"{{ 'assets/plugins/ytplayer/jquery.mb.YTPlayer.min.js'|theme }}\"></script>

    <!-- ANIMATIONS -->
    <script src=\"{{ 'assets/plugins/animations/wow.min.js'|theme }}\"></script>

    <!-- CUSTOM JS -->
    <script src=\"{{ 'assets/js/custom.js'|theme }}\"></script> 
    <script src=\"{{ 'assets/js/scripts.js'|theme }}\"></script> 
</body>
</html>", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/footer.htm", "");
    }
}
