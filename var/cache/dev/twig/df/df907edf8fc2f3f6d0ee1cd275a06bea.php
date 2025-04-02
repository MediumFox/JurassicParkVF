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

/* reuse/display/showDisplay.html.twig */
class __TwigTemplate_31f05d2cf4fb44b5076adceda83f86d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/display/showDisplay.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/display/showDisplay.html.twig"));

        // line 1
        yield "<div class=\"fixed inset-0 flex justify-center items-center bg-black/40 hidden z-50\" id=\"showDisplay\" onClick=\"fermerShowDisplay()\">

    <div class=\"flex items-center gap-2 mr-3 text-xl \">
        <span id=\"valuePreviousDino\" class=\"text-bleuLune font-bold\"></span>
        <div onClick='event.stopPropagation(); showDisplay(0, \"previous\"); ' id=\"previousDino\" data-id-next=\"\" class=\"z-60 transition w-fit bg-gray-100 rounded-full p-2 cursor-pointer flex justify-center items-center hover:bg-bleuLune group\">
            <svg class=\"size-5 group-hover:fill-white fill-bleuLune\" class=\"bi bi-caret-right-fill\" viewBox=\"0 0 16 16\">
                <path d=\"m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z\"/>
            </svg>
        </div>
    </div>

    <div class=\"w-[40%] bg-gray-100 p-5 rounded-lg shadow-lg z-60\" onClick=\"event.stopPropagation()\">
        <div id=\"formContainer\">
            <p class=\"text-gray-400 text-sm\">Chargement du formulaire...</p>
        </div>
    </div>

    <div class=\"flex items-center gap-2 mr-3 text-xl text-bleuLune\">
        <div onClick='event.stopPropagation(); showDisplay(0, \"next\"); ' id=\"nextDino\" data-id-next=\"\" class=\"z-60 transition bg-gray-100 rounded-full p-2 ml-3 cursor-pointer flex justify-center items-center hover:bg-bleuLune group\">
            <svg class=\"size-5 group-hover:fill-white fill-bleuLune\" class=\"bi bi-caret-right-fill\" viewBox=\"0 0 16 16\">
                <path d=\"m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z\"/>
            </svg>
        </div>
        <span id=\"valueNextDino\" class=\"text-bleuLune font-bold\"></span>
    </div>

</div>

