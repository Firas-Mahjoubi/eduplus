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

/* @WebProfiler/Profiler/header.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/91/91b97d60d9179308bc290f4edb2fd6dd.php
class __TwigTemplate_9a81345f303d793a36f88a0b15da59c3 extends Template
========
class __TwigTemplate_3e144b539bb6506482a5ba6deb7d00e5 extends Template
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/twig/5b/5bc6ca08ae2bc41a945243b22987b3aa.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        yield "<div id=\"header\">
    <h1><a href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_home");
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/symfony.svg");
        yield " Symfony Profiler</a></h1>

    <div class=\"search\">
        <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
            <div class=\"form-row\">
                <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\" aria-label=\"Search on symfony.com\">
                <button type=\"submit\" class=\"visually-hidden\">Search</button>
            </div>
       </form>
    </div>
</div>
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
        return "@WebProfiler/Profiler/header.html.twig";
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
        return array (  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"header\">
    <h1><a href=\"{{ path('_profiler_home') }}\">{{ source('@WebProfiler/Icon/symfony.svg') }} Symfony Profiler</a></h1>

    <div class=\"search\">
        <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
            <div class=\"form-row\">
                <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\" aria-label=\"Search on symfony.com\">
                <button type=\"submit\" class=\"visually-hidden\">Search</button>
            </div>
       </form>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
