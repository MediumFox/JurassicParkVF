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

/* enclos/_enclos_cards.html.twig */
class __TwigTemplate_694e3734c34ae843a1ea258314a8e72c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enclos/_enclos_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enclos/_enclos_cards.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["enclos"]) || array_key_exists("enclos", $context) ? $context["enclos"] : (function () { throw new RuntimeError('Variable "enclos" does not exist.', 1, $this->source); })()), 0, 16));
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
        foreach ($context['_seq'] as $context["_key"] => $context["enclo"]) {
            // line 2
            yield "    <div class=\"overflow-hidden border-[1px] bg-white border-gray-300 rounded-lg\">
        <div class=\"px-3 pb-3 pt-2 relative\">
            <span class=\"absolute bottom-1 left-1 px-2 py-1 text-xs bg-slate-900 rounded ml-1 mb-1 font-bold text-white\">
                ";
            // line 5
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["enclo"], "biome", [], "any", false, false, false, 5))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["enclo"], "biome", [], "any", false, false, false, 5), "libelleBiome", [], "any", false, false, false, 5), "html", null, true)) : ("Pas de biome défini"));
            yield "
            </span>
            <div class=\"flex justify-between\">
                <div class=\"flex flex-row items-center\">
                    <span class=\"font-bold text-center\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enclo"], "libelleEnclos", [], "any", false, false, false, 9), "html", null, true);
            yield "</span>
                </div>
            </div>

            <div class=\"flex justify-end gap-2 mt-2 \">
                ";
            // line 14
            yield Twig\Extension\CoreExtension::include($this->env, $context, "enclos/_delete_form.html.twig");
            yield "
                <span onClick=\"mettreAJourData(";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enclo"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield ")\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                    ";
            // line 16
            yield Twig\Extension\CoreExtension::include($this->env, $context, "svg/update-svg.html.twig");
            yield "
                <span/>
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
        unset($context['_seq'], $context['_key'], $context['enclo'], $context['_parent'], $context['loop']);
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
        return "enclos/_enclos_cards.html.twig";
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
        return array (  93 => 16,  89 => 15,  85 => 14,  77 => 9,  70 => 5,  65 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for enclo in enclos|slice(0, 16) %}
    <div class=\"overflow-hidden border-[1px] bg-white border-gray-300 rounded-lg\">
        <div class=\"px-3 pb-3 pt-2 relative\">
            <span class=\"absolute bottom-1 left-1 px-2 py-1 text-xs bg-slate-900 rounded ml-1 mb-1 font-bold text-white\">
                {{ enclo.biome is not null ? enclo.biome.libelleBiome : 'Pas de biome défini' }}
            </span>
            <div class=\"flex justify-between\">
                <div class=\"flex flex-row items-center\">
                    <span class=\"font-bold text-center\">{{ enclo.libelleEnclos }}</span>
                </div>
            </div>

            <div class=\"flex justify-end gap-2 mt-2 \">
                {{ include('enclos/_delete_form.html.twig') }}
                <span onClick=\"mettreAJourData({{enclo.id}})\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                    {{ include('svg/update-svg.html.twig') }}
                <span/>
            </div>
        </div>
    </div>
{% endfor %}", "enclos/_enclos_cards.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\enclos\\_enclos_cards.html.twig");
    }
}
