<?php

/* EspritDemoBundle::LayoutAdmin.html.twig */
class __TwigTemplate_728ba2eb5d712129942aacb0995d36a07fbcf230ca460c10b3f3821a17015dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'auth' => array($this, 'block_auth'),
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
                        \t<nav>
                                <ul class=\"menu\">
                                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_gest_prest");
        echo "\">Gestion Prestataire</a></li>
                                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("mail_mail_homepage");
        echo "\">Contact</a></li>
                                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("stat");
        echo "\">Statistique</a></li>
                                </ul>
                                </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div float:left>
                ";
        // line 56
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 57
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 62
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Modifier profil</a>
                ";
        }
        // line 65
        echo "            </div>
            
        </div>
            
       ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        
    </header>
    
\t<!--==============================content================================-->
    
       ";
        // line 77
        $this->displayBlock('ListePrest', $context, $blocks);
        // line 80
        echo "        
    
\t<!--==============================footer=================================-->
    <footer>
        <div class=\"main\">
        \t<div class=\"container_12\">
            \t<div class=\"wrapper\">
                \t<div class=\"grid_3 suffix_3\">
                    \t<ul class=\"list-services\">
                        \t<li><a class=\"item-1\" href=\"#\"></a></li>
                            <li><a class=\"item-2\" href=\"#\"></a></li>
                            <li><a class=\"item-3\" href=\"#\"></a></li>
                        </ul>
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

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "
        ";
    }

    // line 77
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 78
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle::LayoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 78,  207 => 32,  161 => 80,  152 => 72,  150 => 69,  126 => 59,  104 => 48,  114 => 45,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 86,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 70,  140 => 55,  132 => 62,  128 => 49,  61 => 13,  273 => 96,  269 => 94,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  217 => 75,  179 => 69,  159 => 77,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 15,  59 => 14,  85 => 25,  75 => 17,  68 => 28,  87 => 25,  21 => 2,  88 => 6,  78 => 30,  46 => 7,  28 => 4,  201 => 92,  183 => 82,  171 => 61,  166 => 71,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  24 => 4,  209 => 82,  203 => 78,  199 => 4,  193 => 73,  176 => 64,  173 => 65,  168 => 72,  149 => 51,  147 => 58,  144 => 65,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  112 => 42,  99 => 31,  73 => 19,  33 => 6,  54 => 10,  22 => 2,  164 => 59,  162 => 59,  157 => 56,  145 => 46,  139 => 63,  123 => 47,  106 => 33,  96 => 46,  92 => 21,  83 => 25,  80 => 19,  43 => 8,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  309 => 97,  305 => 95,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  285 => 89,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 92,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 88,  225 => 87,  219 => 77,  213 => 82,  211 => 69,  204 => 31,  197 => 74,  174 => 67,  158 => 67,  148 => 60,  143 => 56,  138 => 54,  134 => 56,  131 => 52,  127 => 54,  116 => 41,  94 => 34,  49 => 19,  38 => 6,  270 => 4,  268 => 85,  264 => 84,  253 => 1,  243 => 88,  233 => 81,  221 => 77,  212 => 74,  210 => 73,  208 => 68,  206 => 71,  202 => 77,  198 => 66,  196 => 90,  192 => 64,  189 => 71,  187 => 84,  185 => 59,  182 => 66,  180 => 56,  177 => 65,  175 => 53,  172 => 51,  169 => 60,  167 => 48,  165 => 64,  163 => 62,  160 => 44,  156 => 66,  154 => 58,  137 => 37,  120 => 40,  115 => 56,  113 => 44,  111 => 37,  108 => 36,  100 => 47,  95 => 28,  90 => 33,  81 => 33,  65 => 83,  47 => 9,  35 => 5,  30 => 7,  129 => 59,  117 => 57,  109 => 34,  107 => 36,  105 => 40,  103 => 32,  97 => 47,  93 => 28,  89 => 20,  86 => 32,  84 => 16,  82 => 31,  79 => 31,  72 => 16,  69 => 25,  66 => 15,  64 => 27,  62 => 23,  57 => 25,  55 => 15,  39 => 9,  34 => 4,  53 => 24,  50 => 10,  45 => 8,  40 => 8,  37 => 7,  67 => 15,  60 => 15,  52 => 13,  44 => 12,  41 => 8,  101 => 32,  98 => 35,  91 => 27,  77 => 36,  74 => 29,  56 => 14,  51 => 14,  48 => 12,  42 => 7,  29 => 3,  32 => 4,  27 => 4,  25 => 3,  20 => 11,  36 => 5,  31 => 4,  26 => 6,  23 => 1,  19 => 1,);
    }
}
