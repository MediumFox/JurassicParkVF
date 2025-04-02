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

/* reuse/home/map.html.twig */
class __TwigTemplate_b78157f1338d0b03b0d14360291136eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/home/map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/home/map.html.twig"));

        // line 1
        yield "<div class=\"relative w-full\">
    <svg 
        class=\"w-full h-[300px]\" 
        viewBox=\"0 0 1440 320\" 
        preserveAspectRatio=\"none\"
    >
 <path fill=\"#0f172a\" fill-opacity=\"1\" d=\"M0,192L48,186.7C96,181,192,171,288,138.7C384,107,480,53,576,74.7C672,96,768,192,864,208C960,224,1056,160,1152,133.3C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path>
    </svg>

<div class=\"w-full min-h-[80vh] bg-slate-900 flex flex-col justify-center items-center px-4 py-12\">
    <div class=\"text-center mb-10\">
        <h1 class=\"mb-6 text-4xl text-white font-bold text-center\">Notre carte de l'île</h1>
        <div class=\"w-20 h-1 bg-white mx-auto mt-2 rounded animate-pulse\"></div>
        <p class=\"text-white mt-2 italic text-sm\">Prévisions des prochains jours pour nos visiteurs intrépides, soyez vigilant en cas de fortes pluies (avalanches, éboulements ou glissements de terrains fréquent)</p>
    </div>

    <div class=\"w-full flex items-center justify-center gap-2\">
        <div class=\"relative w-full max-w-7xl rounded-xl overflow-hidden flex gap-5 items-center\">
            <img 
                src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/map.png"), "html", null, true);
        yield "\" 
                alt=\"Carte du parc\" 
                class=\"w-[60%] h-fit object-cover rounded-xl hover:scale-[1.01] transition-transform duration-300 ease-in-out\"
            >

            <div class=\"absolute top-[35%] left-[25%] w-4 h-4 bg-red-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-red-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-red-500\"></div>
            </div>

            <div class=\"absolute top-[55%] left-[40%] w-4 h-4 bg-red-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-red-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-red-500\"></div>
            </div>

            <div class=\"absolute top-[14%] left-[23%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[20%] left-[45%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[45%] left-[10%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[10%] left-[40%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[65%] left-[14.5%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[35%] left-[14.5%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[32%] left-[50%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[25%] left-[35%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[46%] left-[35%] w-4 h-4 bg-blue-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-blue-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-blue-500\"></div>
            </div>

            <div class=\"absolute top-[80%] left-[30%] w-4 h-4 bg-blue-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-blue-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-blue-500\"></div>
            </div>


            <div class=\"absolute top-[87%] left-[16%] w-4 h-4 bg-yellow-400 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-yellow-400 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-yellow-400\"></div>
            </div>

            <div class=\"absolute top-[50%] left-[53%] w-4 h-4 bg-yellow-400 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-yellow-400 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-yellow-400\"></div>
            </div>

            <div class=\"flex flex-col gap-4 text-white font-medium text-base bg-white/10 backdrop-blur-md p-7 ml-5 rounded-xl shadow-md border border-white/10 max-w-md\">
                <h3 class=\"text-lg font-semibold text-white/80 mb-2\">Légende de la carte</h3>

                <div class=\"flex items-center gap-3\">
                    <div class=\"relative w-4 h-4\">
                        <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                        <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
                    </div>
                    <span>Points verts : Dinosaures</span>
                </div>

                <div class=\"flex items-center gap-3\">
                    <div class=\"relative w-4 h-4\">
                        <div class=\"absolute inset-0 rounded-full bg-red-500 opacity-75 animate-ping\"></div>
                        <div class=\"relative w-4 h-4 rounded-full bg-red-500\"></div>
                    </div>
                    <span>Points rouges : Restaurants</span>
                </div>

                <div class=\"flex items-center gap-3\">
                    <div class=\"relative w-4 h-4\">
                        <div class=\"absolute inset-0 rounded-full bg-blue-500 opacity-75 animate-ping\"></div>
                        <div class=\"relative w-4 h-4 rounded-full bg-blue-500\"></div>
                    </div>
                    <span>Points bleus : Hôtels</span>
                </div>

                <div class=\"flex items-center gap-3\">
                    <div class=\"relative w-4 h-4\">
                        <div class=\"absolute inset-0 rounded-full bg-yellow-400 opacity-75 animate-ping\"></div>
                        <div class=\"relative w-4 h-4 rounded-full bg-yellow-400\"></div>
                    </div>
                    <span>Points jaunes : Boutiques de retraits</span>
                </div>
            </div>
        </div>

    </div>

