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

/* @radix/navbar/navbar.twig */
class __TwigTemplate_7346f218b54212f7b024cbd457a0a734f47b0b83db1d4a5c7d0424bace230155 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("radix/navbar"), "html", null, true);
        echo "

";
        // line 20
        $context["container"] = (((($context["container"] ?? null) == "fixed")) ? ("container") : (false));
        // line 21
        $context["placement"] = (($context["placement"]) ?? (""));
        // line 22
        $context["color"] = (($context["color"]) ?? ("light"));
        // line 23
        echo "
<nav class=\"navbar navbar-expand-lg justify-content-between navbar-";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color"] ?? null), 24, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placement"] ?? null), 24, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null), 24, $this->source), " "), "html", null, true);
        echo "\">
  ";
        // line 25
        if (($context["container"] ?? null)) {
            // line 26
            echo "    <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 26, $this->source), "html", null, true);
            echo "\">
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        $this->displayBlock('branding', $context, $blocks);
        // line 32
        echo "
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\">
    ";
        // line 38
        $this->displayBlock('left', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('right', $context, $blocks);
        // line 45
        echo "  </div>

  ";
        // line 47
        if (($context["container"] ?? null)) {
            // line 48
            echo "    </div>
  ";
        }
        // line 50
        echo "</nav>
";
    }

    // line 29
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["branding"] ?? null), 30, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 38
    public function block_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null), 39, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 42
    public function block_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null), 43, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@radix/navbar/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  129 => 42,  122 => 39,  118 => 38,  111 => 30,  107 => 29,  102 => 50,  98 => 48,  96 => 47,  92 => 45,  90 => 42,  87 => 41,  85 => 38,  77 => 32,  75 => 29,  72 => 28,  66 => 26,  64 => 25,  56 => 24,  53 => 23,  51 => 22,  49 => 21,  47 => 20,  42 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/navbar/navbar.twig", "/var/www/drupalvm/drupal/web/themes/contrib/radix/src/components/navbar/navbar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20, "if" => 25, "block" => 29);
        static $filters = array("escape" => 18, "join" => 24);
        static $functions = array("attach_library" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'join'],
                ['attach_library']
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
