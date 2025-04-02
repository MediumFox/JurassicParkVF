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

/* client/index.html.twig */
class __TwigTemplate_131745d72b9e0ddefe18a87992474087 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
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

        yield "Les clients";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "client/index.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    <div class=\"flex justify-around p-5 gap-10\">
        <div class=\"w-[30%]\">
            ";
        // line 9
        yield from $this->loadTemplate("reuse/dashboard-admin.html.twig", "client/index.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "        </div>
        <div class=\"w-[70%] mx-auto p-2\">
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les clients</h1>
            <div class=\"flex justify-between items-center w-full  mb-10\">
                <div class=\"flex flex-col \">
                    <label for='filterName' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Nom/Prénom :</label>
                    <input type='text' oninput=\"filterName()\" class=\"border border-bleuGlace p-0.5 w-[20vw] rounded focus:outline-none focus:ring-2 focus:ring-bleuClair\" id='filterName'/>
                </div>
            </div>
            <div class=\"w-full overflow-hidden\" id=\"clientContainer\">
                ";
        // line 20
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "                    ";
            yield from $this->loadTemplate("client/_client_cards.html.twig", "client/index.html.twig", 21)->unwrap()->yield($context);
            // line 22
            yield "                ";
        } else {
            // line 23
            yield "                    <span>Aucun client trouvé</span>
                ";
        }
        // line 25
        yield "            </div>
        </div>
    </div>
</div>
";
        // line 29
        yield from $this->loadTemplate("reuse/display/updateDisplay.html.twig", "client/index.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "
<script>
    function filterName() {
    const container = document.getElementById(\"clientContainer\");
    const libelle = document.getElementById(\"filterName\").value;
    const url = \"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_filter_name");
        yield "?libelle=\" + encodeURIComponent(libelle);

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                container.innerHTML = \"<p class='text-red-500 text-sm'>Aucun client trouvé.</p>\";
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
        return "client/index.html.twig";
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
        return array (  148 => 35,  141 => 30,  139 => 29,  133 => 25,  129 => 23,  126 => 22,  123 => 21,  121 => 20,  109 => 10,  107 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les clients{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}
    <div class=\"flex justify-around p-5 gap-10\">
        <div class=\"w-[30%]\">
            {% include 'reuse/dashboard-admin.html.twig' %}
        </div>
        <div class=\"w-[70%] mx-auto p-2\">
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les clients</h1>
            <div class=\"flex justify-between items-center w-full  mb-10\">
                <div class=\"flex flex-col \">
                    <label for='filterName' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Nom/Prénom :</label>
                    <input type='text' oninput=\"filterName()\" class=\"border border-bleuGlace p-0.5 w-[20vw] rounded focus:outline-none focus:ring-2 focus:ring-bleuClair\" id='filterName'/>
                </div>
            </div>
            <div class=\"w-full overflow-hidden\" id=\"clientContainer\">
                {% if clients is not empty %}
                    {% include 'client/_client_cards.html.twig' %}
                {% else %}
                    <span>Aucun client trouvé</span>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% include 'reuse/display/updateDisplay.html.twig' %}

<script>
    function filterName() {
    const container = document.getElementById(\"clientContainer\");
    const libelle = document.getElementById(\"filterName\").value;
    const url = \"{{ path('app_client_filter_name') }}?libelle=\" + encodeURIComponent(libelle);

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                container.innerHTML = \"<p class='text-red-500 text-sm'>Aucun client trouvé.</p>\";
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
", "client/index.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\index.html.twig");
    }
}
