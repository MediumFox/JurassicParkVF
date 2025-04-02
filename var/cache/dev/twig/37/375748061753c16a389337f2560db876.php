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

/* reuse/_form.html.twig */
class __TwigTemplate_6033a52a2028d804f1b7c69f92503691 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/_form.html.twig"));

        // line 1
        yield "
";
        // line 2
        $context["route"] = ((("app_" . (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })())) . "_") . ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 2, $this->source); })()) == "Mettre à jour")) ? ("edit") : ("new")));
        // line 3
        yield "
<form id=\"form\" action=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 4, $this->source); })()), ((array_key_exists("id", $context)) ? (["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })())]) : ([]))), "html", null, true);
        yield "\" method=\"post\" data-turbo=\"false\">
    <div id=\"form-errors\" class=\"text-red-500 text-sm mb-2\"></div>

    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'widget');
        yield "

    <button type=\"submit\" id=\"btnSubmit\" class=\"bg-bleuLune text-white px-4 py-2 rounded w-full mt-4 cursor-pointer\">
        ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "
    </button>
</form>

<script>
document.getElementById(\"form\").addEventListener(\"submit\", function(e) {
    e.preventDefault();
    let btnSubmit = document.getElementById('btnSubmit');
    btnSubmit.disabled = true;
    const form = e.target;
    const data = new FormData(form);
    const errors = document.getElementById(\"form-errors\");

    fetch(form.action, {
        method: \"POST\",
        body: data,
        headers: {
            \"X-Requested-With\": \"XMLHttpRequest\"
        }
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            errors.innerHTML = data.errors || \"Erreur de validation.\";
        }
    })
    .catch(() => {
        errors.innerHTML = \"Erreur technique.\";
    });
});
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
        return "reuse/_form.html.twig";
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
        return array (  68 => 10,  62 => 7,  56 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% set route = 'app_' ~ entity ~ '_' ~ (type == 'Mettre à jour' ? 'edit' : 'new') %}

<form id=\"form\" action=\"{{ path(route, id is defined ? {'id': id} : {}) }}\" method=\"post\" data-turbo=\"false\">
    <div id=\"form-errors\" class=\"text-red-500 text-sm mb-2\"></div>

    {{ form_widget(form) }}

    <button type=\"submit\" id=\"btnSubmit\" class=\"bg-bleuLune text-white px-4 py-2 rounded w-full mt-4 cursor-pointer\">
        {{ type }}
    </button>
</form>

<script>
document.getElementById(\"form\").addEventListener(\"submit\", function(e) {
    e.preventDefault();
    let btnSubmit = document.getElementById('btnSubmit');
    btnSubmit.disabled = true;
    const form = e.target;
    const data = new FormData(form);
    const errors = document.getElementById(\"form-errors\");

    fetch(form.action, {
        method: \"POST\",
        body: data,
        headers: {
            \"X-Requested-With\": \"XMLHttpRequest\"
        }
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            errors.innerHTML = data.errors || \"Erreur de validation.\";
        }
    })
    .catch(() => {
        errors.innerHTML = \"Erreur technique.\";
    });
});
</script>", "reuse/_form.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\_form.html.twig");
    }
}
