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

/* reuse/display/updateDisplay.html.twig */
class __TwigTemplate_9ae4ed8de4b2850db4291d0b8f92592f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/display/updateDisplay.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/display/updateDisplay.html.twig"));

        // line 1
        yield "<div class=\"fixed inset-0 flex justify-center items-center bg-black/30 hidden z-50\" id=\"updateDisplay\" onClick=\"fermerUpdateData()\">
    <div class=\"w-[40%] bg-gray-100 p-5 rounded-lg shadow-lg z-60\" onClick=\"event.stopPropagation()\">
        <h2 class=\"text-xl font-bold mb-4\">Mettre à jour un nouveau ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</h2>
        <div id=\"updateContainer\">
            <p class=\"text-gray-400 text-sm\">Chargement du formulaire...</p>
        </div>
    </div>
</div>

<script>
function mettreAJourData(id) {
    const modal = document.getElementById('updateDisplay');
    const formContainer = document.getElementById('updateContainer');

    modal.style.display = \"flex\";
    const url = \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formRoute"]) || array_key_exists("formRoute", $context) ? $context["formRoute"] : (function () { throw new RuntimeError('Variable "formRoute" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\" + \"?id=\" + encodeURIComponent(id);

    fetch(url)
        .then(response => response.text())
        .then(html => {
            formContainer.innerHTML = html;
            const form = formContainer.querySelector(\"form\");
            if (form) {
                form.addEventListener(\"submit\", function (e) {
                    e.preventDefault();

                    const formData = new FormData(form);

                    fetch(form.action, {
                        method: \"POST\",
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert(\"Erreur : \" + data.errors);
                        }
                    })
                    .catch(() => {
                        alert(\"Erreur réseau.\");
                    });
                });
            }
        })
        .catch(error => {
            formContainer.innerHTML = \"<span class='text-red-500'>Erreur lors du chargement.</span>\";
        });
}

function fermerUpdateData() {
    document.getElementById('updateDisplay').style.display = \"none\";
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
        return "reuse/display/updateDisplay.html.twig";
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
        return array (  68 => 16,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"fixed inset-0 flex justify-center items-center bg-black/30 hidden z-50\" id=\"updateDisplay\" onClick=\"fermerUpdateData()\">
    <div class=\"w-[40%] bg-gray-100 p-5 rounded-lg shadow-lg z-60\" onClick=\"event.stopPropagation()\">
        <h2 class=\"text-xl font-bold mb-4\">Mettre à jour un nouveau {{entity}}</h2>
        <div id=\"updateContainer\">
            <p class=\"text-gray-400 text-sm\">Chargement du formulaire...</p>
        </div>
    </div>
</div>

<script>
function mettreAJourData(id) {
    const modal = document.getElementById('updateDisplay');
    const formContainer = document.getElementById('updateContainer');

    modal.style.display = \"flex\";
    const url = \"{{ formRoute }}\" + \"?id=\" + encodeURIComponent(id);

    fetch(url)
        .then(response => response.text())
        .then(html => {
            formContainer.innerHTML = html;
            const form = formContainer.querySelector(\"form\");
            if (form) {
                form.addEventListener(\"submit\", function (e) {
                    e.preventDefault();

                    const formData = new FormData(form);

                    fetch(form.action, {
                        method: \"POST\",
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert(\"Erreur : \" + data.errors);
                        }
                    })
                    .catch(() => {
                        alert(\"Erreur réseau.\");
                    });
                });
            }
        })
        .catch(error => {
            formContainer.innerHTML = \"<span class='text-red-500'>Erreur lors du chargement.</span>\";
        });
}

function fermerUpdateData() {
    document.getElementById('updateDisplay').style.display = \"none\";
}
</script>", "reuse/display/updateDisplay.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\display\\updateDisplay.html.twig");
    }
}
