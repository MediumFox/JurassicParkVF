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

/* client/reservation/recapitulatif_commande.html.twig */
class __TwigTemplate_c9dd89b1e9406cfe26fad1a2dfb88ee7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/recapitulatif_commande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/recapitulatif_commande.html.twig"));

        // line 1
        yield "<form class=\"w-[80%] mb-10\" method=\"POST\">
    <div class=\"mb-5\">
        <h1 class=\"text-2xl font-bold text-slate-900 mb-1\">Récapitulatif de votre commande</h1>
        <span class=\"block h-[2px] w-full bg-slate-900\"></span>
    </div>
    <div>
        <div class=\"flex flex-col gap-10\">
            <div>
                <h2>Section - Vos billets</h2>
                <div class=\"w-[80%] h-[1px] bg-slate-900 mb-4\"></div>

                <div class=\"mb-4\">
                    <p><strong>Date de début :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["billets"]) || array_key_exists("billets", $context) ? $context["billets"] : (function () { throw new RuntimeError('Variable "billets" does not exist.', 13, $this->source); })()), "form", [], "any", false, false, false, 13), "debutBillet", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
        yield "</p>
                    <p><strong>Date de fin :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["billets"]) || array_key_exists("billets", $context) ? $context["billets"] : (function () { throw new RuntimeError('Variable "billets" does not exist.', 14, $this->source); })()), "form", [], "any", false, false, false, 14), "finBillet", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
        yield "</p>
                </div>

                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["billets"]) || array_key_exists("billets", $context) ? $context["billets"] : (function () { throw new RuntimeError('Variable "billets" does not exist.', 17, $this->source); })()), "noms", [], "any", false, false, false, 17)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 18
            yield "                    <div class=\"mb-4 p-4 border w-[80%] border-slate-300 rounded bg-slate-100\">
                        <h3 class=\"text-lg font-semibold text-bleuLune mb-2\">Billet n°";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["index"] + 1), "html", null, true);
            yield "</h3>
                        <p><strong class=\"text-bleuLune \">Nom :</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["billets"]) || array_key_exists("billets", $context) ? $context["billets"] : (function () { throw new RuntimeError('Variable "billets" does not exist.', 20, $this->source); })()), "noms", [], "any", false, false, false, 20), $context["index"], [], "array", false, false, false, 20), "html", null, true);
            yield "</p>
                        <p><strong class=\"text-bleuLune \">Prénom :</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["billets"]) || array_key_exists("billets", $context) ? $context["billets"] : (function () { throw new RuntimeError('Variable "billets" does not exist.', 21, $this->source); })()), "prenoms", [], "any", false, false, false, 21), $context["index"], [], "array", false, false, false, 21), "html", null, true);
            yield "</p>

                        ";
            // line 23
            $context["billetId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["billets"]) || array_key_exists("billets", $context) ? $context["billets"] : (function () { throw new RuntimeError('Variable "billets" does not exist.', 23, $this->source); })()), "billets", [], "any", false, false, false, 23), $context["index"], [], "array", false, false, false, 23);
            // line 24
            yield "                        ";
            $context["format"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["formats"]) || array_key_exists("formats", $context) ? $context["formats"] : (function () { throw new RuntimeError('Variable "formats" does not exist.', 24, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24) == (isset($context["billetId"]) || array_key_exists("billetId", $context) ? $context["billetId"] : (function () { throw new RuntimeError('Variable "billetId" does not exist.', 24, $this->source); })())); }));
            // line 25
            yield "
                        ";
            // line 26
            if (array_key_exists("format", $context)) {
                // line 27
                yield "                            <p><strong class=\"text-bleuLune \">Type de billet :</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 27, $this->source); })()), "libelleBillet", [], "any", false, false, false, 27), "html", null, true);
                yield "</p>
                            <p><strong class=\"text-bleuLune \">Tarif :</strong> ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 28, $this->source); })()), "prixBillet", [], "any", false, false, false, 28), "html", null, true);
                yield " €</p>
                        ";
            } else {
                // line 30
                yield "                            <p class=\"text-red-500\">Format introuvable pour ID ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["billetId"]) || array_key_exists("billetId", $context) ? $context["billetId"] : (function () { throw new RuntimeError('Variable "billetId" does not exist.', 30, $this->source); })()), "html", null, true);
                yield "</p>
                        ";
            }
            // line 32
            yield "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['index'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            </div>


            <div>
                <h2>Section - Votre hôtel</h2>
                <div class=\"w-[80%] h-[1px] bg-slate-900 mb-4\"></div>
                ";
        // line 40
        $context["hotelChoisi"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["lesHotels"]) || array_key_exists("lesHotels", $context) ? $context["lesHotels"] : (function () { throw new RuntimeError('Variable "lesHotels" does not exist.', 40, $this->source); })()), function ($__h__) use ($context, $macros) { $context["h"] = $__h__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 40, $this->source); })()), "hotel_id", [], "any", false, false, false, 40)); }));
        // line 41
        yield "                ";
        $context["chambreIds"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 41, $this->source); })()), "format_chambre_id", [], "any", false, false, false, 41))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 41, $this->source); })()), "format_chambre_id", [], "any", false, false, false, 41)) : ([CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 41, $this->source); })()), "format_chambre_id", [], "any", false, false, false, 41)]));
        // line 42
        yield "
                ";
        // line 43
        if ((isset($context["hotelChoisi"]) || array_key_exists("hotelChoisi", $context) ? $context["hotelChoisi"] : (function () { throw new RuntimeError('Variable "hotelChoisi" does not exist.', 43, $this->source); })())) {
            // line 44
            yield "                    <div class=\"mb-6 p-4 border w-[80%] border-slate-300 rounded bg-slate-100\">
                        <h3 class=\"text-xl font-semibold text-slate-800 mb-2\">Hôtel sélectionné</h3>
                        <p><strong>Nom :</strong> ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotelChoisi"]) || array_key_exists("hotelChoisi", $context) ? $context["hotelChoisi"] : (function () { throw new RuntimeError('Variable "hotelChoisi" does not exist.', 46, $this->source); })()), "libelleHotel", [], "any", false, false, false, 46), "html", null, true);
            yield "</p>
                    </div>

                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chambreIds"]) || array_key_exists("chambreIds", $context) ? $context["chambreIds"] : (function () { throw new RuntimeError('Variable "chambreIds" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["formatId"]) {
                // line 50
                yield "                        ";
                $context["format"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["lesFormatsChambres"]) || array_key_exists("lesFormatsChambres", $context) ? $context["lesFormatsChambres"] : (function () { throw new RuntimeError('Variable "lesFormatsChambres" does not exist.', 50, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50) == $context["formatId"]); }));
                // line 51
                yield "
                        <div class=\"mb-4 p-4 border w-[80%] border-slate-200 rounded bg-white shadow\">
                            <h4 class=\"text-lg font-semibold text-slate-700 mb-1\">Chambre réservée</h4>

                            ";
                // line 55
                if ((isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 55, $this->source); })())) {
                    // line 56
                    yield "                                <p><strong>Type :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 56, $this->source); })()), "libelleFormatChambre", [], "any", false, false, false, 56), "html", null, true);
                    yield "</p>
                                <p><strong>Tarif :</strong> ";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 57, $this->source); })()), "prixFormatChambre", [], "any", false, false, false, 57), "html", null, true);
                    yield " € / nuit</p>
                            ";
                } else {
                    // line 59
                    yield "                                <p class=\"text-red-500\">Format de chambre introuvable (ID ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["formatId"], "html", null, true);
                    yield ")</p>
                            ";
                }
                // line 61
                yield "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['formatId'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "                ";
        } else {
            // line 64
            yield "                    <p class=\"text-red-500\">Hôtel non trouvé (ID ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 64, $this->source); })()), "hotel_id", [], "any", false, false, false, 64), "html", null, true);
            yield ")</p>
                ";
        }
        // line 66
        yield "            </div>

            ";
        // line 68
        if ((isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 68, $this->source); })())) {
            // line 69
            yield "                ";
            $context["restoChoisi"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["lesRestaurants"]) || array_key_exists("lesRestaurants", $context) ? $context["lesRestaurants"] : (function () { throw new RuntimeError('Variable "lesRestaurants" does not exist.', 69, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 69, $this->source); })()), "choixRestaurant", [], "any", false, false, false, 69)); }));
            // line 70
            yield "
                <div>
                    <h2>Section - Restaurant</h2>
                    <div class=\"w-[80%] h-[1px] bg-slate-900 mb-4\"></div>

                    ";
            // line 75
            if ((isset($context["restoChoisi"]) || array_key_exists("restoChoisi", $context) ? $context["restoChoisi"] : (function () { throw new RuntimeError('Variable "restoChoisi" does not exist.', 75, $this->source); })())) {
                // line 76
                yield "                        <div class=\"mb-6 p-4 border w-[80%] border-slate-300 rounded bg-slate-100\">
                            <h3 class=\"text-xl font-semibold text-slate-800 mb-2\">Restaurant réservé</h3>
                            <p><strong>Nom :</strong> ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restoChoisi"]) || array_key_exists("restoChoisi", $context) ? $context["restoChoisi"] : (function () { throw new RuntimeError('Variable "restoChoisi" does not exist.', 78, $this->source); })()), "libelleRestaurant", [], "any", false, false, false, 78), "html", null, true);
                yield "</p>
                            <p><strong>Date de réservation :</strong> ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 79, $this->source); })()), "dateReservation", [], "any", false, false, false, 79), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                        </div>
                    ";
            } else {
                // line 82
                yield "                        <p class=\"text-red-500\">Restaurant non trouvé pour l’ID ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 82, $this->source); })()), "choixRestaurant", [], "any", false, false, false, 82), "html", null, true);
                yield "</p>
                    ";
            }
            // line 84
            yield "                </div>
            ";
        }
        // line 86
        yield "
            <div>
                <span class=\"font-bold text-bleuLune underline text-lg\">Prix total : ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 88, $this->source); })()), "prixTotal", [], "any", false, false, false, 88), "html", null, true);
        yield " Euro</span>
            </div>
        </div>
    </div>
    
    <div class=\"w-[80%] flex justify-between mb-4\">
        <button type=\"button\" id=\"retourEtapeRestau\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
            Etape précédente
        </button>
        <button type=\"submit\" id=\"passerCommande\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
            Passer la commande
        </button>
    </div>
    </div>
