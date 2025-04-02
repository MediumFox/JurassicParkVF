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

/* remboursement/admin_remboursement.html.twig */
class __TwigTemplate_9a5d6b2c3d686c4178cd5f916dbe2c0a extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/admin_remboursement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/admin_remboursement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "remboursement/admin_remboursement.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Gestion des Remboursements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->loadTemplate("reuse/hero.html.twig", "remboursement/admin_remboursement.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
    <div class=\"p-10 max-w-[80%] mx-auto bg-white dark:bg-slate-800 rounded-xl shadow-md\">
        <h1 class=\"text-2xl font-bold mb-6 text-slate-800 dark:text-white flex items-center gap-2\">
            Gestion des Demandes de Remboursement
        </h1>

        ";
        // line 13
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["demandesRemboursement"]) || array_key_exists("demandesRemboursement", $context) ? $context["demandesRemboursement"] : (function () { throw new RuntimeError('Variable "demandesRemboursement" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "            <div class=\"overflow-x-auto rounded-lg border border-gray-200 dark:border-slate-700\">
                <table class=\"min-w-full text-sm text-left divide-y divide-gray-200 dark:divide-slate-700\">
                    <thead class=\"bg-slate-900 text-white uppercase text-xs\">
                        <tr>
                            <th class=\"p-3\">Nom</th>
                            <th class=\"p-3\">Prénom</th>
                            <th class=\"p-3\">Début</th>
                            <th class=\"p-3\">Fin</th>
                            <th class=\"p-3\">Demande</th>
                            <th class=\"p-3\">Motif</th>
                            <th class=\"p-3\">Montant</th>
                            <th class=\"p-3\">Statut</th>
                            <th class=\"p-3\">Action</th>
                        </tr>
                    </thead>
                    <tbody class=\"divide-y divide-gray-100 dark:divide-slate-600 bg-white dark:bg-slate-700\">
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["demandesRemboursement"]) || array_key_exists("demandesRemboursement", $context) ? $context["demandesRemboursement"] : (function () { throw new RuntimeError('Variable "demandesRemboursement" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["remboursement"]) {
                // line 31
                yield "                            <tr data-remboursement-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "id", [], "any", false, false, false, 31), "html", null, true);
                yield "\" class=\"hover:bg-gray-50 dark:hover:bg-slate-600 transition\">
                                <td class=\"p-3\">
                                    ";
                // line 33
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "client", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "client", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true)) : ("N/A"));
                yield "
                                </td>
                                <td class=\"p-3\">
                                    ";
                // line 36
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "client", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "client", [], "any", false, false, false, 36), "prenom", [], "any", false, false, false, 36), "html", null, true)) : ("N/A"));
                yield "
                                </td>
                                <td class=\"p-3\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "billet", [], "any", false, false, false, 38), "debutBillet", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                yield "</td>
                                <td class=\"p-3\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "billet", [], "any", false, false, false, 39), "finBillet", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
                yield "</td>
                                <td class=\"p-3\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "dateDemande", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
                yield "</td>
                                <td class=\"p-3 max-w-[200px] truncate\" title=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "motif", [], "any", false, false, false, 41), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "motif", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
                                <td class=\"p-3\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "montant", [], "any", false, false, false, 42), "html", null, true);
                yield " €</td>
                                <td class=\"p-3 statut\">
                                    ";
                // line 44
                $context["statut"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "statut", [], "any", false, false, false, 44));
                // line 45
                yield "                                    ";
                if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 45, $this->source); })()) == "accepté")) {
                    // line 46
                    yield "                                        <span class=\"bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-green-800 dark:text-white\">Accepté</span>
                                    ";
                } elseif ((                // line 47
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 47, $this->source); })()) == "refusé")) {
                    // line 48
                    yield "                                        <span class=\"bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-red-800 dark:text-white\">Refusé</span>
                                    ";
                } else {
                    // line 50
                    yield "                                        <span class=\"bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-yellow-700 dark:text-white\">En cours</span>
                                    ";
                }
                // line 52
                yield "                                </td>
                                ";
                // line 53
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "statut", [], "any", false, false, false, 53) == "en cours")) {
                    // line 54
                    yield "                                    <td class=\"p-3 flex gap-2\">
                                        <button class=\"accept-btn cursor-pointer bg-green-600 hover:bg-green-500 text-white px-3 py-1 rounded transition text-xs font-semibold shadow-sm\"
                                                onclick=\"updateStatut(";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "id", [], "any", false, false, false, 56), "html", null, true);
                    yield ", 'Accepté')\">
                                            Accepter
                                        </button>
                                        <button class=\"reject-btn cursor-pointer bg-red-600 hover:bg-red-500 text-white px-3 py-1 rounded transition text-xs font-semibold shadow-sm\"
                                                onclick=\"updateStatut(";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["remboursement"], "id", [], "any", false, false, false, 60), "html", null, true);
                    yield ", 'Refusé')\">
                                            Refuser
                                        </button>
                                    </td>
                                ";
                }
                // line 65
                yield "                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['remboursement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 71
            yield "            <p class=\"text-slate-600 dark:text-slate-300 mt-4\">Aucune demande de remboursement en cours.</p>
        ";
        }
        // line 73
        yield "    </div>

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
                        // Met à jour le statut directement sur la page
                        const row = document.querySelector(`tr[data-remboursement-id=\"\${remboursementId}\"]`);
                        const statutCell = row.querySelector('.statut');
                        statutCell.textContent = statut; // Met à jour la cellule du statut
                        alert(`Le remboursement a été \${statut.toLowerCase()} !`);
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
        return "remboursement/admin_remboursement.html.twig";
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
        return array (  234 => 73,  230 => 71,  224 => 67,  217 => 65,  209 => 60,  202 => 56,  198 => 54,  196 => 53,  193 => 52,  189 => 50,  185 => 48,  183 => 47,  180 => 46,  177 => 45,  175 => 44,  170 => 42,  164 => 41,  160 => 40,  156 => 39,  152 => 38,  147 => 36,  141 => 33,  135 => 31,  131 => 30,  113 => 14,  111 => 13,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Remboursements{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}

    <div class=\"p-10 max-w-[80%] mx-auto bg-white dark:bg-slate-800 rounded-xl shadow-md\">
        <h1 class=\"text-2xl font-bold mb-6 text-slate-800 dark:text-white flex items-center gap-2\">
            Gestion des Demandes de Remboursement
        </h1>

        {% if demandesRemboursement is not empty %}
            <div class=\"overflow-x-auto rounded-lg border border-gray-200 dark:border-slate-700\">
                <table class=\"min-w-full text-sm text-left divide-y divide-gray-200 dark:divide-slate-700\">
                    <thead class=\"bg-slate-900 text-white uppercase text-xs\">
                        <tr>
                            <th class=\"p-3\">Nom</th>
                            <th class=\"p-3\">Prénom</th>
                            <th class=\"p-3\">Début</th>
                            <th class=\"p-3\">Fin</th>
                            <th class=\"p-3\">Demande</th>
                            <th class=\"p-3\">Motif</th>
                            <th class=\"p-3\">Montant</th>
                            <th class=\"p-3\">Statut</th>
                            <th class=\"p-3\">Action</th>
                        </tr>
                    </thead>
                    <tbody class=\"divide-y divide-gray-100 dark:divide-slate-600 bg-white dark:bg-slate-700\">
                        {% for remboursement in demandesRemboursement %}
                            <tr data-remboursement-id=\"{{ remboursement.id }}\" class=\"hover:bg-gray-50 dark:hover:bg-slate-600 transition\">
                                <td class=\"p-3\">
                                    {{ remboursement.client ? remboursement.client.nom : 'N/A' }}
                                </td>
                                <td class=\"p-3\">
                                    {{ remboursement.client ? remboursement.client.prenom : 'N/A' }}
                                </td>
                                <td class=\"p-3\">{{ remboursement.billet.debutBillet|date('d/m/Y') }}</td>
                                <td class=\"p-3\">{{ remboursement.billet.finBillet|date('d/m/Y') }}</td>
                                <td class=\"p-3\">{{ remboursement.dateDemande|date('d/m/Y') }}</td>
                                <td class=\"p-3 max-w-[200px] truncate\" title=\"{{ remboursement.motif }}\">{{ remboursement.motif }}</td>
                                <td class=\"p-3\">{{ remboursement.montant }} €</td>
                                <td class=\"p-3 statut\">
                                    {% set statut = remboursement.statut|lower %}
                                    {% if statut == 'accepté' %}
                                        <span class=\"bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-green-800 dark:text-white\">Accepté</span>
                                    {% elseif statut == 'refusé' %}
                                        <span class=\"bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-red-800 dark:text-white\">Refusé</span>
                                    {% else %}
                                        <span class=\"bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full dark:bg-yellow-700 dark:text-white\">En cours</span>
                                    {% endif %}
                                </td>
                                {% if remboursement.statut == 'en cours' %}
                                    <td class=\"p-3 flex gap-2\">
                                        <button class=\"accept-btn cursor-pointer bg-green-600 hover:bg-green-500 text-white px-3 py-1 rounded transition text-xs font-semibold shadow-sm\"
                                                onclick=\"updateStatut({{ remboursement.id }}, 'Accepté')\">
                                            Accepter
                                        </button>
                                        <button class=\"reject-btn cursor-pointer bg-red-600 hover:bg-red-500 text-white px-3 py-1 rounded transition text-xs font-semibold shadow-sm\"
                                                onclick=\"updateStatut({{ remboursement.id }}, 'Refusé')\">
                                            Refuser
                                        </button>
                                    </td>
                                {% endif %}
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% else %}
            <p class=\"text-slate-600 dark:text-slate-300 mt-4\">Aucune demande de remboursement en cours.</p>
        {% endif %}
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
                        // Met à jour le statut directement sur la page
                        const row = document.querySelector(`tr[data-remboursement-id=\"\${remboursementId}\"]`);
                        const statutCell = row.querySelector('.statut');
                        statutCell.textContent = statut; // Met à jour la cellule du statut
                        alert(`Le remboursement a été \${statut.toLowerCase()} !`);
                    } else {
                        alert(\"Erreur : \" + data.message);
                    }
                })
                .catch(error => console.error('Erreur:', error));
        }
    </script>

{% endblock %}
", "remboursement/admin_remboursement.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\remboursement\\admin_remboursement.html.twig");
    }
}
