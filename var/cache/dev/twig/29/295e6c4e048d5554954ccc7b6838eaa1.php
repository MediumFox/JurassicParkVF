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

/* svg/Régimes/piscivore.svg */
class __TwigTemplate_6ca9410ffccd6508dd64b53ed411d1de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "svg/Régimes/piscivore.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "svg/Régimes/piscivore.svg"));

        // line 1
        yield "<svg id=\"bccece7b-4532-4af0-bba8-b71547686698\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300 300\"><defs><style>.b642d42e-6e86-4dfb-8098-4f51429a4126{fill:#f7931e;}</style></defs><g id=\"eda2dc4a-9274-4690-ae67-9fe4b5c67bbd\" data-name=\"Piscivore\"><path class=\"b642d42e-6e86-4dfb-8098-4f51429a4126\" d=\"M240.69,91.47a88,88,0,0,0,0,98.94C276.18,170.34,300,140.94,300,140.94S276.18,111.54,240.69,91.47Zm11.88,56.25a13.55,13.55,0,1,1,13.55-13.55A13.55,13.55,0,0,1,252.57,147.72Zm-25.84,48.89c-14.39,6.66-30.28,11.24-47,11.85l-30.67,40.88V205.06c-37.61-9.65-68.56-36.59-84.06-52.33-13.07,9.52-30.38,22.35-37.89,28.86C23.48,184.73,0,195.14,0,195.14s6.87-31.28,11.36-40.25c2.29-4.58,15.74-13.95,15.74-13.95S10,127.13,7.57,122.21C3.26,113.58,0,86.74,0,86.74s21.12,8.77,27.1,13.55C33.65,105.53,51.67,119,65.15,129c13-13.16,36.63-34,65.92-46.14l-7.76-6.79L117,50.66s63.51,11.43,78.28,23.43a10.29,10.29,0,0,1,1.17,1.31,134.22,134.22,0,0,1,30.3,9.87,101.14,101.14,0,0,0,0,111.34Z\"/></g></svg>
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
        return "svg/Régimes/piscivore.svg";
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
        return new Source("<svg id=\"bccece7b-4532-4af0-bba8-b71547686698\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300 300\"><defs><style>.b642d42e-6e86-4dfb-8098-4f51429a4126{fill:#f7931e;}</style></defs><g id=\"eda2dc4a-9274-4690-ae67-9fe4b5c67bbd\" data-name=\"Piscivore\"><path class=\"b642d42e-6e86-4dfb-8098-4f51429a4126\" d=\"M240.69,91.47a88,88,0,0,0,0,98.94C276.18,170.34,300,140.94,300,140.94S276.18,111.54,240.69,91.47Zm11.88,56.25a13.55,13.55,0,1,1,13.55-13.55A13.55,13.55,0,0,1,252.57,147.72Zm-25.84,48.89c-14.39,6.66-30.28,11.24-47,11.85l-30.67,40.88V205.06c-37.61-9.65-68.56-36.59-84.06-52.33-13.07,9.52-30.38,22.35-37.89,28.86C23.48,184.73,0,195.14,0,195.14s6.87-31.28,11.36-40.25c2.29-4.58,15.74-13.95,15.74-13.95S10,127.13,7.57,122.21C3.26,113.58,0,86.74,0,86.74s21.12,8.77,27.1,13.55C33.65,105.53,51.67,119,65.15,129c13-13.16,36.63-34,65.92-46.14l-7.76-6.79L117,50.66s63.51,11.43,78.28,23.43a10.29,10.29,0,0,1,1.17,1.31,134.22,134.22,0,0,1,30.3,9.87,101.14,101.14,0,0,0,0,111.34Z\"/></g></svg>
", "svg/Régimes/piscivore.svg", "C:\\laragon\\www\\JurassicPark\\templates\\svg\\Régimes\\piscivore.svg");
    }
}
