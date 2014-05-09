<?php

/* EspritDemoBundle:Administrateur:show.html.twig */
class __TwigTemplate_c3db972ee800e78b90a367bf110cbf79ea2929caa1027f4737d8017ddc138fa8 extends Twig_Template
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
        echo "<h1>Administrateur</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Datederniervisite</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datederniervisite"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "login"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Motdepasse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "motdepasse"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("administrateur");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("administrateur_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Administrateur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  223 => 77,  215 => 69,  205 => 31,  200 => 4,  155 => 76,  146 => 68,  118 => 57,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 86,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 76,  214 => 69,  140 => 64,  132 => 51,  128 => 61,  61 => 13,  273 => 96,  269 => 94,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  217 => 75,  179 => 69,  159 => 61,  135 => 62,  119 => 42,  102 => 32,  71 => 19,  63 => 21,  59 => 20,  85 => 38,  75 => 17,  68 => 14,  87 => 25,  21 => 2,  88 => 6,  78 => 34,  46 => 14,  28 => 3,  201 => 92,  183 => 82,  171 => 61,  166 => 71,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  24 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  176 => 64,  173 => 65,  168 => 72,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  112 => 42,  99 => 40,  73 => 19,  33 => 6,  54 => 10,  22 => 2,  164 => 59,  162 => 59,  157 => 79,  145 => 46,  139 => 45,  123 => 47,  106 => 33,  96 => 46,  92 => 35,  83 => 25,  80 => 29,  43 => 8,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  309 => 97,  305 => 95,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  285 => 89,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 92,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 88,  225 => 87,  219 => 76,  213 => 82,  211 => 81,  204 => 72,  197 => 74,  174 => 67,  158 => 67,  148 => 71,  143 => 56,  138 => 54,  134 => 56,  131 => 52,  127 => 54,  116 => 41,  94 => 28,  49 => 14,  38 => 5,  270 => 4,  268 => 85,  264 => 84,  253 => 1,  243 => 88,  233 => 81,  221 => 77,  212 => 68,  210 => 73,  208 => 32,  206 => 71,  202 => 77,  198 => 66,  196 => 90,  192 => 64,  189 => 71,  187 => 84,  185 => 59,  182 => 66,  180 => 56,  177 => 65,  175 => 53,  172 => 51,  169 => 60,  167 => 48,  165 => 64,  163 => 62,  160 => 44,  156 => 66,  154 => 58,  137 => 37,  120 => 40,  115 => 43,  113 => 56,  111 => 55,  108 => 36,  100 => 47,  95 => 28,  90 => 20,  81 => 33,  65 => 83,  47 => 12,  35 => 6,  30 => 7,  129 => 59,  117 => 44,  109 => 34,  107 => 36,  105 => 40,  103 => 32,  97 => 47,  93 => 28,  89 => 20,  86 => 28,  84 => 16,  82 => 22,  79 => 31,  72 => 16,  69 => 11,  66 => 15,  64 => 10,  62 => 23,  57 => 11,  55 => 15,  39 => 10,  34 => 4,  53 => 18,  50 => 18,  45 => 8,  40 => 8,  37 => 7,  67 => 22,  60 => 22,  52 => 13,  44 => 11,  41 => 8,  101 => 32,  98 => 31,  91 => 27,  77 => 36,  74 => 26,  56 => 14,  51 => 14,  48 => 12,  42 => 10,  29 => 5,  32 => 4,  27 => 4,  25 => 3,  20 => 11,  36 => 5,  31 => 4,  26 => 6,  23 => 1,  19 => 1,);
    }
}
