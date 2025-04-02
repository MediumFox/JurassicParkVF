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

/* user/home.html.twig */
class __TwigTemplate_2da06a40bed3cb9b1846f5860851a067 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/home.html.twig", 1);
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

        yield "Accueil";
        
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
        yield "    <div class=\"flex justify-end flex-col items-center h-[80vh] relative bg-cover bg-center\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/test.jpg"), "html", null, true);
        yield "');\">
        <div class=\"absolute inset-0 z-10\" style=\"background-color: rgba(0, 0, 0, 0.5);\"></div>

        <div class=\"relative -top-[20%] text-gris text-center z-20 flex flex-col items-center space-y-4 px-4\">
            <h1 class=\"text-5xl font-extrabold drop-shadow-lg\">Jurassic Park</h1>
            <p class=\"text-lg max-w-xl opacity-80\">
                Plongez dans l'univers fascinant des dinosaures et explorez un parc unique en son genre. Sensations garanties !
            </p>
            <a href=\"#\" class=\"bg-bleuLune hover:bg-slate-900 text-gris font-semibold py-2 px-6 rounded-lg shadow-lg transition duration-300\">
                Réserver votre visite
            </a>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4\">
                <div class=\"bg-gris bg-opacity-10 p-3 rounded-lg shadow-md\">
                    <h3 class=\"text-xl font-bold text-bleuLune\">Rencontrez les Dinosaures</h3>
                    <p class=\"text-sm opacity-80 text-bleuGlace\">Des créatures grandeur nature vous attendent.</p>
                </div>
                <div class=\"bg-gris bg-opacity-10 p-3 rounded-lg shadow-md\">
                    <h3 class=\"text-xl font-bold text-bleuLune\">Services attractifs</h3>
                    <p class=\"text-sm opacity-80 text-bleuGlace\">Des services pour vous mettre dans les meilleures conditions.</p>
                </div>
                <div class=\"bg-gris bg-opacity-10 p-3 rounded-lg shadow-md\">
                    <h3 class=\"text-xl font-bold text-bleuLune\">Expéditions Sauvages</h3>
                    <p class=\"text-sm opacity-80 text-bleuGlace\">Parcourez la jungle et explorez un monde perdu.</p>
                </div>
            </div>

            <div class=\"text-lg bg-opacity-50 px-6 py-2 font-bold  rounded-lg mt-5\">
                <span class=\"text-gris text-2xl\" id=\"visitorCount\">2 345 678</span> visiteurs ont déjà tenté l'expérience !
            </div>
        </div>

        <svg 
        class=\"w-full h-[300px] absolute bottom-0 left-0 z-50\" 
        viewBox=\"0 0 1440 320\" 
        preserveAspectRatio=\"none\"
    >
        <path fill=\"#fff\" class=\"dark:fill-black\" fill-opacity=\"1\" d=\"M0,288L60,277.3C120,267,240,245,360,250.7C480,256,600,288,720,272C840,256,960,192,1080,181.3C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z\"></path>
    </svg>
    </div>
    ";
        // line 45
        yield from $this->loadTemplate("reuse/home/hotels.html.twig", "user/home.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "    ";
        yield from $this->loadTemplate("reuse/home/map.html.twig", "user/home.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "    ";
        yield from $this->loadTemplate("reuse/home/services.html.twig", "user/home.html.twig", 47)->unwrap()->yield($context);
        // line 48
        yield "    ";
        yield from $this->loadTemplate("apiComponents/weatherContainer.html.twig", "user/home.html.twig", 48)->unwrap()->yield($context);
        // line 49
        yield "
    <script>
        let count = 2345678;
        const counter = document.getElementById(\"visitorCount\");

        setInterval(() => {
            count += Math.floor(Math.random() * 10) + 1; 
            counter.innerText = count.toLocaleString();
        }, 3000);
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
        return "user/home.html.twig";
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
        return array (  154 => 49,  151 => 48,  148 => 47,  145 => 46,  143 => 45,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <div class=\"flex justify-end flex-col items-center h-[80vh] relative bg-cover bg-center\" style=\"background-image: url('{{ asset('img/test.jpg') }}');\">
        <div class=\"absolute inset-0 z-10\" style=\"background-color: rgba(0, 0, 0, 0.5);\"></div>

        <div class=\"relative -top-[20%] text-gris text-center z-20 flex flex-col items-center space-y-4 px-4\">
            <h1 class=\"text-5xl font-extrabold drop-shadow-lg\">Jurassic Park</h1>
            <p class=\"text-lg max-w-xl opacity-80\">
                Plongez dans l'univers fascinant des dinosaures et explorez un parc unique en son genre. Sensations garanties !
            </p>
            <a href=\"#\" class=\"bg-bleuLune hover:bg-slate-900 text-gris font-semibold py-2 px-6 rounded-lg shadow-lg transition duration-300\">
                Réserver votre visite
            </a>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4\">
                <div class=\"bg-gris bg-opacity-10 p-3 rounded-lg shadow-md\">
                    <h3 class=\"text-xl font-bold text-bleuLune\">Rencontrez les Dinosaures</h3>
                    <p class=\"text-sm opacity-80 text-bleuGlace\">Des créatures grandeur nature vous attendent.</p>
                </div>
                <div class=\"bg-gris bg-opacity-10 p-3 rounded-lg shadow-md\">
                    <h3 class=\"text-xl font-bold text-bleuLune\">Services attractifs</h3>
                    <p class=\"text-sm opacity-80 text-bleuGlace\">Des services pour vous mettre dans les meilleures conditions.</p>
                </div>
                <div class=\"bg-gris bg-opacity-10 p-3 rounded-lg shadow-md\">
                    <h3 class=\"text-xl font-bold text-bleuLune\">Expéditions Sauvages</h3>
                    <p class=\"text-sm opacity-80 text-bleuGlace\">Parcourez la jungle et explorez un monde perdu.</p>
                </div>
            </div>

            <div class=\"text-lg bg-opacity-50 px-6 py-2 font-bold  rounded-lg mt-5\">
                <span class=\"text-gris text-2xl\" id=\"visitorCount\">2 345 678</span> visiteurs ont déjà tenté l'expérience !
            </div>
        </div>

        <svg 
        class=\"w-full h-[300px] absolute bottom-0 left-0 z-50\" 
        viewBox=\"0 0 1440 320\" 
        preserveAspectRatio=\"none\"
    >
        <path fill=\"#fff\" class=\"dark:fill-black\" fill-opacity=\"1\" d=\"M0,288L60,277.3C120,267,240,245,360,250.7C480,256,600,288,720,272C840,256,960,192,1080,181.3C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z\"></path>
    </svg>
    </div>
    {% include 'reuse/home/hotels.html.twig' %}
    {% include 'reuse/home/map.html.twig' %}
    {% include 'reuse/home/services.html.twig' %}
    {% include 'apiComponents/weatherContainer.html.twig' %}

    <script>
        let count = 2345678;
        const counter = document.getElementById(\"visitorCount\");

        setInterval(() => {
            count += Math.floor(Math.random() * 10) + 1; 
            counter.innerText = count.toLocaleString();
        }, 3000);
    </script>
{% endblock %}
", "user/home.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\user\\home.html.twig");
    }
}
