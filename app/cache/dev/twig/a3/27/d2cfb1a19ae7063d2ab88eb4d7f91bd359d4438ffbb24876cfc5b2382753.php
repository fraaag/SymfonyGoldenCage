<?php

/* EspritDemoBundle:Default:espaceprestataire.html.twig */
class __TwigTemplate_a327d2cfb1a19ae7063d2ab88eb4d7f91bd359d4438ffbb24876cfc5b2382753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'nav1' => array($this, 'block_nav1'),
            'ListePrest' => array($this, 'block_ListePrest'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_nav1($context, array $blocks = array())
    {
        // line 5
        echo "                             <ul class=\"menu\">
                                <li><a  href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">Produits</a></li>
                                    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("prestataire");
        echo "\">Espace perso</a></li>
                                    <li><a>Contact </a></li>
                            </ul>
                            
                              
  ";
    }

    // line 14
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 15
        echo "     
                              
  ";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Default:espaceprestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  53 => 18,  223 => 77,  215 => 69,  212 => 68,  205 => 31,  200 => 4,  155 => 76,  148 => 71,  146 => 68,  118 => 57,  113 => 54,  100 => 37,  81 => 34,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 76,  214 => 69,  177 => 65,  169 => 60,  140 => 64,  132 => 51,  128 => 61,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 32,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 48,  102 => 32,  71 => 26,  67 => 26,  63 => 24,  59 => 20,  38 => 5,  94 => 34,  89 => 20,  85 => 38,  75 => 27,  68 => 14,  56 => 14,  87 => 30,  21 => 2,  26 => 6,  93 => 28,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 16,  69 => 11,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 79,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 55,  108 => 36,  101 => 32,  98 => 45,  96 => 46,  83 => 29,  74 => 30,  66 => 15,  55 => 15,  52 => 15,  50 => 21,  43 => 8,  41 => 8,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 41,  112 => 43,  109 => 34,  106 => 50,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 22,  80 => 29,  73 => 19,  64 => 10,  60 => 22,  57 => 23,  54 => 22,  51 => 14,  48 => 12,  45 => 17,  42 => 10,  39 => 7,  36 => 5,  33 => 6,  30 => 7,);
    }
}
