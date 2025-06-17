<?php
$site_name = "Sigco";
$site_url = "https://Sigco.cl";
?>

<!-- Footer Simplificado -->
<footer class="footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-4">
                    <h5 class="d-flex align-items-center mb-3">
                        <i class="bi bi-gear-fill me-2"></i><?= $site_name; ?>
                    </h5>
                    <p class="text-light mb-4">
                        Software de gestión empresarial 100% online. Simplificamos la administración de tu empresa para que te enfoques en hacer crecer tu negocio.
                    </p>
                    <div class="social-links d-flex">
                        <a href="#" aria-label="Facebook" title="Síguenos en Facebook">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="#" aria-label="LinkedIn" title="Conéctate en LinkedIn">
                            <i class="bi bi-linkedin fs-5"></i>
                        </a>
                        <a href="#" aria-label="Instagram" title="Síguenos en Instagram">
                            <i class="bi bi-instagram fs-5"></i>
                        </a>
                        <a href="#" aria-label="YouTube" title="Suscríbete a nuestro canal">
                            <i class="bi bi-youtube fs-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <h6 class="mb-3">Productos</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#features" class="text-decoration-none">
                            <i class="bi bi-receipt me-1"></i>Facturación Electrónica
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#features" class="text-decoration-none">
                            <i class="bi bi-box-seam me-1"></i>Control de Inventario
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#features" class="text-decoration-none">
                            <i class="bi bi-calculator me-1"></i>Contabilidad
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#features" class="text-decoration-none">
                            <i class="bi bi-people me-1"></i>RRHH
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#features" class="text-decoration-none">
                            <i class="bi bi-graph-up me-1"></i>Reportes
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h6 class="mb-3">Contacto</h6>
                <div class="contact-info">

                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-whatsapp me-2 text-success"></i>
                            <strong>WhatsApp:</strong>
                        </div>
                        <div class="ms-4">
                            <a href="https://wa.me/56958598264" target="_blank" class="text-decoration-none">
                                +56 9 5859 8264
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-fill me-2 text-primary"></i>
                            <strong>Email:</strong>
                        </div>
                        <div class="ms-4">
                            <a href="mailto:info@Sigco.cl" class="text-decoration-none">
                                info@Sigco.cl
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-clock-fill me-2 text-primary"></i>
                            <strong>Horarios:</strong>
                        </div>
                        <div class="ms-4">
                            <div class="text-light">
                                Lunes a Viernes<br>
                                08:00 - 18:00 hrs
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <hr class="my-4 border-secondary">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-muted mb-0">
                    © <?= date('Y'); ?> <?= $site_name; ?>. Todos los derechos reservados.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="footer-links d-flex flex-wrap justify-content-center justify-content-md-end gap-3">
                    <a href="privacy.php" class="text-muted text-decoration-none small">
                        Política de Privacidad
                    </a>
                    <a href="terms.php" class="text-muted text-decoration-none small">
                        Términos de Uso
                    </a>
                    <a href="cookies.php" class="text-muted text-decoration-none small">
                        Cookies
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Contact Form Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">
                    <i class="bi bi-play-circle me-2"></i>Solicitar Demo Gratuito
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="demoForm" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre completo *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email empresarial *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Teléfono *</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Empresa</label>
                            <input type="text" name="company" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tamaño de empresa</label>
                            <select name="company_size" class="form-select">
                                <option value="">Seleccionar</option>
                                <option value="1-10">1-10 empleados</option>
                                <option value="11-50">11-50 empleados</option>
                                <option value="51-200">51-200 empleados</option>
                                <option value="200+">200+ empleados</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Sector</label>
                            <select name="sector" class="form-select">
                                <option value="">Seleccionar</option>
                                <option value="comercio">Comercio</option>
                                <option value="servicios">Servicios</option>
                                <option value="manufactura">Manufactura</option>
                                <option value="construccion">Construcción</option>
                                <option value="tecnologia">Tecnología</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">¿Qué módulos te interesan más?</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="modules[]" value="facturacion" id="facturacion">
                                        <label class="form-check-label" for="facturacion">Facturación Electrónica</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="modules[]" value="inventario" id="inventario">
                                        <label class="form-check-label" for="inventario">Control de Inventario</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="modules[]" value="contabilidad" id="contabilidad">
                                        <label class="form-check-label" for="contabilidad">Contabilidad</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="modules[]" value="rrhh" id="rrhh">
                                        <label class="form-check-label" for="rrhh">Gestión de RRHH</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="modules[]" value="reportes" id="reportes">
                                        <label class="form-check-label" for="reportes">Reportes y Analytics</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Mensaje adicional</label>
                            <textarea name="message" class="form-control" rows="3" placeholder="Cuéntanos sobre tus necesidades específicas..."></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="privacy" id="privacy" required>
                                <label class="form-check-label" for="privacy">
                                    Acepto la <a href="privacy.php" target="_blank" class="text-primary">Política de Privacidad</a> y autorizo el tratamiento de mis datos *
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter">
                                <label class="form-check-label" for="newsletter">
                                    Quiero recibir información sobre actualizaciones y consejos empresariales
                                </label>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="source" value="landing_page">
                    <input type="hidden" name="selectedPlan" id="selectedPlan">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-1"></i>Cancelar
                </button>
                <button type="submit" form="demoForm" class="btn btn-primary">
                    <i class="bi bi-send me-1"></i>Solicitar Demo
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Scroll Top Button -->
<a href="#header" id="scroll-top" class="position-fixed bottom-0 end-0 m-4 btn btn-primary rounded-circle d-none align-items-center justify-content-center" style="width: 50px; height: 50px; z-index: 1000;" title="Volver arriba">
    <i class="bi bi-arrow-up"></i>
</a>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/56958598264" target="_blank" class="whatsapp-float position-fixed" style="bottom: 80px; right: 20px; z-index: 1000;" title="Chatea con nosotros">
    <div class="btn btn-success rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
        <i class="bi bi-whatsapp fs-4"></i>
    </div>
</a>

<!-- Scripts -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>