<script>
function showDisplay(id, act) {
    const modal = document.getElementById('showDisplay');
    const formContainer = document.getElementById('formContainer');
    const nextDino = document.getElementById('nextDino');
    const previousDino = document.getElementById('previousDino');
    const valueNextDino = document.getElementById('valueNextDino');
    const valuePreviousDino = document.getElementById('valuePreviousDino');
    formContainer.innerHTML = '<p class=\"text-gray-400 text-sm\">Chargement du formulaire...</p>';

    nextDino.style.display = \"none\";
    previousDino.style.display = \"none\";
    if (act === \"next\") {
        id = nextDino.dataset.idNext;
    }else{
        if(act === \"previous\"){
            id = previousDino.dataset.idPrevious;
        }
    }

    fetch(`/dinopedia/\${encodeURIComponent(id)}`)
        .then(response => response.json())
        .then(data => {
                if (data.success) {
                    formContainer.innerHTML = `
                        <div class=\"flex flex-col justify-between w-full h-full\">
                            <div class=\"mb-3 font-bold text-bleuLune text-2xl\">
                                <span>\${data.dinosaure.libelle}</span>
                            </div>
                            <div class=\"flex justify-center items-center rounded-xl p-4 mb-3\">
                                <img src=\"\${data.dinosaure.image}\" alt=\"image \${data.dinosaure.libelle}\"
                                    class=\" object-contain rounded-lg shadow-[0_4px_12px_rgba(0,0,0,0.1)] p-3 ring-2 ring-[color:var(--color-bleuLune)]\" />
                            </div>
                            <div class=\"flex justify-baseline gap-5 mb-2 w-full text-white font-bold\">
                                <div class=\"bg-bleuLune rounded py-1 px-1.5 flex justify-baseline items-center gap-1\">
                                    <svg fill=\"white\" class=\"size-5\" viewBox=\"0 0 16 16\">
                                        <path d=\"M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069q0-.218-.02-.431c.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a1 1 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.74.74 0 0 0-.375.562c-.024.243.082.48.32.654a2 2 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595m7.173 3.876a.6.6 0 0 1-.098.21l-.044-.025c-.146-.09-.157-.175-.152-.223a.24.24 0 0 1 .117-.173c.049-.027.08-.021.113.012a.2.2 0 0 1 .064.199m-8.999-.65a.5.5 0 1 1-.276-.96A7.6 7.6 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.6 6.6 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0\"/>
                                    </svg>
                                    <span>Régime : \${data.dinosaure.regime}</span>
                                </div>
                                <div class=\"bg-bleuLune rounded py-1 px-1.5 flex justify-baseline items-center gap-1\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"white\" class=\"size-5\">
                                        <path fill-rule=\"evenodd\" d=\"M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z\" clip-rule=\"evenodd\" />
                                    </svg>
                                    <span>Ere : \${data.dinosaure.ere}</span>
                                </div>
                            </div>
                            <div class=\"p-1\">
                                <span class=\"text-bleuGlace\">
                                    \${data.dinosaure.description}
                                </span>
                            </div>
                        </div>
                    `;
                    if (data.nextId.id != null) {
                        nextDino.dataset.idNext = data.nextId.id;
                        valueNextDino.innerHTML = data.nextId.libelle;
                        nextDino.style.display = \"block\";
                    } else {
                        nextDino.style.display = \"none\";
                    }

                    if (data.previousId.id != null) {
                        previousDino.dataset.idPrevious = data.previousId.id;
                        valuePreviousDino.innerHTML = data.previousId.libelle;
                        previousDino.style.display = \"block\";
                    } else {
                        previousDino.style.display = \"none\";
                    }
                } else {
                    formContainer.innerHTML = \"<span class='text-red-500'>Dinosaure non trouvé.</span>\";
                }
            })
        .catch(error => {
            formContainer.innerHTML = \"<span class='text-red-500'>Erreur lors du chargement.</span>\";
        });
        modal.style.display = \"flex\";
}

