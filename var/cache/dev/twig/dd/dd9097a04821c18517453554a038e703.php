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

/* dinosaure/dinopedia.html.twig */
class __TwigTemplate_7a51cb4c78a2b6042eb585869a319836 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dinosaure/dinopedia.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dinosaure/dinopedia.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dinosaure/dinopedia.html.twig", 1);
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

        yield "Dinopédia";
        
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
        yield from $this->loadTemplate("reuse/hero.html.twig", "dinosaure/dinopedia.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    <div class=\"flex justify-center p-5 gap-10\">
        <div class=\"w-[90%] mx-auto p-2\">
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les dinosaures</h1>
            <div class=\"flex justify-between items-center w-full  mb-10\">
                <div class=\"flex flex-col \">
                    <label for='filterName' class=\"underline mb-1 text-bleuLune font-bold\">Trier par libellé :</label>
                    <input type='text' oninput=\"filterName()\" class=\"border border-bleuGlace p-0.5 w-[20vw] rounded focus:outline-none focus:ring-2 focus:ring-bleuClair\" id='filterName'/>
                </div>
                <div class=\"flex items-end justify-end gap-5\">
                    <div class=\"flex flex-col justify-end \">
                        <label for='selectRegime' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Régime :</label>
                        <select id='selectRegime' class=\"border border-bleuGlace p-1 rounded w-[20vw] focus:outline-none focus:ring-2 focus:ring-bleuClair\" onChange=\"filterName()\">
                            <option value=\"\">Tous</option>
                            <option value=\"Carnivore\">Carnivore</option>
                            <option value=\"Omnivore\">Omnivore</option>
                            <option value=\"Herbivore\">Herbivore</option>
                        </select>
                    </div>
                    <div class=\"flex flex-col justify-end \">
                        <label for='selectEre' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Ere :</label>
                        <select id='selectEre' class=\"border border-bleuGlace p-1 rounded w-[20vw] focus:outline-none focus:ring-2 focus:ring-bleuClair\" onChange=\"filterName()\">
                            <option value=\"\">Tous</option>
                            <option value=\"Neogene\">Neogene</option>
                            <option value=\"Paleogene\">Paleogene</option>
                            <option value=\"Cretace\">Cretace</option>
                            <option value=\"Jurassique\">Jurassique</option>
                            <option value=\"Trias\">Trias</option>
                            <option value=\"Permien\">Permien</option>
                            <option value=\"Carbonifère\">Carbonifère</option>
                            <option value=\"Devonien\">Devonien</option>
                            <option value=\"Silurien\">Silurien</option>
                            <option value=\"Ordovicien\">Ordovicien</option>
                            <option value=\"Cambrien\">Cambrien</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id=\"dinosaureContainer\" class=\"grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["dinosaures"]) || array_key_exists("dinosaures", $context) ? $context["dinosaures"] : (function () { throw new RuntimeError('Variable "dinosaures" does not exist.', 45, $this->source); })()), 0, 24));
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
            // line 46
            yield "                    <div class=\"bg-gris rounded-xl border border-bleuLune shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 relative cursor-pointer\" onClick=\"showDisplay(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield ")\">
                        <div class=\"flex flex-col items-center p-3\">
                            <div class=\"w-[100px] h-[100px] rounded-full overflow-hidden bg-white border-3 p-3 border-bleuLune shadow-sm\">
                                <img src=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "imageDinosaure", [], "any", false, false, false, 49)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "libelleDinosaure", [], "any", false, false, false, 49), "html", null, true);
            yield "\" class=\"object-cover w-full h-full\" />
                            </div>

                            <h3 class=\"mt-3 text-center font-bold text-sm text-bleuLune uppercase tracking-wider\">
                                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "libelleDinosaure", [], "any", false, false, false, 53), "html", null, true);
            yield "
                            </h3>

                            <p class=\"text-xs text-center text-bleuGlace mt-1 italic\">
                                ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "ereDinosaure", [], "any", false, false, false, 57), "html", null, true);
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "regimeDinosaure", [], "any", false, false, false, 57), "html", null, true);
            yield "
                            </p>

                            <div class=\"mt-2 text-[10px] text-center text-gray-500 px-2 line-clamp-3\">
                                ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "descriptionDinosaure", [], "any", false, false, false, 61), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"absolute top-2 left-2 w-[25px] h-[25px]\">
                            ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "regimeDinosaure", [], "any", false, false, false, 65) == "Carnivore")) {
                // line 66
                yield "                                ";
                yield from $this->loadTemplate("svg/Régimes/carnivore.svg", "dinosaure/dinopedia.html.twig", 66)->unwrap()->yield($context);
                // line 67
                yield "                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "regimeDinosaure", [], "any", false, false, false, 67) == "Herbivore")) {
                // line 68
                yield "                                ";
                yield from $this->loadTemplate("svg/Régimes/herbivore.svg", "dinosaure/dinopedia.html.twig", 68)->unwrap()->yield($context);
                // line 69
                yield "                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["dinosaure"], "regimeDinosaure", [], "any", false, false, false, 69) == "Omnivore")) {
                // line 70
                yield "                                ";
                yield from $this->loadTemplate("svg/Régimes/piscivore.svg", "dinosaure/dinopedia.html.twig", 70)->unwrap()->yield($context);
                // line 71
                yield "                            ";
            }
            // line 72
            yield "                        </div>
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
        // line 76
        yield "            </div>
        </div>
    </div>
    ";
        // line 79
        yield from $this->loadTemplate("reuse/display/showDisplay.html.twig", "dinosaure/dinopedia.html.twig", 79)->unwrap()->yield($context);
        // line 80
        yield "</div>

