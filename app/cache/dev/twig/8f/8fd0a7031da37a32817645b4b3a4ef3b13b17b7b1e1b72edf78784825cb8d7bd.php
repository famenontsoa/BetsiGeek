<?php

/* admin_base.html.twig */
class __TwigTemplate_46a2affe00f371a4d3df719b09e4a2449fc1c0bc65beb2f0a946a82c3888d659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9441b28c729e2322f34c88231b8924bc0cb067ec93e8ad64a3f762ac5a5fee18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9441b28c729e2322f34c88231b8924bc0cb067ec93e8ad64a3f762ac5a5fee18->enter($__internal_9441b28c729e2322f34c88231b8924bc0cb067ec93e8ad64a3f762ac5a5fee18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_base.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
<head>
    ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
    <title>
        ";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 111
        echo "    </title>
</head>
<body ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

<div class=\"wrapper\">

    ";
        // line 117
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 216
        echo "
    ";
        // line 217
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 331
        echo "</div>

";
        // line 333
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 334
            echo "    ";
            $this->displayBlock('bootlint', $context, $blocks);
        }
        // line 341
        echo "
</body>
</html>
";
        
        $__internal_9441b28c729e2322f34c88231b8924bc0cb067ec93e8ad64a3f762ac5a5fee18->leave($__internal_9441b28c729e2322f34c88231b8924bc0cb067ec93e8ad64a3f762ac5a5fee18_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_3a1ef4ea2345bfb6ecbe2fcef33192e62842f1bab8f268b745507e1a5b9843e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1ef4ea2345bfb6ecbe2fcef33192e62842f1bab8f268b745507e1a5b9843e0->enter($__internal_3a1ef4ea2345bfb6ecbe2fcef33192e62842f1bab8f268b745507e1a5b9843e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_3a1ef4ea2345bfb6ecbe2fcef33192e62842f1bab8f268b745507e1a5b9843e0->leave($__internal_3a1ef4ea2345bfb6ecbe2fcef33192e62842f1bab8f268b745507e1a5b9843e0_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_e573b79f1b797ce99c0d90d158cb7e2a8276d7b4fa1d3d8178e4668cf5ae167d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e573b79f1b797ce99c0d90d158cb7e2a8276d7b4fa1d3d8178e4668cf5ae167d->enter($__internal_e573b79f1b797ce99c0d90d158cb7e2a8276d7b4fa1d3d8178e4668cf5ae167d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"UTF-8\">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
        
        $__internal_e573b79f1b797ce99c0d90d158cb7e2a8276d7b4fa1d3d8178e4668cf5ae167d->leave($__internal_e573b79f1b797ce99c0d90d158cb7e2a8276d7b4fa1d3d8178e4668cf5ae167d_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_957f50c8258a3bda208f962a80704ae839c4334dad2083fe79f3cda383ad8f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957f50c8258a3bda208f962a80704ae839c4334dad2083fe79f3cda383ad8f1f->enter($__internal_957f50c8258a3bda208f962a80704ae839c4334dad2083fe79f3cda383ad8f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    ";
        
        $__internal_957f50c8258a3bda208f962a80704ae839c4334dad2083fe79f3cda383ad8f1f->leave($__internal_957f50c8258a3bda208f962a80704ae839c4334dad2083fe79f3cda383ad8f1f_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb61ee58823edcd82340a82ddc79f4451f9597251b5f44f6c59fffaf20322d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb61ee58823edcd82340a82ddc79f4451f9597251b5f44f6c59fffaf20322d6a->enter($__internal_eb61ee58823edcd82340a82ddc79f4451f9597251b5f44f6c59fffaf20322d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "    ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 66
        echo "
        ";
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "        ";
        // line 69
        echo "        ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 72
        echo "
        ";
        // line 74
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "        ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
        ";
            // line 78
            echo "        ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
        ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "    ";
        
        $__internal_eb61ee58823edcd82340a82ddc79f4451f9597251b5f44f6c59fffaf20322d6a->leave($__internal_eb61ee58823edcd82340a82ddc79f4451f9597251b5f44f6c59fffaf20322d6a_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_fb045cc67b98520dcc3841c5b5fd464a1055a7f52554040a05827282aa4fc927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb045cc67b98520dcc3841c5b5fd464a1055a7f52554040a05827282aa4fc927->enter($__internal_fb045cc67b98520dcc3841c5b5fd464a1055a7f52554040a05827282aa4fc927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 41
        echo "        <script>
            window.SONATA_CONFIG = {
                CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 47
        echo "            };
            window.SONATA_TRANSLATIONS = {
                CONFIRM_EXIT:  '";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
            };

            // http://getbootstrap.com/getting-started/#support-ie10-width
            if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                var msViewportStyle = document.createElement('style');
                msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                document.querySelector('head').appendChild(msViewportStyle);
            }
        </script>
    ";
        
        $__internal_fb045cc67b98520dcc3841c5b5fd464a1055a7f52554040a05827282aa4fc927->leave($__internal_fb045cc67b98520dcc3841c5b5fd464a1055a7f52554040a05827282aa4fc927_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_d5112f508633fd3f5d94fc6f52a12859ffe19f3772792f68f022d0919e7fc6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5112f508633fd3f5d94fc6f52a12859ffe19f3772792f68f022d0919e7fc6ec->enter($__internal_d5112f508633fd3f5d94fc6f52a12859ffe19f3772792f68f022d0919e7fc6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 63
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    ";
        
        $__internal_d5112f508633fd3f5d94fc6f52a12859ffe19f3772792f68f022d0919e7fc6ec->leave($__internal_d5112f508633fd3f5d94fc6f52a12859ffe19f3772792f68f022d0919e7fc6ec_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_9f246ab01096a3a525da368291b4738d40ee10429aab8f244bc05e34d3468be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f246ab01096a3a525da368291b4738d40ee10429aab8f244bc05e34d3468be1->enter($__internal_9f246ab01096a3a525da368291b4738d40ee10429aab8f244bc05e34d3468be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 91
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 94
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;
                            ";
                        }
                        // line 99
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 100
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 101
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 107
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                ";
            }
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
        
        $__internal_9f246ab01096a3a525da368291b4738d40ee10429aab8f244bc05e34d3468be1->leave($__internal_9f246ab01096a3a525da368291b4738d40ee10429aab8f244bc05e34d3468be1_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_fcf1a4e90f1f8bd74c7569cdc057cea6c36a180bfe889eaf0aa741f9facb7ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf1a4e90f1f8bd74c7569cdc057cea6c36a180bfe889eaf0aa741f9facb7ff6->enter($__internal_fcf1a4e90f1f8bd74c7569cdc057cea6c36a180bfe889eaf0aa741f9facb7ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_fcf1a4e90f1f8bd74c7569cdc057cea6c36a180bfe889eaf0aa741f9facb7ff6->leave($__internal_fcf1a4e90f1f8bd74c7569cdc057cea6c36a180bfe889eaf0aa741f9facb7ff6_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_72ff5c90000ec99bcb2c58f69d78521b5167dc4aed537e261bab3d1524866f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ff5c90000ec99bcb2c58f69d78521b5167dc4aed537e261bab3d1524866f51->enter($__internal_72ff5c90000ec99bcb2c58f69d78521b5167dc4aed537e261bab3d1524866f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 118
        echo "        <header class=\"main-header\">
            ";
        // line 119
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 126
        echo "            ";
        $this->displayBlock('logo', $context, $blocks);
        // line 138
        echo "            ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 214
        echo "        </header>
    ";
        
        $__internal_72ff5c90000ec99bcb2c58f69d78521b5167dc4aed537e261bab3d1524866f51->leave($__internal_72ff5c90000ec99bcb2c58f69d78521b5167dc4aed537e261bab3d1524866f51_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_e09a772e5184dc6c3356bccc99ae4f6b5b16865bf4e946dfa15064f768d682ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09a772e5184dc6c3356bccc99ae4f6b5b16865bf4e946dfa15064f768d682ad->enter($__internal_e09a772e5184dc6c3356bccc99ae4f6b5b16865bf4e946dfa15064f768d682ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 120
        echo "                <noscript>
                    <div class=\"noscript-warning\">
                        ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                    </div>
                </noscript>
            ";
        
        $__internal_e09a772e5184dc6c3356bccc99ae4f6b5b16865bf4e946dfa15064f768d682ad->leave($__internal_e09a772e5184dc6c3356bccc99ae4f6b5b16865bf4e946dfa15064f768d682ad_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_558a4b39ed9e1955815d3dee08807e4420c4b34e709f3def928ca011fdd88a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558a4b39ed9e1955815d3dee08807e4420c4b34e709f3def928ca011fdd88a34->enter($__internal_558a4b39ed9e1955815d3dee08807e4420c4b34e709f3def928ca011fdd88a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 127
        echo "                ";
        ob_start();
        // line 128
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 132
        echo "                        ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                        ";
        }
        // line 135
        echo "                    </a>
                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "            ";
        
        $__internal_558a4b39ed9e1955815d3dee08807e4420c4b34e709f3def928ca011fdd88a34->leave($__internal_558a4b39ed9e1955815d3dee08807e4420c4b34e709f3def928ca011fdd88a34_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b94291a1b08f06d712f52cbe51274ebf1331277c187d78de1e2577f76799f5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94291a1b08f06d712f52cbe51274ebf1331277c187d78de1e2577f76799f5cd->enter($__internal_b94291a1b08f06d712f52cbe51274ebf1331277c187d78de1e2577f76799f5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 139
        echo "                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>

                    <div class=\"navbar-left\">
                        ";
        // line 145
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                    </div>

                    ";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 212
        echo "                </nav>
            ";
        
        $__internal_b94291a1b08f06d712f52cbe51274ebf1331277c187d78de1e2577f76799f5cd->leave($__internal_b94291a1b08f06d712f52cbe51274ebf1331277c187d78de1e2577f76799f5cd_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_9b5c3cb792e73e0912fd0476c2dab2fa6b1ad98ccc0eaf84f3fcf720d13f138f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5c3cb792e73e0912fd0476c2dab2fa6b1ad98ccc0eaf84f3fcf720d13f138f->enter($__internal_9b5c3cb792e73e0912fd0476c2dab2fa6b1ad98ccc0eaf84f3fcf720d13f138f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 146
        echo "                            <div class=\"hidden-xs\">
                                ";
        // line 147
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 148
            echo "                                    <ol class=\"nav navbar-top-links breadcrumb\">
                                        ";
            // line 149
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 150
                echo "                                            ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 152
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 153
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 154
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 158
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 159
                            echo "                                                        <li>
                                                            ";
                            // line 160
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 161
                                echo "                                                                <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                    ";
                                // line 162
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 163
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 167
                                echo "                                                                </a>
                                                            ";
                            } else {
                                // line 169
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "
                                                            ";
                            }
                            // line 171
                            echo "                                                        </li>
                                                    ";
                        } else {
                            // line 173
                            echo "                                                        <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                    ";
                        }
                        // line 175
                        echo "                                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                            ";
                }
                // line 177
                echo "                                        ";
            } else {
                // line 178
                echo "                                            ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                        ";
            }
            // line 180
            echo "                                    </ol>
                                ";
        }
        // line 182
        echo "                            </div>
                        ";
        
        $__internal_9b5c3cb792e73e0912fd0476c2dab2fa6b1ad98ccc0eaf84f3fcf720d13f138f->leave($__internal_9b5c3cb792e73e0912fd0476c2dab2fa6b1ad98ccc0eaf84f3fcf720d13f138f_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_6aaa0604bb2715110e37662640d0b1ded5af226c2dd4a3f4c9830028c687d104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aaa0604bb2715110e37662640d0b1ded5af226c2dd4a3f4c9830028c687d104->enter($__internal_6aaa0604bb2715110e37662640d0b1ded5af226c2dd4a3f4c9830028c687d104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 187
        echo "                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 188
            echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
            // line 190
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 198
            echo "                                    ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 208
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 211
        echo "                    ";
        
        $__internal_6aaa0604bb2715110e37662640d0b1ded5af226c2dd4a3f4c9830028c687d104->leave($__internal_6aaa0604bb2715110e37662640d0b1ded5af226c2dd4a3f4c9830028c687d104_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_ce3faf295fdc8518cf3a8793f2a7948108720b907972c2121a02fc96eff78b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3faf295fdc8518cf3a8793f2a7948108720b907972c2121a02fc96eff78b26->enter($__internal_ce3faf295fdc8518cf3a8793f2a7948108720b907972c2121a02fc96eff78b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 191
        echo "                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                            </a>
                                            ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "admin_base.html.twig", 195)->display($context);
        // line 196
        echo "                                        </li>
                                    ";
        
        $__internal_ce3faf295fdc8518cf3a8793f2a7948108720b907972c2121a02fc96eff78b26->leave($__internal_ce3faf295fdc8518cf3a8793f2a7948108720b907972c2121a02fc96eff78b26_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_1b50419842d250a1e280f56d026c0cce575743dc07705982030f87f23f1252e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b50419842d250a1e280f56d026c0cce575743dc07705982030f87f23f1252e2->enter($__internal_1b50419842d250a1e280f56d026c0cce575743dc07705982030f87f23f1252e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 199
        echo "                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "admin_base.html.twig", 204)->display($context);
        // line 205
        echo "                                            </ul>
                                        </li>
                                    ";
        
        $__internal_1b50419842d250a1e280f56d026c0cce575743dc07705982030f87f23f1252e2->leave($__internal_1b50419842d250a1e280f56d026c0cce575743dc07705982030f87f23f1252e2_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2dd774181931e271f815a69ee455ae025a891d347af727fb7b24459e4a01a6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd774181931e271f815a69ee455ae025a891d347af727fb7b24459e4a01a6fc->enter($__internal_2dd774181931e271f815a69ee455ae025a891d347af727fb7b24459e4a01a6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 218
        echo "        ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 230
        echo "
        <div class=\"content-wrapper\">
            ";
        // line 232
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 329
        echo "        </div>
    ";
        
        $__internal_2dd774181931e271f815a69ee455ae025a891d347af727fb7b24459e4a01a6fc->leave($__internal_2dd774181931e271f815a69ee455ae025a891d347af727fb7b24459e4a01a6fc_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_909d3ed8aae267db86c7780b0b24cb55952af90cc7533b299d6907165b760273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909d3ed8aae267db86c7780b0b24cb55952af90cc7533b299d6907165b760273->enter($__internal_909d3ed8aae267db86c7780b0b24cb55952af90cc7533b299d6907165b760273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 219
        echo "            <aside class=\"main-sidebar\">
                <section class=\"sidebar\">
                    ";
        // line 221
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 227
        echo "                </section>
            </aside>
        ";
        
        $__internal_909d3ed8aae267db86c7780b0b24cb55952af90cc7533b299d6907165b760273->leave($__internal_909d3ed8aae267db86c7780b0b24cb55952af90cc7533b299d6907165b760273_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_08d6fa0193c94a7af13371f3b315c18bd5cd054f4c6fd7d827643e4128db9af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d6fa0193c94a7af13371f3b315c18bd5cd054f4c6fd7d827643e4128db9af7->enter($__internal_08d6fa0193c94a7af13371f3b315c18bd5cd054f4c6fd7d827643e4128db9af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 222
        echo "                        ";
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 223
        echo "                        ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 226
        echo "                    ";
        
        $__internal_08d6fa0193c94a7af13371f3b315c18bd5cd054f4c6fd7d827643e4128db9af7->leave($__internal_08d6fa0193c94a7af13371f3b315c18bd5cd054f4c6fd7d827643e4128db9af7_prof);

    }

    // line 222
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_9ae365d29f5eafedc11e1723c3061241691701ed2189f9186103daa41529c81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae365d29f5eafedc11e1723c3061241691701ed2189f9186103daa41529c81b->enter($__internal_9ae365d29f5eafedc11e1723c3061241691701ed2189f9186103daa41529c81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_9ae365d29f5eafedc11e1723c3061241691701ed2189f9186103daa41529c81b->leave($__internal_9ae365d29f5eafedc11e1723c3061241691701ed2189f9186103daa41529c81b_prof);

    }

    // line 223
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_a30611feb01daf4d749ce1d7ee730ad000d30ea65bb93c30260add17365f0b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30611feb01daf4d749ce1d7ee730ad000d30ea65bb93c30260add17365f0b5a->enter($__internal_a30611feb01daf4d749ce1d7ee730ad000d30ea65bb93c30260add17365f0b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 224
        echo "                            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                        ";
        
        $__internal_a30611feb01daf4d749ce1d7ee730ad000d30ea65bb93c30260add17365f0b5a->leave($__internal_a30611feb01daf4d749ce1d7ee730ad000d30ea65bb93c30260add17365f0b5a_prof);

    }

    // line 232
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_b5f0e8d1bf9965425598c374a269da76dd753efd615a13258c423e410c7fff47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f0e8d1bf9965425598c374a269da76dd753efd615a13258c423e410c7fff47->enter($__internal_b5f0e8d1bf9965425598c374a269da76dd753efd615a13258c423e410c7fff47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 233
        echo "                <section class=\"content-header\">

                    ";
        // line 235
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 289
        echo "                </section>

                <section class=\"content\">
                    ";
        // line 292
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 327
        echo "                </section>
            ";
        
        $__internal_b5f0e8d1bf9965425598c374a269da76dd753efd615a13258c423e410c7fff47->leave($__internal_b5f0e8d1bf9965425598c374a269da76dd753efd615a13258c423e410c7fff47_prof);

    }

    // line 235
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_4a6b6a23fa94d35bc2117888fa7646c5750a1743319a9e55a47dcbd8f020001a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6b6a23fa94d35bc2117888fa7646c5750a1743319a9e55a47dcbd8f020001a->enter($__internal_4a6b6a23fa94d35bc2117888fa7646c5750a1743319a9e55a47dcbd8f020001a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 236
        echo "                        ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 288
        echo "                    ";
        
        $__internal_4a6b6a23fa94d35bc2117888fa7646c5750a1743319a9e55a47dcbd8f020001a->leave($__internal_4a6b6a23fa94d35bc2117888fa7646c5750a1743319a9e55a47dcbd8f020001a_prof);

    }

    // line 236
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_05b470286ab14395669cc02150f98aed635bb567dcceca36e1d8e9d212092d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b470286ab14395669cc02150f98aed635bb567dcceca36e1d8e9d212092d3d->enter($__internal_05b470286ab14395669cc02150f98aed635bb567dcceca36e1d8e9d212092d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 237
        echo "                            ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 238
            echo "                                <nav class=\"navbar navbar-default\" role=\"navigation\">
                                    <div class=\"container-fluid\">
                                        ";
            // line 240
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 247
            echo "
                                        <div class=\"navbar-collapse\">
                                            <div class=\"navbar-left\">
                                                ";
            // line 250
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 251
                echo "                                                    ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                ";
            }
            // line 253
            echo "                                            </div>

                                            ";
            // line 255
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 256
                echo "                                                <div class=\"nav navbar-right btn-group\">
                                                    ";
                // line 257
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 258
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                echo "                                                </div>
                                            ";
            }
            // line 262
            echo "
                                            ";
            // line 263
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 279
            echo "
                                            ";
            // line 280
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 281
                echo "                                                ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                            ";
            }
            // line 283
            echo "                                        </div>
                                    </div>
                                </nav>
                            ";
        }
        // line 287
        echo "                        ";
        
        $__internal_05b470286ab14395669cc02150f98aed635bb567dcceca36e1d8e9d212092d3d->leave($__internal_05b470286ab14395669cc02150f98aed635bb567dcceca36e1d8e9d212092d3d_prof);

    }

    // line 240
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_8310c431250027c5ebde91f48cb59a9932eaf47035c1a9cf289124693b5f4d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8310c431250027c5ebde91f48cb59a9932eaf47035c1a9cf289124693b5f4d8d->enter($__internal_8310c431250027c5ebde91f48cb59a9932eaf47035c1a9cf289124693b5f4d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 241
        echo "                                            ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 242
            echo "                                                <div class=\"navbar-header\">
                                                    <a class=\"navbar-brand\" href=\"#\">";
            // line 243
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                </div>
                                            ";
        }
        // line 246
        echo "                                        ";
        
        $__internal_8310c431250027c5ebde91f48cb59a9932eaf47035c1a9cf289124693b5f4d8d->leave($__internal_8310c431250027c5ebde91f48cb59a9932eaf47035c1a9cf289124693b5f4d8d_prof);

    }

    // line 263
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_3c41aaf104a93df676260948334b180cb716045b6b9e5b96e6ae8e086a6cb7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c41aaf104a93df676260948334b180cb716045b6b9e5b96e6ae8e086a6cb7fc->enter($__internal_3c41aaf104a93df676260948334b180cb716045b6b9e5b96e6ae8e086a6cb7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 264
        echo "                                                ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 265
            echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 266
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 267
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 268
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 270
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 274
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 276
            echo "                                                    </ul>
                                                ";
        }
        // line 278
        echo "                                            ";
        
        $__internal_3c41aaf104a93df676260948334b180cb716045b6b9e5b96e6ae8e086a6cb7fc->leave($__internal_3c41aaf104a93df676260948334b180cb716045b6b9e5b96e6ae8e086a6cb7fc_prof);

    }

    // line 292
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_bcdb84b4cdd3861b231310daf5bafd5e3cddd4190289e3669ca6a6f7263fbabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdb84b4cdd3861b231310daf5bafd5e3cddd4190289e3669ca6a6f7263fbabb->enter($__internal_bcdb84b4cdd3861b231310daf5bafd5e3cddd4190289e3669ca6a6f7263fbabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 293
        echo "
                        ";
        // line 294
        $this->displayBlock('notice', $context, $blocks);
        // line 297
        echo "
                        ";
        // line 298
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 299
            echo "                            <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                        ";
        }
        // line 301
        echo "
                        ";
        // line 302
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 303
            echo "                            <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                        ";
        }
        // line 305
        echo "
                        ";
        // line 306
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 307
            echo "                            <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                        ";
        }
        // line 309
        echo "
                        ";
        // line 310
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 311
            echo "                            <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                        ";
        }
        // line 313
        echo "
                        ";
        // line 314
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 315
            echo "                            ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 316
                echo "                                <div class=\"row\">
                                    ";
                // line 317
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                </div>
                            ";
            }
            // line 320
            echo "
                            <div class=\"row\">
                                ";
            // line 322
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                            </div>

                        ";
        }
        // line 326
        echo "                    ";
        
        $__internal_bcdb84b4cdd3861b231310daf5bafd5e3cddd4190289e3669ca6a6f7263fbabb->leave($__internal_bcdb84b4cdd3861b231310daf5bafd5e3cddd4190289e3669ca6a6f7263fbabb_prof);

    }

    // line 294
    public function block_notice($context, array $blocks = array())
    {
        $__internal_65c4cf2266bb9e3cf736b769f187fd883c6a3ca48a9830580a6a8d7d02b78c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c4cf2266bb9e3cf736b769f187fd883c6a3ca48a9830580a6a8d7d02b78c48->enter($__internal_65c4cf2266bb9e3cf736b769f187fd883c6a3ca48a9830580a6a8d7d02b78c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 295
        echo "                            ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "admin_base.html.twig", 295)->display($context);
        // line 296
        echo "                        ";
        
        $__internal_65c4cf2266bb9e3cf736b769f187fd883c6a3ca48a9830580a6a8d7d02b78c48->leave($__internal_65c4cf2266bb9e3cf736b769f187fd883c6a3ca48a9830580a6a8d7d02b78c48_prof);

    }

    // line 334
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_5a677371e307cf4b58311bbf6fc3109345776bb6848a5ca7defae9084d809139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a677371e307cf4b58311bbf6fc3109345776bb6848a5ca7defae9084d809139->enter($__internal_5a677371e307cf4b58311bbf6fc3109345776bb6848a5ca7defae9084d809139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 335
        echo "        ";
        // line 336
        echo "        <script type=\"text/javascript\">
            javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
        </script>
    ";
        
        $__internal_5a677371e307cf4b58311bbf6fc3109345776bb6848a5ca7defae9084d809139->leave($__internal_5a677371e307cf4b58311bbf6fc3109345776bb6848a5ca7defae9084d809139_prof);

    }

    public function getTemplateName()
    {
        return "admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1181 => 336,  1179 => 335,  1173 => 334,  1166 => 296,  1163 => 295,  1157 => 294,  1150 => 326,  1143 => 322,  1139 => 320,  1133 => 317,  1130 => 316,  1127 => 315,  1125 => 314,  1122 => 313,  1116 => 311,  1114 => 310,  1111 => 309,  1105 => 307,  1103 => 306,  1100 => 305,  1094 => 303,  1092 => 302,  1089 => 301,  1083 => 299,  1081 => 298,  1078 => 297,  1076 => 294,  1073 => 293,  1067 => 292,  1060 => 278,  1056 => 276,  1050 => 274,  1043 => 270,  1038 => 268,  1035 => 267,  1033 => 266,  1030 => 265,  1027 => 264,  1021 => 263,  1014 => 246,  1008 => 243,  1005 => 242,  1002 => 241,  996 => 240,  989 => 287,  983 => 283,  977 => 281,  975 => 280,  972 => 279,  970 => 263,  967 => 262,  963 => 260,  948 => 258,  944 => 257,  941 => 256,  939 => 255,  935 => 253,  929 => 251,  927 => 250,  922 => 247,  920 => 240,  916 => 238,  913 => 237,  907 => 236,  900 => 288,  897 => 236,  891 => 235,  883 => 327,  881 => 292,  876 => 289,  874 => 235,  870 => 233,  864 => 232,  854 => 224,  848 => 223,  836 => 222,  829 => 226,  826 => 223,  823 => 222,  817 => 221,  808 => 227,  806 => 221,  802 => 219,  796 => 218,  788 => 329,  786 => 232,  782 => 230,  779 => 218,  773 => 217,  764 => 205,  762 => 204,  755 => 199,  749 => 198,  741 => 196,  739 => 195,  733 => 191,  727 => 190,  720 => 211,  715 => 208,  712 => 198,  710 => 190,  706 => 188,  703 => 187,  697 => 186,  689 => 182,  685 => 180,  679 => 178,  676 => 177,  673 => 176,  659 => 175,  653 => 173,  649 => 171,  643 => 169,  639 => 167,  636 => 165,  633 => 163,  631 => 162,  626 => 161,  624 => 160,  621 => 159,  619 => 158,  616 => 155,  614 => 154,  612 => 153,  610 => 152,  592 => 151,  589 => 150,  587 => 149,  584 => 148,  582 => 147,  579 => 146,  573 => 145,  565 => 212,  563 => 186,  559 => 184,  557 => 145,  549 => 139,  543 => 138,  536 => 137,  532 => 135,  526 => 133,  523 => 132,  515 => 130,  513 => 129,  508 => 128,  505 => 127,  499 => 126,  488 => 122,  484 => 120,  478 => 119,  470 => 214,  467 => 138,  464 => 126,  462 => 119,  459 => 118,  453 => 117,  441 => 113,  434 => 110,  431 => 109,  428 => 108,  414 => 107,  409 => 105,  406 => 102,  404 => 101,  402 => 100,  400 => 99,  396 => 96,  393 => 95,  390 => 94,  373 => 93,  370 => 92,  367 => 91,  361 => 89,  359 => 88,  353 => 86,  347 => 85,  340 => 65,  331 => 63,  326 => 62,  320 => 61,  302 => 49,  298 => 47,  292 => 46,  284 => 45,  276 => 44,  268 => 43,  264 => 41,  258 => 40,  251 => 82,  248 => 81,  242 => 79,  239 => 78,  236 => 76,  231 => 75,  228 => 74,  225 => 72,  219 => 70,  216 => 69,  214 => 68,  212 => 67,  209 => 66,  207 => 61,  204 => 60,  201 => 40,  195 => 39,  188 => 37,  179 => 35,  174 => 34,  168 => 33,  158 => 28,  152 => 27,  140 => 25,  130 => 341,  126 => 334,  124 => 333,  120 => 331,  118 => 217,  115 => 216,  113 => 117,  106 => 113,  102 => 111,  100 => 85,  96 => 83,  94 => 39,  91 => 38,  89 => 33,  86 => 32,  84 => 27,  79 => 25,  75 => 23,  73 => 22,  71 => 21,  69 => 20,  67 => 19,  65 => 18,  63 => 17,  61 => 16,  59 => 15,  57 => 14,  55 => 13,  53 => 12,  51 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% set _preview              = block('preview') %}
{% set _form                 = block('form') %}
{% set _show                 = block('show') %}
{% set _list_table           = block('list_table') %}
{% set _list_filters         = block('list_filters') %}
{% set _tab_menu             = block('tab_menu') %}
{% set _content              = block('content') %}
{% set _title                = block('title') %}
{% set _breadcrumb           = block('breadcrumb') %}
{% set _actions              = block('actions') %}
{% set _navbar_title         = block('navbar_title') %}
{% set _list_filters_actions = block('list_filters_actions') %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
<head>
    {% block meta_tags %}
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"UTF-8\">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {% endblock %}

    {% block stylesheets %}
        {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
            <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
        {% endfor %}
    {% endblock %}

    {% block javascripts %}
    {% block sonata_javascript_config %}
        <script>
            window.SONATA_CONFIG = {
                CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
            };
            window.SONATA_TRANSLATIONS = {
                CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
            };

            // http://getbootstrap.com/getting-started/#support-ie10-width
            if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                var msViewportStyle = document.createElement('style');
                msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                document.querySelector('head').appendChild(msViewportStyle);
            }
        </script>
    {% endblock %}

    {% block sonata_javascript_pool %}
        {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
        <script src=\"{{ asset(javascript) }}\"></script>
        {% endfor %}
    {% endblock %}

        {% set locale = app.request.locale %}
        {# localize moment #}
        {% if locale[:2] != 'en' %}
        <script src=\"{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
        {% endif %}

        {# localize select2 #}
        {% if sonata_admin.adminPool.getOption('use_select2') %}
        {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

        {# omit default EN locale #}
        {% if locale[:2] != 'en' %}
        <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
        {% endif %}
        {% endif %}
    {% endblock %}

    <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {%  if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif%}
        {% endblock %}
    </title>
</head>
<body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

<div class=\"wrapper\">

    {% block sonata_header %}
        <header class=\"main-header\">
            {% block sonata_header_noscript_warning %}
                <noscript>
                    <div class=\"noscript-warning\">
                        {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                    </div>
                </noscript>
            {% endblock %}
            {% block logo %}
                {% spaceless %}
                    <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                        {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                            <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                        {% endif %}
                        {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                            <span>{{ sonata_admin.adminPool.title }}</span>
                        {% endif %}
                    </a>
                {% endspaceless %}
            {% endblock %}
            {% block sonata_nav %}
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>

                    <div class=\"navbar-left\">
                        {% block sonata_breadcrumb %}
                            <div class=\"hidden-xs\">
                                {% if _breadcrumb is not empty or action is defined %}
                                    <ol class=\"nav navbar-top-links breadcrumb\">
                                        {% if _breadcrumb is empty %}
                                            {% if action is defined %}
                                                {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                    {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                    {%- set label = menu.label -%}
                                                    {%- if translation_domain is not same as(false) -%}
                                                        {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                    {%- endif -%}

                                                    {% if not loop.last  %}
                                                        <li>
                                                            {% if menu.uri is not empty %}
                                                                <a href=\"{{ menu.uri }}\">
                                                                    {% if menu.extra('safe_label', true) %}
                                                                        {{- label|raw -}}
                                                                    {% else %}
                                                                        {{- label -}}
                                                                    {% endif %}
                                                                </a>
                                                            {% else %}
                                                                {{ label }}
                                                            {% endif %}
                                                        </li>
                                                    {% else %}
                                                        <li class=\"active\"><span>{{ label }}</span></li>
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% else %}
                                            {{ _breadcrumb|raw }}
                                        {% endif %}
                                    </ol>
                                {% endif %}
                            </div>
                        {% endblock sonata_breadcrumb %}
                    </div>

                    {% block sonata_top_nav_menu %}
                        {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    {% block sonata_top_nav_menu_add_block %}
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                            </a>
                                            {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                        </li>
                                    {% endblock %}
                                    {% block sonata_top_nav_menu_user_block %}
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                            </ul>
                                        </li>
                                    {% endblock %}
                                </ul>
                            </div>
                        {% endif %}
                    {% endblock %}
                </nav>
            {% endblock sonata_nav %}
        </header>
    {% endblock sonata_header %}

    {% block sonata_wrapper %}
        {% block sonata_left_side %}
            <aside class=\"main-sidebar\">
                <section class=\"sidebar\">
                    {% block sonata_side_nav %}
                        {% block side_bar_before_nav %} {% endblock %}
                        {% block side_bar_nav %}
                            {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                        {% endblock side_bar_nav %}
                    {% endblock sonata_side_nav %}
                </section>
            </aside>
        {% endblock sonata_left_side %}

        <div class=\"content-wrapper\">
            {% block sonata_page_content %}
                <section class=\"content-header\">

                    {% block sonata_page_content_header %}
                        {% block sonata_page_content_nav %}
                            {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                <nav class=\"navbar navbar-default\" role=\"navigation\">
                                    <div class=\"container-fluid\">
                                        {% block tab_menu_navbar_header %}
                                            {% if _navbar_title is not empty %}
                                                <div class=\"navbar-header\">
                                                    <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                </div>
                                            {% endif %}
                                        {% endblock %}

                                        <div class=\"navbar-collapse\">
                                            <div class=\"navbar-left\">
                                                {% if _tab_menu is not empty %}
                                                    {{ _tab_menu|raw }}
                                                {% endif %}
                                            </div>

                                            {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                <div class=\"nav navbar-right btn-group\">
                                                    {% for mode, settings in admin.listModes %}
                                                        <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                    {% endfor %}
                                                </div>
                                            {% endif %}

                                            {% block sonata_admin_content_actions_wrappers %}
                                                {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                    </ul>
                                                {% endif %}
                                            {% endblock sonata_admin_content_actions_wrappers %}

                                            {% if _list_filters_actions is not empty %}
                                                {{ _list_filters_actions|raw }}
                                            {% endif %}
                                        </div>
                                    </div>
                                </nav>
                            {% endif %}
                        {% endblock sonata_page_content_nav %}
                    {% endblock sonata_page_content_header %}
                </section>

                <section class=\"content\">
                    {% block sonata_admin_content %}

                        {% block notice %}
                            {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                        {% endblock notice %}

                        {% if _preview is not empty %}
                            <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                        {% endif %}

                        {% if _content is not empty %}
                            <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                        {% endif %}

                        {% if _show is not empty %}
                            <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                        {% endif %}

                        {% if _form is not empty %}
                            <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                        {% endif %}

                        {% if _list_table is not empty or _list_filters is not empty %}
                            {% if _list_filters|trim %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            <div class=\"row\">
                                {{ _list_table|raw }}
                            </div>

                        {% endif %}
                    {% endblock sonata_admin_content %}
                </section>
            {% endblock sonata_page_content %}
        </div>
    {% endblock sonata_wrapper %}
</div>

{% if sonata_admin.adminPool.getOption('use_bootlint') %}
    {% block bootlint %}
        {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
        <script type=\"text/javascript\">
            javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
        </script>
    {% endblock %}
{% endif %}

</body>
</html>
";
    }
}
