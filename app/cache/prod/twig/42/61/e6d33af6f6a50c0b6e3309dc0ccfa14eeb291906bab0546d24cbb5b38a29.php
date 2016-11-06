<?php

/* BackMediaBundle:Form:add.html.twig */
class __TwigTemplate_4261e6d33af6f6a50c0b6e3309dc0ccfa14eeb291906bab0546d24cbb5b38a29 extends Twig_Template
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
\t\t<h1>Ajout d'un média</h1>
\t\t<div id=\"section-content\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("back_media_add");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t\t<table class=\"table-form\">
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'label', array("label" => "Nom"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "download"), 'label', array("label" => "Fiche ?"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "download"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "download"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'label', array("label" => "Fichier"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn success left\" />
\t\t\t\t\t\t<a class=\"btn cancel right\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("back_media_homepage");
        echo "\">Annuler</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</form>
\t\t</div>
\t</section>
";
    }

    // line 42
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackMediaBundle:Form:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  124 => 36,  97 => 28,  180 => 62,  170 => 55,  146 => 43,  134 => 37,  83 => 27,  165 => 61,  153 => 55,  104 => 31,  96 => 27,  23 => 4,  20 => 1,  37 => 5,  110 => 34,  76 => 13,  118 => 42,  161 => 14,  150 => 65,  137 => 61,  129 => 43,  100 => 30,  81 => 19,  90 => 26,  65 => 14,  275 => 110,  270 => 44,  265 => 36,  260 => 15,  249 => 111,  239 => 108,  234 => 106,  226 => 104,  222 => 103,  218 => 102,  195 => 85,  191 => 84,  185 => 81,  167 => 65,  145 => 49,  126 => 50,  114 => 43,  53 => 12,  213 => 64,  202 => 58,  197 => 56,  188 => 53,  181 => 50,  178 => 49,  152 => 46,  148 => 61,  139 => 30,  74 => 19,  70 => 18,  58 => 14,  52 => 14,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 110,  241 => 77,  229 => 73,  220 => 70,  214 => 101,  177 => 70,  169 => 60,  140 => 40,  132 => 42,  128 => 34,  111 => 43,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 5,  246 => 90,  243 => 109,  240 => 86,  238 => 85,  235 => 74,  230 => 105,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 61,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 46,  131 => 52,  119 => 34,  108 => 43,  102 => 38,  71 => 19,  67 => 18,  63 => 15,  59 => 15,  47 => 9,  38 => 8,  94 => 27,  89 => 26,  85 => 26,  79 => 23,  75 => 18,  68 => 15,  56 => 16,  50 => 10,  29 => 6,  87 => 17,  72 => 12,  55 => 14,  21 => 2,  26 => 12,  98 => 21,  93 => 27,  88 => 26,  78 => 22,  46 => 14,  27 => 5,  40 => 11,  44 => 8,  35 => 8,  31 => 3,  43 => 12,  41 => 7,  28 => 4,  201 => 92,  196 => 90,  183 => 63,  171 => 66,  166 => 40,  163 => 36,  158 => 49,  156 => 67,  151 => 63,  142 => 31,  138 => 44,  136 => 56,  123 => 40,  121 => 37,  117 => 37,  115 => 36,  105 => 24,  101 => 29,  91 => 29,  69 => 20,  66 => 21,  62 => 15,  49 => 10,  24 => 7,  32 => 4,  25 => 5,  22 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 52,  162 => 59,  154 => 66,  149 => 51,  147 => 52,  144 => 49,  141 => 49,  133 => 41,  130 => 41,  125 => 44,  122 => 31,  116 => 28,  112 => 32,  109 => 25,  106 => 33,  103 => 38,  99 => 34,  95 => 31,  92 => 33,  86 => 27,  82 => 23,  80 => 23,  73 => 19,  64 => 16,  60 => 8,  57 => 7,  54 => 16,  51 => 14,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 5,  33 => 6,  30 => 2,);
    }
}
