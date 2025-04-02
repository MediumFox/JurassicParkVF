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

/* reuse/home/hotels.html.twig */
class __TwigTemplate_0d121e3e270382399e2ac796b2715a14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/home/hotels.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/home/hotels.html.twig"));

        // line 1
        yield "<div class=\"w-full min-h-[70vh] flex flex-col items-center p-5 m-10 relative -top-9\">
    <div class=\"w-[90%] min-h-[50%]\">
            
        <div class=\"text-center mb-10\">
            <h1 class=\"mb-6 text-3xl text-bleuLune font-bold text-center\">Nos hôtels</h1>
            <div class=\"w-20 h-1 bg-bleuLune mx-auto mt-2 rounded animate-pulse\"></div>
            <p class=\"text-bleuGlace mt-2 italic text-sm\">Prévisions des prochains jours pour nos visiteurs intrépides, soyez vigilant en cas de fortes pluies (avalanches, éboulements ou glissements de terrains fréquent)</p>
        </div>
        <div class=\"absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-white/5 animate-gradient-move pointer-events-none z-0\"></div>

        <div class=\"w-full flex flex-wrap justify-center gap-20 relative z-10 py-10 px-20 rounded-3xl transition-all duration-500\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["randomHotels"]) || array_key_exists("randomHotels", $context) ? $context["randomHotels"] : (function () { throw new RuntimeError('Variable "randomHotels" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 13
            yield "                <div class=\"rounded-lg overflow-hidden relative w-[45%] h-[300px] shadow-lg transition transform hover:scale-105 bg-slate-900\">
                    <div class=\"h-[55%] overflow-hidden\">
                        <img 
                            src=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "imageHotel", [], "any", false, false, false, 16)), "html", null, true);
            yield "\" 
                            alt=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "libelleHotel", [], "any", false, false, false, 17), "html", null, true);
            yield "\" 
                            class=\"w-full h-full object-cover\"
                        >
                    </div>

                    <span class=\"absolute top-3 left-3 z-10 px-3 py-1 bg-white rounded text-bleuLune font-bold shadow-md\">
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "libelleHotel", [], "any", false, false, false, 23), "html", null, true);
            yield "
                    </span>

                    <div class=\"p-4 flex flex-col justify-between h-[45%]\">
                        <p class=\"text-white italic line-clamp-3 mb-3 text-sm w-[90%] leading-snug\">
                            ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "descriptionHotel", [], "any", false, false, false, 28), "html", null, true);
            yield "
                        </p>
                        <div class=\"flex items-center text-xs\">
                            <span class=\"text-white font-bold text-lg\">
                                Biome : <i class=\"text-bleuGlace\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "biome", [], "any", false, false, false, 32), "libelleBiome", [], "any", false, false, false, 32), "html", null, true);
            yield "</i>
                            </span>
                            <a href=\"/nos-services\" class=\"rounded-full font-bold bg-white w-[5vw] transition h-[5vw] flex justify-center items-center absolute -bottom-5 right-0 hover:scale-105 cursor-pointer hover:underline\">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "                <p class=\"text-center text-bleuGlace italic\">Aucun restaurant disponible pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "        </div>
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
        return "reuse/home/hotels.html.twig";
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
        return array (  121 => 43,  114 => 41,  112 => 40,  99 => 32,  92 => 28,  84 => 23,  75 => 17,  71 => 16,  66 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"w-full min-h-[70vh] flex flex-col items-center p-5 m-10 relative -top-9\">
    <div class=\"w-[90%] min-h-[50%]\">
            
        <div class=\"text-center mb-10\">
            <h1 class=\"mb-6 text-3xl text-bleuLune font-bold text-center\">Nos hôtels</h1>
            <div class=\"w-20 h-1 bg-bleuLune mx-auto mt-2 rounded animate-pulse\"></div>
            <p class=\"text-bleuGlace mt-2 italic text-sm\">Prévisions des prochains jours pour nos visiteurs intrépides, soyez vigilant en cas de fortes pluies (avalanches, éboulements ou glissements de terrains fréquent)</p>
        </div>
        <div class=\"absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-white/5 animate-gradient-move pointer-events-none z-0\"></div>

        <div class=\"w-full flex flex-wrap justify-center gap-20 relative z-10 py-10 px-20 rounded-3xl transition-all duration-500\">
            {% for h in randomHotels %}
                <div class=\"rounded-lg overflow-hidden relative w-[45%] h-[300px] shadow-lg transition transform hover:scale-105 bg-slate-900\">
                    <div class=\"h-[55%] overflow-hidden\">
                        <img 
                            src=\"{{ asset(h.imageHotel) }}\" 
                            alt=\"{{ h.libelleHotel }}\" 
                            class=\"w-full h-full object-cover\"
                        >
                    </div>

                    <span class=\"absolute top-3 left-3 z-10 px-3 py-1 bg-white rounded text-bleuLune font-bold shadow-md\">
                        {{ h.libelleHotel }}
                    </span>

                    <div class=\"p-4 flex flex-col justify-between h-[45%]\">
                        <p class=\"text-white italic line-clamp-3 mb-3 text-sm w-[90%] leading-snug\">
                            {{h.descriptionHotel}}
                        </p>
                        <div class=\"flex items-center text-xs\">
                            <span class=\"text-white font-bold text-lg\">
                                Biome : <i class=\"text-bleuGlace\">{{ h.biome.libelleBiome }}</i>
                            </span>
                            <a href=\"/nos-services\" class=\"rounded-full font-bold bg-white w-[5vw] transition h-[5vw] flex justify-center items-center absolute -bottom-5 right-0 hover:scale-105 cursor-pointer hover:underline\">
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
", "reuse/home/hotels.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\home\\hotels.html.twig");
    }
}
