<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_bd2d30b913f14e5b40902679180d7349732936f20149bbd0fd295efff091017c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "SonataAdminBundle::standard_layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_337c872fe05c3aa6350cfb305e31f40da26bea783f2447656e3840c165d81768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337c872fe05c3aa6350cfb305e31f40da26bea783f2447656e3840c165d81768->enter($__internal_337c872fe05c3aa6350cfb305e31f40da26bea783f2447656e3840c165d81768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337c872fe05c3aa6350cfb305e31f40da26bea783f2447656e3840c165d81768->leave($__internal_337c872fe05c3aa6350cfb305e31f40da26bea783f2447656e3840c165d81768_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15d294c052aa1e1c8cdc841e4c6f4fdf9dae081da962bd4fb3e43ecb563a039e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d294c052aa1e1c8cdc841e4c6f4fdf9dae081da962bd4fb3e43ecb563a039e->enter($__internal_15d294c052aa1e1c8cdc841e4c6f4fdf9dae081da962bd4fb3e43ecb563a039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_15d294c052aa1e1c8cdc841e4c6f4fdf9dae081da962bd4fb3e43ecb563a039e->leave($__internal_15d294c052aa1e1c8cdc841e4c6f4fdf9dae081da962bd4fb3e43ecb563a039e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_247e83fb2a64e65f3bd303f460dfc1a6facff415b952bb96bf0d1919a7d000bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247e83fb2a64e65f3bd303f460dfc1a6facff415b952bb96bf0d1919a7d000bb->enter($__internal_247e83fb2a64e65f3bd303f460dfc1a6facff415b952bb96bf0d1919a7d000bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_247e83fb2a64e65f3bd303f460dfc1a6facff415b952bb96bf0d1919a7d000bb->leave($__internal_247e83fb2a64e65f3bd303f460dfc1a6facff415b952bb96bf0d1919a7d000bb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin_base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
";
    }
}
