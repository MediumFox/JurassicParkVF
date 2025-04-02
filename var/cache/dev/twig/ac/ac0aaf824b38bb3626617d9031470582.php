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

/* horaire/_horaire_cards.html.twig */
class __TwigTemplate_ebdfa50fd954418bc5cb9ba416ddda0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "horaire/_horaire_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "horaire/_horaire_cards.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["horaires"]) || array_key_exists("horaires", $context) ? $context["horaires"] : (function () { throw new RuntimeError('Variable "horaires" does not exist.', 1, $this->source); })()), 0, 16));
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
        foreach ($context['_seq'] as $context["_key"] => $context["horaire"]) {
            // line 2
            yield "    <div class=\"overflow-hidden border-[1px] bg-white border-gray-300 rounded-lg\">
        <div class=\"px-3 pb-3 pt-2 relative\">
            <div class=\"flex justify-between\">
                <div class=\"flex flex-col justify-baseline items-baseline\">
                    <span><strong class=\"text-bleuGlace\">Ouverture :</strong> <i>";
            // line 6
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["horaire"], "ouverture", [], "any", false, false, false, 6)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["horaire"], "ouverture", [], "any", false, false, false, 6), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</i></span>
                    <span><strong class=\"text-bleuGlace\">Fermeture :</strong> <i>";
            // line 7
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["horaire"], "fermeture", [], "any", false, false, false, 7)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["horaire"], "fermeture", [], "any", false, false, false, 7), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</i></span>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-2\">
                ";
            // line 11
            yield Twig\Extension\CoreExtension::include($this->env, $context, "horaire/_delete_form.html.twig");
            yield "
                <span onClick=\"mettreAJourData(";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horaire"], "id", [], "any", false, false, false, 12), "html", null, true);
            yield ")\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                    ";
            // line 13
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
        unset($context['_seq'], $context['_key'], $context['horaire'], $context['_parent'], $context['loop']);
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
        return "horaire/_horaire_cards.html.twig";
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
        return array (  90 => 13,  86 => 12,  82 => 11,  75 => 7,  71 => 6,  65 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for horaire in horaires|slice(0, 16) %}
    <div class=\"overflow-hidden border-[1px] bg-white border-gray-300 rounded-lg\">
        <div class=\"px-3 pb-3 pt-2 relative\">
            <div class=\"flex justify-between\">
                <div class=\"flex flex-col justify-baseline items-baseline\">
                    <span><strong class=\"text-bleuGlace\">Ouverture :</strong> <i>{{ horaire.ouverture ? horaire.ouverture|date('Y-m-d H:i:s') : '' }}</i></span>
                    <span><strong class=\"text-bleuGlace\">Fermeture :</strong> <i>{{ horaire.fermeture ? horaire.fermeture|date('Y-m-d H:i:s') : '' }}</i></span>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-2\">
                {{ include('horaire/_delete_form.html.twig') }}
                <span onClick=\"mettreAJourData({{horaire.id}})\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                    {{ include('svg/update-svg.html.twig') }}
                <span/>
            </div>
        </div>
    </div>
{% endfor %}", "horaire/_horaire_cards.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\horaire\\_horaire_cards.html.twig");
    }
}
