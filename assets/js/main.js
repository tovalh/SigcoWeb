// Main JavaScript - Versión Completa y Limpia
class LandingPage {
  constructor() {
    this.init();
  }

  init() {
    this.initAOS();
    this.initSmoothScrolling();
    this.initScrollEffects();
    this.initNavbar();
    this.initCounterAnimations();
  }

  // Initialize AOS (Animate On Scroll)
  initAOS() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
        offset: 50
      });
    }
  }

  // Smooth scrolling for anchor links
  initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', (e) => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute('href'));
        if (target) {
          const headerOffset = 80;
          const elementPosition = target.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  // Scroll effects (navbar shadow, scroll-to-top button)
  initScrollEffects() {
    let ticking = false;

    const updateScrollEffects = () => {
      const scrollY = window.pageYOffset;
      const navbar = document.querySelector('.navbar');
      const scrollTop = document.getElementById('scroll-top');

      // Navbar shadow effect
      if (navbar) {
        if (scrollY > 100) {
          navbar.classList.add('shadow');
        } else {
          navbar.classList.remove('shadow');
        }
      }

      // Scroll to top button
      if (scrollTop) {
        if (scrollY > 300) {
          scrollTop.style.display = 'flex';
          scrollTop.style.opacity = '1';
        } else {
          scrollTop.style.opacity = '0';
          setTimeout(() => {
            if (window.pageYOffset <= 300) {
              scrollTop.style.display = 'none';
            }
          }, 300);
        }
      }

      ticking = false;
    };

    const onScroll = () => {
      if (!ticking) {
        requestAnimationFrame(updateScrollEffects);
        ticking = true;
      }
    };

    window.addEventListener('scroll', onScroll, { passive: true });
  }

  // Navbar enhancements
  initNavbar() {
    const navbar = document.querySelector('.navbar');
    const navbarCollapse = navbar?.querySelector('.navbar-collapse');

    // Close mobile menu when clicking on a link
    if (navbarCollapse) {
      navbarCollapse.addEventListener('click', (e) => {
        if (e.target.classList.contains('nav-link')) {
          const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
            toggle: false
          });
          bsCollapse.hide();
        }
      });
    }
  }

  // Counter animations for stats
  initCounterAnimations() {
    const counters = document.querySelectorAll('.stat-number');
    if (counters.length === 0) return;

    const observerOptions = {
      threshold: 0.7,
      rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  animateCounter(element) {
    const target = parseInt(element.textContent.replace(/[^\d]/g, ''));
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;

    const updateCounter = () => {
      current += increment;
      if (current >= target) {
        element.textContent = this.formatNumber(target) + this.getUnit(element.dataset.originalText || element.textContent);
      } else {
        element.textContent = this.formatNumber(Math.floor(current)) + this.getUnit(element.dataset.originalText || element.textContent);
        requestAnimationFrame(updateCounter);
      }
    };

    // Store original text
    element.dataset.originalText = element.textContent;
    element.textContent = '0' + this.getUnit(element.textContent);

    updateCounter();
  }

  formatNumber(num) {
    if (num >= 1000000) {
      return (num / 1000000).toFixed(1) + 'M';
    } else if (num >= 1000) {
      return (num / 1000).toFixed(0) + 'K';
    }
    return num.toString();
  }

  getUnit(text) {
    if (text.includes('%')) return '%';
    if (text.includes('+')) return '+';
    if (text.includes('/')) return '/7';
    return '';
  }

  // Event tracking
  trackEvent(category, action, label = '') {
    // Google Analytics tracking
    if (typeof gtag !== 'undefined') {
      gtag('event', action, {
        event_category: category,
        event_label: label
      });
    }

    // Facebook Pixel tracking
    if (typeof fbq !== 'undefined') {
      fbq('track', action, {
        category: category,
        label: label
      });
    }

    console.log(`Event tracked: ${category} - ${action} - ${label}`);
  }
}

// Sistema Modal v1.0 - Completamente funcional
class ModalSystem {
  constructor() {
    this.isModalOpen = false;
    this.currentModal = null;
    this.init();
  }

  init() {
    this.setupDemoTriggers();
    this.setupModalEvents();
    this.setupFormHandling();
    this.setupValidation();
    this.setupNewsletterForm();
  }

  // Configurar todos los triggers del demo
  setupDemoTriggers() {
    // Buscar todos los elementos que abren el modal
    const triggers = document.querySelectorAll('.demo-trigger, [href="#demo"], .btn-primary-custom');

    triggers.forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        this.openModal(trigger);
      });
    });

    // Dashboard clickeable
    const dashboard = document.querySelector('.dashboard-mockup');
    if (dashboard) {
      dashboard.addEventListener('click', (e) => {
        e.preventDefault();
        this.showNotification('📊 ¡Este podría ser tu dashboard! Solicita una demo personalizada', 'info');
        setTimeout(() => this.openModal(), 1000);
      });
    }

    // Phone links tracking
    document.querySelectorAll('a[href^="tel:"]').forEach(link => {
      link.addEventListener('click', () => {
        this.showNotification('📞 Llamando... Te atenderemos en breve', 'info');
        window.landingPage.trackEvent('Phone', 'Call', link.href.replace('tel:', ''));
      });
    });

    // WhatsApp links tracking
    document.querySelectorAll('a[href*="whatsapp"], a[href*="wa.me"]').forEach(link => {
      link.addEventListener('click', () => {
        this.showNotification('💬 Abriendo WhatsApp... ¡Escríbenos!', 'success');
        window.landingPage.trackEvent('WhatsApp', 'Click', 'Contact');
      });
    });
  }

  // Configurar eventos del modal
  setupModalEvents() {
    const modal = document.getElementById('contactModal');
    if (!modal) return;

    // Evento cuando se cierra el modal
    modal.addEventListener('hidden.bs.modal', () => {
      this.onModalClosed();
    });

    // Evento cuando se abre el modal
    modal.addEventListener('shown.bs.modal', () => {
      this.onModalOpened();
    });

    // Botón cerrar
    const closeBtn = modal.querySelector('.btn-close');
    if (closeBtn) {
      closeBtn.addEventListener('click', () => {
        this.closeModal();
      });
    }

    // Botón cancelar
    const cancelBtn = modal.querySelector('.btn-secondary');
    if (cancelBtn) {
      cancelBtn.addEventListener('click', () => {
        this.closeModal();
      });
    }
  }

  // Abrir modal
  openModal(triggerElement = null) {
    const modal = document.getElementById('contactModal');
    if (!modal || this.isModalOpen) return;

    // Limpiar estado previo
    this.cleanupPreviousState();

    // Crear nueva instancia del modal
    this.currentModal = new bootstrap.Modal(modal, {
      backdrop: 'static', // No se cierra clickeando fuera
      keyboard: true,     // Se cierra con ESC
      focus: true
    });

    // Marcar como abierto
    this.isModalOpen = true;

    // Pre-llenar información si viene de pricing
    if (triggerElement) {
      this.prefillPlanInfo(triggerElement);
    }

    // Mostrar modal
    this.currentModal.show();

    console.log('Modal abierto correctamente');
  }

  // Cerrar modal
  closeModal() {
    if (!this.isModalOpen || !this.currentModal) return;

    this.currentModal.hide();
    console.log('Modal cerrado manualmente');
  }

  // Cuando el modal se abre completamente
  onModalOpened() {
    const modal = document.getElementById('contactModal');

    // Limpiar validaciones
    this.clearValidation();

    // Focus en primer campo
    setTimeout(() => {
      const firstInput = modal.querySelector('input[name="name"]');
      if (firstInput) {
        firstInput.focus();
      }
    }, 150);

    console.log('Modal completamente abierto');
  }

  // Cuando el modal se cierra completamente
  onModalClosed() {
    this.isModalOpen = false;
    this.currentModal = null;

    // Limpiar backdrop residual
    this.cleanupBackdrop();

    // Reset form
    const form = document.getElementById('demoForm');
    if (form) {
      form.reset();
      this.clearValidation();
    }

    console.log('Modal completamente cerrado');
  }

  // Limpiar estado previo
  cleanupPreviousState() {
    // Remover backdrops existentes
    this.cleanupBackdrop();

    // Resetear clases del body
    document.body.classList.remove('modal-open');
    document.body.style.overflow = '';
    document.body.style.paddingRight = '';

    // Si hay modal abierto, destruirlo
    if (this.currentModal) {
      try {
        this.currentModal.dispose();
      } catch (e) {
        console.log('Error disposing modal:', e);
      }
      this.currentModal = null;
    }

    this.isModalOpen = false;
  }

  // Limpiar backdrop
  cleanupBackdrop() {
    const backdrops = document.querySelectorAll('.modal-backdrop');
    backdrops.forEach(backdrop => {
      backdrop.remove();
    });
  }

  // Pre-llenar información del plan
  prefillPlanInfo(triggerElement) {
    const planCard = triggerElement.closest('.pricing-card');
    if (!planCard) return;

    const planName = planCard.querySelector('h3')?.textContent;
    const planInput = document.querySelector('#selectedPlan');

    if (planInput && planName) {
      planInput.value = planName.trim();
      console.log('Plan seleccionado:', planName);
    }
  }

  // Configurar manejo del formulario
  setupFormHandling() {
    const form = document.getElementById('demoForm');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      await this.handleFormSubmit(form);
    });
  }

  // Manejar envío del formulario
  async handleFormSubmit(form) {
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;

    try {
      // Validar formulario
      if (!this.validateForm(form)) {
        this.showNotification('Por favor, completa todos los campos obligatorios', 'error');
        return;
      }

      // Estado de carga
      submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Enviando...';
      submitBtn.disabled = true;

      // Simular envío (reemplazar con tu endpoint)
      const formData = new FormData(form);
      await this.submitForm(formData);

      // Éxito
      this.showNotification('¡Gracias por tu interés! Nos pondremos en contacto contigo pronto.', 'success');

      // Cerrar modal después de éxito
      setTimeout(() => {
        this.closeModal();
      }, 1500);

    } catch (error) {
      console.error('Error enviando formulario:', error);
      this.showNotification('Hubo un error al enviar el formulario. Por favor, intenta nuevamente.', 'error');
    } finally {
      // Restaurar botón
      submitBtn.innerHTML = originalText;
      submitBtn.disabled = false;
    }
  }

  // Simular envío del formulario
  async submitForm(formData) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        // Simular éxito/error
        const success = Math.random() > 0.1; // 90% éxito

        if (success) {
          console.log('Datos del formulario:', Object.fromEntries(formData));
          resolve({ success: true });
        } else {
          reject(new Error('Error simulado'));
        }
      }, 2000);
    });
  }

  // Configurar validación
  setupValidation() {
    const inputs = document.querySelectorAll('#contactModal .form-control, #contactModal .form-select');

    inputs.forEach(input => {
      // Validar al salir del campo
      input.addEventListener('blur', () => {
        this.validateField(input);
      });

      // Validar mientras escribe (solo si ya hay error)
      input.addEventListener('input', () => {
        if (input.classList.contains('is-invalid')) {
          this.validateField(input);
        }
      });
    });

    // Checkbox requerido
    const privacyCheck = document.getElementById('privacy');
    if (privacyCheck) {
      privacyCheck.addEventListener('change', () => {
        this.validateField(privacyCheck);
      });
    }
  }

  // Validar campo individual
  validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let message = '';

    // Limpiar estado previo
    field.classList.remove('is-valid', 'is-invalid');

    // Validaciones por tipo
    if (field.hasAttribute('required') && !value) {
      if (field.type === 'checkbox') {
        isValid = !field.checked ? false : true;
        message = isValid ? '' : 'Debes aceptar la política de privacidad';
      } else {
        isValid = false;
        message = 'Este campo es obligatorio';
      }
    } else if (field.type === 'email' && value) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(value)) {
        isValid = false;
        message = 'Ingresa un email válido';
      }
    } else if (field.type === 'tel' && value) {
      const phoneRegex = /^[\+]?[\d\s\-\(\)]{8,}$/;
      if (!phoneRegex.test(value)) {
        isValid = false;
        message = 'Ingresa un teléfono válido';
      }
    }

    // Aplicar estado visual
    if (isValid && (value || field.type === 'checkbox')) {
      field.classList.add('is-valid');
    } else if (!isValid) {
      field.classList.add('is-invalid');
    }

    // Mostrar/ocultar mensaje de error
    this.updateFieldMessage(field, message, isValid);

    return isValid;
  }

  // Actualizar mensaje de error
  updateFieldMessage(field, message, isValid) {
    let feedback = field.parentNode.querySelector('.invalid-feedback');

    if (!isValid && message) {
      if (!feedback) {
        feedback = document.createElement('div');
        feedback.className = 'invalid-feedback';
        field.parentNode.appendChild(feedback);
      }
      feedback.textContent = message;
    } else if (feedback) {
      feedback.remove();
    }
  }

  // Validar formulario completo
  validateForm(form) {
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;

    requiredFields.forEach(field => {
      if (!this.validateField(field)) {
        isValid = false;
      }
    });

    return isValid;
  }

  // Limpiar validación
  clearValidation() {
    const modal = document.getElementById('contactModal');
    if (!modal) return;

    const inputs = modal.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
      input.classList.remove('is-valid', 'is-invalid');

      const feedback = input.parentNode.querySelector('.invalid-feedback');
      if (feedback) {
        feedback.remove();
      }
    });
  }

  // Newsletter form handler
  setupNewsletterForm() {
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
      newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = newsletterForm.querySelector('input[type="email"]').value;

        this.showNotification('✅ ¡Suscrito exitosamente! Revisa tu email', 'success');
        newsletterForm.reset();
        window.landingPage.trackEvent('Newsletter', 'Subscribe', email);
      });
    }
  }

  // Sistema de notificaciones
  showNotification(message, type = 'info') {
    // Remover notificación existente
    const existing = document.querySelector('.notification-custom');
    if (existing) existing.remove();

    const notification = document.createElement('div');
    notification.className = `notification-custom alert alert-${type === 'success' ? 'success' : type === 'error' ? 'danger' : 'info'} alert-dismissible fade show`;
    notification.style.cssText = `
      position: fixed;
      top: 100px;
      right: 20px;
      z-index: 10000;
      min-width: 350px;
      max-width: 500px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      border: none;
      border-radius: 12px;
    `;

    const icon = type === 'success' ? 'check-circle-fill' : type === 'error' ? 'exclamation-triangle-fill' : 'info-circle-fill';

    notification.innerHTML = `
      <div class="d-flex align-items-center">
        <i class="bi bi-${icon} me-2"></i>
        <span>${message}</span>
        <button type="button" class="btn-close ms-auto" aria-label="Cerrar"></button>
      </div>
    `;

    // Agregar event listener al botón cerrar
    const closeBtn = notification.querySelector('.btn-close');
    closeBtn.addEventListener('click', () => {
      notification.remove();
    });

    document.body.appendChild(notification);

    // Auto-remover después de 5 segundos
    setTimeout(() => {
      if (notification.parentNode) {
        notification.remove();
      }
    }, 5000);
  }
}

