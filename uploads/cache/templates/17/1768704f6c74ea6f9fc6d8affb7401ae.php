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

/* ui/upcomingDeadlines.twig.html */
class __TwigTemplate_69da16fd57a26af67ed4fb67f6d72825 extends Template
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
";
        // line 11
        if (($context["heading"] ?? null)) {
            // line 12
            echo "<";
            echo twig_escape_filter($this->env, ($context["heading"] ?? null), "html", null, true);
            echo ">
    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Upcoming Due Dates"), "html", null, true);
            echo "
</";
            // line 14
            echo twig_escape_filter($this->env, ($context["heading"] ?? null), "html", null, true);
            echo ">
";
        }
        // line 16
        echo "
";
        // line 17
        if (($context["deadlines"] ?? null)) {
            // line 18
            echo "
    <ol class=\"ml-6\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["deadlines"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["deadline"]) {
                // line 21
                echo "        ";
                $context["difference"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["deadline"], "homeworkDueDateTime", [], "any", false, false, false, 21)), "diff", [twig_date_converter($this->env)], "method", false, false, false, 21);
                // line 22
                echo "
        ";
                // line 23
                if (((twig_get_attribute($this->env, $this->source, $context["deadline"], "homeworkComplete", [], "any", false, false, false, 23) == "Y") || (twig_get_attribute($this->env, $this->source, $context["deadline"], "onlineSubmission", [], "any", false, false, false, 23) == "Y"))) {
                    // line 24
                    echo "            ";
                    $context["class"] = "success border-r-8";
                    // line 25
                    echo "            ";
                    $context["tag"] = (("<span class='tag success border border-green-300 ml-2'>" . $this->env->getFunction('__')->getCallable()("Complete")) . "</span>");
                    // line 26
                    echo "        ";
                } elseif ((twig_get_attribute($this->env, $this->source, ($context["difference"] ?? null), "days", [], "any", false, false, false, 26) <= 0)) {
                    // line 27
                    echo "            ";
                    $context["class"] = "error border-r-8";
                    // line 28
                    echo "            ";
                    $context["tag"] = (("<span class='tag error border border-red-300 ml-2'>" . $this->env->getFunction('__')->getCallable()("Due Soon")) . "</span>");
                    // line 29
                    echo "        ";
                } elseif ((twig_get_attribute($this->env, $this->source, ($context["difference"] ?? null), "days", [], "any", false, false, false, 29) <= 2)) {
                    // line 30
                    echo "            ";
                    $context["class"] = "warning border-r-8";
                    // line 31
                    echo "            ";
                    $context["tag"] = (("<span class='tag warning border border-red-300 ml-2'>" . $this->env->getFunction('__')->getCallable()("Due Soon")) . "</span>");
                    // line 32
                    echo "        ";
                } else {
                    // line 33
                    echo "            ";
                    $context["class"] = "text-gray-800";
                    // line 34
                    echo "            ";
                    $context["tag"] = "";
                    // line 35
                    echo "        ";
                }
                // line 36
                echo "
        <li>
            <a class=\"";
                // line 38
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo " block p-2\" href=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/index.php?q=/modules/Planner/planner_view_full.php&search=";
                echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
                echo "&gibbonPlannerEntryID=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deadline"], "gibbonPlannerEntryID", [], "any", false, false, false, 38), "html", null, true);
                echo "&viewBy=";
                (((array_key_exists("viewBy", $context) &&  !(null === ($context["viewBy"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["viewBy"] ?? null), "html", null, true))) : (print ("date")));
                echo "&gibbonCourseClassID=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deadline"], "gibbonCourseClassID", [], "any", false, false, false, 38), "html", null, true);
                echo "&date=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deadline"], "date", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
                <span class=\"font-bold\">
                    ";
                // line 40
                echo $this->env->getFunction('formatUsing')->getCallable()("courseClassName", twig_get_attribute($this->env, $this->source, $context["deadline"], "course", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, $context["deadline"], "class", [], "any", false, false, false, 40));
                echo "
                    ";
                // line 41
                (( !($context["hideLessonName"] ?? null)) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, $context["deadline"], "name", [], "any", false, false, false, 41)), "html", null, true))) : (print ("")));
                echo "
                </span><br/>

                <span class=\"text-xs italic opacity-75\">
                    ";
                // line 45
                echo $this->env->getFunction('__')->getCallable()("Due at {time} on {date}", ["time" => $this->env->getFunction('formatUsing')->getCallable()("time", twig_get_attribute($this->env, $this->source, $context["deadline"], "homeworkDueDateTime", [], "any", false, false, false, 45)), "date" => $this->env->getFunction('formatUsing')->getCallable()("date", twig_get_attribute($this->env, $this->source, $context["deadline"], "homeworkDueDateTime", [], "any", false, false, false, 45))]);
                echo " 

                    ";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, $context["deadline"], "type", [], "any", false, false, false, 47) == "studentRecorded")) {
                    // line 48
                    echo "                        • ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Student Recorded"), "html", null, true);
                    echo "
                    ";
                }
                // line 50
                echo "
                    ";
                // line 51
                echo ($context["tag"] ?? null);
                echo "
                </span>
            </a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deadline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </ol>

