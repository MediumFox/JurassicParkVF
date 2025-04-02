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

/* horaire/index.html.twig */
class __TwigTemplate_9153d2c935551d39c50a12e113856478 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "horaire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "horaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "horaire/index.html.twig", 1);
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

        yield "Les horaires";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "horaire/index.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    <div class=\"flex justify-around p-5 gap-10\">
        <div class=\"w-[30%]\">
            ";
        // line 9
        yield from $this->loadTemplate("reuse/dashboard-admin.html.twig", "horaire/index.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "        </div>
        <div class=\"w-[70%] mx-auto p-2\">
            <div class=\"w-[100%] flex justify-end\" onClick=\"ajouterData()\">
                <span class=\"p-1.5 bg-slate-900 text-white font-bold rounded text-sm cursor-pointer\">Créer un horaire</span>
            </div> 
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les horaires</h1>
            <div class=\"grid-cols-4 grid-rows-4 grid gap-7 overflow-hidden\">
                ";
        // line 17
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["horaires"]) || array_key_exists("horaires", $context) ? $context["horaires"] : (function () { throw new RuntimeError('Variable "horaires" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "                    ";
            yield from $this->loadTemplate("horaire/_horaire_cards.html.twig", "horaire/index.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "                ";
        } else {
            // line 20
            yield "                    <span>Aucun horaire trouvé</span>
                ";
        }
        // line 22
        yield "            </div>
        </div>
    </div>
</div>
";
        // line 26
        yield from $this->loadTemplate("reuse/display/addDisplay.html.twig", "horaire/index.html.twig", 26)->unwrap()->yield($context);
        // line 27
        yield from $this->loadTemplate("reuse/display/updateDisplay.html.twig", "horaire/index.html.twig", 27)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "horaire/index.html.twig";
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
        return array (  138 => 27,  136 => 26,  130 => 22,  126 => 20,  123 => 19,  120 => 18,  118 => 17,  109 => 10,  107 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les horaires{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}
    <div class=\"flex justify-around p-5 gap-10\">
        <div class=\"w-[30%]\">
            {% include 'reuse/dashboard-admin.html.twig' %}
        </div>
        <div class=\"w-[70%] mx-auto p-2\">
            <div class=\"w-[100%] flex justify-end\" onClick=\"ajouterData()\">
                <span class=\"p-1.5 bg-slate-900 text-white font-bold rounded text-sm cursor-pointer\">Créer un horaire</span>
            </div> 
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les horaires</h1>
            <div class=\"grid-cols-4 grid-rows-4 grid gap-7 overflow-hidden\">
                {% if horaires is not empty %}
                    {% include 'horaire/_horaire_cards.html.twig' %}
                {% else %}
                    <span>Aucun horaire trouvé</span>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% include 'reuse/display/addDisplay.html.twig' %}
{% include 'reuse/display/updateDisplay.html.twig' %}
{% endblock %}

", "horaire/index.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\horaire\\index.html.twig");
    }
}
