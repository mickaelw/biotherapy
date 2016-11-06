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
        return array (  171 => 66,  166 => 40,  161 => 14,  156 => 67,  154 => 66,  150 => 65,  145 => 63,  137 => 61,  133 => 60,  109 => 41,  107 => 40,  92 => 33,  90 => 32,  86 => 31,  81 => 28,  74 => 24,  70 => 23,  66 => 21,  64 => 20,  60 => 19,  54 => 15,  52 => 14,  48 => 13,  40 => 11,  29 => 6,  22 => 1,  177 => 70,  165 => 61,  159 => 58,  153 => 55,  147 => 52,  141 => 62,  135 => 46,  129 => 59,  123 => 40,  117 => 37,  111 => 34,  104 => 31,  100 => 35,  93 => 27,  89 => 26,  82 => 23,  78 => 22,  71 => 19,  67 => 18,  59 => 15,  55 => 14,  49 => 10,  47 => 9,  44 => 12,  41 => 7,  36 => 10,  31 => 3,);
    }
}
