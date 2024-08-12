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

/* systemOverview.twig.html */
class __TwigTemplate_6db3dfb9936a290b1ed2fb5e1a718b34 extends Template
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
<div class=\"flex flex-col sm:flex-row w-full mb-6 bg-white shadow rounded font-sans\">

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-b sm:border-b-0 sm:border-r border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Gibbon Version"), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            v";
        // line 18
        echo twig_escape_filter($this->env, ($context["gibbonVersion"] ?? null), "html", null, true);
        echo "
        </div>
        <div id=\"gibbonCheck\" class=\"mt-1\">
            <span class=\"tag rounded-full ";
        // line 21
        echo ((($context["gibbonCheck"] ?? null)) ? ("success") : ("dull"));
        echo "\">
                ";
        // line 22
        echo twig_escape_filter($this->env, ((($context["gibbonCheck"] ?? null)) ? ($this->env->getFunction('__')->getCallable()("OK")) : ($this->env->getFunction('__')->getCallable()("Checking"))), "html", null, true);
        echo "
            </span>
        </div>
    </div>

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-b sm:border-b-0 sm:border-r border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("PHP Version"), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            ";
        // line 32
        echo twig_escape_filter($this->env, ($context["phpVersion"] ?? null), "html", null, true);
        echo "
        </div>
        <div class=\"mt-1\">
            <span class=\"tag rounded-full ";
        // line 35
        echo ((($context["phpCheck"] ?? null)) ? ("success") : ("error"));
        echo "\">
                ";
        // line 36
        echo twig_escape_filter($this->env, ((($context["phpCheck"] ?? null)) ? ($this->env->getFunction('__')->getCallable()("OK")) : ($this->env->getFunction('__')->getCallable()("Error"))), "html", null, true);
        echo "
            </span>
        </div>
    </div>

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("MySQL Version"), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            ";
        // line 46
        echo twig_escape_filter($this->env, ($context["mySqlVersion"] ?? null), "html", null, true);
        echo "
        </div>
        <div class=\"mt-1\">
            <span class=\"tag rounded-full ";
        // line 49
        echo ((($context["mySqlCheck"] ?? null)) ? ("success") : ("error"));
        echo "\">
                ";
        // line 50
        echo twig_escape_filter($this->env, ((($context["mySqlCheck"] ?? null)) ? ($this->env->getFunction('__')->getCallable()("OK")) : ($this->env->getFunction('__')->getCallable()("Error"))), "html", null, true);
        echo "
            </span>
        </div>
    </div>
</div>

";
        // line 56
        echo ($context["uploadsCheck"] ?? null);
        echo "

";
        // line 58
        echo ($context["versionCheck"] ?? null);
        echo "


";
        // line 61
        echo twig_include($this->env, $context, "ui/gettingStarted.twig.html");
        echo "
";
    }

    public function getTemplateName()
    {
        return "systemOverview.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 61,  126 => 58,  121 => 56,  112 => 50,  108 => 49,  102 => 46,  96 => 43,  86 => 36,  82 => 35,  76 => 32,  70 => 29,  60 => 22,  56 => 21,  50 => 18,  44 => 15,  37 => 10,);
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

<div class=\"flex flex-col sm:flex-row w-full mb-6 bg-white shadow rounded font-sans\">

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-b sm:border-b-0 sm:border-r border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            {{ __('Gibbon Version') }}
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            v{{ gibbonVersion }}
        </div>
        <div id=\"gibbonCheck\" class=\"mt-1\">
            <span class=\"tag rounded-full {{ gibbonCheck ? 'success' : 'dull' }}\">
                {{ gibbonCheck ? __('OK') : __('Checking') }}
            </span>
        </div>
    </div>

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-b sm:border-b-0 sm:border-r border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            {{ __('PHP Version') }}
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            {{ phpVersion }}
        </div>
        <div class=\"mt-1\">
            <span class=\"tag rounded-full {{ phpCheck ? 'success' : 'error' }}\">
                {{ phpCheck ? __('OK') : __('Error') }}
            </span>
        </div>
    </div>

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            {{ __('MySQL Version') }}
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            {{ mySqlVersion }}
        </div>
        <div class=\"mt-1\">
            <span class=\"tag rounded-full {{ mySqlCheck ? 'success' : 'error' }}\">
                {{ mySqlCheck ? __('OK') : __('Error') }}
            </span>
        </div>
    </div>
</div>

{{ uploadsCheck|raw }}

{{ versionCheck|raw }}


{{ include('ui/gettingStarted.twig.html') }}
", "systemOverview.twig.html", "E:\\Work\\240811_gibbon\\source\\modules\\System Admin\\templates\\systemOverview.twig.html");
    }
}
