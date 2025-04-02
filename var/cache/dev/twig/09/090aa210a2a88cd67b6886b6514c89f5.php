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

/* produit/panier.html.twig */
class __TwigTemplate_39a2cd5f4441383e1b27e02c9bbd9f3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/panier.html.twig", 1);
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

        yield "Mon Panier";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "produit/panier.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "<section class=\"max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8\">
    <h1 class=\"text-4xl font-bold mb-10 text-[#244D61] text-center\">🛒 Mon Panier</h1>

    ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "        <div class=\"bg-yellow-100 text-yellow-800 px-6 py-4 rounded-xl text-center text-lg font-medium\">
            Votre panier est vide.
        </div>
    ";
        } else {
            // line 15
            yield "        <div class=\"space-y-6\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                yield "                <div class=\"flex flex-col sm:flex-row items-center bg-white rounded-2xl shadow-md overflow-hidden p-4 gap-6\">
                    <img src=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 18), "imageProduit", [], "any", false, false, false, 18)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 18), "libelleProduit", [], "any", false, false, false, 18), "html", null, true);
                yield "\"
                         class=\"w-full sm:w-40 h-40 object-cover rounded-xl border\">

                    <div class=\"flex-1 w-full\">
                        <h2 class=\"text-xl font-bold text-[#244D61]\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 22), "libelleProduit", [], "any", false, false, false, 22), "html", null, true);
                yield "</h2>
                        <p class=\"text-sm text-gray-600 mt-1\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 23), "descriptionProduit", [], "any", false, false, false, 23), 0, 100) . "..."), "html", null, true);
                yield "</p>

                        <div class=\"mt-4 flex items-center gap-4\">
                            <form action=\"";
                // line 26
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_modifier");
                yield "\" method=\"post\" class=\"flex items-center gap-2\">
                                <input type=\"hidden\" name=\"id\" value=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
                yield "\">
                                <input type=\"number\" name=\"quantite\" value=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 28), "html", null, true);
                yield "\" min=\"1\"
                                       class=\"w-16 rounded-md border border-gray-300 px-2 py-1 text-center\">
                                <button type=\"submit\"
                                        class=\"bg-[#5689C0] hover:bg-[#244D61] text-white px-3 py-1 rounded transition\">
                                    Approuver
                                </button>
                            </form>

                            <span class=\"text-lg font-medium text-gray-700\">
                                ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "prixProduit", [], "any", false, false, false, 37), 2, ",", " "), "html", null, true);
                yield " € x ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 37), "html", null, true);
                yield " =
                                <strong class=\"text-[#244D61]\">
                                    ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "prixProduit", [], "any", false, false, false, 39) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39)), 2, ",", " "), "html", null, true);
                yield " €
                                </strong>
                            </span>
                        </div>
                    </div>

                    <div>
                        <a href=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\"
                           class=\"text-red-600 hover:text-red-800 font-semibold text-sm\">
                            Supprimer
                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "        </div>

        <div class=\"mt-10 text-right\">
            <h4 class=\"text-2xl font-bold text-[#244D61]\">Total : ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</h4>
            <a href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement");
            yield "\"
               class=\"inline-block mt-4 bg-[#5689C0] hover:bg-[#244D61] text-white font-medium px-6 py-3 rounded-xl transition\">
                Procéder au paiement
            </a>
        </div>
    ";
        }
        // line 63
        yield "    
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
        return "produit/panier.html.twig";
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
        return array (  212 => 63,  203 => 57,  199 => 56,  194 => 53,  181 => 46,  171 => 39,  164 => 37,  152 => 28,  148 => 27,  144 => 26,  138 => 23,  134 => 22,  125 => 18,  122 => 17,  118 => 16,  115 => 15,  109 => 11,  107 => 10,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Panier{% endblock %}

{% block body %}
{% include 'reuse/hero.html.twig' %}
<section class=\"max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8\">
    <h1 class=\"text-4xl font-bold mb-10 text-[#244D61] text-center\">🛒 Mon Panier</h1>

    {% if articles is empty %}
        <div class=\"bg-yellow-100 text-yellow-800 px-6 py-4 rounded-xl text-center text-lg font-medium\">
            Votre panier est vide.
        </div>
    {% else %}
        <div class=\"space-y-6\">
            {% for item in articles %}
                <div class=\"flex flex-col sm:flex-row items-center bg-white rounded-2xl shadow-md overflow-hidden p-4 gap-6\">
                    <img src=\"{{ asset(item.product.imageProduit) }}\" alt=\"{{ item.product.libelleProduit }}\"
                         class=\"w-full sm:w-40 h-40 object-cover rounded-xl border\">

                    <div class=\"flex-1 w-full\">
                        <h2 class=\"text-xl font-bold text-[#244D61]\">{{ item.product.libelleProduit }}</h2>
                        <p class=\"text-sm text-gray-600 mt-1\">{{ item.product.descriptionProduit|slice(0, 100) ~ '...' }}</p>

                        <div class=\"mt-4 flex items-center gap-4\">
                            <form action=\"{{ path('panier_modifier') }}\" method=\"post\" class=\"flex items-center gap-2\">
                                <input type=\"hidden\" name=\"id\" value=\"{{ item.product.id }}\">
                                <input type=\"number\" name=\"quantite\" value=\"{{ item.quantity }}\" min=\"1\"
                                       class=\"w-16 rounded-md border border-gray-300 px-2 py-1 text-center\">
                                <button type=\"submit\"
                                        class=\"bg-[#5689C0] hover:bg-[#244D61] text-white px-3 py-1 rounded transition\">
                                    Approuver
                                </button>
                            </form>

                            <span class=\"text-lg font-medium text-gray-700\">
                                {{ item.product.prixProduit|number_format(2, ',', ' ') }} € x {{ item.quantity }} =
                                <strong class=\"text-[#244D61]\">
                                    {{ (item.product.prixProduit * item.quantity)|number_format(2, ',', ' ') }} €
                                </strong>
                            </span>
                        </div>
                    </div>

                    <div>
                        <a href=\"{{ path('panier_supprimer', {id: item.product.id}) }}\"
                           class=\"text-red-600 hover:text-red-800 font-semibold text-sm\">
                            Supprimer
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"mt-10 text-right\">
            <h4 class=\"text-2xl font-bold text-[#244D61]\">Total : {{ total|number_format(2, ',', ' ') }} €</h4>
            <a href=\"{{ path('paiement') }}\"
               class=\"inline-block mt-4 bg-[#5689C0] hover:bg-[#244D61] text-white font-medium px-6 py-3 rounded-xl transition\">
                Procéder au paiement
            </a>
        </div>
    {% endif %}
    
</section>
{% endblock %}
", "produit/panier.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\produit\\panier.html.twig");
    }
}
