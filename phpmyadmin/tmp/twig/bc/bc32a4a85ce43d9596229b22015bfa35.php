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

/* database/search/main.twig */
class __TwigTemplate_833a9c9fcab3f4aa359cecfb1398e3ca extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a id=\"db_search\"></a>
<form id=\"db_search_form\" method=\"post\" action=\"";
        // line 2
        echo PhpMyAdmin\Url::getFromRoute("/database/search");
        echo "\" name=\"db_search\" class=\"ajax lock-page\">
    ";
        // line 3
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "
    <fieldset>
        <legend>";
        // line 5
        echo _gettext("Search in database");
        echo "</legend>
        <p>
            <label for=\"criteriaSearchString\" class=\"displayblock\">
                ";
        // line 8
        echo _gettext("Words or values to search for (wildcard: \"%\"):");
        // line 9
        echo "            </label>
            <input id=\"criteriaSearchString\" name=\"criteriaSearchString\" class=\"w-75\" type=\"text\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["criteria_search_string"] ?? null), "html", null, true);
        echo "\">
        </p>

        <fieldset>
            <legend>";
        // line 15
        echo _gettext("Find:");
        echo "</legend>

            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio1\" value=\"1\"";
        // line 18
        echo (((($context["criteria_search_type"] ?? null) == "1")) ? (" checked") : (""));
        echo ">
              <label for=\"criteriaSearchTypeRadio1\">";
        // line 19
        echo _gettext("at least one of the words");
        echo " ";
        echo \PhpMyAdmin\Html\Generator::showHint(_gettext("Words are separated by a space character (\" \")."));
        echo "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio2\" value=\"2\"";
        // line 22
        echo (((($context["criteria_search_type"] ?? null) == "2")) ? (" checked") : (""));
        echo ">
              <label for=\"criteriaSearchTypeRadio2\">";
        // line 23
        echo _gettext("all of the words");
        echo " ";
        echo \PhpMyAdmin\Html\Generator::showHint(_gettext("Words are separated by a space character (\" \")."));
        echo "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio3\" value=\"3\"";
        // line 26
        echo (((($context["criteria_search_type"] ?? null) == "3")) ? (" checked") : (""));
        echo ">
              <label for=\"criteriaSearchTypeRadio3\">";
        // line 27
        echo _gettext("the exact phrase as substring");
        echo "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio4\" value=\"4\"";
        // line 30
        echo (((($context["criteria_search_type"] ?? null) == "4")) ? (" checked") : (""));
        echo ">
              <label for=\"criteriaSearchTypeRadio4\">";
        // line 31
        echo _gettext("the exact phrase as whole field");
        echo "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio5\" value=\"5\"";
        // line 34
        echo (((($context["criteria_search_type"] ?? null) == "5")) ? (" checked") : (""));
        echo ">
              <label for=\"criteriaSearchTypeRadio5\">";
        // line 35
        echo _gettext("as regular expression");
        echo " ";
        echo \PhpMyAdmin\Html\MySQLDocumentation::show("Regexp");
        echo "</label>
            </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 40
        echo _gettext("Inside tables:");
        echo "</legend>
            <p>
                <a href=\"#\" onclick=\"Functions.setSelectOptions('db_search', 'criteriaTables[]', true); return false;\">
                    ";
        // line 43
        echo _gettext("Select all");
        // line 44
        echo "                </a> /
                <a href=\"#\" onclick=\"Functions.setSelectOptions('db_search', 'criteriaTables[]', false); return false;\">
                    ";
        // line 46
        echo _gettext("Unselect all");
        // line 47
        echo "                </a>
            </p>
            <select class=\"resize-vertical\" name=\"criteriaTables[]\" multiple>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tables_names_only"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_table"]) {
            // line 51
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["each_table"], "html", null, true);
            echo "\"
                            ";
            // line 52
            if ((twig_length_filter($this->env, ($context["criteria_tables"] ?? null)) > 0)) {
                // line 53
                echo ((twig_in_filter($context["each_table"], ($context["criteria_tables"] ?? null))) ? (" selected") : (""));
                echo "
                            ";
            } else {
                // line 55
                echo " selected";
                echo "
                            ";
            }
            // line 57
            echo "                        >
                        ";
            // line 58
            echo twig_escape_filter($this->env, $context["each_table"], "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </select>
        </fieldset>

        <p>
            ";
        // line 66
        echo "            <label for=\"criteriaColumnName\" class=\"displayblock\">
                ";
        // line 67
        echo _gettext("Inside column:");
        // line 68
        echo "            </label>
            <input id=\"criteriaColumnName\" type=\"text\" name=\"criteriaColumnName\" class=\"w-75\" value=\"";
        // line 70
        (( !twig_test_empty(($context["criteria_column_name"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["criteria_column_name"] ?? null), "html", null, true))) : (print ("")));
        echo "\">
        </p>
    </fieldset>
    <fieldset class=\"tblFooters\">
        <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" name=\"submit_search\" value=\"";
        // line 74
        echo _gettext("Go");
        echo "\">
    </fieldset>
</form>
<div id=\"togglesearchformdiv\">
    <a id=\"togglesearchformlink\"></a>
</div>
<div id=\"searchresults\"></div>
<div id=\"togglesearchresultsdiv\"><a id=\"togglesearchresultlink\"></a></div>
<br class=\"clearfloat\">
";
        // line 84
        echo "<div id=\"table-info\">
    <a id=\"table-link\" class=\"item\"></a>
</div>
";
        // line 88
        echo "<div id=\"browse-results\">
    ";
        // line 90
        echo "</div>
<div id=\"sqlqueryform\" class=\"clearfloat\">
    ";
        // line 93
        echo "</div>
";
        // line 95
        echo "<button class=\"btn btn-secondary\" id=\"togglequerybox\"></button>
";
    }

    public function getTemplateName()
    {
        return "database/search/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 95,  228 => 93,  224 => 90,  221 => 88,  216 => 84,  204 => 74,  197 => 70,  194 => 68,  192 => 67,  189 => 66,  183 => 61,  174 => 58,  171 => 57,  166 => 55,  161 => 53,  159 => 52,  154 => 51,  150 => 50,  145 => 47,  143 => 46,  139 => 44,  137 => 43,  131 => 40,  121 => 35,  117 => 34,  111 => 31,  107 => 30,  101 => 27,  97 => 26,  89 => 23,  85 => 22,  77 => 19,  73 => 18,  67 => 15,  60 => 11,  57 => 9,  55 => 8,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/search/main.twig", "D:\\usbwebserver\\phpmyadmin\\templates\\database\\search\\main.twig");
    }
}
