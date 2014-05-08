<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_95df831b37fe81085f540b32fae0c6f59cc8c412eb5ff7e729ee42c2f0852e43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  84 => 37,  110 => 40,  76 => 29,  134 => 66,  126 => 61,  114 => 42,  58 => 18,  113 => 54,  81 => 24,  100 => 27,  70 => 25,  23 => 3,  231 => 74,  228 => 73,  223 => 66,  206 => 49,  195 => 32,  192 => 31,  137 => 87,  118 => 76,  97 => 34,  34 => 6,  65 => 21,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 65,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 54,  119 => 48,  102 => 46,  71 => 29,  67 => 20,  63 => 24,  59 => 20,  38 => 6,  94 => 34,  89 => 32,  85 => 38,  75 => 30,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 29,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 27,  62 => 19,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 31,  72 => 21,  69 => 11,  47 => 12,  40 => 11,  37 => 7,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 56,  131 => 84,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 45,  96 => 31,  83 => 31,  74 => 30,  66 => 15,  55 => 15,  52 => 15,  50 => 21,  43 => 9,  41 => 7,  35 => 4,  32 => 5,  29 => 8,  209 => 82,  203 => 78,  199 => 46,  193 => 73,  189 => 71,  187 => 4,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 41,  125 => 81,  122 => 43,  116 => 43,  112 => 43,  109 => 50,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 42,  86 => 28,  82 => 31,  80 => 30,  73 => 19,  64 => 26,  60 => 22,  57 => 14,  54 => 16,  51 => 17,  48 => 9,  45 => 17,  42 => 10,  39 => 10,  36 => 10,  33 => 6,  30 => 3,);
    }
}
