<?php

/* BackUserBundle:Form:add.html.twig */
class __TwigTemplate_3e1497fcd481e4ea251689567208accbbb210b235b331c11f094466e0274e23e extends Twig_Template
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
\t\t<h1>Ajout d'un utilisateur</h1>
\t\t<div id=\"section-content\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("back_user_add");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t\t<table class=\"table-form\">
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'label', array("label" => "Login"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label', array("label" => "Email"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), 'label', array("label" => "Mot de passe"));
        echo "</th>
\t\t\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), 'widget');
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
        echo $this->env->getExtension('routing')->getPath("back_user_homepage");
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
        return "BackUserBundle:Form:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  161 => 14,  150 => 65,  137 => 61,  129 => 59,  100 => 30,  81 => 28,  90 => 32,  65 => 12,  275 => 110,  270 => 44,  265 => 36,  260 => 15,  249 => 111,  239 => 108,  234 => 106,  226 => 104,  222 => 103,  218 => 102,  195 => 85,  191 => 84,  185 => 81,  167 => 65,  145 => 63,  126 => 50,  114 => 43,  53 => 13,  213 => 64,  202 => 58,  197 => 56,  188 => 53,  181 => 50,  178 => 49,  152 => 34,  148 => 61,  139 => 30,  74 => 24,  70 => 23,  58 => 10,  52 => 14,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 110,  241 => 77,  229 => 73,  220 => 70,  214 => 101,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 29,  111 => 37,  107 => 40,  61 => 15,  273 => 96,  269 => 94,  254 => 5,  246 => 90,  243 => 109,  240 => 86,  238 => 85,  235 => 74,  230 => 105,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 61,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 25,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 15,  47 => 9,  38 => 6,  94 => 36,  89 => 26,  85 => 25,  79 => 18,  75 => 21,  68 => 14,  56 => 16,  50 => 13,  29 => 6,  87 => 18,  72 => 16,  55 => 14,  21 => 2,  26 => 6,  98 => 22,  93 => 27,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  40 => 11,  44 => 8,  35 => 5,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 40,  163 => 36,  158 => 62,  156 => 67,  151 => 63,  142 => 31,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 41,  101 => 40,  91 => 35,  69 => 20,  66 => 21,  62 => 11,  49 => 10,  24 => 3,  32 => 6,  25 => 2,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 66,  149 => 51,  147 => 58,  144 => 49,  141 => 62,  133 => 60,  130 => 41,  125 => 44,  122 => 28,  116 => 27,  112 => 26,  109 => 41,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 31,  82 => 23,  80 => 23,  73 => 19,  64 => 20,  60 => 19,  57 => 12,  54 => 15,  51 => 14,  48 => 13,  45 => 10,  42 => 4,  39 => 8,  36 => 5,  33 => 6,  30 => 5,);
    }
}
