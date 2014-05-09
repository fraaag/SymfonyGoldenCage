<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_a69832d1686314d910864b1b87d87c8e3a06c1de2c0194887e44eb03976ca652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" >
            ";
            // line 19
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
                // line 20
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "sonata_admin"), "inline") == "table")) {
                    // line 21
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "form"), "children")) > 0)) {
                        // line 22
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 25
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getContext($context, "form"), "children")), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 26
                            echo "                                        ";
                            if (($this->getContext($context, "field_name") == "_delete")) {
                                // line 27
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 29
                                echo "                                            <th ";
                                echo (($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field", true), "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "attr", array(), "array"), "hidden", array(), "array"))) {
                                    echo " style=\"display:none;\"";
                                }
                                echo ">
                                                ";
                                // line 30
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "sonata_admin", array(), "array"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "label")), "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 33
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 37
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 38
                            echo "                                    <tr>
                                        ";
                            // line 39
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "nested_group_field"), "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 40
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getContext($context, "field_name"), "html", null, true);
                                echo " control-group";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "errors")) > 0)) {
                                    echo " error";
                                }
                                echo "\"";
                                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field", true), "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "attr", array(), "array"), "hidden", array(), "array"))) {
                                    echo " style=\"display:none;\"";
                                }
                                echo ">
                                                ";
                                // line 41
                                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                                    // line 42
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'widget');
                                    echo "

                                                    ";
                                    // line 44
                                    $context["dummy"] = $this->getAttribute($this->getContext($context, "nested_group_field"), "setrendered");
                                    // line 45
                                    echo "                                                ";
                                } else {
                                    // line 46
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'widget');
                                    echo "
                                                ";
                                }
                                // line 48
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "errors")) > 0)) {
                                    // line 49
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 50
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 53
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 55
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 57
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 60
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "form"), "children")) > 0)) {
                    // line 61
                    echo "                    ";
                    $context["associationAdmin"] = $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin");
                    // line 62
                    echo "
                    <div>
                        ";
                    // line 64
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["nested_group_field"]) {
                        // line 65
                        echo "                            <ul class=\"nav nav-tabs\">
                                ";
                        // line 66
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "associationAdmin"), "formgroups"));
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
                        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                            // line 67
                            echo "                                    <li class=\"";
                            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                                echo "active";
                            }
                            echo "\">
                                        <a href=\"#";
                            // line 68
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "associationAdmin"), "uniqid"), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                            echo "\" data-toggle=\"tab\">
                                            <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                            ";
                            // line 70
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "associationAdmin"), "trans", array(0 => $this->getContext($context, "name"), 1 => array(), 2 => $this->getAttribute($this->getContext($context, "form_group"), "translation_domain")), "method"), "html", null, true);
                            echo "
                                        </a>
                                    </li>
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
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                            </ul>

                            <div class=\"tab-content\">
                                ";
                        // line 77
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "associationAdmin"), "formgroups"));
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
                        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                            // line 78
                            echo "                                    <div class=\"tab-pane ";
                            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                                echo "active";
                            }
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "associationAdmin"), "uniqid"), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                            echo "\">
                                        <fieldset>
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                            // line 81
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                                // line 82
                                echo "                                                    ";
                                $context["nested_field"] = $this->getAttribute($this->getAttribute($this->getContext($context, "nested_group_field"), "children"), $this->getContext($context, "field_name"), array(), "array");
                                // line 83
                                echo "                                                    ";
                                if ($this->getAttribute($this->getAttribute($this->getContext($context, "associationAdmin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                                    // line 84
                                    echo "                                                        ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'row', array("inline" => "natural", "edit" => "inline"));
                                    // line 87
                                    echo "
                                                        ";
                                    // line 88
                                    $context["dummy"] = $this->getAttribute($this->getContext($context, "nested_group_field"), "setrendered");
                                    // line 89
                                    echo "                                                    ";
                                } else {
                                    // line 90
                                    echo "                                                        ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'row');
                                    echo "
                                                    ";
                                }
                                // line 92
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 93
                            echo "                                            </div>
                                        </fieldset>
                                    </div>
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
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 97
                        echo "                            </div>

                            ";
                        // line 99
                        if ($this->getAttribute($this->getContext($context, "nested_group_field", true), "_delete", array(), "array", true, true)) {
                            // line 100
                            echo "                                ";
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "nested_group_field"), "_delete", array(), "array"), 'row');
                            echo "
                            ";
                        }
                        // line 102
                        echo "                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                    </div>
                ";
                }
                // line 105
                echo "            ";
            } else {
                // line 106
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            ";
            }
            // line 108
            echo "
        </span>

        ";
            // line 111
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
                // line 112
                echo "
            ";
                // line 113
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $this->getContext($context, "btn_add"))) {
                    // line 114
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 126
                echo "
            ";
                // line 128
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 129
                    echo "                <script type=\"text/javascript\">
                    jQuery('div#field_container_";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: 'tr',
                        stop: apply_position_value_";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "
                    });

                    function apply_position_value_";
                    // line 137
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "sortable"), "html", null, true);
                    echo "').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 146
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "sortable"), "html", null, true);
                    echo " input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 152
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 153
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "();
                        jQuery('div#field_container_";
                    // line 154
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 157
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "();

                </script>
            ";
                }
                // line 161
                echo "
            ";
                // line 163
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 164
                echo "
        ";
            } else {
                // line 166
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 167
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $this->getContext($context, "btn_add"))) {
                    // line 168
                    echo "                    <a
                        href=\"";
                    // line 169
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 175
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 178
                echo "            </span>

            ";
                // line 180
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig")->display($context);
                // line 181
                echo "
            ";
                // line 182
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 183
                echo "        ";
            }
            // line 184
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 161,  489 => 157,  483 => 154,  479 => 153,  475 => 152,  462 => 146,  448 => 139,  443 => 137,  424 => 128,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 113,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  346 => 99,  342 => 97,  325 => 93,  313 => 90,  308 => 88,  292 => 81,  255 => 74,  184 => 64,  155 => 53,  146 => 49,  124 => 41,  188 => 84,  181 => 80,  320 => 122,  317 => 121,  311 => 118,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 93,  237 => 70,  232 => 84,  191 => 69,  153 => 56,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 183,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 169,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 126,  417 => 243,  400 => 233,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 89,  302 => 84,  296 => 82,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  215 => 78,  186 => 83,  110 => 48,  76 => 29,  58 => 18,  216 => 49,  205 => 32,  70 => 25,  222 => 81,  207 => 32,  161 => 71,  152 => 92,  150 => 55,  126 => 42,  104 => 67,  114 => 71,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 134,  435 => 146,  430 => 130,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 217,  368 => 103,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 160,  258 => 81,  252 => 80,  247 => 78,  241 => 86,  229 => 73,  220 => 80,  214 => 70,  140 => 55,  132 => 44,  128 => 49,  61 => 25,  273 => 96,  269 => 100,  240 => 139,  238 => 85,  235 => 74,  230 => 77,  227 => 81,  224 => 71,  217 => 79,  179 => 66,  159 => 70,  135 => 81,  119 => 43,  102 => 38,  71 => 29,  63 => 16,  59 => 49,  85 => 34,  75 => 30,  68 => 31,  87 => 33,  21 => 12,  88 => 60,  78 => 36,  46 => 35,  28 => 13,  201 => 65,  183 => 82,  171 => 63,  166 => 100,  151 => 63,  142 => 61,  136 => 56,  121 => 53,  24 => 13,  209 => 46,  203 => 122,  199 => 4,  193 => 73,  176 => 65,  173 => 65,  168 => 60,  149 => 50,  147 => 90,  144 => 65,  141 => 70,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  112 => 43,  99 => 46,  73 => 29,  33 => 6,  54 => 16,  22 => 12,  164 => 72,  162 => 55,  157 => 56,  145 => 52,  139 => 56,  123 => 70,  106 => 64,  96 => 46,  92 => 61,  83 => 31,  80 => 30,  43 => 18,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 92,  315 => 120,  309 => 117,  305 => 87,  301 => 117,  299 => 83,  293 => 109,  289 => 163,  285 => 89,  281 => 105,  277 => 78,  271 => 108,  265 => 99,  262 => 105,  260 => 77,  257 => 103,  254 => 147,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 68,  225 => 87,  219 => 77,  213 => 82,  211 => 69,  204 => 66,  197 => 70,  174 => 60,  158 => 67,  148 => 64,  143 => 48,  138 => 50,  134 => 45,  131 => 48,  127 => 56,  116 => 43,  94 => 69,  49 => 20,  38 => 17,  270 => 157,  268 => 85,  264 => 84,  253 => 95,  243 => 89,  233 => 78,  221 => 67,  212 => 74,  210 => 75,  208 => 124,  206 => 71,  202 => 31,  198 => 66,  196 => 90,  192 => 86,  189 => 71,  187 => 84,  185 => 68,  182 => 66,  180 => 62,  177 => 61,  175 => 77,  172 => 51,  169 => 57,  167 => 48,  165 => 59,  163 => 62,  160 => 58,  156 => 57,  154 => 67,  137 => 46,  120 => 45,  115 => 50,  113 => 41,  111 => 78,  108 => 39,  100 => 36,  95 => 43,  90 => 33,  81 => 30,  65 => 30,  47 => 19,  35 => 16,  30 => 15,  129 => 59,  117 => 67,  109 => 40,  107 => 38,  105 => 39,  103 => 46,  97 => 63,  93 => 34,  89 => 40,  86 => 32,  84 => 39,  82 => 33,  79 => 31,  72 => 21,  69 => 50,  66 => 15,  64 => 26,  62 => 29,  57 => 22,  55 => 22,  39 => 17,  34 => 26,  53 => 18,  50 => 20,  45 => 19,  40 => 6,  37 => 4,  67 => 27,  60 => 25,  52 => 21,  44 => 8,  41 => 7,  101 => 35,  98 => 37,  91 => 27,  77 => 58,  74 => 34,  56 => 24,  51 => 38,  48 => 40,  42 => 18,  29 => 21,  32 => 15,  27 => 5,  25 => 3,  20 => 1,  36 => 16,  31 => 22,  26 => 13,  23 => 18,  19 => 11,);
    }
}
