<?php

/* /var/www/html/hcdps/themes/hcdps/partials/site/header.htm */
class __TwigTemplate_9cd1c40f068e9c0815c84cecf340f88ee39673f02a571e0e789d96d39c09830f extends Twig_Template
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
        echo "<div class=\"top-bar\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-5 hidden-xs\">
\t            <div class=\"top-bar-socials\">
\t                <a href=\"https://www.facebook.com/hcdps/?ref=br_rs\" target=\"blank\" class=\"social-icon-sm si-gray si-gray-round si-facebook\">
\t                    <i class=\"fa fa-facebook\"></i>
\t                    <i class=\"fa fa-facebook\"></i>
\t                </a>
\t                <a href=\"https://twitter.com/hcdps\" target=\"blank\" class=\"social-icon-sm si-gray si-gray-round si-twitter\">
\t                    <i class=\"fa fa-twitter\"></i>
\t                    <i class=\"fa fa-twitter\"></i>
\t                </a>
\t                <a href=\"#\" class=\"social-icon-sm si-gray si-gray-round si-g-plus\">
\t                    <i class=\"fa fa-youtube\"></i>
\t                    <i class=\"fa fa-youtube\"></i>
\t                </a>
\t                <a href=\"#\" class=\"social-icon-sm si-gray si-gray-round si-instagram\">
\t                    <i class=\"fa fa-instagram\"></i>
\t                    <i class=\"fa fa-instagram\"></i>
\t                </a>
\t                <a href=\"#\" class=\"social-icon-sm si-gray si-gray-round si-snapchat\">
\t                    <i class=\"fa fa fa-snapchat\"></i>
\t                    <i class=\"fa fa fa-snapchat-ghost\"></i>
\t                </a>
\t            </div>
\t        </div>
\t        <div class=\"col-sm-7 text-right\">
                <ul class=\"list-inline top-dark-right\">                      
                    <li class=\"hidden-sm hidden-xs\"><i class=\"fa fa-envelope\"></i>mtatum@co.henry.va.us</li>
                    <li class=\"hidden-sm hidden-xs\"><i class=\"fa fa-phone\"></i>276-634-4660</li>
                    <li><a href=\"#\"><i class=\"fa fa-lock\"></i> Login</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-user\"></i> Sign Up</a></li>
                </ul>
            </div>
\t    </div>
\t</div>
</div>
<nav id=\"layout-nav\" class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Henry County Department of Public Safety</a>
\t        </div>
\t        <div class=\"collapse navbar-collapse navbar-main-collapse\">
\t            <ul class=\"nav navbar-nav\">
\t                <li class=\"separator hidden-xs\"></li>
\t                <li class=\"";
        // line 54
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "volunteer")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("volunteer");
        echo "\">Become a Volunteer</a></li>
\t                <li class=\"";
        // line 55
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "emergency")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("emergency");
        echo "\">Emergency Management</a></li>
\t                <li class=\"";
        // line 56
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About HCDPS</a></li>
\t                <li class=\"";
        // line 57
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact Us</a></li>
\t            </ul>
\t        </div>
    \t</div>
    </div>
</nav>

";
        // line 64
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            // line 65
            echo "<div id=\"video_background\" style=\"width: 100%; height: 600px;\"
  data-vide-bg=\"mp4: ";
            // line 66
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/video/background/combined.mp4");
            echo ", poster: ";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/video/background/header_video_poster.jpg");
            echo "\"
  data-vide-options=\"posterType: jpg, loop: true, muted: true, position: 50% 50%\">
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/hcdps/themes/hcdps/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 66,  117 => 65,  115 => 64,  101 => 57,  93 => 56,  85 => 55,  77 => 54,  69 => 49,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"top-bar\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-5 hidden-xs\">
\t            <div class=\"top-bar-socials\">
\t                <a href=\"https://www.facebook.com/hcdps/?ref=br_rs\" target=\"blank\" class=\"social-icon-sm si-gray si-gray-round si-facebook\">
\t                    <i class=\"fa fa-facebook\"></i>
\t                    <i class=\"fa fa-facebook\"></i>
\t                </a>
\t                <a href=\"https://twitter.com/hcdps\" target=\"blank\" class=\"social-icon-sm si-gray si-gray-round si-twitter\">
\t                    <i class=\"fa fa-twitter\"></i>
\t                    <i class=\"fa fa-twitter\"></i>
\t                </a>
\t                <a href=\"#\" class=\"social-icon-sm si-gray si-gray-round si-g-plus\">
\t                    <i class=\"fa fa-youtube\"></i>
\t                    <i class=\"fa fa-youtube\"></i>
\t                </a>
\t                <a href=\"#\" class=\"social-icon-sm si-gray si-gray-round si-instagram\">
\t                    <i class=\"fa fa-instagram\"></i>
\t                    <i class=\"fa fa-instagram\"></i>
\t                </a>
\t                <a href=\"#\" class=\"social-icon-sm si-gray si-gray-round si-snapchat\">
\t                    <i class=\"fa fa fa-snapchat\"></i>
\t                    <i class=\"fa fa fa-snapchat-ghost\"></i>
\t                </a>
\t            </div>
\t        </div>
\t        <div class=\"col-sm-7 text-right\">
                <ul class=\"list-inline top-dark-right\">                      
                    <li class=\"hidden-sm hidden-xs\"><i class=\"fa fa-envelope\"></i>mtatum@co.henry.va.us</li>
                    <li class=\"hidden-sm hidden-xs\"><i class=\"fa fa-phone\"></i>276-634-4660</li>
                    <li><a href=\"#\"><i class=\"fa fa-lock\"></i> Login</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-user\"></i> Sign Up</a></li>
                </ul>
            </div>
\t    </div>
\t</div>
</div>
<nav id=\"layout-nav\" class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Henry County Department of Public Safety</a>
\t        </div>
\t        <div class=\"collapse navbar-collapse navbar-main-collapse\">
\t            <ul class=\"nav navbar-nav\">
\t                <li class=\"separator hidden-xs\"></li>
\t                <li class=\"{% if this.page.id == 'volunteer' %}active{% endif %}\"><a href=\"{{ 'volunteer'|page }}\">Become a Volunteer</a></li>
\t                <li class=\"{% if this.page.id == 'emergency' %}active{% endif %}\"><a href=\"{{ 'emergency'|page }}\">Emergency Management</a></li>
\t                <li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">About HCDPS</a></li>
\t                <li class=\"{% if this.page.id == 'contact' %}active{% endif %}\"><a href=\"{{ 'contact'|page }}\">Contact Us</a></li>
\t            </ul>
\t        </div>
    \t</div>
    </div>
</nav>

{% if this.page.id == 'home' %}
<div id=\"video_background\" style=\"width: 100%; height: 600px;\"
  data-vide-bg=\"mp4: {{ 'assets/video/background/combined.mp4'|theme }}, poster: {{ 'assets/video/background/header_video_poster.jpg' |theme}}\"
  data-vide-options=\"posterType: jpg, loop: true, muted: true, position: 50% 50%\">
</div>
{% endif %}", "/var/www/html/hcdps/themes/hcdps/partials/site/header.htm", "");
    }
}
