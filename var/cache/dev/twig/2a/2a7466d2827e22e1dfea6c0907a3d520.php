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

/* user/histoire.html.twig */
class __TwigTemplate_c88488b9fe7de5c6cbab69710576f08a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/histoire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/histoire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/histoire.html.twig", 1);
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

        yield "L'Histoire de Jurassic Park";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "user/histoire.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "<section class=\"bg-white py-20 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-5xl mx-auto\">
        <div class=\"text-center mb-16\">
            <h1 class=\"text-5xl font-extrabold text-[#244D61]\">L'Épopée de Jurassic Park</h1>
            <p class=\"text-lg text-gray-600 mt-4\">Quand la science défie le temps…</p>
        </div>

        <div class=\"space-y-16 text-gray-800 leading-relaxed text-justify text-lg\">
            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\"> Une vision démesurée</h2>
                <p>
                    Tout commence dans les années 90, lorsque <strong>John Hammond</strong>, magnat de la bio-ingénierie,
                    décide de concrétiser un rêve fou : <em>ramener les dinosaures à la vie</em>. Grâce aux avancées spectaculaires
                    en génétique et à la découverte d'ADN de dinosaures piégé dans l'ambre, l'impossible devient soudainement... possible.
                </p>
            </div>

            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\">Une prouesse scientifique</h2>
                <p>
                    Au cœur d’un laboratoire secret sur l’île d’<strong>Isla Nublar</strong>, des scientifiques développent
                    des embryons de dinosaures viables. Très vite, le parc voit naître ses premiers pensionnaires :
                    le <strong>Tricératops</strong>, le <strong>Brachiosaure</strong>, et bien sûr… le <strong>Velociraptor</strong>.
                </p>
                <p>
                    Jurassic Park ne tarde pas à prendre forme : enclos à haute sécurité, centre des visiteurs ultra moderne,
                    jeep automatiques, zone d'observation panoramique et hébergements de luxe.
                </p>
            </div>

            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\">Une ouverture pleine de promesses</h2>
                <p>
                    Avant son inauguration officielle, Hammond invite une équipe d’experts pour valider la sécurité du parc.
                    Mais malgré les apparences de contrôle, les dinosaures, eux, ne sont pas prévisibles…
                </p>
                <p class=\"text-red-600 font-semibold italic\">
                    La vie trouve toujours un chemin.
                </p>
            </div>

            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\">L'équilibre rompu</h2>
                <p>
                    Une coupure de courant. Des clôtures qui lâchent. Des prédateurs en liberté. En quelques heures, le rêve
                    devient cauchemar. Le <strong>T-Rex</strong> s’échappe. Les Raptors chassent en meute. L'île plonge dans le chaos.
                </p>
                <p>
                    Hammond et son équipe n’ont plus qu’une solution : fuir. Le projet est suspendu… mais la graine de la fascination
                    a déjà germé dans l’esprit du monde entier.
                </p>
            </div>

            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\">Un héritage vivant</h2>
                <p>
                    Aujourd’hui, Jurassic Park est plus qu’un simple parc abandonné. Il incarne la frontière fragile entre
                    science et éthique, nature et contrôle, rêve et responsabilité.
                </p>
                <p class=\"text-[#5689C0] italic font-medium\">
                    Ce n’était pas seulement un parc… c’était un avertissement.
                </p>
            </div>
        </div>

        <div class=\"mt-20 text-center\">
            <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_accueil");
        yield "\"
               class=\"inline-block bg-[#5689C0] hover:bg-[#244D61] text-white font-semibold px-6 py-3 rounded-xl transition\">
                ⬅ Retour à l'accueil
            </a>
        </div>
    </div>
</section>
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
        return "user/histoire.html.twig";
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
        return array (  170 => 73,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}L'Histoire de Jurassic Park{% endblock %}

{% block body %}
{% include 'reuse/hero.html.twig' %}
<section class=\"bg-white py-20 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-5xl mx-auto\">
        <div class=\"text-center mb-16\">
            <h1 class=\"text-5xl font-extrabold text-[#244D61]\">L'Épopée de Jurassic Park</h1>
            <p class=\"text-lg text-gray-600 mt-4\">Quand la science défie le temps…</p>
        </div>

        <div class=\"space-y-16 text-gray-800 leading-relaxed text-justify text-lg\">
            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\"> Une vision démesurée</h2>
                <p>
                    Tout commence dans les années 90, lorsque <strong>John Hammond</strong>, magnat de la bio-ingénierie,
                    décide de concrétiser un rêve fou : <em>ramener les dinosaures à la vie</em>. Grâce aux avancées spectaculaires
                    en génétique et à la découverte d'ADN de dinosaures piégé dans l'ambre, l'impossible devient soudainement... possible.
                </p>
            </div>

            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\">Une prouesse scientifique</h2>
                <p>
                    Au cœur d’un laboratoire secret sur l’île d’<strong>Isla Nublar</strong>, des scientifiques développent
                    des embryons de dinosaures viables. Très vite, le parc voit naître ses premiers pensionnaires :
                    le <strong>Tricératops</strong>, le <strong>Brachiosaure</strong>, et bien sûr… le <strong>Velociraptor</strong>.
                </p>
                <p>
                    Jurassic Park ne tarde pas à prendre forme : enclos à haute sécurité, centre des visiteurs ultra moderne,
                    jeep automatiques, zone d'observation panoramique et hébergements de luxe.
                </p>
            </div>

            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\">Une ouverture pleine de promesses</h2>
                <p>
                    Avant son inauguration officielle, Hammond invite une équipe d’experts pour valider la sécurité du parc.
                    Mais malgré les apparences de contrôle, les dinosaures, eux, ne sont pas prévisibles…
                </p>
                <p class=\"text-red-600 font-semibold italic\">
                    La vie trouve toujours un chemin.
                </p>
            </div>

            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\">L'équilibre rompu</h2>
                <p>
                    Une coupure de courant. Des clôtures qui lâchent. Des prédateurs en liberté. En quelques heures, le rêve
                    devient cauchemar. Le <strong>T-Rex</strong> s’échappe. Les Raptors chassent en meute. L'île plonge dans le chaos.
                </p>
                <p>
                    Hammond et son équipe n’ont plus qu’une solution : fuir. Le projet est suspendu… mais la graine de la fascination
                    a déjà germé dans l’esprit du monde entier.
                </p>
            </div>

            <div>
                <h2 class=\"text-2xl font-bold text-[#244D61] mb-3\">Un héritage vivant</h2>
                <p>
                    Aujourd’hui, Jurassic Park est plus qu’un simple parc abandonné. Il incarne la frontière fragile entre
                    science et éthique, nature et contrôle, rêve et responsabilité.
                </p>
                <p class=\"text-[#5689C0] italic font-medium\">
                    Ce n’était pas seulement un parc… c’était un avertissement.
                </p>
            </div>
        </div>

        <div class=\"mt-20 text-center\">
            <a href=\"{{ path('app_user_accueil') }}\"
               class=\"inline-block bg-[#5689C0] hover:bg-[#244D61] text-white font-semibold px-6 py-3 rounded-xl transition\">
                ⬅ Retour à l'accueil
            </a>
        </div>
    </div>
</section>
{% endblock %}
", "user/histoire.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\user\\histoire.html.twig");
    }
}
