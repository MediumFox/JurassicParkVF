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

/* client/reservation/formBillet.html.twig */
class __TwigTemplate_0207edeb296eef063f7c6a3f809905a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/formBillet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/formBillet.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "w-[80%] mb-10"]]);
        yield "
<div class=\"w-full bors\" id=\"displayBillet\">
    <input type='hidden' name=\"prixBillets\" value=\"0\" id=\"prixBillets\"/>
    <div class=\"mb-5 w-full\">
        <h1 class=\"text-2xl font-bold text-bleuLune mb-1\">Réservation de vos billets</h1>
        <span class=\"block h-[2px] w-full bg-bleuLune\"></span>
    </div>
    <div class=\"w-full\">
        <div class=\"flex justify-between items-end w-[80%]\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "debutBillet", [], "any", false, false, false, 10), 'row', ["attr" => ["value" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "debutBillet", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "debutBillet", [], "any", false, false, false, 10), "")) : (""))]]);
        yield "
            <span>-</span>
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "finBillet", [], "any", false, false, false, 12), 'row', ["attr" => ["value" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "finBillet", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "finBillet", [], "any", false, false, false, 12), "")) : (""))]]);
        yield "
        </div>

        <div class=\"w-[80%] mt-5\" id=\"reserverBillet\">
            <div>
                <div class=\"flex flex-row justify-between items-center mb-1\">
                    <h2 class=\"text-lg font-bold text-bleuLune mb-1\">Nombre de personnes</h2>
                    <button id='btnAddPersonne' type=\"button\" class=\" py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">Ajouter une personne</button>
                </div>
                <span class=\"block h-[2px] bg-bleuLune\"></span>
            </div>
        </div>
        ";
        // line 24
        if (((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "prenoms", [], "any", true, true, false, 24))) {
            // line 25
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "prenoms", [], "any", false, false, false, 25)) - 1)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 26
                yield "                <div class=\"flex justify-between w-[80%] gap-4 mt-3\" id=\"personne_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">
                    <div class=\"flex gap-1.5\">
                        <div class=\"flex flex-col gap-2 mb-4\">
                            <label for=\"prenom_";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" class=\"text-bleuLune font-semibold\">Prénom</label>
                            <input type=\"text\" name=\"prenom[]\" id=\"prenom_";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\"
                                class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\"
                                value=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "prenoms", [], "any", false, false, false, 32), $context["i"], [], "array", false, false, false, 32), "html", null, true);
                yield "\"
                                required autofocus>
                        </div>
                        <div class=\"flex flex-col gap-2 mb-4\">
                            <label for=\"nom_";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" class=\"text-bleuLune font-semibold\">Nom</label>
                            <input type=\"text\" name=\"nom[]\" id=\"nom_";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\"
                                class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\"
                                value=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "noms", [], "any", false, false, false, 39), $context["i"], [], "array", false, false, false, 39), "html", null, true);
                yield "\"
                                required autofocus>
                        </div>
                    </div>
                    <div class=\"flex items-center gap-10 justify-between\">
                        <select name=\"fBillet[]\" class=\"select-billet border-bleuLune rounded border p-2\">
                            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formatsBillet"]) || array_key_exists("formatsBillet", $context) ? $context["formatsBillet"] : (function () { throw new RuntimeError('Variable "formatsBillet" does not exist.', 45, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["billet"]) {
                    // line 46
                    yield "                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 46), "html", null, true);
                    yield "\"
                                    data-price=\"";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "prixBillet", [], "any", false, false, false, 47), "html", null, true);
                    yield "\"
                                    ";
                    // line 48
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 48) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "billets", [], "any", false, false, false, 48), $context["i"], [], "array", false, false, false, 48))) {
                        yield "selected";
                    }
                    yield ">
                                    ";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "libelleBillet", [], "any", false, false, false, 49), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "prixBillet", [], "any", false, false, false, 49), "html", null, true);
                    yield " €
                                </option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['billet'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "                        </select>
                        <button type=\"button\" class=\"rounded bg-red-700 p-1 hover:cursor-pointer delete-btn-personne\" data-target=\"personne_";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">
                            ";
                // line 54
                yield Twig\Extension\CoreExtension::include($this->env, $context, "svg/delete-svg.html.twig");
                yield "
                        </button>
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
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "        ";
        }
        // line 60
        yield "        <span class=\"block h-[2px] w-[80%] bg-bleuLune mt-5\"></span>
        <div class=\"w-[80%]\">
            <button id=\"btnValidateBillet\" disabled type=\"submit\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Etape suivante
            </button>
        </div>
    </div>
</div>


