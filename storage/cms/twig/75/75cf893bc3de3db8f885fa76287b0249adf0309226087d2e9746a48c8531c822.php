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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/contact.htm */
class __TwigTemplate_df0babef9f21bc324f2fd8894b8531ce9818805324ca4b636c9e4981237a7671 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
        <div id=\"page-content\">

            <!-- background-image: url(";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/page-bg/222.jpg");
        echo "); -->
            <div class=\"parallax nospace-bottom\" id=\"page-header\" style=\"background-image: url(";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/page-bg/111.jpg");
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

                            <form name=\"contact-form\" id=\"contact-form\" data-request=\"onUpdateform\" data-request-update=\"pcontact: '#contactupdate'\" onsubmit=\"contactFormSubmit()\">
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
                                    <li>
                                        <a href=\"tel:+85296633023\">+852 9663 3023</a>
                                    </li>    
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
<script>
function contactFormSubmit() {
  if (\"ga\" in window) {
    tracker = ga.getAll()[0];
    if (tracker){
      tracker.send(\"event\", \"Contact Form\", \"Send\");
    }
  }
}
</script>
<script>
  window.addEventListener('load', function(event){
    document.querySelectorAll(\"#submit\").forEach(function(e){
  e.addEventListener('click', function()
  {
  var name = document.querySelector(\"#name\").value;
  var email = document.querySelector(\"#email\").value;
  var subject = document.querySelector(\"#subject\").value;
  var message = document.querySelector(\"#message\").value;

  if(name!=\"\" && email!=\"\" && subject!=\"\" && message!=\"\"){
    gtag('event', 'click', {
      'event_category': 'form'
      });
  };
  });
  });

  document.querySelectorAll(\"a[href='mailto:hello@voltage-pr.com']\").forEach(function(e){
e.addEventListener('click', function(e){
  gtag('event', \"click\", {
  'event_category': \"email\",
  });
});
});

document.querySelectorAll(\"a[href='tel:+85296633023']\").forEach(function(e){
e.addEventListener('click', function(e){
  gtag('event', \"click\", {
  'event_category': \"tel\",
  });
});
});
  });
    </script>
</body>
";
        // line 131
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
        return array (  178 => 131,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%partial 'header' %}

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

                            <form name=\"contact-form\" id=\"contact-form\" data-request=\"onUpdateform\" data-request-update=\"pcontact: '#contactupdate'\" onsubmit=\"contactFormSubmit()\">
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
                                    <li>
                                        <a href=\"tel:+85296633023\">+852 9663 3023</a>
                                    </li>    
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
<script>
function contactFormSubmit() {
  if (\"ga\" in window) {
    tracker = ga.getAll()[0];
    if (tracker){
      tracker.send(\"event\", \"Contact Form\", \"Send\");
    }
  }
}
</script>
<script>
  window.addEventListener('load', function(event){
    document.querySelectorAll(\"#submit\").forEach(function(e){
  e.addEventListener('click', function()
  {
  var name = document.querySelector(\"#name\").value;
  var email = document.querySelector(\"#email\").value;
  var subject = document.querySelector(\"#subject\").value;
  var message = document.querySelector(\"#message\").value;

  if(name!=\"\" && email!=\"\" && subject!=\"\" && message!=\"\"){
    gtag('event', 'click', {
      'event_category': 'form'
      });
  };
  });
  });

  document.querySelectorAll(\"a[href='mailto:hello@voltage-pr.com']\").forEach(function(e){
e.addEventListener('click', function(e){
  gtag('event', \"click\", {
  'event_category': \"email\",
  });
});
});

document.querySelectorAll(\"a[href='tel:+85296633023']\").forEach(function(e){
e.addEventListener('click', function(e){
  gtag('event', \"click\", {
  'event_category': \"tel\",
  });
});
});
  });
    </script>
</body>
{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/contact.htm", "");
    }
}
