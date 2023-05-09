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

/* database/multi_table_query/form.twig */
class __TwigTemplate_0659fa58c61b2f68152c664cd4e28a91 extends \Twig\Template
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
        echo "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"";
        // line 3
        echo PhpMyAdmin\Url::getFromRoute("/database/multi-table-query", ["db" => ($context["db"] ?? null)]);
        echo "\">
      ";
        // line 4
        echo _gettext("Multi-table query");
        // line 5
        echo "    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 9
        echo PhpMyAdmin\Url::getFromRoute("/database/qbe", ["db" => ($context["db"] ?? null)]);
        echo "\">
      ";
        // line 10
        echo _gettext("Query by example");
        // line 11
        echo "    </a>
  </li>
</ul>

<div id=\"query_div\" class=\"pma_auto_slider\" title=\"";
        // line 15
        echo _gettext("Query window");
        echo "\">

<form action=\"\" id=\"multi_table_query_form\" class=\"multi_table_query_form query_form\">
    <input type=\"hidden\" id=\"db_name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
        echo "\">
    <fieldset>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 21
            echo "            <div class=\"query-form__div--hide\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["table"], "hash", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                <option value=\"*\">*</option>
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["table"], "columns", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 24
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["default_no_of_columns"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 30
            echo "            ";
            if (($context["id"] == 0)) {
                echo "<div class=\"query-form__div--hide\" id=\"new_column_layout\">";
            }
            // line 31
            echo "            <fieldset class=\"column_details query-form__fieldset--inline\">
                <select class=\"tableNameSelect query-form__select--inline\">
                    <option value=\"\">";
            // line 33
            echo _gettext("select table");
            echo "</option>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["tables"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                // line 35
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </select>
                <span>.</span>
                <select class=\"columnNameSelect query-form__select--inline\">
                    <option value=\"\">";
            // line 40
            echo _gettext("select column");
            echo "</option>
                </select>
                <br>
                <input type=\"checkbox\" checked=\"checked\" class=\"show_col\">
                <span>";
            // line 44
            echo _gettext("Show");
            echo "</span>
                <br>
                <input type=\"text\" placeholder=\"";
            // line 46
            echo _gettext("Table alias");
            echo "\" class=\"table_alias\">
                <input type=\"text\" placeholder=\"";
            // line 47
            echo _gettext("Column alias");
            echo "\" class=\"col_alias\">
                <br>
                <input type=\"checkbox\"
                    title=\"";
            // line 50
            echo _gettext("Use this column in criteria");
            echo "\"
                    class=\"criteria_col\">

                <div id=\"criteria_div";
            // line 53
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" class=\"pma_auto_slider\" title=\"";
            echo _gettext("criteria");
            echo "\" style=\"display: none; overflow:auto;\">

                <div>
                    <table class=\"pma-table\">

                        <tr class=\"sort_order query-form__tr--bg-none\">
                            <td>";
            // line 59
            echo _gettext("Sort");
            echo "</td>
                            <td><input type=\"radio\" name=\"sort[";
            // line 60
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\">";
            echo _gettext("Ascending");
            echo "</td>
                            <td><input type=\"radio\" name=\"sort[";
            // line 61
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\">";
            echo _gettext("Descending");
            echo "</td>
                        </tr>

                        <tr class=\"logical_operator query-form__tr--bg-none query-form__tr--hide\">
                            <td>";
            // line 65
            echo _gettext("Add as");
            echo "</td>
                            <td>
                                <input type=\"radio\"
                                    name=\"logical_op[";
            // line 68
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\"
                                    value=\"AND\"
                                    class=\"logical_op\"
                                    checked=\"checked\">
                                AND
                            </td>
                            <td>
                                <input type=\"radio\"
                                    name=\"logical_op[";
            // line 76
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\"
                                    value=\"OR\"
                                    class=\"logical_op\">
                                OR
                            </td>
                        </tr>

                        <tr class=\"query-form__tr--bg-none\">
                            <td>Op </td>
                            <td>
                                <select class=\"criteria_op\">
                                    <option value=\"=\">=</option>
                                    <option value=\">\">&gt;</option>
                                    <option value=\">=\">&gt;=</option>
                                    <option value=\"<\">&lt;</option>
                                    <option value=\"<=\">&lt;=</option>
                                    <option value=\"!=\">!=</option>
                                    <option value=\"LIKE\">LIKE</option>
                                    <option value=\"LIKE %...%\">LIKE %...%</option>
                                    <option value=\"NOT LIKE\">NOT LIKE</option>
                                    <option value=\"IN (...)\">IN (...)</option>
                                    <option value=\"NOT IN (...)\">NOT IN (...)</option>
                                    <option value=\"BETWEEN\">BETWEEN</option>
                                    <option value=\"NOT BETWEEN\">NOT BETWEEN</option>
                                    <option value=\"IS NULL\">IS NULL</option>
                                    <option value=\"IS NOT NULL\">IS NOT NULL</option>
                                    <option value=\"REGEXP\">REGEXP</option>
                                    <option value=\"REGEXP ^...\$\">REGEXP ^...\$</option>
                                    <option value=\"NOT REGEXP\">NOT REGEXP</option>
                                </select>
                            </td>
                            <td>
                                <select class=\"criteria_rhs\">
                                    <option value=\"text\">";
            // line 109
            echo _gettext("Text");
            echo "</option>
                                    <option value=\"anotherColumn\">";
            // line 110
            echo _gettext("Another column");
            echo "</option>
                                </select>
                            </td>
                        </tr>

                        <tr class=\"rhs_table query-form__tr--hide query-form__tr--bg-none\">
                            <td></td>
                            <td>
                                <select  class=\"tableNameSelect\">
                                    <option value=\"\">";
            // line 119
            echo _gettext("select table");
            echo "</option>
                                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["tables"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                // line 121
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                </select><span>.</span>
                            </td>
                            <td>
                                <select class=\"columnNameSelect query-form__select--inline\">
                                    <option value=\"\">";
            // line 127
            echo _gettext("select column");
            echo "</option>
                                </select>
                            </td>
                        </tr>

                        <tr class=\"rhs_text query-form__tr--bg-none\">
                            <td></td>
                            <td colspan=\"2\">
                                <input type=\"text\"
                                    class=\"rhs_text_val query-form__input--wide\"
                                    placeholder=\"";
            // line 137
            echo _gettext("Enter criteria as free text");
            echo "\">
                            </td>
                        </tr>

                        </table>
                    </div>
                </div>
                <a href=\"#\"
                    title=\"";
            // line 145
            echo _gettext("Remove this column");
            echo "\"
                    class=\"removeColumn query-form__remove-column\">
                    X
                </a>
            </fieldset>
            ";
            // line 150
            if (($context["id"] == 0)) {
                echo "</div>";
            }
            // line 151
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
        <fieldset class=\"query-form__fieldset--inline\">
            <input class=\"btn btn-secondary\" type=\"button\" value=\"";
        // line 154
        echo _gettext("+ Add column");
        echo "\" id=\"add_column_button\">
        </fieldset>

        <fieldset>
              ";
        // line 159
        echo "                <textarea id=\"MultiSqlquery\"
                    class=\"query-form__multi-sql-query\"
                    cols=\"80\"
                    rows=\"4\"
                    name=\"sql_query\"
                    dir=\"ltr\"></textarea>
        </fieldset>
    </fieldset>

    <fieldset class=\"tblFooters\">
        <input class=\"btn btn-secondary\" type=\"button\" id=\"update_query_button\" value=\"";
        // line 169
        echo _gettext("Update query");
        echo "\">
        <input class=\"btn btn-primary\" type=\"button\" id=\"submit_query\" value=\"";
        // line 170
        echo _gettext("Submit query");
        echo "\">
    </fieldset>
</form>
</div>
<div id=\"sql_results\"></div>
";
    }

    public function getTemplateName()
    {
        return "database/multi_table_query/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 170,  365 => 169,  353 => 159,  346 => 154,  342 => 152,  336 => 151,  332 => 150,  324 => 145,  313 => 137,  300 => 127,  294 => 123,  283 => 121,  279 => 120,  275 => 119,  263 => 110,  259 => 109,  223 => 76,  212 => 68,  206 => 65,  197 => 61,  191 => 60,  187 => 59,  176 => 53,  170 => 50,  164 => 47,  160 => 46,  155 => 44,  148 => 40,  143 => 37,  132 => 35,  128 => 34,  124 => 33,  120 => 31,  115 => 30,  111 => 29,  108 => 28,  101 => 26,  90 => 24,  86 => 23,  80 => 21,  76 => 20,  71 => 18,  65 => 15,  59 => 11,  57 => 10,  53 => 9,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/multi_table_query/form.twig", "D:\\usbwebserver\\phpmyadmin\\templates\\database\\multi_table_query\\form.twig");
    }
}
