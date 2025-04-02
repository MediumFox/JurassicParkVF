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

/* client/reservation/formRestaurant.html.twig */
class __TwigTemplate_d17c195375a9bf6dffa20e6d62941fe8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/formRestaurant.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/formRestaurant.html.twig"));

        // line 1
        yield "<form class=\"w-[80%] mb-10\" method=\"POST\">

    <div class=\"mb-5\">
        <h1 class=\"text-2xl font-bold text-slate-900 mb-1\">Réservation de votre restaurant</h1>
        <span class=\"block h-[2px] w-full bg-slate-900\"></span>
    </div>
    <div>
        <span>Voulez-vous réserver un restaurant ?</span>
        <div>
            <span>Oui</span>
            <input type=\"radio\" id=\"choixOui\" name=\"choixRes\" value=\"oui\"
            ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "choixRes", [], "any", true, true, false, 12) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "choixRes", [], "any", false, false, false, 12) == "oui"))) {
            yield "checked";
        }
        yield " />
        </div>
        <div>
            <span>Non</span>
            <input type=\"radio\" id=\"choixNon\" name=\"choixRes\" value=\"non\"
            ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "choixRes", [], "any", true, true, false, 17) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "choixRes", [], "any", false, false, false, 17) == "non"))) {
            yield "checked";
        }
        yield " />
        </div>
    </div>
    <div id=\"displayChoixRestaurant\" class=\"hidden\">
        <div class=\" w-[80%] mt-5 flex flex-col\" id=\"reserverRestaurant\">
            <div class=\"flex flex-col gap-2 mb-4\">
                <label for='dateReservation' class=\"text-bleuLune font-semibold\">Date de réservation</label>
                <input type='datetime-local' required id='dateReservation' name='dateReservation'
                    class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\"
                    value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "dateReservation", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "dateReservation", [], "any", false, false, false, 26), null)) : (null)), "html", null, true);
        yield "\" />
            </div>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 29
            yield "                ";
            $context["horairesParJour"] = [];
            // line 30
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "lesHoraires", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 31
                yield "                    ";
                $context["jour"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "jour", [], "any", false, false, false, 31), "libelleJour", [], "any", false, false, false, 31);
                // line 32
                yield "                    ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["horairesParJour"] ?? null), (isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 32, $this->source); })()), [], "array", true, true, false, 32)) {
                    // line 33
                    yield "                        ";
                    $context["horairesParJour"] = Twig\Extension\CoreExtension::merge((isset($context["horairesParJour"]) || array_key_exists("horairesParJour", $context) ? $context["horairesParJour"] : (function () { throw new RuntimeError('Variable "horairesParJour" does not exist.', 33, $this->source); })()), [ (string)(isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 33, $this->source); })()) => [$context["h"]]]);
                    // line 34
                    yield "                    ";
                } else {
                    // line 35
                    yield "                        ";
                    $context["horairesParJour"] = Twig\Extension\CoreExtension::merge((isset($context["horairesParJour"]) || array_key_exists("horairesParJour", $context) ? $context["horairesParJour"] : (function () { throw new RuntimeError('Variable "horairesParJour" does not exist.', 35, $this->source); })()), [ (string)(isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 35, $this->source); })()) => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["horairesParJour"]) || array_key_exists("horairesParJour", $context) ? $context["horairesParJour"] : (function () { throw new RuntimeError('Variable "horairesParJour" does not exist.', 35, $this->source); })()), (isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 35, $this->source); })()), [], "array", false, false, false, 35), [$context["h"]])]);
                    // line 36
                    yield "                    ";
                }
                // line 37
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                <div class=\"w-full cursor-pointer my-2 transition duration-500 card-restaurant border border-bleuLune p-3 px-5 rounded transform translate-y-0 hover:translate-x-[20px]\" onClick='selectRestaurant(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield ")'>
                    <div class=\"flex gap-4 w-full\">
                        <div>
                            <img src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "imageRestaurant", [], "any", false, false, false, 41)), "html", null, true);
            yield "\" alt=\"img ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "libelleRestaurant", [], "any", false, false, false, 41), "html", null, true);
            yield "\" class=\"h-[140px] w-[230px] rounded\"/>
                        </div>
                        <div class=\"flex flex-col  w-full \">
                            <div class=\"flex justify-between mb-2\">
                                <span class=\"font-bold text-lg text-slate-900 underline\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "libelleRestaurant", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                                <span class=\"text-bleuGlace\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "biome", [], "any", false, false, false, 46), "libelleBiome", [], "any", false, false, false, 46), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"flex gap-7\">
                                ";
            // line 49
            if (CoreExtension::getAttribute($this->env, $this->source, $context["r"], "lesHoraires", [], "any", false, false, false, 49)) {
                // line 50
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["horairesParJour"]) || array_key_exists("horairesParJour", $context) ? $context["horairesParJour"] : (function () { throw new RuntimeError('Variable "horairesParJour" does not exist.', 50, $this->source); })()));
                foreach ($context['_seq'] as $context["jour"] => $context["horaires"]) {
                    // line 51
                    yield "                                        <div class=\"mb-2\">
                                            <h3 class=\" font-bold text-bleuLune\">";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["jour"], "html", null, true);
                    yield "</h3>
                                            ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["horaires"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                        // line 54
                        yield "                                                <div>
                                                    <span class=\"text-xs italic\">";
                        // line 55
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "horaire", [], "any", false, false, false, 55), "ouverture", [], "any", false, false, false, 55), "H:i"), "html", null, true);
                        yield "</span>
                                                    <span class=\"text-xs italic\">- ";
                        // line 56
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "horaire", [], "any", false, false, false, 56), "fermeture", [], "any", false, false, false, 56), "H:i"), "html", null, true);
                        yield "</span>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    yield "                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['jour'], $context['horaires'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                yield "                                ";
            }
            // line 62
            yield "                            </div>
                        </div>
                        <div class=\"flex items-center flex-col justify-center\">
                            <input type=\"radio\"
                                id=\"choixRestaurant_";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\"
                                name=\"choixRestaurant\"
                                value=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\"
                                ";
            // line 69
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "choixRestaurant", [], "any", true, true, false, 69) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 69, $this->source); })()), "choixRestaurant", [], "any", false, false, false, 69) == CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 69)))) {
                yield "checked";
            }
            yield " />
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "        </div>

        <div class=\"w-[80%] flex justify-between mb-4\">
            <button type=\"button\" id=\"retourEtapeHotel\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Etape précédente
            </button>
            <button type=\"submit\" id=\"submitHotelSvt\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Terminer la commande
            </button>
        </div>
    </div>
