<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_c7302135c856a17c4687cd6d53a14df7d5c08fd7a803eeee3cbd9fdfa0579929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 21
    public function block_list_table($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => $this->getContext($context, "admin"))));
        echo "

            ";
        // line 26
        $this->displayBlock('list_header', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $context["batchactions"] = $this->getAttribute($this->getContext($context, "admin"), "batchactions");
        // line 29
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results")) > 0)) {
            // line 30
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "batch"), "method")) {
                // line 31
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute($this->getContext($context, "admin"), "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
                echo "\">
                ";
            }
            // line 34
            echo "                    <table class=\"table table-bordered table-striped\">
                        ";
            // line 35
            $this->displayBlock('table_header', $context, $blocks);
            // line 71
            echo "
                        ";
            // line 72
            $this->displayBlock('table_body', $context, $blocks);
            // line 81
            echo "
                        ";
            // line 82
            $this->displayBlock('table_footer', $context, $blocks);
            // line 170
            echo "                    </table>
                ";
            // line 171
            if ($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "batch"), "method")) {
                // line 172
                echo "                </form>
                ";
            }
            // line 174
            echo "            ";
        } else {
            // line 175
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 179
        echo "
            ";
        // line 180
        $this->displayBlock('list_footer', $context, $blocks);
        // line 181
        echo "
            ";
        // line 182
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => $this->getContext($context, "admin"))));
        echo "


        </div>
    </div>
