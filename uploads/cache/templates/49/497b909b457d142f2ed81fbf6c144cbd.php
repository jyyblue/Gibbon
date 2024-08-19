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

/* libraryShelves.twig.html */
class __TwigTemplate_a257b262bdbce2bb4ca15762cb51a6ba extends Template
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
        // line 1
        echo "
";
        // line 2
        $macros["shelfItemViewer"] = $this->macros["shelfItemViewer"] = $this;
        // line 3
        if ((($context["libraryShelves"] ?? null) && ($context["shelfNames"] ?? null))) {
            // line 4
            echo "    <div id=\"libraryShelves\" class=\"shelfContainer overflow-y-auto w-full\">
        <!-- <h1>Hand-Picked Collections</h1> -->
        <div class=\"columns-auto w-full divide-y\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["libraryShelves"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["shelf"]) {
                // line 8
                echo "            <h3 class=\"mt-8\">";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["shelfNames"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["shelf"]] ?? null) : null), "html", null, true);
                echo "</h3>
            <div class=\"flex justify-content-start pl-4 pr-4 pt-4 content-end gap-5 flex-row  overflow-x-scroll overscroll-contain pb-8 border-2 border-transparent bg-gray-100 bg-opacity-50\">
                ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["libraryShelves"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["shelf"]] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 11
                    echo "                    ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "imageLocation", [], "any", false, false, false, 11))) {
                        // line 12
                        echo "                        <a data-log=\"";
                        echo twig_call_macro($macros["shelfItemViewer"], "macro_tooltip", [$context["item"]], 12, $context, $this->getSourceContext());
                        echo "\">
                            <img src=\"";
                        // line 13
                        echo twig_escape_filter($this->env, ((twig_in_filter("?", twig_get_attribute($this->env, $this->source, $context["item"], "imageLocation", [], "any", false, false, false, 13))) ? ((twig_get_attribute($this->env, $this->source, $context["item"], "imageLocation", [], "any", false, false, false, 13) . "&fife=w200")) : (twig_get_attribute($this->env, $this->source, $context["item"], "imageLocation", [], "any", false, false, false, 13))), "html", null, true);
                        echo "\" class=\"transition ease-out duration-300 border-2 border-transparent hover hover:border-purple-600 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl w-40 h-64 shadow-xl\">
                        </a>
                    ";
                    }
                    // line 16
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shelf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </div>
    </div>

    

    <script>
    \$('#libraryShelves').tooltip({
        items: \"a[data-log]\",
        show: 800,
        hide: false,
        content: function () {
            return \$(this).data('log');
        },
        tooltipClass: \"tooltip-reset\",
        position: {
            my: \"center bottom-5\",
            at: \"center top\",
            using: function (position, feedback) {
                \$(this).css(position);
                \$(\"<div>\").
                    addClass(\"arrow\").
                    addClass(feedback.vertical).
                    addClass(feedback.horizontal).
                    appendTo(this);
            }
        }
    });
    </script>
    <style>
        .tooltip-reset {
            min-width: 20rem;
        }
    </style>
";
        }
        // line 53
        echo "
";
    }

    // line 54
    public function macro_tooltip($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 55
            echo "    <section class='flex flex-row p-1 w-auto'>
        <div class='flex-1'>
            <h4 class='mt-2 text-white'>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "</h4>
            <p class='text-white'>by: ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "producer", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
            <p class='text-white'>Location: ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "spaceName", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
            <p class='text-white'>Location Detail: ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "locationDetail", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
        
            
            ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 63) == "Available")) {
                // line 64
                echo "                <div><p class='text-green-500'>Status: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 64), "html", null, true);
                echo "</p></div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 65
($context["item"] ?? null), "status", [], "any", false, false, false, 65) == "On Loan")) {
                // line 66
                echo "                <div><p class='text-red-500'>Status: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 66), "html", null, true);
                echo "</p></div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 67
($context["item"] ?? null), "status", [], "any", false, false, false, 67) == "Reserved")) {
                // line 68
                echo "                <div><p class='text-yellow-500'>Status: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 68), "html", null, true);
                echo "</p></div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 69
($context["item"] ?? null), "status", [], "any", false, false, false, 69) == "Repair")) {
                // line 70
                echo "                <div><p class='text-Orange-500'>Status: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 70), "html", null, true);
                echo "</p></div>
            ";
            }
            // line 72
            echo "        </div>
        <div class='toolTipDescription flex-1 pl-2'>
            <h5 class='mt-2 text-white'>Description:</h5>
            <p class='text-white'>";
            // line 75
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 75), 0, 200), "html", null, true);
            echo "...</p>
        </div>
    </section>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "libraryShelves.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 75,  195 => 72,  189 => 70,  187 => 69,  182 => 68,  180 => 67,  175 => 66,  173 => 65,  168 => 64,  166 => 63,  160 => 60,  156 => 59,  152 => 58,  148 => 57,  144 => 55,  131 => 54,  126 => 53,  90 => 19,  83 => 17,  77 => 16,  71 => 13,  66 => 12,  63 => 11,  59 => 10,  53 => 8,  49 => 7,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% import _self as shelfItemViewer  %}
{% if libraryShelves and shelfNames%}
    <div id=\"libraryShelves\" class=\"shelfContainer overflow-y-auto w-full\">
        <!-- <h1>Hand-Picked Collections</h1> -->
        <div class=\"columns-auto w-full divide-y\">
        {% for shelf in libraryShelves|keys %}
            <h3 class=\"mt-8\">{{shelfNames[shelf]}}</h3>
            <div class=\"flex justify-content-start pl-4 pr-4 pt-4 content-end gap-5 flex-row  overflow-x-scroll overscroll-contain pb-8 border-2 border-transparent bg-gray-100 bg-opacity-50\">
                {% for item in libraryShelves[shelf] %}
                    {% if item.imageLocation is not empty %}
                        <a data-log=\"{{shelfItemViewer.tooltip(item) }}\">
                            <img src=\"{{ \"?\" in item.imageLocation ? item.imageLocation ~ \"&fife=w200\" : item.imageLocation }}\" class=\"transition ease-out duration-300 border-2 border-transparent hover hover:border-purple-600 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl w-40 h-64 shadow-xl\">
                        </a>
                    {% endif %}
                {% endfor %}
            </div>
        {% endfor %}
        </div>
    </div>

    

    <script>
    \$('#libraryShelves').tooltip({
        items: \"a[data-log]\",
        show: 800,
        hide: false,
        content: function () {
            return \$(this).data('log');
        },
        tooltipClass: \"tooltip-reset\",
        position: {
            my: \"center bottom-5\",
            at: \"center top\",
            using: function (position, feedback) {
                \$(this).css(position);
                \$(\"<div>\").
                    addClass(\"arrow\").
                    addClass(feedback.vertical).
                    addClass(feedback.horizontal).
                    appendTo(this);
            }
        }
    });
    </script>
    <style>
        .tooltip-reset {
            min-width: 20rem;
        }
    </style>
{% endif %}

{% macro tooltip(item) %}
    <section class='flex flex-row p-1 w-auto'>
        <div class='flex-1'>
            <h4 class='mt-2 text-white'>{{item.name}}</h4>
            <p class='text-white'>by: {{item.producer}}</p>
            <p class='text-white'>Location: {{item.spaceName}}</p>
            <p class='text-white'>Location Detail: {{item.locationDetail}}</p>
        
            
            {% if item.status == 'Available' %}
                <div><p class='text-green-500'>Status: {{item.status}}</p></div>
            {% elseif item.status == 'On Loan' %}
                <div><p class='text-red-500'>Status: {{item.status}}</p></div>
            {% elseif item.status == 'Reserved' %}
                <div><p class='text-yellow-500'>Status: {{item.status}}</p></div>
            {% elseif item.status == 'Repair' %}
                <div><p class='text-Orange-500'>Status: {{item.status}}</p></div>
            {% endif%}
        </div>
        <div class='toolTipDescription flex-1 pl-2'>
            <h5 class='mt-2 text-white'>Description:</h5>
            <p class='text-white'>{{ item.description|slice(0, 200) }}...</p>
        </div>
    </section>
{% endmacro tooltip %}
", "libraryShelves.twig.html", "E:\\Work\\240811_gibbon\\source\\modules\\Library\\templates\\libraryShelves.twig.html");
    }
}
