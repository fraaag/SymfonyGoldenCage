<?php

/* EspritDemoBundle:Produit:edit.html.twig */
class __TwigTemplate_ef6cd98f842aa5333cf16e259a955412dd17fad79d3ddbe7cb4412c1a6f6d743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Produit edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Produit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 66,  126 => 61,  114 => 42,  58 => 26,  65 => 21,  266 => 86,  263 => 85,  255 => 77,  234 => 46,  222 => 4,  165 => 96,  152 => 88,  150 => 85,  97 => 46,  34 => 6,  70 => 25,  53 => 18,  223 => 77,  215 => 69,  212 => 68,  205 => 31,  200 => 4,  155 => 76,  148 => 71,  146 => 68,  118 => 57,  113 => 66,  100 => 37,  81 => 34,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 78,  252 => 80,  247 => 78,  241 => 49,  229 => 73,  220 => 76,  214 => 69,  177 => 65,  169 => 60,  140 => 64,  132 => 51,  128 => 61,  107 => 38,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 32,  227 => 31,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 32,  204 => 72,  179 => 69,  159 => 93,  143 => 80,  135 => 73,  119 => 48,  102 => 46,  71 => 29,  67 => 26,  63 => 24,  59 => 18,  38 => 7,  94 => 34,  89 => 36,  85 => 38,  75 => 30,  68 => 14,  56 => 21,  87 => 33,  21 => 2,  26 => 6,  93 => 28,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 99,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 67,  105 => 40,  91 => 34,  62 => 23,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 31,  72 => 16,  69 => 11,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 79,  145 => 46,  139 => 56,  131 => 52,  123 => 70,  120 => 45,  115 => 43,  111 => 55,  108 => 65,  101 => 32,  98 => 45,  96 => 46,  83 => 32,  74 => 30,  66 => 15,  55 => 15,  52 => 15,  50 => 21,  43 => 9,  41 => 8,  35 => 6,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 71,  125 => 44,  122 => 58,  116 => 54,  112 => 43,  109 => 50,  106 => 64,  103 => 37,  99 => 36,  95 => 42,  92 => 35,  86 => 28,  82 => 31,  80 => 31,  73 => 19,  64 => 26,  60 => 22,  57 => 18,  54 => 25,  51 => 17,  48 => 16,  45 => 17,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
