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
class __TwigTemplate_4043a3b5edf00d01a38a9adb99cf90f3 extends Template
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
        yield "<header id=\"#\">
    <nav class=\"flex flex-row justify-between items-center p-3 pt-7 bg-transparent h-[60px] absolute 0 z-50 w-full\">
        <div class=\"flex gap-3 items-center ml-5\">
            <a href=\"/\">
                <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"h-[100px] w-auto absolute top-6 cursor-pointer\"/>
            </a>
        </div>
        <div class=\"flex flex-row gap-7 items-center text-white text-xl\">
            ";
        // line 9
        if ( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "                <p class=\"font-bold\">Bienvenue, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "prenom", [], "any", false, false, false, 10), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
            yield " !</p>
                <p>|</p>
                <ul class=\"flex flex-row justify-between gap-6 text-white font-bold\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    ";
            // line 14
            if ((isset($context["is_admin"]) || array_key_exists("is_admin", $context) ? $context["is_admin"] : (function () { throw new RuntimeError('Variable "is_admin" does not exist.', 14, $this->source); })())) {
                // line 15
                yield "                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/biome\">Les données</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/remboursement\">Les remboursements</a></li>
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
<a href=\"#\" class=\"bottom-8 right-8 bg-bleuGlace rounded-full w-[2.5vw] h-[2.5vw] z-50 fixed flex justify-center items-center\">
    <svg viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"white\" class=\"size-6 fill-white\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18\" />
    </svg>
</a>

<a href=\"\" class=\"bottom-8 left-8 bg-bleuGlace rounded-full w-[2.5vw] h-[2.5vw] z-50 fixed flex justify-center items-center\">
    <svg fill=\"white\" class=\"size-6 fill-white\" viewBox=\"0 0 16 16\">
        <path d=\"M6 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m4.5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0\"/>
        <path d=\"M8 0a7.96 7.96 0 0 0-4.075 1.114q-.245.102-.437.28A8 8 0 1 0 8 0m3.25 14.201a1.5 1.5 0 0 0-2.13.71A7 7 0 0 1 8 15a6.97 6.97 0 0 1-3.845-1.15 1.5 1.5 0 1 0-2.005-2.005A6.97 6.97 0 0 1 1 8c0-1.953.8-3.719 2.09-4.989a1.5 1.5 0 1 0 2.469-1.574A7 7 0 0 1 8 1c1.42 0 2.742.423 3.845 1.15a1.5 1.5 0 1 0 2.005 2.005A6.97 6.97 0 0 1 15 8c0 .596-.074 1.174-.214 1.727a1.5 1.5 0 1 0-1.025 2.25 7 7 0 0 1-2.51 2.224Z\"/>
    </svg>
</a>
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
        return array (  105 => 37,  94 => 28,  89 => 25,  80 => 18,  75 => 15,  73 => 14,  63 => 10,  61 => 9,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header id=\"#\">
    <nav class=\"flex flex-row justify-between items-center p-3 pt-7 bg-transparent h-[60px] absolute 0 z-50 w-full\">
        <div class=\"flex gap-3 items-center ml-5\">
            <a href=\"/\">
                <img src=\"{{ asset('img/logo.png') }}\" alt=\"logo\" class=\"h-[100px] w-auto absolute top-6 cursor-pointer\"/>
            </a>
        </div>
        <div class=\"flex flex-row gap-7 items-center text-white text-xl\">
            {% if user is not null %}
                <p class=\"font-bold\">Bienvenue, {{ user.prenom }} {{ user.nom }} !</p>
                <p>|</p>
                <ul class=\"flex flex-row justify-between gap-6 text-white font-bold\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    {% if is_admin %}
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/biome\">Les données</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/remboursement\">Les remboursements</a></li>
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
<a href=\"#\" class=\"bottom-8 right-8 bg-bleuGlace rounded-full w-[2.5vw] h-[2.5vw] z-50 fixed flex justify-center items-center\">
    <svg viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"white\" class=\"size-6 fill-white\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18\" />
    </svg>
</a>

<a href=\"\" class=\"bottom-8 left-8 bg-bleuGlace rounded-full w-[2.5vw] h-[2.5vw] z-50 fixed flex justify-center items-center\">
    <svg fill=\"white\" class=\"size-6 fill-white\" viewBox=\"0 0 16 16\">
        <path d=\"M6 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m4.5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0\"/>
        <path d=\"M8 0a7.96 7.96 0 0 0-4.075 1.114q-.245.102-.437.28A8 8 0 1 0 8 0m3.25 14.201a1.5 1.5 0 0 0-2.13.71A7 7 0 0 1 8 15a6.97 6.97 0 0 1-3.845-1.15 1.5 1.5 0 1 0-2.005-2.005A6.97 6.97 0 0 1 1 8c0-1.953.8-3.719 2.09-4.989a1.5 1.5 0 1 0 2.469-1.574A7 7 0 0 1 8 1c1.42 0 2.742.423 3.845 1.15a1.5 1.5 0 1 0 2.005 2.005A6.97 6.97 0 0 1 15 8c0 .596-.074 1.174-.214 1.727a1.5 1.5 0 1 0-1.025 2.25 7 7 0 0 1-2.51 2.224Z\"/>
    </svg>
</a>
", "reuse/header.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\header.html.twig");
    }
}
