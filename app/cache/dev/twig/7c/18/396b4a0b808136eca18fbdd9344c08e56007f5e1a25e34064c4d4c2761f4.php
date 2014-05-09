<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7c18396b4a0b808136eca18fbdd9344c08e56007f5e1a25e34064c4d4c2761f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  76 => 29,  58 => 18,  216 => 49,  205 => 32,  70 => 25,  222 => 78,  207 => 32,  161 => 80,  152 => 88,  150 => 85,  126 => 61,  104 => 48,  114 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 86,  258 => 81,  252 => 80,  247 => 78,  241 => 86,  229 => 73,  220 => 70,  214 => 70,  140 => 55,  132 => 51,  128 => 49,  61 => 27,  273 => 96,  269 => 94,  240 => 86,  238 => 85,  235 => 74,  230 => 77,  227 => 81,  224 => 71,  217 => 75,  179 => 69,  159 => 77,  135 => 54,  119 => 48,  102 => 46,  71 => 29,  63 => 16,  59 => 17,  85 => 38,  75 => 30,  68 => 28,  87 => 25,  21 => 2,  88 => 38,  78 => 34,  46 => 14,  28 => 4,  201 => 92,  183 => 82,  171 => 61,  166 => 71,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  24 => 7,  209 => 46,  203 => 78,  199 => 4,  193 => 73,  176 => 64,  173 => 65,  168 => 72,  149 => 51,  147 => 58,  144 => 65,  141 => 70,  133 => 55,  130 => 71,  125 => 44,  122 => 58,  112 => 43,  99 => 46,  73 => 19,  33 => 4,  54 => 16,  22 => 2,  164 => 59,  162 => 59,  157 => 56,  145 => 46,  139 => 56,  123 => 70,  106 => 64,  96 => 46,  92 => 42,  83 => 31,  80 => 30,  43 => 7,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  309 => 97,  305 => 95,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  285 => 89,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 92,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 88,  225 => 87,  219 => 77,  213 => 82,  211 => 69,  204 => 31,  197 => 4,  174 => 67,  158 => 67,  148 => 60,  143 => 80,  138 => 54,  134 => 66,  131 => 52,  127 => 54,  116 => 43,  94 => 34,  49 => 14,  38 => 6,  270 => 4,  268 => 85,  264 => 84,  253 => 1,  243 => 88,  233 => 78,  221 => 77,  212 => 74,  210 => 73,  208 => 68,  206 => 71,  202 => 31,  198 => 66,  196 => 90,  192 => 64,  189 => 71,  187 => 84,  185 => 59,  182 => 66,  180 => 56,  177 => 65,  175 => 53,  172 => 51,  169 => 60,  167 => 48,  165 => 64,  163 => 62,  160 => 44,  156 => 66,  154 => 58,  137 => 37,  120 => 45,  115 => 56,  113 => 66,  111 => 37,  108 => 65,  100 => 27,  95 => 42,  90 => 33,  81 => 24,  65 => 20,  47 => 12,  35 => 5,  30 => 2,  129 => 59,  117 => 67,  109 => 50,  107 => 38,  105 => 37,  103 => 28,  97 => 34,  93 => 29,  89 => 32,  86 => 32,  84 => 37,  82 => 31,  79 => 31,  72 => 21,  69 => 11,  66 => 15,  64 => 26,  62 => 19,  57 => 10,  55 => 15,  39 => 7,  34 => 6,  53 => 18,  50 => 21,  45 => 8,  40 => 6,  37 => 4,  67 => 20,  60 => 22,  52 => 15,  44 => 8,  41 => 7,  101 => 35,  98 => 45,  91 => 27,  77 => 36,  74 => 30,  56 => 21,  51 => 17,  48 => 12,  42 => 9,  29 => 2,  32 => 15,  27 => 4,  25 => 3,  20 => 1,  36 => 10,  31 => 4,  26 => 12,  23 => 4,  19 => 2,);
    }
}
