<?php

/* FrontWebsiteBundle:Default:card.html.twig */
class __TwigTemplate_6ae97e9eb259aa0e6a63a2f7fe871361e9ea3b6f3e4b20fb6151082d62e0135e extends Twig_Template
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
            'admincard' => array($this, 'block_admincard'),
            'js' => array($this, 'block_js'),
            'jsplus' => array($this, 'block_jsplus'),
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
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name"), "html", null, true);
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/card.less"), "html", null, true);
        echo "\" type=\"text/less\" />
";
    }

    // line 8
    public function block_maintype($context, array $blocks = array())
    {
        // line 9
        echo "\t<ul>
\t\t<li id=\"orange\" data-title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name"), "html", null, true);
        echo " - Fiche patient\" class=\"selected\">Patient</li>
\t\t<li id=\"red\" data-title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name"), "html", null, true);
        echo " - Fiche médecin (résumé)\">Méd. (résumé)</li>
\t\t<li id=\"purple\" data-title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name"), "html", null, true);
        echo " - Fiche médecin (détaillée)\">Méd. (détaillée)</li>
\t\t<li id=\"green\" data-title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name"), "html", null, true);
        echo " - Édition\">Édition</li>
\t\t";
        // line 14
        if ((!twig_test_empty($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "textRef")))) {
            echo "<li id=\"blue\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name"), "html", null, true);
            echo " - Références\">Références</li>";
        }
        // line 15
        echo "\t</ul>
\t<div class=\"line orange\"></div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "\t<article data-card-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id"), "html", null, true);
        echo "\">
\t\t<h2>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name"), "html", null, true);
        echo " - Fiche patient</h2>
\t\t<span class=\"card-favorite ";
        // line 22
        if (twig_in_filter($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id"), (isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")))) {
            echo "selected";
        }
        echo "\" data-ajax=\"";
        echo $this->env->getExtension('routing')->getPath("front_website_ajax", array("param" => "favorite"));
        echo "\"></span>
\t\t<div class=\"clear\"></div>
\t\t<div class=\"line\"></div>
\t\t<div class=\"card-content orange selected\">";
        // line 25
        echo $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "textPatient");
        echo "</div>
\t\t<div class=\"card-content red\">";
        // line 26
        echo $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "textMDShort");
        echo "</div>
\t\t<div class=\"card-content purple\">";
        // line 27
        echo $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "textMDShort");
        echo " ";
        echo $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "textMDFull");
        echo "</div>
\t\t";
        // line 28
        if ((!twig_test_empty($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "textRef")))) {
            echo "<div class=\"card-content blue\">";
            echo $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "textRef");
            echo "</div>";
        }
        // line 29
        echo "\t\t<div class=\"card-content green\">
\t\t\t";
        // line 30
        $this->displayBlock('admincard', $context, $blocks);
        // line 45
        echo "\t\t</div>
\t</article>
";
    }

    // line 30
    public function block_admincard($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["edition"]) ? $context["edition"] : $this->getContext($context, "edition")), "text");
        echo "
\t
\t\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 34
            echo "\t\t\t\t\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t
\t\t\t\t<form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_website_card_admin", array("id" => $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id"), "slug" => $this->env->getExtension('string_extension')->urlFormat($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name")), "format" => "html")), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
\t\t\t\t\t<input type=\"text\" name=\"_username\" placeholder=\"Login\" class=\"input\" />
\t\t\t\t\t<input type=\"password\" name=\"_password\" placeholder=\"Mot de passe\" class=\"input\" />
\t\t\t\t\t<a href=\"\">Mot de passe perdu ?</a>
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"login\" />
\t\t\t\t\t<input type=\"submit\" value=\"OK\" id=\"login-front\" />
\t\t\t\t</form>
\t\t\t";
    }

    // line 49
    public function block_js($context, array $blocks = array())
    {
        // line 50
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/card.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$('select[name=\"search-biotherapy\"]').val(";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "biotherapy"), "id"), "html", null, true);
        echo ");
\t\t\tloadSC(\$('select[name=\"search-biotherapy\"]'),false, function(){
\t\t\t\t\$('select[name=\"search-clinicalSituation\"]').val(";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "clinicalSituation"), "id"), "html", null, true);
        echo ");
\t\t\t\t";
        // line 56
        if ((!(null === $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "clinicalSituation2")))) {
            // line 57
            echo "\t\t\t\t\tloadSC(\$('select[name=\"search-clinicalSituation\"]'),false, function(){
\t\t\t\t\t\t\$('select[name=\"search-clinicalSituation2\"]').val(";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "clinicalSituation2"), "id"), "html", null, true);
            echo ");
\t\t\t\t\t});
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t});
\t\t});
\t</script>
\t";
        // line 64
        $this->displayBlock('jsplus', $context, $blocks);
    }

    public function block_jsplus($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontWebsiteBundle:Default:card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 64,  208 => 61,  202 => 58,  199 => 57,  197 => 56,  193 => 55,  188 => 53,  181 => 50,  178 => 49,  166 => 37,  163 => 36,  152 => 34,  148 => 33,  142 => 31,  139 => 30,  133 => 45,  131 => 30,  128 => 29,  122 => 28,  116 => 27,  112 => 26,  108 => 25,  98 => 22,  94 => 21,  89 => 20,  86 => 19,  80 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  45 => 5,  42 => 4,  34 => 3,);
    }
}
