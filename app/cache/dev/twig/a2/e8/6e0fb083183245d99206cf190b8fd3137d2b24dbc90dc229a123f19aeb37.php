<?php

/* EspritDemoBundle::layout.html.twig */
class __TwigTemplate_a2e86e0fb083183245d99206cf190b8fd3137d2b24dbc90dc229a123f19aeb37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'auth' => array($this, 'block_auth'),
            'nav1' => array($this, 'block_nav1'),
            'body' => array($this, 'block_body'),
            'ListePrest' => array($this, 'block_ListePrest'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/grid.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"> 
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tms-0.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tms_presets.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
        \t<img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
        </a>
    </div>
\t<![endif]-->
    <!--[if lt IE 9]>
   \t\t<script type=\"text/javascript\" src=\"js/html5.js\"></script>
\t<![endif]-->
</head>
<body id=\"page1\">
\t<!--==============================header=================================-->
    <header>
    \t<div class=\"main\">
                ";
        // line 31
        $this->displayBlock('auth', $context, $blocks);
        // line 33
        echo "        \t<h1>
                    <a > </a>
                    <em>Pour vos mariage</em>
                </h1>
            
        </div>
       
  
        <div class=\"menu-row\">
        \t<div class=\"main\">
            \t<div class=\"container_12\">
                \t<div class=\"wrapper\">
                    \t<div class=\"grid_12\">
                        ";
        // line 46
        $this->displayBlock('nav1', $context, $blocks);
        // line 59
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
            
       ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        
    </header>
    
\t<!--==============================content================================-->
    <div id=\"navigbar_1494\"><noscript>Javascript is disable - <a href=\"http://www.supportduweb.com/\">http://www.supportduweb.com/</a> - <a href=\"http://www.supportduweb.com/generateur-barre-navigation-site-html-css-javascript-partage-social-menu-traduction-acces-rapide.html\">Générateur de barres de navigation</a></noscript><script type=\"text/javascript\" src=\"http://services.supportduweb.com/navigbar/1-1494.js\"></script></div>
       ";
        // line 73
        $this->displayBlock('ListePrest', $context, $blocks);
        // line 76
        echo "        <div class=\"main\">
        \t<div class=\"slider-wrapper\">
                <div class=\"slider\">
                    <ul class=\"items\">
                        <li>
                            <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-img1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </li>
                        <li>
                            <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-img2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </li>
                        <li>
                            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-img3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
\t<!--==============================footer=================================-->
    <footer>
        
        <div class=\"main\">
        \t<div class=\"container_12\">
            \t<div class=\"wrapper\">
                \t<div class=\"grid_3 suffix_3\">
                    \t<ul class=\"list-services\">
                        \t<li><a class=\"item-1\" href=\"\"></a></li>
                            <li><a class=\"item-2\" href=\"#\"></a></li>
                            <li><a class=\"item-3\" href=\"#\"></a></li>
                        </ul>
                    </div>
                    <div class=\"grid_5\">
                    \t<span class=\"footer-text\">
                        \t
                   
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type=\"text/javascript\">
\t\t\$(window).load(function() {
\t\t\t\$('.slider')._TMS({
\t\t\t\tduration:1000,
\t\t\t\teasing:'easeOutQuint',
\t\t\t\tpreset:'slideDown',
\t\t\t\tslideshow:7000,
\t\t\t\tbanners:false,
\t\t\t\tpauseOnHover:true,
\t\t\t\tpagination:true,
\t\t\t\tpagNums:false
\t\t\t});
\t\t});
    </script>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 31
    public function block_auth($context, array $blocks = array())
    {
        // line 32
        echo "                    ";
    }

    // line 46
    public function block_nav1($context, array $blocks = array())
    {
        echo "\t
                            <nav>
                                <ul class=\"menu\">
                                    <li><a class=\"active\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("liste_prest");
        echo "\">Mariée</a></li>
                                    <li><a href=\"wedding.html\">Marie</a></li>
                                    <li><a href=\"album.html\">Réception</a></li>
                                    <li><a href=\"links.html\">Animation</a></li>
                                    <li><a href=\"contacts.html\">Gastronomie</a></li>
                                    <li><a href=\"contacts.html\">Photographe</a></li>
                                    <li><a href=\"contacts.html\">Lune de Miel</a></li>
                                </ul>
                                </nav>
                            ";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "
        ";
    }

    // line 73
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 74
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 74,  228 => 73,  223 => 66,  206 => 49,  195 => 32,  192 => 31,  137 => 87,  118 => 76,  97 => 46,  34 => 6,  65 => 21,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 65,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 65,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 18,  38 => 7,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 84,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 46,  193 => 73,  189 => 71,  187 => 4,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 81,  122 => 43,  116 => 73,  112 => 42,  109 => 68,  106 => 36,  103 => 32,  99 => 59,  95 => 28,  92 => 21,  86 => 28,  82 => 33,  80 => 31,  73 => 19,  64 => 17,  60 => 6,  57 => 14,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
