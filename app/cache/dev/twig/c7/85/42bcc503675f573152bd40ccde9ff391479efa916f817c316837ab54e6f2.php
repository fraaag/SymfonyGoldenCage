<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_c78542bcc503675f573152bd40ccde9ff391479efa916f817c316837ab54e6f2 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 82,  203 => 78,  199 => 76,  193 => 73,  176 => 64,  173 => 63,  168 => 62,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  112 => 35,  99 => 30,  73 => 19,  33 => 4,  54 => 11,  22 => 2,  164 => 60,  162 => 59,  157 => 56,  145 => 46,  139 => 45,  123 => 41,  106 => 33,  96 => 31,  92 => 27,  83 => 25,  80 => 21,  43 => 9,  365 => 141,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 131,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  309 => 120,  305 => 119,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  285 => 111,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 102,  251 => 101,  248 => 100,  246 => 32,  239 => 97,  228 => 88,  225 => 87,  219 => 84,  213 => 82,  211 => 81,  204 => 78,  197 => 74,  174 => 67,  158 => 62,  148 => 60,  143 => 59,  138 => 57,  134 => 56,  131 => 42,  127 => 54,  116 => 36,  94 => 35,  49 => 9,  38 => 6,  270 => 4,  268 => 107,  264 => 2,  253 => 1,  243 => 98,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 77,  198 => 66,  196 => 65,  192 => 64,  189 => 71,  187 => 70,  185 => 59,  182 => 68,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 66,  167 => 48,  165 => 64,  163 => 45,  160 => 44,  156 => 41,  154 => 54,  137 => 37,  120 => 40,  115 => 39,  113 => 44,  111 => 38,  108 => 37,  100 => 23,  95 => 28,  90 => 20,  81 => 15,  65 => 83,  47 => 18,  35 => 9,  30 => 3,  129 => 59,  117 => 34,  109 => 34,  107 => 52,  105 => 39,  103 => 32,  97 => 47,  93 => 21,  89 => 43,  86 => 24,  84 => 16,  82 => 22,  79 => 21,  72 => 13,  69 => 12,  66 => 11,  64 => 15,  62 => 82,  57 => 12,  55 => 16,  39 => 6,  34 => 4,  53 => 10,  50 => 14,  45 => 8,  40 => 11,  37 => 10,  67 => 19,  60 => 13,  52 => 21,  44 => 18,  41 => 8,  101 => 33,  98 => 32,  91 => 34,  77 => 36,  74 => 14,  56 => 23,  51 => 10,  48 => 9,  42 => 7,  29 => 6,  32 => 9,  27 => 8,  25 => 5,  20 => 11,  36 => 5,  31 => 3,  26 => 14,  23 => 12,  19 => 1,);
    }
}
