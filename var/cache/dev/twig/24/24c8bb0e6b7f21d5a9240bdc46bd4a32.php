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

/* remboursement_billet/remboursement_billet.html.twig */
class __TwigTemplate_33c8233aef841f1755ff24a967830c39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement_billet/remboursement_billet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement_billet/remboursement_billet.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "remboursement_billet/remboursement_billet.html.twig", 1);
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

        yield "Vos Billets";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "remboursement_billet/remboursement_billet.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
    <div class=\"p-5 w-full h-[120vh] flex justify-center items-center relative dark:bg-gray-900\">
        ";
        // line 9
        yield from $this->loadTemplate("client/dashboard-client.html.twig", "remboursement_billet/remboursement_billet.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
        <div class=\"w-full max-w-6xl bg-white dark:bg-slate-800  rounded-xl shadow-lg p-8 ml-[30%]\">
            <h1 class=\"text-2xl font-bold text-slate-800 dark:text-white mb-6\">Vos Billets</h1>

            ";
        // line 14
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["payerBillets"]) || array_key_exists("payerBillets", $context) ? $context["payerBillets"] : (function () { throw new RuntimeError('Variable "payerBillets" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full text-sm text-left border-collapse\">
                        <thead class=\"bg-bleuGlace text-white uppercase text-xs\">
                            <tr>
                                <th class=\"p-3\">ID</th>
                                <th class=\"p-3\">Acheteur</th>
                                <th class=\"p-3\">Début</th>
                                <th class=\"p-3\">Fin</th>
                                <th class=\"p-3\">Montant</th>
                                <th class=\"p-3\">Motif</th>
                                <th class=\"p-3\">Action</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white dark:bg-slate-700 divide-y divide-gray-200 dark:divide-slate-600\">
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payerBillets"]) || array_key_exists("payerBillets", $context) ? $context["payerBillets"] : (function () { throw new RuntimeError('Variable "payerBillets" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["billet"]) {
                // line 30
                yield "                                <tr class=\"hover:bg-gray-50 dark:hover:bg-slate-600\">
                                    <td class=\"p-3\">";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "user", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "user", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "debutBillet", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "finBillet", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
                yield "</td>
                                    <td class=\"p-3\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "billet", [], "any", false, false, false, 35), "prixBillet", [], "any", false, false, false, 35), "html", null, true);
                yield " €</td>
                                    <td class=\"p-3\" id=\"motif-";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 36), "html", null, true);
                yield "\" style=\"display:none;\">
                                        <form action=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_demande_remboursement_billet", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" method=\"post\" onsubmit=\"return validateForm(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 37), "html", null, true);
                yield ")\" class=\"flex items-center gap-2\">
                                            <input type=\"text\" name=\"motif\" id=\"motif-input-";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 38), "html", null, true);
                yield "\" placeholder=\"Votre motif...\" required class=\"cursor-pointer px-3 py-1 rounded border w-full dark:bg-slate-600 dark:text-white\" />
                                            <button type=\"submit\" class=\"bg-bleuGlace cursor-pointer text-white px-3 py-1 rounded hover:bg-blue-600 transition\">Envoyer</button>
                                        </form>
                                    </td>
                                    <td class=\"p-3\">
                                        ";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "remboursementPossible", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "                                            <button class=\"cursor-pointer toggle-motif bg-slate-900 hover:bg-bleuGlace text-white px-3 py-1 rounded transition\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 44), "html", null, true);
                    yield "\">
                                                Demander un remboursement
                                            </button>
                                        ";
                } else {
                    // line 48
                    yield "                                            <button class=\"cursor-pointer bg-gray-400 text-white px-3 py-1 rounded cursor-not-allowed\" disabled>
                                                Demande déjà en cours
                                            </button>
                                        ";
                }
                // line 52
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['billet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 59
            yield "                <p class=\"text-slate-600 dark:text-slate-300\">Aucun billet trouvé pour votre compte.</p>
            ";
        }
        // line 61
        yield "        </div>
    </div>
    

    <script>
        // Fonction pour afficher ou masquer le champ de motif de remboursement au clic
        document.querySelectorAll('.toggle-motif').forEach(button => {
            button.addEventListener('click', function() {
                const billetId = this.getAttribute('data-id');
                const motifCell = document.getElementById('motif-' + billetId);

                // Toggle the visibility of the motif input
                if (motifCell.style.display === 'none' || motifCell.style.display === '') {
                    motifCell.style.display = 'table-cell';
                    this.textContent = 'Annuler la demande';
                } else {
                    motifCell.style.display = 'none';
                    this.textContent = 'Demander un remboursement';
                }
            });
        });

        // Validation de formulaire côté client
        function validateForm(billetId) {
            const motifInput = document.getElementById('motif-input-' + billetId);
            if (motifInput.value.trim() === \"\") {
                alert(\"Veuillez entrer un motif de remboursement.\");
                return false;
            }
            return true;
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
        return "remboursement_billet/remboursement_billet.html.twig";
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
        return array (  214 => 61,  210 => 59,  204 => 55,  196 => 52,  190 => 48,  182 => 44,  180 => 43,  172 => 38,  166 => 37,  162 => 36,  158 => 35,  154 => 34,  150 => 33,  144 => 32,  140 => 31,  137 => 30,  133 => 29,  117 => 15,  115 => 14,  109 => 10,  107 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vos Billets{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}

    <div class=\"p-5 w-full h-[120vh] flex justify-center items-center relative dark:bg-gray-900\">
        {% include 'client/dashboard-client.html.twig' %}

        <div class=\"w-full max-w-6xl bg-white dark:bg-slate-800  rounded-xl shadow-lg p-8 ml-[30%]\">
            <h1 class=\"text-2xl font-bold text-slate-800 dark:text-white mb-6\">Vos Billets</h1>

            {% if payerBillets is not empty %}
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full text-sm text-left border-collapse\">
                        <thead class=\"bg-bleuGlace text-white uppercase text-xs\">
                            <tr>
                                <th class=\"p-3\">ID</th>
                                <th class=\"p-3\">Acheteur</th>
                                <th class=\"p-3\">Début</th>
                                <th class=\"p-3\">Fin</th>
                                <th class=\"p-3\">Montant</th>
                                <th class=\"p-3\">Motif</th>
                                <th class=\"p-3\">Action</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white dark:bg-slate-700 divide-y divide-gray-200 dark:divide-slate-600\">
                            {% for billet in payerBillets %}
                                <tr class=\"hover:bg-gray-50 dark:hover:bg-slate-600\">
                                    <td class=\"p-3\">{{ billet.id }}</td>
                                    <td class=\"p-3\">{{ billet.user.nom }} {{ billet.user.prenom }}</td>
                                    <td class=\"p-3\">{{ billet.debutBillet|date('d/m/Y') }}</td>
                                    <td class=\"p-3\">{{ billet.finBillet|date('d/m/Y') }}</td>
                                    <td class=\"p-3\">{{ billet.billet.prixBillet }} €</td>
                                    <td class=\"p-3\" id=\"motif-{{ billet.id }}\" style=\"display:none;\">
                                        <form action=\"{{ path('app_client_demande_remboursement_billet', {'id': billet.id}) }}\" method=\"post\" onsubmit=\"return validateForm({{ billet.id }})\" class=\"flex items-center gap-2\">
                                            <input type=\"text\" name=\"motif\" id=\"motif-input-{{ billet.id }}\" placeholder=\"Votre motif...\" required class=\"cursor-pointer px-3 py-1 rounded border w-full dark:bg-slate-600 dark:text-white\" />
                                            <button type=\"submit\" class=\"bg-bleuGlace cursor-pointer text-white px-3 py-1 rounded hover:bg-blue-600 transition\">Envoyer</button>
                                        </form>
                                    </td>
                                    <td class=\"p-3\">
                                        {% if billet.remboursementPossible %}
                                            <button class=\"cursor-pointer toggle-motif bg-slate-900 hover:bg-bleuGlace text-white px-3 py-1 rounded transition\" data-id=\"{{ billet.id }}\">
                                                Demander un remboursement
                                            </button>
                                        {% else %}
                                            <button class=\"cursor-pointer bg-gray-400 text-white px-3 py-1 rounded cursor-not-allowed\" disabled>
                                                Demande déjà en cours
                                            </button>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                <p class=\"text-slate-600 dark:text-slate-300\">Aucun billet trouvé pour votre compte.</p>
            {% endif %}
        </div>
    </div>
    

    <script>
        // Fonction pour afficher ou masquer le champ de motif de remboursement au clic
        document.querySelectorAll('.toggle-motif').forEach(button => {
            button.addEventListener('click', function() {
                const billetId = this.getAttribute('data-id');
                const motifCell = document.getElementById('motif-' + billetId);

                // Toggle the visibility of the motif input
                if (motifCell.style.display === 'none' || motifCell.style.display === '') {
                    motifCell.style.display = 'table-cell';
                    this.textContent = 'Annuler la demande';
                } else {
                    motifCell.style.display = 'none';
                    this.textContent = 'Demander un remboursement';
                }
            });
        });

        // Validation de formulaire côté client
        function validateForm(billetId) {
            const motifInput = document.getElementById('motif-input-' + billetId);
            if (motifInput.value.trim() === \"\") {
                alert(\"Veuillez entrer un motif de remboursement.\");
                return false;
            }
            return true;
        }
    </script>

{% endblock %}
", "remboursement_billet/remboursement_billet.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\remboursement_billet\\remboursement_billet.html.twig");
    }
}
