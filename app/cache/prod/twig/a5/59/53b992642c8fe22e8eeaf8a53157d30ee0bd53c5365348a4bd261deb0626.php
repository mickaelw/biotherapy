<?php

/* FrontWebsiteBundle:Form:form.html.twig */
class __TwigTemplate_a55953b992642c8fe22e8eeaf8a53157d30ee0bd53c5365348a4bd261deb0626 extends Twig_Template
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
        echo "<div id=\"main-search\">
\t<form method=\"post\" action=\"#\">
\t\t<div class=\"";
        // line 3
        if (($this->getAttribute((isset($context["ua"]) ? $context["ua"] : $this->getContext($context, "ua")), "platform") == "Macintosh")) {
            echo "selectMac";
        } else {
            echo "select";
        }
        echo "\">
\t\t\t<select name=\"search-biotherapy\" data-ajax=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("front_website_ajax", array("param" => "select"));
        echo "\" >
\t\t\t\t<option value=\" \" selected=\"selected\">Biothérapies</option>
\t\t\t\t<option value=\"0\">---</option>
\t\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listBio"]) ? $context["listBio"] : $this->getContext($context, "listBio")));
        foreach ($context['_seq'] as $context["_key"] => $context["bio"]) {
            // line 8
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bio"]) ? $context["bio"] : $this->getContext($context, "bio")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bio"]) ? $context["bio"] : $this->getContext($context, "bio")), "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t</select>
\t\t</div>
\t\t<div id=\"selectCS\">
\t\t\t<div class=\"";
        // line 13
        if (($this->getAttribute((isset($context["ua"]) ? $context["ua"] : $this->getContext($context, "ua")), "platform") == "Macintosh")) {
            echo "selectMac";
        } else {
            echo "select";
        }
        echo "\">
\t\t\t\t<select name=\"search-clinicalSituation\" data-ajax=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("front_website_ajax", array("param" => "select"));
        echo "\" >
\t\t\t\t\t<option value=\" \" selected=\"selected\">Situations cliniques</option>
\t\t\t\t\t<option value=\"0\">---</option>
\t\t\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCS"]) ? $context["listCS"] : $this->getContext($context, "listCS")));
        foreach ($context['_seq'] as $context["_key"] => $context["cs"]) {
            // line 18
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cs"]) ? $context["cs"] : $this->getContext($context, "cs")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cs"]) ? $context["cs"] : $this->getContext($context, "cs")), "name"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<button id=\"search-refresh\" data-ajax=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("front_website_ajax", array("param" => "search"));
        echo "\" ></button>
\t\t<input type=\"text\" name=\"search-word\" id=\"autocomplete\" />
\t\t<button id=\"search-ajax\" data-ajax=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("front_website_ajax", array("param" => "search"));
        echo "\" ></button>
\t</form>
</div>
<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "FrontWebsiteBundle:Form:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  91 => 23,  86 => 20,  75 => 18,  71 => 17,  65 => 14,  57 => 13,  52 => 10,  41 => 8,  37 => 7,  31 => 4,  23 => 3,  19 => 1,);
    }
}
