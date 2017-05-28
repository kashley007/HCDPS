<?php

/* /var/www/html/hcdps/themes/hcdps/layouts/default.htm */
class __TwigTemplate_8de41de5012bf28626fc5c45e1e38b15024b62b9d09ae56ae9bbb2fe085ea72f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>HCDPS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/hcdps_logo_trans.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/font-awesome/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/slick/slick/slick.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/slick/slick/slick-theme.css");
        echo "\" rel=\"stylesheet\">

        ";
        // line 19
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 20
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 30
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 31
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <script src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.sticky.js");
        echo "\"></script>
        <script src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/vide/dist/jquery.vide.min.js");
        echo "\"></script>
        <script src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/slick/slick/slick.min.js");
        echo "\"></script>

        <script>
            \$(document).ready(function(){
                \$(\"#layout-nav\").sticky({topSpacing:0});
                \$('.multiple-items').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: true,
                    autoplaySpeed: 8000,
                    speed: 600
                });
            });

        </script>
        ";
        // line 60
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 61
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 62
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/hcdps/themes/hcdps/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 62,  152 => 61,  145 => 60,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  101 => 36,  97 => 35,  91 => 31,  89 => 30,  83 => 26,  79 => 25,  72 => 20,  69 => 19,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>HCDPS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/hcdps_logo_trans.png'|theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/custom.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/vendor/font-awesome/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/vendor/slick/slick/slick.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/vendor/slick/slick/slick-theme.css'|theme }}\" rel=\"stylesheet\">

        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/jquery.sticky.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/vide/dist/jquery.vide.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/slick/slick/slick.min.js'|theme }}\"></script>

        <script>
            \$(document).ready(function(){
                \$(\"#layout-nav\").sticky({topSpacing:0});
                \$('.multiple-items').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: true,
                    autoplaySpeed: 8000,
                    speed: 600
                });
            });

        </script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/var/www/html/hcdps/themes/hcdps/layouts/default.htm", "");
    }
}
