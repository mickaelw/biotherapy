<?php

/* FrontWebsiteBundle:Default:search.html.twig */
class __TwigTemplate_f59bdb96fc8f813e75e75e8372a6c27f5ceb012831858f931f5612e53f859775 extends Twig_Template
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
            echo "\t<span id=\"search-icon-download\" rel=\"#overlay-pdf\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("front_website_pdf");
            echo "\" title=\"Télécharger les résultats de la recherche\"></span>
\t
\t<div id=\"search-postit-download\">
\t\t<p>Télécharger les résultats de la recherche</p>
\t\t<a class=\"btn pdf-vPat\" href=\"javascript:;\" target=\"_blank\">Version patient</a>
\t\t<a class=\"btn pdf-vMed\" href=\"javascript:;\" target=\"_blank\">Version médecin</a>
\t</div>
";
        }
        // line 10
        echo "<p id=\"search-nb-result\">";
        if ((!twig_test_empty((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list"))))) {
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list"))), "html", null, true);
            echo " fiche";
            if ((twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list"))) > 1)) {
                echo "s";
            }
            echo " trouvée";
            if ((twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list"))) > 1)) {
                echo "s";
            }
        }
        echo "</p>
<div class=\"clear\"></div>
<div class=\"line\"></div>
<div id=\"search-content\">
\t";
        // line 14
        if (twig_test_empty((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")))) {
            // line 15
            echo "\t\t<p>Aucune fiche n'a été trouvée.</p>
\t";
        } else {
            // line 17
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 18
                echo "\t\t    <article data-card-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id"), "html", null, true);
                echo "\">
\t\t    \t<h2><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_website_card", array("id" => $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id"), "slug" => $this->env->getExtension('string_extension')->urlFormat($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name")), "format" => "html")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "name"), "html", null, true);
                echo "</a></h2>
\t\t    \t<span class=\"search-card-favorite ";
                // line 20
                if (twig_in_filter($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id"), (isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")))) {
                    echo "selected";
                }
                echo "\" data-ajax=\"";
                echo $this->env->getExtension('routing')->getPath("front_website_ajax", array("param" => "favorite"));
                echo "\" title=\"";
                if (twig_in_filter($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id"), (isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")))) {
                    echo "Retirer à vos favoris";
                } else {
                    echo "Ajouter à vos favoris";
                }
                echo "\"></span>
\t\t    \t<div class=\"clear\"></div>
\t\t    \t<p class=\"search-card-infos\">Biothérapie : ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "biotherapy"), "name"), "html", null, true);
                echo "</p>
\t\t    \t<div class=\"search-card-text\">";
                // line 23
                echo $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "textMDShort");
                echo "</div>
\t\t    </article>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t";
        }
        // line 27
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "FrontWebsiteBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  101 => 26,  92 => 23,  88 => 22,  73 => 20,  67 => 19,  62 => 18,  57 => 17,  53 => 15,  51 => 14,  33 => 10,  21 => 2,  19 => 1,);
    }
}
