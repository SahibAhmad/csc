<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/bootstrap/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_0b6d578f04dec4ed44fe6127e94fdb0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 14) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 14))) {
            // line 15
            echo "  <nav role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"sr-only\">";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager js-pager__items\">
      ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18)) {
                // line 19
                echo "        <li class=\"previous\">
          <a href=\"";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20), "href", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20), "attributes", [], "any", false, false, true, 20), 20, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"sr-only\">";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 22), "text", [], "any", true, true, true, 22)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 22), "text", [], "any", false, false, true, 22), 22, $this->source), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 26
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 26)) {
                // line 27
                echo "        <li class=\"next\">
          <a href=\"";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 28), "href", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 28), "attributes", [], "any", false, false, true, 28), 28, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"sr-only\">";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 30), "text", [], "any", true, true, true, 30)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 30), "text", [], "any", false, false, true, 30), 30, $this->source), t("››"))) : (t("››"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 34
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  91 => 30,  87 => 29,  79 => 28,  76 => 27,  73 => 26,  66 => 22,  62 => 21,  54 => 20,  51 => 19,  49 => 18,  44 => 16,  41 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/views/views-mini-pager.html.twig", "C:\\xampp\\htdocs\\projects\\drupal3\\themes\\contrib\\bootstrap\\templates\\views\\views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("t" => 16, "escape" => 20, "without" => 20, "default" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'without', 'default'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
