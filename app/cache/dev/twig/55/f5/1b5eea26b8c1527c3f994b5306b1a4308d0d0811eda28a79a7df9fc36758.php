<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_55f51b5eea26b8c1527c3f994b5306b1a4308d0d0811eda28a79a7df9fc36758 extends Twig_Template
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
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 51
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 58
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 65
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 74
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 78
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 84,  181 => 80,  161 => 71,  320 => 122,  317 => 121,  311 => 118,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  191 => 69,  153 => 56,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 313,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 294,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 244,  417 => 243,  400 => 233,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  186 => 83,  104 => 67,  110 => 48,  76 => 29,  126 => 61,  114 => 71,  58 => 18,  216 => 49,  152 => 92,  150 => 55,  70 => 25,  223 => 77,  215 => 78,  205 => 32,  200 => 4,  155 => 76,  146 => 68,  118 => 57,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 147,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 217,  368 => 112,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 160,  258 => 81,  252 => 80,  247 => 78,  241 => 86,  229 => 73,  220 => 80,  214 => 69,  140 => 64,  132 => 58,  128 => 49,  61 => 25,  273 => 96,  269 => 100,  240 => 139,  238 => 85,  235 => 74,  230 => 77,  227 => 81,  224 => 71,  217 => 79,  179 => 66,  159 => 70,  135 => 81,  119 => 43,  102 => 74,  71 => 29,  63 => 16,  59 => 49,  85 => 34,  75 => 30,  68 => 31,  87 => 65,  21 => 12,  88 => 60,  78 => 36,  46 => 35,  28 => 13,  201 => 72,  183 => 82,  171 => 63,  166 => 100,  151 => 63,  142 => 61,  136 => 56,  121 => 53,  24 => 13,  209 => 46,  203 => 122,  199 => 67,  193 => 73,  176 => 65,  173 => 65,  168 => 60,  149 => 51,  147 => 90,  144 => 49,  141 => 70,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  112 => 43,  99 => 46,  73 => 57,  33 => 7,  54 => 16,  22 => 12,  164 => 72,  162 => 59,  157 => 79,  145 => 52,  139 => 56,  123 => 70,  106 => 64,  96 => 46,  92 => 61,  83 => 31,  80 => 30,  43 => 20,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 120,  309 => 117,  305 => 115,  301 => 117,  299 => 112,  293 => 109,  289 => 163,  285 => 89,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  254 => 147,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 83,  225 => 87,  219 => 76,  213 => 82,  211 => 81,  204 => 73,  197 => 70,  174 => 64,  158 => 67,  148 => 64,  143 => 80,  138 => 50,  134 => 66,  131 => 48,  127 => 56,  116 => 43,  94 => 69,  49 => 14,  38 => 17,  270 => 157,  268 => 85,  264 => 84,  253 => 95,  243 => 89,  233 => 78,  221 => 77,  212 => 68,  210 => 75,  208 => 124,  206 => 71,  202 => 31,  198 => 66,  196 => 90,  192 => 86,  189 => 71,  187 => 84,  185 => 68,  182 => 66,  180 => 56,  177 => 65,  175 => 77,  172 => 51,  169 => 74,  167 => 48,  165 => 59,  163 => 62,  160 => 58,  156 => 57,  154 => 67,  137 => 59,  120 => 45,  115 => 50,  113 => 41,  111 => 78,  108 => 39,  100 => 36,  95 => 43,  90 => 20,  81 => 24,  65 => 30,  47 => 21,  35 => 16,  30 => 15,  129 => 59,  117 => 67,  109 => 69,  107 => 38,  105 => 47,  103 => 46,  97 => 63,  93 => 29,  89 => 40,  86 => 28,  84 => 39,  82 => 33,  79 => 31,  72 => 22,  69 => 50,  66 => 15,  64 => 51,  62 => 29,  57 => 22,  55 => 22,  39 => 9,  34 => 26,  53 => 18,  50 => 20,  45 => 19,  40 => 11,  37 => 5,  67 => 28,  60 => 16,  52 => 21,  44 => 8,  41 => 9,  101 => 35,  98 => 44,  91 => 27,  77 => 58,  74 => 34,  56 => 24,  51 => 38,  48 => 40,  42 => 18,  29 => 21,  32 => 15,  27 => 5,  25 => 3,  20 => 1,  36 => 7,  31 => 22,  26 => 20,  23 => 18,  19 => 11,);
    }
}
