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

/* registration/register_client.html.twig */
class __TwigTemplate_5e0c8fb917394a44d8965f3dde6eedc9 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_client.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "S'enregistrer";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 7
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "    <div class=\"flex justify-center items-center min-h-screen w-[100vw] bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-6 uppercase\">Espace d'inscription</h1>
                
                ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "flex flex-col gap-2"]]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'row');
        yield "
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "numeroTelephone", [], "any", false, false, false, 16), 'row');
        yield "
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'row');
        yield "
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'row');
        yield "
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "adressePostal", [], "any", false, false, false, 19), 'row');
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "codePostal", [], "any", false, false, false, 20), 'row');
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), 'row');
        yield "
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "agreeTerms", [], "any", false, false, false, 22), 'row');
        yield "

                    <button type=\"submit\" class=\"bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 hover:bg-bleuGlace cursor-pointer\">S'inscrire</button>
                ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'form_end');
        yield "

                <p class=\"mt-4 text-bleuLune\">
                    Pas encore de compte ? <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-bleuGlace underline\">Se connecter</a>
                </p>
            </div>
            <div class=\"absolute fill-bleuLune\">
                <svg class=\"size-25 rotate-330 absolute right-75 top-11 \" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
                <svg class=\"size-25 rotate-330 absolute right-65 top-28\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
                <svg class=\"size-25 rotate-330 absolute right-55 top-45 \" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
                <svg class=\"size-25 rotate-330 absolute right-45 top-62\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
                <svg class=\"size-25 rotate-330 absolute right-35 top-79\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
            </div>
        </div>

        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
            <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/register.jpg"), "html", null, true);
        yield "\" alt=\"Illustration de connexion\"
            class=\"absolute inset-0 w-full h-full object-cover z-0\">
            <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register_client.html.twig";
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
        return array (  181 => 41,  165 => 28,  159 => 25,  153 => 22,  149 => 21,  145 => 20,  141 => 19,  137 => 18,  133 => 17,  129 => 16,  125 => 15,  121 => 14,  114 => 9,  105 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S'enregistrer{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}
    <div class=\"flex justify-center items-center min-h-screen w-[100vw] bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-6 uppercase\">Espace d'inscription</h1>
                
                {{ form_start(registrationForm, {'attr': {'class': 'flex flex-col gap-2'}}) }}
                    {{ form_row(registrationForm.email) }}
                    {{ form_row(registrationForm.numeroTelephone) }}
                    {{ form_row(registrationForm.nom) }}
                    {{ form_row(registrationForm.prenom) }}
                    {{ form_row(registrationForm.adressePostal) }}
                    {{ form_row(registrationForm.codePostal) }}
                    {{ form_row(registrationForm.plainPassword) }}
                    {{ form_row(registrationForm.agreeTerms) }}

                    <button type=\"submit\" class=\"bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 hover:bg-bleuGlace cursor-pointer\">S'inscrire</button>
                {{ form_end(registrationForm) }}

                <p class=\"mt-4 text-bleuLune\">
                    Pas encore de compte ? <a href=\"{{ path('app_login') }}\" class=\"text-bleuGlace underline\">Se connecter</a>
                </p>
            </div>
            <div class=\"absolute fill-bleuLune\">
                <svg class=\"size-25 rotate-330 absolute right-75 top-11 \" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
                <svg class=\"size-25 rotate-330 absolute right-65 top-28\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
                <svg class=\"size-25 rotate-330 absolute right-55 top-45 \" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
                <svg class=\"size-25 rotate-330 absolute right-45 top-62\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
                <svg class=\"size-25 rotate-330 absolute right-35 top-79\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 125\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><path d=\"M99.154,60.154c-0.307,6.914-7.924,11.564-9.791,18.098c-1.846,6.451-2.76,16.438-11.053,16.036  c-3.406-0.167-7.979,1.371-10.479-1.433c-2.151-2.41-2.396-6.486-3.437-9.387c-1.188-3.306-0.91-6.867-2.75-10.039  c-0.666-1.152-2.576-2.843-2.816-4.103c0,0-1.559-6.017-2.223-7.347c-0.871-1.75-1.682-2.846-1.437-5.033  c0.196-1.764,1.913-3.271,2.071-4.576c0.236-1.949-2.266-2.804-1.803-4.782c2.041-0.363,2.779,0.679,3.916,1.976  c0.676,0.772,0.401,1.024,1.316,1.667c0.504,0.353,1.296,0.125,1.891,0.619c1.979,1.643,2.533,5.985,3.145,8.308  c0.423,1.604,1.277,3.159,1.615,4.806c0.377,1.842,0.188,3.375,1.547,4.873c4.021,4.434,4.174-2.429,4.174-5.104  c0-4.029-2.021-19.623,3.859-19.505c0.031-1.577-1.356-7.299,1.873-6.613c2.134,0.453,1.635,5.014,0.939,6.374  c5.487,0.49,3.229,14.105,2.73,17.695c-0.256,1.858-3.047,8.285,0.904,8.463c2.229,0.104,4.101-5.071,5.213-6.687  c0.873-1.269,1.654-2.526,2.744-3.666c1.34-1.403,3.297-1.724,4.418-2.927c0.621-0.665,1.48-4.09,3.271-2.594  C99.384,55.604,99.167,59.9,99.154,60.154z M1.75,31.169c1.834,6.672,10.292,9.52,13.561,15.475  c3.229,5.883,6.333,15.418,14.331,13.188c3.286-0.918,8.086-0.432,9.904-3.721c1.562-2.825,0.896-6.854,1.27-9.913  c0.424-3.487-0.634-6.898,0.454-10.399c0.395-1.271,1.884-3.341,1.839-4.623c0,0,0.187-6.214,0.538-7.658  c0.462-1.898,1.009-3.147,0.286-5.226c-0.583-1.675-2.592-2.767-3.036-4.003c-0.662-1.847,1.587-3.236,0.699-5.062  c-2.07,0.098-2.561,1.278-3.381,2.794c-0.488,0.903-0.166,1.088-0.916,1.917c-0.413,0.456-1.235,0.409-1.706,1.022  c-1.564,2.041-1.144,6.4-1.225,8.799c-0.057,1.657-0.545,3.363-0.509,5.043c0.04,1.878,0.565,3.333-0.428,5.095  c-2.94,5.213-4.609-1.444-5.202-4.05c-0.893-3.93-2.378-19.582-8.087-18.165c-0.379-1.532-0.294-7.419-3.292-6.035  c-1.981,0.916-0.482,5.252,0.496,6.424c-5.242,1.694-0.021,14.47,1.259,17.861c0.662,1.755,4.809,7.403,0.994,8.454  c-2.151,0.592-5.122-4.04-6.564-5.367c-1.133-1.042-2.174-2.097-3.488-2.966c-1.62-1.072-3.598-0.95-4.958-1.875  c-0.752-0.51-2.35-3.659-3.763-1.804C0.518,26.781,1.683,30.924,1.75,31.169z\"/><text x=\"0\" y=\"115\" fill=\"white\" font-size=\"5px\" font-weight=\"bold\" font-family=\"'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif\"></svg>
            </div>
        </div>

        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
            <img src=\"{{ asset('img/register.jpg') }}\" alt=\"Illustration de connexion\"
            class=\"absolute inset-0 w-full h-full object-cover z-0\">
            <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
    </div>
{% endblock %}
", "registration/register_client.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\registration\\register_client.html.twig");
    }
}
