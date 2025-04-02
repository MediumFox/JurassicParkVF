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

/* apiComponents/weatherContainer.html.twig */
class __TwigTemplate_08b9a85c9ddf3fef0d6f9becffde521b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apiComponents/weatherContainer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apiComponents/weatherContainer.html.twig"));

        // line 1
        yield "<div class=\"p-5 py-14 relative overflow-hidden bg-[linear-gradient(135deg,_#244D61,_#5689C0,_#EAEBED)]\">
    <div class=\"text-center mb-10\">
        <span class=\"text-white  text-3xl font-extrabold tracking-wide inline-block animate-fade-in\">
            Météo sur l'île Jurassique
        </span>
        <div class=\"w-20 h-1 bg-white mx-auto mt-2 rounded animate-pulse\"></div>
        <p class=\"text-white/60 mt-2 italic text-sm\">Prévisions des prochains jours pour nos visiteurs intrépides, soyez vigilant en cas de fortes pluies (avalanches, éboulements ou glissements de terrains fréquent)</p>
    </div>

    <div class=\"absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-white/5 animate-gradient-move pointer-events-none z-0\"></div>

    <div id=\"meteo\" class=\"relative z-10 text-center flex gap-5 h-[40vh] w-full justify-center items-center border-y border-white/40 backdrop-blur-sm rounded-xl px-4\">
    </div>
</div>

