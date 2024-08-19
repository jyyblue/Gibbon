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

/* fullscreen.twig.html */
class __TwigTemplate_01fcb69770301a41a168c14a4728572e extends Template
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
        // line 10
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 13
        $this->loadTemplate("head.twig.html", "fullscreen.twig.html", 13)->displayBlock("meta", $context);
        echo "
        ";
        // line 14
        $this->loadTemplate("head.twig.html", "fullscreen.twig.html", 14)->displayBlock("styles", $context);
        echo "
    </head>
    <body style='background-image: none'>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alerts", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["type"] => $context["alerts"]) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 20
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo $context["text"];
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 24
        echo twig_join_filter(($context["content"] ?? null), "
");
        echo "
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "fullscreen.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  79 => 23,  73 => 22,  62 => 20,  57 => 19,  53 => 18,  46 => 14,  42 => 13,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!--
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This is a Gibbon template file, written in HTML and Twig syntax.
For info about editing, see: https://twig.symfony.com/doc/2.x/
-->#}
<!DOCTYPE html>
<html>
    <head>
        {{ block('meta', 'head.twig.html') }}
        {{ block('styles', 'head.twig.html') }}
    </head>
    <body style='background-image: none'>

        {% for type, alerts in page.alerts %}
            {% for text in alerts %}
                <div class=\"{{ type }}\">{{ text|raw }}</div>
            {% endfor %}
        {% endfor %}

        {{ content|join(\"\\n\")|raw }}
    </body>
</html>
", "fullscreen.twig.html", "E:\\Work\\240811_gibbon\\source\\resources\\templates\\fullscreen.twig.html");
    }
}
