<?php

/* themes/custom/davinci/templates/page.html.twig */
class __TwigTemplate_30035ebd4fb64ecd29925e480458bbf9376ea9821e8a4d849aa09949fe571e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 98);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 55
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    <div class=\"header_first\">
      ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", array()), "html", null, true));
        echo "
    </div>
    <div class=\"header_second\">
      ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_second", array()), "html", null, true));
        echo "
    </div>
    <div class=\"header_third\">
      ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_third", array()), "html", null, true));
        echo "
    </div>
  </header>

  <div class=\"navbar\">
    ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navbar", array()), "html", null, true));
        echo "
  </div>

  ";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

  <div class=\"features\">
    <div class=\"features_first\">
       ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "features_first", array()), "html", null, true));
        echo "
    </div>
    <div class=\"features_second\">
       ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "features_second", array()), "html", null, true));
        echo "
    </div>
    <div class=\"features_third\">
       ";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "features_third", array()), "html", null, true));
        echo "
    </div>
  </div>

  ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 93
        echo "
    <div class=\"layout-content\">
      ";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 97
        echo "
    ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 99
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 103
        echo "                                                                                          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 104
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 108
        echo "
  </main>

  <div class=\"tertiary\">
    ";
        // line 112
        if ($this->getAttribute(($context["page"] ?? null), "tertiary_first", array())) {
            // line 113
            echo "      <div class=\"tertiary_first\">
        ";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tertiary_first", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 117
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "tertiary_second", array())) {
            // line 118
            echo "      <div class=\"tertiary_second\">
        ";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tertiary_second", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 122
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "tertiary_third", array())) {
            // line 123
            echo "      <div class=\"tertiary_third\">
        ";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tertiary_third", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 127
        echo "  </div>

  ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 130
            echo "    <footer role=\"contentinfo\">
      ";
            // line 131
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 134
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/davinci/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 134,  196 => 131,  193 => 130,  191 => 129,  187 => 127,  181 => 124,  178 => 123,  175 => 122,  169 => 119,  166 => 118,  163 => 117,  157 => 114,  154 => 113,  152 => 112,  146 => 108,  140 => 105,  137 => 104,  134 => 103,  128 => 100,  125 => 99,  123 => 98,  120 => 97,  116 => 95,  112 => 93,  106 => 89,  99 => 85,  93 => 82,  87 => 79,  80 => 75,  75 => 73,  69 => 70,  61 => 65,  55 => 62,  49 => 59,  43 => 55,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/davinci/templates/page.html.twig", "/var/www/html/drupal/themes/custom/davinci/templates/page.html.twig");
    }
}
