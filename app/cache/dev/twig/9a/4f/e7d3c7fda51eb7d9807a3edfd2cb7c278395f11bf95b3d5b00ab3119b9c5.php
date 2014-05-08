<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_9a4fe7d3c7fda51eb7d9807a3edfd2cb7c278395f11bf95b3d5b00ab3119b9c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  84 => 37,  110 => 40,  76 => 29,  134 => 66,  126 => 61,  114 => 42,  58 => 18,  113 => 54,  81 => 24,  100 => 27,  70 => 25,  23 => 4,  231 => 74,  228 => 73,  223 => 66,  206 => 49,  195 => 32,  192 => 31,  137 => 87,  118 => 76,  97 => 34,  34 => 7,  65 => 17,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 65,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 54,  119 => 48,  102 => 46,  71 => 20,  67 => 20,  63 => 24,  59 => 20,  38 => 6,  94 => 34,  89 => 32,  85 => 38,  75 => 30,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 38,  78 => 34,  46 => 14,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 27,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 25,  72 => 21,  69 => 11,  47 => 10,  40 => 11,  37 => 7,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 56,  131 => 84,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 45,  96 => 31,  83 => 31,  74 => 30,  66 => 15,  55 => 15,  52 => 10,  50 => 11,  43 => 7,  41 => 8,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 46,  193 => 73,  189 => 71,  187 => 4,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 41,  125 => 81,  122 => 43,  116 => 43,  112 => 43,  109 => 50,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 42,  86 => 29,  82 => 31,  80 => 30,  73 => 19,  64 => 26,  60 => 15,  57 => 12,  54 => 12,  51 => 17,  48 => 9,  45 => 8,  42 => 9,  39 => 7,  36 => 10,  33 => 6,  30 => 2,);
    }
}
