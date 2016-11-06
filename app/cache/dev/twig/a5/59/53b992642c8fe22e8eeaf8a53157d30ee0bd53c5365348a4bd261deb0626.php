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
        return array (  96 => 25,  86 => 20,  75 => 18,  71 => 17,  65 => 14,  57 => 13,  52 => 10,  41 => 8,  37 => 7,  23 => 3,  19 => 1,  286 => 108,  280 => 93,  275 => 43,  270 => 35,  265 => 15,  259 => 5,  254 => 109,  252 => 108,  248 => 107,  244 => 106,  239 => 104,  235 => 103,  231 => 102,  227 => 101,  223 => 100,  219 => 99,  215 => 98,  209 => 94,  207 => 93,  195 => 84,  191 => 83,  185 => 80,  167 => 64,  158 => 61,  148 => 60,  145 => 59,  141 => 58,  131 => 51,  126 => 49,  117 => 43,  114 => 42,  105 => 40,  101 => 39,  94 => 35,  91 => 23,  89 => 33,  76 => 23,  70 => 20,  64 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  31 => 4,  25 => 1,);
    }
}
