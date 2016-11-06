<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_31ba85f264d9b8c61d792463c883617eaac32b25e248ba24698c22195525ddb3 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  167 => 71,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  226 => 84,  216 => 79,  207 => 75,  200 => 72,  191 => 77,  185 => 75,  172 => 62,  84 => 24,  127 => 40,  124 => 36,  97 => 28,  180 => 62,  146 => 43,  165 => 60,  153 => 69,  23 => 4,  20 => 1,  114 => 43,  110 => 34,  76 => 31,  118 => 49,  150 => 55,  137 => 61,  129 => 43,  81 => 23,  65 => 14,  263 => 15,  257 => 5,  250 => 110,  242 => 108,  237 => 106,  233 => 87,  225 => 103,  198 => 85,  194 => 70,  170 => 55,  161 => 14,  134 => 54,  113 => 48,  104 => 42,  100 => 30,  90 => 27,  53 => 12,  213 => 78,  202 => 58,  197 => 71,  188 => 76,  181 => 65,  178 => 64,  152 => 46,  148 => 60,  70 => 19,  58 => 14,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 35,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 70,  169 => 60,  140 => 40,  132 => 42,  128 => 34,  107 => 30,  61 => 15,  273 => 43,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 101,  208 => 61,  204 => 78,  179 => 69,  159 => 58,  143 => 56,  135 => 46,  119 => 40,  102 => 41,  71 => 19,  67 => 24,  63 => 15,  59 => 14,  38 => 6,  94 => 27,  89 => 26,  85 => 26,  75 => 18,  68 => 15,  56 => 16,  87 => 34,  21 => 2,  26 => 12,  93 => 27,  88 => 26,  78 => 22,  46 => 13,  27 => 3,  44 => 8,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 63,  171 => 73,  166 => 40,  163 => 36,  158 => 49,  156 => 58,  151 => 61,  142 => 31,  138 => 56,  136 => 56,  121 => 50,  117 => 37,  105 => 34,  91 => 29,  62 => 15,  49 => 14,  24 => 7,  25 => 5,  19 => 1,  79 => 23,  72 => 12,  69 => 20,  47 => 9,  40 => 11,  37 => 5,  22 => 3,  246 => 93,  157 => 56,  145 => 49,  139 => 30,  131 => 30,  123 => 42,  120 => 40,  115 => 36,  111 => 47,  108 => 43,  101 => 29,  98 => 21,  96 => 37,  83 => 33,  74 => 19,  66 => 21,  55 => 16,  52 => 14,  50 => 10,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 73,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 66,  149 => 51,  147 => 54,  144 => 59,  141 => 51,  133 => 41,  130 => 46,  125 => 51,  122 => 31,  116 => 39,  112 => 32,  109 => 25,  106 => 31,  103 => 38,  99 => 31,  95 => 31,  92 => 33,  86 => 27,  82 => 23,  80 => 32,  73 => 20,  64 => 23,  60 => 8,  57 => 7,  54 => 16,  51 => 14,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
