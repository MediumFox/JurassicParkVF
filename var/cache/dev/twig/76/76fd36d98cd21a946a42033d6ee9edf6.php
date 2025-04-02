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

/* produit/_produit_cards.html.twig */
class __TwigTemplate_73a1ad0b591453f7991039cd0b6a5574 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_produit_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_produit_cards.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 1, $this->source); })()), 0, 16));
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
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 2
            yield "    <div class=\"overflow-hidden bg-white border-[1px] border-gray-300 rounded-lg\">
        <div class=\"px-3 pb-3 pt-2 relative\">
            <span class=\"absolute bottom-1 left-1 px-2 py-1 text-xs ";
            // line 4
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponibleAchat", [], "any", false, false, false, 4)) ? ("bg-slate-900") : ("bg-red-700"));
            yield " rounded ml-1 mb-1 font-bold text-white\">
                ";
            // line 5
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponibleAchat", [], "any", false, false, false, 5)) ? ("Disponible") : ("Non disponible"));
            yield "
            </span>
            <div class=\"flex justify-between\">
                <div class=\"flex flex-row items-center\">
                    <img src=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 9), "html", null, true);
            yield "\" class=\"mr-1.5 w-[35px] h-[35px]\" />
                    <span class=\"font-bold text-center line-clamp-1\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "libelleProduit", [], "any", false, false, false, 10), "html", null, true);
            yield "</span>
                </div>
                <span>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixProduit", [], "any", false, false, false, 12), "html", null, true);
            yield "€</span>
            </div>
            <div class=\"flex flex-col\">
                <span class=\"italic text-bleuGlace line-clamp-3 my-1.5\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "descriptionProduit", [], "any", false, false, false, 15), "html", null, true);
            yield "</span>
                <span>Stock : ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 16), "html", null, true);
            yield "</span>
            </div>
                <div class=\"flex justify-end gap-2 mt-2\">
                    ";
            // line 19
            yield Twig\Extension\CoreExtension::include($this->env, $context, "produit/_delete_form.html.twig");
            yield "
                    <span onClick=\"mettreAJourData(";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield ")\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                        ";
            // line 21
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
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
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
        return "produit/_produit_cards.html.twig";
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
        return array (  113 => 21,  109 => 20,  105 => 19,  99 => 16,  95 => 15,  89 => 12,  84 => 10,  80 => 9,  73 => 5,  69 => 4,  65 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for produit in produits|slice(0, 16)  %}
    <div class=\"overflow-hidden bg-white border-[1px] border-gray-300 rounded-lg\">
        <div class=\"px-3 pb-3 pt-2 relative\">
            <span class=\"absolute bottom-1 left-1 px-2 py-1 text-xs {{ produit.disponibleAchat ? 'bg-slate-900' : 'bg-red-700' }} rounded ml-1 mb-1 font-bold text-white\">
                {{ produit.disponibleAchat ? 'Disponible' : 'Non disponible' }}
            </span>
            <div class=\"flex justify-between\">
                <div class=\"flex flex-row items-center\">
                    <img src=\"{{ produit.imageProduit }}\" class=\"mr-1.5 w-[35px] h-[35px]\" />
                    <span class=\"font-bold text-center line-clamp-1\">{{ produit.libelleProduit }}</span>
                </div>
                <span>{{ produit.prixProduit }}€</span>
            </div>
            <div class=\"flex flex-col\">
                <span class=\"italic text-bleuGlace line-clamp-3 my-1.5\">{{produit.descriptionProduit}}</span>
                <span>Stock : {{produit.stock}}</span>
            </div>
                <div class=\"flex justify-end gap-2 mt-2\">
                    {{ include('produit/_delete_form.html.twig') }}
                    <span onClick=\"mettreAJourData({{produit.id}})\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                        {{ include('svg/update-svg.html.twig') }}
                    <span/>
                </div>
        </div>
    </div>
{% endfor %}", "produit/_produit_cards.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\produit\\_produit_cards.html.twig");
    }
}
