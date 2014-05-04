<?php

/* EspritDemoBundle:Client:ListePrestataire.html.twig */
class __TwigTemplate_e15a2805196e6d09bb37c643d6d6d392c97f813a8d66e9fb4e2c7249bca33176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'auth' => array($this, 'block_auth'),
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

    // line 3
    public function block_auth($context, array $blocks = array())
    {
        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Authentification</a>
";
    }

    // line 9
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 10
        echo "
    <section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - January 09, 2012!</div>
        <div class=\"main\">
            <div class=\"container_12\">
                    <article class=\"grid_8\">
                    \t<div class=\"indent-left\">
                            <h2 class=\"indent-bot2\">Liste des prestataires </h2>
                            <div class=\"wrapper p3\">
                                <figure class=\"img-indent\">
                                    <p class=\"p1\"><a href=\"#\"><img class=\"img-border1\" src=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/page1-img1.jpg"), "html", null, true);
        echo " alt=\"\"></a><span class=\"clear\"></span></p>
                                    <span class=\"text-1\">John Daniels</span>
                                </figure>
                                <div class=\"extra-wrap\">
                                    <blockquote class=\"q1\">
                                    \t<span class=\"quote-marker1\"></span>
                                        <div class=\"quote-bot\">
                                            <div class=\"quote-top\">
                                                <div class=\"quote\">
                                                    <div class=\"padding\">
                                                        <p class=\"p2\">blablabla
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Client:ListePrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 70,  188 => 69,  180 => 61,  114 => 61,  81 => 33,  23 => 1,  65 => 21,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 18,  38 => 5,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 62,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 31,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 69,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 46,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 9,  41 => 8,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 32,  173 => 31,  168 => 4,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 72,  122 => 43,  116 => 64,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 15,  57 => 19,  54 => 10,  51 => 14,  48 => 12,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
