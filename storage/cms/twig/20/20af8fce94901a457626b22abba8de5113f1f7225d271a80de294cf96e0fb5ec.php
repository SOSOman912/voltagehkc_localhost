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

/* /home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/home.htm */
class __TwigTemplate_b0b5c9bb9ee682787fa3ba9a5b7777f32f95311d4ad098f280bf218c3369b28f extends \Twig\Template
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
        ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homeslider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "        <!-- / .rev_slider_wrapper -->
    </div>
                    <!-- </div>

                </div>
            </div> -->

            <div class=\"container space-section bg\"></div>

            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"happy-clients clients\">
                            <div class=\"headline mb-60\">
                                <h3>happy clients</h3>
                            </div>

                            <ul class=\"happy-clients-list clearfix wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 26
            echo "                                    <li>
                                        <img src=\"";
            // line 27
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "/storage/app/media/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "image", [], "any", false, false, false, 27), "html", null, true);
            echo "\"  alt=\"\">
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                            </ul>
                            
                            <div class=\"clearfix space30\"></div>
                             <div class=\"happy-clients-cta\">
                                 <a class=\"btn btn-default fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("clients");
        echo "\">See All Clients</a>
                             </div>
                        </div><!-- / .happy-clients -->

                    </div>
                </div>
            </div>            

            <div class=\"container space-section bg\"></div>
            <div class=\"clearfix space30 showin-480 bg\"></div>

            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"headline mb-70 mt30\">
                            <h3 class=\"\">Case Study</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"isotope-fit-columns-lp clearfix nospace-bottom isotope-lp hidden-991  wow fadeIn\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                    <div class=\"portfolio-item item-casestudy w2 one\">
                            
                        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["homecases"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "link", [], "any", false, false, false, 59), "html", null, true);
        echo "\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/storage/app/media/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["homecases"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "photo", [], "any", false, false, false, 61), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["homecases"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "title", [], "any", false, false, false, 69), "html", null, true);
        echo "</h4>
                                    
                                    <span href=\"#\">learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy w3 two \">
                            
                        <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["homecases"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null), "link", [], "any", false, false, false, 83), "html", null, true);
        echo "\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/storage/app/media/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["homecases"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[1] ?? null) : null), "photo", [], "any", false, false, false, 85), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["homecases"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[1] ?? null) : null), "title", [], "any", false, false, false, 93), "html", null, true);
        echo "</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy h2 three\">
                            
                        <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["homecases"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[2] ?? null) : null), "link", [], "any", false, false, false, 107), "html", null, true);
        echo "\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/storage/app/media/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["homecases"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[2] ?? null) : null), "photo", [], "any", false, false, false, 109), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["homecases"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[2] ?? null) : null), "title", [], "any", false, false, false, 117), "html", null, true);
        echo "</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy w3 four\">
                            
                        <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["homecases"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[3] ?? null) : null), "link", [], "any", false, false, false, 131), "html", null, true);
        echo "\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/storage/app/media/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["homecases"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[3] ?? null) : null), "photo", [], "any", false, false, false, 133), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["homecases"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[3] ?? null) : null), "title", [], "any", false, false, false, 141), "html", null, true);
        echo "</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy w3 five\">
                            
                        <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["homecases"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[4] ?? null) : null), "link", [], "any", false, false, false, 155), "html", null, true);
        echo "\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/storage/app/media/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["homecases"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[4] ?? null) : null), "photo", [], "any", false, false, false, 157), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["homecases"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[4] ?? null) : null), "title", [], "any", false, false, false, 165), "html", null, true);
        echo "</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy h2 six\">
                            
                        <a href=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["homecases"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[5] ?? null) : null), "link", [], "any", false, false, false, 179), "html", null, true);
        echo "\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"";
        // line 181
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/storage/app/media/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["homecases"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[5] ?? null) : null), "photo", [], "any", false, false, false, 181), "html", null, true);
        echo "\" alt=\"\" style='min-width: auto;'>
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["homecases"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[5] ?? null) : null), "title", [], "any", false, false, false, 189), "html", null, true);
        echo "</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->
                    
                    <div class=\"portfolio-item item-casestudy w50 seven \">
                            
                        <a href=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["homecases"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[6] ?? null) : null), "link", [], "any", false, false, false, 203), "html", null, true);
        echo "\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"";
        // line 205
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/storage/app/media/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["homecases"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[6] ?? null) : null), "photo", [], "any", false, false, false, 205), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["homecases"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[6] ?? null) : null), "title", [], "any", false, false, false, 213), "html", null, true);
        echo "</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy w2 eight\">
                            
                        <a href=\"";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["homecases"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[7] ?? null) : null), "link", [], "any", false, false, false, 227), "html", null, true);
        echo "\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "/storage/app/media/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["homecases"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[7] ?? null) : null), "photo", [], "any", false, false, false, 229), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["homecases"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[7] ?? null) : null), "title", [], "any", false, false, false, 237), "html", null, true);
        echo "</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->
            </div>

            <div class=\"clearfix nospace-bottom showin-991 bg\">
                <div class=\"owl-carousel custom-content-casestudy-rwd\">

                    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cases"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
            // line 254
            echo "                    <div class=\"portfolio-item item-casestudy grid\">
                            
                        <a href=\"";
            // line 256
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "/portfolio-detail/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "slug", [], "any", false, false, false, 256), "html", null, true);
            echo "\" class=\"portfolio-item-thumbnail\">
                                
                                                                 
                                        ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "image3", [], "any", false, false, false, 259));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 260
                echo "                                      
                                               <img src=\"";
                // line 261
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pic"], "path", [], "any", false, false, false, 261), "html", null, true);
                echo "\" >
                                         
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "                            
                       
                                
                                <div class=\"mobiletext\">
                                    
                                    <h4>";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "title", [], "any", false, false, false, 269), "html", null, true);
            echo "</h4>
                                    
                                    <span href=\"";
            // line 271
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "/portfolio-detail/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "slug", [], "any", false, false, false, 271), "html", null, true);
            echo "\">learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                     
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "
               

                </div>
            </div>
            
            
            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"headline mb30 mt30 textcenter\">
                            <a class=\"btn btn-default fadeInUp mb0\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" href=\"http://www.voltagehk.com/case-study\">View All Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- blog post -->
            <div class=\"container space30 bg\"></div>
            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        <div class=\"headline mb-70 mt30\">
                            <h3 class=\"\">Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-12 blog-list\">
                    
                        ";
        // line 315
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 315);
        // line 316
        echo "    
                        ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 318
            echo "                        <div class=\"blog-article\">
                            <div class=\"blog-article-thumbnail\"> 
                                <div class=\"figure\">
                                    <a href=\"";
            // line 321
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 321), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 322)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[0] ?? null) : null), "path", [], "any", false, false, false, 322), "html", null, true);
            echo "\" >
                                    </a>
                                </div>
                            </div><!-- blog-article-thumbnail -->
                            
                            <div class=\"blog-article-details\">
                                
                                <h2><a href=\"";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 329), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 329), "html", null, true);
            echo "</a></h2>
                                
                                <p>
                                    <span class=\"text-blue\">";
            // line 332
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 332), "M d, Y"), "html", null, true);
            echo "</span>
                                    <!-- &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>in <a href=\"#\">Design</a> -->
                                </p>
                                                                   
                            </div><!-- blog-article-details -->
                            
                        </div><!-- blog-article -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "                    </div>
                </div>
            </div>
            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"headline mb30 mt30 textcenter\">
                            <a class=\"btn btn-default fadeInUp mb0\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" href=\"/blog\">View All Blog Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of blog post -->
            

            <div class=\"clearfix space60 --showin-991 bg\"></div>

            <section class=\"full-section dark-section\" id=\"section-7\">
                
                <div class=\"full-section-overlay-color black\"></div>

                <div class=\"full-section-container\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-offset-1 col-sm-10\">

                                ";
        // line 367
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 368
        echo "                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>

                        </div>
                    </div>

                </div>
            </div>
            

                                

            


            <div class=\"container space-section hidein767\"></div>
            <div class=\"clearfix space30 showin-480\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"headline text-center mb-45\">
                            <h3 class=\"\">Contact us!</h3>
                            <p class=\"subtitle\">Call or email us today for a free consultation!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 text-center\">

                        <a href=\"mailto:hello@voltage-pr.com\" class=\"btn btn-default-line btn-big text-normal  wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">hello@voltage-pr.com</a>
                  
                    </div>
                </div>
            </div>

            <div class=\"container space-section\"></div>

        </div><!-- / PAGE CONTENT -->
 
