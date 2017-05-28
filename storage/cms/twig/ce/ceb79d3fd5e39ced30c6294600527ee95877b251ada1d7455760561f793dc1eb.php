<?php

/* /var/www/html/hcdps/plugins/rainlab/twitter/components/embedtimeline/default.htm */
class __TwigTemplate_a2fc9289215792e2615603bee7b8416d92e4a123cb7c53b940461fdc254a0cd7 extends Twig_Template
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
        echo "<a
    class=\"twitter-timeline\"
    href=\"https://twitter.com/twitterapi\" ";
        // line 3
        echo $this->getAttribute(($context["__SELF__"] ?? null), "timelineAttributes", array());
        echo ">
    Tweets Timeline
</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/hcdps/plugins/rainlab/twitter/components/embedtimeline/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a
    class=\"twitter-timeline\"
    href=\"https://twitter.com/twitterapi\" {{ __SELF__.timelineAttributes|raw }}>
    Tweets Timeline
</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>", "/var/www/html/hcdps/plugins/rainlab/twitter/components/embedtimeline/default.htm", "");
    }
}
