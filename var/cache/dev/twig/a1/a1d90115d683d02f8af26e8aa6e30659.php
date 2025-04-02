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

/* dinosaure/_dinosaure_cards.html.twig */
class __TwigTemplate_e6773f7e2b2a542274623033bf333a4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dinosaure/_dinosaure_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dinosaure/_dinosaure_cards.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["dinosaures"]) || array_key_exists("dinosaures", $context) ? $context["dinosaures"] : (function () { throw new RuntimeError('Variable "dinosaures" does not exist.', 1, $this->source); })()), 0, 16));
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
        foreach ($context['_seq'] as $context["_key"] => $context["dinosaure"]) {
            // line 2
            yield "    <div class=\"overflow-hidden border-[1px] bg-white border-gray-300 rounded-lg \">
        <div class=\"relative\">
            <span class=\"absolute bottom-1 left-1 px-2 py-1 text-xs bg-slate-900 rounded ml-1 mb-1 font-bold text-white\">
                ";
            // line 5
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "enclos", [], "any", false, false, false, 5))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "enclos", [], "any", false, false, false, 5), "libelleEnclos", [], "any", false, false, false, 5), "html", null, true)) : ("Pas de biome défini"));
            yield "
            </span>
        </div>
        <div class=\"px-3 pb-3 pt-2 relative flex flex-col justify-between h-[100%]\">
                <div class=\"flex justify-between\">
                <div class=\"flex flex-row items-center\">
                    <img src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "imageDinosaure", [], "any", false, false, false, 11)), "html", null, true);
            yield "\" class=\"mr-1.5 w-[35px] h-[35px]\" />
                    <span class=\"font-bold text-center ml-1  text-lg line-clamp-1\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "libelleDinosaure", [], "any", false, false, false, 12), "html", null, true);
            yield "</span>
                </div>
            </div>
            <div class=\"flex flex-col\">
                <span class=\"italic text-bleuGlace line-clamp-3 my-1.5\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "descriptionDinosaure", [], "any", false, false, false, 16), "html", null, true);
            yield "</span>
                <div class=\"flex flex-row justify-between my-2\">
                    <span class=\"text-xs\"><strong>Régime :</strong> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "regimeDinosaure", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
                    <span class=\"text-xs\"><strong>Ere : </strong>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "ereDinosaure", [], "any", false, false, false, 19), "html", null, true);
            yield "</span>
                </div>
            </div>
            <div class=\"flex flex-row justify-between items-end\">
                <div class=\"mb-1\">
                    <span class=\"text-xs bg-slate-900 rounded p-1 font-bold text-white\">
                        ";
            // line 25
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "enclos", [], "any", false, false, false, 25))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "enclos", [], "any", false, false, false, 25), "libelleEnclos", [], "any", false, false, false, 25), "html", null, true)) : ("Pas de dinosaure défini"));
            yield "
                    </span>
                </div>
                <div class=\"flex justify-end gap-2 mt-2\">
                    ";
            // line 29
            yield Twig\Extension\CoreExtension::include($this->env, $context, "dinosaure/_delete_form.html.twig");
            yield "
                    <span onClick=\"mettreAJourData(";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield ")\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                        ";
            // line 31
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
        unset($context['_seq'], $context['_key'], $context['dinosaure'], $context['_parent'], $context['loop']);
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
        return "dinosaure/_dinosaure_cards.html.twig";
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
        return array (  123 => 31,  119 => 30,  115 => 29,  108 => 25,  99 => 19,  95 => 18,  90 => 16,  83 => 12,  79 => 11,  70 => 5,  65 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for dinosaure in dinosaures|slice(0, 16) %}
    <div class=\"overflow-hidden border-[1px] bg-white border-gray-300 rounded-lg \">
        <div class=\"relative\">
            <span class=\"absolute bottom-1 left-1 px-2 py-1 text-xs bg-slate-900 rounded ml-1 mb-1 font-bold text-white\">
                {{ dinosaure.enclos is not null ? dinosaure.enclos.libelleEnclos : 'Pas de biome défini' }}
            </span>
        </div>
        <div class=\"px-3 pb-3 pt-2 relative flex flex-col justify-between h-[100%]\">
                <div class=\"flex justify-between\">
                <div class=\"flex flex-row items-center\">
                    <img src=\"{{ asset(dinosaure.imageDinosaure) }}\" class=\"mr-1.5 w-[35px] h-[35px]\" />
                    <span class=\"font-bold text-center ml-1  text-lg line-clamp-1\">{{ dinosaure.libelleDinosaure }}</span>
                </div>
            </div>
            <div class=\"flex flex-col\">
                <span class=\"italic text-bleuGlace line-clamp-3 my-1.5\">{{dinosaure.descriptionDinosaure}}</span>
                <div class=\"flex flex-row justify-between my-2\">
                    <span class=\"text-xs\"><strong>Régime :</strong> {{dinosaure.regimeDinosaure}}</span>
                    <span class=\"text-xs\"><strong>Ere : </strong>{{dinosaure.ereDinosaure}}</span>
                </div>
            </div>
            <div class=\"flex flex-row justify-between items-end\">
                <div class=\"mb-1\">
                    <span class=\"text-xs bg-slate-900 rounded p-1 font-bold text-white\">
                        {{ dinosaure.enclos is not null ? dinosaure.enclos.libelleEnclos : 'Pas de dinosaure défini' }}
                    </span>
                </div>
                <div class=\"flex justify-end gap-2 mt-2\">
                    {{ include('dinosaure/_delete_form.html.twig') }}
                    <span onClick=\"mettreAJourData({{dinosaure.id}})\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                        {{ include('svg/update-svg.html.twig') }}
                    <span/>
                </div>
            </div>
        </div>
    </div>
{% endfor %}", "dinosaure/_dinosaure_cards.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\dinosaure\\_dinosaure_cards.html.twig");
    }
}
