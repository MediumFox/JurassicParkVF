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

/* client/dashboard-client.html.twig */
class __TwigTemplate_ef63c7410a9bd1cd6971f43d4a4875d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboard-client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboard-client.html.twig"));

        // line 1
        yield "<div class=\"w-[25%] flex flex-col gap-7 absolute left-10\">
";
        // line 2
        $context["menu"] = [["label" => "Mes billets achetés", "pageId" => 1, "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_remboursement_billet")], ["label" => "Mon profil", "pageId" => 2, "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profile")], ["label" => "Mes demandes de remboursements", "pageId" => 3, "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_remboursement")]];
        // line 7
        yield "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            yield "        <div class=\"px-4 py-2.5 bg-slate-800 text-white rounded-lg shadow-md hover:bg-bleuGlace transition duration-200
            ";
            // line 10
            yield (((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pageId", [], "any", false, false, false, 10)))) ? ("border-l-4 border-bleuGlace translate-x-4") : (""));
            yield "\">
            <a href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 11), "html", null, true);
            yield "\" class=\"block font-semibold tracking-wide\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 11), "html", null, true);
            yield "</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/dashboard-client.html.twig";
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
        return array (  78 => 14,  67 => 11,  63 => 10,  60 => 9,  56 => 8,  53 => 7,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"w-[25%] flex flex-col gap-7 absolute left-10\">
{% set menu = [
    { label: 'Mes billets achetés', pageId: 1, href: path('app_client_remboursement_billet') },
    { label: 'Mon profil', pageId: 2, href: path('app_client_profile') },
    { label: 'Mes demandes de remboursements', pageId: 3, href: path('app_client_remboursement') }
] %}

    {% for item in menu %}
        <div class=\"px-4 py-2.5 bg-slate-800 text-white rounded-lg shadow-md hover:bg-bleuGlace transition duration-200
            {{ page is defined and page == item.pageId ? 'border-l-4 border-bleuGlace translate-x-4' : '' }}\">
            <a href=\"{{item.href }}\" class=\"block font-semibold tracking-wide\">{{ item.label }}</a>
        </div>
    {% endfor %}
</div>", "client/dashboard-client.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\client\\dashboard-client.html.twig");
    }
}
