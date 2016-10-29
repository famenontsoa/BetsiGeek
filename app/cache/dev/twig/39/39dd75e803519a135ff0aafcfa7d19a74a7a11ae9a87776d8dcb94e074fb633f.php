<?php

/* SonataUserBundle:Admin:Security/login.html.twig */
class __TwigTemplate_4ac1d0f862b63448a3db29afa63485f62e7fb5ff7296ec66937b7284a8bd0cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin:Security/login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ef4f7d57de4961def196f74ec8d6229d953650b6cc10dae111c0880a73c059d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef4f7d57de4961def196f74ec8d6229d953650b6cc10dae111c0880a73c059d->enter($__internal_9ef4f7d57de4961def196f74ec8d6229d953650b6cc10dae111c0880a73c059d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin:Security/login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ef4f7d57de4961def196f74ec8d6229d953650b6cc10dae111c0880a73c059d->leave($__internal_9ef4f7d57de4961def196f74ec8d6229d953650b6cc10dae111c0880a73c059d_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b7c8fc9cf2405f68de8629655f76b4217307082f9c2c482d586bf05d57092547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c8fc9cf2405f68de8629655f76b4217307082f9c2c482d586bf05d57092547->enter($__internal_b7c8fc9cf2405f68de8629655f76b4217307082f9c2c482d586bf05d57092547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b7c8fc9cf2405f68de8629655f76b4217307082f9c2c482d586bf05d57092547->leave($__internal_b7c8fc9cf2405f68de8629655f76b4217307082f9c2c482d586bf05d57092547_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_04abc0dfb215cba52dfef18a50f456e7f63d511f6e89466ef0b43904db180487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04abc0dfb215cba52dfef18a50f456e7f63d511f6e89466ef0b43904db180487->enter($__internal_04abc0dfb215cba52dfef18a50f456e7f63d511f6e89466ef0b43904db180487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_04abc0dfb215cba52dfef18a50f456e7f63d511f6e89466ef0b43904db180487->leave($__internal_04abc0dfb215cba52dfef18a50f456e7f63d511f6e89466ef0b43904db180487_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_405f2983e1e1a7eea5a1e828dfb4c395d11682c7cdf948408a3f3265f567e139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405f2983e1e1a7eea5a1e828dfb4c395d11682c7cdf948408a3f3265f567e139->enter($__internal_405f2983e1e1a7eea5a1e828dfb4c395d11682c7cdf948408a3f3265f567e139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_405f2983e1e1a7eea5a1e828dfb4c395d11682c7cdf948408a3f3265f567e139->leave($__internal_405f2983e1e1a7eea5a1e828dfb4c395d11682c7cdf948408a3f3265f567e139_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_302c633ff449a31b99f5b4344c3c0c73126ee38911415e5014d712ae7a3fe912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302c633ff449a31b99f5b4344c3c0c73126ee38911415e5014d712ae7a3fe912->enter($__internal_302c633ff449a31b99f5b4344c3c0c73126ee38911415e5014d712ae7a3fe912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_302c633ff449a31b99f5b4344c3c0c73126ee38911415e5014d712ae7a3fe912->leave($__internal_302c633ff449a31b99f5b4344c3c0c73126ee38911415e5014d712ae7a3fe912_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_90da15ebbcb5dead7bedb911ba0c3b6a2c530c113cabc5d65a0fc1b6b6c0e07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90da15ebbcb5dead7bedb911ba0c3b6a2c530c113cabc5d65a0fc1b6b6c0e07b->enter($__internal_90da15ebbcb5dead7bedb911ba0c3b6a2c530c113cabc5d65a0fc1b6b6c0e07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <div>
                        <img style=\"width:64px;\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        // line 24
        echo "                ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 25
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            ";
        // line 30
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 70
        echo "        </div>
    </div>

";
        
        $__internal_90da15ebbcb5dead7bedb911ba0c3b6a2c530c113cabc5d65a0fc1b6b6c0e07b->leave($__internal_90da15ebbcb5dead7bedb911ba0c3b6a2c530c113cabc5d65a0fc1b6b6c0e07b_prof);

    }

    // line 30
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_694c5269f97cbdb7630f1f3a0e67f466b62ea9a8b2f8693c10fb6212f7673a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694c5269f97cbdb7630f1f3a0e67f466b62ea9a8b2f8693c10fb6212f7673a08->enter($__internal_694c5269f97cbdb7630f1f3a0e67f466b62ea9a8b2f8693c10fb6212f7673a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 31
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 38
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                ";
        // line 68
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["reset_route"]) ? $context["reset_route"] : $this->getContext($context, "reset_route")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_694c5269f97cbdb7630f1f3a0e67f466b62ea9a8b2f8693c10fb6212f7673a08->leave($__internal_694c5269f97cbdb7630f1f3a0e67f466b62ea9a8b2f8693c10fb6212f7673a08_prof);

    }

    // line 31
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_a275c07798a4c7bd0b2ee2eefd4eb41d1bf228813682a02c9bee9d3649e056ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a275c07798a4c7bd0b2ee2eefd4eb41d1bf228813682a02c9bee9d3649e056ae->enter($__internal_a275c07798a4c7bd0b2ee2eefd4eb41d1bf228813682a02c9bee9d3649e056ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 32
        echo "                    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 33
            echo "                        <div class=\"alert alert-danger alert-error\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 37
        echo "                ";
        
        $__internal_a275c07798a4c7bd0b2ee2eefd4eb41d1bf228813682a02c9bee9d3649e056ae->leave($__internal_a275c07798a4c7bd0b2ee2eefd4eb41d1bf228813682a02c9bee9d3649e056ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 37,  224 => 34,  221 => 33,  218 => 32,  212 => 31,  200 => 68,  192 => 62,  184 => 57,  172 => 48,  162 => 43,  156 => 40,  152 => 39,  147 => 38,  144 => 31,  138 => 30,  128 => 70,  126 => 30,  121 => 27,  115 => 25,  112 => 24,  104 => 21,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
    }

    public function getSource()
    {
        return "{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('sonata_admin_dashboard') }}\">
                {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                    <div>
                        <img style=\"width:64px;\" src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                    </div>
                {% endif %}
                {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                    <span>{{ sonata_admin.adminPool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            {% block sonata_user_login_form %}
                {% block sonata_user_login_error %}
                    {% if error %}
                        <div class=\"alert alert-danger alert-error\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>
                <form action=\"{{ path(\"sonata_user_admin_security_check\") }}\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                {#<a href=\"{{ path('sonata_user_admin_resetting_request') }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>#}
                <a href=\"{{ reset_route }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
";
    }
}
