<?php

/* EspritDemoBundle::layout.html.twig */
class __TwigTemplate_29ca40f81b93950ce3e5b26101556beb8cf5168dc16c8dc594e466dbf4c170d4 extends Twig_Template
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
            <div float:left>
                ";
        // line 64
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 65
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 70
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Modifier profil</a>
                ";
        }
        // line 73
        echo "            </div>
            
        </div>
            
       ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "        
    </header>
    
\t<!--==============================content================================-->
    <div id=\"navigbar_1494\"><noscript>Javascript is disable - <a href=\"http://www.supportduweb.com/\">http://www.supportduweb.com/</a> - <a href=\"http://www.supportduweb.com/generateur-barre-navigation-site-html-css-javascript-partage-social-menu-traduction-acces-rapide.html\">Générateur de barres de navigation</a></noscript><script type=\"text/javascript\" src=\"http://services.supportduweb.com/navigbar/1-1494.js\"></script></div>
       ";
        // line 85
        $this->displayBlock('ListePrest', $context, $blocks);
        // line 88
        echo "
    
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
</html>
";
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

    // line 77
    public function block_body($context, array $blocks = array())
    {
        // line 78
        echo "
        ";
    }

    // line 85
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 86
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
        return array (  241 => 86,  238 => 85,  233 => 78,  230 => 77,  216 => 49,  209 => 46,  205 => 32,  202 => 31,  197 => 4,  152 => 88,  150 => 85,  143 => 80,  141 => 77,  135 => 73,  130 => 71,  123 => 70,  117 => 67,  113 => 66,  108 => 65,  106 => 64,  99 => 59,  97 => 46,  82 => 33,  80 => 31,  61 => 15,  57 => 14,  49 => 12,  42 => 8,  38 => 7,  34 => 6,  24 => 1,  65 => 20,  59 => 17,  53 => 13,  43 => 8,  37 => 6,  32 => 5,  29 => 4,);
    }
}
