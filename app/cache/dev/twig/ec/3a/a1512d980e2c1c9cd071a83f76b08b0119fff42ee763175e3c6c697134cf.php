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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all"));
        foreach ($context['_seq'] as $context["key"] => $context["flashes"]) {
            // line 13
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 14
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
        if (twig_test_empty((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "username"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "roles"), ", "), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_user_update", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/admin/application_edit.png"), "html", null, true);
                echo "\" height=\"16px\" with=\"16px\" /></a>
\t\t\t\t\t\t\t\t<a data-ref=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_user_delete", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
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
        return array (  110 => 34,  76 => 17,  118 => 42,  150 => 65,  137 => 61,  129 => 59,  81 => 19,  65 => 12,  263 => 15,  257 => 5,  250 => 110,  242 => 108,  237 => 106,  233 => 105,  225 => 103,  198 => 85,  194 => 84,  170 => 65,  161 => 14,  134 => 52,  113 => 42,  104 => 40,  100 => 30,  90 => 32,  53 => 13,  213 => 64,  202 => 58,  197 => 56,  188 => 81,  181 => 50,  178 => 49,  152 => 34,  148 => 60,  70 => 16,  58 => 10,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 35,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 104,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 29,  107 => 40,  61 => 15,  273 => 43,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 101,  208 => 61,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  38 => 6,  94 => 21,  89 => 26,  85 => 21,  75 => 21,  68 => 14,  56 => 16,  87 => 18,  21 => 2,  26 => 6,  93 => 27,  88 => 33,  78 => 22,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 40,  163 => 36,  158 => 67,  156 => 67,  151 => 61,  142 => 31,  138 => 44,  136 => 56,  121 => 37,  117 => 44,  105 => 40,  91 => 27,  62 => 11,  49 => 10,  24 => 3,  25 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 20,  47 => 9,  40 => 11,  37 => 10,  22 => 2,  246 => 109,  157 => 56,  145 => 49,  139 => 30,  131 => 30,  123 => 47,  120 => 40,  115 => 36,  111 => 37,  108 => 25,  101 => 32,  98 => 22,  96 => 31,  83 => 25,  74 => 24,  66 => 21,  55 => 14,  52 => 14,  50 => 12,  43 => 8,  41 => 7,  35 => 5,  32 => 6,  29 => 6,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 66,  149 => 51,  147 => 58,  144 => 59,  141 => 62,  133 => 41,  130 => 51,  125 => 49,  122 => 28,  116 => 43,  112 => 26,  109 => 41,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 31,  82 => 23,  80 => 23,  73 => 19,  64 => 20,  60 => 19,  57 => 12,  54 => 13,  51 => 14,  48 => 13,  45 => 10,  42 => 4,  39 => 8,  36 => 5,  33 => 6,  30 => 5,);
    }
}
