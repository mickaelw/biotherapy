<?php

/* BackUserBundle::index.html.twig */
class __TwigTemplate_ec3aa1512d980e2c1c9cd071a83f76b08b0119fff42ee763175e3c6c697134cf extends Twig_Template
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
\t<section id=\"user\">
\t\t<h1>Gestion des utilisateurs</h1>
\t\t<div id=\"section-content\">
\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all"));
        foreach ($context['_seq'] as $context["key"] => $context["flashes"]) {
            // line 13
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 14
                echo "\t\t\t\t    <p class=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : null), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t
\t\t\t";
        // line 18
        if (twig_test_empty((isset($context["list"]) ? $context["list"] : null))) {
            // line 19
            echo "\t\t\t\t<p>Aucun utilisateur trouvé.</p>
\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t<a class=\"btn success left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("back_user_add");
            echo "\">Ajouter un utilisateur</a>
\t\t\t\t<br />
\t\t\t\t<br />
\t\t\t\t<table class=\"list-obj\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th>Login</th>
\t\t\t\t\t\t<th>Rôle</th>
\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "username"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "roles"), ", "), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_user_update", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/admin/application_edit.png"), "html", null, true);
                echo "\" height=\"16px\" with=\"16px\" /></a>
\t\t\t\t\t\t\t\t<a data-ref=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_user_delete", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"))), "html", null, true);
                echo "\" href=\"javascript:;\" rel=\"#overlay-delete\" class=\"item-delete\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/admin/delete.png"), "html", null, true);
                echo "\" height=\"16px\" with=\"16px\" /></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        }
        // line 44
        echo "\t\t\t
\t\t</div>
\t</section>
";
    }

    // line 49
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackUserBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  76 => 17,  118 => 42,  161 => 14,  150 => 65,  137 => 61,  129 => 59,  100 => 30,  81 => 19,  90 => 32,  65 => 12,  275 => 110,  270 => 44,  265 => 36,  260 => 15,  249 => 111,  239 => 108,  234 => 106,  226 => 104,  222 => 103,  218 => 102,  195 => 85,  191 => 84,  185 => 81,  167 => 65,  145 => 49,  126 => 50,  114 => 43,  53 => 13,  213 => 64,  202 => 58,  197 => 56,  188 => 53,  181 => 50,  178 => 49,  152 => 34,  148 => 61,  139 => 30,  74 => 24,  70 => 16,  58 => 10,  52 => 14,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 110,  241 => 77,  229 => 73,  220 => 70,  214 => 101,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 29,  111 => 37,  107 => 40,  61 => 15,  273 => 96,  269 => 94,  254 => 5,  246 => 90,  243 => 109,  240 => 86,  238 => 85,  235 => 74,  230 => 105,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 61,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 25,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 36,  89 => 26,  85 => 21,  79 => 18,  75 => 21,  68 => 14,  56 => 16,  50 => 12,  29 => 6,  87 => 18,  72 => 16,  55 => 14,  21 => 2,  26 => 6,  98 => 22,  93 => 27,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  40 => 11,  44 => 8,  35 => 5,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 40,  163 => 36,  158 => 62,  156 => 67,  151 => 63,  142 => 31,  138 => 44,  136 => 56,  123 => 47,  121 => 37,  117 => 44,  115 => 36,  105 => 41,  101 => 40,  91 => 35,  69 => 20,  66 => 21,  62 => 11,  49 => 10,  24 => 3,  32 => 6,  25 => 2,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 66,  149 => 51,  147 => 58,  144 => 49,  141 => 62,  133 => 41,  130 => 41,  125 => 44,  122 => 28,  116 => 27,  112 => 26,  109 => 41,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 31,  82 => 23,  80 => 23,  73 => 19,  64 => 20,  60 => 19,  57 => 12,  54 => 13,  51 => 14,  48 => 13,  45 => 10,  42 => 4,  39 => 8,  36 => 5,  33 => 6,  30 => 5,);
    }
}