</form>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const retourEtapeHotel = document.getElementById(\"retourEtapeHotel\");

    window.selectRestaurant = function (id) {
        const radio = document.querySelector(`input[name=\"choixRestaurant\"][value=\"\${id}\"]`);
        if (radio) {
            radio.checked = true;
        }

        document.querySelectorAll('.card-restaurant').forEach(card => {
            card.classList.remove('border-2', 'border-bleuClair', 'shadow-md');
        });

        const selectedCard = radio.closest('.card-restaurant');
        if (selectedCard) {
            selectedCard.classList.add('border-2', 'border-bleuClair', 'shadow-md');
        }
    };

    retourEtapeHotel.addEventListener(\"click\", function () {
        window.location.href = \"/client/reserver-aventure/hotel\";
    });

    document.querySelectorAll('input[name=\"choixRes\"]').forEach((radio) => {
        radio.addEventListener(\"change\", function () {
            const displayChoixRestaurant = document.getElementById(\"displayChoixRestaurant\");
            const reserverRestaurant = document.getElementById(\"reserverRestaurant\");
            const dateReservation = document.getElementById(\"dateReservation\");
            const choixRestaurant = document.getElementById(\"choixRestaurant\");

            displayChoixRestaurant.style.display = this.value !== \"\" ? \"block\" : \"none\";
            reserverRestaurant.style.display = this.value === \"oui\" ? \"block\" : \"none\";
            if (dateReservation) dateReservation.required = this.value === \"oui\";
            if (choixRestaurant) choixRestaurant.required = this.value === \"oui\";
        });
    });

    const choixResOui = document.getElementById(\"choixOui\");
    const displayChoixRestaurant = document.getElementById(\"displayChoixRestaurant\");
    const reserverRestaurant = document.getElementById(\"reserverRestaurant\");

    if (choixResOui && choixResOui.checked) {
        displayChoixRestaurant.style.display = \"block\";
        reserverRestaurant.style.display = \"block\";
    }
});
</script>


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
        return "client/reservation/formRestaurant.html.twig";
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
        return array (  224 => 74,  211 => 69,  207 => 68,  202 => 66,  196 => 62,  193 => 61,  186 => 59,  177 => 56,  173 => 55,  170 => 54,  166 => 53,  162 => 52,  159 => 51,  154 => 50,  152 => 49,  146 => 46,  142 => 45,  133 => 41,  126 => 38,  120 => 37,  117 => 36,  114 => 35,  111 => 34,  108 => 33,  105 => 32,  102 => 31,  97 => 30,  94 => 29,  90 => 28,  85 => 26,  71 => 17,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form class=\"w-[80%] mb-10\" method=\"POST\">

    <div class=\"mb-5\">
        <h1 class=\"text-2xl font-bold text-slate-900 mb-1\">Réservation de votre restaurant</h1>
        <span class=\"block h-[2px] w-full bg-slate-900\"></span>
    </div>
    <div>
        <span>Voulez-vous réserver un restaurant ?</span>
        <div>
            <span>Oui</span>
            <input type=\"radio\" id=\"choixOui\" name=\"choixRes\" value=\"oui\"
            {% if data.choixRes is defined and data.choixRes == 'oui' %}checked{% endif %} />
        </div>
        <div>
            <span>Non</span>
            <input type=\"radio\" id=\"choixNon\" name=\"choixRes\" value=\"non\"
            {% if data.choixRes is defined and data.choixRes == 'non' %}checked{% endif %} />
        </div>
    </div>
    <div id=\"displayChoixRestaurant\" class=\"hidden\">
        <div class=\" w-[80%] mt-5 flex flex-col\" id=\"reserverRestaurant\">
            <div class=\"flex flex-col gap-2 mb-4\">
                <label for='dateReservation' class=\"text-bleuLune font-semibold\">Date de réservation</label>
                <input type='datetime-local' required id='dateReservation' name='dateReservation'
                    class=\"border border-bleuLune p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair\"
                    value=\"{{ data.dateReservation|default(null) }}\" />
            </div>
            {% for r in restaurants %}
                {% set horairesParJour = {} %}
                {% for h in r.lesHoraires %}
                    {% set jour = h.jour.libelleJour %}
                    {% if horairesParJour[jour] is not defined %}
                        {% set horairesParJour = horairesParJour | merge({ (jour): [h] }) %}
                    {% else %}
                        {% set horairesParJour = horairesParJour | merge({ (jour): horairesParJour[jour] | merge([h]) }) %}
                    {% endif %}
                {% endfor %}
                <div class=\"w-full cursor-pointer my-2 transition duration-500 card-restaurant border border-bleuLune p-3 px-5 rounded transform translate-y-0 hover:translate-x-[20px]\" onClick='selectRestaurant({{r.id}})'>
                    <div class=\"flex gap-4 w-full\">
                        <div>
                            <img src=\"{{asset(r.imageRestaurant)}}\" alt=\"img {{r.libelleRestaurant}}\" class=\"h-[140px] w-[230px] rounded\"/>
                        </div>
                        <div class=\"flex flex-col  w-full \">
                            <div class=\"flex justify-between mb-2\">
                                <span class=\"font-bold text-lg text-slate-900 underline\">{{r.libelleRestaurant}}</span>
                                <span class=\"text-bleuGlace\">{{r.biome.libelleBiome}}</span>
                            </div>
                            <div class=\"flex gap-7\">
                                {% if r.lesHoraires %}
                                    {% for jour, horaires in horairesParJour %}
                                        <div class=\"mb-2\">
                                            <h3 class=\" font-bold text-bleuLune\">{{ jour }}</h3>
                                            {% for h in horaires %}
                                                <div>
                                                    <span class=\"text-xs italic\">{{ h.horaire.ouverture|date('H:i') }}</span>
                                                    <span class=\"text-xs italic\">- {{ h.horaire.fermeture|date('H:i') }}</span>
                                                </div>
                                            {% endfor %}
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"flex items-center flex-col justify-center\">
                            <input type=\"radio\"
                                id=\"choixRestaurant_{{ r.id }}\"
                                name=\"choixRestaurant\"
                                value=\"{{ r.id }}\"
                                {% if data.choixRestaurant is defined and data.choixRestaurant == r.id %}checked{% endif %} />
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"w-[80%] flex justify-between mb-4\">
            <button type=\"button\" id=\"retourEtapeHotel\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Etape précédente
            </button>
            <button type=\"submit\" id=\"submitHotelSvt\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Terminer la commande
            </button>
        </div>
    </div>
</form>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const retourEtapeHotel = document.getElementById(\"retourEtapeHotel\");

    window.selectRestaurant = function (id) {
        const radio = document.querySelector(`input[name=\"choixRestaurant\"][value=\"\${id}\"]`);
        if (radio) {
            radio.checked = true;
        }

        document.querySelectorAll('.card-restaurant').forEach(card => {
            card.classList.remove('border-2', 'border-bleuClair', 'shadow-md');
        });

        const selectedCard = radio.closest('.card-restaurant');
        if (selectedCard) {
            selectedCard.classList.add('border-2', 'border-bleuClair', 'shadow-md');
        }
    };

    retourEtapeHotel.addEventListener(\"click\", function () {
        window.location.href = \"/client/reserver-aventure/hotel\";
    });

    document.querySelectorAll('input[name=\"choixRes\"]').forEach((radio) => {
        radio.addEventListener(\"change\", function () {
            const displayChoixRestaurant = document.getElementById(\"displayChoixRestaurant\");
            const reserverRestaurant = document.getElementById(\"reserverRestaurant\");
            const dateReservation = document.getElementById(\"dateReservation\");
            const choixRestaurant = document.getElementById(\"choixRestaurant\");

            displayChoixRestaurant.style.display = this.value !== \"\" ? \"block\" : \"none\";
            reserverRestaurant.style.display = this.value === \"oui\" ? \"block\" : \"none\";
            if (dateReservation) dateReservation.required = this.value === \"oui\";
            if (choixRestaurant) choixRestaurant.required = this.value === \"oui\";
        });
    });

    const choixResOui = document.getElementById(\"choixOui\");
    const displayChoixRestaurant = document.getElementById(\"displayChoixRestaurant\");
    const reserverRestaurant = document.getElementById(\"reserverRestaurant\");

    if (choixResOui && choixResOui.checked) {
        displayChoixRestaurant.style.display = \"block\";
        reserverRestaurant.style.display = \"block\";
    }
});
</script>


", "client/reservation/formRestaurant.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\reservation\\formRestaurant.html.twig");
    }
}
