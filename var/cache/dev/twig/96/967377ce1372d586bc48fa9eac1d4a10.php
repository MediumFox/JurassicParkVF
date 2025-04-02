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

/* paiement/paiement_form.html.twig */
class __TwigTemplate_0cab9bee759a0fa5fd1ac06ee5916c49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/paiement_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/paiement_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/paiement_form.html.twig", 1);
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

        yield "Paiement";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "paiement/paiement_form.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "<section class=\"max-w-xl mx-auto py-12 px-4 sm:px-6 lg:px-8\">
    <h1 class=\"text-3xl font-bold text-center text-[#244D61] mb-8\">Paiement sécurisé</h1>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "        <div class=\"bg-green-100 text-green-800 px-4 py-3 rounded mb-4 text-sm font-medium\">
            ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["error"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "        <div class=\"bg-red-100 text-red-800 px-4 py-3 rounded mb-4 text-sm font-medium\">
            ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
    <form action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_confirmation");
        yield "\" method=\"POST\" class=\"space-y-6 bg-white shadow-md rounded-2xl p-8\">
        <div>
            <label for=\"numero_carte\" class=\"block text-sm font-medium text-gray-700 mb-1\">Numéro de carte</label>
            <input type=\"text\" id=\"numero_carte\" name=\"numero_carte\"
                   class=\"w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-[#244D61] focus:border-[#244D61]\"
                   placeholder=\"1234 5678 9101 1121\" required>
        </div>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
            <div>
                <label for=\"date_expiration\" class=\"block text-sm font-medium text-gray-700 mb-1\">Date d'expiration</label>
                <input type=\"text\" id=\"date_expiration\" name=\"date_expiration\"
                       class=\"w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-[#244D61] focus:border-[#244D61]\"
                       placeholder=\"MM/AA\" required>
            </div>

            <div>
                <label for=\"cvv\" class=\"block text-sm font-medium text-gray-700 mb-1\">Code de sécurité (CVV)</label>
                <input type=\"text\" id=\"cvv\" name=\"cvv\"
                       class=\"w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-[#244D61] focus:border-[#244D61]\"
                       placeholder=\"123\" required>
            </div>
        </div>

        <div class=\"pt-4\">
            <button type=\"submit\"
                    class=\"w-full bg-[#5689C0] hover:bg-[#244D61] text-white font-semibold py-3 rounded-xl transition cursor-pointer\">
                Payer maintenant
            </button>
        </div>
    </form>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cardInput = document.getElementById('numero_carte');
        const expiryInput = document.getElementById('date_expiration');
        const cvvInput = document.getElementById('cvv');

        //Numéro de carte : 16 chiffres  (1234 5678 9012 3456)
        cardInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\\D/g, '').substring(0, 16);
            let formatted = '';
            for (let i = 0; i < value.length; i += 4) {
                formatted += value.substring(i, i + 4) + ' ';
            }
            e.target.value = formatted.trim();
        });

        // Date expiration : MM/AA
        expiryInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\\D/g, '').substring(0, 4);
            if (value.length >= 3) {
                value = value.substring(0, 2) + '/' + value.substring(2);
            }
            e.target.value = value;
        });

        // CVV : 3 chiffres uniquement
        cvvInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\\D/g, '').substring(0, 3);
        });
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
        return "paiement/paiement_form.html.twig";
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
        return array (  145 => 22,  142 => 21,  133 => 18,  130 => 17,  126 => 16,  123 => 15,  114 => 12,  111 => 11,  107 => 10,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement{% endblock %}

{% block body %}
{% include 'reuse/hero.html.twig' %}
<section class=\"max-w-xl mx-auto py-12 px-4 sm:px-6 lg:px-8\">
    <h1 class=\"text-3xl font-bold text-center text-[#244D61] mb-8\">Paiement sécurisé</h1>

    {% for message in app.flashes('success') %}
        <div class=\"bg-green-100 text-green-800 px-4 py-3 rounded mb-4 text-sm font-medium\">
            {{ message }}
        </div>
    {% endfor %}

    {% for message in app.flashes('error') %}
        <div class=\"bg-red-100 text-red-800 px-4 py-3 rounded mb-4 text-sm font-medium\">
            {{ message }}
        </div>
    {% endfor %}

    <form action=\"{{ path('paiement_confirmation') }}\" method=\"POST\" class=\"space-y-6 bg-white shadow-md rounded-2xl p-8\">
        <div>
            <label for=\"numero_carte\" class=\"block text-sm font-medium text-gray-700 mb-1\">Numéro de carte</label>
            <input type=\"text\" id=\"numero_carte\" name=\"numero_carte\"
                   class=\"w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-[#244D61] focus:border-[#244D61]\"
                   placeholder=\"1234 5678 9101 1121\" required>
        </div>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
            <div>
                <label for=\"date_expiration\" class=\"block text-sm font-medium text-gray-700 mb-1\">Date d'expiration</label>
                <input type=\"text\" id=\"date_expiration\" name=\"date_expiration\"
                       class=\"w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-[#244D61] focus:border-[#244D61]\"
                       placeholder=\"MM/AA\" required>
            </div>

            <div>
                <label for=\"cvv\" class=\"block text-sm font-medium text-gray-700 mb-1\">Code de sécurité (CVV)</label>
                <input type=\"text\" id=\"cvv\" name=\"cvv\"
                       class=\"w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-[#244D61] focus:border-[#244D61]\"
                       placeholder=\"123\" required>
            </div>
        </div>

        <div class=\"pt-4\">
            <button type=\"submit\"
                    class=\"w-full bg-[#5689C0] hover:bg-[#244D61] text-white font-semibold py-3 rounded-xl transition cursor-pointer\">
                Payer maintenant
            </button>
        </div>
    </form>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cardInput = document.getElementById('numero_carte');
        const expiryInput = document.getElementById('date_expiration');
        const cvvInput = document.getElementById('cvv');

        //Numéro de carte : 16 chiffres  (1234 5678 9012 3456)
        cardInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\\D/g, '').substring(0, 16);
            let formatted = '';
            for (let i = 0; i < value.length; i += 4) {
                formatted += value.substring(i, i + 4) + ' ';
            }
            e.target.value = formatted.trim();
        });

        // Date expiration : MM/AA
        expiryInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\\D/g, '').substring(0, 4);
            if (value.length >= 3) {
                value = value.substring(0, 2) + '/' + value.substring(2);
            }
            e.target.value = value;
        });

        // CVV : 3 chiffres uniquement
        cvvInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\\D/g, '').substring(0, 3);
        });
    });
</script>

{% endblock %}
", "paiement/paiement_form.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\paiement\\paiement_form.html.twig");
    }
}
