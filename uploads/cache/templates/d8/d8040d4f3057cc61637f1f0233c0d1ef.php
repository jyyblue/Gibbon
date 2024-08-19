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

/* formats/familyContacts.twig.html */
class __TwigTemplate_511eaed4a58e7757a256102c2b671b09 extends Template
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
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["familyAdults"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adult"]) {
            // line 15
            echo "
    <u>";
            // line 16
            echo $this->env->getFunction('formatUsing')->getCallable()("name", twig_get_attribute($this->env, $this->source, $context["adult"], "title", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["adult"], "preferredName", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["adult"], "surname", [], "any", false, false, false, 16), "Parent");
            echo "</u>
    ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["adult"], "status", [], "any", false, false, false, 17) != "Full")) {
                echo "<i>(";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["adult"], "status", [], "any", false, false, false, 17)), "html", null, true);
                echo ")</i>";
            }
            // line 18
            echo "    <br/>

    ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, $context["adult"], "childDataAccess", [], "any", false, false, false, 20) == "N")) {
                // line 21
                echo "        <strong style=\"color: #cc0000\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Data Access"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("No"), "html", null, true);
                echo "</strong><br/>
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["adult"], "email", [], "any", false, false, false, 24)) {
                // line 25
                echo "        <i>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Email"), "html", null, true);
                echo "</i>: ";
                echo $this->env->getFunction('formatUsing')->getCallable()("link", ("mailto:" . twig_get_attribute($this->env, $this->source, $context["adult"], "email", [], "any", false, false, false, 25)), twig_get_attribute($this->env, $this->source, $context["adult"], "email", [], "any", false, false, false, 25));
                echo "<br/>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if (($context["includePhoneNumbers"] ?? null)) {
                // line 29
                echo "        ";
                $context["phoneNumbers"] = 0;
                // line 30
                echo "
        ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 32
                    echo "            ";
                    if ((($__internal_compile_0 = $context["adult"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("phone" . $context["i"])] ?? null) : null)) {
                        // line 33
                        echo "                ";
                        echo $this->env->getFunction('formatUsing')->getCallable()("phone", (($__internal_compile_1 = $context["adult"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[("phone" . $context["i"])] ?? null) : null), (($__internal_compile_2 = $context["adult"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[(("phone" . $context["i"]) . "CountryCode")] ?? null) : null), (("<i>" . (($__internal_compile_3 = $context["adult"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[(("phone" . $context["i"]) . "Type")] ?? null) : null)) . "</i>"));
                        echo "<br/>
                ";
                        // line 34
                        $context["phoneNumbers"] = (($context["phoneNumbers"] ?? null) + 1);
                        // line 35
                        echo "            ";
                    }
                    // line 36
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
        ";
                // line 38
                if ((($context["phoneNumbers"] ?? null) == 0)) {
                    // line 39
                    echo "            <i>";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Phone"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("No number available."), "html", null, true);
                    echo "</i><br/>
        ";
                }
                // line 41
                echo "
    ";
            }
            // line 43
            echo "
    ";
            // line 44
            if (($context["includeCitizenship"] ?? null)) {
                // line 45
                echo "
        ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["adult"], "citizenship", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "        <i>";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Nationality"), "html", null, true);
                    echo "</i>: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adult"], "citizenship", [], "any", false, false, false, 47), "html", null, true);
                    echo "
        ";
                }
                // line 49
                echo "
    ";
            }
            // line 51
            echo "
    ";
            // line 52
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 52)) {
                echo "<br/><br/>";
            }
            // line 53
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adult'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "formats/familyContacts.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 53,  173 => 52,  170 => 51,  166 => 49,  158 => 47,  156 => 46,  153 => 45,  151 => 44,  148 => 43,  144 => 41,  136 => 39,  134 => 38,  131 => 37,  125 => 36,  122 => 35,  120 => 34,  115 => 33,  112 => 32,  108 => 31,  105 => 30,  102 => 29,  100 => 28,  97 => 27,  89 => 25,  87 => 24,  84 => 23,  76 => 21,  74 => 20,  70 => 18,  64 => 17,  60 => 16,  57 => 15,  40 => 14,  37 => 13,);
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

Page Foot: Outputs the contents of the HTML <head> tag. This includes 
all stylesheets and scripts with a 'head' context.
-->#}

{% for adult in familyAdults %}

    <u>{{ formatUsing('name', adult.title, adult.preferredName, adult.surname, \"Parent\") }}</u>
    {% if adult.status != 'Full' %}<i>({{ __(adult.status) }})</i>{% endif %}
    <br/>

    {% if adult.childDataAccess == 'N' %}
        <strong style=\"color: #cc0000\">{{ __('Data Access') }}: {{ __('No') }}</strong><br/>
    {% endif %}

    {% if adult.email %}
        <i>{{ __('Email') }}</i>: {{ formatUsing('link', \"mailto:\" ~ adult.email, adult.email)|raw }}<br/>
    {% endif %}

    {% if includePhoneNumbers %}
        {% set phoneNumbers = 0 %}

        {% for i in 1..4 %}
            {% if adult[\"phone\"~i] %}
                {{ formatUsing('phone', adult[\"phone\"~i], adult[\"phone\"~i~\"CountryCode\"], \"<i>\"~adult[\"phone\"~i~\"Type\"]~\"</i>\")|raw }}<br/>
                {% set phoneNumbers = phoneNumbers + 1 %}
            {% endif %}
        {% endfor %}

        {% if phoneNumbers == 0 %}
            <i>{{ __('Phone') }}: {{ __('No number available.') }}</i><br/>
        {% endif %}

    {% endif %}

    {% if includeCitizenship %}

        {% if adult.citizenship %}
        <i>{{ __('Nationality') }}</i>: {{ adult.citizenship }}
        {% endif %}

    {% endif %}

    {% if not loop.last %}<br/><br/>{% endif%}

{% endfor %}
", "formats/familyContacts.twig.html", "E:\\Work\\240811_gibbon\\source\\resources\\templates\\formats\\familyContacts.twig.html");
    }
}
