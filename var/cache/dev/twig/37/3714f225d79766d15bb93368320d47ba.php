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

/* restaurant/index.html.twig */
class __TwigTemplate_a2131d5ede7e0c1a980651150ce051ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "restaurant/index.html.twig", 1);
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

        yield "Les restaurants";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "restaurant/index.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    <div class=\"flex justify-around p-5 gap-10\">
        <div class=\"w-[30%]\">
            ";
        // line 9
        yield from $this->loadTemplate("reuse/dashboard-admin.html.twig", "restaurant/index.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "        </div>
        <div class=\"w-[70%] mx-auto p-2\">
            <div class=\"w-[100%] flex justify-end\" onClick=\"ajouterData()\">
                <span class=\"p-1.5 bg-slate-900 text-white font-bold rounded text-sm cursor-pointer\">Créer un restaurant</span>
            </div> 
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les restaurants</h1>
            <div class=\"flex flex-col mb-2\">
                <label for='filterName' class=\"underline mb-1 text-bleuLune font-bold\">Trier par libellé :</label>
                <input type='text' oninput=\"filterName()\" class=\"border border-bleuGlace p-0.5 w-[20vw] rounded focus:outline-none focus:ring-2 focus:ring-bleuClair\" id='filterName'/>
            </div>
            <div class=\"grid-cols-4 grid-rows-4 grid gap-7\" id=\"restaurantContainer\">
                ";
        // line 21
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 21, $this->source); })()))) {
            // line 22
            yield "                    ";
            yield from $this->loadTemplate("restaurant/_restaurant_cards.html.twig", "restaurant/index.html.twig", 22)->unwrap()->yield($context);
            // line 23
            yield "                ";
        } else {
            // line 24
            yield "                    <span>Aucun restaurant trouvé</span>
                ";
        }
        // line 26
        yield "            </div>
        </div>
    </div>
</div>
";
        // line 30
        yield from $this->loadTemplate("reuse/display/addDisplay.html.twig", "restaurant/index.html.twig", 30)->unwrap()->yield($context);
        // line 31
        yield from $this->loadTemplate("reuse/display/updateDisplay.html.twig", "restaurant/index.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "
<script>
    function filterName() {
        const container = document.getElementById(\"restaurantContainer\");
        const libelle = document.getElementById(\"filterName\").value;
        const url = \"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_filter_name");
        yield "?libelle=\" + encodeURIComponent(libelle);

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    container.innerHTML = \"<p class='text-red-500 text-sm'>Aucun restaurant trouvé.</p>\";
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
        return "restaurant/index.html.twig";
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
        return array (  151 => 37,  144 => 32,  142 => 31,  140 => 30,  134 => 26,  130 => 24,  127 => 23,  124 => 22,  122 => 21,  109 => 10,  107 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les restaurants{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}
    <div class=\"flex justify-around p-5 gap-10\">
        <div class=\"w-[30%]\">
            {% include 'reuse/dashboard-admin.html.twig' %}
        </div>
        <div class=\"w-[70%] mx-auto p-2\">
            <div class=\"w-[100%] flex justify-end\" onClick=\"ajouterData()\">
                <span class=\"p-1.5 bg-slate-900 text-white font-bold rounded text-sm cursor-pointer\">Créer un restaurant</span>
            </div> 
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les restaurants</h1>
            <div class=\"flex flex-col mb-2\">
                <label for='filterName' class=\"underline mb-1 text-bleuLune font-bold\">Trier par libellé :</label>
                <input type='text' oninput=\"filterName()\" class=\"border border-bleuGlace p-0.5 w-[20vw] rounded focus:outline-none focus:ring-2 focus:ring-bleuClair\" id='filterName'/>
            </div>
            <div class=\"grid-cols-4 grid-rows-4 grid gap-7\" id=\"restaurantContainer\">
                {% if restaurants is not empty %}
                    {% include 'restaurant/_restaurant_cards.html.twig' %}
                {% else %}
                    <span>Aucun restaurant trouvé</span>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% include 'reuse/display/addDisplay.html.twig' %}
{% include 'reuse/display/updateDisplay.html.twig' %}

<script>
    function filterName() {
        const container = document.getElementById(\"restaurantContainer\");
        const libelle = document.getElementById(\"filterName\").value;
        const url = \"{{ path('app_restaurant_filter_name') }}?libelle=\" + encodeURIComponent(libelle);

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    container.innerHTML = \"<p class='text-red-500 text-sm'>Aucun restaurant trouvé.</p>\";
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

", "restaurant/index.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\restaurant\\index.html.twig");
    }
}
