<?php

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/head.htm */
class __TwigTemplate_5770155a007ec4046d2d4798a2c39a1191fe4d62d7f6c1e4e86af79f01f428d6 extends Twig_Template
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
        echo "<!-- I am a banner  --><!DOCTYPE html>
<!--[if IE 7]><html class=\"ie ie7\"><![endif]--><!--[if IE 8]><html class=\"ie ie8\"><![endif]--><!--[if IE 9]><html class=\"ie ie9\"><![endif]--><!--[if !(IE 7) & !(IE 8) & !(IE 9)]><!--><html lang=\"en\"><!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    
    ";
        // line 10
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()) == "/")) {
            // line 11
            echo "\t<title>Voltage PR - A result-driven Hong Kong PR Agency</title>
\t\t\t\t<meta name=\"description\" content=\"A Hong Kong-based PR, digital and events marketing agency, specialized in delivering messages that resonate.\">
\t
\t";
        } else {
            // line 15
            echo "\t<title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
            echo " - Voltage PR</title>
\t
\t";
        }
        // line 18
        echo "
    <!-- FAVICON AND APPLE TOUCH -->    
    <link rel=\"shortcut icon\" href=\"favicon.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"180x180\" href=\"apple-touch-180x180.png'|theme }}\">

    <!-- FONTS -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,300i,400,400i,700,700i\"> 

    <!-- BOOTSTRAP CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap/css/bootstrap.min.css");
        echo "\"> 

    <!-- FONT AWESOME -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/fonts/fontawesome/css/font-awesome.min.css");
        echo "\">

    <!-- BERLIN ICONS -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/fonts/berlin-icons/css/berlin-icons.css");
        echo "\"> 

    <!-- FANCYBOX -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/fancybox/jquery.fancybox.css");
        echo "\">

    <!-- REVOLUTION SLIDER -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/css/settings.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/css/layers.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/revolutionslider/css/navigation.css");
        echo "\">

    <!-- OWL Carousel -->
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/owl-carousel/owl.carousel.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/owl-carousel/owl.transitions.css");
        echo "\">

    <!-- YOUTUBE PLAYER -->
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/ytplayer/css/jquery.mb.YTPlayer.min.css");
        echo "\">

    <!-- ANIMATIONS -->
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/plugins/animations/animate.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/animate.css");
        echo "\">
    <!-- CUSTOM & PAGES STYLE -->
    <link rel=\"stylesheet\" href=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/pages-style.css");
        echo "\">

    <!-- CUSTOM STYLE FOR VOLTAGE PR STATIC -->
    <link rel=\"stylesheet\" href=\"";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/installing-fonts.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/images-sprite.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/app.css");
        echo "\">
</head>";
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  133 => 59,  129 => 58,  123 => 55,  119 => 54,  114 => 52,  110 => 51,  104 => 48,  98 => 45,  94 => 44,  88 => 41,  84 => 40,  80 => 39,  74 => 36,  68 => 33,  62 => 30,  56 => 27,  45 => 18,  38 => 15,  32 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- I am a banner  --><!DOCTYPE html>
<!--[if IE 7]><html class=\"ie ie7\"><![endif]--><!--[if IE 8]><html class=\"ie ie8\"><![endif]--><!--[if IE 9]><html class=\"ie ie9\"><![endif]--><!--[if !(IE 7) & !(IE 8) & !(IE 9)]><!--><html lang=\"en\"><!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    
    {% if (this.page.url=='/') %}
\t<title>Voltage PR - A result-driven Hong Kong PR Agency</title>
\t\t\t\t<meta name=\"description\" content=\"A Hong Kong-based PR, digital and events marketing agency, specialized in delivering messages that resonate.\">
\t
\t{% else %}
\t<title>{{ this.page.title }} - Voltage PR</title>
\t
\t{% endif %}

    <!-- FAVICON AND APPLE TOUCH -->    
    <link rel=\"shortcut icon\" href=\"favicon.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"180x180\" href=\"apple-touch-180x180.png'|theme }}\">

    <!-- FONTS -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,300i,400,400i,700,700i\"> 

    <!-- BOOTSTRAP CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/bootstrap/css/bootstrap.min.css'|theme }}\"> 

    <!-- FONT AWESOME -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/fonts/fontawesome/css/font-awesome.min.css'|theme }}\">

    <!-- BERLIN ICONS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/fonts/berlin-icons/css/berlin-icons.css'|theme }}\"> 

    <!-- FANCYBOX -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/fancybox/jquery.fancybox.css'|theme }}\">

    <!-- REVOLUTION SLIDER -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/revolutionslider/css/settings.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/revolutionslider/css/layers.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/revolutionslider/css/navigation.css'|theme }}\">

    <!-- OWL Carousel -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/owl-carousel/owl.carousel.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/owl-carousel/owl.transitions.css'|theme }}\">

    <!-- YOUTUBE PLAYER -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/ytplayer/css/jquery.mb.YTPlayer.min.css'|theme }}\">

    <!-- ANIMATIONS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/animations/animate.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\">
    <!-- CUSTOM & PAGES STYLE -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/pages-style.css'|theme }}\">

    <!-- CUSTOM STYLE FOR VOLTAGE PR STATIC -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/installing-fonts.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/images-sprite.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/app.css'|theme }}\">
</head>", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/partials/head.htm", "");
    }
}