<script>
    function filterName() {
        const container = document.getElementById(\"dinosaureContainer\");
        const libelle = document.getElementById(\"filterName\").value;
        const regime = document.getElementById(\"selectRegime\").value;
        const ere = document.getElementById(\"selectEre\").value;
        const url = \"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dinopedia_filter_name");
        yield "?libelle=\" + encodeURIComponent(libelle) + \"&regime=\" + encodeURIComponent(regime) + \"&ere=\" + encodeURIComponent(ere);

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    container.innerHTML = \"<p class='text-red-500 text-sm'>Aucun dinosaure trouvé.</p>\";
                    return;
                }
                let i = 0;
                const cards = data.results.map(dino => {
                    i++;
                    if(i <= 24){
                        return `
                            <div class=\"bg-gris rounded-xl border border-bleuLune shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 relative cursor-pointer\"  onClick=\"showDisplay(\${dino.id})\">
                                <div class=\"flex flex-col items-center p-3\">
                                    <div class=\"w-[100px] h-[100px] rounded-full overflow-hidden bg-white border-3 p-3 border-bleuLune shadow-sm\">
                                        <img src=\"\${dino.image}\" alt=\"\${dino.nom}\" class=\"object-cover w-full h-full\" />
                                    </div>
                                    <h3 class=\"mt-3 text-center font-bold text-sm text-bleuLune uppercase tracking-wider\">
                                        \${dino.nom}
                                    </h3>
                                    <p class=\"text-xs text-center text-bleuGlace mt-1 italic\">
                                        \${dino.ere} — \${dino.regime}
                                    </p>
                                    <div class=\"mt-2 text-[10px] text-center text-gray-500 px-2 line-clamp-3\">
                                        \${dino.description}
                                    </div>
                                </div>
                            </div>
                        `;
                    }
    
                }).join('');
                container.innerHTML = cards;

            })
            .catch(error => {
                console.error(error);
                container.innerHTML = \"<p class='text-red-500 text-sm'>Erreur lors du chargement.</p>\";
            });
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
        return "dinosaure/dinopedia.html.twig";
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
        return array (  253 => 88,  243 => 80,  241 => 79,  236 => 76,  219 => 72,  216 => 71,  213 => 70,  210 => 69,  207 => 68,  204 => 67,  201 => 66,  199 => 65,  192 => 61,  183 => 57,  176 => 53,  167 => 49,  160 => 46,  143 => 45,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dinopédia{% endblock %}

{% block body %}
    {% include 'reuse/hero.html.twig' %}
    <div class=\"flex justify-center p-5 gap-10\">
        <div class=\"w-[90%] mx-auto p-2\">
            <h1 class=\"font-bold text-2xl mb-3.5 underline\">Les dinosaures</h1>
            <div class=\"flex justify-between items-center w-full  mb-10\">
                <div class=\"flex flex-col \">
                    <label for='filterName' class=\"underline mb-1 text-bleuLune font-bold\">Trier par libellé :</label>
                    <input type='text' oninput=\"filterName()\" class=\"border border-bleuGlace p-0.5 w-[20vw] rounded focus:outline-none focus:ring-2 focus:ring-bleuClair\" id='filterName'/>
                </div>
                <div class=\"flex items-end justify-end gap-5\">
                    <div class=\"flex flex-col justify-end \">
                        <label for='selectRegime' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Régime :</label>
                        <select id='selectRegime' class=\"border border-bleuGlace p-1 rounded w-[20vw] focus:outline-none focus:ring-2 focus:ring-bleuClair\" onChange=\"filterName()\">
                            <option value=\"\">Tous</option>
                            <option value=\"Carnivore\">Carnivore</option>
                            <option value=\"Omnivore\">Omnivore</option>
                            <option value=\"Herbivore\">Herbivore</option>
                        </select>
                    </div>
                    <div class=\"flex flex-col justify-end \">
                        <label for='selectEre' class=\"underline mb-1 text-bleuLune font-bold\">Trier par Ere :</label>
                        <select id='selectEre' class=\"border border-bleuGlace p-1 rounded w-[20vw] focus:outline-none focus:ring-2 focus:ring-bleuClair\" onChange=\"filterName()\">
                            <option value=\"\">Tous</option>
                            <option value=\"Neogene\">Neogene</option>
                            <option value=\"Paleogene\">Paleogene</option>
                            <option value=\"Cretace\">Cretace</option>
                            <option value=\"Jurassique\">Jurassique</option>
                            <option value=\"Trias\">Trias</option>
                            <option value=\"Permien\">Permien</option>
                            <option value=\"Carbonifère\">Carbonifère</option>
                            <option value=\"Devonien\">Devonien</option>
                            <option value=\"Silurien\">Silurien</option>
                            <option value=\"Ordovicien\">Ordovicien</option>
                            <option value=\"Cambrien\">Cambrien</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id=\"dinosaureContainer\" class=\"grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6\">
                {% for dinosaure in dinosaures|slice(0, 24) %}
                    <div class=\"bg-gris rounded-xl border border-bleuLune shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 relative cursor-pointer\" onClick=\"showDisplay({{ dinosaure.id }})\">
                        <div class=\"flex flex-col items-center p-3\">
                            <div class=\"w-[100px] h-[100px] rounded-full overflow-hidden bg-white border-3 p-3 border-bleuLune shadow-sm\">
                                <img src=\"{{ asset(dinosaure.imageDinosaure) }}\" alt=\"{{ dinosaure.libelleDinosaure }}\" class=\"object-cover w-full h-full\" />
                            </div>

                            <h3 class=\"mt-3 text-center font-bold text-sm text-bleuLune uppercase tracking-wider\">
                                {{ dinosaure.libelleDinosaure }}
                            </h3>

                            <p class=\"text-xs text-center text-bleuGlace mt-1 italic\">
                                {{ dinosaure.ereDinosaure }} — {{ dinosaure.regimeDinosaure }}
                            </p>

                            <div class=\"mt-2 text-[10px] text-center text-gray-500 px-2 line-clamp-3\">
                                {{ dinosaure.descriptionDinosaure }}
                            </div>
                        </div>
                        <div class=\"absolute top-2 left-2 w-[25px] h-[25px]\">
                            {% if dinosaure.regimeDinosaure == \"Carnivore\" %}
                                {% include 'svg/Régimes/carnivore.svg' %}
                            {% elseif dinosaure.regimeDinosaure == \"Herbivore\" %}
                                {% include 'svg/Régimes/herbivore.svg' %}
                            {% elseif dinosaure.regimeDinosaure == \"Omnivore\" %}
                                {% include 'svg/Régimes/piscivore.svg' %}
                            {% endif %}
                        </div>
                    </div>
                    
                {% endfor %}
            </div>
        </div>
    </div>
    {% include 'reuse/display/showDisplay.html.twig' %}
</div>

<script>
    function filterName() {
        const container = document.getElementById(\"dinosaureContainer\");
        const libelle = document.getElementById(\"filterName\").value;
        const regime = document.getElementById(\"selectRegime\").value;
        const ere = document.getElementById(\"selectEre\").value;
        const url = \"{{ path('app_dinopedia_filter_name') }}?libelle=\" + encodeURIComponent(libelle) + \"&regime=\" + encodeURIComponent(regime) + \"&ere=\" + encodeURIComponent(ere);

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    container.innerHTML = \"<p class='text-red-500 text-sm'>Aucun dinosaure trouvé.</p>\";
                    return;
                }
                let i = 0;
                const cards = data.results.map(dino => {
                    i++;
                    if(i <= 24){
                        return `
                            <div class=\"bg-gris rounded-xl border border-bleuLune shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 relative cursor-pointer\"  onClick=\"showDisplay(\${dino.id})\">
                                <div class=\"flex flex-col items-center p-3\">
                                    <div class=\"w-[100px] h-[100px] rounded-full overflow-hidden bg-white border-3 p-3 border-bleuLune shadow-sm\">
                                        <img src=\"\${dino.image}\" alt=\"\${dino.nom}\" class=\"object-cover w-full h-full\" />
                                    </div>
                                    <h3 class=\"mt-3 text-center font-bold text-sm text-bleuLune uppercase tracking-wider\">
                                        \${dino.nom}
                                    </h3>
                                    <p class=\"text-xs text-center text-bleuGlace mt-1 italic\">
                                        \${dino.ere} — \${dino.regime}
                                    </p>
                                    <div class=\"mt-2 text-[10px] text-center text-gray-500 px-2 line-clamp-3\">
                                        \${dino.description}
                                    </div>
                                </div>
                            </div>
                        `;
                    }
    
                }).join('');
                container.innerHTML = cards;

            })
            .catch(error => {
                console.error(error);
                container.innerHTML = \"<p class='text-red-500 text-sm'>Erreur lors du chargement.</p>\";
            });
    }
</script>
{% endblock %}
", "dinosaure/dinopedia.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\dinosaure\\dinopedia.html.twig");
    }
}