<script>
    const apiKey = \"e19659c1e08f45f08a9185617252703\";
    const ville = \"Nantes\";

    const jours = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
    const mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
                  'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    let forecastData = [];

    function renderCards(centerIndex = 0) {
        const container = document.getElementById(\"meteo\");
        let html = \"\";

        const visible = [
            ...forecastData.slice(centerIndex),
            ...forecastData.slice(0, centerIndex)
        ].slice(0, 5);

        visible.forEach((day, index) => {
            const date = new Date(day.date);
            const jourNom = jours[date.getDay()];
            const jourNum = date.getDate();
            const moisNom = mois[date.getMonth()];
            const dateFr = `\${jourNom} \${jourNum} \${moisNom}`;

            const condition = day.day.condition.text;
            const icon = day.day.condition.icon;
            const min = day.day.mintemp_c;
            const max = day.day.maxtemp_c;

            let conditionFr = {
                \"Sunny\": \"Ensoleillé\",
                \"Partly cloudy\": \"Partiellement nuageux\",
                \"Cloudy\": \"Nuageux\",
                \"Overcast\": \"Très nuageux\",
                \"Patchy rain nearby\": \"Pluie modérée\",
                \"Light rain\": \"Pluie légère\",
                \"Moderate rain\": \"Pluie modérée\",
                \"Heavy rain\": \"Forte pluie\",
                \"Clear\": \"Ciel dégagé\",
            }[condition] || condition;

            html += `
                <div class=\"bg-white dark:bg-black shadow-xl rounded-xl p-6 cursor-pointer \${index === 2 ? 'scale-110 opacity-100 z-10 mx-2' : 'opacity-75'}
                            text-center w-[18%] transition-all duration-300\"
                     onclick=\"renderCards(\${(centerIndex + index) % forecastData.length})\">
                    <p class=\"font-semibold text-slate-900 mb-2 dark:text-white\">\${dateFr}</p>
                    <img src=\"https:\${icon}\" alt=\"\${condition}\" class=\"mx-auto mb-2 w-16 h-16\">
                    <p class=\"text-bleuLune font-bold text-lg mb-1 dark:text-white\">\${conditionFr}</p>
                    <p class=\"text-bleuGlace italic text-sm dark:text-white\">\${min}°C / \${max}°C</p>
                </div>
            `;
        });

        container.innerHTML = html;
    }

    fetch(`https://api.weatherapi.com/v1/forecast.json?key=\${apiKey}&q=\${ville}&days=14&aqi=no&alerts=no&lang=fr`)
        .then(response => response.json())
        .then(data => {
            forecastData = data.forecast.forecastday;
            renderCards(0); 
        })
        .catch(error => console.error(\"Erreur météo :\", error));
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
        return "apiComponents/weatherContainer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"p-5 py-14 relative overflow-hidden bg-[linear-gradient(135deg,_#244D61,_#5689C0,_#EAEBED)]\">
    <div class=\"text-center mb-10\">
        <span class=\"text-white  text-3xl font-extrabold tracking-wide inline-block animate-fade-in\">
            Météo sur l'île Jurassique
        </span>
        <div class=\"w-20 h-1 bg-white mx-auto mt-2 rounded animate-pulse\"></div>
        <p class=\"text-white/60 mt-2 italic text-sm\">Prévisions des prochains jours pour nos visiteurs intrépides, soyez vigilant en cas de fortes pluies (avalanches, éboulements ou glissements de terrains fréquent)</p>
    </div>

    <div class=\"absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-white/5 animate-gradient-move pointer-events-none z-0\"></div>

    <div id=\"meteo\" class=\"relative z-10 text-center flex gap-5 h-[40vh] w-full justify-center items-center border-y border-white/40 backdrop-blur-sm rounded-xl px-4\">
    </div>
</div>

<script>
    const apiKey = \"e19659c1e08f45f08a9185617252703\";
    const ville = \"Nantes\";

    const jours = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
    const mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
                  'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    let forecastData = [];

    function renderCards(centerIndex = 0) {
        const container = document.getElementById(\"meteo\");
        let html = \"\";

        const visible = [
            ...forecastData.slice(centerIndex),
            ...forecastData.slice(0, centerIndex)
        ].slice(0, 5);

        visible.forEach((day, index) => {
            const date = new Date(day.date);
            const jourNom = jours[date.getDay()];
            const jourNum = date.getDate();
            const moisNom = mois[date.getMonth()];
            const dateFr = `\${jourNom} \${jourNum} \${moisNom}`;

            const condition = day.day.condition.text;
            const icon = day.day.condition.icon;
            const min = day.day.mintemp_c;
            const max = day.day.maxtemp_c;

            let conditionFr = {
                \"Sunny\": \"Ensoleillé\",
                \"Partly cloudy\": \"Partiellement nuageux\",
                \"Cloudy\": \"Nuageux\",
                \"Overcast\": \"Très nuageux\",
                \"Patchy rain nearby\": \"Pluie modérée\",
                \"Light rain\": \"Pluie légère\",
                \"Moderate rain\": \"Pluie modérée\",
                \"Heavy rain\": \"Forte pluie\",
                \"Clear\": \"Ciel dégagé\",
            }[condition] || condition;

            html += `
                <div class=\"bg-white dark:bg-black shadow-xl rounded-xl p-6 cursor-pointer \${index === 2 ? 'scale-110 opacity-100 z-10 mx-2' : 'opacity-75'}
                            text-center w-[18%] transition-all duration-300\"
                     onclick=\"renderCards(\${(centerIndex + index) % forecastData.length})\">
                    <p class=\"font-semibold text-slate-900 mb-2 dark:text-white\">\${dateFr}</p>
                    <img src=\"https:\${icon}\" alt=\"\${condition}\" class=\"mx-auto mb-2 w-16 h-16\">
                    <p class=\"text-bleuLune font-bold text-lg mb-1 dark:text-white\">\${conditionFr}</p>
                    <p class=\"text-bleuGlace italic text-sm dark:text-white\">\${min}°C / \${max}°C</p>
                </div>
            `;
        });

        container.innerHTML = html;
    }

    fetch(`https://api.weatherapi.com/v1/forecast.json?key=\${apiKey}&q=\${ville}&days=14&aqi=no&alerts=no&lang=fr`)
        .then(response => response.json())
        .then(data => {
            forecastData = data.forecast.forecastday;
            renderCards(0); 
        })
        .catch(error => console.error(\"Erreur météo :\", error));
</script>



", "apiComponents/weatherContainer.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\apiComponents\\weatherContainer.html.twig");
    }
}
