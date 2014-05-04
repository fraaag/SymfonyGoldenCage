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
                                    <li><a class=\"active\" href=\"";
        // line 46
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
       ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        
    </header>
    
\t<!--==============================content================================-->
    
       ";
        // line 69
        $this->displayBlock('ListePrest', $context, $blocks);
        // line 72
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
                    <div class=\"grid_5\">
                    \t<span class=\"footer-text\">
                        \t<span>Laura &amp; John &copy; 2012</span>
                            Website Template by <a class=\"link\" href=\"http://www.templatemonster.com/\" target=\"_blank\" rel=\"nofollow\">TemplateMonster.com</a>
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

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "
        ";
    }

    // line 69
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 70
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
        return array (  191 => 70,  188 => 69,  183 => 62,  180 => 61,  176 => 32,  173 => 31,  168 => 4,  125 => 72,  123 => 69,  116 => 64,  114 => 61,  96 => 46,  81 => 33,  79 => 31,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  41 => 8,  33 => 6,  28 => 4,  23 => 1,  65 => 21,  59 => 18,  53 => 15,  43 => 9,  37 => 7,  32 => 6,  29 => 5,);
    }
}
