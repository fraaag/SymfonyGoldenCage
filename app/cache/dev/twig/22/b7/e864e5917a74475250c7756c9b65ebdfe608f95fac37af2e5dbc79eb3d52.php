<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_22b7e864e5917a74475250c7756c9b65ebdfe608f95fac37af2e5dbc79eb3d52 extends Twig_Template
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
        echo "        <traces>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  75 => 17,  68 => 14,  87 => 20,  21 => 2,  88 => 6,  78 => 40,  46 => 11,  28 => 3,  201 => 92,  183 => 82,  171 => 73,  166 => 71,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  24 => 3,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  176 => 64,  173 => 74,  168 => 72,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  112 => 42,  99 => 30,  73 => 19,  33 => 5,  54 => 11,  22 => 2,  164 => 60,  162 => 59,  157 => 56,  145 => 46,  139 => 45,  123 => 47,  106 => 33,  96 => 31,  92 => 21,  83 => 25,  80 => 19,  43 => 8,  365 => 141,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 131,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  309 => 120,  305 => 119,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  285 => 111,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 102,  251 => 101,  248 => 100,  246 => 32,  239 => 97,  228 => 88,  225 => 87,  219 => 84,  213 => 82,  211 => 81,  204 => 78,  197 => 74,  174 => 67,  158 => 67,  148 => 60,  143 => 59,  138 => 57,  134 => 56,  131 => 42,  127 => 54,  116 => 36,  94 => 22,  49 => 19,  38 => 6,  270 => 4,  268 => 107,  264 => 2,  253 => 1,  243 => 98,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 77,  198 => 66,  196 => 90,  192 => 64,  189 => 71,  187 => 84,  185 => 59,  182 => 68,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 66,  167 => 48,  165 => 64,  163 => 70,  160 => 44,  156 => 66,  154 => 54,  137 => 37,  120 => 40,  115 => 43,  113 => 44,  111 => 38,  108 => 37,  100 => 23,  95 => 28,  90 => 20,  81 => 15,  65 => 83,  47 => 18,  35 => 7,  30 => 3,  129 => 59,  117 => 44,  109 => 34,  107 => 52,  105 => 40,  103 => 32,  97 => 47,  93 => 9,  89 => 20,  86 => 28,  84 => 16,  82 => 22,  79 => 18,  72 => 16,  69 => 25,  66 => 15,  64 => 12,  62 => 23,  57 => 14,  55 => 13,  39 => 8,  34 => 4,  53 => 10,  50 => 8,  45 => 8,  40 => 8,  37 => 10,  67 => 19,  60 => 13,  52 => 21,  44 => 10,  41 => 7,  101 => 24,  98 => 40,  91 => 31,  77 => 36,  74 => 14,  56 => 9,  51 => 12,  48 => 9,  42 => 6,  29 => 4,  32 => 6,  27 => 4,  25 => 3,  20 => 11,  36 => 7,  31 => 5,  26 => 3,  23 => 12,  19 => 1,);
    }
}
