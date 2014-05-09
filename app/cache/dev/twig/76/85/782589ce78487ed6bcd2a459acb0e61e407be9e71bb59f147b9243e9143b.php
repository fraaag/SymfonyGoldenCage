<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_7685782589ce78487ed6bcd2a459acb0e61e407be9e71bb59f147b9243e9143b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (($this->getAttribute($this->getContext($context, "field_description"), "hasassociationadmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "EDIT"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "edit", 1 => $this->getContext($context, "value")), "method")) {
                    // line 18
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 20
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 22
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 23
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name"), 1 => $this->getContext($context, "element"), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "parameters")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description")), "html", null, true);
        echo "</a>";
    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 161,  489 => 157,  483 => 154,  479 => 153,  475 => 152,  462 => 146,  448 => 139,  443 => 137,  424 => 128,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 113,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  346 => 99,  342 => 97,  325 => 93,  313 => 90,  308 => 88,  292 => 81,  255 => 74,  184 => 64,  155 => 53,  146 => 49,  124 => 31,  188 => 83,  181 => 80,  320 => 122,  317 => 121,  311 => 118,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 93,  237 => 70,  232 => 84,  191 => 69,  153 => 56,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 183,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 169,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 126,  417 => 243,  400 => 233,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 89,  302 => 84,  296 => 82,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  215 => 78,  186 => 82,  110 => 48,  76 => 29,  58 => 18,  216 => 49,  205 => 32,  70 => 25,  222 => 81,  207 => 32,  161 => 71,  152 => 92,  150 => 65,  126 => 42,  104 => 67,  114 => 71,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 134,  435 => 146,  430 => 130,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 217,  368 => 103,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 160,  258 => 81,  252 => 80,  247 => 78,  241 => 86,  229 => 73,  220 => 80,  214 => 70,  140 => 55,  132 => 58,  128 => 49,  61 => 25,  273 => 96,  269 => 100,  240 => 139,  238 => 85,  235 => 74,  230 => 77,  227 => 81,  224 => 71,  217 => 79,  179 => 66,  159 => 70,  135 => 35,  119 => 28,  102 => 38,  71 => 29,  63 => 16,  59 => 23,  85 => 34,  75 => 30,  68 => 31,  87 => 33,  21 => 12,  88 => 60,  78 => 24,  46 => 35,  28 => 14,  201 => 65,  183 => 82,  171 => 63,  166 => 100,  151 => 63,  142 => 61,  136 => 56,  121 => 53,  24 => 13,  209 => 46,  203 => 122,  199 => 4,  193 => 73,  176 => 77,  173 => 65,  168 => 60,  149 => 50,  147 => 90,  144 => 62,  141 => 70,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  112 => 49,  99 => 26,  73 => 29,  33 => 6,  54 => 18,  22 => 12,  164 => 72,  162 => 71,  157 => 56,  145 => 52,  139 => 60,  123 => 54,  106 => 64,  96 => 46,  92 => 61,  83 => 31,  80 => 30,  43 => 19,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 92,  315 => 120,  309 => 117,  305 => 87,  301 => 117,  299 => 83,  293 => 109,  289 => 163,  285 => 89,  281 => 105,  277 => 78,  271 => 108,  265 => 99,  262 => 105,  260 => 77,  257 => 103,  254 => 147,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 68,  225 => 87,  219 => 77,  213 => 82,  211 => 69,  204 => 66,  197 => 70,  174 => 60,  158 => 67,  148 => 64,  143 => 48,  138 => 36,  134 => 59,  131 => 48,  127 => 32,  116 => 43,  94 => 69,  49 => 21,  38 => 17,  270 => 157,  268 => 85,  264 => 84,  253 => 95,  243 => 89,  233 => 78,  221 => 67,  212 => 74,  210 => 75,  208 => 124,  206 => 71,  202 => 31,  198 => 66,  196 => 90,  192 => 85,  189 => 71,  187 => 84,  185 => 68,  182 => 80,  180 => 62,  177 => 61,  175 => 77,  172 => 51,  169 => 57,  167 => 48,  165 => 72,  163 => 62,  160 => 70,  156 => 68,  154 => 67,  137 => 46,  120 => 45,  115 => 50,  113 => 41,  111 => 78,  108 => 48,  100 => 36,  95 => 43,  90 => 33,  81 => 25,  65 => 30,  47 => 19,  35 => 17,  30 => 15,  129 => 57,  117 => 51,  109 => 40,  107 => 38,  105 => 27,  103 => 46,  97 => 63,  93 => 34,  89 => 40,  86 => 32,  84 => 39,  82 => 33,  79 => 31,  72 => 21,  69 => 50,  66 => 15,  64 => 23,  62 => 29,  57 => 20,  55 => 22,  39 => 17,  34 => 16,  53 => 18,  50 => 20,  45 => 19,  40 => 6,  37 => 4,  67 => 27,  60 => 22,  52 => 17,  44 => 8,  41 => 7,  101 => 35,  98 => 44,  91 => 27,  77 => 58,  74 => 34,  56 => 24,  51 => 38,  48 => 40,  42 => 18,  29 => 15,  32 => 16,  27 => 5,  25 => 3,  20 => 1,  36 => 16,  31 => 15,  26 => 14,  23 => 18,  19 => 11,);
    }
}
