<?php

/* /var/www/html/hcdps/themes/hcdps/pages/home.htm */
class __TwigTemplate_e4a957560ea620326f87dd3c9f8525fdf2b3b9e07bc2309bc12adf78220270eb extends Twig_Template
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
        echo "<div id=\"mission_statement\" class=\"container\">
\t<div class=\"row\">
\t\t<h2>Mission:</h2>
\t\t<p>The Department of Public Safety is dedicated to saving lives, preserving property, and maintaining economy of the citizens and businesses of Henry County. Our mission is accomplished by ensuring Henry County’s readiness to respond, recover and reduce the effects of potential, intentional, accidental or natural disasters and emergencies.</p>
\t</div>
</div>
";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/news"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "<div id=\"events\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/events"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "\t\t</div>
\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/twitter"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "\t\t</div>
\t</div>
</div>
<div id=\"volunteer\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<p id=\"volunteer-today\">You Can Make A Difference - Volunteer Today!</p>
\t\t\t<p id=\"opportunites\">With 5 EMS Agencies and 8 Fire Departments there are endless opportunities for you to make a difference in Henry County!</p>
\t\t\t<button id=\"apply\" name=\"button\">Apply Now</button>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/hcdps/themes/hcdps/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  44 => 14,  40 => 12,  36 => 11,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"mission_statement\" class=\"container\">
\t<div class=\"row\">
\t\t<h2>Mission:</h2>
\t\t<p>The Department of Public Safety is dedicated to saving lives, preserving property, and maintaining economy of the citizens and businesses of Henry County. Our mission is accomplished by ensuring Henry County’s readiness to respond, recover and reduce the effects of potential, intentional, accidental or natural disasters and emergencies.</p>
\t</div>
</div>
{% partial 'site/news' %}
<div id=\"events\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t{% partial 'site/events' %}
\t\t</div>
\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t{% partial 'site/twitter' %}
\t\t</div>
\t</div>
</div>
<div id=\"volunteer\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<p id=\"volunteer-today\">You Can Make A Difference - Volunteer Today!</p>
\t\t\t<p id=\"opportunites\">With 5 EMS Agencies and 8 Fire Departments there are endless opportunities for you to make a difference in Henry County!</p>
\t\t\t<button id=\"apply\" name=\"button\">Apply Now</button>
\t\t</div>
\t</div>
</div>", "/var/www/html/hcdps/themes/hcdps/pages/home.htm", "");
    }
}