// Efecto de tipeo para el título del hero
// Efecto de tipeo mejorado - Inicia completamente oculto
class TypingEffect {
  constructor() {
    this.init();
  }

  init() {
    // Ocultar el título inmediatamente al cargar
    this.hideTitle();

    // Esperar un poco antes de iniciar el tipeo
    setTimeout(() => {
      this.startTyping();
    }, 10); // Más tiempo para que cargue todo
  }

  hideTitle() {
    const heroTitle = document.querySelector('.hero-title');
    if (!heroTitle) return;

    // Ocultar inmediatamente y guardar texto original
    heroTitle.style.opacity = '0';
    heroTitle.style.visibility = 'hidden';

    // Guardar el texto original si no está guardado
    if (!heroTitle.dataset.originalText) {
      heroTitle.dataset.originalText = heroTitle.textContent;
    }

    // Limpiar contenido
    heroTitle.innerHTML = '';
  }

  startTyping() {
    const heroTitle = document.querySelector('.hero-title');
    if (!heroTitle) return;

    // Verificar que no se haya ejecutado antes
    if (heroTitle.dataset.typingStarted) return;
    heroTitle.dataset.typingStarted = 'true';

    // Obtener texto original
    const originalText = heroTitle.dataset.originalText || heroTitle.textContent;

    // Hacer visible y empezar a escribir
    heroTitle.style.visibility = 'visible';
    heroTitle.style.opacity = '1';

    // Iniciar tipeo inmediatamente
    this.typeText(heroTitle, originalText);
  }

