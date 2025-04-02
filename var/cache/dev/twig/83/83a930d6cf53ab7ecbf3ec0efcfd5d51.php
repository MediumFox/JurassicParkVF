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

/* svg/Régimes/carnivore.svg */
class __TwigTemplate_d1b28dd64aa315fc53079015b753fc9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "svg/Régimes/carnivore.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "svg/Régimes/carnivore.svg"));

        // line 1
        yield "<svg id=\"be6d35b0-5793-45c3-a1cb-cbe2801018cb\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300 300\"><defs><style>.a0ced4fa-480b-4296-87de-ecad241100be{fill:#b8102b;}.f6fe6205-734f-44c4-856a-2a3b505cb02a{fill:#eaeaea;}</style></defs><g id=\"bbc74ab7-55b7-46fd-b1b3-23867a67906e\" data-name=\"Carnevore\"><path class=\"a0ced4fa-480b-4296-87de-ecad241100be\" d=\"M58.26,45.69A104.34,104.34,0,0,0,28.38,80.14h0l-.19.37c-.05.09-.1.18-.14.27C14.57,105.62,3,153.84,46.26,197.25c54.52,53.54,130.12,96.43,219.52,52,38.14-20.73,1.66-49.71-17.93-53.76S207,174.35,203,112.07,144.24-.4,58.26,45.69Z\"/><path class=\"f6fe6205-734f-44c4-856a-2a3b505cb02a\" d=\"M125,82.24a43,43,0,1,0,37.32,48A43,43,0,0,0,125,82.24Zm-1.82-51.42a69.86,69.86,0,0,1,34,8.32c23.72,13,39,40.45,40.79,73.42,1.15,20.8,4.65,84.09,50.06,93.66,11,2.32,30.91,16.09,29.31,28.84-.83,6.66-7.78,11.93-13.25,15.05-24.25,12.65-48.79,19.07-72.93,19.07a145.68,145.68,0,0,1-45.76-7.56C113.87,251.2,82.05,229.71,51,197.94,29,174.82,19.63,148.17,23.32,118.73a106.33,106.33,0,0,1,11.36-36l.5-.93.41-.77,1.3-2.43,1.66-2.7A103.12,103.12,0,0,1,62.82,48.82c21.06-11.78,41.92-18,60.37-18m0-22.56c-22.45,0-46.9,7.09-71.87,21.14l-1,.58-.93.72a125.61,125.61,0,0,0-30,33.37h-.28l-3.38,6.33-.44.82-.47.88-.26.51-.16.3a128.36,128.36,0,0,0-13.43,43C-2.21,141,1.1,178.32,34.7,213.52c33.8,34.61,68.63,58,103.62,69.52a167.66,167.66,0,0,0,52.84,8.7c27.87,0,55.75-7.22,83.37-21.63l.26-.14.26-.15c18.4-10.49,23.57-23.17,24.67-32,3.56-28.41-28.23-49.75-47-53.71S223,155.66,220.49,111.31c-2.25-40.8-21.87-75.17-52.46-91.95a92.3,92.3,0,0,0-44.84-11.1Z\"/></g></svg>
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
        return "svg/Régimes/carnivore.svg";
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
        return new Source("<svg id=\"be6d35b0-5793-45c3-a1cb-cbe2801018cb\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300 300\"><defs><style>.a0ced4fa-480b-4296-87de-ecad241100be{fill:#b8102b;}.f6fe6205-734f-44c4-856a-2a3b505cb02a{fill:#eaeaea;}</style></defs><g id=\"bbc74ab7-55b7-46fd-b1b3-23867a67906e\" data-name=\"Carnevore\"><path class=\"a0ced4fa-480b-4296-87de-ecad241100be\" d=\"M58.26,45.69A104.34,104.34,0,0,0,28.38,80.14h0l-.19.37c-.05.09-.1.18-.14.27C14.57,105.62,3,153.84,46.26,197.25c54.52,53.54,130.12,96.43,219.52,52,38.14-20.73,1.66-49.71-17.93-53.76S207,174.35,203,112.07,144.24-.4,58.26,45.69Z\"/><path class=\"f6fe6205-734f-44c4-856a-2a3b505cb02a\" d=\"M125,82.24a43,43,0,1,0,37.32,48A43,43,0,0,0,125,82.24Zm-1.82-51.42a69.86,69.86,0,0,1,34,8.32c23.72,13,39,40.45,40.79,73.42,1.15,20.8,4.65,84.09,50.06,93.66,11,2.32,30.91,16.09,29.31,28.84-.83,6.66-7.78,11.93-13.25,15.05-24.25,12.65-48.79,19.07-72.93,19.07a145.68,145.68,0,0,1-45.76-7.56C113.87,251.2,82.05,229.71,51,197.94,29,174.82,19.63,148.17,23.32,118.73a106.33,106.33,0,0,1,11.36-36l.5-.93.41-.77,1.3-2.43,1.66-2.7A103.12,103.12,0,0,1,62.82,48.82c21.06-11.78,41.92-18,60.37-18m0-22.56c-22.45,0-46.9,7.09-71.87,21.14l-1,.58-.93.72a125.61,125.61,0,0,0-30,33.37h-.28l-3.38,6.33-.44.82-.47.88-.26.51-.16.3a128.36,128.36,0,0,0-13.43,43C-2.21,141,1.1,178.32,34.7,213.52c33.8,34.61,68.63,58,103.62,69.52a167.66,167.66,0,0,0,52.84,8.7c27.87,0,55.75-7.22,83.37-21.63l.26-.14.26-.15c18.4-10.49,23.57-23.17,24.67-32,3.56-28.41-28.23-49.75-47-53.71S223,155.66,220.49,111.31c-2.25-40.8-21.87-75.17-52.46-91.95a92.3,92.3,0,0,0-44.84-11.1Z\"/></g></svg>
", "svg/Régimes/carnivore.svg", "C:\\laragon\\www\\JurassicPark\\templates\\svg\\Régimes\\carnivore.svg");
    }
}
