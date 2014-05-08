<?php

/* EspritDemoBundle:Default:Statistique.html.twig */
class __TwigTemplate_22d65c10a832e9a31aabafe3ba5400298f80844cf27ef842b342818967acea4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    ";
        // line 7
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>
<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Default:Statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  37 => 5,  33 => 4,  28 => 3,);
    }
}
