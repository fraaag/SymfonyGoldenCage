<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_552d9776d6d12a874e0af3f00644732ac9993aa3ca2e82be316966e6b71f2498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (($this->getContext($context, "about") == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  788 => 486,  727 => 476,  706 => 473,  698 => 471,  686 => 468,  679 => 466,  677 => 465,  634 => 456,  567 => 414,  549 => 411,  517 => 404,  389 => 160,  378 => 157,  345 => 147,  334 => 141,  331 => 140,  328 => 139,  357 => 123,  672 => 345,  668 => 344,  651 => 337,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  591 => 309,  552 => 293,  533 => 284,  519 => 278,  505 => 270,  473 => 254,  465 => 249,  438 => 236,  436 => 235,  397 => 213,  383 => 207,  367 => 155,  297 => 104,  449 => 198,  446 => 197,  439 => 195,  431 => 189,  429 => 188,  394 => 168,  380 => 158,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  836 => 253,  824 => 246,  818 => 244,  816 => 243,  806 => 238,  803 => 237,  795 => 234,  792 => 488,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  761 => 230,  745 => 218,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 472,  693 => 206,  690 => 469,  687 => 204,  682 => 467,  673 => 199,  665 => 196,  663 => 195,  660 => 464,  657 => 193,  650 => 192,  647 => 336,  644 => 335,  632 => 187,  629 => 454,  626 => 325,  616 => 182,  610 => 181,  600 => 178,  588 => 308,  570 => 164,  522 => 406,  471 => 253,  468 => 128,  460 => 123,  454 => 244,  451 => 120,  418 => 224,  373 => 156,  370 => 101,  304 => 181,  620 => 451,  612 => 220,  601 => 446,  599 => 215,  594 => 176,  585 => 307,  580 => 207,  574 => 205,  559 => 296,  545 => 291,  532 => 410,  526 => 190,  514 => 167,  497 => 267,  485 => 124,  463 => 248,  455 => 115,  415 => 180,  412 => 222,  406 => 111,  340 => 145,  333 => 132,  326 => 138,  318 => 111,  307 => 128,  261 => 50,  330 => 103,  300 => 105,  287 => 77,  190 => 76,  178 => 59,  12 => 36,  786 => 238,  777 => 234,  775 => 485,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 198,  664 => 342,  648 => 198,  646 => 197,  624 => 224,  603 => 179,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 173,  581 => 305,  572 => 204,  568 => 178,  566 => 203,  563 => 298,  561 => 161,  558 => 160,  554 => 224,  542 => 149,  539 => 148,  523 => 189,  521 => 166,  518 => 180,  507 => 156,  481 => 155,  476 => 147,  447 => 113,  441 => 196,  425 => 132,  422 => 226,  419 => 130,  416 => 129,  410 => 221,  404 => 90,  401 => 172,  382 => 115,  376 => 205,  369 => 148,  359 => 144,  356 => 126,  353 => 149,  329 => 188,  306 => 107,  303 => 106,  291 => 102,  286 => 112,  280 => 87,  267 => 101,  195 => 54,  118 => 49,  321 => 135,  295 => 178,  274 => 110,  272 => 134,  242 => 113,  236 => 42,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 271,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 285,  894 => 284,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 261,  846 => 205,  844 => 258,  841 => 203,  833 => 199,  830 => 249,  828 => 248,  825 => 196,  817 => 192,  814 => 191,  812 => 241,  809 => 189,  801 => 236,  798 => 235,  796 => 489,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 264,  767 => 232,  764 => 231,  756 => 222,  753 => 221,  751 => 163,  749 => 479,  746 => 478,  739 => 217,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 475,  707 => 148,  699 => 142,  697 => 141,  696 => 207,  695 => 139,  694 => 470,  689 => 137,  680 => 202,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 462,  643 => 120,  640 => 334,  638 => 118,  619 => 183,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 310,  576 => 101,  564 => 162,  557 => 295,  550 => 94,  547 => 93,  527 => 408,  515 => 276,  512 => 162,  509 => 272,  503 => 81,  501 => 154,  493 => 143,  478 => 154,  467 => 146,  456 => 140,  450 => 114,  442 => 62,  433 => 60,  428 => 230,  426 => 58,  405 => 108,  390 => 43,  377 => 37,  371 => 156,  366 => 150,  363 => 153,  350 => 26,  335 => 134,  332 => 116,  316 => 16,  290 => 119,  276 => 111,  266 => 366,  263 => 95,  245 => 66,  194 => 68,  200 => 72,  170 => 84,  551 => 221,  546 => 175,  543 => 174,  541 => 290,  537 => 159,  531 => 283,  525 => 280,  520 => 170,  513 => 230,  511 => 166,  506 => 166,  502 => 164,  499 => 268,  496 => 79,  489 => 262,  483 => 258,  479 => 256,  475 => 152,  462 => 202,  448 => 240,  443 => 137,  424 => 114,  414 => 52,  408 => 176,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 159,  375 => 106,  372 => 105,  354 => 101,  348 => 140,  346 => 100,  342 => 137,  325 => 129,  313 => 183,  308 => 89,  292 => 91,  255 => 101,  184 => 63,  155 => 47,  146 => 34,  124 => 51,  188 => 90,  181 => 65,  320 => 127,  317 => 185,  311 => 83,  288 => 118,  284 => 76,  279 => 77,  275 => 105,  256 => 96,  250 => 44,  237 => 71,  232 => 88,  191 => 67,  153 => 77,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 189,  635 => 188,  631 => 327,  625 => 453,  615 => 354,  607 => 180,  597 => 177,  590 => 338,  583 => 334,  579 => 332,  577 => 303,  575 => 328,  569 => 300,  565 => 324,  555 => 200,  548 => 292,  540 => 160,  536 => 194,  529 => 409,  524 => 90,  516 => 169,  510 => 293,  504 => 155,  500 => 291,  495 => 289,  490 => 142,  486 => 286,  482 => 136,  470 => 121,  464 => 125,  459 => 246,  452 => 268,  434 => 118,  421 => 90,  417 => 243,  400 => 214,  385 => 159,  361 => 152,  344 => 119,  339 => 191,  324 => 113,  310 => 83,  302 => 125,  296 => 121,  282 => 161,  259 => 103,  244 => 43,  231 => 83,  226 => 84,  215 => 280,  186 => 51,  110 => 22,  76 => 34,  58 => 25,  216 => 79,  205 => 108,  70 => 15,  222 => 83,  207 => 75,  161 => 63,  152 => 46,  150 => 55,  126 => 66,  104 => 32,  114 => 50,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 215,  398 => 88,  393 => 211,  387 => 164,  384 => 106,  381 => 105,  379 => 104,  374 => 112,  368 => 34,  362 => 148,  360 => 128,  355 => 150,  337 => 90,  322 => 101,  314 => 99,  312 => 130,  298 => 120,  294 => 85,  283 => 115,  278 => 98,  258 => 94,  252 => 68,  247 => 75,  241 => 93,  229 => 87,  220 => 81,  214 => 63,  140 => 58,  132 => 57,  128 => 47,  61 => 12,  273 => 174,  269 => 107,  240 => 72,  238 => 312,  235 => 89,  230 => 62,  227 => 86,  224 => 81,  217 => 64,  179 => 98,  159 => 90,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  63 => 18,  59 => 16,  85 => 23,  75 => 19,  68 => 12,  87 => 41,  21 => 11,  88 => 25,  78 => 18,  46 => 34,  28 => 3,  201 => 106,  183 => 50,  171 => 153,  166 => 54,  151 => 59,  142 => 30,  136 => 71,  121 => 50,  24 => 3,  209 => 58,  203 => 73,  199 => 93,  193 => 51,  176 => 86,  173 => 85,  168 => 61,  149 => 35,  147 => 75,  144 => 42,  141 => 73,  133 => 69,  130 => 46,  125 => 42,  122 => 41,  112 => 36,  99 => 23,  73 => 33,  33 => 9,  54 => 19,  22 => 11,  164 => 55,  162 => 59,  157 => 89,  145 => 74,  139 => 49,  123 => 61,  106 => 51,  96 => 30,  92 => 28,  83 => 33,  80 => 27,  43 => 12,  365 => 197,  358 => 151,  351 => 120,  347 => 191,  343 => 146,  341 => 118,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 131,  309 => 129,  305 => 87,  301 => 80,  299 => 86,  293 => 120,  289 => 113,  285 => 175,  281 => 114,  277 => 136,  271 => 374,  265 => 105,  262 => 98,  260 => 72,  257 => 103,  254 => 46,  251 => 101,  248 => 97,  246 => 136,  239 => 64,  228 => 41,  225 => 67,  219 => 101,  213 => 78,  211 => 69,  204 => 57,  197 => 69,  174 => 65,  158 => 80,  148 => 49,  143 => 51,  138 => 49,  134 => 39,  131 => 45,  127 => 35,  116 => 57,  94 => 21,  49 => 14,  38 => 18,  270 => 102,  268 => 373,  264 => 74,  253 => 100,  243 => 92,  233 => 87,  221 => 38,  212 => 78,  210 => 77,  208 => 76,  206 => 57,  202 => 94,  198 => 55,  196 => 92,  192 => 53,  189 => 66,  187 => 75,  185 => 74,  182 => 87,  180 => 49,  177 => 43,  175 => 58,  172 => 57,  169 => 78,  167 => 56,  165 => 83,  163 => 82,  160 => 39,  156 => 62,  154 => 60,  137 => 29,  120 => 31,  115 => 47,  113 => 48,  111 => 47,  108 => 19,  100 => 39,  95 => 41,  90 => 42,  81 => 23,  65 => 11,  47 => 21,  35 => 5,  30 => 5,  129 => 67,  117 => 39,  109 => 52,  107 => 44,  105 => 25,  103 => 38,  97 => 41,  93 => 27,  89 => 34,  86 => 33,  84 => 40,  82 => 19,  79 => 18,  72 => 18,  69 => 17,  66 => 23,  64 => 13,  62 => 27,  57 => 39,  55 => 38,  39 => 10,  34 => 5,  53 => 12,  50 => 22,  45 => 9,  40 => 6,  37 => 6,  67 => 14,  60 => 26,  52 => 12,  44 => 11,  41 => 19,  101 => 31,  98 => 45,  91 => 33,  77 => 20,  74 => 27,  56 => 16,  51 => 37,  48 => 16,  42 => 11,  29 => 3,  32 => 4,  27 => 7,  25 => 35,  20 => 1,  36 => 10,  31 => 8,  26 => 9,  23 => 13,  19 => 1,);
    }
}