";
        // line 415
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 415,  586 => 368,  582 => 367,  553 => 340,  539 => 332,  531 => 329,  521 => 322,  517 => 321,  512 => 318,  508 => 317,  505 => 316,  503 => 315,  467 => 281,  449 => 271,  444 => 269,  437 => 264,  428 => 261,  425 => 260,  421 => 259,  413 => 256,  409 => 254,  405 => 253,  386 => 237,  373 => 229,  368 => 227,  351 => 213,  338 => 205,  333 => 203,  316 => 189,  303 => 181,  298 => 179,  281 => 165,  268 => 157,  263 => 155,  246 => 141,  233 => 133,  228 => 131,  211 => 117,  198 => 109,  193 => 107,  176 => 93,  163 => 85,  158 => 83,  141 => 69,  128 => 61,  123 => 59,  95 => 34,  89 => 30,  78 => 27,  75 => 26,  71 => 25,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}


    <div id=\"page-content\">
        {% partial 'homeslider' %}
        <!-- / .rev_slider_wrapper -->
    </div>
                    <!-- </div>

                </div>
            </div> -->

            <div class=\"container space-section bg\"></div>

            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div class=\"happy-clients clients\">
                            <div class=\"headline mb-60\">
                                <h3>happy clients</h3>
                            </div>

                            <ul class=\"happy-clients-list clearfix wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                                {% for client in clients%}
                                    <li>
                                        <img src=\"{{ 'home' | page }}/storage/app/media/{{ client.image }}\"  alt=\"\">
                                    </li>
                                {% endfor %}
                            </ul>
                            
                            <div class=\"clearfix space30\"></div>
                             <div class=\"happy-clients-cta\">
                                 <a class=\"btn btn-default fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" href=\"{{ 'clients' | page }}\">See All Clients</a>
                             </div>
                        </div><!-- / .happy-clients -->

                    </div>
                </div>
            </div>            

            <div class=\"container space-section bg\"></div>
            <div class=\"clearfix space30 showin-480 bg\"></div>

            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"headline mb-70 mt30\">
                            <h3 class=\"\">Case Study</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"isotope-fit-columns-lp clearfix nospace-bottom isotope-lp hidden-991  wow fadeIn\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                    <div class=\"portfolio-item item-casestudy w2 one\">
                            
                        <a href=\"{{homecases[0].link}}\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{homecases[0].photo}}\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>{{homecases[0].title}}</h4>
                                    
                                    <span href=\"#\">learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy w3 two \">
                            
                        <a href=\"{{homecases[1].link}}\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{homecases[1].photo}}\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>{{homecases[1].title}}</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy h2 three\">
                            
                        <a href=\"{{homecases[2].link}}\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{homecases[2].photo}}\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>{{homecases[2].title}}</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy w3 four\">
                            
                        <a href=\"{{homecases[3].link}}\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{homecases[3].photo}}\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>{{homecases[3].title}}</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy w3 five\">
                            
                        <a href=\"{{homecases[4].link}}\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{homecases[4].photo}}\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>{{homecases[4].title}}</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy h2 six\">
                            
                        <a href=\"{{homecases[5].link}}\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{homecases[5].photo}}\" alt=\"\" style='min-width: auto;'>
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>{{homecases[5].title}}</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->
                    
                    <div class=\"portfolio-item item-casestudy w50 seven \">
                            
                        <a href=\"{{homecases[6].link}}\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{homecases[6].photo}}\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>{{homecases[6].title}}</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                    <div class=\"portfolio-item item-casestudy w2 eight\">
                            
                        <a href=\"{{homecases[7].link}}\" class=\"portfolio-item-thumbnail\">
                                
                            <img src=\"{{ 'home' | page }}/storage/app/media/{{homecases[7].photo}}\" alt=\"\">
                            
                            <div class=\"portfolio-item-hover\">
                                
                                <span class=\"fancybox zoom-action\">+</span>
                                
                                <div class=\"portfolio-item-description\">
                                    
                                    <h4>{{homecases[7].title}}</h4>
                                    
                                    <span>learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                            </div><!-- portfolio-item-hover -->
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->
            </div>

            <div class=\"clearfix nospace-bottom showin-991 bg\">
                <div class=\"owl-carousel custom-content-casestudy-rwd\">

                    {% for case in cases %}
                    <div class=\"portfolio-item item-casestudy grid\">
                            
                        <a href=\"{{ 'home' | page }}/portfolio-detail/{{ case.slug }}\" class=\"portfolio-item-thumbnail\">
                                
                                                                 
                                        {% for pic in case.image3 %}
                                      
                                               <img src=\"{{ pic.path }}\" >
                                         
                                        {% endfor %}
                            
                       
                                
                                <div class=\"mobiletext\">
                                    
                                    <h4>{{ case.title }}</h4>
                                    
                                    <span href=\"{{ 'home' | page }}/portfolio-detail/{{ case.slug }}\">learn More</span>
                                    
                                </div><!-- portfolio-item-description -->
                                
                     
                            
                        </a><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->
                    {% endfor %}

               

                </div>
            </div>
            
            
            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"headline mb30 mt30 textcenter\">
                            <a class=\"btn btn-default fadeInUp mb0\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" href=\"http://www.voltagehk.com/case-study\">View All Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- blog post -->
            <div class=\"container space30 bg\"></div>
            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        <div class=\"headline mb-70 mt30\">
                            <h3 class=\"\">Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-12 blog-list\">
                    
                        {% set posts = blogPosts.posts %}
    
                        {% for post in posts %}
                        <div class=\"blog-article\">
                            <div class=\"blog-article-thumbnail\"> 
                                <div class=\"figure\">
                                    <a href=\"{{ post.url }}\">
                                        <img src=\"{{ post.featured_images[0].path }}\" >
                                    </a>
                                </div>
                            </div><!-- blog-article-thumbnail -->
                            
                            <div class=\"blog-article-details\">
                                
                                <h2><a href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                                
                                <p>
                                    <span class=\"text-blue\">{{ post.published_at|date('M d, Y') }}</span>
                                    <!-- &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>in <a href=\"#\">Design</a> -->
                                </p>
                                                                   
                            </div><!-- blog-article-details -->
                            
                        </div><!-- blog-article -->
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"container bg\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"headline mb30 mt30 textcenter\">
                            <a class=\"btn btn-default fadeInUp mb0\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" href=\"/blog\">View All Blog Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of blog post -->
            

            <div class=\"clearfix space60 --showin-991 bg\"></div>

            <section class=\"full-section dark-section\" id=\"section-7\">
                
                <div class=\"full-section-overlay-color black\"></div>

                <div class=\"full-section-container\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-offset-1 col-sm-10\">

                                {% partial 'testimonials' %}
                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>

                        </div>
                    </div>

                </div>
            </div>
            

                                

            


            <div class=\"container space-section hidein767\"></div>
            <div class=\"clearfix space30 showin-480\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        
                        <div class=\"headline text-center mb-45\">
                            <h3 class=\"\">Contact us!</h3>
                            <p class=\"subtitle\">Call or email us today for a free consultation!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 text-center\">

                        <a href=\"mailto:hello@voltage-pr.com\" class=\"btn btn-default-line btn-big text-normal  wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">hello@voltage-pr.com</a>
                  
                    </div>
                </div>
            </div>

            <div class=\"container space-section\"></div>

        </div><!-- / PAGE CONTENT -->
 
{% partial 'footer' %}", "/home/voltagehkc/domains/voltagehk.com/public_html/themes/voltage/pages/home.htm", "");
    }
}
