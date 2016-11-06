<?php

/* BackCardBundle::index.html.twig */
class __TwigTemplate_6f2dc34b6135a2434bf5b712fbfb813c031b1b65e91fa374fcc5b2865108aa32 extends Twig_Template
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
        echo "\t
\t";
        // line 9
        $this->env->loadTemplate("BackWebsiteBundle:Default:menu.html.twig")->display($context);
        // line 10
        echo "\t
\t<section id=\"admin\">
\t\t<h1>Gestion des fiches</h1>
\t\t<div id=\"section-content\">
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all"));
        foreach ($context['_seq'] as $context["key"] => $context["flashes"]) {
            // line 15
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 16
                echo "\t\t\t\t    <p class=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t<table class=\"list-obj\">
\t\t\t\t<thead>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Biothérapie</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "biotherapy"), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_card_update", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/admin/application_edit.png"), "html", null, true);
            echo "\" height=\"16px\" with=\"16px\" /></a>
\t\t\t\t\t\t\t<a data-ref=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_card_delete", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" href=\"javascript:;\" rel=\"#overlay-delete\" class=\"item-delete\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/admin/delete.png"), "html", null, true);
            echo "\" height=\"16px\" with=\"16px\" /></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t</tbody>
\t\t\t</table>
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
        return "BackCardBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  97 => 28,  180 => 62,  146 => 43,  165 => 61,  153 => 55,  23 => 4,  20 => 1,  114 => 43,  110 => 34,  76 => 13,  118 => 42,  150 => 65,  137 => 61,  129 => 43,  81 => 19,  65 => 14,  263 => 15,  257 => 5,  250 => 110,  242 => 108,  237 => 106,  233 => 105,  225 => 103,  198 => 85,  194 => 84,  170 => 55,  161 => 14,  134 => 37,  113 => 42,  104 => 31,  100 => 30,  90 => 26,  53 => 12,  213 => 64,  202 => 58,  197 => 56,  188 => 81,  181 => 50,  178 => 49,  152 => 46,  148 => 60,  70 => 16,  58 => 14,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 35,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 104,  220 => 70,  214 => 69,  177 => 70,  169 => 60,  140 => 40,  132 => 42,  128 => 34,  107 => 40,  61 => 15,  273 => 43,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 101,  208 => 61,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 46,  119 => 37,  102 => 38,  71 => 19,  67 => 18,  63 => 15,  59 => 15,  38 => 8,  94 => 27,  89 => 26,  85 => 21,  75 => 18,  68 => 15,  56 => 16,  87 => 17,  21 => 2,  26 => 12,  93 => 27,  88 => 33,  78 => 22,  46 => 14,  27 => 5,  44 => 8,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 63,  171 => 66,  166 => 40,  163 => 36,  158 => 49,  156 => 67,  151 => 61,  142 => 31,  138 => 44,  136 => 56,  121 => 37,  117 => 37,  105 => 24,  91 => 27,  62 => 15,  49 => 10,  24 => 7,  25 => 5,  19 => 1,  79 => 18,  72 => 12,  69 => 20,  47 => 9,  40 => 11,  37 => 5,  22 => 3,  246 => 109,  157 => 56,  145 => 49,  139 => 30,  131 => 30,  123 => 40,  120 => 40,  115 => 36,  111 => 34,  108 => 25,  101 => 29,  98 => 21,  96 => 27,  83 => 16,  74 => 16,  66 => 21,  55 => 14,  52 => 14,  50 => 10,  43 => 12,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 52,  162 => 57,  154 => 66,  149 => 51,  147 => 52,  144 => 59,  141 => 49,  133 => 41,  130 => 51,  125 => 49,  122 => 31,  116 => 28,  112 => 32,  109 => 25,  106 => 31,  103 => 28,  99 => 31,  95 => 31,  92 => 33,  86 => 31,  82 => 23,  80 => 23,  73 => 19,  64 => 16,  60 => 8,  57 => 7,  54 => 16,  51 => 14,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 5,  33 => 6,  30 => 2,);
    }
}
