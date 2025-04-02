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

/* reuse/home/services.html.twig */
class __TwigTemplate_6256e9b1a0492f7a8d3c32d554e48e93 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/home/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/home/services.html.twig"));

        // line 1
        yield "<div class=\"w-full min-h-[70vh] flex flex-col items-center p-5 m-10 relative -top-9\">
    <div class=\"w-[90%] min-h-[50%]\">
            
        <div class=\"text-center mb-10\">
            <h1 class=\"mb-6 text-4xl text-bleuLune font-bold text-center dark:text-white\">Nos restaurants</h1>
            <div class=\"w-20 h-1 bg-bleuLune mx-auto mt-2 rounded animate-pulse dark:bg-white\"></div>
            <p class=\"text-bleuGlace mt-2 italic text-sm dark:text-white\">Prévisions des prochains jours pour nos visiteurs intrépides, soyez vigilant en cas de fortes pluies (avalanches, éboulements ou glissements de terrains fréquent)</p>
        </div>
        <div class=\"absolute inset-0 bg-gradient-to-br  animate-gradient-move pointer-events-none z-0\"></div>

        <div class=\"w-full flex flex-wrap justify-center gap-20 relative z-10 py-10 px-20 rounded-3xl transition-all duration-500\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["randomRestaurants"]) || array_key_exists("randomRestaurants", $context) ? $context["randomRestaurants"] : (function () { throw new RuntimeError('Variable "randomRestaurants" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 13
            yield "                <div class=\"rounded-lg overflow-hidden relative w-[45%] h-[300px] shadow-lg transition transform hover:scale-105\">
                    <div class=\"h-[55%] overflow-hidden\">
                        <img 
                            src=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "restaurant", [], "any", false, false, false, 16), "imageRestaurant", [], "any", false, false, false, 16)), "html", null, true);
            yield "\" 
                            alt=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "restaurant", [], "any", false, false, false, 17), "libelleRestaurant", [], "any", false, false, false, 17), "html", null, true);
            yield "\" 
                            class=\"w-full h-full object-cover\"
                        >
                    </div>

                    <span class=\"absolute top-3 left-3 z-10 px-3 py-1 bg-white rounded text-bleuLune font-bold shadow-md\">
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "restaurant", [], "any", false, false, false, 23), "libelleRestaurant", [], "any", false, false, false, 23), "html", null, true);
            yield "
                    </span>

                    <div class=\"p-4 flex flex-col justify-between h-[45%] bg-slate-900\">
                        <div class=\"text-white text-sm mb-3 leading-snug max-h-[85%] overflow-y-auto pr-2\">
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "horaires", [], "any", false, false, false, 28));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 29
                yield "                                <p>
                                    ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "libelleJour", [], "any", false, false, false, 30), "html", null, true);
                yield " :
                                    ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ouverture", [], "any", false, false, false, 31), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "fermeture", [], "any", false, false, false, 31), "H:i"), "html", null, true);
                yield "
                                </p>
                            ";
                $context['_iterated'] = true;
            }
            // line 33
            if (!$context['_iterated']) {
                // line 34
                yield "                                <p class=\"italic text-gray-400\">Aucun horaire défini</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['h'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                        </div>

                        <div class=\"flex items-center text-xs\">
                            <span class=\"text-white font-bold text-lg\">
                                Biome : <i class=\"text-bleuGlace\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "restaurant", [], "any", false, false, false, 40), "biome", [], "any", false, false, false, 40), "libelleBiome", [], "any", false, false, false, 40), "html", null, true);
            yield "</i>
                            </span>
                            <a href=\"/restaurant/";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "restaurant", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\" class=\"dark:text-black rounded-full font-bold bg-white w-[5vw] transition h-[5vw] flex justify-center items-center absolute -bottom-5 right-0 hover:scale-105 cursor-pointer hover:underline\">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "                <p class=\"text-center text-bleuGlace italic\">Aucun restaurant disponible pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
        </div>
    </div>
</div>
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
        return "reuse/home/services.html.twig";
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
        return array (  153 => 51,  146 => 49,  144 => 48,  133 => 42,  128 => 40,  122 => 36,  115 => 34,  113 => 33,  104 => 31,  100 => 30,  97 => 29,  92 => 28,  84 => 23,  75 => 17,  71 => 16,  66 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"w-full min-h-[70vh] flex flex-col items-center p-5 m-10 relative -top-9\">
    <div class=\"w-[90%] min-h-[50%]\">
            
        <div class=\"text-center mb-10\">
            <h1 class=\"mb-6 text-4xl text-bleuLune font-bold text-center dark:text-white\">Nos restaurants</h1>
            <div class=\"w-20 h-1 bg-bleuLune mx-auto mt-2 rounded animate-pulse dark:bg-white\"></div>
            <p class=\"text-bleuGlace mt-2 italic text-sm dark:text-white\">Prévisions des prochains jours pour nos visiteurs intrépides, soyez vigilant en cas de fortes pluies (avalanches, éboulements ou glissements de terrains fréquent)</p>
        </div>
        <div class=\"absolute inset-0 bg-gradient-to-br  animate-gradient-move pointer-events-none z-0\"></div>

        <div class=\"w-full flex flex-wrap justify-center gap-20 relative z-10 py-10 px-20 rounded-3xl transition-all duration-500\">
            {% for r in randomRestaurants %}
                <div class=\"rounded-lg overflow-hidden relative w-[45%] h-[300px] shadow-lg transition transform hover:scale-105\">
                    <div class=\"h-[55%] overflow-hidden\">
                        <img 
                            src=\"{{ asset(r.restaurant.imageRestaurant) }}\" 
                            alt=\"{{ r.restaurant.libelleRestaurant }}\" 
                            class=\"w-full h-full object-cover\"
                        >
                    </div>

                    <span class=\"absolute top-3 left-3 z-10 px-3 py-1 bg-white rounded text-bleuLune font-bold shadow-md\">
                        {{ r.restaurant.libelleRestaurant }}
                    </span>

                    <div class=\"p-4 flex flex-col justify-between h-[45%] bg-slate-900\">
                        <div class=\"text-white text-sm mb-3 leading-snug max-h-[85%] overflow-y-auto pr-2\">
                            {% for h in r.horaires %}
                                <p>
                                    {{ h.libelleJour }} :
                                    {{ h.ouverture|date('H:i') }} - {{ h.fermeture|date('H:i') }}
                                </p>
                            {% else %}
                                <p class=\"italic text-gray-400\">Aucun horaire défini</p>
                            {% endfor %}
                        </div>

                        <div class=\"flex items-center text-xs\">
                            <span class=\"text-white font-bold text-lg\">
                                Biome : <i class=\"text-bleuGlace\">{{ r.restaurant.biome.libelleBiome }}</i>
                            </span>
                            <a href=\"/restaurant/{{ r.restaurant.id }}\" class=\"dark:text-black rounded-full font-bold bg-white w-[5vw] transition h-[5vw] flex justify-center items-center absolute -bottom-5 right-0 hover:scale-105 cursor-pointer hover:underline\">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center text-bleuGlace italic\">Aucun restaurant disponible pour le moment.</p>
            {% endfor %}

        </div>
    </div>
</div>
", "reuse/home/services.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\home\\services.html.twig");
    }
}
