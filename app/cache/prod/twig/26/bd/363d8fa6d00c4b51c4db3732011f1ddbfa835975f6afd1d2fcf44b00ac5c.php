<?php

/* BackMediaBundle::menu.html.twig */
class __TwigTemplate_26bd363d8fa6d00c4b51c4db3732011f1ddbfa835975f6afd1d2fcf44b00ac5c extends Twig_Template
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
        echo "<h2>Médias</h2>
<div class=\"aside-content\">
\t<nav>
    <ul>
    \t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("back_media_add");
        echo "\">Ajouter un média</a></li>
    \t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("back_media_homepage");
        echo "\">Modifier les médias</a></li>
    </ul>
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "BackMediaBundle::menu.html.twig";
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