<script>

    document.addEventListener(\"DOMContentLoaded\", function () {
        const addButton = document.getElementById(\"btnAddPersonne\");
        const reserverBilletDiv = document.getElementById(\"reserverBillet\");
        const validateButton = document.getElementById(\"btnValidateBillet\");

        const debutBillet = document.getElementById(\"reserver_billet_debutBillet\");
        const finBillet = document.getElementById(\"reserver_billet_finBillet\");

        const totalPriceElementB = document.createElement(\"div\"); 
        totalPriceElementB.classList.add(\"text-xl\", \"font-bold\", \"mt-5\");
        reserverBilletDiv.appendChild(totalPriceElementB);

        debutBillet.addEventListener('change', function(event){
            finBillet.min = event.target.value;
            if (finBillet.value && finBillet.value < selectedDate) {
                finBillet.value = '';
            }
        });

        function updateTotalPrice() {
            let totalPrice = 0;
            document.querySelectorAll(\".select-billet\").forEach(select => {
                const selectedOption = select.options[select.selectedIndex];
                if (!selectedOption) return; // sécurise contre null/undefined

                const price = parseFloat(selectedOption.getAttribute(\"data-price\")) || 0;
                totalPrice += price;
                document.getElementById('prixBillets').value = totalPrice;
            });
            totalPriceElementB.innerText = `Prix total : \${totalPrice.toFixed(2)} €`;
        }

        function updateDateLimits() {
            if (debutBillet.value) {
                dateReservation.min = debutBillet.value + \"T00:00\"; // Ajout d'une heure minimale
            }
            if (finBillet.value) {
                dateReservation.max = finBillet.value + \"T23:59\"; // Ajout d'une heure maximale
            }
        }

        let addPersonne = 0;
        validateButton.style.opacity = 0.5;
        addButton.addEventListener(\"click\", function () {
            const newFields = document.createElement(\"div\");
            newFields.classList.add(\"flex\", \"justify-between\", \"gap-4\", \"mt-3\");

            const uniqueId = \"personne_\" + Date.now();
            newFields.id = uniqueId;
            addPersonne +=1;
            validateButton.disabled = false;
            validateButton.style.opacity = 1;

            newFields.innerHTML = `
                <div class=\"flex gap-1.5\">
                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"prenom\" class=\"text-bleuLune font-semibold\">Prénom</label>
                        <input type=\"text\" name=\"prenom[]\" id=\"prenom\" 
                               class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                                required autofocus>
                    </div>
                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"nom\" class=\"text-bleuLune font-semibold\">Nom</label>
                        <input type=\"text\" name=\"nom[]\" id=\"nom\" 
                               class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                                required autofocus>
                    </div>
                </div>
                <div class=\"flex items-center gap-10 justify-between\">
                    <select name=\"fBillet[]\" class=\"select-billet border-bleuLune rounded border p-2\">
                        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formatsBillet"]) || array_key_exists("formatsBillet", $context) ? $context["formatsBillet"] : (function () { throw new RuntimeError('Variable "formatsBillet" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["billet"]) {
            // line 143
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "\" data-price=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "prixBillet", [], "any", false, false, false, 143), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "libelleBillet", [], "any", false, false, false, 143), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["billet"], "prixBillet", [], "any", false, false, false, 143), "html", null, true);
            yield " €</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['billet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "                    </select>
                    <button type=\"button\" class=\"rounded bg-red-700 p-1 hover:cursor-pointer delete-btn-personne\" data-target=\"\${uniqueId}\">
                        ";
        // line 147
        yield Twig\Extension\CoreExtension::include($this->env, $context, "svg/delete-svg.html.twig");
        yield "
                    </button>
                </div>
            `;

            reserverBilletDiv.appendChild(newFields);
            newFields.querySelector(\".select-billet\").addEventListener(\"change\", updateTotalPrice);
            updateTotalPrice();
        });


        document.addEventListener(\"click\", function (event) {
            if (event.target.closest(\".delete-btn-personne\")) {
                const targetId = event.target.closest(\".delete-btn-personne\").getAttribute(\"data-target\");
                document.getElementById(targetId)?.remove();
                updateTotalPrice();
                addPersonne -=1;
                if(addPersonne <=0){
                    validateButton.disabled = true;
                    validateButton.style.opacity = 0.5;
                }
            }
        });

        document.addEventListener(\"change\", function (event) {
            if (event.target.classList.contains(\"select-billet\")) {
                updateTotalPrice();
            }
        });

        validateButton.addEventListener(\"click\", function () {
            let isValid = true;
            document.querySelectorAll(\"#reserverBillet input, #reserverBillet select\").forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add(\"border-red-500\");
                } else {
                    input.classList.remove(\"border-red-500\");
                }
            });

            if (!debutBillet || debutBillet.value === \"\") {
                isValid = false;
                debutBillet.classList.add(\"border-red-500\");
            }

            if (!finBillet || finBillet.value === \"\") {
                isValid = false;
                finBillet.classList.add(\"border-red-500\");
            }
        });
});
</script>
";
        // line 200
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), 'form_end');
        yield "



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
        return "client/reservation/formBillet.html.twig";
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
        return array (  363 => 200,  307 => 147,  303 => 145,  288 => 143,  284 => 142,  200 => 60,  197 => 59,  178 => 54,  174 => 53,  171 => 52,  160 => 49,  154 => 48,  150 => 47,  145 => 46,  141 => 45,  132 => 39,  127 => 37,  123 => 36,  116 => 32,  111 => 30,  107 => 29,  100 => 26,  82 => 25,  80 => 24,  65 => 12,  60 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr':{class:'w-[80%] mb-10'}}) }}
<div class=\"w-full bors\" id=\"displayBillet\">
    <input type='hidden' name=\"prixBillets\" value=\"0\" id=\"prixBillets\"/>
    <div class=\"mb-5 w-full\">
        <h1 class=\"text-2xl font-bold text-bleuLune mb-1\">Réservation de vos billets</h1>
        <span class=\"block h-[2px] w-full bg-bleuLune\"></span>
    </div>
    <div class=\"w-full\">
        <div class=\"flex justify-between items-end w-[80%]\">
            {{ form_row(form.debutBillet, {'attr': {'value': data.debutBillet|default('')}}) }}
            <span>-</span>
            {{ form_row(form.finBillet, {'attr': {'value': data.finBillet|default('')}}) }}
        </div>

        <div class=\"w-[80%] mt-5\" id=\"reserverBillet\">
            <div>
                <div class=\"flex flex-row justify-between items-center mb-1\">
                    <h2 class=\"text-lg font-bold text-bleuLune mb-1\">Nombre de personnes</h2>
                    <button id='btnAddPersonne' type=\"button\" class=\" py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">Ajouter une personne</button>
                </div>
                <span class=\"block h-[2px] bg-bleuLune\"></span>
            </div>
        </div>
        {% if data and data.prenoms is defined %}
            {% for i in 0..(data.prenoms|length - 1) %}
                <div class=\"flex justify-between w-[80%] gap-4 mt-3\" id=\"personne_{{ i }}\">
                    <div class=\"flex gap-1.5\">
                        <div class=\"flex flex-col gap-2 mb-4\">
                            <label for=\"prenom_{{ i }}\" class=\"text-bleuLune font-semibold\">Prénom</label>
                            <input type=\"text\" name=\"prenom[]\" id=\"prenom_{{ i }}\"
                                class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\"
                                value=\"{{ data.prenoms[i] }}\"
                                required autofocus>
                        </div>
                        <div class=\"flex flex-col gap-2 mb-4\">
                            <label for=\"nom_{{ i }}\" class=\"text-bleuLune font-semibold\">Nom</label>
                            <input type=\"text\" name=\"nom[]\" id=\"nom_{{ i }}\"
                                class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\"
                                value=\"{{ data.noms[i] }}\"
                                required autofocus>
                        </div>
                    </div>
                    <div class=\"flex items-center gap-10 justify-between\">
                        <select name=\"fBillet[]\" class=\"select-billet border-bleuLune rounded border p-2\">
                            {% for billet in formatsBillet %}
                                <option value=\"{{ billet.id }}\"
                                    data-price=\"{{ billet.prixBillet }}\"
                                    {% if billet.id == data.billets[i] %}selected{% endif %}>
                                    {{ billet.libelleBillet }} - {{ billet.prixBillet }} €
                                </option>
                            {% endfor %}
                        </select>
                        <button type=\"button\" class=\"rounded bg-red-700 p-1 hover:cursor-pointer delete-btn-personne\" data-target=\"personne_{{ i }}\">
                            {{ include('svg/delete-svg.html.twig') }}
                        </button>
                    </div>
                </div>
            {% endfor %}
        {% endif %}
        <span class=\"block h-[2px] w-[80%] bg-bleuLune mt-5\"></span>
        <div class=\"w-[80%]\">
            <button id=\"btnValidateBillet\" disabled type=\"submit\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Etape suivante
            </button>
        </div>
    </div>
</div>


<script>

    document.addEventListener(\"DOMContentLoaded\", function () {
        const addButton = document.getElementById(\"btnAddPersonne\");
        const reserverBilletDiv = document.getElementById(\"reserverBillet\");
        const validateButton = document.getElementById(\"btnValidateBillet\");

        const debutBillet = document.getElementById(\"reserver_billet_debutBillet\");
        const finBillet = document.getElementById(\"reserver_billet_finBillet\");

        const totalPriceElementB = document.createElement(\"div\"); 
        totalPriceElementB.classList.add(\"text-xl\", \"font-bold\", \"mt-5\");
        reserverBilletDiv.appendChild(totalPriceElementB);

        debutBillet.addEventListener('change', function(event){
            finBillet.min = event.target.value;
            if (finBillet.value && finBillet.value < selectedDate) {
                finBillet.value = '';
            }
        });

        function updateTotalPrice() {
            let totalPrice = 0;
            document.querySelectorAll(\".select-billet\").forEach(select => {
                const selectedOption = select.options[select.selectedIndex];
                if (!selectedOption) return; // sécurise contre null/undefined

                const price = parseFloat(selectedOption.getAttribute(\"data-price\")) || 0;
                totalPrice += price;
                document.getElementById('prixBillets').value = totalPrice;
            });
            totalPriceElementB.innerText = `Prix total : \${totalPrice.toFixed(2)} €`;
        }

        function updateDateLimits() {
            if (debutBillet.value) {
                dateReservation.min = debutBillet.value + \"T00:00\"; // Ajout d'une heure minimale
            }
            if (finBillet.value) {
                dateReservation.max = finBillet.value + \"T23:59\"; // Ajout d'une heure maximale
            }
        }

        let addPersonne = 0;
        validateButton.style.opacity = 0.5;
        addButton.addEventListener(\"click\", function () {
            const newFields = document.createElement(\"div\");
            newFields.classList.add(\"flex\", \"justify-between\", \"gap-4\", \"mt-3\");

            const uniqueId = \"personne_\" + Date.now();
            newFields.id = uniqueId;
            addPersonne +=1;
            validateButton.disabled = false;
            validateButton.style.opacity = 1;

            newFields.innerHTML = `
                <div class=\"flex gap-1.5\">
                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"prenom\" class=\"text-bleuLune font-semibold\">Prénom</label>
                        <input type=\"text\" name=\"prenom[]\" id=\"prenom\" 
                               class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                                required autofocus>
                    </div>
                    <div class=\"flex flex-col gap-2 mb-4\">
                        <label for=\"nom\" class=\"text-bleuLune font-semibold\">Nom</label>
                        <input type=\"text\" name=\"nom[]\" id=\"nom\" 
                               class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\" 
                                required autofocus>
                    </div>
                </div>
                <div class=\"flex items-center gap-10 justify-between\">
                    <select name=\"fBillet[]\" class=\"select-billet border-bleuLune rounded border p-2\">
                        {% for billet in formatsBillet %}
                            <option value=\"{{ billet.id }}\" data-price=\"{{ billet.prixBillet }}\">{{ billet.libelleBillet }} - {{ billet.prixBillet }} €</option>
                        {% endfor %}
                    </select>
                    <button type=\"button\" class=\"rounded bg-red-700 p-1 hover:cursor-pointer delete-btn-personne\" data-target=\"\${uniqueId}\">
                        {{ include('svg/delete-svg.html.twig') }}
                    </button>
                </div>
            `;

            reserverBilletDiv.appendChild(newFields);
            newFields.querySelector(\".select-billet\").addEventListener(\"change\", updateTotalPrice);
            updateTotalPrice();
        });


        document.addEventListener(\"click\", function (event) {
            if (event.target.closest(\".delete-btn-personne\")) {
                const targetId = event.target.closest(\".delete-btn-personne\").getAttribute(\"data-target\");
                document.getElementById(targetId)?.remove();
                updateTotalPrice();
                addPersonne -=1;
                if(addPersonne <=0){
                    validateButton.disabled = true;
                    validateButton.style.opacity = 0.5;
                }
            }
        });

        document.addEventListener(\"change\", function (event) {
            if (event.target.classList.contains(\"select-billet\")) {
                updateTotalPrice();
            }
        });

        validateButton.addEventListener(\"click\", function () {
            let isValid = true;
            document.querySelectorAll(\"#reserverBillet input, #reserverBillet select\").forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add(\"border-red-500\");
                } else {
                    input.classList.remove(\"border-red-500\");
                }
            });

            if (!debutBillet || debutBillet.value === \"\") {
                isValid = false;
                debutBillet.classList.add(\"border-red-500\");
            }

            if (!finBillet || finBillet.value === \"\") {
                isValid = false;
                finBillet.classList.add(\"border-red-500\");
            }
        });
});
</script>
{{ form_end(form) }}



", "client/reservation/formBillet.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\reservation\\formBillet.html.twig");
    }
}
