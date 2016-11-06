<?php

/* BackWebsiteBundle:Default:index.html.twig */
class __TwigTemplate_317d444a6c0e765ee22de7501623cb50f0b755456a3802ffed2ef386867848d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackWebsiteBundle::layout.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        $this->env->loadTemplate("BackWebsiteBundle:Default:menu.html.twig")->display($context);
        // line 8
        echo "\t
\t<section id=\"admin\">
\t\t<h1>Gestion du site</h1>
\t\t<div id=\"section-content\">Bienvenue dans la gestion des contenus et des informations du site internet.</div>
\t</section>
";
    }

    // line 15
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackWebsiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  65 => 12,  275 => 110,  270 => 44,  265 => 36,  260 => 15,  249 => 111,  239 => 108,  234 => 106,  226 => 104,  222 => 103,  218 => 102,  195 => 85,  191 => 84,  185 => 81,  167 => 65,  145 => 60,  126 => 50,  114 => 43,  53 => 13,  213 => 64,  202 => 58,  197 => 56,  188 => 53,  181 => 50,  178 => 49,  152 => 34,  148 => 61,  139 => 30,  74 => 14,  70 => 13,  58 => 10,  52 => 15,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 110,  241 => 77,  229 => 73,  220 => 70,  214 => 101,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 29,  111 => 37,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 5,  246 => 90,  243 => 109,  240 => 86,  238 => 85,  235 => 74,  230 => 105,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 61,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 25,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 11,  47 => 9,  38 => 6,  94 => 36,  89 => 34,  85 => 25,  79 => 18,  75 => 21,  68 => 14,  56 => 16,  50 => 13,  29 => 3,  87 => 18,  72 => 16,  55 => 9,  21 => 2,  26 => 6,  98 => 22,  93 => 28,  88 => 6,  78 => 15,  46 => 7,  27 => 4,  40 => 8,  44 => 6,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 37,  163 => 36,  158 => 62,  156 => 66,  151 => 63,  142 => 31,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 41,  101 => 40,  91 => 35,  69 => 20,  66 => 12,  62 => 11,  49 => 9,  24 => 3,  32 => 6,  25 => 2,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 59,  133 => 45,  130 => 41,  125 => 44,  122 => 28,  116 => 27,  112 => 26,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 19,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 17,  57 => 12,  54 => 10,  51 => 14,  48 => 13,  45 => 10,  42 => 4,  39 => 4,  36 => 7,  33 => 4,  30 => 3,);
    }
}
