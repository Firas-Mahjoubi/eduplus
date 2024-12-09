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

/* g_ressources/show.html.twig */
class __TwigTemplate_e6dec8650b66cda166f8ff47f2266035 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_ressources/show.html.twig", 1);
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

        yield "Liste des Ressources";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<!-- Blog Start -->

<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">

            <!-- Search Form Start -->
            <div class=\"mb-5 wow slideInUp\" data-wow-delay=\"0.1s\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"search-input\" class=\"form-control p-3\" placeholder=\"Search for a resource...\">
                    <button class=\"btn btn-primary px-4\"><i class=\"bi bi-search\"></i></button>
                </div>
            </div>
            <!-- Search Form End -->

            <!-- Blog List Start -->
            <div class=\"col-8\" id=\"ressources-list\">
                <div class=\"row g-4\" id=\"resources-container\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 26
            yield "                        <div class=\"col-md-5 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26) * 0.1), "html", null, true);
            yield "s\">
                            <div class=\"blog-item bg-light rounded shadow-sm overflow-hidden\">
                                <div class=\"blog-img position-relative overflow-hidden\">
                                    <img class=\"img-fluid\" src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/ressources/" . CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "image", [], "any", false, false, false, 29))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "nomRessource", [], "any", false, false, false, 29), "html", null, true);
            yield "\" style=\"width: 100%; height: 200px; object-fit: cover;\">
                                    <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "nomRessource", [], "any", false, false, false, 30), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"p-4\">
                                    <div class=\"d-flex mb-3\">
                                        <small class=\"me-3 text-muted\"><i class=\"far fa-user text-primary me-2\"></i> ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "nomRessource", [], "any", false, false, false, 34), "html", null, true);
            yield "</small>
                                        <small class=\"text-muted\"><i class=\"far fa-calendar-alt text-primary me-2\"></i>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "dateCreationRessource", [], "any", false, false, false, 35), "d M, Y"), "html", null, true);
            yield "</small>
                                    </div>
                                    <h4 class=\"mb-3\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "nomRessource", [], "any", false, false, false, 37), "html", null, true);
            yield "</h4>
                                    <p>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "descriptionRessource", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                                    <form method=\"get\" action=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_ressource", ["ressourceId" => CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-primary text-uppercase\">
                                            faire une demande <i class=\"bi bi-arrow-right\"></i>
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 49
            yield "                        <p>Aucune ressource trouvée.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ressource'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                </div>
            </div>
            <!-- Blog List End -->
            <div class=\"col-12 wow slideInUp\" data-wow-delay=\"0.1s\" style=\"visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;\">
                <nav aria-label=\"Page navigation\">
                  <ul class=\"pagination pagination-lg m-0\">
                    <li class=\"page-item disabled\">
                      <a class=\"page-link rounded-0\" href=\"#\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\"><i class=\"bi bi-arrow-left\"></i></span>
                      </a>
                    </li>
                    <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                    <li class=\"page-item\">
                      <a class=\"page-link rounded-0\" href=\"#\" aria-label=\"Next\">
                        <span aria-hidden=\"true\"><i class=\"bi bi-arrow-right\"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
        
    </div>
    
</div>
<!-- Blog End -->

";
        // line 80
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        yield "<script>
    document.getElementById('search-input').addEventListener('input', function () {
        const query = this.value;

        fetch(`/ressources/live-search?q=\${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('resources-container');
                container.innerHTML = '';

                if (data.length === 0) {
                    container.innerHTML = '<p>Aucune ressource trouvée.</p>';
                } else {
                    data.forEach(resource => {
                        const html = `
                            <div class=\"col-md-6 wow slideInUp\" data-wow-delay=\"0.1s\">
                                <div class=\"blog-item bg-light rounded shadow-sm overflow-hidden\">
                                    <div class=\"blog-img position-relative overflow-hidden\">
                                        <img class=\"img-fluid\" src=\"/uploads/ressources/\${resource.image}\" alt=\"\${resource.nomRessource}\" style=\"width: 100%; height: 200px; object-fit: cover;\">
                                        <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">\${resource.nomRessource}</a>
                                    </div>
                                    <div class=\"p-4\">
                                        <div class=\"d-flex mb-3\">
                                            <small class=\"me-3 text-muted\"><i class=\"far fa-user text-primary me-2\"></i>\${resource.nomRessource}</small>
                                            <small class=\"text-muted\"><i class=\"far fa-calendar-alt text-primary me-2\"></i>\${resource.dateCreationRessource}</small>
                                        </div>
                                        <h4 class=\"mb-3\">\${resource.nomRessource}</h4>
                                        <p>\${resource.descriptionRessource}</p>
                                        <a class=\"text-uppercase text-primary\" href=\"/ressources/\${resource.id}/demande\">
                                            faire une demande <i class=\"bi bi-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                        container.insertAdjacentHTML('beforeend', html);
                    });
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
        return "g_ressources/show.html.twig";
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
        return array (  260 => 81,  237 => 80,  206 => 51,  199 => 49,  176 => 39,  172 => 38,  168 => 37,  163 => 35,  159 => 34,  152 => 30,  146 => 29,  139 => 26,  121 => 25,  101 => 7,  88 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Ressources{% endblock %}


{% block body %}
<!-- Blog Start -->

<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">

            <!-- Search Form Start -->
            <div class=\"mb-5 wow slideInUp\" data-wow-delay=\"0.1s\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"search-input\" class=\"form-control p-3\" placeholder=\"Search for a resource...\">
                    <button class=\"btn btn-primary px-4\"><i class=\"bi bi-search\"></i></button>
                </div>
            </div>
            <!-- Search Form End -->

            <!-- Blog List Start -->
            <div class=\"col-8\" id=\"ressources-list\">
                <div class=\"row g-4\" id=\"resources-container\">
                    {% for ressource in ressources %}
                        <div class=\"col-md-5 wow slideInUp\" data-wow-delay=\"{{ loop.index * 0.1 }}s\">
                            <div class=\"blog-item bg-light rounded shadow-sm overflow-hidden\">
                                <div class=\"blog-img position-relative overflow-hidden\">
                                    <img class=\"img-fluid\" src=\"{{ asset('uploads/ressources/' ~ ressource.image) }}\" alt=\"{{ ressource.nomRessource }}\" style=\"width: 100%; height: 200px; object-fit: cover;\">
                                    <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">{{ ressource.nomRessource }}</a>
                                </div>
                                <div class=\"p-4\">
                                    <div class=\"d-flex mb-3\">
                                        <small class=\"me-3 text-muted\"><i class=\"far fa-user text-primary me-2\"></i> {{ ressource.nomRessource }}</small>
                                        <small class=\"text-muted\"><i class=\"far fa-calendar-alt text-primary me-2\"></i>{{ ressource.dateCreationRessource|date('d M, Y') }}</small>
                                    </div>
                                    <h4 class=\"mb-3\">{{ ressource.nomRessource }}</h4>
                                    <p>{{ ressource.descriptionRessource }}</p>
                                    <form method=\"get\" action=\"{{ path('demande_ressource', { 'ressourceId': ressource.id }) }}\">
                                        <button type=\"submit\" class=\"btn btn-primary text-uppercase\">
                                            faire une demande <i class=\"bi bi-arrow-right\"></i>
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <p>Aucune ressource trouvée.</p>
                    {% endfor %}
                </div>
            </div>
            <!-- Blog List End -->
            <div class=\"col-12 wow slideInUp\" data-wow-delay=\"0.1s\" style=\"visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;\">
                <nav aria-label=\"Page navigation\">
                  <ul class=\"pagination pagination-lg m-0\">
                    <li class=\"page-item disabled\">
                      <a class=\"page-link rounded-0\" href=\"#\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\"><i class=\"bi bi-arrow-left\"></i></span>
                      </a>
                    </li>
                    <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                    <li class=\"page-item\">
                      <a class=\"page-link rounded-0\" href=\"#\" aria-label=\"Next\">
                        <span aria-hidden=\"true\"><i class=\"bi bi-arrow-right\"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
        
    </div>
    
</div>
<!-- Blog End -->

{% block javascripts %}
<script>
    document.getElementById('search-input').addEventListener('input', function () {
        const query = this.value;

        fetch(`/ressources/live-search?q=\${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('resources-container');
                container.innerHTML = '';

                if (data.length === 0) {
                    container.innerHTML = '<p>Aucune ressource trouvée.</p>';
                } else {
                    data.forEach(resource => {
                        const html = `
                            <div class=\"col-md-6 wow slideInUp\" data-wow-delay=\"0.1s\">
                                <div class=\"blog-item bg-light rounded shadow-sm overflow-hidden\">
                                    <div class=\"blog-img position-relative overflow-hidden\">
                                        <img class=\"img-fluid\" src=\"/uploads/ressources/\${resource.image}\" alt=\"\${resource.nomRessource}\" style=\"width: 100%; height: 200px; object-fit: cover;\">
                                        <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">\${resource.nomRessource}</a>
                                    </div>
                                    <div class=\"p-4\">
                                        <div class=\"d-flex mb-3\">
                                            <small class=\"me-3 text-muted\"><i class=\"far fa-user text-primary me-2\"></i>\${resource.nomRessource}</small>
                                            <small class=\"text-muted\"><i class=\"far fa-calendar-alt text-primary me-2\"></i>\${resource.dateCreationRessource}</small>
                                        </div>
                                        <h4 class=\"mb-3\">\${resource.nomRessource}</h4>
                                        <p>\${resource.descriptionRessource}</p>
                                        <a class=\"text-uppercase text-primary\" href=\"/ressources/\${resource.id}/demande\">
                                            faire une demande <i class=\"bi bi-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                        container.insertAdjacentHTML('beforeend', html);
                    });
                }
            });
    });
</script>
{% endblock %}
{% endblock %}
", "g_ressources/show.html.twig", "C:\\Users\\ghass\\Desktop\\Eduplus1\\EduPlus\\templates\\g_ressources\\show.html.twig");
    }
}
