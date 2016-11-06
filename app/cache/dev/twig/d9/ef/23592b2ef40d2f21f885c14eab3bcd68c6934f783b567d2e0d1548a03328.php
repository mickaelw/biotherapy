<?php

/* FrontWebsiteBundle:Form:select.html.twig */
class __TwigTemplate_d9ef23592b2ef40d2f21f885c14eab3bcd68c6934f783b567d2e0d1548a03328 extends Twig_Template
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
        if ((!twig_test_empty((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list"))))) {
            // line 2
            echo "<div class=\"";
            if (($this->getAttribute((isset($context["ua"]) ? $context["ua"] : $this->getContext($context, "ua")), "platform") == "Macintosh")) {
                echo "selectMac";
            } else {
                echo "select";
            }
            echo " CS2\">
\t<select name=\"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" data-ajax=\"";
            echo $this->env->getExtension('routing')->getPath("front_website_ajax", array("param" => "select"));
            echo "\" >
\t\t<option value=\" \" selected=\"selected\">Situations cliniques</option>
\t\t<option value=\"0\">---</option>
\t\t";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
            foreach ($context['_seq'] as $context["_key"] => $context["cs"]) {
                // line 7
                echo "\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cs"]) ? $context["cs"] : $this->getContext($context, "cs")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cs"]) ? $context["cs"] : $this->getContext($context, "cs")), "name"), "html", null, true);
                echo "</option>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t</select>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "FrontWebsiteBundle:Form:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  42 => 7,  38 => 6,  30 => 3,  21 => 2,  19 => 1,);
    }
}
