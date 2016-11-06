<?php

/* BackCardBundle::menu.html.twig */
class __TwigTemplate_4b399d0d737359c37b3cdef3cfe15dace1cb5e56be332c2ce7270368af5cc55a extends Twig_Template
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
        echo "<h2>Fiches</h2>
<div class=\"aside-content\">
\t<nav>
    <ul>
    \t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("back_card_add");
        echo "\">Ajouter une fiche</a></li>
    \t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("back_card_homepage");
        echo "\">Modifier les fiches</a></li>
    </ul>
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "BackCardBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  39 => 8,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  19 => 1,  171 => 66,  166 => 40,  161 => 14,  156 => 67,  154 => 66,  150 => 65,  145 => 63,  137 => 61,  133 => 60,  109 => 41,  107 => 40,  92 => 33,  90 => 32,  86 => 31,  81 => 28,  74 => 24,  70 => 23,  66 => 21,  64 => 20,  60 => 19,  54 => 15,  52 => 14,  48 => 13,  40 => 11,  29 => 6,  22 => 2,  177 => 70,  165 => 61,  159 => 58,  153 => 55,  147 => 52,  141 => 62,  135 => 46,  129 => 59,  123 => 40,  117 => 37,  111 => 34,  104 => 31,  100 => 35,  93 => 27,  89 => 26,  82 => 23,  78 => 22,  71 => 19,  67 => 18,  59 => 15,  55 => 14,  49 => 10,  47 => 9,  44 => 12,  41 => 7,  36 => 7,  31 => 3,);
    }
}
