<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_0c58385a63d85bfd0ae66adeec4f1f2b2d6a225b0163512f847c4b0ef12deaa2 extends Twig_Template
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
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo $this->getContext($context, "id");
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 52
        echo $this->getContext($context, "id");
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo $this->getContext($context, "id");
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo $this->getContext($context, "id");
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo $this->getContext($context, "id");
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo $this->getContext($context, "id");
        echo ".modal('hide');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo $this->getContext($context, "id");
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo $this->getContext($context, "id");
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo $this->getContext($context, "id");
        echo ").on('click', field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo $this->getContext($context, "id");
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 92
        echo $this->getContext($context, "id");
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo $this->getContext($context, "id");
        echo "();
                }
            });
        });
    }

    // handle the list link
    var field_dialog_form_list_";
        // line 100
        echo $this->getContext($context, "id");
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 111
        echo $this->getContext($context, "id");
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 122
        echo $this->getContext($context, "id");
        echo ".html(html);

                field_dialog_title_";
        // line 124
        echo $this->getContext($context, "id");
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 126
        echo $this->getContext($context, "id");
        echo ");

                field_dialog_form_list_handle_action_";
        // line 128
        echo $this->getContext($context, "id");
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 131
        echo $this->getContext($context, "id");
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 133
        echo $this->getContext($context, "id");
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 139
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 140
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 147
        echo $this->getContext($context, "id");
        echo ".html('');

        Admin.log('[";
        // line 149
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 157
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo $this->getContext($context, "id");
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 160
        echo $this->getContext($context, "id");
        echo ".html(html);
                field_dialog_title_";
        // line 161
        echo $this->getContext($context, "id");
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 163
        echo $this->getContext($context, "id");
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 167
        echo $this->getContext($context, "id");
        echo ").on('click', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 168
        echo $this->getContext($context, "id");
        echo ").on('submit', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 171
        echo $this->getContext($context, "id");
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 173
        echo $this->getContext($context, "id");
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 179
        echo $this->getContext($context, "id");
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 191
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 193
        echo $this->getContext($context, "id");
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 207
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 217
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 225
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 230
        echo $this->getContext($context, "id");
        echo ".modal('hide');

                    ";
        // line 232
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
            // line 233
            echo "                        ";
            // line 237
            echo "                        jQuery('#";
            echo $this->getContext($context, "id");
            echo "').val(data.objectId);
                        jQuery('#";
            // line 238
            echo $this->getContext($context, "id");
            echo "').change();

                    ";
        } else {
            // line 241
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 243
            echo $this->getContext($context, "id");
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 244
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $this->getContext($context, "id"), "subclass" => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code")));
            // line 250
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_content_";
            // line 255
            echo $this->getContext($context, "id");
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 256
            echo $this->getContext($context, "id");
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 263
            echo $this->getContext($context, "id");
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 268
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 273
        echo $this->getContext($context, "id");
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 275
        echo $this->getContext($context, "id");
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 278
        echo $this->getContext($context, "id");
        echo ").submit(field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 285
        echo $this->getContext($context, "id");
        echo "         = false;
    var field_dialog_content_";
        // line 286
        echo $this->getContext($context, "id");
        echo " = false;
    var field_dialog_title_";
        // line 287
        echo $this->getContext($context, "id");
        echo "   = false;

    function initialize_popup_";
        // line 289
        echo $this->getContext($context, "id");
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 291
        echo $this->getContext($context, "id");
        echo ") {
            field_dialog_";
        // line 292
        echo $this->getContext($context, "id");
        echo "         = jQuery(\"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");
            field_dialog_content_";
        // line 293
        echo $this->getContext($context, "id");
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");
            field_dialog_title_";
        // line 294
        echo $this->getContext($context, "id");
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 297
        echo $this->getContext($context, "id");
        echo ");

            Admin.log('[";
        // line 299
        echo $this->getContext($context, "id");
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 306
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 308
        echo $this->getContext($context, "id");
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 313
        echo $this->getContext($context, "id");
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 317
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 324
        echo $this->getContext($context, "id");
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 325
        echo $this->getContext($context, "id");
        echo ");
    }

    ";
        // line 328
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
            // line 329
            echo "        ";
            // line 332
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 334
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 338
            echo $this->getContext($context, "id");
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 342
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 349
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 354
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 361
            echo $this->getContext($context, "id");
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 364
            echo $this->getContext($context, "id");
            echo " option').get(0)) {
                jQuery('#";
            // line 365
            echo $this->getContext($context, "id");
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 368
            echo $this->getContext($context, "id");
            echo "').val('');
            jQuery('#";
            // line 369
            echo $this->getContext($context, "id");
            echo "').trigger('change');

            return false;
        }
        ";
            // line 376
            echo "
        // update the label
        jQuery('#";
            // line 378
            echo $this->getContext($context, "id");
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 380
            echo $this->getContext($context, "id");
            echo "] update the label');

            jQuery('#field_widget_";
            // line 382
            echo $this->getContext($context, "id");
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 385
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($this->getContext($context, "associationadmin"), "uniqid"), "code" => $this->getAttribute($this->getContext($context, "associationadmin"), "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "link_parameters")));
            // line 390
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 393
            echo $this->getContext($context, "id");
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 399
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 313,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 294,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 244,  417 => 243,  400 => 233,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  215 => 126,  186 => 111,  110 => 40,  76 => 29,  58 => 18,  216 => 49,  205 => 32,  70 => 25,  222 => 78,  207 => 32,  161 => 80,  152 => 92,  150 => 85,  126 => 61,  104 => 67,  114 => 71,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 147,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 217,  368 => 112,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 160,  258 => 81,  252 => 80,  247 => 78,  241 => 86,  229 => 73,  220 => 128,  214 => 70,  140 => 55,  132 => 51,  128 => 49,  61 => 27,  273 => 96,  269 => 94,  240 => 139,  238 => 85,  235 => 74,  230 => 77,  227 => 81,  224 => 71,  217 => 75,  179 => 107,  159 => 77,  135 => 81,  119 => 48,  102 => 46,  71 => 29,  63 => 16,  59 => 23,  85 => 30,  75 => 30,  68 => 28,  87 => 25,  21 => 2,  88 => 60,  78 => 53,  46 => 14,  28 => 13,  201 => 92,  183 => 82,  171 => 102,  166 => 100,  151 => 63,  142 => 59,  136 => 56,  121 => 75,  24 => 7,  209 => 46,  203 => 122,  199 => 4,  193 => 73,  176 => 64,  173 => 65,  168 => 72,  149 => 51,  147 => 90,  144 => 65,  141 => 70,  133 => 55,  130 => 71,  125 => 44,  122 => 58,  112 => 43,  99 => 46,  73 => 21,  33 => 6,  54 => 16,  22 => 12,  164 => 59,  162 => 59,  157 => 56,  145 => 46,  139 => 56,  123 => 70,  106 => 64,  96 => 46,  92 => 61,  83 => 31,  80 => 30,  43 => 33,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 173,  309 => 97,  305 => 95,  301 => 117,  299 => 116,  293 => 113,  289 => 163,  285 => 89,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 147,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 88,  225 => 87,  219 => 77,  213 => 82,  211 => 69,  204 => 31,  197 => 119,  174 => 67,  158 => 67,  148 => 60,  143 => 80,  138 => 54,  134 => 66,  131 => 52,  127 => 76,  116 => 43,  94 => 33,  49 => 14,  38 => 32,  270 => 157,  268 => 85,  264 => 84,  253 => 1,  243 => 88,  233 => 78,  221 => 77,  212 => 74,  210 => 73,  208 => 124,  206 => 71,  202 => 31,  198 => 66,  196 => 90,  192 => 64,  189 => 71,  187 => 84,  185 => 59,  182 => 66,  180 => 56,  177 => 65,  175 => 53,  172 => 51,  169 => 60,  167 => 48,  165 => 64,  163 => 62,  160 => 44,  156 => 93,  154 => 58,  137 => 37,  120 => 45,  115 => 56,  113 => 66,  111 => 37,  108 => 65,  100 => 27,  95 => 42,  90 => 33,  81 => 26,  65 => 20,  47 => 9,  35 => 3,  30 => 2,  129 => 59,  117 => 67,  109 => 69,  107 => 38,  105 => 37,  103 => 28,  97 => 63,  93 => 29,  89 => 32,  86 => 32,  84 => 37,  82 => 31,  79 => 31,  72 => 21,  69 => 50,  66 => 15,  64 => 26,  62 => 24,  57 => 10,  55 => 22,  39 => 7,  34 => 7,  53 => 18,  50 => 21,  45 => 19,  40 => 6,  37 => 4,  67 => 18,  60 => 22,  52 => 12,  44 => 8,  41 => 7,  101 => 35,  98 => 45,  91 => 27,  77 => 27,  74 => 52,  56 => 40,  51 => 38,  48 => 12,  42 => 18,  29 => 21,  32 => 15,  27 => 5,  25 => 3,  20 => 1,  36 => 10,  31 => 22,  26 => 20,  23 => 18,  19 => 11,);
    }
}
