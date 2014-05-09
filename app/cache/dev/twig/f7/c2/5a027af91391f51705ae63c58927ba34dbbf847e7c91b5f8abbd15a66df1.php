<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_f7c25a027af91391f51705ae63c58927ba34dbbf847e7c91b5f8abbd15a66df1 extends Twig_Template
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
        echo "<strong>Explanation:</strong>

<table style=\"margin: 5px 0;\">
    <thead>
        <tr>
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 7
            echo "                <th>";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr>
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                <td>";
                echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 86,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  140 => 55,  132 => 51,  128 => 49,  61 => 13,  273 => 96,  269 => 94,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  217 => 75,  179 => 69,  159 => 61,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 15,  59 => 14,  85 => 25,  75 => 17,  68 => 14,  87 => 25,  21 => 2,  88 => 6,  78 => 21,  46 => 7,  28 => 3,  201 => 92,  183 => 82,  171 => 61,  166 => 71,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  24 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  176 => 64,  173 => 65,  168 => 72,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  112 => 42,  99 => 31,  73 => 19,  33 => 4,  54 => 10,  22 => 2,  164 => 59,  162 => 59,  157 => 56,  145 => 46,  139 => 45,  123 => 47,  106 => 33,  96 => 31,  92 => 21,  83 => 25,  80 => 19,  43 => 8,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  309 => 97,  305 => 95,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  285 => 89,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 92,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 88,  225 => 87,  219 => 76,  213 => 82,  211 => 81,  204 => 72,  197 => 74,  174 => 67,  158 => 67,  148 => 60,  143 => 56,  138 => 54,  134 => 56,  131 => 52,  127 => 54,  116 => 41,  94 => 28,  49 => 19,  38 => 6,  270 => 4,  268 => 85,  264 => 84,  253 => 1,  243 => 88,  233 => 81,  221 => 77,  212 => 74,  210 => 73,  208 => 68,  206 => 71,  202 => 77,  198 => 66,  196 => 90,  192 => 64,  189 => 71,  187 => 84,  185 => 59,  182 => 66,  180 => 56,  177 => 65,  175 => 53,  172 => 51,  169 => 60,  167 => 48,  165 => 64,  163 => 62,  160 => 44,  156 => 66,  154 => 58,  137 => 37,  120 => 40,  115 => 43,  113 => 44,  111 => 37,  108 => 36,  100 => 23,  95 => 28,  90 => 20,  81 => 15,  65 => 83,  47 => 9,  35 => 5,  30 => 7,  129 => 59,  117 => 44,  109 => 34,  107 => 36,  105 => 40,  103 => 32,  97 => 47,  93 => 28,  89 => 20,  86 => 28,  84 => 16,  82 => 22,  79 => 18,  72 => 16,  69 => 25,  66 => 15,  64 => 17,  62 => 23,  57 => 11,  55 => 15,  39 => 9,  34 => 4,  53 => 10,  50 => 10,  45 => 8,  40 => 8,  37 => 10,  67 => 15,  60 => 13,  52 => 21,  44 => 12,  41 => 7,  101 => 32,  98 => 31,  91 => 27,  77 => 36,  74 => 14,  56 => 9,  51 => 14,  48 => 13,  42 => 7,  29 => 3,  32 => 4,  27 => 4,  25 => 3,  20 => 11,  36 => 5,  31 => 5,  26 => 6,  23 => 12,  19 => 1,);
    }
}
