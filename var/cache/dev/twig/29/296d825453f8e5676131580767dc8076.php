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

/* client/profile.html.twig */
class __TwigTemplate_2a2e5c4f5716484a596471d71d1976a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/profile.html.twig", 1);
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

        yield "Mon Profil";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "client/profile.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
    <div class=\"p-10 w-full h-fit flex justify-center items-center relative dark:bg-gray-900\">
        ";
        // line 9
        yield from $this->loadTemplate("client/dashboard-client.html.twig", "client/profile.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
        <div class=\"w-full ml-[20%] max-w-4xl bg-white rounded-xl shadow-lg shadow-slate-900 p-8\">
            <div>
                <h1 class=\"text-2xl font-bold text-bleuLune dark:text-white\">
                    Bienvenue ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield " sur votre profil.
                </h1>
                <p class=\"text-slate-500 dark:text-slate-400\">Bon retour à vous.</p>
            </div>

            <form id=\"profile-form\" class=\"space-y-2 mt-6\" method=\"POST\">
                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Email</label>
                    <input type=\"email\" name=\"email\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
        yield "\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\" required>
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-email\">Email invalide</p>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Nom</label>
                    <input type=\"text\" name=\"nom\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\" required>
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-nom\">Nom ne doit pas être vide</p>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Prénom</label>
                    <input type=\"text\" name=\"prenom\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), "html", null, true);
        yield "\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\" required>
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-prenom\">Prénom ne doit pas être vide</p>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Téléphone</label>
                    <input type=\"text\" name=\"numeroTelephone\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 40, $this->source); })()), "numeroTelephone", [], "any", false, false, false, 40), "html", null, true);
        yield "\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\" required>
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-tel\">Téléphone invalide (10 chiffres requis)</p>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Adresse</label>
                    <input type=\"text\" name=\"adressePostal\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 46, $this->source); })()), "adressePostal", [], "any", false, false, false, 46), "html", null, true);
        yield "\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\">
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-adresse\">Adresse postal ne doit pas être vide</p>

                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Code Postal</label>
                    <input type=\"number\" name=\"codePostal\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 53, $this->source); })()), "codePostal", [], "any", false, false, false, 53), "html", null, true);
        yield "\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\">
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-code\">Code postal ne doit pas être vide</p>
                </div>

                <div class=\"pt-4\">
                    <button type=\"submit\" class=\"bg-slate-900 text-white px-4 py-2 rounded cursor-pointer hover:bg-bleuLune transition\">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('profile-form').addEventListener('submit', function (e) {
            let hasError = false;

            // Email validation
            const emailInput = document.querySelector('input[name=\"email\"]');
            const emailError = document.getElementById('error-email');
            const emailRegex = /^[^@\\s]+@[^@\\s]+\\.[^@\\s]+\$/;
            if (!emailRegex.test(emailInput.value.trim())) {
                emailError.classList.remove('hidden');
                hasError = true;
            } else {
                emailError.classList.add('hidden');
            }

            // Téléphone validation
            const telInput = document.querySelector('input[name=\"numeroTelephone\"]');
            const telError = document.getElementById('error-tel');
            const telRegex = /^\\d{10}\$/;
            if (!telRegex.test(telInput.value.trim())) {
                telError.classList.remove('hidden');
                hasError = true;
            } else {
                telError.classList.add('hidden');
            }

            //Champ text validation
            const nomInput = document.querySelector('input[name=\"nom\"]');
            const nomError = document.getElementById('error-nom');
            const prenomInput = document.querySelector('input[name=\"prenom\"]');
            const prenomError = document.getElementById('error-tel');
            const adresseInput = document.querySelector('input[name=\"adressePostal\"]');
            const adresseError = document.getElementById('error-adresse');
            const codeInput = document.querySelector('input[name=\"codePostal\"]');
            const codeError = document.getElementById('error-code');

            if(nomInput.value == \"\"){
                nomError.classList.remove('hidden');
                hasError = true;
            }else{
                nomError.classList.add('hidden');
            }

            if(prenomInput.value == \"\"){
                prenomError.classList.remove('hidden');
                hasError = true;
            }else{
                prenomError.classList.add('hidden');
            }

            if(adresseInput.value == \"\"){
                adresseError.classList.remove('hidden');
                hasError = true;
            }else{
                adresseError.classList.add('hidden');
            }

            if(codeInput.value == \"\"){
                codeError.classList.remove('hidden');
                hasError = true;
            }else{
                codeError.classList.add('hidden');
            }

            if (hasError) {
                e.preventDefault(); 
            }
        });
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
        return "client/profile.html.twig";
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
        return array (  174 => 53,  164 => 46,  155 => 40,  146 => 34,  137 => 28,  128 => 22,  115 => 14,  109 => 10,  107 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}

    <div class=\"p-10 w-full h-fit flex justify-center items-center relative dark:bg-gray-900\">
        {% include 'client/dashboard-client.html.twig' %}

        <div class=\"w-full ml-[20%] max-w-4xl bg-white rounded-xl shadow-lg shadow-slate-900 p-8\">
            <div>
                <h1 class=\"text-2xl font-bold text-bleuLune dark:text-white\">
                    Bienvenue {{ client.prenom }} {{ client.nom }} sur votre profil.
                </h1>
                <p class=\"text-slate-500 dark:text-slate-400\">Bon retour à vous.</p>
            </div>

            <form id=\"profile-form\" class=\"space-y-2 mt-6\" method=\"POST\">
                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Email</label>
                    <input type=\"email\" name=\"email\" value=\"{{ client.email }}\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\" required>
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-email\">Email invalide</p>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Nom</label>
                    <input type=\"text\" name=\"nom\" value=\"{{ client.nom }}\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\" required>
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-nom\">Nom ne doit pas être vide</p>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Prénom</label>
                    <input type=\"text\" name=\"prenom\" value=\"{{ client.prenom }}\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\" required>
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-prenom\">Prénom ne doit pas être vide</p>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Téléphone</label>
                    <input type=\"text\" name=\"numeroTelephone\" value=\"{{ client.numeroTelephone }}\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\" required>
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-tel\">Téléphone invalide (10 chiffres requis)</p>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Adresse</label>
                    <input type=\"text\" name=\"adressePostal\" value=\"{{ client.adressePostal }}\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\">
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-adresse\">Adresse postal ne doit pas être vide</p>

                </div>

                <div>
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-200\">Code Postal</label>
                    <input type=\"number\" name=\"codePostal\" value=\"{{ client.codePostal }}\" class=\"w-full rounded-md border px-3 py-1 mt-1 dark:bg-slate-700 dark:text-white\">
                    <p class=\"text-red-500 text-sm hidden\" id=\"error-code\">Code postal ne doit pas être vide</p>
                </div>

                <div class=\"pt-4\">
                    <button type=\"submit\" class=\"bg-slate-900 text-white px-4 py-2 rounded cursor-pointer hover:bg-bleuLune transition\">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('profile-form').addEventListener('submit', function (e) {
            let hasError = false;

            // Email validation
            const emailInput = document.querySelector('input[name=\"email\"]');
            const emailError = document.getElementById('error-email');
            const emailRegex = /^[^@\\s]+@[^@\\s]+\\.[^@\\s]+\$/;
            if (!emailRegex.test(emailInput.value.trim())) {
                emailError.classList.remove('hidden');
                hasError = true;
            } else {
                emailError.classList.add('hidden');
            }

            // Téléphone validation
            const telInput = document.querySelector('input[name=\"numeroTelephone\"]');
            const telError = document.getElementById('error-tel');
            const telRegex = /^\\d{10}\$/;
            if (!telRegex.test(telInput.value.trim())) {
                telError.classList.remove('hidden');
                hasError = true;
            } else {
                telError.classList.add('hidden');
            }

            //Champ text validation
            const nomInput = document.querySelector('input[name=\"nom\"]');
            const nomError = document.getElementById('error-nom');
            const prenomInput = document.querySelector('input[name=\"prenom\"]');
            const prenomError = document.getElementById('error-tel');
            const adresseInput = document.querySelector('input[name=\"adressePostal\"]');
            const adresseError = document.getElementById('error-adresse');
            const codeInput = document.querySelector('input[name=\"codePostal\"]');
            const codeError = document.getElementById('error-code');

            if(nomInput.value == \"\"){
                nomError.classList.remove('hidden');
                hasError = true;
            }else{
                nomError.classList.add('hidden');
            }

            if(prenomInput.value == \"\"){
                prenomError.classList.remove('hidden');
                hasError = true;
            }else{
                prenomError.classList.add('hidden');
            }

            if(adresseInput.value == \"\"){
                adresseError.classList.remove('hidden');
                hasError = true;
            }else{
                adresseError.classList.add('hidden');
            }

            if(codeInput.value == \"\"){
                codeError.classList.remove('hidden');
                hasError = true;
            }else{
                codeError.classList.add('hidden');
            }

            if (hasError) {
                e.preventDefault(); 
            }
        });
    </script>
{% endblock %}
", "client/profile.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\profile.html.twig");
    }
}
