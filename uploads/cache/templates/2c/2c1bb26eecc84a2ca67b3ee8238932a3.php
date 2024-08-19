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

/* mail/notification.twig.html */
class __TwigTemplate_3fea5451af5b1e5abf72fef812585a58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodyBottom' => [$this, 'block_bodyBottom'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "mail/email.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("mail/email.twig.html", "mail/notification.twig.html", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <h2 style=\"margin-top: 0px;\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
";
    }

    // line 16
    public function block_bodyBottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <span style=\"font-size: 12px; line-height: 18px;\">
        ";
        // line 18
        echo twig_sprintf($this->env->getFunction('__')->getCallable()("Login to %1\$s and use the notification icon to check your new notification, or %2\$sclick here%3\$s."), ($context["systemName"] ?? null), (((("<a href=\"" . ($context["absoluteURL"] ?? null)) . "/index.php?q=notifications.php\" style=\"") . ($context["linkStyle"] ?? null)) . "\">"), "</a>");
        echo "
    </span>
";
    }

    // line 22
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo twig_sprintf($this->env->getFunction('__')->getCallable()("If you do not wish to receive email notifications from %1\$s, please %2\$sclick here%3\$s to adjust your preferences:"), ($context["systemName"] ?? null), (((("<a href=\"" . ($context["absoluteURL"] ?? null)) . "/index.php?q=preferences.php\" style=\"") . ($context["linkStyle"] ?? null)) . "\">"), "</a>");
        echo "

    <br/><br/>

    ";
        // line 27
        echo twig_escape_filter($this->env, twig_sprintf($this->env->getFunction('__')->getCallable()("Email sent via %1\$s at %2\$s."), ($context["systemName"] ?? null), ($context["organisationName"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mail/notification.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  77 => 23,  73 => 22,  66 => 18,  63 => 17,  59 => 16,  52 => 13,  48 => 12,  37 => 10,);
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
{% extends \"mail/email.twig.html\" %}

{% block title %}
    <h2 style=\"margin-top: 0px;\">{{ title }}</h2>
{% endblock %}

{% block bodyBottom %}
    <span style=\"font-size: 12px; line-height: 18px;\">
        {{ __('Login to %1\$s and use the notification icon to check your new notification, or %2\$sclick here%3\$s.')|format(systemName, '<a href=\"' ~ absoluteURL ~ '/index.php?q=notifications.php\" style=\"' ~ linkStyle ~ '\">', '</a>')|raw }}
    </span>
{% endblock %}

{% block footer %}
    {{ __('If you do not wish to receive email notifications from %1\$s, please %2\$sclick here%3\$s to adjust your preferences:')|format(systemName, '<a href=\"' ~ absoluteURL ~ '/index.php?q=preferences.php\" style=\"' ~ linkStyle ~ '\">', '</a>')|raw }}

    <br/><br/>

    {{ __('Email sent via %1\$s at %2\$s.')|format(systemName, organisationName) }}
{% endblock %}
", "mail/notification.twig.html", "E:\\Work\\240811_gibbon\\source\\resources\\templates\\mail\\notification.twig.html");
    }
}
