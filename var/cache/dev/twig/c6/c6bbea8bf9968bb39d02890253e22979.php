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

/* svg/Régimes/herbivore.svg */
class __TwigTemplate_8e2ac108e88b602a56cd65b923eec342 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "svg/Régimes/herbivore.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "svg/Régimes/herbivore.svg"));

        // line 1
        yield "<svg id=\"aed9a2dc-1f88-4b69-8f8e-480bd6d94e51\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300 300\"><defs><style>.ed640c8d-1025-4382-9d44-5a98e4621f9a{fill:#2eb873;}</style></defs><g id=\"aa337e14-167b-428e-a546-943e463ab112\" data-name=\"Herbivore\"><path class=\"ed640c8d-1025-4382-9d44-5a98e4621f9a\" d=\"M74.22,87.41s106.88,105.69,224.21,175c4.24-50.71,3.84-149.62-53.69-207.15C165-24.51,5.56,5.56,5.56,5.56S-24.52,165,55.26,244.75c53.42,53.42,142.49,57.57,195.55,54.49C150.93,228.67,74.22,87.41,74.22,87.41Z\"/></g></svg>
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
        return "svg/Régimes/herbivore.svg";
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
        return new Source("<svg id=\"aed9a2dc-1f88-4b69-8f8e-480bd6d94e51\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300 300\"><defs><style>.ed640c8d-1025-4382-9d44-5a98e4621f9a{fill:#2eb873;}</style></defs><g id=\"aa337e14-167b-428e-a546-943e463ab112\" data-name=\"Herbivore\"><path class=\"ed640c8d-1025-4382-9d44-5a98e4621f9a\" d=\"M74.22,87.41s106.88,105.69,224.21,175c4.24-50.71,3.84-149.62-53.69-207.15C165-24.51,5.56,5.56,5.56,5.56S-24.52,165,55.26,244.75c53.42,53.42,142.49,57.57,195.55,54.49C150.93,228.67,74.22,87.41,74.22,87.41Z\"/></g></svg>
", "svg/Régimes/herbivore.svg", "C:\\laragon\\www\\JurassicPark\\templates\\svg\\Régimes\\herbivore.svg");
    }
}
