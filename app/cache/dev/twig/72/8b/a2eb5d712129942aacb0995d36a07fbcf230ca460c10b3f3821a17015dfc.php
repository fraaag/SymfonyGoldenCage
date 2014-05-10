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
        return array (  222 => 78,  219 => 77,  214 => 70,  211 => 69,  207 => 32,  204 => 31,  199 => 4,  161 => 80,  159 => 77,  152 => 72,  150 => 69,  144 => 65,  139 => 63,  132 => 62,  126 => 59,  122 => 58,  117 => 57,  115 => 56,  104 => 48,  100 => 47,  96 => 46,  81 => 33,  79 => 31,  56 => 14,  52 => 13,  48 => 12,  41 => 8,  37 => 7,  33 => 6,  23 => 1,  114 => 45,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  68 => 28,  64 => 27,  60 => 15,  57 => 25,  53 => 24,  31 => 4,  28 => 4,);
    }
}
