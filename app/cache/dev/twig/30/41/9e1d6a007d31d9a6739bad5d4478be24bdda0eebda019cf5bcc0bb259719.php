<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_30419e1d6a007d31d9a6739bad5d4478be24bdda0eebda019cf5bcc0bb259719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["itemsPerColumn"] = $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["columnsCount"] = twig_round((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups")) / $this->getContext($context, "itemsPerColumn")));
        // line 4
        echo "

    <ul class=\"dropdown-menu";
        // line 6
        if (($this->getContext($context, "columnsCount") > 1)) {
            echo " multi-column";
        }
        echo " dropdown-add\"
        ";
        // line 7
        if (($this->getContext($context, "columnsCount") > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ($this->getContext($context, "columnsCount") * 140), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo "            >
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute($this->getContext($context, "group"), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 11
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!$this->getContext($context, "display"))) {
                    // line 12
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted($this->getContext($context, "role"));
                    // line 13
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
            ";
            // line 16
            echo "            ";
            $context["item_count"] = 0;
            // line 17
            echo "            ";
            if ($this->getContext($context, "display")) {
                // line 18
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    if (($this->getContext($context, "item_count") == 0)) {
                        // line 19
                        echo "                    ";
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 20
                            echo "                        ";
                            $context["item_count"] = ($this->getContext($context, "item_count") + 1);
                            // line 21
                            echo "                    ";
                        }
                        // line 22
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (($this->getContext($context, "display") && ($this->getContext($context, "item_count") > 0))) {
                // line 26
                echo "                ";
                if ((($this->getContext($context, "columnsCount") > 1) && (($this->getAttribute($this->getContext($context, "loop"), "index0") % $this->getContext($context, "itemsPerColumn")) == 0))) {
                    // line 27
                    echo "                    ";
                    if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                        // line 28
                        echo "                        <div class=\"row\">
                    ";
                    }
                    // line 30
                    echo "                    <div class=\"col-md-";
                    echo twig_escape_filter($this->env, twig_round((12 / $this->getContext($context, "columnsCount"))), "html", null, true);
                    echo "\">
                    <ul class=\"dropdown-menu\">
                ";
                }
                // line 33
                echo "
                <li role=\"presentation\" class=\"dropdown-header\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                echo "</li>
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 36
                    echo "                    ";
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 37
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
                ";
                // line 43
                if (((!$this->getAttribute($this->getContext($context, "loop"), "last")) && (($this->getAttribute($this->getContext($context, "loop"), "index") % $this->getContext($context, "itemsPerColumn")) != 0))) {
                    // line 44
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 46
                echo "
            ";
                // line 47
                if ((($this->getAttribute($this->getContext($context, "loop"), "length") > $this->getContext($context, "itemsPerColumn")) && (($this->getAttribute($this->getContext($context, "loop"), "index") % $this->getContext($context, "itemsPerColumn")) == 0))) {
                    // line 48
                    echo "                </ul>
                </div>
            ";
                }
                // line 51
                echo "                ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "length") > $this->getContext($context, "itemsPerColumn")) && $this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    // line 52
                    echo "                    </div>
                ";
                }
                // line 54
                echo "            ";
            }
            // line 55
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  648 => 198,  646 => 197,  624 => 194,  603 => 192,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  542 => 149,  539 => 148,  523 => 167,  521 => 166,  518 => 165,  507 => 160,  481 => 155,  476 => 147,  447 => 137,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  410 => 127,  404 => 125,  401 => 124,  382 => 115,  376 => 113,  369 => 111,  359 => 107,  356 => 105,  353 => 103,  329 => 96,  306 => 88,  303 => 87,  291 => 84,  286 => 82,  280 => 78,  267 => 74,  195 => 51,  118 => 23,  321 => 152,  295 => 142,  274 => 135,  272 => 134,  242 => 113,  236 => 109,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 229,  753 => 228,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  515 => 85,  512 => 162,  509 => 161,  503 => 81,  501 => 158,  493 => 78,  478 => 154,  467 => 146,  456 => 140,  450 => 138,  442 => 62,  433 => 60,  428 => 133,  426 => 58,  405 => 49,  390 => 43,  377 => 37,  371 => 35,  366 => 110,  363 => 109,  350 => 26,  335 => 98,  332 => 97,  316 => 16,  290 => 5,  276 => 395,  266 => 366,  263 => 365,  245 => 66,  194 => 248,  200 => 54,  170 => 79,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 153,  475 => 152,  462 => 143,  448 => 139,  443 => 137,  424 => 128,  414 => 52,  408 => 50,  403 => 48,  399 => 116,  391 => 113,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 101,  346 => 100,  342 => 23,  325 => 94,  313 => 15,  308 => 89,  292 => 81,  255 => 71,  184 => 233,  155 => 53,  146 => 34,  124 => 25,  188 => 48,  181 => 232,  320 => 122,  317 => 121,  311 => 14,  288 => 4,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 69,  237 => 70,  232 => 84,  191 => 246,  153 => 72,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 196,  635 => 117,  631 => 364,  625 => 361,  615 => 354,  607 => 193,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 95,  548 => 151,  540 => 308,  536 => 147,  529 => 169,  524 => 90,  516 => 169,  510 => 293,  504 => 159,  500 => 291,  495 => 289,  490 => 77,  486 => 286,  482 => 285,  470 => 73,  464 => 71,  459 => 69,  452 => 268,  434 => 256,  421 => 126,  417 => 243,  400 => 47,  385 => 116,  361 => 207,  344 => 24,  339 => 191,  324 => 179,  310 => 89,  302 => 84,  296 => 82,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  215 => 280,  186 => 47,  110 => 42,  76 => 27,  58 => 24,  216 => 100,  205 => 32,  70 => 29,  222 => 297,  207 => 269,  161 => 202,  152 => 62,  150 => 35,  126 => 26,  104 => 18,  114 => 111,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 237,  398 => 123,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 112,  368 => 34,  362 => 110,  360 => 109,  355 => 27,  337 => 22,  322 => 101,  314 => 99,  312 => 90,  298 => 91,  294 => 85,  283 => 138,  278 => 410,  258 => 354,  252 => 80,  247 => 78,  241 => 86,  229 => 73,  220 => 63,  214 => 61,  140 => 52,  132 => 28,  128 => 47,  61 => 27,  273 => 394,  269 => 133,  240 => 65,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  217 => 56,  179 => 44,  159 => 39,  135 => 35,  119 => 117,  102 => 19,  71 => 11,  63 => 24,  59 => 185,  85 => 31,  75 => 33,  68 => 10,  87 => 14,  21 => 11,  88 => 37,  78 => 34,  46 => 19,  28 => 14,  201 => 65,  183 => 46,  171 => 216,  166 => 42,  151 => 188,  142 => 61,  136 => 30,  121 => 24,  24 => 13,  209 => 96,  203 => 55,  199 => 265,  193 => 51,  176 => 82,  173 => 65,  168 => 41,  149 => 182,  147 => 52,  144 => 51,  141 => 58,  133 => 55,  130 => 33,  125 => 46,  122 => 45,  112 => 27,  99 => 41,  73 => 29,  33 => 16,  54 => 26,  22 => 12,  164 => 41,  162 => 68,  157 => 37,  145 => 52,  139 => 169,  123 => 52,  106 => 104,  96 => 18,  92 => 38,  83 => 16,  80 => 13,  43 => 21,  365 => 111,  358 => 139,  351 => 102,  347 => 134,  343 => 132,  341 => 105,  338 => 99,  327 => 154,  323 => 125,  319 => 92,  315 => 91,  309 => 148,  305 => 87,  301 => 144,  299 => 86,  293 => 6,  289 => 83,  285 => 3,  281 => 411,  277 => 136,  271 => 374,  265 => 130,  262 => 105,  260 => 72,  257 => 103,  254 => 147,  251 => 101,  248 => 116,  246 => 90,  239 => 97,  228 => 68,  225 => 64,  219 => 101,  213 => 82,  211 => 69,  204 => 55,  197 => 90,  174 => 42,  158 => 75,  148 => 64,  143 => 33,  138 => 49,  134 => 55,  131 => 160,  127 => 32,  116 => 44,  94 => 16,  49 => 123,  38 => 18,  270 => 75,  268 => 373,  264 => 73,  253 => 70,  243 => 327,  233 => 304,  221 => 67,  212 => 279,  210 => 270,  208 => 57,  206 => 71,  202 => 266,  198 => 53,  196 => 52,  192 => 88,  189 => 240,  187 => 87,  185 => 86,  182 => 85,  180 => 66,  177 => 43,  175 => 74,  172 => 46,  169 => 44,  167 => 48,  165 => 77,  163 => 62,  160 => 38,  156 => 64,  154 => 36,  137 => 46,  120 => 51,  115 => 28,  113 => 41,  111 => 22,  108 => 21,  100 => 40,  95 => 20,  90 => 16,  81 => 33,  65 => 30,  47 => 22,  35 => 17,  30 => 15,  129 => 27,  117 => 51,  109 => 46,  107 => 25,  105 => 20,  103 => 43,  97 => 39,  93 => 17,  89 => 33,  86 => 36,  84 => 41,  82 => 33,  79 => 28,  72 => 37,  69 => 32,  66 => 27,  64 => 204,  62 => 24,  57 => 27,  55 => 25,  39 => 15,  34 => 18,  53 => 24,  50 => 25,  45 => 23,  40 => 13,  37 => 17,  67 => 31,  60 => 22,  52 => 20,  44 => 21,  41 => 81,  101 => 42,  98 => 21,  91 => 56,  77 => 12,  74 => 30,  56 => 21,  51 => 9,  48 => 8,  42 => 7,  29 => 3,  32 => 4,  27 => 14,  25 => 3,  20 => 1,  36 => 6,  31 => 15,  26 => 2,  23 => 18,  19 => 11,);
    }
}
