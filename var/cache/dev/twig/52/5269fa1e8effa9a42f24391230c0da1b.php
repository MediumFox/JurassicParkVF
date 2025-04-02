<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* dinosaure/index.html.twig */
class __TwigTemplate_22e0f672664deb24b54d9f0bb59e5da2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dinosaure/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dinosaure/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dinosaure/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Les dinosaures";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        yield from $this->loadTemplate("reuse/hero.html.twig", "dinosaure/index.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    <div class=\"flex justify-around p-5 gap-10\">
        <div class=\"w-[30%]\">
            ";
        // line 9
        yield from $this->loadTemplate("reuse/dashboard-admin.html.twig", "dinosaure/index.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "        </div>
        <div class=\"w-[70%] mx-auto p-2\">
            <div class=\"w-[100%] flex justify-end\" onClick=\"ajouterData()\">
                <span class=\"p-1.5 bg-slate-900 text-white font-bold rounded text-sm cursor-pointer\">Créer un dinosaure</span>
            </div> 
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les dinosaures</h1>
            <div class=\"flex justify-between items-center w-full  mb-10\">
                <div class=\"flex flex-col \">
                    <label for='filterName' class=\"underline mb-1 text-bleuLune font-bold\">Trier par libellé :</label>
                    <input type='text' oninput=\"filterName()\" class=\"border border-bleuGlace p-0.5 w-[20vw] rounded focus:outline-none focus:ring-2 focus:ring-bleuClair\" id='filterName'/>
                </div>
                <div class=\"flex items-end justify-end gap-5\">
                    <div class=\"flex flex-col justify-end \">
                        <label for='selectRegime' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Régime :</label>
                        <select id='selectRegime' class=\"border border-bleuGlace p-1 rounded w-[20vw] focus:outline-none focus:ring-2 focus:ring-bleuClair\" onChange=\"filterName()\">
                            <option value=\"\">Tous</option>
                            <option value=\"Carnivore\">Carnivore</option>
                            <option value=\"Omnivore\">Omnivore</option>
                            <option value=\"Herbivore\">Herbivore</option>
                        </select>
                    </div>
                    <div class=\"flex flex-col justify-end \">
                        <label for='selectEre' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Ere :</label>
                        <select id='selectEre' class=\"border border-bleuGlace p-1 rounded w-[20vw] focus:outline-none focus:ring-2 focus:ring-bleuClair\" onChange=\"filterName()\">
                            <option value=\"\">Tous</option>
                            <option value=\"Neogene\">Neogene</option>
                            <option value=\"Paleogene\">Paleogene</option>
                            <option value=\"Cretace\">Cretace</option>
                            <option value=\"Jurassique\">Jurassique</option>
                            <option value=\"Trias\">Trias</option>
                            <option value=\"Permien\">Permien</option>
                            <option value=\"Carbonifère\">Carbonifère</option>
                            <option value=\"Devonien\">Devonien</option>
                            <option value=\"Silurien\">Silurien</option>
                            <option value=\"Ordovicien\">Ordovicien</option>
                            <option value=\"Cambrien\">Cambrien</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"grid-cols-4 grid-rows-4 grid gap-7 overflow-hidden\" id=\"dinosaureContainer\">
                ";
        // line 51
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["dinosaures"]) || array_key_exists("dinosaures", $context) ? $context["dinosaures"] : (function () { throw new RuntimeError('Variable "dinosaures" does not exist.', 51, $this->source); })()))) {
            // line 52
            yield "                    ";
            yield from $this->loadTemplate("dinosaure/_dinosaure_cards.html.twig", "dinosaure/index.html.twig", 52)->unwrap()->yield($context);
            // line 53
            yield "                ";
        } else {
            // line 54
            yield "                    <span>Aucun dinosaure trouvé</span>
                ";
        }
        // line 56
        yield "            </div>
        </div>
    </div>
</div>
";
        // line 60
        yield from $this->loadTemplate("reuse/display/addDisplay.html.twig", "dinosaure/index.html.twig", 60)->unwrap()->yield($context);
        // line 61
        yield from $this->loadTemplate("reuse/display/updateDisplay.html.twig", "dinosaure/index.html.twig", 61)->unwrap()->yield($context);
        // line 62
        yield "
