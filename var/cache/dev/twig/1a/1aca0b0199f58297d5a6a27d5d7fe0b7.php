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

/* reuse/header.html.twig */
class __TwigTemplate_aadbacefada651f0da5e7fca6c7311cd extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/header.html.twig"));

        // line 1
        yield "<header>
    <nav class=\"flex flex-row justify-between items-center p-3 bg-transparent h-[60px] absolute 0 z-50 w-full\">
        <div class=\"flex gap-3 items-center ml-5\">
            <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"h-[100px] w-auto absolute top-6 \"/>
        </div>
        <div class=\"flex flex-row gap-7 items-center text-white text-xl\">
            ";
        // line 7
        if ( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "                <p class=\"font-bold\">Bienvenue, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
            yield " !</p>
                <p>|</p>
                <ul class=\"flex flex-row justify-between gap-4 text-white font-bold\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    ";
            // line 12
            if ((isset($context["is_admin"]) || array_key_exists("is_admin", $context) ? $context["is_admin"] : (function () { throw new RuntimeError('Variable "is_admin" does not exist.', 12, $this->source); })())) {
                // line 13
                yield "                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/biome\">Les données</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/remboursement\">Les remboursements</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/statistiques\">Les statistiques</a></li>
                        <li class=\"h hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/profile\">Mon profil</a></li>
                    ";
            } else {
                // line 18
                yield "                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/dinopedia\">Dinopédia</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/services\">Nos services</a></li>

                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/boutique\">Boutique</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/client/reserver-aventure/billet\">Réservez votre aventure</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/client/profile\">Mon profil</a></li>
                    ";
            }
            // line 25
            yield "                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/logout\">Déconnexion</a></li>
                </ul>
            ";
        } else {
            // line 28
            yield "                <ul class=\"flex flex-row justify-between gap-4 text-white font-bold\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/dinopedia\">Dinopédia</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/services\">Nos services</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/histoire\">Histoire</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/register\">Inscription</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/login\">Connexion</a></li>
                </ul>
            ";
        }
        // line 37
        yield "        </div>
    </nav>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reuse/header.html.twig";
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
        return array (  103 => 37,  92 => 28,  87 => 25,  78 => 18,  71 => 13,  69 => 12,  61 => 8,  59 => 7,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header>
    <nav class=\"flex flex-row justify-between items-center p-3 bg-transparent h-[60px] absolute 0 z-50 w-full\">
        <div class=\"flex gap-3 items-center ml-5\">
            <img src=\"{{ asset('img/logo.png') }}\" alt=\"logo\" class=\"h-[100px] w-auto absolute top-6 \"/>
        </div>
        <div class=\"flex flex-row gap-7 items-center text-white text-xl\">
            {% if user is not null %}
                <p class=\"font-bold\">Bienvenue, {{ user.nom }} !</p>
                <p>|</p>
                <ul class=\"flex flex-row justify-between gap-4 text-white font-bold\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    {% if is_admin %}
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/biome\">Les données</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/remboursement\">Les remboursements</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/statistiques\">Les statistiques</a></li>
                        <li class=\"h hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/profile\">Mon profil</a></li>
                    {% else %}
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/dinopedia\">Dinopédia</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/services\">Nos services</a></li>

                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/boutique\">Boutique</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/client/reserver-aventure/billet\">Réservez votre aventure</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/client/profile\">Mon profil</a></li>
                    {% endif %}
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/logout\">Déconnexion</a></li>
                </ul>
            {% else %}
                <ul class=\"flex flex-row justify-between gap-4 text-white font-bold\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/dinopedia\">Dinopédia</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/services\">Nos services</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/histoire\">Histoire</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/register\">Inscription</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/login\">Connexion</a></li>
                </ul>
            {% endif %}
        </div>
    </nav>
</header>
", "reuse/header.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\header.html.twig");
    }
}
