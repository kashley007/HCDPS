<?php

/* /var/www/html/hcdps/plugins/rainlab/twitter/components/latesttweet/default.htm */
class __TwigTemplate_8bfcd085f8882a7d15582eff33a237a27c8bd3e22f466a63b3ef8caeac2c9676 extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tweets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
            // line 3
            echo "        <li>
            <p class=\"text\">";
            // line 4
            echo $this->getAttribute($context["tweet"], "text_processed", array());
            echo "</p>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/hcdps/plugins/rainlab/twitter/components/latesttweet/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
    {% for tweet in tweets %}
        <li>
            <p class=\"text\">{{ tweet.text_processed|raw }}</p>
        </li>
    {% endfor %}
</ul>", "/var/www/html/hcdps/plugins/rainlab/twitter/components/latesttweet/default.htm", "");
    }
}
