<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_a3a6f8e74711e77369691ff6b70c4d36f909789622f5f70dbf8b8feb05009baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "name"), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo "</h3>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  60 => 23,  52 => 20,  44 => 19,  41 => 18,  101 => 25,  98 => 24,  91 => 28,  77 => 27,  74 => 24,  56 => 23,  51 => 22,  48 => 21,  42 => 18,  29 => 15,  32 => 16,  27 => 13,  25 => 12,  20 => 11,  36 => 17,  31 => 14,  26 => 14,  23 => 12,  19 => 11,);
    }
}
