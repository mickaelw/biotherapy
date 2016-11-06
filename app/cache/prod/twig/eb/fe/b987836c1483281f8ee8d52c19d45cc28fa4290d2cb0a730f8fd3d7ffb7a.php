<?php

/* BackCardBundle:Form:add.html.twig */
class __TwigTemplate_ebfeb987836c1483281f8ee8d52c19d45cc28fa4290d2cb0a730f8fd3d7ffb7a extends Twig_Template
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
\t\t<h1>Ajout d'une fiche</h1>
\t\t<div id=\"section-content\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("back_card_add");
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
\t\t\t\t\t<th>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biotherapy"), 'label', array("label" => "Biotherapie"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biotherapy"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biotherapy"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation"), 'label', array("label" => "Situation clinique"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation2"), 'label', array("label" => "Situation clinique 2"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation2"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation2"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\" style=\"text-align:center\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textMDShort"), 'label', array("label" => "Fiche médecin résumé"));
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textMDShort"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\" style=\"text-align:center\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textPatient"), 'label', array("label" => "Fiche patient"));
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textPatient"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\" style=\"text-align:center\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textMDFull"), 'label', array("label" => "Fiche médecin détaillée"));
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textMDFull"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\" style=\"text-align:center\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textRef"), 'label', array("label" => "Références"));
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textRef"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn success left\" />
\t\t\t\t\t\t<a class=\"btn cancel right\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("back_card_homepage");
        echo "\">Annuler</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</form>
\t\t</div>
\t</section>
";
    }

    // line 70
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackCardBundle:Form:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 70,  165 => 61,  159 => 58,  153 => 55,  147 => 52,  141 => 49,  135 => 46,  129 => 43,  123 => 40,  117 => 37,  111 => 34,  104 => 31,  100 => 30,  93 => 27,  89 => 26,  82 => 23,  78 => 22,  71 => 19,  67 => 18,  59 => 15,  55 => 14,  49 => 10,  47 => 9,  44 => 8,  41 => 7,  36 => 5,  31 => 3,);
    }
}
