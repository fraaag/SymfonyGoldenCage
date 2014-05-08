<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_7d786d04abed90e11c57ee2a6d7298eb80eb9d3ac1d26d6d7e3f9e674d827e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  90 => 32,  20 => 1,  84 => 29,  110 => 22,  76 => 17,  134 => 66,  126 => 61,  114 => 42,  58 => 18,  65 => 20,  266 => 86,  263 => 85,  255 => 77,  234 => 46,  222 => 4,  165 => 96,  152 => 88,  150 => 85,  97 => 34,  34 => 7,  70 => 25,  53 => 11,  223 => 77,  215 => 69,  212 => 68,  205 => 31,  200 => 4,  155 => 76,  148 => 71,  146 => 68,  118 => 57,  113 => 66,  100 => 37,  81 => 26,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 78,  252 => 80,  247 => 78,  241 => 49,  229 => 73,  220 => 76,  214 => 69,  177 => 65,  169 => 60,  140 => 64,  132 => 51,  128 => 49,  107 => 38,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 32,  227 => 31,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 32,  204 => 72,  179 => 69,  159 => 93,  143 => 80,  135 => 54,  119 => 48,  102 => 17,  71 => 29,  67 => 18,  63 => 16,  59 => 13,  38 => 6,  94 => 34,  89 => 32,  85 => 38,  75 => 30,  68 => 14,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 27,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 99,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 34,  62 => 16,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 31,  72 => 21,  69 => 11,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 79,  145 => 46,  139 => 56,  131 => 52,  123 => 70,  120 => 20,  115 => 43,  111 => 55,  108 => 19,  101 => 35,  98 => 45,  96 => 46,  83 => 31,  74 => 30,  66 => 15,  55 => 15,  52 => 10,  50 => 21,  43 => 7,  41 => 5,  35 => 5,  32 => 15,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 71,  125 => 44,  122 => 58,  116 => 43,  112 => 43,  109 => 50,  106 => 64,  103 => 37,  99 => 46,  95 => 29,  92 => 42,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 16,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 3,  30 => 3,);
    }
}
