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
class __TwigTemplate_06cfb18b8b81d5deaa029d3f46baa0a7 extends Template
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
                <ul class=\"flex flex-row justify-between items-center gap-6 text-white font-bold mr-3\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    ";
            // line 14
            if ((isset($context["is_admin"]) || array_key_exists("is_admin", $context) ? $context["is_admin"] : (function () { throw new RuntimeError('Variable "is_admin" does not exist.', 14, $this->source); })())) {
                // line 15
                yield "                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/biome\">Les données</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/remboursement\">Les remboursements</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/logout\">Déconnexion</a></li>
                    ";
            } else {
                // line 19
                yield "                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/dinopedia\">Dinopédia</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/boutique\">Boutique</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/client/reserver-aventure/billet\">Réservez votre aventure</a></li>
                        <li class=\"relative group\">
                            <button class=\"flex items-center gap-1 px-2 py-1 rounded hover:bg-white hover:text-bleuLune font-bold transition duration-300\">
                                Mon compte
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mt-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                                </svg>
                            </button>
                            <ul class=\"absolute hidden group-hover:flex flex-col bg-white text-[#244D61] rounded-md shadow-lg top-full right-0 z-50 w-48 text-sm overflow-hidden\">
                                <li>
                                    <a href=\"/client/profile\" class=\"block px-4 py-2 hover:bg-[#f0f4f8] hover:text-[#244D61] transition\">Mon profil</a>
                                </li>
                                <li>
                                    <a href=\"/logout\" class=\"block px-4 py-2 hover:bg-[#f0f4f8] hover:text-[#244D61] transition\">Déconnexion</a>
                                </li>
                            </ul>
                        </li>
                        <p class=\"font-normal\">|</p>
                        <a href=\"/panier\">
                            <svg fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mt-1.5 cursor-pointer\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z\" />
                            </svg>
                        </a>

                    ";
            }
            // line 46
            yield "                </ul>
            ";
        } else {
            // line 48
            yield "                <ul class=\"flex flex-row justify-between gap-4 text-white font-bold\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/dinopedia\">Dinopédia</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/histoire\">Histoire</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/register\">Inscription</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/login\">Connexion</a></li>
                </ul>
            ";
        }
        // line 56
        yield "        </div>
    </nav>
</header>
<a href=\"#\" class=\"bottom-8 right-8 bg-bleuGlace rounded-full w-[2.5vw] h-[2.5vw] z-50 fixed flex justify-center items-center\">
    <svg viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"white\" class=\"size-6 fill-white \">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18\" />
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
        return array (  124 => 56,  114 => 48,  110 => 46,  81 => 19,  75 => 15,  73 => 14,  63 => 10,  61 => 9,  54 => 5,  48 => 1,);
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
                <ul class=\"flex flex-row justify-between items-center gap-6 text-white font-bold mr-3\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    {% if is_admin %}
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/biome\">Les données</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/admin/remboursement\">Les remboursements</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/logout\">Déconnexion</a></li>
                    {% else %}
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/dinopedia\">Dinopédia</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/boutique\">Boutique</a></li>
                        <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/client/reserver-aventure/billet\">Réservez votre aventure</a></li>
                        <li class=\"relative group\">
                            <button class=\"flex items-center gap-1 px-2 py-1 rounded hover:bg-white hover:text-bleuLune font-bold transition duration-300\">
                                Mon compte
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mt-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                                </svg>
                            </button>
                            <ul class=\"absolute hidden group-hover:flex flex-col bg-white text-[#244D61] rounded-md shadow-lg top-full right-0 z-50 w-48 text-sm overflow-hidden\">
                                <li>
                                    <a href=\"/client/profile\" class=\"block px-4 py-2 hover:bg-[#f0f4f8] hover:text-[#244D61] transition\">Mon profil</a>
                                </li>
                                <li>
                                    <a href=\"/logout\" class=\"block px-4 py-2 hover:bg-[#f0f4f8] hover:text-[#244D61] transition\">Déconnexion</a>
                                </li>
                            </ul>
                        </li>
                        <p class=\"font-normal\">|</p>
                        <a href=\"/panier\">
                            <svg fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mt-1.5 cursor-pointer\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z\" />
                            </svg>
                        </a>

                    {% endif %}
                </ul>
            {% else %}
                <ul class=\"flex flex-row justify-between gap-4 text-white font-bold\">
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/\">Accueil</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/dinopedia\">Dinopédia</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/histoire\">Histoire</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/register\">Inscription</a></li>
                    <li class=\" hover:text-bleuLune transition duration-500 px-2 py-1 rounded hover:bg-white \"><a href=\"/login\">Connexion</a></li>
                </ul>
            {% endif %}
        </div>
    </nav>
</header>
<a href=\"#\" class=\"bottom-8 right-8 bg-bleuGlace rounded-full w-[2.5vw] h-[2.5vw] z-50 fixed flex justify-center items-center\">
    <svg viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"white\" class=\"size-6 fill-white \">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18\" />
    </svg>
</a>

", "reuse/header.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\header.html.twig");
    }
}
