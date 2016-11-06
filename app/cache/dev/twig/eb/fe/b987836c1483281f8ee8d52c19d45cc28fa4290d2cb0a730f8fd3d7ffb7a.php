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
        return array (  165 => 61,  153 => 55,  23 => 4,  20 => 1,  114 => 43,  110 => 34,  76 => 17,  118 => 42,  150 => 65,  137 => 61,  129 => 43,  81 => 19,  65 => 14,  263 => 15,  257 => 5,  250 => 110,  242 => 108,  237 => 106,  233 => 105,  225 => 103,  198 => 85,  194 => 84,  170 => 65,  161 => 14,  134 => 52,  113 => 42,  104 => 31,  100 => 30,  90 => 32,  53 => 12,  213 => 64,  202 => 58,  197 => 56,  188 => 81,  181 => 50,  178 => 49,  152 => 34,  148 => 60,  70 => 16,  58 => 14,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 35,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 104,  220 => 70,  214 => 69,  177 => 70,  169 => 60,  140 => 55,  132 => 51,  128 => 29,  107 => 40,  61 => 15,  273 => 43,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 101,  208 => 61,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 46,  119 => 37,  102 => 38,  71 => 19,  67 => 18,  63 => 15,  59 => 15,  38 => 8,  94 => 21,  89 => 26,  85 => 21,  75 => 18,  68 => 15,  56 => 16,  87 => 25,  21 => 2,  26 => 12,  93 => 27,  88 => 33,  78 => 22,  46 => 14,  27 => 5,  44 => 8,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 40,  163 => 36,  158 => 67,  156 => 67,  151 => 61,  142 => 31,  138 => 44,  136 => 56,  121 => 37,  117 => 37,  105 => 40,  91 => 27,  62 => 15,  49 => 10,  24 => 7,  25 => 5,  19 => 1,  79 => 18,  72 => 21,  69 => 20,  47 => 9,  40 => 11,  37 => 5,  22 => 3,  246 => 109,  157 => 56,  145 => 49,  139 => 30,  131 => 30,  123 => 40,  120 => 40,  115 => 36,  111 => 34,  108 => 25,  101 => 32,  98 => 22,  96 => 27,  83 => 25,  74 => 16,  66 => 21,  55 => 14,  52 => 14,  50 => 10,  43 => 12,  41 => 7,  35 => 8,  32 => 3,  29 => 6,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 66,  149 => 51,  147 => 52,  144 => 59,  141 => 49,  133 => 41,  130 => 51,  125 => 49,  122 => 28,  116 => 43,  112 => 26,  109 => 37,  106 => 33,  103 => 28,  99 => 31,  95 => 31,  92 => 33,  86 => 31,  82 => 23,  80 => 23,  73 => 19,  64 => 16,  60 => 19,  57 => 12,  54 => 16,  51 => 14,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 5,  33 => 6,  30 => 2,);
    }
}
