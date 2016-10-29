<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_24d94ad439f9f32ddeefa81d82781ba4c4ee0d3b825b6606ac487a98bda4d512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_203f073f2cd845958d9d28fe5995a7da646dfaf20494cd69a113f8354214f470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203f073f2cd845958d9d28fe5995a7da646dfaf20494cd69a113f8354214f470->enter($__internal_203f073f2cd845958d9d28fe5995a7da646dfaf20494cd69a113f8354214f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_203f073f2cd845958d9d28fe5995a7da646dfaf20494cd69a113f8354214f470->leave($__internal_203f073f2cd845958d9d28fe5995a7da646dfaf20494cd69a113f8354214f470_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96e3d9df42849da169df895956e9c72b6fd1e843c7fdae4ec8390867539074c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e3d9df42849da169df895956e9c72b6fd1e843c7fdae4ec8390867539074c9->enter($__internal_96e3d9df42849da169df895956e9c72b6fd1e843c7fdae4ec8390867539074c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96e3d9df42849da169df895956e9c72b6fd1e843c7fdae4ec8390867539074c9->leave($__internal_96e3d9df42849da169df895956e9c72b6fd1e843c7fdae4ec8390867539074c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b713d037f143ffe2acd2e70902ec8c896a7aa5bfe0385d169d64815e0fe8185b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b713d037f143ffe2acd2e70902ec8c896a7aa5bfe0385d169d64815e0fe8185b->enter($__internal_b713d037f143ffe2acd2e70902ec8c896a7aa5bfe0385d169d64815e0fe8185b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b713d037f143ffe2acd2e70902ec8c896a7aa5bfe0385d169d64815e0fe8185b->leave($__internal_b713d037f143ffe2acd2e70902ec8c896a7aa5bfe0385d169d64815e0fe8185b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfad172a80bcc7eeb11239af47b80495af728e394537e6a46db339a7f9bdd8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfad172a80bcc7eeb11239af47b80495af728e394537e6a46db339a7f9bdd8a5->enter($__internal_cfad172a80bcc7eeb11239af47b80495af728e394537e6a46db339a7f9bdd8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cfad172a80bcc7eeb11239af47b80495af728e394537e6a46db339a7f9bdd8a5->leave($__internal_cfad172a80bcc7eeb11239af47b80495af728e394537e6a46db339a7f9bdd8a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
