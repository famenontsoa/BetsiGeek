<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_613229b0bbe71d88b75beaf11ebfe58c428409e635d00e58f234240e2977a824 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
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
        return array (  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
