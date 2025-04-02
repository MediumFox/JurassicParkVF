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

/* chambre/_chambre_cards.html.twig */
class __TwigTemplate_c5fb009cc274cd30cd14965952dddd03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/_chambre_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/_chambre_cards.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 1, $this->source); })()), 0, 16));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 2
            yield "    <div class=\"overflow-hidden border-[1px] bg-white border-gray-300 rounded-lg\">
        <div class=\"px-3 pb-3 pt-2 relative\">
            <div class=\"flex justify-between\">
                <span class=\"font-bold text-center\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "numeroChambre", [], "any", false, false, false, 5), "html", null, true);
            yield "</span>
                <span><strong>Etage :</strong> ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "etageChambre", [], "any", false, false, false, 6), "html", null, true);
            yield "</span>
            </div>

            <div class=\"flex flex-row justify-between items-end\">
                <div class=\"mb-1\">
                    <span class=\"text-xs bg-slate-900 rounded p-1 font-bold text-white\">
                        ";
            // line 12
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "hotel", [], "any", false, false, false, 12))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "hotel", [], "any", false, false, false, 12), "libelleHotel", [], "any", false, false, false, 12), "html", null, true)) : ("Pas d'hôtel défini"));
            yield "
                    </span>
                </div>
                <div class=\"flex justify-end gap-2 mt-2\">
                    ";
            // line 16
            yield Twig\Extension\CoreExtension::include($this->env, $context, "chambre/_delete_form.html.twig");
            yield "
                    <span onClick=\"mettreAJourData(";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield ")\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                        ";
            // line 18
            yield Twig\Extension\CoreExtension::include($this->env, $context, "svg/update-svg.html.twig");
            yield "
                    <span/>
                </div>
            </div>
        </div>
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chambre/_chambre_cards.html.twig";
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
        return array (  98 => 18,  94 => 17,  90 => 16,  83 => 12,  74 => 6,  70 => 5,  65 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for chambre in chambres|slice(0, 16) %}
    <div class=\"overflow-hidden border-[1px] bg-white border-gray-300 rounded-lg\">
        <div class=\"px-3 pb-3 pt-2 relative\">
            <div class=\"flex justify-between\">
                <span class=\"font-bold text-center\">{{ chambre.numeroChambre }}</span>
                <span><strong>Etage :</strong> {{chambre.etageChambre}}</span>
            </div>

            <div class=\"flex flex-row justify-between items-end\">
                <div class=\"mb-1\">
                    <span class=\"text-xs bg-slate-900 rounded p-1 font-bold text-white\">
                        {{ chambre.hotel is not null ? chambre.hotel.libelleHotel : \"Pas d'hôtel défini\" }}
                    </span>
                </div>
                <div class=\"flex justify-end gap-2 mt-2\">
                    {{ include('chambre/_delete_form.html.twig') }}
                    <span onClick=\"mettreAJourData({{chambre.id}})\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                        {{ include('svg/update-svg.html.twig') }}
                    <span/>
                </div>
            </div>
        </div>
    </div>
{% endfor %}", "chambre/_chambre_cards.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\chambre\\_chambre_cards.html.twig");
    }
}
