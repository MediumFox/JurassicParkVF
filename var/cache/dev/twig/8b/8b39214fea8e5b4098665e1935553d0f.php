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

/* reuse/hero.html.twig */
class __TwigTemplate_6cab5c7523561c1ed7fbf385af5ac3c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/hero.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/hero.html.twig"));

        // line 1
        yield "<div class=\"relative flex justify-end flex-col items-center h-[55vh] bg-cover bg-center\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/test.jpg"), "html", null, true);
        yield "');\">
    <div class=\"absolute inset-0 z-10 bg-black opacity-50\"></div>

    <div class=\"absolute top-[30%] z-50 text-gris text-center flex flex-col items-center space-y-4 px-4\">
        <h1 class=\"text-5xl font-extrabold drop-shadow-lg\"> ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1>
        <p class=\"text-lg max-w-xl opacity-80\">
            ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7), "html", null, true);
        yield "
        </p>
        ";
        // line 9
        if ((array_key_exists("hero", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 9, $this->source); })()), "enabled", [], "any", false, false, false, 9))) {
            // line 10
            yield "            <a href=\"/\" class=\"bg-bleuLune hover:bg-slate-900 text-gris font-semibold py-2 px-6 rounded-lg shadow-lg transition duration-300 cursor-pointer\">
                Réserver votre visite
            </a>
        ";
        }
        // line 14
        yield "    </div>
    <svg class=\"absolute bottom-0 left-0 w-full h-[180px] z-20\" viewBox=\"0 0 1440 320\" preserveAspectRatio=\"none\">
        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,288L60,277.3C120,267,240,245,360,250.7C480,256,600,288,720,272C840,256,960,192,1080,181.3C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z\"></path>
    </svg>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reuse/hero.html.twig";
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
        return array (  74 => 14,  68 => 10,  66 => 9,  61 => 7,  56 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"relative flex justify-end flex-col items-center h-[55vh] bg-cover bg-center\" style=\"background-image: url('{{ asset('img/test.jpg') }}');\">
    <div class=\"absolute inset-0 z-10 bg-black opacity-50\"></div>

    <div class=\"absolute top-[30%] z-50 text-gris text-center flex flex-col items-center space-y-4 px-4\">
        <h1 class=\"text-5xl font-extrabold drop-shadow-lg\"> {{hero.title}}</h1>
        <p class=\"text-lg max-w-xl opacity-80\">
            {{hero.description}}
        </p>
        {% if hero is defined and hero.enabled %}
            <a href=\"/\" class=\"bg-bleuLune hover:bg-slate-900 text-gris font-semibold py-2 px-6 rounded-lg shadow-lg transition duration-300 cursor-pointer\">
                Réserver votre visite
            </a>
        {% endif %}
    </div>
    <svg class=\"absolute bottom-0 left-0 w-full h-[180px] z-20\" viewBox=\"0 0 1440 320\" preserveAspectRatio=\"none\">
        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,288L60,277.3C120,267,240,245,360,250.7C480,256,600,288,720,272C840,256,960,192,1080,181.3C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z\"></path>
    </svg>
</div>", "reuse/hero.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\reuse\\hero.html.twig");
    }
}
