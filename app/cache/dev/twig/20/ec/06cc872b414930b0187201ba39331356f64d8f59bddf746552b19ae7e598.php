<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_20ec06cc872b414930b0187201ba39331356f64d8f59bddf746552b19ae7e598 extends Twig_Template
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
        echo "    ";
        echo $this->getAttribute($this->getContext($context, "settings"), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  60 => 23,  52 => 20,  44 => 19,  41 => 18,  101 => 25,  98 => 24,  91 => 28,  77 => 27,  74 => 24,  56 => 23,  51 => 22,  48 => 21,  42 => 18,  29 => 15,  32 => 12,  27 => 13,  25 => 12,  20 => 11,  36 => 17,  31 => 14,  26 => 14,  23 => 12,  19 => 11,);
    }
}
