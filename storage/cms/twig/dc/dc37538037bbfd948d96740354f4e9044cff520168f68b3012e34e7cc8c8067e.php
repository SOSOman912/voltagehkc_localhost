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

/* /Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/head.htm */
class __TwigTemplate_af16cc2a01975c043ff2626000f33c80b9f96e7def0ec1b3f677fe346b2a4ed4 extends \Twig\Template
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
        echo "<!-- I am a banner  --><!DOCTYPE html>
<!--[if IE 7]><html class=\"ie ie7\"><![endif]--><!--[if IE 8]><html class=\"ie ie8\"><![endif]--><!--[if IE 9]><html class=\"ie ie9\"><![endif]--><!--[if !(IE 7) & !(IE 8) & !(IE 9)]><!--><html lang=\"en\"><!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=”robots” content=\"index, follow\">
    
    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "url", [], "any", false, false, false, 11) == "/")) {
            // line 12
            echo "\t<title>Voltage PR - A result-driven Hong Kong PR Agency</title>
\t\t\t\t<meta name=\"description\" content=\"A Hong Kong-based PR, digital and events marketing agency, specialized in delivering messages that resonate.\">
\t
\t";
        } else {
            // line 16
            echo "\t<title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
            echo " - Voltage PR</title>
\t
\t";
        }
        // line 19
        echo "
    <!-- FAVICON AND APPLE TOUCH -->    
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/ff3.png");
        echo "\">


    <!-- FONTS -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,300i,400,400i,700,700i\"> 
<!-- 1. Add latest jQuery and fancyBox files -->



<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css\" />

    <!-- BOOTSTRAP CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap/css/bootstrap.min.css");
        echo "\"> 

    <!-- FONT AWESOME -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/fontawesome/css/font-awesome.min.css");
        echo "\">

    <!-- BERLIN ICONS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/berlin-icons/css/berlin-icons.css");
        echo "\"> 

    <!-- FANCYBOX -->
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/fancybox/jquery.fancybox.css");
        echo "\">

    <!-- REVOLUTION SLIDER -->
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/css/settings.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/css/layers.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/revolutionslider/css/navigation.css");
        echo "\">

    <!-- OWL Carousel -->
    <link rel=\"stylesheet\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/owl-carousel/owl.carousel.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/owl-carousel/owl.transitions.css");
        echo "\">

    <!-- YOUTUBE PLAYER -->
    <link rel=\"stylesheet\" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/ytplayer/css/jquery.mb.YTPlayer.min.css");
        echo "\">

    <!-- ANIMATIONS -->
    <link rel=\"stylesheet\" href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/animations/animate.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
    <!-- CUSTOM & PAGES STYLE -->
    <link rel=\"stylesheet\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css?v=20200506");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/pages-style.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom2.css");
        echo "\">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-77369242-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77369242-1');
</script>

    <!-- CUSTOM STYLE FOR VOLTAGE PR STATIC -->
    <link rel=\"stylesheet\" href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/installing-fonts.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/images-sprite.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/app.css?v=20200427");
        echo "\">
    
    <meta name=\"google-site-verification\" content=\"0m8_qpqYQzsbEzAo8OAkYiJ3HmGs2zBT8HdsdEvurC0\" />
</head>";
    }

    public function getTemplateName()
    {
        return "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 77,  174 => 76,  170 => 75,  154 => 62,  150 => 61,  146 => 60,  141 => 58,  137 => 57,  131 => 54,  125 => 51,  121 => 50,  115 => 47,  111 => 46,  107 => 45,  101 => 42,  95 => 39,  89 => 36,  83 => 33,  68 => 21,  64 => 19,  57 => 16,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- I am a banner  --><!DOCTYPE html>
<!--[if IE 7]><html class=\"ie ie7\"><![endif]--><!--[if IE 8]><html class=\"ie ie8\"><![endif]--><!--[if IE 9]><html class=\"ie ie9\"><![endif]--><!--[if !(IE 7) & !(IE 8) & !(IE 9)]><!--><html lang=\"en\"><!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=”robots” content=\"index, follow\">
    
    {% if (this.page.url=='/') %}
\t<title>Voltage PR - A result-driven Hong Kong PR Agency</title>
\t\t\t\t<meta name=\"description\" content=\"A Hong Kong-based PR, digital and events marketing agency, specialized in delivering messages that resonate.\">
\t
\t{% else %}
\t<title>{{ this.page.title }} - Voltage PR</title>
\t
\t{% endif %}

    <!-- FAVICON AND APPLE TOUCH -->    
    <link rel=\"shortcut icon\" href=\"{{ 'assets/ff3.png'|theme }}\">


    <!-- FONTS -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,300i,400,400i,700,700i\"> 
<!-- 1. Add latest jQuery and fancyBox files -->



<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css\" />

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
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css?v=20200506'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/pages-style.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/custom2.css'|theme }}\">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-77369242-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77369242-1');
</script>

    <!-- CUSTOM STYLE FOR VOLTAGE PR STATIC -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/installing-fonts.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/images-sprite.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/app.css?v=20200427'|theme }}\">
    
    <meta name=\"google-site-verification\" content=\"0m8_qpqYQzsbEzAo8OAkYiJ3HmGs2zBT8HdsdEvurC0\" />
</head>", "/Users/dickylam/Desktop/voltagehkc_localhost/themes/voltage/partials/head.htm", "");
    }
}
