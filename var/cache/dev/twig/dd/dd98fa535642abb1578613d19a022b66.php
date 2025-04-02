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

/* registration/register_client.html.twig */
class __TwigTemplate_27a47f25a86540065da856a7f46439f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_client.html.twig", 1);
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

        yield "S'enregistrer";
        
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
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-6 uppercase\">Espace d'inscription</h1>
                
                ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "flex flex-col gap-2 w-[90%]"]]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'row');
        yield "
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "numeroTelephone", [], "any", false, false, false, 16), 'row');
        yield "
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'row');
        yield "
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'row');
        yield "
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "adressePostal", [], "any", false, false, false, 19), 'row');
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "codePostal", [], "any", false, false, false, 20), 'row');
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), 'row');
        yield "
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "agreeTerms", [], "any", false, false, false, 22), 'row');
        yield "

                    <button id=\"submit\" type=\"submit\" class=\"bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 hover:bg-bleuGlace cursor-pointer\">S'inscrire</button>
                ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'form_end');
        yield "

                <p class=\"mt-4 text-bleuLune\">
                    Pas encore de compte ? <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-bleuGlace underline\">Se connecter</a>
                </p>
            </div>
        </div>

        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
            <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/register.jpg"), "html", null, true);
        yield "\" alt=\"Illustration de connexion\"
            class=\"absolute inset-0 w-full h-full object-cover z-0\">
            <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        let pwd = document.getElementById(\"client_registration_form_plainPassword\");
        let submit = document.getElementById(\"submit\");
        let isOkay = false;
        function isPwdValid(value) {
            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d).{8,}\$/;
            return regex.test(value);
        }

        pwd.addEventListener('blur', function (){
            if(!isPwdValid(pwd.value)){
                pwd.classList.add('border', 'border-red-500');
                isOkay = false;
                afficherErreur(pwd, \"N'a pas le format : 1 majuscule, une majuscule, un caractère spécial, un nombre, 8 caractères minimum\")
            }else{
                nettoyerErreur(pwd);
                isOkay = true;
            }
        })

        submit.addEventListener('click', function (e) {
            if (!isOkay) {
                e.preventDefault();
            } else {
                nettoyerErreur(pwd);
            }
        });

        function afficherErreur(champ, message) {
            if (champ.nextElementSibling && champ.nextElementSibling.classList.contains('message-erreur')) {
                champ.nextElementSibling.remove();
            }

            const divErreur = document.createElement('div');
            divErreur.textContent = message;
            divErreur.classList.add('text-red-500', 'text-sm', 'mt-1', 'message-erreur');
            champ.insertAdjacentElement('afterend', divErreur);

            champ.classList.add('border', 'border-red-500');
        }

        function nettoyerErreur(champ) {
            if (champ.nextElementSibling && champ.nextElementSibling.classList.contains('message-erreur')) {
                champ.nextElementSibling.remove();
            }
            champ.classList.remove('border-red-500');
        }
    })
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
        return "registration/register_client.html.twig";
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
        return array (  174 => 34,  165 => 28,  159 => 25,  153 => 22,  149 => 21,  145 => 20,  141 => 19,  137 => 18,  133 => 17,  129 => 16,  125 => 15,  121 => 14,  114 => 9,  105 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S'enregistrer{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}
    <div class=\"flex justify-center items-center min-h-screen w-[100vw] bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-6 uppercase\">Espace d'inscription</h1>
                
                {{ form_start(registrationForm, {'attr': {'class': 'flex flex-col gap-2 w-[90%]'}}) }}
                    {{ form_row(registrationForm.email) }}
                    {{ form_row(registrationForm.numeroTelephone) }}
                    {{ form_row(registrationForm.nom) }}
                    {{ form_row(registrationForm.prenom) }}
                    {{ form_row(registrationForm.adressePostal) }}
                    {{ form_row(registrationForm.codePostal) }}
                    {{ form_row(registrationForm.plainPassword) }}
                    {{ form_row(registrationForm.agreeTerms) }}

                    <button id=\"submit\" type=\"submit\" class=\"bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 hover:bg-bleuGlace cursor-pointer\">S'inscrire</button>
                {{ form_end(registrationForm) }}

                <p class=\"mt-4 text-bleuLune\">
                    Pas encore de compte ? <a href=\"{{ path('app_login') }}\" class=\"text-bleuGlace underline\">Se connecter</a>
                </p>
            </div>
        </div>

        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
            <img src=\"{{ asset('img/register.jpg') }}\" alt=\"Illustration de connexion\"
            class=\"absolute inset-0 w-full h-full object-cover z-0\">
            <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        let pwd = document.getElementById(\"client_registration_form_plainPassword\");
        let submit = document.getElementById(\"submit\");
        let isOkay = false;
        function isPwdValid(value) {
            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d).{8,}\$/;
            return regex.test(value);
        }

        pwd.addEventListener('blur', function (){
            if(!isPwdValid(pwd.value)){
                pwd.classList.add('border', 'border-red-500');
                isOkay = false;
                afficherErreur(pwd, \"N'a pas le format : 1 majuscule, une majuscule, un caractère spécial, un nombre, 8 caractères minimum\")
            }else{
                nettoyerErreur(pwd);
                isOkay = true;
            }
        })

        submit.addEventListener('click', function (e) {
            if (!isOkay) {
                e.preventDefault();
            } else {
                nettoyerErreur(pwd);
            }
        });

        function afficherErreur(champ, message) {
            if (champ.nextElementSibling && champ.nextElementSibling.classList.contains('message-erreur')) {
                champ.nextElementSibling.remove();
            }

            const divErreur = document.createElement('div');
            divErreur.textContent = message;
            divErreur.classList.add('text-red-500', 'text-sm', 'mt-1', 'message-erreur');
            champ.insertAdjacentElement('afterend', divErreur);

            champ.classList.add('border', 'border-red-500');
        }

        function nettoyerErreur(champ) {
            if (champ.nextElementSibling && champ.nextElementSibling.classList.contains('message-erreur')) {
                champ.nextElementSibling.remove();
            }
            champ.classList.remove('border-red-500');
        }
    })
    </script>
{% endblock %}
", "registration/register_client.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\registration\\register_client.html.twig");
    }
}
