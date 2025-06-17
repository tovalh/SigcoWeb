<?php
// Configuración de la página
$page_title = "Software de Gestión Empresarial Online";
$page_description = "Administra tu empresa desde cualquier lugar. Facturación electrónica, inventarios, contabilidad y más. Todo en un solo sistema, fácil, rápido y seguro.";
$page_keywords = "software gestión empresarial, facturación electrónica chile, ERP online, sistema contable, inventario online, software RRHH";

// Incluir header
include 'includes/header.php';
?>

    <main id="main" class="main">
        <!-- Hero Section -->
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6 hero-content">
                        <h1 class="hero-title">
                            Software de Gestión Empresarial 100% Online
                        </h1>
                        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                            Administra tu empresa desde cualquier lugar. Facturación electrónica, inventarios, contabilidad y más. Todo en un solo sistema, fácil, rápido y seguro.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3" data-aos="fade-up" data-aos-delay="200">
                            <a href="#" class="btn btn-primary-custom demo-trigger">
                                <i class="bi bi-play-circle me-2"></i>Prueba Gratis 15 días
                            </a>
                            <a href="#features" class="btn btn-outline-custom">
                                <i class="bi bi-info-circle me-2"></i>Ver Funciones
                            </a>
                        </div>

                        <!-- Trust indicators -->
                        <div class="mt-4 pt-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="row g-3">
                                <div class="col-12">
                                    <p class="mb-2 d-flex align-items-center">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span>Más de 1,000 empresas confían en nosotros</span>
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p class="mb-2 d-flex align-items-center">
                                        <i class="bi bi-shield-check text-success me-2"></i>
                                        <span>Integración directa con SII y bancos</span>
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p class="mb-0 d-flex align-items-center">
                                        <i class="bi bi-award-fill text-warning me-2"></i>
                                        <span>Certificación ISO 27001 en seguridad</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="300">
                        <div class="position-relative">
                            <!-- Enhanced Dashboard Mockup -->
                            <div class="dashboard-mockup">
                                <div class="dashboard-header d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 text-primary fw-bold">
                                        <i class="bi bi-speedometer2 me-2"></i>Panel de Control
                                    </h6>
                                    <div class="status-badge">
                                        En línea
                                    </div>
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-6">
                                        <div class="metric-card">
                                            <div class="metric-icon">
                                                <i class="bi bi-receipt"></i>
                                            </div>
                                            <div class="metric-value">1,247</div>
                                            <div class="metric-label">Facturas Emitidas</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="metric-card">
                                            <div class="metric-icon">
                                                <i class="bi bi-graph-up"></i>
                                            </div>
                                            <div class="metric-value">$2.4M</div>
                                            <div class="metric-label">Ventas del Mes</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-6">
                                        <div class="metric-card">
                                            <div class="metric-icon">
                                                <i class="bi bi-box-seam"></i>
                                            </div>
                                            <div class="metric-value">342</div>
                                            <div class="metric-label">Productos</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="metric-card">
                                            <div class="metric-icon">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="metric-value">28</div>
                                            <div class="metric-label">Empleados</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sync-status text-center">
                                    <div class="small text-muted">Última sincronización con SII</div>
                                    <div class="fw-bold text-primary">
                                        <i class="bi bi-arrow-clockwise me-1"></i>Hace 2 minutos
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section -->
        <section id="features" class="py-5" style="background: var(--light-gray);">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark mb-3" data-aos="fade-up">
                        Todo lo que tu empresa necesita
                    </h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                        Una suite completa de herramientas para gestionar todos los aspectos de tu negocio
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-receipt"></i>
                            </div>
                            <h4 class="mb-3">Facturación Electrónica</h4>
                            <p class="text-muted">Emisión automática de facturas y boletas electrónicas con integración directa al SII. Cumple con todas las normativas chilenas.</p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="bi bi-check text-success me-2"></i>Integración SII en tiempo real</li>
                                <li><i class="bi bi-check text-success me-2"></i>Facturación masiva</li>
                                <li><i class="bi bi-check text-success me-2"></i>Notas de crédito y débito</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h4 class="mb-3">Control de Inventario</h4>
                            <p class="text-muted">Gestión completa de stock con alertas automáticas, códigos de barras y reportes en tiempo real para optimizar tu inventario.</p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="bi bi-check text-success me-2"></i>Control de stock en tiempo real</li>
                                <li><i class="bi bi-check text-success me-2"></i>Alertas de stock mínimo</li>
                                <li><i class="bi bi-check text-success me-2"></i>Códigos de barras</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h4 class="mb-3">Reportes y Analytics</h4>
                            <p class="text-muted">Dashboards inteligentes con métricas clave, análisis de tendencias y reportes personalizados para tomar mejores decisiones.</p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="bi bi-check text-success me-2"></i>Dashboards en tiempo real</li>
                                <li><i class="bi bi-check text-success me-2"></i>Reportes personalizables</li>
                                <li><i class="bi bi-check text-success me-2"></i>Análisis predictivo</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h4 class="mb-3">Gestión de Personal</h4>
                            <p class="text-muted">Módulo completo de RRHH con liquidaciones automáticas, contratos digitales y gestión de asistencia integrada.</p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="bi bi-check text-success me-2"></i>Liquidaciones automáticas</li>
                                <li><i class="bi bi-check text-success me-2"></i>Control de asistencia</li>
                                <li><i class="bi bi-check text-success me-2"></i>Contratos digitales</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Additional modules -->
                <div class="text-center mt-5">
                    <h3 class="mb-4" data-aos="fade-up">Y mucho más...</h3>
                    <div class="module-grid" data-aos="fade-up" data-aos-delay="100">
                        <div class="module-item">
                            <i class="bi bi-calculator text-primary fs-4 mb-2"></i>
                            <div class="fw-bold">Contabilidad</div>
                            <small class="text-muted">Automatizada</small>
                        </div>
                        <div class="module-item">
                            <i class="bi bi-cart text-primary fs-4 mb-2"></i>
                            <div class="fw-bold">Punto de Venta</div>
                            <small class="text-muted">Táctil</small>
                        </div>
                        <div class="module-item">
                            <i class="bi bi-bank text-primary fs-4 mb-2"></i>
                            <div class="fw-bold">Conciliación Bancaria</div>
                            <small class="text-muted">Automática</small>
                        </div>
                        <div class="module-item">
                            <i class="bi bi-globe text-primary fs-4 mb-2"></i>
                            <div class="fw-bold">E-commerce</div>
                            <small class="text-muted">Integrado</small>
                        </div>
                        <div class="module-item">
                            <i class="bi bi-phone text-primary fs-4 mb-2"></i>
                            <div class="fw-bold">App Móvil</div>
                            <small class="text-muted">iOS & Android</small>
                        </div>
                        <div class="module-item">
                            <i class="bi bi-shield-check text-primary fs-4 mb-2"></i>
                            <div class="fw-bold">Respaldos</div>
                            <small class="text-muted">Automáticos</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-number">1,000</div>
                        <p class="mb-0">Empresas activas</p>
                        <small class="text-muted">En todo Chile</small>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-number">50,000</div>
                        <p class="mb-0">Documentos procesados</p>
                        <small class="text-muted">Mensualmente</small>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-number">99.9</div>
                        <p class="mb-0">% Uptime garantizado</p>
                        <small class="text-muted">Disponibilidad 24/7</small>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="stat-number">24</div>
                        <p class="mb-0">/7 Soporte técnico</p>
                        <small class="text-muted">Lunes a Viernes</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-5 bg-white">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark mb-3" data-aos="fade-up">
                        Planes que se adaptan a tu empresa
                    </h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                        Comienza gratis y escala según tus necesidades. Precios transparentes sin sorpresas.
                    </p>
                </div>

                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-card">
                            <h3 class="mb-4">Básico</h3>
                            <div class="price mb-3">1 <span class="price-unit">UF/mes</span></div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>200 DTE mensuales</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>3 usuarios simultáneos</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>1 GB almacenamiento</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>Soporte online</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>Capacitación incluida</li>
                            </ul>
                            <button class="btn btn-primary w-100 demo-trigger">
                                <i class="bi bi-rocket me-2"></i>Empezar Ahora
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card featured">
                            <h3 class="mb-4">Profesional</h3>
                            <div class="price mb-3">2 <span class="price-unit">UF/mes</span></div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>400 DTE mensuales</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>5 usuarios simultáneos</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>5 GB almacenamiento</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>Soporte prioritario</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>Reportes avanzados</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>API incluida</li>
                            </ul>
                            <button class="btn btn-primary w-100 demo-trigger">
                                <i class="bi bi-rocket me-2"></i>Empezar Ahora
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-card">
                            <h3 class="mb-4">Empresarial</h3>
                            <div class="price mb-3">3 <span class="price-unit">UF/mes</span></div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>DTE ilimitados</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>Usuarios ilimitados</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>20 GB almacenamiento</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>Soporte 24/7</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>Personalización avanzada</li>
                                <li class="mb-2"><i class="bi bi-check text-success me-2"></i>Gerente dedicado</li>
                            </ul>
                            <button class="btn btn-primary w-100 demo-trigger">
                                <i class="bi bi-rocket me-2"></i>Empezar Ahora
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-5" style="background: var(--light-gray);">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark mb-3" data-aos="fade-up">
                        Lo que dicen nuestros clientes
                    </h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                        Más de 1,000 empresas confían en nosotros para gestionar su negocio
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-card">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-4 fst-italic">"Sigco transformó completamente nuestra gestión. Ahora podemos facturar desde cualquier lugar y tener control total de nuestro inventario."</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">MG</div>
                                <div>
                                    <strong>María González</strong>
                                    <div class="text-muted small">CEO, Comercial San Pedro</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-card">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-4 fst-italic">"La integración con el SII es perfecta. Ya no perdemos tiempo en trámites burocráticos y nos enfocamos en hacer crecer el negocio."</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">CR</div>
                                <div>
                                    <strong>Carlos Ruiz</strong>
                                    <div class="text-muted small">Gerente, Importadora del Sur</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-card">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-4 fst-italic">"El soporte técnico es excepcional. Cualquier duda se resuelve en minutos. Es como tener un equipo de TI dedicado."</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">AM</div>
                                <div>
                                    <strong>Ana Morales</strong>
                                    <div class="text-muted small">Contadora, Servicios Integrales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section id="demo" class="cta-section">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">
                            ¿Listo para transformar tu empresa?
                        </h2>
                        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">
                            Únete a más de 1,000 empresas que ya confían en Sigco para gestionar su negocio de manera eficiente y profesional.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                            <a href="#" class="btn btn-light btn-lg demo-trigger">
                                <i class="bi bi-play-circle me-2"></i>Solicitar Demo Gratis
                            </a>
                            <a href="tel:+56225884499" class="btn btn-outline-light btn-lg">
                                <i class="bi bi-telephone me-2"></i>Llamar Ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
// Incluir footer
include 'includes/footer.php';
?>