  typeText(element, text) {
    // Empezar solo con el cursor
    element.innerHTML = '<span class="typing-cursor">|</span>';

    let i = 0;
    const typeChar = () => {
      if (i < text.length) {
        const currentText = text.substring(0, i + 1);
        element.innerHTML = currentText + '<span class="typing-cursor">|</span>';
        i++;
        setTimeout(typeChar, 60); // Velocidad de tipeo (más lento para mejor efecto)
      } else {
        // Mantener cursor por un momento, luego remover
        setTimeout(() => {
          element.innerHTML = text;
        }, 1500);
      }
    };

    // Pequeña pausa antes de empezar a escribir
    setTimeout(typeChar, 10);
  }
}
// Inicializar todo cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
  // Inicializar sistemas principales
  window.landingPage = new LandingPage();
  window.modalSystem = new ModalSystem();
  window.typingEffect = new TypingEffect();
});

// Handle page visibility changes for performance
document.addEventListener('visibilitychange', () => {
  if (document.hidden) {
    // Pause animations when tab is not visible
    document.documentElement.style.setProperty('--transition-slow', '0s');
    document.documentElement.style.setProperty('--transition-normal', '0s');
  } else {
    // Resume animations when tab becomes visible
    setTimeout(() => {
      document.documentElement.style.removeProperty('--transition-slow');
      document.documentElement.style.removeProperty('--transition-normal');
    }, 100);
  }
});

// Export for potential external use
window.LandingPage = LandingPage;
window.ModalSystem = ModalSystem;
window.TypingEffect = TypingEffect;