<?php

/* BackCardBundle:Form:update.mini.html.twig */
class __TwigTemplate_495bee9ddbacaa9b9566c97127e902512db72e65c24dad669c857aa16e89414e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontWebsiteBundle:Default:card.html.twig");

        $this->blocks = array(
            'admincard' => array($this, 'block_admincard'),
            'jsplus' => array($this, 'block_jsplus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontWebsiteBundle:Default:card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_admincard($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 5
            echo "\t\t<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<form method=\"post\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_website_card_admin_update", array("id" => $this->getAttribute((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t<table class=\"table-form\">
\t\t<tr>
\t\t\t<th>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label" => "Nom"));
        echo "</th>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biotherapy"), 'label', array("label" => "Biotherapie"));
        echo "</th>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biotherapy"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biotherapy"), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation"), 'label', array("label" => "Situation clinique"));
        echo "</th>
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation"), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation2"), 'label', array("label" => "Situation clinique 2"));
        echo "</th>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation2"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clinicalSituation2"), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th colspan=\"2\" style=\"text-align:center\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textMDShort"), 'label', array("label" => "Fiche médecin résumé"));
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textMDShort"), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th colspan=\"2\" style=\"text-align:center\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textPatient"), 'label', array("label" => "Fiche patient"));
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textPatient"), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th colspan=\"2\" style=\"text-align:center\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textMDFull"), 'label', array("label" => "Fiche médecin détaillée"));
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textMDFull"), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th colspan=\"2\" style=\"text-align:center\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textRef"), 'label', array("label" => "Références"));
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textRef"), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</th>
\t\t\t<td>
\t\t\t\t<input type=\"submit\" class=\"btn success left\" />
\t\t\t\t<a class=\"btn cancel right\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("front_website_card_logout");
        echo "\">Annuler & se déconnecter</a>
\t\t\t</td>
\t\t</tr>
\t</table>
\t</form>
";
    }

    // line 62
    public function block_jsplus($context, array $blocks = array())
    {
        // line 63
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$('#main-type li#green').click();
\t\t\t
\t\t\ttinymce.init({
\t\t\t    selector: \"textarea.edit\",
\t\t\t    plugins: \"code fullscreen\",
\t\t\t    toolbar: \"styleselect | undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent  | code fullscreen\",
\t\t\t    toolbar_items_size: 'small',
\t\t\t    style_formats: [
\t\t        \t{title: 'Header', block: 'h3', styles: {color: '#fffff', fontSize:'16px'}},
\t\t        \t{title: 'Normal', block: 'p', styles: {color: '#fffff', fontSize:'12px'}},
\t\t        \t{title: 'Bleu', block: 'p', styles: {color: '#048ef3', fontSize:'12px'}}
\t\t        ],
\t\t\t    menubar: false,
\t\t\t    statusbar: false
\t\t\t});
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "BackCardBundle:Form:update.mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 63,  180 => 62,  170 => 55,  164 => 52,  158 => 49,  152 => 46,  146 => 43,  140 => 40,  134 => 37,  128 => 34,  122 => 31,  116 => 28,  109 => 25,  105 => 24,  98 => 21,  94 => 20,  87 => 17,  83 => 16,  76 => 13,  72 => 12,  64 => 9,  60 => 8,  57 => 7,  37 => 5,  32 => 4,  29 => 3,);
    }
}