<script>
    function filterName() {
    const container = document.getElementById(\"dinosaureContainer\");
    const libelle = document.getElementById(\"filterName\").value;
    const regime = document.getElementById(\"selectRegime\").value;
    const ere = document.getElementById(\"selectEre\").value;
    const url = \"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dinosaure_filter_name");
        yield "?libelle=\" + encodeURIComponent(libelle) + \"&regime=\" + encodeURIComponent(regime) + \"&ere=\" + encodeURIComponent(ere);

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                container.innerHTML = \"<p class='text-red-500 text-sm'>Aucun dinosaure trouvé.</p>\";
                return;
            }
            container.innerHTML = data.html;
        })
        .catch(error => {
            console.error(error);
            container.innerHTML = \"<p class='text-red-500 text-sm'>Erreur lors du chargement.</p>\";
        });
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dinosaure/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  183 => 69,  174 => 62,  172 => 61,  170 => 60,  164 => 56,  160 => 54,  157 => 53,  154 => 52,  152 => 51,  109 => 10,  107 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les dinosaures{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}
    <div class=\"flex justify-around p-5 gap-10\">
        <div class=\"w-[30%]\">
            {% include 'reuse/dashboard-admin.html.twig' %}
        </div>
        <div class=\"w-[70%] mx-auto p-2\">
            <div class=\"w-[100%] flex justify-end\" onClick=\"ajouterData()\">
                <span class=\"p-1.5 bg-slate-900 text-white font-bold rounded text-sm cursor-pointer\">Créer un dinosaure</span>
            </div> 
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les dinosaures</h1>
            <div class=\"flex justify-between items-center w-full  mb-10\">
                <div class=\"flex flex-col \">
                    <label for='filterName' class=\"underline mb-1 text-bleuLune font-bold\">Trier par libellé :</label>
                    <input type='text' oninput=\"filterName()\" class=\"border border-bleuGlace p-0.5 w-[20vw] rounded focus:outline-none focus:ring-2 focus:ring-bleuClair\" id='filterName'/>
                </div>
                <div class=\"flex items-end justify-end gap-5\">
                    <div class=\"flex flex-col justify-end \">
                        <label for='selectRegime' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Régime :</label>
                        <select id='selectRegime' class=\"border border-bleuGlace p-1 rounded w-[20vw] focus:outline-none focus:ring-2 focus:ring-bleuClair\" onChange=\"filterName()\">
                            <option value=\"\">Tous</option>
                            <option value=\"Carnivore\">Carnivore</option>
                            <option value=\"Omnivore\">Omnivore</option>
                            <option value=\"Herbivore\">Herbivore</option>
                        </select>
                    </div>
                    <div class=\"flex flex-col justify-end \">
                        <label for='selectEre' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Ere :</label>
                        <select id='selectEre' class=\"border border-bleuGlace p-1 rounded w-[20vw] focus:outline-none focus:ring-2 focus:ring-bleuClair\" onChange=\"filterName()\">
                            <option value=\"\">Tous</option>
                            <option value=\"Neogene\">Neogene</option>
                            <option value=\"Paleogene\">Paleogene</option>
                            <option value=\"Cretace\">Cretace</option>
                            <option value=\"Jurassique\">Jurassique</option>
                            <option value=\"Trias\">Trias</option>
                            <option value=\"Permien\">Permien</option>
                            <option value=\"Carbonifère\">Carbonifère</option>
                            <option value=\"Devonien\">Devonien</option>
                            <option value=\"Silurien\">Silurien</option>
                            <option value=\"Ordovicien\">Ordovicien</option>
                            <option value=\"Cambrien\">Cambrien</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"grid-cols-4 grid-rows-4 grid gap-7 overflow-hidden\" id=\"dinosaureContainer\">
                {% if dinosaures is not empty %}
                    {% include 'dinosaure/_dinosaure_cards.html.twig' %}
                {% else %}
                    <span>Aucun dinosaure trouvé</span>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% include 'reuse/display/addDisplay.html.twig' %}
{% include 'reuse/display/updateDisplay.html.twig' %}

<script>
    function filterName() {
    const container = document.getElementById(\"dinosaureContainer\");
    const libelle = document.getElementById(\"filterName\").value;
    const regime = document.getElementById(\"selectRegime\").value;
    const ere = document.getElementById(\"selectEre\").value;
    const url = \"{{ path('app_dinosaure_filter_name') }}?libelle=\" + encodeURIComponent(libelle) + \"&regime=\" + encodeURIComponent(regime) + \"&ere=\" + encodeURIComponent(ere);

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                container.innerHTML = \"<p class='text-red-500 text-sm'>Aucun dinosaure trouvé.</p>\";
                return;
            }
            container.innerHTML = data.html;
        })
        .catch(error => {
            console.error(error);
            container.innerHTML = \"<p class='text-red-500 text-sm'>Erreur lors du chargement.</p>\";
        });
    }
</script>
{% endblock %}
", "dinosaure/index.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\dinosaure\\index.html.twig");
    }
}