";
    }

    // line 26
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 35
    public function block_table_header($context, array $blocks = array())
    {
        // line 36
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 39
            echo "                                        ";
            if ((($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($this->getContext($context, "field_description"), "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
                // line 40
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute($this->getContext($context, "field_description"), "getOption", array(0 => "code"), "method") == "_select")) {
                // line 44
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute($this->getContext($context, "field_description"), "name") == "_action") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
                // line 46
                echo "                                            ";
                // line 47
                echo "                                        ";
            } elseif ((($this->getAttribute($this->getContext($context, "field_description"), "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
                // line 48
                echo "                                            ";
                // line 49
                echo "                                        ";
            } else {
                // line 50
                echo "                                            ";
                $context["sortable"] = false;
                // line 51
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "sortable"))) {
                    // line 52
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 53
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "sortparameters", array(0 => $this->getContext($context, "field_description"), 1 => $this->getAttribute($this->getContext($context, "admin"), "datagrid")), "method");
                    // line 54
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_by") == $this->getContext($context, "field_description")) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute($this->getContext($context, "sort_parameters"), "filter"), "_sort_by")));
                    // line 55
                    echo "                                                ";
                    $context["sort_active_class"] = (($this->getContext($context, "current")) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 56
                    echo "                                                ";
                    $context["sort_by"] = (($this->getContext($context, "current")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "_sort_order")));
                    // line 57
                    echo "                                            ";
                }
                // line 58
                echo "
                                            ";
                // line 59
                ob_start();
                // line 60
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
                echo " ";
                if ($this->getContext($context, "sortable")) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getContext($context, "sort_by")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "sort_active_class"), "html", null, true);
                }
                echo "\">
                                                    ";
                // line 61
                if ($this->getContext($context, "sortable")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getContext($context, "sort_parameters")), "method"), "html", null, true);
                    echo "\">";
                }
                // line 62
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "field_description"), "label"), 1 => array(), 2 => $this->getAttribute($this->getContext($context, "field_description"), "translationDomain")), "method"), "html", null, true);
                echo "
                                                    ";
                // line 63
                if ($this->getContext($context, "sortable")) {
                    echo "</a>";
                }
                // line 64
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 66
                echo "                                        ";
            }
            // line 67
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 72
    public function block_table_body($context, array $blocks = array())
    {
        // line 73
        echo "                            <tbody>
                                ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 75
            echo "                                    <tr>
                                        ";
            // line 76
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 77
            echo "                                    </tr>
                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                            </tbody>
                        ";
    }

    // line 82
    public function block_table_footer($context, array $blocks = array())
    {
        // line 83
        echo "                            <tr>
                                <th colspan=\"";
        // line 84
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")) - (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                    <div class=\"form-inline\">
                                        ";
        // line 86
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
            // line 87
            echo "                                            ";
            if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
                // line 88
                echo "                                                ";
                $this->displayBlock('batch', $context, $blocks);
                // line 129
                echo "                                            ";
            }
            // line 130
            echo "
                                            <div class=\"pull-right\">
                                                ";
            // line 132
            if ((($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "export"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "getExportFormats", array(), "method")))) {
                // line 133
                echo "                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                            <i class=\"glyphicon glyphicon-export\"></i>
                                                            ";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                            <span class=\"caret\"></span>
                                                        </button>
                                                        <ul class=\"dropdown-menu\">
                                                            ";
                // line 140
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 141
                    echo "                                                                <li>
                                                                    <a href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => 0), "method") + array("format" => $this->getContext($context, "format")))), "method"), "html", null, true);
                    echo "\">
                                                                        <i class=\"glyphicon glyphicon-download\"></i>
                                                                        ";
                    // line 144
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getContext($context, "format")), "html", null, true);
                    echo "
                                                                    </a>
                                                                <li>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "                                                        </ul>
                                                    </div>

                                                    &nbsp;-&nbsp;
                                                ";
            }
            // line 153
            echo "
                                                ";
            // line 154
            $this->displayBlock('pager_results', $context, $blocks);
            // line 157
            echo "                                            </div>
                                        ";
        }
        // line 159
        echo "                                    </div>
                                </th>
                            </tr>

                            ";
        // line 163
        $this->displayBlock('pager_links', $context, $blocks);
        // line 168
        echo "
                        ";
    }

    // line 88
    public function block_batch($context, array $blocks = array())
    {
        // line 89
        echo "                                                    <script>
                                                        ";
        // line 90
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 111
        echo "                                                    </script>

                                                    ";
        // line 113
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 126
        echo "
                                                    <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                                ";
    }

    // line 90
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 91
        echo "                                                            jQuery(document).ready(function (\$) {
                                                                \$('#list_batch_checkbox').on('ifChanged', function () {
                                                                    \$(this)
                                                                        .closest('table')
                                                                        .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                        .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                                    ;
                                                                });

                                                                \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                    .on('ifChanged', function () {
                                                                        \$(this)
                                                                            .closest('tr')
                                                                            .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                        ;
                                                                    })
                                                                    .trigger('ifChanged')
                                                                ;
                                                            });
                                                        ";
    }

    // line 113
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 114
        echo "                                                        <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                            <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                            ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                             (";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nbresults"), "html", null, true);
        echo ")
                                                        </label>

                                                        <select name=\"action\" style=\"width: auto; height: auto\">
                                                            ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "batchactions"));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 122
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "label"), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                                                        </select>
                                                    ";
    }

    // line 154
    public function block_pager_results($context, array $blocks = array())
    {
        // line 155
        echo "                                                    ";
        $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 156
        echo "                                                ";
    }

    // line 163
    public function block_pager_links($context, array $blocks = array())
    {
        // line 164
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 165
            echo "                                    ";
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 166
            echo "                                ";
        }
        // line 167
        echo "                            ";
    }

    // line 180
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 189
    public function block_list_filters($context, array $blocks = array())
    {
        // line 190
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters")) {
            // line 191
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => $this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "filter"), "method")));
            // line 192
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 194
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 198
            echo ((($this->getAttribute($this->getContext($context, "admin"), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 199
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
                        <div class=\"filter_container ";
            // line 200
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                            ";
            // line 201
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 202
                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "filter"), "label"), 1 => array(), 2 => $this->getAttribute($this->getContext($context, "filter"), "translationDomain")), "method"), "html", null, true);
                echo "</label>
                                    ";
                // line 204
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form", true), "children", array(), "any", false, true), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form", true), "children", array(), "any", false, true), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr"), array())) : (array()));
                // line 205
                echo "                                    ";
                $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " sonata-filter-option"))));
                // line 206
                echo "
                                    ";
                // line 207
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => $this->getContext($context, "attr")));
                echo "

                                    ";
                // line 209
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget');
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "
                            <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                            ";
            // line 215
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 216
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                            <a class=\"btn btn-default\" href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                        </div>

                        ";
            // line 223
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 224
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "paramKey"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "paramValue"), "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                </form>
            </div>
        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 223,  612 => 220,  601 => 216,  599 => 215,  594 => 212,  585 => 209,  580 => 207,  574 => 205,  559 => 201,  545 => 198,  532 => 192,  526 => 190,  514 => 167,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  415 => 127,  412 => 126,  406 => 111,  340 => 136,  333 => 132,  326 => 129,  318 => 86,  307 => 82,  261 => 73,  330 => 103,  300 => 93,  287 => 77,  190 => 49,  178 => 48,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  648 => 198,  646 => 197,  624 => 224,  603 => 192,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 175,  558 => 174,  554 => 153,  542 => 149,  539 => 148,  523 => 189,  521 => 166,  518 => 180,  507 => 165,  481 => 155,  476 => 147,  447 => 113,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  410 => 113,  404 => 90,  401 => 89,  382 => 115,  376 => 153,  369 => 148,  359 => 144,  356 => 105,  353 => 103,  329 => 130,  306 => 95,  303 => 94,  291 => 84,  286 => 82,  280 => 87,  267 => 74,  195 => 54,  118 => 46,  321 => 100,  295 => 142,  274 => 135,  272 => 134,  242 => 113,  236 => 109,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 229,  753 => 228,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  515 => 85,  512 => 162,  509 => 161,  503 => 81,  501 => 163,  493 => 155,  478 => 154,  467 => 146,  456 => 140,  450 => 114,  442 => 62,  433 => 60,  428 => 133,  426 => 58,  405 => 49,  390 => 43,  377 => 37,  371 => 35,  366 => 110,  363 => 109,  350 => 26,  335 => 133,  332 => 97,  316 => 16,  290 => 90,  276 => 395,  266 => 366,  263 => 365,  245 => 66,  194 => 52,  200 => 54,  170 => 79,  551 => 199,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  513 => 168,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 153,  475 => 152,  462 => 143,  448 => 139,  443 => 137,  424 => 91,  414 => 52,  408 => 50,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 142,  348 => 101,  346 => 100,  342 => 23,  325 => 94,  313 => 84,  308 => 89,  292 => 91,  255 => 71,  184 => 48,  155 => 53,  146 => 34,  124 => 47,  188 => 48,  181 => 232,  320 => 87,  317 => 121,  311 => 14,  288 => 4,  284 => 76,  279 => 104,  275 => 86,  256 => 79,  250 => 69,  237 => 71,  232 => 84,  191 => 246,  153 => 72,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 196,  635 => 226,  631 => 364,  625 => 361,  615 => 354,  607 => 218,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  555 => 200,  548 => 151,  540 => 308,  536 => 194,  529 => 191,  524 => 90,  516 => 169,  510 => 293,  504 => 164,  500 => 291,  495 => 289,  490 => 154,  486 => 286,  482 => 285,  470 => 121,  464 => 71,  459 => 116,  452 => 268,  434 => 256,  421 => 90,  417 => 243,  400 => 47,  385 => 159,  361 => 207,  344 => 24,  339 => 191,  324 => 179,  310 => 83,  302 => 79,  296 => 82,  282 => 161,  259 => 149,  244 => 140,  231 => 69,  226 => 131,  215 => 280,  186 => 51,  110 => 172,  76 => 18,  58 => 22,  216 => 100,  205 => 32,  70 => 27,  222 => 66,  207 => 58,  161 => 202,  152 => 36,  150 => 34,  126 => 179,  104 => 34,  114 => 174,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 237,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 112,  368 => 34,  362 => 110,  360 => 109,  355 => 27,  337 => 22,  322 => 101,  314 => 99,  312 => 97,  298 => 91,  294 => 85,  283 => 138,  278 => 410,  258 => 72,  252 => 68,  247 => 75,  241 => 86,  229 => 73,  220 => 65,  214 => 63,  140 => 51,  132 => 42,  128 => 47,  61 => 28,  273 => 85,  269 => 133,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  217 => 64,  179 => 44,  159 => 39,  135 => 35,  119 => 108,  102 => 37,  71 => 30,  63 => 16,  59 => 27,  85 => 32,  75 => 29,  68 => 24,  87 => 23,  21 => 11,  88 => 37,  78 => 21,  46 => 8,  28 => 22,  201 => 56,  183 => 50,  171 => 44,  166 => 42,  151 => 188,  142 => 30,  136 => 58,  121 => 24,  24 => 1,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  176 => 58,  173 => 46,  168 => 43,  149 => 35,  147 => 52,  144 => 26,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  112 => 105,  99 => 41,  73 => 17,  33 => 16,  54 => 16,  22 => 11,  164 => 55,  162 => 41,  157 => 56,  145 => 54,  139 => 59,  123 => 48,  106 => 104,  96 => 18,  92 => 28,  83 => 32,  80 => 31,  43 => 25,  365 => 111,  358 => 139,  351 => 141,  347 => 140,  343 => 132,  341 => 105,  338 => 99,  327 => 102,  323 => 88,  319 => 92,  315 => 98,  309 => 148,  305 => 87,  301 => 144,  299 => 86,  293 => 6,  289 => 83,  285 => 3,  281 => 75,  277 => 136,  271 => 374,  265 => 130,  262 => 81,  260 => 72,  257 => 103,  254 => 147,  251 => 101,  248 => 116,  246 => 67,  239 => 64,  228 => 68,  225 => 67,  219 => 101,  213 => 82,  211 => 69,  204 => 57,  197 => 90,  174 => 42,  158 => 75,  148 => 49,  143 => 33,  138 => 49,  134 => 182,  131 => 181,  127 => 32,  116 => 107,  94 => 30,  49 => 18,  38 => 14,  270 => 84,  268 => 373,  264 => 74,  253 => 78,  243 => 66,  233 => 304,  221 => 67,  212 => 60,  210 => 59,  208 => 57,  206 => 57,  202 => 55,  198 => 55,  196 => 52,  192 => 53,  189 => 52,  187 => 87,  185 => 61,  182 => 85,  180 => 49,  177 => 43,  175 => 47,  172 => 46,  169 => 44,  167 => 56,  165 => 77,  163 => 40,  160 => 39,  156 => 38,  154 => 36,  137 => 29,  120 => 176,  115 => 45,  113 => 39,  111 => 39,  108 => 171,  100 => 81,  95 => 71,  90 => 34,  81 => 20,  65 => 30,  47 => 22,  35 => 16,  30 => 15,  129 => 180,  117 => 175,  109 => 43,  107 => 38,  105 => 170,  103 => 82,  97 => 56,  93 => 35,  89 => 33,  86 => 25,  84 => 41,  82 => 23,  79 => 35,  72 => 28,  69 => 27,  66 => 17,  64 => 24,  62 => 24,  57 => 14,  55 => 21,  39 => 14,  34 => 15,  53 => 22,  50 => 21,  45 => 26,  40 => 24,  37 => 24,  67 => 26,  60 => 15,  52 => 22,  44 => 18,  41 => 6,  101 => 40,  98 => 72,  91 => 37,  77 => 30,  74 => 29,  56 => 25,  51 => 29,  48 => 15,  42 => 15,  29 => 3,  32 => 4,  27 => 14,  25 => 12,  20 => 1,  36 => 4,  31 => 23,  26 => 14,  23 => 18,  19 => 11,);
    }
}
