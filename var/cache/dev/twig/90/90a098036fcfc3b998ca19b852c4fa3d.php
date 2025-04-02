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

/* security/login.html.twig */
class __TwigTemplate_93a9d7364e9bdef25816111062510219 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Connexion";
        
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
        yield "    <div class=\"flex justify-center items-center min-h-screen w-full bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-6 uppercase\">Espace de connexion</h1>
                
                <form method=\"post\" class=\"w-[90%]\">
                    ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "                        <div class=\"bg-red-500 text-white p-3 rounded mb-4\">
                            ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 17
        yield "
                    ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            yield "                        <div class=\"mb-4 text-center\">
                            Vous êtes connecté en tant que <span class=\"font-semibold\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "userIdentifier", [], "any", false, false, false, 20), "html", null, true);
            yield "</span>, 
                            <a href=\"";
            // line 21
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-bleuClair underline\">Déconnexion</a>
                        </div>
                    ";
        }
        // line 24
        yield "
                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"email\" class=\"text-bleuLune font-semibold\">Email</label>
                        <input type=\"email\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"email\" 
                               class=\"border border-bleuGlace p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                               autocomplete=\"email\" required autofocus>
                    </div>

                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"password\" class=\"text-bleuLune font-semibold\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"password\" 
                               class=\"border border-bleuGlace p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                               autocomplete=\"current-password\" required/>
                        <a class=\"text-bleuGlace decoration-0 text-right italic hover:underline\" href=\"/mot-de-passe-oublie\">Mot de passé oublié ?</a>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                    <div class=\"checkbox mb-3\">
                        <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\">
                        <label for=\"_remember_me\">Se souvenir de moi</label>
                    </div>
                    <button type=\"submit\" 
                            class=\"bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 hover:bg-bleuGlace cursor-pointer\">
                        Se connecter
                    </button>
                </form>

                <p class=\"mt-4 text-bleuLune\">
                    Déjà un compte ? <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_client");
        yield "\" class=\"text-bleuGlace underline\">Créer un compte</a>
                </p>
            </div>
        </div>
        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
                <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/login.jpg"), "html", null, true);
        yield "\" alt=\"Illustration de connexion\"
                class=\"absolute inset-0 w-full h-full object-cover z-0\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
    </div>
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
        return "security/login.html.twig";
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
        return array (  181 => 57,  173 => 52,  158 => 40,  142 => 27,  137 => 24,  131 => 21,  127 => 20,  124 => 19,  122 => 18,  119 => 17,  113 => 14,  110 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
    <div class=\"flex justify-center items-center min-h-screen w-full bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-6 uppercase\">Espace de connexion</h1>
                
                <form method=\"post\" class=\"w-[90%]\">
                    {% if error %}
                        <div class=\"bg-red-500 text-white p-3 rounded mb-4\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}

                    {% if app.user %}
                        <div class=\"mb-4 text-center\">
                            Vous êtes connecté en tant que <span class=\"font-semibold\">{{ app.user.userIdentifier }}</span>, 
                            <a href=\"{{ path('app_logout') }}\" class=\"text-bleuClair underline\">Déconnexion</a>
                        </div>
                    {% endif %}

                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"email\" class=\"text-bleuLune font-semibold\">Email</label>
                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"email\" 
                               class=\"border border-bleuGlace p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                               autocomplete=\"email\" required autofocus>
                    </div>

                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"password\" class=\"text-bleuLune font-semibold\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"password\" 
                               class=\"border border-bleuGlace p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                               autocomplete=\"current-password\" required/>
                        <a class=\"text-bleuGlace decoration-0 text-right italic hover:underline\" href=\"/mot-de-passe-oublie\">Mot de passé oublié ?</a>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    <div class=\"checkbox mb-3\">
                        <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\">
                        <label for=\"_remember_me\">Se souvenir de moi</label>
                    </div>
                    <button type=\"submit\" 
                            class=\"bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 hover:bg-bleuGlace cursor-pointer\">
                        Se connecter
                    </button>
                </form>

                <p class=\"mt-4 text-bleuLune\">
                    Déjà un compte ? <a href=\"{{ path('app_register_client') }}\" class=\"text-bleuGlace underline\">Créer un compte</a>
                </p>
            </div>
        </div>
        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
                <img src=\"{{ asset('img/login.jpg') }}\" alt=\"Illustration de connexion\"
                class=\"absolute inset-0 w-full h-full object-cover z-0\">
                <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
    </div>
{% endblock %}
", "security/login.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\security\\login.html.twig");
    }
}
