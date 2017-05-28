<?php

/* /var/www/html/hcdps/themes/hcdps/partials/site/twitter.htm */
class __TwigTemplate_f76aa2ebf0aedcfc6d8dd25d2a599a528ad9f1a73367a0863321238f8424c3f6 extends Twig_Template
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
        echo "<a class=\"twitter-timeline\" data-chrome=\"noheader nofooter noborders transparent\" data-aria-polite=\"assertive\" data-tweet-limit=\"1\" href=\"https://twitter.com/HCDPS\"></a> <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/hcdps/themes/hcdps/partials/site/twitter.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"twitter-timeline\" data-chrome=\"noheader nofooter noborders transparent\" data-aria-polite=\"assertive\" data-tweet-limit=\"1\" href=\"https://twitter.com/HCDPS\"></a> <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>", "/var/www/html/hcdps/themes/hcdps/partials/site/twitter.htm", "");
    }
}
