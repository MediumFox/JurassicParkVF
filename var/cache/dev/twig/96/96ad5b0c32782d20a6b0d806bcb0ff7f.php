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

/* security/forgottenPassword.html.twig */
class __TwigTemplate_d3d9a97fdf4f2c589c8c88c9f050f842 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgottenPassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgottenPassword.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/forgottenPassword.html.twig", 1);
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

        yield "Modifier mot de passe";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 7
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "    <div class=\"flex justify-center items-center min-h-screen w-[100vw] bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-6 uppercase\">Réinitialiser votre mot de passe</h1>
                <form method=\"post\" class=\"w-[90%]\">
                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"email\" class=\"text-bleuLune font-semibold\">Email de votre compte :</label>
                        <input type=\"email\" name=\"email\" id=\"email\" 
                               class=\"border border-bleuGlace p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                               autocomplete=\"email\" required autofocus>
                    </div>
                    <button type=\"submit\" class=\"bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 hover:bg-bleuGlace cursor-pointer\">Envoyer un mail</button>
                </form>
            </div>
        </div>

        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
            <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/register.jpg"), "html", null, true);
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
        return "security/forgottenPassword.html.twig";
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
        return array (  133 => 26,  114 => 9,  105 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier mot de passe{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}
    <div class=\"flex justify-center items-center min-h-screen w-[100vw] bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-6 uppercase\">Réinitialiser votre mot de passe</h1>
                <form method=\"post\" class=\"w-[90%]\">
                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"email\" class=\"text-bleuLune font-semibold\">Email de votre compte :</label>
                        <input type=\"email\" name=\"email\" id=\"email\" 
                               class=\"border border-bleuGlace p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                               autocomplete=\"email\" required autofocus>
                    </div>
                    <button type=\"submit\" class=\"bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 hover:bg-bleuGlace cursor-pointer\">Envoyer un mail</button>
                </form>
            </div>
        </div>

        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
            <img src=\"{{ asset('img/register.jpg') }}\" alt=\"Illustration de connexion\"
            class=\"absolute inset-0 w-full h-full object-cover z-0\">
            <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
    </div>
{% endblock %}
", "security/forgottenPassword.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\security\\forgottenPassword.html.twig");
    }
}
