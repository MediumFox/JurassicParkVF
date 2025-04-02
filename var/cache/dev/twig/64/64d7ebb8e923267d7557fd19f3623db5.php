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

/* produit/boutique.html.twig */
class __TwigTemplate_813159807089bf51429b489ad8735119 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/boutique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/boutique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/boutique.html.twig", 1);
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

        yield "Nos Produits";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "produit/boutique.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    <section class=\" min-h-screen py-12 px-4 sm:px-6 lg:px-8 text-slate-900\">
        <div class=\"max-w-[90%] mx-auto\">
            <div class=\"text-center mb-10\">
                <h1 class=\"text-4xl font-bold inline-block border-b-4 pb-2 dark:text-white dark:border-white border-[#244D61]\">
                    Découvrez nos produits
                </h1>
                <p class=\"text-[#5689C0] mt-2 dark:text-white\">Des articles de qualité pour vos besoins !</p>
            </div>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 p-8 lg:grid-cols-3 gap-8 bg-slate-900 rounded \">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 17
            yield "                    <div class=\"bg-white text-gray-900 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 overflow-hidden flex flex-col\">
                        <div class=\"w-full h-56 overflow-hidden flex justify-center items-center\">
                            <img src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 19)), "html", null, true);
            yield "\"
                                alt=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "libelleProduit", [], "any", false, false, false, 20), "html", null, true);
            yield "\"
                                class=\"w-auto h-full object-cover transition-transform duration-300 hover:scale-105\">
                        </div>

                        <div class=\"p-5 flex flex-col flex-1\">
                            <h2 class=\"text-xl font-semibold text-[#244D61] mb-2\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "libelleProduit", [], "any", false, false, false, 25), "html", null, true);
            yield "</h2>

                            <p class=\"text-sm text-gray-600 mb-1\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "descriptionProduit", [], "any", false, false, false, 27), 0, 90) . "..."), "html", null, true);
            yield "</p>

                            <div class=\"text-sm text-gray-500 mb-3\">
                                ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponibleAchat", [], "any", false, false, false, 30)) {
                // line 31
                yield "                                    <span class=\"text-green-600 font-semibold\">Disponible</span> – Stock : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 31), "html", null, true);
                yield "
                                ";
            } else {
                // line 33
                yield "                                    <span class=\"text-red-600 font-semibold\">Indisponible</span>
                                ";
            }
            // line 35
            yield "                            </div>

                            <p class=\"text-lg font-bold text-[#244D61] mb-4\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixProduit", [], "any", false, false, false, 37), 2, ",", " "), "html", null, true);
            yield " €</p>

                            <div class=\"mt-auto\">
                                ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponibleAchat", [], "any", false, false, false, 40)) {
                // line 41
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_ajouter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\"
                                    class=\"block w-full text-center bg-[#5689C0] text-white font-medium py-2 rounded-xl hover:bg-[#244D61] transition\">
                                        Ajouter au panier
                                    </a>
                                ";
            } else {
                // line 46
                yield "                                    <span class=\"block w-full text-center bg-gray-400 text-white font-medium py-2 rounded-xl cursor-not-allowed\">
                                        Indisponible
                                    </span>
                                ";
            }
            // line 50
            yield "                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "            </div>
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
        return "produit/boutique.html.twig";
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
        return array (  193 => 54,  184 => 50,  178 => 46,  169 => 41,  167 => 40,  161 => 37,  157 => 35,  153 => 33,  147 => 31,  145 => 30,  139 => 27,  134 => 25,  126 => 20,  122 => 19,  118 => 17,  114 => 16,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Produits{% endblock %}

{% block body %}
    {% include \"reuse/hero.html.twig\" %}
    <section class=\" min-h-screen py-12 px-4 sm:px-6 lg:px-8 text-slate-900\">
        <div class=\"max-w-[90%] mx-auto\">
            <div class=\"text-center mb-10\">
                <h1 class=\"text-4xl font-bold inline-block border-b-4 pb-2 dark:text-white dark:border-white border-[#244D61]\">
                    Découvrez nos produits
                </h1>
                <p class=\"text-[#5689C0] mt-2 dark:text-white\">Des articles de qualité pour vos besoins !</p>
            </div>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 p-8 lg:grid-cols-3 gap-8 bg-slate-900 rounded \">
                {% for produit in produits %}
                    <div class=\"bg-white text-gray-900 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 overflow-hidden flex flex-col\">
                        <div class=\"w-full h-56 overflow-hidden flex justify-center items-center\">
                            <img src=\"{{ asset(produit.imageProduit) }}\"
                                alt=\"{{ produit.libelleProduit }}\"
                                class=\"w-auto h-full object-cover transition-transform duration-300 hover:scale-105\">
                        </div>

                        <div class=\"p-5 flex flex-col flex-1\">
                            <h2 class=\"text-xl font-semibold text-[#244D61] mb-2\">{{ produit.libelleProduit }}</h2>

                            <p class=\"text-sm text-gray-600 mb-1\">{{ produit.descriptionProduit|slice(0, 90) ~ '...' }}</p>

                            <div class=\"text-sm text-gray-500 mb-3\">
                                {% if produit.disponibleAchat %}
                                    <span class=\"text-green-600 font-semibold\">Disponible</span> – Stock : {{ produit.stock }}
                                {% else %}
                                    <span class=\"text-red-600 font-semibold\">Indisponible</span>
                                {% endif %}
                            </div>

                            <p class=\"text-lg font-bold text-[#244D61] mb-4\">{{ produit.prixProduit|number_format(2, ',', ' ') }} €</p>

                            <div class=\"mt-auto\">
                                {% if produit.disponibleAchat %}
                                    <a href=\"{{ path('panier_ajouter', {id: produit.id}) }}\"
                                    class=\"block w-full text-center bg-[#5689C0] text-white font-medium py-2 rounded-xl hover:bg-[#244D61] transition\">
                                        Ajouter au panier
                                    </a>
                                {% else %}
                                    <span class=\"block w-full text-center bg-gray-400 text-white font-medium py-2 rounded-xl cursor-not-allowed\">
                                        Indisponible
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
{% endblock %}
", "produit/boutique.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\produit\\boutique.html.twig");
    }
}
