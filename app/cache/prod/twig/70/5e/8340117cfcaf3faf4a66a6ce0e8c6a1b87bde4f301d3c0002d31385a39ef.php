<?php

/* FrontWebsiteBundle::layout.html.twig */
class __TwigTemplate_705e8340117cfcaf3faf4a66a6ce0e8c6a1b87bde4f301d3c0002d31385a39ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'maintype' => array($this, 'block_maintype'),
            'content' => array($this, 'block_content'),
            'overlayTxt' => array($this, 'block_overlayTxt'),
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
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<meta name=\"description\" content=\"\" />
\t  \t<meta name=\"keywords\" content=\"\" />
\t\t<meta name=\"robots\" content=\"\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/reset.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/bootstrap.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/default.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/search.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/css/media-queries.less"), "html", null, true);
        echo "\" type=\"text/less\" />
\t\t";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 16
        echo "\t</head>
\t<body>
\t\t<header>
\t\t\t<div class=\"middle\">
\t\t\t\t<h1><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("front_website_homepage");
        echo "\">Biotherapies.fr</a></h1>
\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("front_website_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t<li><a href=\"#a_propos_de\">A propos de</a></li>
\t\t\t\t\t\t<li><a href=\"#partenaires\">Partenaires</a></li>
\t\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</header>
\t\t
\t\t<div id=\"main\" class=\"middle\">
\t\t\t";
        // line 33
        $this->env->loadTemplate("FrontWebsiteBundle:Form:form.html.twig")->display($context);
        // line 34
        echo "\t\t\t
\t\t\t<div id=\"main-type\">";
        // line 35
        $this->displayBlock('maintype', $context, $blocks);
        echo "</div>
\t\t\t
\t\t\t<div id=\"main-center\">
\t\t\t\t<div id=\"main-hole\">
\t\t\t\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/hole.png"), "html", null, true);
            echo "\" height=\"27px\" with=\"27px\" />
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"main-ajax\">";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"main-bottom\"></div>
\t\t
\t\t<div class=\"middle\" id=\"a_propos_de\">
\t\t\t<h2>";
        // line 49
        echo $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "name");
        echo "</h2>
\t\t\t<div class=\"clear\"></div>
\t\t\t<div id=\"about-content\">";
        // line 51
        echo $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "text");
        echo "</div>
\t\t</div>
\t\t
\t\t<div class=\"middle\" id=\"partenaires\">
\t\t\t<h2>Partenaires</h2>
\t\t\t<div class=\"clear\"></div>
\t\t\t<div id=\"partner-content\">
\t\t\t\t";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPart"]) ? $context["listPart"] : $this->getContext($context, "listPart")));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 59
            echo "\t\t\t\t<figure>
\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partner"]) ? $context["partner"] : $this->getContext($context, "partner")), "url"), "html", null, true);
            echo "\" target=\"_blank\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["partner"]) ? $context["partner"] : $this->getContext($context, "partner")), "media"), "url")), "html", null, true);
            echo "\" with=\"200px\" height=\"104px\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partner"]) ? $context["partner"] : $this->getContext($context, "partner")), "media"), "name"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partner"]) ? $context["partner"] : $this->getContext($context, "partner")), "media"), "name")), "html", null, true);
            echo "\" /></a>
\t\t\t\t\t<img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/partner-shadow.png"), "html", null, true);
            echo "\" with=\"200px\" height=\"25px\" alt=\"shadow\" />
\t\t\t\t</figure>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"clear\"></div>
\t\t
        <footer>
        \t<div class=\"middle\" id=\"contact\">
        \t\t<h2>Contact</h2>
        \t\t<div class=\"clear\"></div>
        \t\t<form method=\"post\" action\"\">
        \t\t\t<input type=\"text\" name=\"name\" placeholder=\"Prénom et nom\" class=\"input\" />
        \t\t\t<input type=\"text\" name=\"email\" placeholder=\"Email\" class=\"input\" />
        \t\t\t<textarea class=\"textarea\" placeholder=\"Message\"></textarea>
        \t\t\t<input type=\"submit\" value=\"\" />
        \t\t</form>
        \t\t<aside>
        \t\t\t<div id=\"footer-misc\">";
        // line 80
        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "text");
        echo "</div>
    \t\t\t\t<!--<div id=\"app\">
\t    \t\t\t\t<p>L’application est disponible sur :</p>
\t    \t\t\t\t<a href=\"javascript:;\"><img id=\"apple\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/logo-appstore.png"), "html", null, true);
        echo "\" height=\"60px\" width=\"170px\" alt=\"appstore\" title=\"appstore\" /></a>
\t    \t\t\t\t<a href=\"javascript:;\"><img id=\"android\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/img/logo-androidmarket.png"), "html", null, true);
        echo "\" height=\"60px\" width=\"170px\" alt=\"appstore\" title=\"appstore\" /></a>
    \t\t\t\t</div>-->
        \t\t</aside>
        \t</div>
        \t<div id=\"copyright\"><p class=\"middle\">Copyright © 2015 - Tous droits réservés</p></div>
        </footer>
        
        <!-- Overlay -->
\t   \t<div class=\"overlay\" id=\"overlay-pdf\">
\t   \t\t";
        // line 93
        $this->displayBlock('overlayTxt', $context, $blocks);
        // line 94
        echo "\t\t\t<a class=\"btn pdf-vPat\" href=\"javascript:;\" target=\"_blank\">Version patient</a>
\t\t\t<a class=\"btn pdf-vMed\" href=\"javascript:;\" target=\"_blank\">Version médecin</a>
\t   \t</div>
        
        <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.ui.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.tools.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.juizScrollTo.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/jquery.dotdotdot.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/less.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">less.watch();</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("misc/js/general.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">var biotherapies = ";
        // line 108
        echo (isset($context["listKeyWords"]) ? $context["listKeyWords"] : $this->getContext($context, "listKeyWords"));
        echo ";</script>
        ";
        // line 109
        $this->displayBlock('js', $context, $blocks);
        // line 110
        echo "\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Biotherapies.fr";
    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
    }

    // line 35
    public function block_maintype($context, array $blocks = array())
    {
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
    }

    // line 93
    public function block_overlayTxt($context, array $blocks = array())
    {
        echo "<p>Télécharger les résultats de la recherche</p>";
    }

    // line 109
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontWebsiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 109,  284 => 93,  279 => 43,  274 => 35,  269 => 15,  263 => 5,  258 => 110,  256 => 109,  252 => 108,  248 => 107,  243 => 105,  239 => 104,  235 => 103,  231 => 102,  227 => 101,  223 => 100,  219 => 99,  215 => 98,  209 => 94,  207 => 93,  195 => 84,  191 => 83,  185 => 80,  167 => 64,  158 => 61,  148 => 60,  145 => 59,  141 => 58,  131 => 51,  126 => 49,  117 => 43,  114 => 42,  105 => 40,  101 => 39,  94 => 35,  91 => 34,  89 => 33,  76 => 23,  70 => 20,  64 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  31 => 5,  25 => 1,);
    }
}
