<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_a607ee11a48cc1d0e83101a008bba9562348e849a93e7b66835100dd60e82873 extends Twig_Template
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
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
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
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
        <title>
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 59
        if ((!twig_test_empty($this->getContext($context, "_title")))) {
            // line 60
            echo "                ";
            echo $this->getContext($context, "_title");
            echo "
            ";
        } else {
            // line 62
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 63
                echo "                    -
                    ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                    // line 65
                    echo "                        ";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        // line 66
                        echo "                            ";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") != 2)) {
                            // line 67
                            echo "                                &gt;
                            ";
                        }
                        // line 69
                        echo "
                            ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 72
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
                // line 73
                echo "                ";
            }
            // line 74
            echo "            ";
        }
        // line 75
        echo "        </title>
    </head>
    <body ";
        // line 77
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 78
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 153
        echo "
        ";
        // line 154
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 309
        echo "    </body>
</html>
";
    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "stylesheet")), "html", null, true);
            echo "\"  />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "javascript")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
    }

    // line 77
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 78
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 79
        echo "            <header class=\"header\">
                ";
        // line 80
        $this->displayBlock('logo', $context, $blocks);
        // line 90
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 151
        echo "            </header>
        ";
    }

    // line 80
    public function block_logo($context, array $blocks = array())
    {
        // line 81
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 82
        if ((("single_image" == $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "title_mode"), "method")))) {
            // line 83
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "admin_pool"), "titlelogo")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
            echo "\">";
            if (("both" == $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "title_mode"), "method"))) {
                echo "&nbsp;";
            }
            // line 84
            echo "                        ";
        }
        // line 85
        echo "                        ";
        if ((("single_text" == $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "title_mode"), "method")))) {
            // line 86
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
            echo "
                        ";
        }
        // line 88
        echo "                    </a>
                ";
    }

    // line 90
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 91
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 92
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 101
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 126
            echo "                            </div>

                            ";
            // line 128
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 148
            echo "                        </nav>
                    ";
        }
        // line 150
        echo "                ";
    }

    // line 101
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 102
        echo "                                    ";
        if (((!twig_test_empty($this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 103
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 104
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 105
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 106
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                        // line 107
                        echo "                                                        ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 108
                            echo "                                                            <li>
                                                                ";
                            // line 109
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "menu"), "uri")))) {
                                // line 110
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($this->getContext($context, "menu"), "label");
                                echo "</a>
                                                                ";
                            } else {
                                // line 112
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 114
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 116
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 118
                        echo "                                                    ";
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
                    // line 119
                    echo "                                                ";
                }
                // line 120
                echo "                                            ";
            } else {
                // line 121
                echo "                                                ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                                            ";
            }
            // line 123
            echo "                                        </ol>
                                    ";
        }
        // line 125
        echo "                                ";
    }

    // line 128
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 129
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 135
        $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 136
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 142
        $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 143
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
    }

    // line 154
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 155
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 156
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 228
        echo "
                <aside class=\"right-side\">
                    ";
        // line 230
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 305
        echo "                </aside>

            </div>
        ";
    }

    // line 156
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 157
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 159
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 225
        echo "                        </section>
                    </aside>
                ";
    }

    // line 159
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 160
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 174
        echo "
                                ";
        // line 175
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 176
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 221
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 224
        echo "                            ";
    }

    // line 160
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 161
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 162
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 173
        echo "                                ";
    }

    // line 175
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 176
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 177
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 178
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 179
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 180
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($this->getContext($context, "group"), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 181
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!$this->getContext($context, "display"))) {
                        // line 182
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($this->getContext($context, "role"));
                        // line 183
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "
                                                ";
                // line 186
                echo "                                                ";
                $context["item_count"] = 0;
                // line 187
                echo "                                                ";
                if ($this->getContext($context, "display")) {
                    // line 188
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (($this->getContext($context, "item_count") == 0)) {
                            // line 189
                            echo "                                                        ";
                            if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 190
                                echo "                                                            ";
                                $context["item_count"] = ($this->getContext($context, "item_count") + 1);
                                // line 191
                                echo "                                                        ";
                            }
                            // line 192
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "                                                ";
                }
                // line 194
                echo "
                                                ";
                // line 195
                if (($this->getContext($context, "display") && ($this->getContext($context, "item_count") > 0))) {
                    // line 196
                    echo "                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            ";
                    // line 198
                    if ((($this->getAttribute($this->getContext($context, "group", true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "group", true), "icon"))) : (""))) {
                        echo $this->getAttribute($this->getContext($context, "group"), "icon");
                    }
                    // line 199
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        ";
                    // line 202
                    $context["active"] = false;
                    // line 203
                    echo "                                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 204
                        echo "                                                            ";
                        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($this->getContext($context, "admin"), "code")))) {
                            // line 205
                            echo "                                                                ";
                            $context["active"] = true;
                            // line 206
                            echo "                                                            ";
                        }
                        // line 207
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                                                        <ul class=\"treeview-menu";
                    if ($this->getContext($context, "active")) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 209
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 210
                        echo "                                                                ";
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 211
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($this->getContext($context, "admin"), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 213
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 217
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                                        </ul>
                                    ";
        }
        // line 220
        echo "                                ";
    }

    // line 221
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 222
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
    }

    // line 230
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 231
        echo "                        <section class=\"content-header\">
                            ";
        // line 232
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 264
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 267
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 303
        echo "                        </section>
                    ";
    }

    // line 232
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 233
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 262
        echo "
                            ";
    }

    // line 233
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 234
        echo "                                    ";
        if (((!twig_test_empty($this->getContext($context, "_tab_menu"))) || (!twig_test_empty($this->getContext($context, "_actions"))))) {
            // line 235
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 236
            if ((!twig_test_empty($this->getContext($context, "_navbar_title")))) {
                // line 237
                echo "                                                <div class=\"navbar-header\">
                                                    <span class=\"navbar-brand\">";
                // line 238
                echo $this->getContext($context, "_navbar_title");
                echo "</span>
                                                </div>
                                            ";
            }
            // line 241
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 243
            if ((!twig_test_empty($this->getContext($context, "_tab_menu")))) {
                // line 244
                echo "                                                        ";
                echo $this->getContext($context, "_tab_menu");
                echo "
                                                    ";
            }
            // line 246
            echo "                                                </div>

                                                ";
            // line 248
            if ((!twig_test_empty($this->getContext($context, "_actions")))) {
                // line 249
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 253
                echo $this->getContext($context, "_actions");
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 258
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 261
        echo "                                ";
    }

    // line 267
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 268
        echo "
                                ";
        // line 269
        $this->displayBlock('notice', $context, $blocks);
        // line 272
        echo "
                                ";
        // line 273
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 274
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, "_preview");
            echo "</div>
                                ";
        }
        // line 276
        echo "
                                ";
        // line 277
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 278
            echo "                                    <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                                ";
        }
        // line 280
        echo "
                                ";
        // line 281
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 282
            echo "                                    <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                                ";
        }
        // line 284
        echo "
                                ";
        // line 285
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 286
            echo "                                    <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                                ";
        }
        // line 288
        echo "
                                ";
        // line 289
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 290
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 291
            if (trim($this->getContext($context, "_list_filters"))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 292
            echo $this->getContext($context, "_list_table");
            echo "
                                        </div>

                                        ";
            // line 295
            if (trim($this->getContext($context, "_list_filters"))) {
                // line 296
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 297
                echo $this->getContext($context, "_list_filters");
                echo "
                                            </div>
                                        ";
            }
            // line 300
            echo "                                    </div>
                                ";
        }
        // line 302
        echo "                            ";
    }

    // line 269
    public function block_notice($context, array $blocks = array())
    {
        // line 270
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 271
        echo "                                ";
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
        return array (  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  836 => 253,  824 => 246,  818 => 244,  816 => 243,  806 => 238,  803 => 237,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  761 => 230,  745 => 218,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  673 => 199,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  632 => 187,  629 => 186,  626 => 184,  616 => 182,  610 => 181,  600 => 178,  588 => 175,  570 => 164,  522 => 156,  471 => 129,  468 => 128,  460 => 123,  454 => 121,  451 => 120,  418 => 112,  373 => 102,  370 => 101,  304 => 81,  620 => 223,  612 => 220,  601 => 216,  599 => 215,  594 => 176,  585 => 209,  580 => 207,  574 => 205,  559 => 201,  545 => 198,  532 => 192,  526 => 190,  514 => 167,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  415 => 127,  412 => 126,  406 => 111,  340 => 91,  333 => 132,  326 => 86,  318 => 86,  307 => 82,  261 => 50,  330 => 103,  300 => 93,  287 => 77,  190 => 49,  178 => 48,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 198,  664 => 206,  648 => 198,  646 => 197,  624 => 224,  603 => 179,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 173,  581 => 185,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 161,  558 => 160,  554 => 224,  542 => 149,  539 => 148,  523 => 189,  521 => 166,  518 => 180,  507 => 156,  481 => 155,  476 => 147,  447 => 113,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  410 => 110,  404 => 90,  401 => 89,  382 => 115,  376 => 103,  369 => 148,  359 => 144,  356 => 126,  353 => 103,  329 => 130,  306 => 95,  303 => 94,  291 => 80,  286 => 82,  280 => 87,  267 => 74,  195 => 54,  118 => 49,  321 => 100,  295 => 142,  274 => 53,  272 => 134,  242 => 113,  236 => 42,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 271,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 285,  894 => 284,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 261,  846 => 205,  844 => 258,  841 => 203,  833 => 199,  830 => 249,  828 => 248,  825 => 196,  817 => 192,  814 => 191,  812 => 241,  809 => 189,  801 => 236,  798 => 235,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 264,  767 => 232,  764 => 231,  756 => 222,  753 => 221,  751 => 163,  749 => 220,  746 => 161,  739 => 217,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 207,  695 => 139,  694 => 138,  689 => 137,  680 => 202,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 183,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 162,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  515 => 305,  512 => 162,  509 => 228,  503 => 81,  501 => 154,  493 => 143,  478 => 154,  467 => 146,  456 => 140,  450 => 114,  442 => 62,  433 => 60,  428 => 116,  426 => 58,  405 => 108,  390 => 43,  377 => 37,  371 => 35,  366 => 150,  363 => 109,  350 => 26,  335 => 133,  332 => 88,  316 => 16,  290 => 90,  276 => 395,  266 => 366,  263 => 365,  245 => 66,  194 => 52,  200 => 31,  170 => 79,  551 => 221,  546 => 175,  543 => 174,  541 => 180,  537 => 159,  531 => 225,  525 => 157,  520 => 170,  513 => 230,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 135,  475 => 152,  462 => 143,  448 => 119,  443 => 137,  424 => 114,  414 => 52,  408 => 109,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 101,  348 => 101,  346 => 100,  342 => 23,  325 => 94,  313 => 84,  308 => 89,  292 => 91,  255 => 71,  184 => 48,  155 => 73,  146 => 34,  124 => 51,  188 => 25,  181 => 232,  320 => 84,  317 => 121,  311 => 83,  288 => 79,  284 => 76,  279 => 77,  275 => 86,  256 => 79,  250 => 44,  237 => 71,  232 => 84,  191 => 26,  153 => 72,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 189,  635 => 188,  631 => 364,  625 => 361,  615 => 354,  607 => 180,  597 => 177,  590 => 338,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  555 => 200,  548 => 176,  540 => 160,  536 => 194,  529 => 159,  524 => 90,  516 => 169,  510 => 293,  504 => 155,  500 => 291,  495 => 289,  490 => 142,  486 => 286,  482 => 136,  470 => 121,  464 => 125,  459 => 116,  452 => 268,  434 => 118,  421 => 90,  417 => 243,  400 => 47,  385 => 159,  361 => 207,  344 => 24,  339 => 191,  324 => 179,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  259 => 149,  244 => 43,  231 => 69,  226 => 131,  215 => 280,  186 => 51,  110 => 45,  76 => 30,  58 => 25,  216 => 35,  205 => 32,  70 => 29,  222 => 66,  207 => 33,  161 => 75,  152 => 36,  150 => 34,  126 => 66,  104 => 43,  114 => 50,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 107,  398 => 88,  393 => 168,  387 => 122,  384 => 106,  381 => 105,  379 => 104,  374 => 112,  368 => 34,  362 => 148,  360 => 128,  355 => 27,  337 => 90,  322 => 101,  314 => 99,  312 => 97,  298 => 91,  294 => 85,  283 => 138,  278 => 410,  258 => 72,  252 => 68,  247 => 75,  241 => 86,  229 => 73,  220 => 65,  214 => 63,  140 => 51,  132 => 57,  128 => 47,  61 => 21,  273 => 85,  269 => 133,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  217 => 64,  179 => 44,  159 => 39,  135 => 35,  119 => 44,  102 => 43,  71 => 25,  63 => 22,  59 => 20,  85 => 36,  75 => 32,  68 => 30,  87 => 57,  21 => 11,  88 => 37,  78 => 37,  46 => 19,  28 => 14,  201 => 56,  183 => 50,  171 => 153,  166 => 42,  151 => 188,  142 => 30,  136 => 70,  121 => 51,  24 => 13,  209 => 58,  203 => 32,  199 => 265,  193 => 51,  176 => 309,  173 => 46,  168 => 43,  149 => 35,  147 => 52,  144 => 26,  141 => 72,  133 => 69,  130 => 57,  125 => 46,  122 => 45,  112 => 105,  99 => 41,  73 => 29,  33 => 16,  54 => 19,  22 => 12,  164 => 55,  162 => 41,  157 => 56,  145 => 53,  139 => 51,  123 => 65,  106 => 64,  96 => 40,  92 => 59,  83 => 55,  80 => 31,  43 => 12,  365 => 111,  358 => 139,  351 => 141,  347 => 140,  343 => 92,  341 => 105,  338 => 99,  327 => 102,  323 => 85,  319 => 92,  315 => 98,  309 => 82,  305 => 87,  301 => 80,  299 => 86,  293 => 90,  289 => 83,  285 => 78,  281 => 75,  277 => 136,  271 => 374,  265 => 51,  262 => 81,  260 => 72,  257 => 103,  254 => 46,  251 => 101,  248 => 116,  246 => 67,  239 => 64,  228 => 41,  225 => 67,  219 => 101,  213 => 82,  211 => 69,  204 => 57,  197 => 30,  174 => 154,  158 => 74,  148 => 49,  143 => 33,  138 => 49,  134 => 182,  131 => 48,  127 => 52,  116 => 43,  94 => 60,  49 => 15,  38 => 18,  270 => 84,  268 => 373,  264 => 74,  253 => 78,  243 => 66,  233 => 304,  221 => 38,  212 => 60,  210 => 59,  208 => 57,  206 => 57,  202 => 55,  198 => 55,  196 => 52,  192 => 53,  189 => 52,  187 => 87,  185 => 61,  182 => 23,  180 => 49,  177 => 43,  175 => 47,  172 => 46,  169 => 78,  167 => 56,  165 => 77,  163 => 40,  160 => 39,  156 => 38,  154 => 36,  137 => 29,  120 => 46,  115 => 47,  113 => 46,  111 => 43,  108 => 45,  100 => 62,  95 => 41,  90 => 38,  81 => 38,  65 => 29,  47 => 14,  35 => 20,  30 => 13,  129 => 67,  117 => 45,  109 => 46,  107 => 44,  105 => 44,  103 => 63,  97 => 41,  93 => 39,  89 => 34,  86 => 33,  84 => 34,  82 => 33,  79 => 34,  72 => 31,  69 => 33,  66 => 23,  64 => 27,  62 => 28,  57 => 19,  55 => 18,  39 => 15,  34 => 14,  53 => 17,  50 => 21,  45 => 13,  40 => 19,  37 => 16,  67 => 19,  60 => 24,  52 => 23,  44 => 16,  41 => 11,  101 => 42,  98 => 36,  91 => 39,  77 => 30,  74 => 29,  56 => 25,  51 => 16,  48 => 22,  42 => 18,  29 => 15,  32 => 14,  27 => 14,  25 => 13,  20 => 11,  36 => 17,  31 => 15,  26 => 14,  23 => 11,  19 => 11,);
    }
}
