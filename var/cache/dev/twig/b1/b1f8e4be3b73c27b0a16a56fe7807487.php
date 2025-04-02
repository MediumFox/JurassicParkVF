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

/* client/_client_cards.html.twig */
class __TwigTemplate_89426c823ca110abadcb89b466fad4df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_client_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_client_cards.html.twig"));

        // line 1
        yield "<div class=\"overflow-x-auto rounded-lg shadow-md\">
    <table class=\"min-w-full table-auto text-sm bg-white\">
        <thead class=\"bg-bleuLune text-white uppercase text-xs tracking-wider font-bold\">
            <tr>
                <th class=\"px-6 py-3 text-left\">Nom</th>
                <th class=\"px-6 py-3 text-left\">Prénom</th>
                <th class=\"px-6 py-3 text-left\">Email</th>
                <th class=\"px-6 py-3 text-left\">Téléphone</th>
                <th class=\"px-6 py-3 text-left\">Code postal</th>
                <th class=\"px-6 py-3 text-left\">Adresse</th>
                <th class=\"px-6 py-3 text-left\">Vérifié</th>
                <th class=\"px-6 py-3 text-left\"></th>
            </tr>
        </thead>
        <tbody class=\"divide-y divide-slate-200\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 16, $this->source); })()), 0, 16));
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
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 17
            yield "                <tr class=\"hover:bg-bleuGlace/10 transition\">
                    <td class=\"px-6 py-4\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "numeroTelephone", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "codePostal", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adressePostal", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4\">
                        ";
            // line 25
            if (CoreExtension::getAttribute($this->env, $this->source, $context["client"], "isVerified", [], "any", false, false, false, 25)) {
                // line 26
                yield "                            <span class=\"inline-block px-2 py-1 text-xs font-semibold text-green-600 bg-green-100 rounded\">Oui</span>
                        ";
            } else {
                // line 28
                yield "                            <span class=\"inline-block px-2 py-1 text-xs font-semibold text-red-600 bg-red-100 rounded\">Non</span>
                        ";
            }
            // line 30
            yield "                    </td>
                    <td>                    
                        <span onClick=\"mettreAJourData(";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield ")\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                            ";
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "svg/update-svg.html.twig");
            yield "
                        <span/>
                    </td>
                </tr>
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
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </tbody>
    </table>
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
        return "client/_client_cards.html.twig";
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
        return array (  147 => 38,  128 => 33,  124 => 32,  120 => 30,  116 => 28,  112 => 26,  110 => 25,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  82 => 17,  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"overflow-x-auto rounded-lg shadow-md\">
    <table class=\"min-w-full table-auto text-sm bg-white\">
        <thead class=\"bg-bleuLune text-white uppercase text-xs tracking-wider font-bold\">
            <tr>
                <th class=\"px-6 py-3 text-left\">Nom</th>
                <th class=\"px-6 py-3 text-left\">Prénom</th>
                <th class=\"px-6 py-3 text-left\">Email</th>
                <th class=\"px-6 py-3 text-left\">Téléphone</th>
                <th class=\"px-6 py-3 text-left\">Code postal</th>
                <th class=\"px-6 py-3 text-left\">Adresse</th>
                <th class=\"px-6 py-3 text-left\">Vérifié</th>
                <th class=\"px-6 py-3 text-left\"></th>
            </tr>
        </thead>
        <tbody class=\"divide-y divide-slate-200\">
            {% for client in clients|slice(0, 16) %}
                <tr class=\"hover:bg-bleuGlace/10 transition\">
                    <td class=\"px-6 py-4\">{{ client.nom }}</td>
                    <td class=\"px-6 py-4\">{{ client.prenom }}</td>
                    <td class=\"px-6 py-4\">{{ client.email }}</td>
                    <td class=\"px-6 py-4\">{{ client.numeroTelephone }}</td>
                    <td class=\"px-6 py-4\">{{ client.codePostal }}</td>
                    <td class=\"px-6 py-4\">{{ client.adressePostal }}</td>
                    <td class=\"px-6 py-4\">
                        {% if client.isVerified %}
                            <span class=\"inline-block px-2 py-1 text-xs font-semibold text-green-600 bg-green-100 rounded\">Oui</span>
                        {% else %}
                            <span class=\"inline-block px-2 py-1 text-xs font-semibold text-red-600 bg-red-100 rounded\">Non</span>
                        {% endif %}
                    </td>
                    <td>                    
                        <span onClick=\"mettreAJourData({{client.id}})\"class=\"rounded bg-slate-900 p-1 hover:cursor-pointer flex items-center justify-center\">
                            {{ include('svg/update-svg.html.twig') }}
                        <span/>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
", "client/_client_cards.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\_client_cards.html.twig");
    }
}
