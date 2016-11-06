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
        return array (  65 => 12,  263 => 15,  257 => 5,  250 => 110,  242 => 108,  237 => 106,  233 => 105,  225 => 103,  198 => 85,  194 => 84,  170 => 65,  161 => 62,  134 => 52,  113 => 42,  104 => 40,  100 => 39,  90 => 19,  53 => 13,  213 => 64,  202 => 58,  197 => 56,  188 => 81,  181 => 50,  178 => 49,  152 => 34,  148 => 60,  70 => 13,  58 => 10,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 35,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 104,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 29,  107 => 36,  61 => 15,  273 => 43,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 101,  208 => 61,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 11,  38 => 6,  94 => 21,  89 => 20,  85 => 25,  75 => 21,  68 => 14,  56 => 16,  87 => 18,  21 => 2,  26 => 6,  93 => 35,  88 => 33,  78 => 15,  46 => 7,  27 => 4,  44 => 6,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 37,  163 => 36,  158 => 67,  156 => 66,  151 => 61,  142 => 31,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 11,  49 => 9,  24 => 3,  25 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 20,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 109,  157 => 56,  145 => 46,  139 => 30,  131 => 30,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 25,  101 => 32,  98 => 22,  96 => 31,  83 => 25,  74 => 14,  66 => 12,  55 => 9,  52 => 15,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 59,  141 => 48,  133 => 45,  130 => 51,  125 => 49,  122 => 28,  116 => 43,  112 => 26,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 19,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 17,  57 => 12,  54 => 10,  51 => 14,  48 => 13,  45 => 10,  42 => 4,  39 => 4,  36 => 7,  33 => 4,  30 => 3,);
    }
}
