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

/* remboursement/remboursement.html.twig */
class __TwigTemplate_2cf7109c1c8ed01868fc51d62f84038a extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/remboursement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/remboursement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "remboursement/remboursement.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Vos Demandes de Remboursement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->loadTemplate("reuse/hero.html.twig", "remboursement/remboursement.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <div class=\"p-5 w-full h-[50vh] flex justify-center items-center relative dark:bg-gray-900\">
        ";
        // line 9
        yield from $this->loadTemplate("client/dashboard-client.html.twig", "remboursement/remboursement.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
        <div class=\"w-full max-w-6xl bg-white dark:bg-slate-800 rounded-xl shadow-lg p-8 ml-[30%]\">
            <h1 class=\"text-2xl font-bold text-slate-800 dark:text-white mb-6 flex items-center gap-2\">
                Historique des demandes de remboursement
            </h1>

            ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["demandesRemboursement"]) || array_key_exists("demandesRemboursement", $context) ? $context["demandesRemboursement"] : (function () { throw new RuntimeError('Variable "demandesRemboursement" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full text-sm text-left border-collapse\">
                        <thead class=\"bg-bleuGlace text-white uppercase text-xs\">
                            <tr>
                                <th class=\"p-3\">Nom</th>
                                <th class=\"p-3\">Prénom</th>
                                <th class=\"p-3\">Début</th>
                                <th class=\"p-3\">Fin</th>
                                <th class=\"p-3\">Demande</th>
                                <th class=\"p-3\">Motif</th>
                                <th class=\"p-3\">Montant</th>
                                <th class=\"p-3\">Statut</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white dark:bg-slate-700 divide-y divide-gray-200 dark:divide-slate-600\">
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["demandesRemboursement"]) || array_key_exists("demandesRemboursement", $context) ? $context["demandesRemboursement"] : (function () { throw new RuntimeError('Variable "demandesRemboursement" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["remboursement"]) {
                // line 33
                yield "                                <tr class=\"hover:bg-gray-50 dark:hover:bg-slate-600 transition\">
                                    <td class=\"p-3\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "client", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "client", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "billet", [], "any", false, false, false, 36), "debutBillet", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "billet", [], "any", false, false, false, 37), "finBillet", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "dateDemande", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                yield "</td>
                                    <td class=\"p-3 max-w-[200px] truncate\" title=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "motif", [], "any", false, false, false, 39), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "motif", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "montant", [], "any", false, false, false, 40), "html", null, true);
                yield " €</td>
                                    <td class=\"p-3\">
                                        ";
                // line 42
                $context["status"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "statut", [], "any", false, false, false, 42));
                // line 43
                yield "                                        ";
                if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 43, $this->source); })()) == "accepté")) {
                    // line 44
                    yield "                                            <span class=\"bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-green-800 dark:text-white\">
                                                Acceptée
                                            </span>
                                        ";
                } elseif ((                // line 47
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 47, $this->source); })()) == "refusée")) {
                    // line 48
                    yield "                                            <span class=\"bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-red-800 dark:text-white\">
                                                Refusée
                                            </span>
                                        ";
                } else {
                    // line 52
                    yield "                                            <span class=\"bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-yellow-700 dark:text-white\">
                                                En attente
                                            </span>
                                        ";
                }
                // line 56
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['remboursement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 63
            yield "                <p class=\"text-slate-600 dark:text-slate-300\">Aucune demande de remboursement enregistrée.</p>
            ";
        }
        // line 65
        yield "        </div>
    </div>

    <script>
        function updateStatut(remboursementId, statut) {
            fetch(`/admin/remboursement/\${remboursementId}/statut`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: `statut=\${statut}`
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(`Le remboursement a été \${statut.toLowerCase()} !`);
                        location.reload(); // Recharge la page pour voir les modifications
                    } else {
                        alert(\"Erreur : \" + data.message);
                    }
                })
                .catch(error => console.error('Erreur:', error));
        }
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
        return "remboursement/remboursement.html.twig";
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
        return array (  215 => 65,  211 => 63,  205 => 59,  197 => 56,  191 => 52,  185 => 48,  183 => 47,  178 => 44,  175 => 43,  173 => 42,  168 => 40,  162 => 39,  158 => 38,  154 => 37,  150 => 36,  146 => 35,  142 => 34,  139 => 33,  135 => 32,  118 => 17,  116 => 16,  108 => 10,  106 => 9,  103 => 8,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Vos Demandes de Remboursement{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}
    <div class=\"p-5 w-full h-[50vh] flex justify-center items-center relative dark:bg-gray-900\">
        {% include 'client/dashboard-client.html.twig' %}

        <div class=\"w-full max-w-6xl bg-white dark:bg-slate-800 rounded-xl shadow-lg p-8 ml-[30%]\">
            <h1 class=\"text-2xl font-bold text-slate-800 dark:text-white mb-6 flex items-center gap-2\">
                Historique des demandes de remboursement
            </h1>

            {% if demandesRemboursement is not empty %}
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full text-sm text-left border-collapse\">
                        <thead class=\"bg-bleuGlace text-white uppercase text-xs\">
                            <tr>
                                <th class=\"p-3\">Nom</th>
                                <th class=\"p-3\">Prénom</th>
                                <th class=\"p-3\">Début</th>
                                <th class=\"p-3\">Fin</th>
                                <th class=\"p-3\">Demande</th>
                                <th class=\"p-3\">Motif</th>
                                <th class=\"p-3\">Montant</th>
                                <th class=\"p-3\">Statut</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white dark:bg-slate-700 divide-y divide-gray-200 dark:divide-slate-600\">
                            {% for remboursement in demandesRemboursement %}
                                <tr class=\"hover:bg-gray-50 dark:hover:bg-slate-600 transition\">
                                    <td class=\"p-3\">{{ remboursement.client.nom }}</td>
                                    <td class=\"p-3\">{{ remboursement.client.prenom }}</td>
                                    <td class=\"p-3\">{{ remboursement.billet.debutBillet|date('d/m/Y') }}</td>
                                    <td class=\"p-3\">{{ remboursement.billet.finBillet|date('d/m/Y') }}</td>
                                    <td class=\"p-3\">{{ remboursement.dateDemande|date('d/m/Y') }}</td>
                                    <td class=\"p-3 max-w-[200px] truncate\" title=\"{{ remboursement.motif }}\">{{ remboursement.motif }}</td>
                                    <td class=\"p-3\">{{ remboursement.montant }} €</td>
                                    <td class=\"p-3\">
                                        {% set status = remboursement.statut|lower %}
                                        {% if status == 'accepté' %}
                                            <span class=\"bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-green-800 dark:text-white\">
                                                Acceptée
                                            </span>
                                        {% elseif status == 'refusée' %}
                                            <span class=\"bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-red-800 dark:text-white\">
                                                Refusée
                                            </span>
                                        {% else %}
                                            <span class=\"bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-yellow-700 dark:text-white\">
                                                En attente
                                            </span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                <p class=\"text-slate-600 dark:text-slate-300\">Aucune demande de remboursement enregistrée.</p>
            {% endif %}
        </div>
    </div>

    <script>
        function updateStatut(remboursementId, statut) {
            fetch(`/admin/remboursement/\${remboursementId}/statut`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: `statut=\${statut}`
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(`Le remboursement a été \${statut.toLowerCase()} !`);
                        location.reload(); // Recharge la page pour voir les modifications
                    } else {
                        alert(\"Erreur : \" + data.message);
                    }
                })
                .catch(error => console.error('Erreur:', error));
        }
    </script>


{% endblock %}
", "remboursement/remboursement.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\remboursement\\remboursement.html.twig");
    }
}
