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

/* themes/contrib/bootstrap/templates/system/status-messages.html.twig */
class __TwigTemplate_fa84111c4a0ae13e59f3a046d928c063 extends Template
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
        // line 30
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetGet", [0 => "class"], "method", true, true, true, 30)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetGet", [0 => "class"], "method", false, false, true, 30), 30, $this->source), [])) : ([]));
        // line 32
        $context["status_heading"] = ["status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message")];
        // line 40
        $context["status_classes"] = ["status" => "success", "error" => "danger", "warning" => "warning", "info" => "info"];
        // line 48
        $context["status_roles"] = ["status" => "status", "error" => "alert", "warning" => "alert", "info" => "status"];
        // line 55
        echo "<div data-drupal-messages>
  <div class=\"messages__wrapper\">
  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 58
            echo "    ";
            // line 59
            $context["message_classes"] = [0 => "alert", 1 => ("alert-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =             // line 61
($context["status_classes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 61, $this->source)), 2 => "alert-dismissible"];
            // line 65
            echo "    ";
            // line 66
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "class", 1 => ($context["classes"] ?? null)], "method", false, false, true, 66), "addClass", [0 => ($context["message_classes"] ?? null)], "method", false, false, true, 66), "setAttribute", [0 => "role", 1 => (($__internal_compile_1 = ($context["status_roles"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)], "method", false, false, true, 66), "setAttribute", [0 => "aria-label", 1 => (($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
            echo ">
      <button type=\"button\" role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
            echo "\"><span aria-hidden=\"true\">&times;</span></button>
      ";
            // line 68
            if ((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null)) {
                // line 69
                echo "        <h2 class=\"sr-only\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["type"]] ?? null) : null), 69, $this->source), "html", null, true);
                echo "</h2>
      ";
            }
            // line 71
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 72
                echo "        <ul class=\"item-list item-list--messages\">
          ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 74
                    echo "            <li class=\"item item--message\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 74, $this->source), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "        </ul>
      ";
            } else {
                // line 78
                echo "        <p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 78, $this->source)), "html", null, true);
                echo "</p>
      ";
            }
            // line 80
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 82,  108 => 80,  102 => 78,  98 => 76,  89 => 74,  85 => 73,  82 => 72,  79 => 71,  73 => 69,  71 => 68,  67 => 67,  62 => 66,  60 => 65,  58 => 61,  57 => 59,  55 => 58,  51 => 57,  47 => 55,  45 => 48,  43 => 40,  41 => 32,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/system/status-messages.html.twig", "C:\\xampp\\htdocs\\projects\\drupal3\\themes\\contrib\\bootstrap\\templates\\system\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "for" => 57, "if" => 68);
        static $filters = array("default" => 30, "t" => 33, "escape" => 66, "length" => 71, "first" => 78);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 't', 'escape', 'length', 'first'],
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
