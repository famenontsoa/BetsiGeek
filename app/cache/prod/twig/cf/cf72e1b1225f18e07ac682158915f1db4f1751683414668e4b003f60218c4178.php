<?php

/* admin_base.html.twig */
class __TwigTemplate_95d865d847a3ee26b36be560adb2a071abc9424c770536f59a175a26f5a2b167 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 334
            echo "    ";
            $this->displayBlock('bootlint', $context, $blocks);
        }
        // line 341
        echo "
</body>
</html>
";
    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 28
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"UTF-8\">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
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
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
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
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array());
        // line 68
        echo "        ";
        // line 69
        echo "        ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : null), 0, 2) != "en")) {
            // line 70
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : null), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 72
        echo "
        ";
        // line 74
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "        ";
            if (((isset($context["locale"]) ? $context["locale"] : null) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
        ";
            // line 78
            echo "        ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : null), 0, 2) != "en")) {
                // line 79
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : null), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
        ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "    ";
    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        // line 41
        echo "        <script>
            window.SONATA_CONFIG = {
                CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
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
    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
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
    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : null))) {
            // line 89
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : null), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : null), 1 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
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
    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
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
    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
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
    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        // line 127
        echo "                ";
        ob_start();
        // line 128
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 132
        echo "                        ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                        ";
        }
        // line 135
        echo "                    </a>
                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "            ";
    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
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
    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 146
        echo "                            <div class=\"hidden-xs\">
                                ";
        // line 147
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null)) || array_key_exists("action", $context))) {
            // line 148
            echo "                                    <ol class=\"nav navbar-top-links breadcrumb\">
                                        ";
            // line 149
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 150
                echo "                                            ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : null), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : null), 1 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
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
                                    echo (isset($context["label"]) ? $context["label"] : null);
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                                }
                                // line 167
                                echo "                                                                </a>
                                                            ";
                            } else {
                                // line 169
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                                echo "
                                                            ";
                            }
                            // line 171
                            echo "                                                        </li>
                                                    ";
                        } else {
                            // line 173
                            echo "                                                        <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
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
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
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
    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 187
        echo "                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
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
    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        // line 191
        echo "                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                            </a>
                                            ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "admin_base.html.twig", 195)->display($context);
        // line 196
        echo "                                        </li>
                                    ";
    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        // line 199
        echo "                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "admin_base.html.twig", 204)->display($context);
        // line 205
        echo "                                            </ul>
                                        </li>
                                    ";
    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
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
    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
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
    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 222
        echo "                        ";
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 223
        echo "                        ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 226
        echo "                    ";
    }

    // line 222
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 223
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 224
        echo "                            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                        ";
    }

    // line 232
    public function block_sonata_page_content($context, array $blocks = array())
    {
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
    }

    // line 235
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 236
        echo "                        ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 288
        echo "                    ";
    }

    // line 236
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 237
        echo "                            ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null)) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null)))) {
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
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null))) {
                // line 251
                echo "                                                    ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : null);
                echo "
                                                ";
            }
            // line 253
            echo "                                            </div>

                                            ";
            // line 255
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : null) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes", array())) > 1))) {
                // line 256
                echo "                                                <div class=\"nav navbar-right btn-group\">
                                                    ";
                // line 257
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 258
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", array(), "method") == $context["mode"])) {
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
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null))) {
                // line 281
                echo "                                                ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null);
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
    }

    // line 240
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 241
        echo "                                            ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : null))) {
            // line 242
            echo "                                                <div class=\"navbar-header\">
                                                    <a class=\"navbar-brand\" href=\"#\">";
            // line 243
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : null);
            echo "</a>
                                                </div>
                                            ";
        }
        // line 246
        echo "                                        ";
    }

    // line 263
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        // line 264
        echo "                                                ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : null), array("<li>" => "", "</li>" => ""))))) {
            // line 265
            echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 266
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : null), "</a>")) > 2)) {
                // line 267
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 268
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 270
                echo (isset($context["_actions"]) ? $context["_actions"] : null);
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 274
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : null);
                echo "
                                                        ";
            }
            // line 276
            echo "                                                    </ul>
                                                ";
        }
        // line 278
        echo "                                            ";
    }

    // line 292
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 293
        echo "
                        ";
        // line 294
        $this->displayBlock('notice', $context, $blocks);
        // line 297
        echo "
                        ";
        // line 298
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null))) {
            // line 299
            echo "                            <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                        ";
        }
        // line 301
        echo "
                        ";
        // line 302
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : null))) {
            // line 303
            echo "                            <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                        ";
        }
        // line 305
        echo "
                        ";
        // line 306
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : null))) {
            // line 307
            echo "                            <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                        ";
        }
        // line 309
        echo "
                        ";
        // line 310
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : null))) {
            // line 311
            echo "                            <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                        ";
        }
        // line 313
        echo "
                        ";
        // line 314
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null)) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null)))) {
            // line 315
            echo "                            ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                // line 316
                echo "                                <div class=\"row\">
                                    ";
                // line 317
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
                echo "
                                </div>
                            ";
            }
            // line 320
            echo "
                            <div class=\"row\">
                                ";
            // line 322
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                            </div>

                        ";
        }
        // line 326
        echo "                    ";
    }

    // line 294
    public function block_notice($context, array $blocks = array())
    {
        // line 295
        echo "                            ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "admin_base.html.twig", 295)->display($context);
        // line 296
        echo "                        ";
    }

    // line 334
    public function block_bootlint($context, array $blocks = array())
    {
        // line 335
        echo "        ";
        // line 336
        echo "        <script type=\"text/javascript\">
            javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
        </script>
    ";
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
        return array (  1004 => 336,  1002 => 335,  999 => 334,  995 => 296,  992 => 295,  989 => 294,  985 => 326,  978 => 322,  974 => 320,  968 => 317,  965 => 316,  962 => 315,  960 => 314,  957 => 313,  951 => 311,  949 => 310,  946 => 309,  940 => 307,  938 => 306,  935 => 305,  929 => 303,  927 => 302,  924 => 301,  918 => 299,  916 => 298,  913 => 297,  911 => 294,  908 => 293,  905 => 292,  901 => 278,  897 => 276,  891 => 274,  884 => 270,  879 => 268,  876 => 267,  874 => 266,  871 => 265,  868 => 264,  865 => 263,  861 => 246,  855 => 243,  852 => 242,  849 => 241,  846 => 240,  842 => 287,  836 => 283,  830 => 281,  828 => 280,  825 => 279,  823 => 263,  820 => 262,  816 => 260,  801 => 258,  797 => 257,  794 => 256,  792 => 255,  788 => 253,  782 => 251,  780 => 250,  775 => 247,  773 => 240,  769 => 238,  766 => 237,  763 => 236,  759 => 288,  756 => 236,  753 => 235,  748 => 327,  746 => 292,  741 => 289,  739 => 235,  735 => 233,  732 => 232,  725 => 224,  722 => 223,  716 => 222,  712 => 226,  709 => 223,  706 => 222,  703 => 221,  697 => 227,  695 => 221,  691 => 219,  688 => 218,  683 => 329,  681 => 232,  677 => 230,  674 => 218,  671 => 217,  665 => 205,  663 => 204,  656 => 199,  653 => 198,  648 => 196,  646 => 195,  640 => 191,  637 => 190,  633 => 211,  628 => 208,  625 => 198,  623 => 190,  619 => 188,  616 => 187,  613 => 186,  608 => 182,  604 => 180,  598 => 178,  595 => 177,  592 => 176,  578 => 175,  572 => 173,  568 => 171,  562 => 169,  558 => 167,  555 => 165,  552 => 163,  550 => 162,  545 => 161,  543 => 160,  540 => 159,  538 => 158,  535 => 155,  533 => 154,  531 => 153,  529 => 152,  511 => 151,  508 => 150,  506 => 149,  503 => 148,  501 => 147,  498 => 146,  495 => 145,  490 => 212,  488 => 186,  484 => 184,  482 => 145,  474 => 139,  471 => 138,  467 => 137,  463 => 135,  457 => 133,  454 => 132,  446 => 130,  444 => 129,  439 => 128,  436 => 127,  433 => 126,  425 => 122,  421 => 120,  418 => 119,  413 => 214,  410 => 138,  407 => 126,  405 => 119,  402 => 118,  399 => 117,  393 => 113,  389 => 110,  386 => 109,  383 => 108,  369 => 107,  364 => 105,  361 => 102,  359 => 101,  357 => 100,  355 => 99,  351 => 96,  348 => 95,  345 => 94,  328 => 93,  325 => 92,  322 => 91,  316 => 89,  314 => 88,  308 => 86,  305 => 85,  301 => 65,  292 => 63,  287 => 62,  284 => 61,  269 => 49,  265 => 47,  259 => 46,  251 => 45,  243 => 44,  235 => 43,  231 => 41,  228 => 40,  224 => 82,  221 => 81,  215 => 79,  212 => 78,  209 => 76,  204 => 75,  201 => 74,  198 => 72,  192 => 70,  189 => 69,  187 => 68,  185 => 67,  182 => 66,  180 => 61,  177 => 60,  174 => 40,  171 => 39,  167 => 37,  158 => 35,  153 => 34,  150 => 33,  143 => 28,  140 => 27,  134 => 25,  127 => 341,  123 => 334,  121 => 333,  117 => 331,  115 => 217,  112 => 216,  110 => 117,  103 => 113,  99 => 111,  97 => 85,  93 => 83,  91 => 39,  88 => 38,  86 => 33,  83 => 32,  81 => 27,  76 => 25,  72 => 23,  70 => 22,  68 => 21,  66 => 20,  64 => 19,  62 => 18,  60 => 17,  58 => 16,  56 => 15,  54 => 14,  52 => 13,  50 => 12,  48 => 11,);
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
