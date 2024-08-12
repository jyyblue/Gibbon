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

/* components/blankSlate.twig.html */
class __TwigTemplate_81c35017ab0eb4e8089c0a0446098c68 extends Template
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
        // line 12
        echo "
<div class=\"blankslate w-full h-full flex flex-col items-center justify-center text-gray-600 text-lg\">
    ";
        // line 14
        if (($context["isFiltered"] ?? null)) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("No results matched your search."), "html", null, true);
            echo "
    ";
        } elseif (        // line 16
($context["blankSlate"] ?? null)) {
            // line 17
            echo "        ";
            echo ($context["blankSlate"] ?? null);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("There are no records to display."), "html", null, true);
            echo "
    ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "components/blankSlate.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  56 => 19,  50 => 17,  48 => 16,  43 => 15,  41 => 14,  37 => 12,);
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

Rich Text Editor
-->#}

<div class=\"blankslate w-full h-full flex flex-col items-center justify-center text-gray-600 text-lg\">
    {% if isFiltered %}
        {{ __('No results matched your search.') }}
    {% elseif blankSlate %}
        {{ blankSlate|raw }}
    {% else %}
        {{ __('There are no records to display.') }}
    {% endif %}
</div>
", "components/blankSlate.twig.html", "E:\\Work\\240811_gibbon\\source\\resources\\templates\\components\\blankSlate.twig.html");
    }
}