</form>

<script>
    let retour = document.getElementById('retourEtapeRestau');
    let passerCommande = document.getElementById('passerCommande');
    retour.addEventListener(\"click\", function () {
        window.location.href = \"/client/reserver-aventure/restaurant\";
    });

    passerCommande.addEventListener(\"click\", function () {
        window.location.href = \"/client/reserver-aventure/insert\";
    });

</script>


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
        return "client/reservation/recapitulatif_commande.html.twig";
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
        return array (  246 => 88,  242 => 86,  238 => 84,  232 => 82,  226 => 79,  222 => 78,  218 => 76,  216 => 75,  209 => 70,  206 => 69,  204 => 68,  200 => 66,  194 => 64,  191 => 63,  184 => 61,  178 => 59,  173 => 57,  168 => 56,  166 => 55,  160 => 51,  157 => 50,  153 => 49,  147 => 46,  143 => 44,  141 => 43,  138 => 42,  135 => 41,  133 => 40,  125 => 34,  118 => 32,  112 => 30,  107 => 28,  102 => 27,  100 => 26,  97 => 25,  94 => 24,  92 => 23,  87 => 21,  83 => 20,  79 => 19,  76 => 18,  72 => 17,  66 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form class=\"w-[80%] mb-10\" method=\"POST\">
    <div class=\"mb-5\">
        <h1 class=\"text-2xl font-bold text-slate-900 mb-1\">Récapitulatif de votre commande</h1>
        <span class=\"block h-[2px] w-full bg-slate-900\"></span>
    </div>
    <div>
        <div class=\"flex flex-col gap-10\">
            <div>
                <h2>Section - Vos billets</h2>
                <div class=\"w-[80%] h-[1px] bg-slate-900 mb-4\"></div>

                <div class=\"mb-4\">
                    <p><strong>Date de début :</strong> {{ billets.form.debutBillet|date('d/m/Y') }}</p>
                    <p><strong>Date de fin :</strong> {{ billets.form.finBillet|date('d/m/Y') }}</p>
                </div>

                {% for index in 0..(billets.noms|length - 1) %}
                    <div class=\"mb-4 p-4 border w-[80%] border-slate-300 rounded bg-slate-100\">
                        <h3 class=\"text-lg font-semibold text-bleuLune mb-2\">Billet n°{{ index + 1 }}</h3>
                        <p><strong class=\"text-bleuLune \">Nom :</strong> {{ billets.noms[index] }}</p>
                        <p><strong class=\"text-bleuLune \">Prénom :</strong> {{ billets.prenoms[index] }}</p>

                        {% set billetId = billets.billets[index] %}
                        {% set format = formats|filter(f => f.id == billetId)|first %}

                        {% if format is defined %}
                            <p><strong class=\"text-bleuLune \">Type de billet :</strong> {{ format.libelleBillet }}</p>
                            <p><strong class=\"text-bleuLune \">Tarif :</strong> {{ format.prixBillet }} €</p>
                        {% else %}
                            <p class=\"text-red-500\">Format introuvable pour ID {{ billetId }}</p>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>


            <div>
                <h2>Section - Votre hôtel</h2>
                <div class=\"w-[80%] h-[1px] bg-slate-900 mb-4\"></div>
                {% set hotelChoisi = lesHotels|filter(h => h.id == hotel.hotel_id)|first %}
                {% set chambreIds = hotel.format_chambre_id is iterable ? hotel.format_chambre_id : [hotel.format_chambre_id] %}

                {% if hotelChoisi %}
                    <div class=\"mb-6 p-4 border w-[80%] border-slate-300 rounded bg-slate-100\">
                        <h3 class=\"text-xl font-semibold text-slate-800 mb-2\">Hôtel sélectionné</h3>
                        <p><strong>Nom :</strong> {{ hotelChoisi.libelleHotel }}</p>
                    </div>

                    {% for formatId in chambreIds %}
                        {% set format = lesFormatsChambres|filter(f => f.id == formatId)|first %}

                        <div class=\"mb-4 p-4 border w-[80%] border-slate-200 rounded bg-white shadow\">
                            <h4 class=\"text-lg font-semibold text-slate-700 mb-1\">Chambre réservée</h4>

                            {% if format %}
                                <p><strong>Type :</strong> {{ format.libelleFormatChambre }}</p>
                                <p><strong>Tarif :</strong> {{ format.prixFormatChambre }} € / nuit</p>
                            {% else %}
                                <p class=\"text-red-500\">Format de chambre introuvable (ID {{ formatId }})</p>
                            {% endif %}
                        </div>
                    {% endfor %}
                {% else %}
                    <p class=\"text-red-500\">Hôtel non trouvé (ID {{ hotel.hotel_id }})</p>
                {% endif %}
            </div>

            {% if restaurant %}
                {% set restoChoisi = lesRestaurants|filter(r => r.id == restaurant.choixRestaurant)|first %}

                <div>
                    <h2>Section - Restaurant</h2>
                    <div class=\"w-[80%] h-[1px] bg-slate-900 mb-4\"></div>

                    {% if restoChoisi %}
                        <div class=\"mb-6 p-4 border w-[80%] border-slate-300 rounded bg-slate-100\">
                            <h3 class=\"text-xl font-semibold text-slate-800 mb-2\">Restaurant réservé</h3>
                            <p><strong>Nom :</strong> {{ restoChoisi.libelleRestaurant }}</p>
                            <p><strong>Date de réservation :</strong> {{ restaurant.dateReservation|date('d/m/Y H:i') }}</p>
                        </div>
                    {% else %}
                        <p class=\"text-red-500\">Restaurant non trouvé pour l’ID {{ restaurant.choixRestaurant }}</p>
                    {% endif %}
                </div>
            {% endif %}

            <div>
                <span class=\"font-bold text-bleuLune underline text-lg\">Prix total : {{hotel.prixTotal}} Euro</span>
            </div>
        </div>
    </div>
    
    <div class=\"w-[80%] flex justify-between mb-4\">
        <button type=\"button\" id=\"retourEtapeRestau\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
            Etape précédente
        </button>
        <button type=\"submit\" id=\"passerCommande\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
            Passer la commande
        </button>
    </div>
    </div>
</form>

<script>
    let retour = document.getElementById('retourEtapeRestau');
    let passerCommande = document.getElementById('passerCommande');
    retour.addEventListener(\"click\", function () {
        window.location.href = \"/client/reserver-aventure/restaurant\";
    });

    passerCommande.addEventListener(\"click\", function () {
        window.location.href = \"/client/reserver-aventure/insert\";
    });

</script>


", "client/reservation/recapitulatif_commande.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\reservation\\recapitulatif_commande.html.twig");
    }
}
