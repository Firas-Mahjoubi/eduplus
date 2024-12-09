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

/* sidebar.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/9f/9ff8869caeb409f055936a9fab0bd91f.php
class __TwigTemplate_e3019b5ee805eb128feb19b798aa9dae extends Template
========
class __TwigTemplate_cc3592c7392429f337a4a8fb15a85df7 extends Template
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/twig/4a/4ac09310136ee35c14711ca7b20a0ea9.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        yield "<!-- Sidebar -->
 <div class=\"sidebar\" data-background-color=\"dark\">
  <div class=\"sidebar-logo\">
    <!-- Logo Header -->
    <div class=\"logo-header\" data-background-color=\"dark\">
      <a href=\"index.html\" class=\"logo\">
        <img
        src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\"
          alt=\"navbar brand\"
          class=\"navbar-brand\"
          height=\"20\"
        />
      </a>
      <div class=\"nav-toggle\">
        <button class=\"btn btn-toggle toggle-sidebar\">
          <i class=\"gg-menu-right\"></i>
        </button>
        <button class=\"btn btn-toggle sidenav-toggler\">
          <i class=\"gg-menu-left\"></i>
        </button>
      </div>
      <button class=\"topbar-toggler more\">
        <i class=\"gg-more-vertical-alt\"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
    <div class=\"sidebar-content\">
      <ul class=\"nav nav-secondary\">
        <li class=\"nav-item active\">
          <a
            data-bs-toggle=\"collapse\"
            href=\"#dashboard\"
            class=\"collapsed\"
            aria-expanded=\"false\"
          >
            <i class=\"fas fa-home\"></i>
            <p>Dashboard</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"dashboard\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
                  <span class=\"sub-item\">Dashboard 1</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class=\"nav-section\">
          <span class=\"sidebar-mini-icon\">
            <i class=\"fa fa-ellipsis-h\"></i>
          </span>
          <h4 class=\"text-section\">CRUD</h4>
        </li>
        <li class=\"nav-item\">
          <a data-bs-toggle=\"collapse\" href=\"#base\">
            <i class=\"fas fa-layer-group\"></i>
            <p>RESSOURCE</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"base\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_new");
        yield "\">
                  <span class=\"sub-item\">ADD </span>
                </a>
              </li>
              <!-- <li>
                <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                  <span class=\"sub-item\">UPDATE </span>
                </a>
              </li>
              <li> 
                <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                  <span class=\"sub-item\">DELETE </span>
                </a>
              </li> -->
              <li>
                <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                  <span class=\"sub-item\">SHOW</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
            <i class=\"fas fa-th-list\"></i>
            <p>EVENT</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"sidebarLayouts\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_dashboard_backoffice");
        yield "\">
                  <span class=\"sub-item\">Dashboard </span>
                </a>
              </li>
          </div>
        </li>
        <li class=\"nav-item\">
          <a data-bs-toggle=\"collapse\" href=\"#forms\">
            <i class=\"fas fa-pen-square\"></i>
            <p>RECRUTEMENT</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"forms\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                  <span class=\"sub-item\">ADD </span>
                </a>
              </li>
              <li>
                <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                  <span class=\"sub-item\">UPDATE </span>
                </a>
              </li>
              <li> 
                <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                  <span class=\"sub-item\">DELETE </span>
                </a>
              </li>
              <li>
                <a href=\"components/avatars.html\">
                  <span class=\"sub-item\">SHOW</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
<<<<<<< HEAD
      <li class=\"nav-item\">
  <a data-bs-toggle=\"collapse\" href=\"#charts\">
    <i class=\"far fa-chart-bar\"></i>
    <p>CLUB</p>
    <span class=\"caret\"></span>
  </a>
  <div class=\"collapse\" id=\"charts\">
    <ul class=\"nav nav-collapse\">
      <li>
        <!-- Add Club -->
        <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_new");
        yield "\">
          <span class=\"sub-item\">ADD</span>
        </a>
      </li>
      <li>
        <!-- Update Club -->
        <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_manage");
        yield "\">
          <span class=\"sub-item\">UPDATE</span>
        </a>
      </li>
      <li>
        <!-- Delete Club -->
        <a href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_manage");
=======
        <li class=\"nav-item\">
          <a data-bs-toggle=\"collapse\" href=\"#charts\">
            <i class=\"far fa-chart-bar\"></i>
            <p>CLUB</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"charts\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                  <span class=\"sub-item\">ADD </span>
                </a>
              </li>
              <li>
                <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                  <span class=\"sub-item\">UPDATE </span>
                </a>
              </li>
              <li> 
                <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb
        yield "\">
          <span class=\"sub-item\">DELETE</span>
        </a>
      </li>
      <li>
        <!-- Show Clubs -->
        <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_list");
        yield "\">
          <span class=\"sub-item\">SHOW</span>
        </a>
      </li>
    </ul>
  </div>
</li>
        

      </ul>
    </div>
  </div>
</div>
<!-- End Sidebar -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sidebar.html.twig";
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
<<<<<<< HEAD
        return array (  272 => 178,  263 => 172,  254 => 166,  245 => 160,  220 => 138,  212 => 133,  204 => 128,  181 => 108,  173 => 103,  165 => 98,  146 => 82,  138 => 77,  130 => 72,  122 => 67,  97 => 45,  57 => 8,  48 => 1,);
=======
        return array (  239 => 154,  231 => 149,  223 => 144,  199 => 123,  191 => 118,  183 => 113,  165 => 98,  146 => 82,  138 => 77,  130 => 72,  122 => 67,  97 => 45,  57 => 8,  48 => 1,);
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Sidebar -->
 <div class=\"sidebar\" data-background-color=\"dark\">
  <div class=\"sidebar-logo\">
    <!-- Logo Header -->
    <div class=\"logo-header\" data-background-color=\"dark\">
      <a href=\"index.html\" class=\"logo\">
        <img
        src=\"{{ asset('/img/kaiadmin/logo_light.svg') }}\"
          alt=\"navbar brand\"
          class=\"navbar-brand\"
          height=\"20\"
        />
      </a>
      <div class=\"nav-toggle\">
        <button class=\"btn btn-toggle toggle-sidebar\">
          <i class=\"gg-menu-right\"></i>
        </button>
        <button class=\"btn btn-toggle sidenav-toggler\">
          <i class=\"gg-menu-left\"></i>
        </button>
      </div>
      <button class=\"topbar-toggler more\">
        <i class=\"gg-more-vertical-alt\"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
    <div class=\"sidebar-content\">
      <ul class=\"nav nav-secondary\">
        <li class=\"nav-item active\">
          <a
            data-bs-toggle=\"collapse\"
            href=\"#dashboard\"
            class=\"collapsed\"
            aria-expanded=\"false\"
          >
            <i class=\"fas fa-home\"></i>
            <p>Dashboard</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"dashboard\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"{{ path('admin_dashboard') }}\">
                  <span class=\"sub-item\">Dashboard 1</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class=\"nav-section\">
          <span class=\"sidebar-mini-icon\">
            <i class=\"fa fa-ellipsis-h\"></i>
          </span>
          <h4 class=\"text-section\">CRUD</h4>
        </li>
        <li class=\"nav-item\">
          <a data-bs-toggle=\"collapse\" href=\"#base\">
            <i class=\"fas fa-layer-group\"></i>
            <p>RESSOURCE</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"base\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"{{ path('ressource_new') }}\">
                  <span class=\"sub-item\">ADD </span>
                </a>
              </li>
              <!-- <li>
                <a href=\"{{ path('app_g_ressources') }}\">
                  <span class=\"sub-item\">UPDATE </span>
                </a>
              </li>
              <li> 
                <a href=\"{{ path('app_g_ressources') }}\">
                  <span class=\"sub-item\">DELETE </span>
                </a>
              </li> -->
              <li>
                <a href=\"{{ path('app_g_ressources') }}\">
                  <span class=\"sub-item\">SHOW</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
            <i class=\"fas fa-th-list\"></i>
            <p>EVENT</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"sidebarLayouts\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"{{ path('app_event_dashboard_backoffice') }}\">
                  <span class=\"sub-item\">Dashboard </span>
                </a>
              </li>
          </div>
        </li>
        <li class=\"nav-item\">
          <a data-bs-toggle=\"collapse\" href=\"#forms\">
            <i class=\"fas fa-pen-square\"></i>
            <p>RECRUTEMENT</p>
            <span class=\"caret\"></span>
          </a>
          <div class=\"collapse\" id=\"forms\">
            <ul class=\"nav nav-collapse\">
              <li>
                <a href=\"{{ path('app_logout') }}\">
                  <span class=\"sub-item\">ADD </span>
                </a>
              </li>
              <li>
                <a href=\"{{ path('app_logout') }}\">
                  <span class=\"sub-item\">UPDATE </span>
                </a>
              </li>
              <li> 
                <a href=\"{{ path('app_logout') }}\">
                  <span class=\"sub-item\">DELETE </span>
                </a>
              </li>
              <li>
                <a href=\"components/avatars.html\">
                  <span class=\"sub-item\">SHOW</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      <li class=\"nav-item\">
  <a data-bs-toggle=\"collapse\" href=\"#charts\">
    <i class=\"far fa-chart-bar\"></i>
    <p>CLUB</p>
    <span class=\"caret\"></span>
  </a>
  <div class=\"collapse\" id=\"charts\">
    <ul class=\"nav nav-collapse\">
      <li>
        <!-- Add Club -->
        <a href=\"{{ path('club_new') }}\">
          <span class=\"sub-item\">ADD</span>
        </a>
      </li>
      <li>
        <!-- Update Club -->
        <a href=\"{{ path('club_manage') }}\">
          <span class=\"sub-item\">UPDATE</span>
        </a>
      </li>
      <li>
        <!-- Delete Club -->
        <a href=\"{{ path('club_manage') }}\">
          <span class=\"sub-item\">DELETE</span>
        </a>
      </li>
      <li>
        <!-- Show Clubs -->
        <a href=\"{{ path('club_list') }}\">
          <span class=\"sub-item\">SHOW</span>
        </a>
      </li>
    </ul>
  </div>
</li>
        

      </ul>
    </div>
  </div>
</div>
<<<<<<< HEAD
<!-- End Sidebar -->", "sidebar.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\sidebar.html.twig");
=======
<<<<<<<< HEAD:var/cache/dev/twig/9f/9ff8869caeb409f055936a9fab0bd91f.php
<!-- End Sidebar -->", "sidebar.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\sidebar.html.twig");
========
<!-- End Sidebar -->", "sidebar.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\sidebar.html.twig");
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/twig/4a/4ac09310136ee35c14711ca7b20a0ea9.php
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb
    }
}
