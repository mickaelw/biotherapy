<?php

/* ::base.html.twig */
class __TwigTemplate_0e40847b1f39e2ecabfb8d5cb2c93c41ad38c69ae322b7b6abe1ffaf56fccd52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  124 => 36,  97 => 28,  180 => 62,  170 => 55,  146 => 43,  134 => 37,  83 => 27,  165 => 61,  153 => 55,  104 => 31,  96 => 27,  23 => 1,  20 => 1,  37 => 5,  110 => 34,  76 => 13,  118 => 42,  161 => 14,  150 => 65,  137 => 61,  129 => 43,  100 => 30,  81 => 19,  90 => 26,  65 => 14,  275 => 110,  270 => 44,  265 => 36,  260 => 15,  249 => 111,  239 => 108,  234 => 106,  226 => 104,  222 => 103,  218 => 102,  195 => 85,  191 => 84,  185 => 81,  167 => 65,  145 => 49,  126 => 50,  114 => 43,  53 => 5,  213 => 64,  202 => 58,  197 => 56,  188 => 53,  181 => 50,  178 => 49,  152 => 46,  148 => 61,  139 => 30,  74 => 19,  70 => 18,  58 => 14,  52 => 14,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 110,  241 => 77,  229 => 73,  220 => 70,  214 => 101,  177 => 70,  169 => 60,  140 => 40,  132 => 42,  128 => 34,  111 => 43,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 5,  246 => 90,  243 => 109,  240 => 86,  238 => 85,  235 => 74,  230 => 105,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 61,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 46,  131 => 52,  119 => 34,  108 => 43,  102 => 38,  71 => 19,  67 => 18,  63 => 15,  59 => 6,  47 => 12,  38 => 8,  94 => 27,  89 => 26,  85 => 26,  79 => 23,  75 => 18,  68 => 15,  56 => 16,  50 => 10,  29 => 5,  87 => 17,  72 => 12,  55 => 14,  21 => 2,  26 => 12,  98 => 21,  93 => 27,  88 => 26,  78 => 22,  46 => 14,  27 => 5,  40 => 11,  44 => 11,  35 => 7,  31 => 3,  43 => 12,  41 => 7,  28 => 4,  201 => 92,  196 => 90,  183 => 63,  171 => 66,  166 => 40,  163 => 36,  158 => 49,  156 => 67,  151 => 63,  142 => 31,  138 => 44,  136 => 56,  123 => 40,  121 => 37,  117 => 37,  115 => 36,  105 => 24,  101 => 29,  91 => 29,  69 => 11,  66 => 21,  62 => 15,  49 => 10,  24 => 7,  32 => 4,  25 => 5,  22 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 52,  162 => 59,  154 => 66,  149 => 51,  147 => 52,  144 => 49,  141 => 49,  133 => 41,  130 => 41,  125 => 44,  122 => 31,  116 => 28,  112 => 32,  109 => 25,  106 => 31,  103 => 38,  99 => 34,  95 => 31,  92 => 33,  86 => 27,  82 => 23,  80 => 23,  73 => 19,  64 => 10,  60 => 8,  57 => 7,  54 => 16,  51 => 14,  48 => 12,  45 => 8,  42 => 10,  39 => 7,  36 => 5,  33 => 6,  30 => 2,);
    }
}
