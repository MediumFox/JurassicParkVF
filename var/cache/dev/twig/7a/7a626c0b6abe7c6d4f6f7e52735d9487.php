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

/* registration/verify_otp.html.twig */
class __TwigTemplate_ffca54df24fee95125d7121836f8e0f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/verify_otp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/verify_otp.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/verify_otp.html.twig", 1);
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

        yield "Connexion";
        
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
        yield "    <div class=\"flex justify-center items-center min-h-screen w-[100vw] bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-2 uppercase\">Vérifions que c'est bien vous.</h1>
                <span class=\"text-bleuGlace text-center mb-8\">Un code vous a été envoyé à l'adresse suivante : ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "html", null, true);
        yield ", notez le ci-dessous pour valider la création de votre compte.</span>
                
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\">
                            ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "                <form method=\"post\" class=\"w-[90%] flex flex-col items-center\" id=\"form\">
                    <div class=\"w-[65%] mb-5 flex justify-between\">
                        <input type=\"text\" name=\"v1\" id=\"otp1\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v2\" id=\"otp2\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v3\" id=\"otp3\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v4\" id=\"otp4\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v5\" id=\"otp5\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v6\" id=\"otp6\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                    </div>
                    <button type=\"submit\" id=\"btnSubmit\" disabled class=\" bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 cursor-pointer\">Valider</button>
                </form>

                <p class=\"mt-4 text-bleuLune\">
                    Vous n'avez rien reçu ? <a onClick=\"resendOtp()\" id=\"linkResend\" class=\"text-bleuGlace underline\" disabled>Nouveau code dans <span id=\"timerMail\">60</span> s</a>
                </p>
            </div>
        </div>
        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
            <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/register.jpg"), "html", null, true);
        yield "\" alt=\"Illustration de connexion\"
            class=\"absolute inset-0 w-full h-full object-cover z-0\">
            <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
        <div id=\"toast\" class=\"fixed top-[15%] right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg opacity-0 transition-opacity duration-500\">
            Nouveau code envoyé !
        </div>
    </div>

    <script>
        function isNumber(value) {
            return /^\\d\$/.test(value); 
        }

        function showToast(message = \"Nouveau code envoyé !\") {
            const toast = document.getElementById(\"toast\");
            toast.textContent = message;
            toast.classList.remove(\"opacity-0\");
            toast.classList.add(\"opacity-100\");

            setTimeout(() => {
                toast.classList.add(\"opacity-0\");
                toast.classList.remove(\"opacity-100\");
            }, 3000);
        }

        function resendOtp() {
            const url = \"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resend_otp");
        yield "\";

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(\"Réponse du serveur :\", data);

                    if (!data.success) {
                        showToast(`Erreur : \${data.message || \"Échec de l'envoi du code\"}`);
                        return;
                    }

                    showToast(data.message || \"Nouveau code envoyé !\");
                })
                .catch(error => {
                    console.error(\"Erreur fetch:\", error);
                    showToast(\"Erreur technique\");
                });

            count = 60;
            linkResend.disabled = true;
            linkResend.style.cursor = \"default\";
            counter.innerText = count;
        }

        let count = 60;
        const counter = document.getElementById(\"timerMail\");
        const form = document.getElementById(\"form\");
        const linkResend = document.getElementById(\"linkResend\");
        const btnSubmit = document.getElementById(\"btnSubmit\");
        const inputOtp = document.querySelectorAll(\".valeur-opt\");
        btnSubmit.style.opacity = '0.7';
        setInterval(() => {
            if(count != 0){
                count -=1;
                counter.innerText = count;
            }

            if(count === 0){
                linkResend.disabled = false;
                linkResend.style.cursor = \"pointer\";
                linkResend.style.fontWeight = \"bold\";
            }
        }, 1000);

        inputOtp.forEach((element, index) => {
            element.addEventListener('input', (event) => {
                const value = event.target.value;

                if (!isNumber(value)) {
                    event.stopPropagation();
                    event.target.value = '';
                    return;
                }

                if (value.length === 1 && inputOtp[index + 1]) {
                    inputOtp[index + 1].focus();
                }

                if (value.length === 1 && !inputOtp[index + 1]) {
                    btnSubmit.style.opacity = \"1\";
                    btnSubmit.disabled = false;
                    form.submit(); 
                }
            });
        });

    </script>
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
        return "registration/verify_otp.html.twig";
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
        return array (  190 => 64,  160 => 37,  140 => 19,  134 => 18,  125 => 15,  120 => 14,  115 => 13,  111 => 12,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
    <div class=\"flex justify-center items-center min-h-screen w-[100vw] bg-gris overflow-hidden\">
        <div class=\"bg-white shadow-lg rounded-lg flex w-[45%] items-center justify-center max-w-6xl h-screen relative\">
            <div class=\"w-[70%] flex flex-col justify-center items-center p-8 h-full\">
                <h1 class=\"text-2xl font-bold text-bleuLune text-center mb-2 uppercase\">Vérifions que c'est bien vous.</h1>
                <span class=\"text-bleuGlace text-center mb-8\">Un code vous a été envoyé à l'adresse suivante : {{client.email}}, notez le ci-dessous pour valider la création de votre compte.</span>
                
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\">
                            {{ message }}
                        </div>
                    {% endfor %}
                {% endfor %}
                <form method=\"post\" class=\"w-[90%] flex flex-col items-center\" id=\"form\">
                    <div class=\"w-[65%] mb-5 flex justify-between\">
                        <input type=\"text\" name=\"v1\" id=\"otp1\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v2\" id=\"otp2\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v3\" id=\"otp3\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v4\" id=\"otp4\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v5\" id=\"otp5\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                        <input type=\"text\" name=\"v6\" id=\"otp6\" class=\"valeur-opt rounded h-[2.5vw] w-[2vw] border border-bleuGlace p-2 focus:outline-none focus:ring-2 focus:ring-bleuClair text-center\" required maxlength=\"1\" pattern=\"\\d\" inputmode=\"numeric\">
                    </div>
                    <button type=\"submit\" id=\"btnSubmit\" disabled class=\" bg-bleuLune text-white font-semibold px-4 py-2 rounded w-full transition duration-300 cursor-pointer\">Valider</button>
                </form>

                <p class=\"mt-4 text-bleuLune\">
                    Vous n'avez rien reçu ? <a onClick=\"resendOtp()\" id=\"linkResend\" class=\"text-bleuGlace underline\" disabled>Nouveau code dans <span id=\"timerMail\">60</span> s</a>
                </p>
            </div>
        </div>
        <div class=\"w-[55%] h-[100vh] relative flex items-center justify-center\">
            <img src=\"{{ asset('img/register.jpg') }}\" alt=\"Illustration de connexion\"
            class=\"absolute inset-0 w-full h-full object-cover z-0\">
            <div class=\"absolute inset-0 z-10 bg-gradient-to-br from-gris via-bleuGlace to-bleuLune opacity-50\"></div>
        </div>
        <div id=\"toast\" class=\"fixed top-[15%] right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg opacity-0 transition-opacity duration-500\">
            Nouveau code envoyé !
        </div>
    </div>

    <script>
        function isNumber(value) {
            return /^\\d\$/.test(value); 
        }

        function showToast(message = \"Nouveau code envoyé !\") {
            const toast = document.getElementById(\"toast\");
            toast.textContent = message;
            toast.classList.remove(\"opacity-0\");
            toast.classList.add(\"opacity-100\");

            setTimeout(() => {
                toast.classList.add(\"opacity-0\");
                toast.classList.remove(\"opacity-100\");
            }, 3000);
        }

        function resendOtp() {
            const url = \"{{ path('app_resend_otp') }}\";

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(\"Réponse du serveur :\", data);

                    if (!data.success) {
                        showToast(`Erreur : \${data.message || \"Échec de l'envoi du code\"}`);
                        return;
                    }

                    showToast(data.message || \"Nouveau code envoyé !\");
                })
                .catch(error => {
                    console.error(\"Erreur fetch:\", error);
                    showToast(\"Erreur technique\");
                });

            count = 60;
            linkResend.disabled = true;
            linkResend.style.cursor = \"default\";
            counter.innerText = count;
        }

        let count = 60;
        const counter = document.getElementById(\"timerMail\");
        const form = document.getElementById(\"form\");
        const linkResend = document.getElementById(\"linkResend\");
        const btnSubmit = document.getElementById(\"btnSubmit\");
        const inputOtp = document.querySelectorAll(\".valeur-opt\");
        btnSubmit.style.opacity = '0.7';
        setInterval(() => {
            if(count != 0){
                count -=1;
                counter.innerText = count;
            }

            if(count === 0){
                linkResend.disabled = false;
                linkResend.style.cursor = \"pointer\";
                linkResend.style.fontWeight = \"bold\";
            }
        }, 1000);

        inputOtp.forEach((element, index) => {
            element.addEventListener('input', (event) => {
                const value = event.target.value;

                if (!isNumber(value)) {
                    event.stopPropagation();
                    event.target.value = '';
                    return;
                }

                if (value.length === 1 && inputOtp[index + 1]) {
                    inputOtp[index + 1].focus();
                }

                if (value.length === 1 && !inputOtp[index + 1]) {
                    btnSubmit.style.opacity = \"1\";
                    btnSubmit.disabled = false;
                    form.submit(); 
                }
            });
        });

    </script>
{% endblock %}

", "registration/verify_otp.html.twig", "C:\\laragon\\www\\JurassicPark\\templates\\registration\\verify_otp.html.twig");
    }
}