</div>

    <svg 
        class=\"w-full h-[300px]\" 
        viewBox=\"0 0 1440 320\" 
        preserveAspectRatio=\"none\"
    >
        <path 
            fill=\"#0f172a\" 
            fill-opacity=\"1\" 
            d=\"M0,128L48,160C96,192,192,256,288,261.3C384,267,480,213,576,202.7C672,192,768,224,864,218.7C960,213,1056,171,1152,149.3C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z\"
        />
    </svg>
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
        return "reuse/home/map.html.twig";
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
        return array (  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"relative w-full\">
    <svg 
        class=\"w-full h-[300px]\" 
        viewBox=\"0 0 1440 320\" 
        preserveAspectRatio=\"none\"
    >
 <path fill=\"#0f172a\" fill-opacity=\"1\" d=\"M0,192L48,186.7C96,181,192,171,288,138.7C384,107,480,53,576,74.7C672,96,768,192,864,208C960,224,1056,160,1152,133.3C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path>
    </svg>

<div class=\"w-full min-h-[80vh] bg-slate-900 flex flex-col justify-center items-center px-4 py-12\">
    <div class=\"text-center mb-10\">
        <h1 class=\"mb-6 text-4xl text-white font-bold text-center\">Notre carte de l'île</h1>
        <div class=\"w-20 h-1 bg-white mx-auto mt-2 rounded animate-pulse\"></div>
        <p class=\"text-white mt-2 italic text-sm\">Prévisions des prochains jours pour nos visiteurs intrépides, soyez vigilant en cas de fortes pluies (avalanches, éboulements ou glissements de terrains fréquent)</p>
    </div>

    <div class=\"w-full flex items-center justify-center gap-2\">
        <div class=\"relative w-full max-w-7xl rounded-xl overflow-hidden flex gap-5 items-center\">
            <img 
                src=\"{{ asset('img/map.png') }}\" 
                alt=\"Carte du parc\" 
                class=\"w-[60%] h-fit object-cover rounded-xl hover:scale-[1.01] transition-transform duration-300 ease-in-out\"
            >

            <div class=\"absolute top-[35%] left-[25%] w-4 h-4 bg-red-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-red-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-red-500\"></div>
            </div>

            <div class=\"absolute top-[55%] left-[40%] w-4 h-4 bg-red-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-red-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-red-500\"></div>
            </div>

            <div class=\"absolute top-[14%] left-[23%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[20%] left-[45%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[45%] left-[10%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[10%] left-[40%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[65%] left-[14.5%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[35%] left-[14.5%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[32%] left-[50%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[25%] left-[35%] w-4 h-4 bg-green-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
            </div>

            <div class=\"absolute top-[46%] left-[35%] w-4 h-4 bg-blue-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-blue-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-blue-500\"></div>
            </div>

            <div class=\"absolute top-[80%] left-[30%] w-4 h-4 bg-blue-500 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-blue-500 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-blue-500\"></div>
            </div>


            <div class=\"absolute top-[87%] left-[16%] w-4 h-4 bg-yellow-400 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-yellow-400 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-yellow-400\"></div>
            </div>

            <div class=\"absolute top-[50%] left-[53%] w-4 h-4 bg-yellow-400 rounded-full z-40\">
                <div class=\"absolute inset-0 rounded-full bg-yellow-400 opacity-75 animate-ping\"></div>
                <div class=\"relative w-4 h-4 rounded-full bg-yellow-400\"></div>
            </div>

            <div class=\"flex flex-col gap-4 text-white font-medium text-base bg-white/10 backdrop-blur-md p-7 ml-5 rounded-xl shadow-md border border-white/10 max-w-md\">
                <h3 class=\"text-lg font-semibold text-white/80 mb-2\">Légende de la carte</h3>

                <div class=\"flex items-center gap-3\">
                    <div class=\"relative w-4 h-4\">
                        <div class=\"absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping\"></div>
                        <div class=\"relative w-4 h-4 rounded-full bg-green-500\"></div>
                    </div>
                    <span>Points verts : Dinosaures</span>
                </div>

                <div class=\"flex items-center gap-3\">
                    <div class=\"relative w-4 h-4\">
                        <div class=\"absolute inset-0 rounded-full bg-red-500 opacity-75 animate-ping\"></div>
                        <div class=\"relative w-4 h-4 rounded-full bg-red-500\"></div>
                    </div>
                    <span>Points rouges : Restaurants</span>
                </div>

                <div class=\"flex items-center gap-3\">
                    <div class=\"relative w-4 h-4\">
                        <div class=\"absolute inset-0 rounded-full bg-blue-500 opacity-75 animate-ping\"></div>
                        <div class=\"relative w-4 h-4 rounded-full bg-blue-500\"></div>
                    </div>
                    <span>Points bleus : Hôtels</span>
                </div>

                <div class=\"flex items-center gap-3\">
                    <div class=\"relative w-4 h-4\">
                        <div class=\"absolute inset-0 rounded-full bg-yellow-400 opacity-75 animate-ping\"></div>
                        <div class=\"relative w-4 h-4 rounded-full bg-yellow-400\"></div>
                    </div>
                    <span>Points jaunes : Boutiques de retraits</span>
                </div>
            </div>
        </div>

    </div>

</div>

    <svg 
        class=\"w-full h-[300px]\" 
        viewBox=\"0 0 1440 320\" 
        preserveAspectRatio=\"none\"
    >
        <path 
            fill=\"#0f172a\" 
            fill-opacity=\"1\" 
            d=\"M0,128L48,160C96,192,192,256,288,261.3C384,267,480,213,576,202.7C672,192,768,224,864,218.7C960,213,1056,171,1152,149.3C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z\"
        />
    </svg>
</div>
", "reuse/home/map.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\home\\map.html.twig");
    }
}