";
        } else {
            // line 59
            echo "    ";
            echo $this->env->getFunction('formatUsing')->getCallable()("alert", $this->env->getFunction('__')->getCallable()("No upcoming due dates!"), "success");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ui/upcomingDeadlines.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 59,  172 => 56,  161 => 51,  158 => 50,  152 => 48,  150 => 47,  145 => 45,  138 => 41,  134 => 40,  117 => 38,  113 => 36,  110 => 35,  107 => 34,  104 => 33,  101 => 32,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  86 => 27,  83 => 26,  80 => 25,  77 => 24,  75 => 23,  72 => 22,  69 => 21,  65 => 20,  61 => 18,  59 => 17,  56 => 16,  51 => 14,  47 => 13,  42 => 12,  40 => 11,  37 => 10,);
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

{% if heading %}
<{{ heading }}>
    {{ __('Upcoming Due Dates') }}
</{{ heading }}>
{% endif %}

{% if deadlines %}

    <ol class=\"ml-6\">
    {% for deadline in deadlines %}
        {% set difference = date(deadline.homeworkDueDateTime).diff(date()) %}

        {% if deadline.homeworkComplete == 'Y' or deadline.onlineSubmission == 'Y' %}
            {% set class = \"success border-r-8\" %}
            {% set tag = \"<span class='tag success border border-green-300 ml-2'>\" ~  __('Complete')  ~ \"</span>\" %}
        {% elseif difference.days <= 0 %}
            {% set class = \"error border-r-8\" %}
            {% set tag = \"<span class='tag error border border-red-300 ml-2'>\" ~  __('Due Soon')  ~ \"</span>\" %}
        {% elseif difference.days <= 2 %}
            {% set class = \"warning border-r-8\" %}
            {% set tag = \"<span class='tag warning border border-red-300 ml-2'>\" ~  __('Due Soon')  ~ \"</span>\" %}
        {% else %}
            {% set class = \"text-gray-800\" %}
            {% set tag = \"\" %}
        {% endif %}

        <li>
            <a class=\"{{ class }} block p-2\" href=\"{{ absoluteURL}}/index.php?q=/modules/Planner/planner_view_full.php&search={{ gibbonPersonID }}&gibbonPlannerEntryID={{ deadline.gibbonPlannerEntryID }}&viewBy={{ viewBy ?? 'date' }}&gibbonCourseClassID={{  deadline.gibbonCourseClassID }}&date={{ deadline.date }}\">
                <span class=\"font-bold\">
                    {{ formatUsing('courseClassName', deadline.course, deadline.class) }}
                    {{ not hideLessonName ? ' - ' ~ deadline.name : '' }}
                </span><br/>

                <span class=\"text-xs italic opacity-75\">
                    {{ __('Due at {time} on {date}', {'time': formatUsing('time', deadline.homeworkDueDateTime), 'date': formatUsing('date', deadline.homeworkDueDateTime) })|raw }} 

                    {% if deadline.type == 'studentRecorded' %}
                        • {{ __('Student Recorded') }}
                    {% endif %}

                    {{ tag|raw }}
                </span>
            </a>
        </li>
    {% endfor %}
    </ol>

{% else %}
    {{ formatUsing('alert', __('No upcoming due dates!'), 'success') }}
{% endif %}
", "ui/upcomingDeadlines.twig.html", "E:\\Work\\240811_gibbon\\source\\resources\\templates\\ui\\upcomingDeadlines.twig.html");
    }
}
