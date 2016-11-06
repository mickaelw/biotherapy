<?php

/* BackClinicalSituationBundle:Form:update.html.twig */
class __TwigTemplate_e95c120975ec633576fbdb8f40fee27c7cbf96d367d8f7216866dd8c1f32dcfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackWebsiteBundle::layout.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackWebsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 9
        $this->env->loadTemplate("BackWebsiteBundle:Default:menu.html.twig")->display($context);
        // line 10
        echo "\t
\t<section id=\"admin\">
\t\t<h1>Modification : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")), "name"), "html", null, true);
        echo "</h1>
\t\t<div id=\"section-content\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_CS_update", array("id" => $this->getAttribute((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t<table class=\"table-form\">
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label" => "Nom"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Situation clinique parente</th>
\t\t\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn success left\" />
\t\t\t\t\t\t<a class=\"btn cancel right\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("back_CS_homepage");
        echo "\">Annuler</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</form>
\t\t</div>
\t</section>
";
    }

    // line 38
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackClinicalSituationBundle:Form:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  94 => 29,  88 => 26,  82 => 23,  74 => 19,  70 => 18,  62 => 15,  58 => 14,  53 => 12,  49 => 10,  47 => 9,  44 => 8,  41 => 7,  36 => 5,  31 => 3,);
    }
}
