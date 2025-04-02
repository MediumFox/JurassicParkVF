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

/* reuse/footer.html.twig */
class __TwigTemplate_ef12838ff64c5a044f5671482dbfca07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/footer.html.twig"));

        // line 1
        yield "<footer class=\"p-5 w-full h-[45vh] bg-slate-900 flex justify-between flex-col\">
    <div class=\"h-[75%]\">
    </div>
    <div class=\"w-full border-t-2 border-white h-fit text-white\">
        <div class=\"py-1 flex justify-center items-center gap-2.5 pt-2.5 font-bold underline\">
            <a href=\"\" class=\"transition transform translate-y-0 hover:translate-y-[2px]\">Cookies</a>
            <a href=\"\" class=\"transition transform translate-y-0 hover:translate-y-[2px]\">CGU</a>
            <a href=\"\" class=\"transition transform translate-y-0 hover:translate-y-[2px]\">Mentions légales</a>
        </div>
        <div class=\"flex justify-between items-center \">
            <span>Jurassic park - Made By Group G6</span>
            <span>Version finale - Avril 2025</span>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reuse/footer.html.twig";
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
        return new Source("<footer class=\"p-5 w-full h-[45vh] bg-slate-900 flex justify-between flex-col\">
    <div class=\"h-[75%]\">
    </div>
    <div class=\"w-full border-t-2 border-white h-fit text-white\">
        <div class=\"py-1 flex justify-center items-center gap-2.5 pt-2.5 font-bold underline\">
            <a href=\"\" class=\"transition transform translate-y-0 hover:translate-y-[2px]\">Cookies</a>
            <a href=\"\" class=\"transition transform translate-y-0 hover:translate-y-[2px]\">CGU</a>
            <a href=\"\" class=\"transition transform translate-y-0 hover:translate-y-[2px]\">Mentions légales</a>
        </div>
        <div class=\"flex justify-between items-center \">
            <span>Jurassic park - Made By Group G6</span>
            <span>Version finale - Avril 2025</span>
        </div>
    </div>
</footer>", "reuse/footer.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\footer.html.twig");
    }
}
