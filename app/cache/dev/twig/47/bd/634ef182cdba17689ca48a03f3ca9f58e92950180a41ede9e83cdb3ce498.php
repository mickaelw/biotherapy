<?php

/* BackUserBundle:Security:login.html.twig */
class __TwigTemplate_47bd634ef182cdba17689ca48a03f3ca9f58e92950180a41ede9e83cdb3ce498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackWebsiteBundle::layout.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'maintype' => array($this, 'block_maintype'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_maintype($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<section id=\"login\">
\t\t<h1>Authentification</h1>
\t\t<div id=\"section-content\">
\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 12
            echo "\t\t\t\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t
\t\t\t";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo " <p class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</p> ";
        }
        // line 16
        echo "\t
\t\t\t<p>Gérez votre compte et accédez aux différentes ressources mises à votre disposition sur votre interface de gestion interne. Identifiez-vous en utilisant les accès qui vous ont été fournis et qui sont directement associés à vos informations.</p>
\t\t\t<form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<th>Login</th>
\t\t\t\t\t<td><input type=\"text\" name=\"_username\" placeholder=\"Login\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Mot de passe</th>
\t\t\t\t\t<td><input type=\"password\" name=\"_password\" placeholder=\"Mot de passe\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"\">Mot de passe perdu ?</a></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"login\" />
\t\t\t\t\t\t<input type=\"submit\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</form>
\t\t\t";
        // line 37
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 38
        echo "\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</section>
";
    }

    // line 37
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 43
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  110 => 34,  76 => 17,  118 => 42,  150 => 65,  137 => 61,  129 => 59,  81 => 19,  65 => 14,  263 => 15,  257 => 5,  250 => 110,  242 => 108,  237 => 106,  233 => 105,  225 => 103,  198 => 85,  194 => 84,  170 => 65,  161 => 14,  134 => 52,  113 => 42,  104 => 40,  100 => 37,  90 => 32,  53 => 13,  213 => 64,  202 => 58,  197 => 56,  188 => 81,  181 => 50,  178 => 49,  152 => 34,  148 => 60,  70 => 16,  58 => 10,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 35,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 104,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 29,  107 => 40,  61 => 15,  273 => 43,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 101,  208 => 61,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  38 => 6,  94 => 21,  89 => 26,  85 => 21,  75 => 21,  68 => 15,  56 => 16,  87 => 18,  21 => 2,  26 => 6,  93 => 27,  88 => 33,  78 => 18,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 40,  163 => 36,  158 => 67,  156 => 67,  151 => 61,  142 => 31,  138 => 44,  136 => 56,  121 => 37,  117 => 44,  105 => 40,  91 => 27,  62 => 11,  49 => 10,  24 => 3,  25 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 20,  47 => 9,  40 => 11,  37 => 5,  22 => 2,  246 => 109,  157 => 56,  145 => 49,  139 => 30,  131 => 30,  123 => 47,  120 => 40,  115 => 36,  111 => 37,  108 => 25,  101 => 32,  98 => 22,  96 => 31,  83 => 25,  74 => 16,  66 => 21,  55 => 14,  52 => 14,  50 => 11,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 6,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 66,  149 => 51,  147 => 58,  144 => 59,  141 => 62,  133 => 41,  130 => 51,  125 => 49,  122 => 28,  116 => 43,  112 => 26,  109 => 37,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 31,  82 => 23,  80 => 23,  73 => 19,  64 => 20,  60 => 19,  57 => 12,  54 => 12,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 6,  30 => 5,);
    }
}
