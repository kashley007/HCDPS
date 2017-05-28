<?php

/* /var/www/html/hcdps/themes/hcdps/partials/site/news.htm */
class __TwigTemplate_01f90889cb8beae79939bfd41ccdfab5f556b849f4f8af496a8c28977772a384 extends Twig_Template
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
        echo "<div id=\"news\">
\t<div class=\"container\">
\t\t<div class=\"row section_header\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h3 class=\"section_title\">Featured Articles</h3>
\t\t\t</div>
\t\t\t<div style=\"text-align: right\" class=\"col-xs-4\">
\t\t\t\t<a class=\"view-all\" href=\"#\" target=\"_blank\">View all</a>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"news_slide_show\" class=\"row multiple-items\">
\t\t\t<div class=\"slide\">
\t\t\t\t<img src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/smokealarms.jpg");
        echo "\">
\t\t\t\t<div class=\"article\">
\t\t\t\t\t<h2 class=\"title\">Smoke Alarms Save Lives</h2>
\t\t\t\t\t<p class=\"summary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.<a>Read More</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slide\">
\t\t\t\t<img src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/warehouse.jpg");
        echo "\">
\t\t\t\t<div class=\"article\">
\t\t\t\t\t<h2 class=\"title\">American Furniture Fire</h2>
\t\t\t\t\t<p class=\"summary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.<a>Read More</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slide\">
\t\t\t\t<img src=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/home-fire-safety.jpg");
        echo "\">
\t\t\t\t<div class=\"article\">
\t\t\t\t\t<h2 class=\"title\">What To Do if a Fire Starts</h2>
\t\t\t\t\t<p class=\"summary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.<a>Read More</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slide\">
\t\t\t\t<img src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/home-recovery.jpg");
        echo "\">
\t\t\t\t<div class=\"article\">
\t\t\t\t\t<h2 class=\"title\">Recover After a Home Fire</h2>
\t\t\t\t\t<p class=\"summary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.<a>Read More</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/hcdps/themes/hcdps/partials/site/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 34,  53 => 27,  43 => 20,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"news\">
\t<div class=\"container\">
\t\t<div class=\"row section_header\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h3 class=\"section_title\">Featured Articles</h3>
\t\t\t</div>
\t\t\t<div style=\"text-align: right\" class=\"col-xs-4\">
\t\t\t\t<a class=\"view-all\" href=\"#\" target=\"_blank\">View all</a>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"news_slide_show\" class=\"row multiple-items\">
\t\t\t<div class=\"slide\">
\t\t\t\t<img src=\"{{ 'assets/images/smokealarms.jpg'|theme }}\">
\t\t\t\t<div class=\"article\">
\t\t\t\t\t<h2 class=\"title\">Smoke Alarms Save Lives</h2>
\t\t\t\t\t<p class=\"summary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.<a>Read More</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slide\">
\t\t\t\t<img src=\"{{ 'assets/images/warehouse.jpg'|theme }}\">
\t\t\t\t<div class=\"article\">
\t\t\t\t\t<h2 class=\"title\">American Furniture Fire</h2>
\t\t\t\t\t<p class=\"summary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.<a>Read More</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slide\">
\t\t\t\t<img src=\"{{ 'assets/images/home-fire-safety.jpg'|theme }}\">
\t\t\t\t<div class=\"article\">
\t\t\t\t\t<h2 class=\"title\">What To Do if a Fire Starts</h2>
\t\t\t\t\t<p class=\"summary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.<a>Read More</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slide\">
\t\t\t\t<img src=\"{{ 'assets/images/home-recovery.jpg'|theme }}\">
\t\t\t\t<div class=\"article\">
\t\t\t\t\t<h2 class=\"title\">Recover After a Home Fire</h2>
\t\t\t\t\t<p class=\"summary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.<a>Read More</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "/var/www/html/hcdps/themes/hcdps/partials/site/news.htm", "");
    }
}
