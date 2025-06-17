<?php
// Configuración básica
$site_name = "Sigco";
$site_description = "Software de gestión empresarial 100% online. Facturación electrónica, inventarios, contabilidad y más.";
$site_keywords = "software empresarial, facturación electrónica, ERP, gestión online, Chile";
$site_url = "https://Sigco.cl"; // Cambiar por tu dominio

// Meta data específica por página
$page_title = isset($page_title) ? $page_title . " - " . $site_name : $site_name . " - " . $site_description;
$page_description = isset($page_description) ? $page_description : $site_description;
$page_keywords = isset($page_keywords) ? $page_keywords : $site_keywords;
$page_image = isset($page_image) ? $page_image : $site_url . "/assets/img/og-image.jpg";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?= $site_name; ?>">

    <!-- SEO Meta Tags -->
    <title><?= htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?= htmlspecialchars($page_keywords); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $site_url . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?= htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?= $page_image; ?>">
    <meta property="og:site_name" content="<?= $site_name; ?>">
    <meta property="og:locale" content="es_CL">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= $site_url . $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title" content="<?= htmlspecialchars($page_title); ?>">
    <meta property="twitter:description" content="<?= htmlspecialchars($page_description); ?>">
    <meta property="twitter:image" content="<?= $page_image; ?>">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/img/favicon-32x32.png" rel="icon" type="image/png" sizes="32x32">
    <link href="assets/img/favicon-16x16.png" rel="icon" type="image/png" sizes="16x16">

    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"></noscript>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Additional CSS if needed -->
    <?php if (isset($additional_css)): ?>
        <?php foreach ($additional_css as $css_file): ?>
            <link href="<?= $css_file; ?>" rel="stylesheet">
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Schema.org structured data -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "SoftwareApplication",
          "name": "<?= $site_name; ?>",
    "description": "<?= $site_description; ?>",
    "url": "<?= $site_url; ?>",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web",
    "offers": {
      "@type": "Offer",
      "price": "1",
      "priceCurrency": "CLF",
      "priceValidUntil": "2024-12-31"
    },
    "provider": {
      "@type": "Organization",
      "name": "<?= $site_name; ?>",
      "url": "<?= $site_url; ?>"
    }
  }
    </script>

    <!-- Google Analytics (reemplazar con tu ID) -->
    <?php if (defined('GA_TRACKING_ID') && GA_TRACKING_ID): ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA_TRACKING_ID; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?= GA_TRACKING_ID; ?>');
        </script>
    <?php endif; ?>

    <!-- Meta Pixel (Facebook) - reemplazar con tu ID -->
    <?php if (defined('FB_PIXEL_ID') && FB_PIXEL_ID): ?>
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '<?= FB_PIXEL_ID; ?>');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= FB_PIXEL_ID; ?>&ev=PageView&noscript=1"/></noscript>
    <?php endif; ?>
</head>

<body class="<?= isset($body_class) ? $body_class : 'index-page'; ?>">

<!-- Header/Navbar -->
<header id="header" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <a href="<?= $site_url; ?>" class="navbar-brand d-flex align-items-center">
            <i class="bi bi-gear-fill me-2 text-primary"></i>
            <span><?= $site_name; ?></span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="#features">Funciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Precios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Soluciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                        <li><a class="dropdown-item" href="#features">
                                <i class="bi bi-receipt me-2"></i>Facturación Electrónica
                            </a></li>
                        <li><a class="dropdown-item" href="#features">
                                <i class="bi bi-box-seam me-2"></i>Control de Inventario
                            </a></li>
                        <li><a class="dropdown-item" href="#features">
                                <i class="bi bi-people me-2"></i>Gestión de RRHH
                            </a></li>
                        <li><a class="dropdown-item" href="#features">
                                <i class="bi bi-calculator me-2"></i>Contabilidad
                            </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#features">
                                <i class="bi bi-eye me-2"></i>Ver todas las funciones
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-outline-primary btn-sm demo-trigger" href="#demo">
                        <i class="bi bi-play-circle me-1"></i>Demo Gratis
                    </a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-primary btn-sm" href="login.php">
                        <i class="bi bi-box-arrow-in-right me-1"></i>Acceder
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- Page Loading Indicator -->
<!--<div id="pageLoader" class="position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-white" style="z-index: 9999;">
    <div class="text-center">
        <div class="spinner-border text-primary mb-3" role="status">
            <span class="visually-hidden">Cargando...</span>
        </div>
        <div class="fw-bold text-primary"><?php /*echo $site_name; */?></div>
    </div>
</div>-->

<!-- Skip to main content for accessibility -->
<a class="visually-hidden-focusable btn btn-primary position-absolute top-0 start-0 m-3" href="#main">
    Saltar al contenido principal
</a>

<script>
    // Hide loader when page is loaded
    window.addEventListener('load', function() {
        const loader = document.getElementById('pageLoader');
        if (loader) {
            loader.style.opacity = '0';
            loader.style.transition = 'opacity 0.3s ease';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 300);
        }
    });

    // Show loader on page unload (for navigation)
    window.addEventListener('beforeunload', function() {
        const loader = document.getElementById('pageLoader');
        if (loader) {
            loader.style.display = 'flex';
            loader.style.opacity = '1';
        }
    });
</script>