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

/* client/louer-hotel.html.twig */
class __TwigTemplate_7ed46c7dbd65ff132f264b3ec9f78449 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/louer-hotel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/louer-hotel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/louer-hotel.html.twig", 1);
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

        yield "Les hôtels loués";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "client/louer-hotel.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    <div class=\"p-10 w-full h-fit min-h-[55vh] flex justify-center relative dark:bg-gray-900\">
        ";
        // line 8
        yield from $this->loadTemplate("client/dashboard-client.html.twig", "client/louer-hotel.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "        <div class=\"w-full ml-[30%] max-w-5xl bg-white rounded-xl shadow-lg shadow-slate-900 p-8\">
            <h2 class=\"text-xl font-semibold text-bleuLune dark:text-white mb-4\">Vos hôtels réservés</h2>

            ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "                <ul class=\"space-y-6\">
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                yield "                        <li class=\"p-6 bg-gray-100 dark:bg-gray-800 rounded-xl shadow-md\">
                            <div class=\"flex flex-col gap-2\">
                                <h3 class=\"text-lg font-bold text-slate-900 italic dark:text-white\">
                                    ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, false, false, 18), "libelleHotel", [], "any", false, false, false, 18), "html", null, true);
                yield "
                                </h3>

                                ";
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, true, false, 21), "biome", [], "any", false, true, false, 21), "libelleBiome", [], "any", true, true, false, 21)) {
                    // line 22
                    yield "                                    <p class=\"text-sm text-gray-600 dark:text-gray-300\">
                                        ";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, false, false, 23), "biome", [], "any", false, false, false, 23), "libelleBiome", [], "any", false, false, false, 23), "html", null, true);
                    yield "
                                    </p>
                                ";
                }
                // line 26
                yield "
                                ";
                // line 27
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, true, false, 27), "descriptionHotel", [], "any", true, true, false, 27)) {
                    // line 28
                    yield "                                    <p class=\"text-sm  dark:text-gray-300 text-bleuGlace\">
                                        ";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, false, false, 29), "descriptionHotel", [], "any", false, false, false, 29), "html", null, true);
                    yield "
                                    </p>
                                ";
                }
                // line 32
                yield "
                                ";
                // line 33
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, true, false, 33), "imageHotel", [], "any", true, true, false, 33)) {
                    // line 34
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, false, false, 34), "imageHotel", [], "any", false, false, false, 34)), "html", null, true);
                    yield "\" alt=\"Image de ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, false, false, 34), "libelleHotel", [], "any", false, false, false, 34), "html", null, true);
                    yield "\" class=\"w-full max-h-64 object-cover rounded-lg mt-2\">
                                ";
                }
                // line 36
                yield "
                                ";
                // line 37
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateDeb", [], "any", false, false, false, 37) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 38
                    yield "                                    <div class=\"mt-4\">
                                        <label class=\"block mb-1 text-sm font-medium text-gray-700 dark:text-gray-200\">Votre note :</label>
                                        <div class=\"flex gap-1 items-center\" data-hotel-id=\"";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hotel", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
                    yield "\" data-hotel-date=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 40), "html", null, true);
                    yield "\">
                                            ";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 42
                        yield "                                                ";
                        $context["starClass"] = ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["item"], "note", [], "any", false, false, false, 42))) ? ("text-yellow-400") : ("text-gray-400"));
                        // line 43
                        yield "                                                <svg class=\"w-6 h-6 cursor-pointer star ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["starClass"]) || array_key_exists("starClass", $context) ? $context["starClass"] : (function () { throw new RuntimeError('Variable "starClass" does not exist.', 43, $this->source); })()), "html", null, true);
                        yield " hover:text-yellow-400\" data-value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                    <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.122 3.445a1 1 0 00.95.69h3.637c.969 0 1.371 1.24.588 1.81l-2.94 2.138a1 1 0 00-.364 1.118l1.122 3.445c.3.921-.755 1.688-1.54 1.118L10 13.347l-2.94 2.138c-.785.57-1.84-.197-1.54-1.118l1.122-3.445a1 1 0 00-.364-1.118L3.338 8.872c-.783-.57-.38-1.81.588-1.81h3.637a1 1 0 00.95-.69l1.122-3.445z\"/>
                                                </svg>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    yield "                                        </div>
                                    </div>
                                ";
                } else {
                    // line 50
                    yield "                                    <span>Votre séjour n'est pas encore passé !</span>
                                ";
                }
                // line 52
                yield "                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                </ul>
            ";
        } else {
            // line 57
            yield "                <p class=\"text-gray-500 dark:text-gray-400\">Vous n’avez encore réservé aucun hôtel.</p>
            ";
        }
        // line 59
        yield "        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('click', function () {
            const value = parseInt(this.dataset.value);
            const container = this.closest('[data-hotel-id]');
            const stars = container.querySelectorAll('.star');
            const hotelId = container.dataset.hotelId;
            const date = container.dataset.hotelDate;
            stars.forEach((s, index) => {
                s.classList.toggle('text-yellow-400', index < value);
                s.classList.toggle('text-gray-400', index >= value);
            });

            const url = \"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_note");
        yield "?hotelId=\" + encodeURIComponent(hotelId) + \"&date=\" + encodeURIComponent(date) + \"&value=\" +encodeURIComponent(value);

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (!data.success) {
                        console.error(\"Erreur côté serveur :\", data.error);
                        container.innerHTML = \"<p class='text-red-500 text-sm'>Erreur : \" + data.error + \"</p>\";
                    }
                })
                .catch(error => {
                    console.error(\"Erreur JS/fetch :\", error);
                    container.innerHTML = \"<p class='text-red-500 text-sm'>Erreur lors du chargement.</p>\";
                });
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
        return "client/louer-hotel.html.twig";
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
        return array (  250 => 76,  231 => 59,  227 => 57,  223 => 55,  215 => 52,  211 => 50,  206 => 47,  193 => 43,  190 => 42,  186 => 41,  180 => 40,  176 => 38,  174 => 37,  171 => 36,  163 => 34,  161 => 33,  158 => 32,  152 => 29,  149 => 28,  147 => 27,  144 => 26,  138 => 23,  135 => 22,  133 => 21,  127 => 18,  122 => 15,  118 => 14,  115 => 13,  113 => 12,  108 => 9,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les hôtels loués{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}
    <div class=\"p-10 w-full h-fit min-h-[55vh] flex justify-center relative dark:bg-gray-900\">
        {% include 'client/dashboard-client.html.twig' %}
        <div class=\"w-full ml-[30%] max-w-5xl bg-white rounded-xl shadow-lg shadow-slate-900 p-8\">
            <h2 class=\"text-xl font-semibold text-bleuLune dark:text-white mb-4\">Vos hôtels réservés</h2>

            {% if data is not empty %}
                <ul class=\"space-y-6\">
                    {% for item in data %}
                        <li class=\"p-6 bg-gray-100 dark:bg-gray-800 rounded-xl shadow-md\">
                            <div class=\"flex flex-col gap-2\">
                                <h3 class=\"text-lg font-bold text-slate-900 italic dark:text-white\">
                                    {{ item.hotel.libelleHotel }}
                                </h3>

                                {% if item.hotel.biome.libelleBiome is defined %}
                                    <p class=\"text-sm text-gray-600 dark:text-gray-300\">
                                        {{ item.hotel.biome.libelleBiome }}
                                    </p>
                                {% endif %}

                                {% if item.hotel.descriptionHotel is defined %}
                                    <p class=\"text-sm  dark:text-gray-300 text-bleuGlace\">
                                        {{ item.hotel.descriptionHotel }}
                                    </p>
                                {% endif %}

                                {% if item.hotel.imageHotel is defined %}
                                    <img src=\"{{ asset(item.hotel.imageHotel) }}\" alt=\"Image de {{ item.hotel.libelleHotel }}\" class=\"w-full max-h-64 object-cover rounded-lg mt-2\">
                                {% endif %}

                                {% if item.dateDeb < date()  %}
                                    <div class=\"mt-4\">
                                        <label class=\"block mb-1 text-sm font-medium text-gray-700 dark:text-gray-200\">Votre note :</label>
                                        <div class=\"flex gap-1 items-center\" data-hotel-id=\"{{ item.hotel.id }}\" data-hotel-date=\"{{ item.date }}\">
                                            {% for i in 1..5 %}
                                                {% set starClass = i <= item.note ? 'text-yellow-400' : 'text-gray-400' %}
                                                <svg class=\"w-6 h-6 cursor-pointer star {{ starClass }} hover:text-yellow-400\" data-value=\"{{ i }}\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                    <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.122 3.445a1 1 0 00.95.69h3.637c.969 0 1.371 1.24.588 1.81l-2.94 2.138a1 1 0 00-.364 1.118l1.122 3.445c.3.921-.755 1.688-1.54 1.118L10 13.347l-2.94 2.138c-.785.57-1.84-.197-1.54-1.118l1.122-3.445a1 1 0 00-.364-1.118L3.338 8.872c-.783-.57-.38-1.81.588-1.81h3.637a1 1 0 00.95-.69l1.122-3.445z\"/>
                                                </svg>
                                            {% endfor %}
                                        </div>
                                    </div>
                                {% else %}
                                    <span>Votre séjour n'est pas encore passé !</span>
                                {% endif %}
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-gray-500 dark:text-gray-400\">Vous n’avez encore réservé aucun hôtel.</p>
            {% endif %}
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('click', function () {
            const value = parseInt(this.dataset.value);
            const container = this.closest('[data-hotel-id]');
            const stars = container.querySelectorAll('.star');
            const hotelId = container.dataset.hotelId;
            const date = container.dataset.hotelDate;
            stars.forEach((s, index) => {
                s.classList.toggle('text-yellow-400', index < value);
                s.classList.toggle('text-gray-400', index >= value);
            });

            const url = \"{{ path('app_change_note') }}?hotelId=\" + encodeURIComponent(hotelId) + \"&date=\" + encodeURIComponent(date) + \"&value=\" +encodeURIComponent(value);

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (!data.success) {
                        console.error(\"Erreur côté serveur :\", data.error);
                        container.innerHTML = \"<p class='text-red-500 text-sm'>Erreur : \" + data.error + \"</p>\";
                    }
                })
                .catch(error => {
                    console.error(\"Erreur JS/fetch :\", error);
                    container.innerHTML = \"<p class='text-red-500 text-sm'>Erreur lors du chargement.</p>\";
                });
        });
    });
</script>
{% endblock %}", "client/louer-hotel.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\louer-hotel.html.twig");
    }
}
