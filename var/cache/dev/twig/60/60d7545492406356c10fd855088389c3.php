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

/* client/reservation/formHotel.html.twig */
class __TwigTemplate_8c06087d0880523840cedad29776ed81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/formHotel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/formHotel.html.twig"));

        // line 1
        yield "<form class=\"w-[80%] mb-10\" method=\"post\">
    <input type=\"hidden\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prixBillet"]) || array_key_exists("prixBillet", $context) ? $context["prixBillet"] : (function () { throw new RuntimeError('Variable "prixBillet" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\" id=\"prix-billet\">
    <div class=\"w-full bors\" id=\"displayBillet\">
        <div class=\"mb-5 w-full\">
            <h1 class=\"text-2xl font-bold text-bleuLune mb-1\">Réservation de votre hôtel</h1>
            <span class=\"block h-[2px] w-full bg-bleuLune\"></span>
        </div>
        <div class=\" w-[80%] mt-5 flex flex-col gap-3\" id=\"reserverHotel\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 10
            yield "                <div class=\"w-full cursor-pointer transition duration-500 card-hotel border border-bleuLune p-3 px-5 rounded transform translate-y-0 hover:translate-x-[20px]\" onClick='selectHotel(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 10), "html", null, true);
            yield ")'>
                    <div class=\"flex gap-4 w-full\">
                        <div class=\"flex justify-center items-center\">
                            <img src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "imageHotel", [], "any", false, false, false, 13)), "html", null, true);
            yield "\" alt=\"img ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "libelleHotel", [], "any", false, false, false, 13), "html", null, true);
            yield "\" class=\"h-[140px] w-[250px] rounded\"/>
                        </div>
                        <div class=\"flex flex-col  w-full \">
                            <div class=\"flex justify-between mb-2\">
                                <span class=\"font-bold text-lg text-bleuLune underline\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "libelleHotel", [], "any", false, false, false, 17), "html", null, true);
            yield "</span>
                                <span class=\"text-bleuGlace\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "biome", [], "any", false, false, false, 18), "libelleBiome", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
                            </div>
                            <span class=\"italic text-bleuGlace\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "descriptionHotel", [], "any", false, false, false, 20), "html", null, true);
            yield "<span>
                        </div>
                        <div class=\"flex items-center flex-col justify-center\">
                            <input type=\"radio\"
                                id=\"choixHotel_";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "\"
                                name=\"choixHotel\"
                                value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "\"
                                ";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "hotel_id", [], "any", true, true, false, 27) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "hotel_id", [], "any", false, false, false, 27) == CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 27)))) {
                yield "checked";
            }
            // line 28
            yield "                            />
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </div>
        <span class=\"block h-[2px] w-[80%] bg-slate-900 mt-5\"></span>
        <div class=\"mb-5 mt-5 w-[80%]\" id=\"lesChambres\">
            <div class=\"flex justify-between\">
                <h1 class=\"text-2xl font-bold text-slate-900 mb-1\">Vos chambres</h1>
                <button id='btnAddChambre' type=\"button\" class=\" py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">Ajouter une chambre</button>
            </div>
            ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "fChambres", [], "any", true, true, false, 40)) {
            // line 41
            yield "                ";
            $context["formats"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "fChambres", [], "any", false, false, false, 41))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "fChambres", [], "any", false, false, false, 41)) : ([CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "fChambres", [], "any", false, false, false, 41)]));
            // line 42
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formats"]) || array_key_exists("formats", $context) ? $context["formats"] : (function () { throw new RuntimeError('Variable "formats" does not exist.', 42, $this->source); })()));
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
            foreach ($context['_seq'] as $context["i"] => $context["idFormat"]) {
                // line 43
                yield "                    <div class=\"flex justify-between gap-4 mt-3\" id=\"chambre_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">
                        <span>Chambre</span>
                        <div class=\"flex items-center gap-10 justify-between\">
                            <select name=\"fChambre[]\" class=\"select-format rounded border p-2\">
                                ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formatChambre"]) || array_key_exists("formatChambre", $context) ? $context["formatChambre"] : (function () { throw new RuntimeError('Variable "formatChambre" does not exist.', 47, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 48
                    yield "                                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 48), "html", null, true);
                    yield "\"
                                            data-price=\"";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "prixFormatChambre", [], "any", false, false, false, 49), "html", null, true);
                    yield "\"
                                            ";
                    // line 50
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 50) == $context["idFormat"])) {
                        yield "selected";
                    }
                    yield ">
                                        ";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "libelleFormatChambre", [], "any", false, false, false, 51), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "prixFormatChambre", [], "any", false, false, false, 51), "html", null, true);
                    yield " €
                                    </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['format'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "                            </select>
                            <button type=\"button\"
                                    class=\"rounded bg-red-700 p-1 hover:cursor-pointer delete-btn-chambre\"
                                    data-target=\"chambre_";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">
                                ";
                // line 58
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
            unset($context['_seq'], $context['i'], $context['idFormat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "            ";
        }
        // line 64
        yield "        </div>
        <div class=\"w-[80%] flex justify-between mb-4\">
            <button type=\"button\" id=\"retourEtapeBillet\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Etape précédente
            </button>
            <button type=\"submit\" disabled id=\"submitHotelSvt\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Etape suivante
            </button>
        </div>
    </div>
</form>

<script>document.addEventListener(\"DOMContentLoaded\", function () {
    window.selectHotel = function (id) {
        const radio = document.querySelector(`input[name=\"choixHotel\"][value=\"\${id}\"]`);
        if (radio) {
            radio.checked = true;
        }

        document.querySelectorAll('.card-hotel').forEach(card => {
            card.classList.remove('border-2', 'border-bleuClair', 'shadow-md');
        });

        const selectedCard = radio.closest('.card-hotel');
        if (selectedCard) {
            selectedCard.classList.add('border-2', 'border-bleuClair', 'shadow-md');
        }
    };

    const addButton = document.getElementById(\"btnAddPersonne\");
        const addChambre = document.getElementById(\"btnAddChambre\");
        const lesChambres = document.getElementById(\"lesChambres\");
        const retourEtapeBillet = document.getElementById(\"retourEtapeBillet\");
        const submitHotelSvt = document.getElementById(\"submitHotelSvt\");

        const totalPriceElementH = document.createElement(\"div\"); 
        totalPriceElementH.classList.add(\"text-xl\", \"font-bold\", \"mt-5\");
        lesChambres.appendChild(totalPriceElementH);

        function updateTotalPrice() {
            let totalPrice = parseFloat(document.getElementById('prix-billet').value) || 0;
            document.querySelectorAll(\".select-format\").forEach(select => {
                totalPrice += parseFloat(select.options[select.selectedIndex].dataset.price || 0);
            });
            totalPriceElementH.innerText = `Prix total de la réservation : \${totalPrice.toFixed(2)} €`;
        }

        submitHotelSvt.style.opacity = 0.5;
        let nbChambres = 0;
        addChambre.addEventListener(\"click\", function () {
            const newFields = document.createElement(\"div\");
            newFields.classList.add(\"flex\", \"justify-between\", \"gap-4\", \"mt-3\");
            nbChambres +=1;
            const uniqueId = \"chambre\" + Date.now();
            newFields.id = uniqueId;
            submitHotelSvt.disabled = false;
            submitHotelSvt.style.opacity = 1;
            newFields.innerHTML = `
                <span>Chambre</span>
                <div class=\"flex items-center gap-10 justify-between\">
                    <select name=\"fChambre[]\" class=\"select-format rounded border p-2\">
                        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formatChambre"]) || array_key_exists("formatChambre", $context) ? $context["formatChambre"] : (function () { throw new RuntimeError('Variable "formatChambre" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 126
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 126), "html", null, true);
            yield "\" data-price=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "prixFormatChambre", [], "any", false, false, false, 126), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "libelleFormatChambre", [], "any", false, false, false, 126), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "prixFormatChambre", [], "any", false, false, false, 126), "html", null, true);
            yield " €</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['format'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "                    </select>
                    <button type=\"button\" class=\"rounded bg-red-700 p-1 hover:cursor-pointer delete-btn-chambre\" data-target=\"\${uniqueId}\">
                        ";
        // line 130
        yield Twig\Extension\CoreExtension::include($this->env, $context, "svg/delete-svg.html.twig");
        yield "
                    </button>
                </div>
            `;

            lesChambres.appendChild(newFields);
            newFields.querySelector(\".select-format\").addEventListener(\"change\", updateTotalPrice);
            updateTotalPrice();
        });

        document.addEventListener(\"click\", function (event) {
            if (event.target.closest(\".delete-btn-chambre\")) {
                const targetId = event.target.closest(\".delete-btn-chambre\").getAttribute(\"data-target\");
                document.getElementById(targetId)?.remove();
                updateTotalPrice();
                addChambre -=1;
                if(addPersonne <=0){
                    validateButton.disabled = true;
                    validateButton.style.opacity = 0.5;
                }
            }
        });

        retourEtapeBillet.addEventListener(\"click\", function () {
            window.location.href = \"/client/reserver-aventure/billet\";
        });

        submitHotelSvt.addEventListener(\"click\", function () {
            let formIsValid = true;
            
            const hotelRadios = document.getElementsByName(\"choixHotel\");
            let hotelSelected = false;
            hotelRadios.forEach(radio => {
                if (radio.checked) {
                    hotelSelected = true;
                }
            });
   
            const chambreFields = document.querySelectorAll(\"#lesChambres input, #lesChambres select\");
            chambreFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add(\"border-red-500\");
                    formIsValid = false;
                } else {
                    field.classList.remove(\"border-red-500\");
                }
            });
        });
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
        return "client/reservation/formHotel.html.twig";
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
        return array (  307 => 130,  303 => 128,  288 => 126,  284 => 125,  221 => 64,  218 => 63,  199 => 58,  195 => 57,  190 => 54,  179 => 51,  173 => 50,  169 => 49,  164 => 48,  160 => 47,  152 => 43,  134 => 42,  131 => 41,  129 => 40,  120 => 33,  110 => 28,  106 => 27,  102 => 26,  97 => 24,  90 => 20,  85 => 18,  81 => 17,  72 => 13,  65 => 10,  61 => 9,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form class=\"w-[80%] mb-10\" method=\"post\">
    <input type=\"hidden\" value=\"{{prixBillet}}\" id=\"prix-billet\">
    <div class=\"w-full bors\" id=\"displayBillet\">
        <div class=\"mb-5 w-full\">
            <h1 class=\"text-2xl font-bold text-bleuLune mb-1\">Réservation de votre hôtel</h1>
            <span class=\"block h-[2px] w-full bg-bleuLune\"></span>
        </div>
        <div class=\" w-[80%] mt-5 flex flex-col gap-3\" id=\"reserverHotel\">
            {% for h in hotels %}
                <div class=\"w-full cursor-pointer transition duration-500 card-hotel border border-bleuLune p-3 px-5 rounded transform translate-y-0 hover:translate-x-[20px]\" onClick='selectHotel({{h.id}})'>
                    <div class=\"flex gap-4 w-full\">
                        <div class=\"flex justify-center items-center\">
                            <img src=\"{{ asset(h.imageHotel)}}\" alt=\"img {{h.libelleHotel}}\" class=\"h-[140px] w-[250px] rounded\"/>
                        </div>
                        <div class=\"flex flex-col  w-full \">
                            <div class=\"flex justify-between mb-2\">
                                <span class=\"font-bold text-lg text-bleuLune underline\">{{h.libelleHotel}}</span>
                                <span class=\"text-bleuGlace\">{{h.biome.libelleBiome}}</span>
                            </div>
                            <span class=\"italic text-bleuGlace\">{{h.descriptionHotel}}<span>
                        </div>
                        <div class=\"flex items-center flex-col justify-center\">
                            <input type=\"radio\"
                                id=\"choixHotel_{{ h.id }}\"
                                name=\"choixHotel\"
                                value=\"{{ h.id }}\"
                                {% if data.hotel_id is defined and data.hotel_id == h.id %}checked{% endif %}
                            />
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        <span class=\"block h-[2px] w-[80%] bg-slate-900 mt-5\"></span>
        <div class=\"mb-5 mt-5 w-[80%]\" id=\"lesChambres\">
            <div class=\"flex justify-between\">
                <h1 class=\"text-2xl font-bold text-slate-900 mb-1\">Vos chambres</h1>
                <button id='btnAddChambre' type=\"button\" class=\" py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">Ajouter une chambre</button>
            </div>
            {% if data.fChambres is defined %}
                {% set formats = data.fChambres is iterable ? data.fChambres : [data.fChambres] %}
                {% for i, idFormat in formats %}
                    <div class=\"flex justify-between gap-4 mt-3\" id=\"chambre_{{ i }}\">
                        <span>Chambre</span>
                        <div class=\"flex items-center gap-10 justify-between\">
                            <select name=\"fChambre[]\" class=\"select-format rounded border p-2\">
                                {% for format in formatChambre %}
                                    <option value=\"{{ format.id }}\"
                                            data-price=\"{{ format.prixFormatChambre }}\"
                                            {% if format.id == idFormat %}selected{% endif %}>
                                        {{ format.libelleFormatChambre }} - {{ format.prixFormatChambre }} €
                                    </option>
                                {% endfor %}
                            </select>
                            <button type=\"button\"
                                    class=\"rounded bg-red-700 p-1 hover:cursor-pointer delete-btn-chambre\"
                                    data-target=\"chambre_{{ i }}\">
                                {{ include('svg/delete-svg.html.twig') }}
                            </button>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
        <div class=\"w-[80%] flex justify-between mb-4\">
            <button type=\"button\" id=\"retourEtapeBillet\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Etape précédente
            </button>
            <button type=\"submit\" disabled id=\"submitHotelSvt\" class=\"mt-5 py-1 px-4 bg-slate-700 text-white rounded hover:bg-slate-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200\">
                Etape suivante
            </button>
        </div>
    </div>
</form>

<script>document.addEventListener(\"DOMContentLoaded\", function () {
    window.selectHotel = function (id) {
        const radio = document.querySelector(`input[name=\"choixHotel\"][value=\"\${id}\"]`);
        if (radio) {
            radio.checked = true;
        }

        document.querySelectorAll('.card-hotel').forEach(card => {
            card.classList.remove('border-2', 'border-bleuClair', 'shadow-md');
        });

        const selectedCard = radio.closest('.card-hotel');
        if (selectedCard) {
            selectedCard.classList.add('border-2', 'border-bleuClair', 'shadow-md');
        }
    };

    const addButton = document.getElementById(\"btnAddPersonne\");
        const addChambre = document.getElementById(\"btnAddChambre\");
        const lesChambres = document.getElementById(\"lesChambres\");
        const retourEtapeBillet = document.getElementById(\"retourEtapeBillet\");
        const submitHotelSvt = document.getElementById(\"submitHotelSvt\");

        const totalPriceElementH = document.createElement(\"div\"); 
        totalPriceElementH.classList.add(\"text-xl\", \"font-bold\", \"mt-5\");
        lesChambres.appendChild(totalPriceElementH);

        function updateTotalPrice() {
            let totalPrice = parseFloat(document.getElementById('prix-billet').value) || 0;
            document.querySelectorAll(\".select-format\").forEach(select => {
                totalPrice += parseFloat(select.options[select.selectedIndex].dataset.price || 0);
            });
            totalPriceElementH.innerText = `Prix total de la réservation : \${totalPrice.toFixed(2)} €`;
        }

        submitHotelSvt.style.opacity = 0.5;
        let nbChambres = 0;
        addChambre.addEventListener(\"click\", function () {
            const newFields = document.createElement(\"div\");
            newFields.classList.add(\"flex\", \"justify-between\", \"gap-4\", \"mt-3\");
            nbChambres +=1;
            const uniqueId = \"chambre\" + Date.now();
            newFields.id = uniqueId;
            submitHotelSvt.disabled = false;
            submitHotelSvt.style.opacity = 1;
            newFields.innerHTML = `
                <span>Chambre</span>
                <div class=\"flex items-center gap-10 justify-between\">
                    <select name=\"fChambre[]\" class=\"select-format rounded border p-2\">
                        {% for format in formatChambre %}
                            <option value=\"{{ format.id }}\" data-price=\"{{ format.prixFormatChambre }}\">{{ format.libelleFormatChambre }} - {{ format.prixFormatChambre }} €</option>
                        {% endfor %}
                    </select>
                    <button type=\"button\" class=\"rounded bg-red-700 p-1 hover:cursor-pointer delete-btn-chambre\" data-target=\"\${uniqueId}\">
                        {{ include('svg/delete-svg.html.twig') }}
                    </button>
                </div>
            `;

            lesChambres.appendChild(newFields);
            newFields.querySelector(\".select-format\").addEventListener(\"change\", updateTotalPrice);
            updateTotalPrice();
        });

        document.addEventListener(\"click\", function (event) {
            if (event.target.closest(\".delete-btn-chambre\")) {
                const targetId = event.target.closest(\".delete-btn-chambre\").getAttribute(\"data-target\");
                document.getElementById(targetId)?.remove();
                updateTotalPrice();
                addChambre -=1;
                if(addPersonne <=0){
                    validateButton.disabled = true;
                    validateButton.style.opacity = 0.5;
                }
            }
        });

        retourEtapeBillet.addEventListener(\"click\", function () {
            window.location.href = \"/client/reserver-aventure/billet\";
        });

        submitHotelSvt.addEventListener(\"click\", function () {
            let formIsValid = true;
            
            const hotelRadios = document.getElementsByName(\"choixHotel\");
            let hotelSelected = false;
            hotelRadios.forEach(radio => {
                if (radio.checked) {
                    hotelSelected = true;
                }
            });
   
            const chambreFields = document.querySelectorAll(\"#lesChambres input, #lesChambres select\");
            chambreFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add(\"border-red-500\");
                    formIsValid = false;
                } else {
                    field.classList.remove(\"border-red-500\");
                }
            });
        });
});
</script>


", "client/reservation/formHotel.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\reservation\\formHotel.html.twig");
    }
}
