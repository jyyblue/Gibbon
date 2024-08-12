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

/* ui/unitBlock.twig.html */
class __TwigTemplate_c2eca44877544d1a46b37e5e57d9e356 extends Template
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
        echo "
<div class=\"unit-block relative rounded-sm shadow p-8 bg-white border-t-4 border-";
        // line 11
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-500 mb-6\">

    ";
        // line 13
        if (($context["length"] ?? null)) {
            // line 14
            echo "    <span class=\"z-10 tag dull block absolute right-0 top-0 mt-5 mr-5\">
        ";
            // line 15
            echo twig_escape_filter($this->env, ($context["length"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("mins"), "html", null, true);
            echo "
    </span>
    ";
        }
        // line 18
        echo "
    <div class=\"-mt-3 font-sans text-lg leading-snug text-gray-800 font-bold\">
        ";
        // line 20
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
    </div>

    ";
        // line 23
        if (($context["type"] ?? null)) {
            // line 24
            echo "    <div class=\"mb-4 font-sans text-sm leading-snug text-gray-600\">
        ";
            // line 25
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 28
        echo "
    <div class=\"text-base\">
        ";
        // line 30
        echo ($context["contents"] ?? null);
        echo "
    </div>

    ";
        // line 33
        if (((($context["teachersNotes"] ?? null) && (($context["roleCategory"] ?? null) == "Staff")) &&  !twig_test_empty(($context["gibbonPersonID"] ?? null)))) {
            // line 34
            echo "        <div class=\"teachersNotes hidden border bg-red-200 rounded p-4 mt-4\">
            <h4 class=\"mt-0 mb-2 uppercase font-sans text-base leading-snug text-gray-800 p-1\">
                ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Teacher's Notes"), "html", null, true);
            echo "
            </h4>
            <div class=\"-mb-4 text-sm p-1\">
                ";
            // line 39
            echo ($context["teachersNotes"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (((($context["role"] ?? null) == "Teacher") && (($context["teacher"] ?? null) == "true"))) {
            // line 45
            echo "        <div style='text-align: right; font-weight: bold; margin-top: 20px'> ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Complete?"), "html", null, true);
            echo " <input name='complete";
            echo twig_escape_filter($this->env, ($context["blockCount"] ?? null), "html", null, true);
            echo "' style='margin-right: 2px' type='checkbox' ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo "></div>
        <input type=\"hidden\" name=\"gibbonUnitClassBlockID[]\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["gibbonUnitClassBlockID"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 48
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ui/unitBlock.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 48,  122 => 46,  113 => 45,  111 => 44,  108 => 43,  101 => 39,  95 => 36,  91 => 34,  89 => 33,  83 => 30,  79 => 28,  73 => 25,  70 => 24,  68 => 23,  62 => 20,  58 => 18,  50 => 15,  47 => 14,  45 => 13,  40 => 11,  37 => 10,);
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

<div class=\"unit-block relative rounded-sm shadow p-8 bg-white border-t-4 border-{{ themeColour }}-500 mb-6\">

    {% if length %}
    <span class=\"z-10 tag dull block absolute right-0 top-0 mt-5 mr-5\">
        {{ length }} {{ __('mins') }}
    </span>
    {% endif %}

    <div class=\"-mt-3 font-sans text-lg leading-snug text-gray-800 font-bold\">
        {{ title }}
    </div>

    {% if type %}
    <div class=\"mb-4 font-sans text-sm leading-snug text-gray-600\">
        {{ type }}
    </div>
    {% endif %}

    <div class=\"text-base\">
        {{ contents|raw }}
    </div>

    {% if teachersNotes and roleCategory == 'Staff' and gibbonPersonID is not empty %}
        <div class=\"teachersNotes hidden border bg-red-200 rounded p-4 mt-4\">
            <h4 class=\"mt-0 mb-2 uppercase font-sans text-base leading-snug text-gray-800 p-1\">
                {{ __(\"Teacher's Notes\") }}
            </h4>
            <div class=\"-mb-4 text-sm p-1\">
                {{ teachersNotes|raw }}
            </div>
        </div>
    {% endif %}

    {% if role == 'Teacher' and teacher == 'true'  %}
        <div style='text-align: right; font-weight: bold; margin-top: 20px'> {{ __('Complete?') }} <input name='complete{{ blockCount }}' style='margin-right: 2px' type='checkbox' {{ checked }}></div>
        <input type=\"hidden\" name=\"gibbonUnitClassBlockID[]\" value=\"{{ gibbonUnitClassBlockID }}\">
    {% endif %}
</div>
", "ui/unitBlock.twig.html", "E:\\Work\\240811_gibbon\\source\\resources\\templates\\ui\\unitBlock.twig.html");
    }
}
