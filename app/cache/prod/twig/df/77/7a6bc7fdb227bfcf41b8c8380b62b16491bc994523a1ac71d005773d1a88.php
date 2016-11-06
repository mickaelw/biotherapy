<?php

/* FrontWebsiteBundle:Default:index.html.twig */
class __TwigTemplate_df777a6bc7fdb227bfcf41b8c8380b62b16491bc994523a1ac71d005773d1a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontWebsiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'maintype' => array($this, 'block_maintype'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontWebsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
    }

    // line 6
    public function block_maintype($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t<h2>Accueil</h2>
\t<div class=\"clear\"></div>
\t<div class=\"line\"></div>
\t<div id=\"main-content\">";
        // line 12
        echo $this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "text");
        echo "</div>
";
    }

    // line 15
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontWebsiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  57 => 12,  52 => 9,  49 => 8,  44 => 6,  39 => 4,  32 => 3,);
    }
}