function fermerShowDisplay() {
    document.getElementById('showDisplay').style.display = \"none\";
}
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reuse/display/showDisplay.html.twig";
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
        return new Source("<div class=\"fixed inset-0 flex justify-center items-center bg-black/40 hidden z-50\" id=\"showDisplay\" onClick=\"fermerShowDisplay()\">

    <div class=\"flex items-center gap-2 mr-3 text-xl \">
        <span id=\"valuePreviousDino\" class=\"text-bleuLune font-bold\"></span>
        <div onClick='event.stopPropagation(); showDisplay(0, \"previous\"); ' id=\"previousDino\" data-id-next=\"\" class=\"z-60 transition w-fit bg-gray-100 rounded-full p-2 cursor-pointer flex justify-center items-center hover:bg-bleuLune group\">
            <svg class=\"size-5 group-hover:fill-white fill-bleuLune\" class=\"bi bi-caret-right-fill\" viewBox=\"0 0 16 16\">
                <path d=\"m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z\"/>
            </svg>
        </div>
    </div>

    <div class=\"w-[40%] bg-gray-100 p-5 rounded-lg shadow-lg z-60\" onClick=\"event.stopPropagation()\">
        <div id=\"formContainer\">
            <p class=\"text-gray-400 text-sm\">Chargement du formulaire...</p>
        </div>
    </div>

    <div class=\"flex items-center gap-2 mr-3 text-xl text-bleuLune\">
        <div onClick='event.stopPropagation(); showDisplay(0, \"next\"); ' id=\"nextDino\" data-id-next=\"\" class=\"z-60 transition bg-gray-100 rounded-full p-2 ml-3 cursor-pointer flex justify-center items-center hover:bg-bleuLune group\">
            <svg class=\"size-5 group-hover:fill-white fill-bleuLune\" class=\"bi bi-caret-right-fill\" viewBox=\"0 0 16 16\">
                <path d=\"m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z\"/>
            </svg>
        </div>
        <span id=\"valueNextDino\" class=\"text-bleuLune font-bold\"></span>
    </div>

</div>

<script>
function showDisplay(id, act) {
    const modal = document.getElementById('showDisplay');
    const formContainer = document.getElementById('formContainer');
    const nextDino = document.getElementById('nextDino');
    const previousDino = document.getElementById('previousDino');
    const valueNextDino = document.getElementById('valueNextDino');
    const valuePreviousDino = document.getElementById('valuePreviousDino');
    formContainer.innerHTML = '<p class=\"text-gray-400 text-sm\">Chargement du formulaire...</p>';

    nextDino.style.display = \"none\";
    previousDino.style.display = \"none\";
    if (act === \"next\") {
        id = nextDino.dataset.idNext;
    }else{
        if(act === \"previous\"){
            id = previousDino.dataset.idPrevious;
        }
    }

    fetch(`/dinopedia/\${encodeURIComponent(id)}`)
        .then(response => response.json())
        .then(data => {
                if (data.success) {
                    formContainer.innerHTML = `
                        <div class=\"flex flex-col justify-between w-full h-full\">
                            <div class=\"mb-3 font-bold text-bleuLune text-2xl\">
                                <span>\${data.dinosaure.libelle}</span>
                            </div>
                            <div class=\"flex justify-center items-center rounded-xl p-4 mb-3\">
                                <img src=\"\${data.dinosaure.image}\" alt=\"image \${data.dinosaure.libelle}\"
                                    class=\" object-contain rounded-lg shadow-[0_4px_12px_rgba(0,0,0,0.1)] p-3 ring-2 ring-[color:var(--color-bleuLune)]\" />
                            </div>
                            <div class=\"flex justify-baseline gap-5 mb-2 w-full text-white font-bold\">
                                <div class=\"bg-bleuLune rounded py-1 px-1.5 flex justify-baseline items-center gap-1\">
                                    <svg fill=\"white\" class=\"size-5\" viewBox=\"0 0 16 16\">
                                        <path d=\"M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069q0-.218-.02-.431c.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a1 1 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.74.74 0 0 0-.375.562c-.024.243.082.48.32.654a2 2 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595m7.173 3.876a.6.6 0 0 1-.098.21l-.044-.025c-.146-.09-.157-.175-.152-.223a.24.24 0 0 1 .117-.173c.049-.027.08-.021.113.012a.2.2 0 0 1 .064.199m-8.999-.65a.5.5 0 1 1-.276-.96A7.6 7.6 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.6 6.6 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0\"/>
                                    </svg>
                                    <span>Régime : \${data.dinosaure.regime}</span>
                                </div>
                                <div class=\"bg-bleuLune rounded py-1 px-1.5 flex justify-baseline items-center gap-1\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"white\" class=\"size-5\">
                                        <path fill-rule=\"evenodd\" d=\"M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z\" clip-rule=\"evenodd\" />
                                    </svg>
                                    <span>Ere : \${data.dinosaure.ere}</span>
                                </div>
                            </div>
                            <div class=\"p-1\">
                                <span class=\"text-bleuGlace\">
                                    \${data.dinosaure.description}
                                </span>
                            </div>
                        </div>
                    `;
                    if (data.nextId.id != null) {
                        nextDino.dataset.idNext = data.nextId.id;
                        valueNextDino.innerHTML = data.nextId.libelle;
                        nextDino.style.display = \"block\";
                    } else {
                        nextDino.style.display = \"none\";
                    }

                    if (data.previousId.id != null) {
                        previousDino.dataset.idPrevious = data.previousId.id;
                        valuePreviousDino.innerHTML = data.previousId.libelle;
                        previousDino.style.display = \"block\";
                    } else {
                        previousDino.style.display = \"none\";
                    }
                } else {
                    formContainer.innerHTML = \"<span class='text-red-500'>Dinosaure non trouvé.</span>\";
                }
            })
        .catch(error => {
            formContainer.innerHTML = \"<span class='text-red-500'>Erreur lors du chargement.</span>\";
        });
        modal.style.display = \"flex\";
}

function fermerShowDisplay() {
    document.getElementById('showDisplay').style.display = \"none\";
}
</script>", "reuse/display/showDisplay.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\display\\showDisplay.html.twig");
    }
}
