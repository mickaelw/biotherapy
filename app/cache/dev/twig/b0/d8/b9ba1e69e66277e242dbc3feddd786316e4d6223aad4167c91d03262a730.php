<?php

/* BackWebsiteBundle::layout.html.twig */
class __TwigTemplate_b0d8b9ba1e69e66277e242dbc3feddd786316e4d6223aad4167c91d03262a730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<title>Biothérapie - Administration</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<meta name=\"description\" content=\"\" />
\t  \t<meta name=\"keywords\" content=\"\" />
\t\t<meta name=\"robots\" content=\"\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/admin/reset.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/admin/bootstrap.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/admin/default.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/admin/jquery.datatables.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 15
        echo "\t</head>
\t<body>
\t\t<div id=\"body\">
\t    \t<header>
\t        \t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\">Administration</a>
\t            ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "\t            \t<nav>
\t            \t\t<ul>
\t            \t\t\t<li><a id=\"nav-contenu\" href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\"></a></li>
\t            \t\t\t<li><a id=\"nav-user\" href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("back_user_homepage");
            echo "\"></a></li>
\t            \t\t</ul>
\t            \t</nav>
\t            ";
        }
        // line 28
        echo "\t        </header>
\t        
\t        <p id=\"login\">
\t        \t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("front_website_homepage");
        echo "\" target=\"_new\">Site Internet</a>
\t        \t";
        // line 32
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "\t        \t\t| Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t        \t";
        }
        // line 35
        echo "\t        </p>
\t        
\t        <div class=\"clear\"></div>
\t        
\t        <div id=\"main\">
\t\t\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "\t\t\t</div>
\t        
\t        <div class=\"clear\"></div>
\t        
\t        <footer><p>Copyright &copy; 2014 Tous droits réservés.</p></footer>
\t   \t</div>
\t   \t
\t   \t<!-- Overlay -->
\t   \t<div class=\"overlay\" id=\"overlay-delete\">
\t   \t\t<h2>Confirmation</h2>
\t
\t   \t\t<p>Etes-vous sur de vouloir supprimer cet item ?</p>
\t
\t\t\t<a class=\"close btn cancel\" href=\"javascript:;\">Non</a>
\t\t\t<a class=\"btn success\" href=\"submit\">Oui</a>
\t   \t\t</form>
\t   \t</div>
        
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.datatables.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.tools.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/less.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">less.watch();</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/admin/general.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 66
        $this->displayBlock('js', $context, $blocks);
        // line 67
        echo "\t</body>
</html>";
    }

    // line 14
    public function block_css($context, array $blocks = array())
    {
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackWebsiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  137 => 61,  129 => 59,  81 => 28,  65 => 12,  263 => 15,  257 => 5,  250 => 110,  242 => 108,  237 => 106,  233 => 105,  225 => 103,  198 => 85,  194 => 84,  170 => 65,  161 => 14,  134 => 52,  113 => 42,  104 => 40,  100 => 35,  90 => 32,  53 => 13,  213 => 64,  202 => 58,  197 => 56,  188 => 81,  181 => 50,  178 => 49,  152 => 34,  148 => 60,  70 => 23,  58 => 10,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 35,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 104,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 29,  107 => 40,  61 => 15,  273 => 43,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 101,  208 => 61,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 11,  38 => 6,  94 => 21,  89 => 20,  85 => 25,  75 => 21,  68 => 14,  56 => 16,  87 => 18,  21 => 2,  26 => 6,  93 => 35,  88 => 33,  78 => 15,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 40,  163 => 36,  158 => 67,  156 => 67,  151 => 61,  142 => 31,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 11,  49 => 9,  24 => 3,  25 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 20,  47 => 9,  40 => 11,  37 => 10,  22 => 1,  246 => 109,  157 => 56,  145 => 63,  139 => 30,  131 => 30,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 25,  101 => 32,  98 => 22,  96 => 31,  83 => 25,  74 => 24,  66 => 21,  55 => 9,  52 => 14,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 6,  29 => 6,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 66,  149 => 51,  147 => 58,  144 => 59,  141 => 62,  133 => 60,  130 => 51,  125 => 49,  122 => 28,  116 => 43,  112 => 26,  109 => 41,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 31,  82 => 22,  80 => 23,  73 => 19,  64 => 20,  60 => 19,  57 => 12,  54 => 15,  51 => 14,  48 => 13,  45 => 10,  42 => 4,  39 => 4,  36 => 10,  33 => 4,  30 => 3,);
    }
}
