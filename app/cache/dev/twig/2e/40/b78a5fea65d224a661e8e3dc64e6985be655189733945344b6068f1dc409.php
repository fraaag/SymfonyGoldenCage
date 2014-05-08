<?php

/* MailMailBundle:Default:index.html.twig */
class __TwigTemplate_2e40b78a5fea65d224a661e8e3dc64e6985be655189733945344b6068f1dc409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::LayoutAdmin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDemoBundle::LayoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("mail_mail_homepage");
        echo "\">
        <table>
            <tr>
                <td> Email : </td>
                <td><input type=\"text\" name=\"adr\"   > </td>
            </tr>
            <tr>
                <td> Message :</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <textArea name=\"msg\"   > </textArea>
                </td>
        </table>
   
    <input type=\"submit\" value=\"Envoyer\"  class=\"btn1\" /> 
    </form>
";
    }

    public function getTemplateName()
    {
        return "MailMailBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
