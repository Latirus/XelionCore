<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xelion Online — XelionCore Pre-Registration</title>
    <meta name="description"
        content="XelionCore: Classic Fiesta Online private server rebuilt 100% from scratch in Go by Tronic. Pre-register for 2027 alpha/beta access." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
    :root {
        --bg-deep: #090c14;
        --bg-card: #111726;
        --bg-card-hover: #161e31;
        --border-gold: rgba(212, 175, 55, 0.35);
        --border-subtle: rgba(255, 255, 255, 0.08);
        --gold: #e2b857;
        --gold-bright: #ffd97d;
        --arcane: #38bdf8;
        --arcane-glow: rgba(56, 189, 248, 0.25);
        --text-main: #e6ebf5;
        --text-muted: #94a3b8;
        --success: #34d399;
        --danger: #f87171;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--bg-deep);
        color: var(--text-main);
        min-height: 100vh;
        line-height: 1.6;
        background-image:
            radial-gradient(circle at 50% 0%, rgba(56, 189, 248, 0.14) 0%, transparent 50%),
            radial-gradient(circle at 85% 30%, rgba(226, 184, 87, 0.08) 0%, transparent 45%),
            radial-gradient(circle at 15% 80%, rgba(56, 189, 248, 0.07) 0%, transparent 45%);
        overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    .fantasy-font {
        font-family: 'Cinzel', serif;
        letter-spacing: 0.04em;
    }

    /* Language Gate / Top Selector */
    .lang-gate {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
        text-align: center;
        transition: opacity 0.35s ease;
    }

    .lang-gate.compact {
        min-height: auto;
        padding: 1.25rem 1rem;
        border-bottom: 1px solid var(--border-subtle);
        background: rgba(9, 12, 20, 0.85);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 0;
        z-index: 50;
        flex-direction: row;
        justify-content: space-between;
        max-width: 100%;
    }

    .gate-inner {
        max-width: 1040px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .lang-gate.compact .gate-inner {
        flex-direction: row;
        justify-content: space-between;
    }

    .brand-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.78rem;
        text-transform: uppercase;
        letter-spacing: 0.14em;
        color: var(--arcane);
        border: 1px solid rgba(56, 189, 248, 0.3);
        background: rgba(56, 189, 248, 0.08);
        padding: 0.35rem 0.9rem;
        border-radius: 999px;
        margin-bottom: 1rem;
    }

    .lang-gate.compact .brand-badge,
    .lang-gate.compact .gate-subtitle {
        display: none;
    }

    .logo-title {
        font-size: clamp(2.2rem, 5vw, 3.6rem);
        font-weight: 800;
        background: linear-gradient(180deg, #fff6d6 0%, var(--gold) 55%, #a87c24 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 0 35px rgba(226, 184, 87, 0.25);
    }

    .lang-gate.compact .logo-title {
        font-size: 1.35rem;
    }

    .gate-subtitle {
        color: var(--text-muted);
        margin: 0.6rem 0 2.2rem;
        font-size: 1rem;
    }

    .flags-row {
        display: flex;
        gap: 1.25rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .lang-gate.compact .flags-row {
        gap: 0.5rem;
    }

    .flag-btn {
        background: var(--bg-card);
        border: 1px solid var(--border-gold);
        border-radius: 14px;
        padding: 1.2rem 1.75rem;
        cursor: pointer;
        color: var(--text-main);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.6rem;
        transition: all 0.22s ease;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
    }

    .flag-btn:hover,
    .flag-btn.active {
        transform: translateY(-3px);
        border-color: var(--gold-bright);
        background: var(--bg-card-hover);
        box-shadow: 0 0 24px rgba(226, 184, 87, 0.25);
    }

    .lang-gate.compact .flag-btn {
        flex-direction: row;
        padding: 0.4rem 0.75rem;
        border-radius: 8px;
        gap: 0.4rem;
        box-shadow: none;
    }

    .flag-svg {
        width: 44px;
        height: 30px;
        border-radius: 4px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
        display: block;
    }

    .lang-gate.compact .flag-svg {
        width: 22px;
        height: 15px;
    }

    .flag-label {
        font-family: 'Cinzel', serif;
        font-weight: 700;
        font-size: 0.9rem;
        color: var(--gold);
    }

    .lang-gate.compact .flag-label {
        font-size: 0.78rem;
    }

    /* Main Content Container */
    .main-content {
        display: none;
        max-width: 1040px;
        margin: 0 auto;
        padding: 2.5rem 1.25rem 5rem;
        animation: fadeIn 0.45s ease forwards;
    }

    .main-content.visible {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Hero + Form Grid */
    .hero-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 2rem;
        align-items: start;
        margin-bottom: 3.5rem;
    }

    @media (max-width: 860px) {
        .hero-grid {
            grid-template-columns: 1fr;
        }
    }

    .card {
        background: linear-gradient(180deg, rgba(22, 30, 49, 0.9) 0%, rgba(13, 18, 30, 0.95) 100%);
        border: 1px solid var(--border-gold);
        border-radius: 16px;
        padding: 2rem;
        position: relative;
        box-shadow: 0 18px 45px rgba(0, 0, 0, 0.55);
    }

    .card::before {
        content: "";
        position: absolute;
        inset: 4px;
        border: 1px solid rgba(226, 184, 87, 0.12);
        border-radius: 12px;
        pointer-events: none;
    }

    .hero-eyebrow {
        color: var(--arcane);
        font-size: 0.82rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        margin-bottom: 0.5rem;
    }

    .hero-title {
        font-size: clamp(1.75rem, 3.2vw, 2.4rem);
        color: var(--gold-bright);
        line-height: 1.2;
        margin-bottom: 1rem;
    }

    .hero-desc {
        color: var(--text-main);
        font-size: 1rem;
        margin-bottom: 1.25rem;
    }

    .tech-pills {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
        gap: 0.85rem;
        margin-top: 1.5rem;
    }

    .pill-box {
        background: rgba(9, 12, 20, 0.65);
        border: 1px solid var(--border-subtle);
        border-left: 3px solid var(--gold);
        padding: 0.85rem 1rem;
        border-radius: 8px;
    }

    .pill-box strong {
        display: block;
        color: var(--gold);
        font-family: 'Cinzel', serif;
        font-size: 0.88rem;
        margin-bottom: 0.2rem;
    }

    .pill-box span {
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    /* Form Styles */
    .form-title {
        font-size: 1.4rem;
        color: var(--gold-bright);
        margin-bottom: 0.35rem;
        text-align: center;
    }

    .form-sub {
        text-align: center;
        font-size: 0.88rem;
        color: var(--text-muted);
        margin-bottom: 1.5rem;
    }

    .form-group {
        margin-bottom: 1.1rem;
        position: relative;
        z-index: 2;
    }

    label {
        display: block;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--gold);
        margin-bottom: 0.4rem;
    }

    input,
    select {
        width: 100%;
        padding: 0.78rem 0.95rem;
        background: #080b12;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 8px;
        color: var(--text-main);
        font-size: 0.95rem;
        font-family: inherit;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    input:focus,
    select:focus {
        outline: none;
        border-color: var(--arcane);
        box-shadow: 0 0 0 3px var(--arcane-glow);
    }

    .hp-field {
        position: absolute;
        left: -9999px;
        opacity: 0;
        pointer-events: none;
    }

    .btn-submit {
        width: 100%;
        margin-top: 0.5rem;
        padding: 0.92rem 1.2rem;
        font-family: 'Cinzel', serif;
        font-weight: 700;
        font-size: 1rem;
        letter-spacing: 0.06em;
        color: #0b0e17;
        background: linear-gradient(180deg, #ffe299 0%, var(--gold) 100%);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.15s ease, box-shadow 0.2s ease;
        box-shadow: 0 4px 20px rgba(226, 184, 87, 0.35);
        position: relative;
        z-index: 2;
    }

    .btn-submit:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 6px 26px rgba(255, 217, 125, 0.5);
    }

    .btn-submit:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .form-feedback {
        margin-top: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        font-size: 0.88rem;
        display: none;
        position: relative;
        z-index: 2;
    }

    .form-feedback.success {
        display: block;
        background: rgba(52, 211, 153, 0.12);
        border: 1px solid rgba(52, 211, 153, 0.4);
        color: var(--success);
    }

    .form-feedback.error {
        display: block;
        background: rgba(248, 113, 113, 0.12);
        border: 1px solid rgba(248, 113, 113, 0.4);
        color: var(--danger);
    }

    /* Section Headings */
    .section-block {
        margin-bottom: 3.5rem;
    }

    .section-header {
        text-align: center;
        margin-bottom: 1.75rem;
    }

    .section-header h2 {
        font-size: 1.75rem;
        color: var(--gold-bright);
        margin-bottom: 0.35rem;
    }

    .section-header p {
        color: var(--text-muted);
        font-size: 0.95rem;
        max-width: 640px;
        margin: 0 auto;
    }

    /* FAQ Accordion */
    .faq-list {
        display: flex;
        flex-direction: column;
        gap: 0.85rem;
    }

    .faq-item {
        background: var(--bg-card);
        border: 1px solid var(--border-subtle);
        border-radius: 12px;
        overflow: hidden;
        transition: border-color 0.2s;
    }

    .faq-item.open {
        border-color: var(--border-gold);
    }

    .faq-question {
        width: 100%;
        background: none;
        border: none;
        color: var(--text-main);
        padding: 1.15rem 1.35rem;
        text-align: left;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
    }

    .faq-question:hover {
        color: var(--gold-bright);
    }

    .faq-icon {
        color: var(--gold);
        font-size: 1.25rem;
        transition: transform 0.25s ease;
    }

    .faq-item.open .faq-icon {
        transform: rotate(45deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        padding: 0 1.35rem;
        color: var(--text-muted);
        font-size: 0.94rem;
    }

    .faq-item.open .faq-answer {
        max-height: 260px;
        padding: 0 1.35rem 1.2rem;
    }

    /* Crypto Support Grid */
    .crypto-grid {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1.25rem;
    }

    .crypto-card {
        background: var(--bg-card);
        border: 1px solid var(--border-gold);
        border-radius: 14px;
        padding: 1.5rem;
        max-width: 440px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 0.9rem;
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.45);
    }

    .crypto-top {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.5rem;
    }

    .crypto-name {
        font-family: 'Cinzel', serif;
        font-weight: 700;
        color: var(--gold-bright);
        font-size: 1.05rem;
    }

    .crypto-net {
        font-size: 0.75rem;
        padding: 0.22rem 0.6rem;
        border-radius: 6px;
        background: rgba(56, 189, 248, 0.12);
        color: var(--arcane);
        border: 1px solid rgba(56, 189, 248, 0.28);
    }

    .qr-wrapper {
        background: #ffffff;
        padding: 0.6rem;
        border-radius: 10px;
        border: 2px solid var(--gold);
        box-shadow: 0 0 20px rgba(226, 184, 87, 0.2);
        line-height: 0;
    }

    .qr-wrapper img {
        width: 164px;
        height: 164px;
        display: block;
    }

    .wallet-box {
        width: 100%;
        background: #080b12;
        border: 1px solid var(--border-subtle);
        border-radius: 8px;
        padding: 0.65rem 0.8rem;
        font-family: monospace;
        font-size: 0.82rem;
        color: var(--text-main);
        word-break: break-all;
    }

    .btn-copy {
        width: 100%;
        background: rgba(226, 184, 87, 0.14);
        border: 1px solid var(--border-gold);
        color: var(--gold-bright);
        padding: 0.65rem 0.9rem;
        border-radius: 8px;
        font-size: 0.88rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-copy:hover {
        background: rgba(226, 184, 87, 0.26);
    }

    .support-extra {
        margin-top: 1.5rem;
        max-width: 620px;
        margin-left: auto;
        margin-right: auto;
        background: rgba(17, 23, 38, 0.75);
        border: 1px solid var(--border-subtle);
        border-radius: 14px;
        padding: 1.35rem 1.5rem;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.85rem;
    }

    .support-reward-note {
        font-size: 0.9rem;
        color: var(--gold-bright);
        background: rgba(226, 184, 87, 0.08);
        border: 1px solid rgba(226, 184, 87, 0.25);
        padding: 0.65rem 1rem;
        border-radius: 8px;
        width: 100%;
    }

    .support-alt-text {
        font-size: 0.92rem;
        color: var(--text-muted);
    }

    .btn-ig {
        display: inline-flex;
        align-items: center;
        gap: 0.55rem;
        padding: 0.7rem 1.35rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.92rem;
        color: #ffffff;
        background: linear-gradient(135deg, #833ab4 0%, #fd1d1d 55%, #fcb045 100%);
        box-shadow: 0 4px 16px rgba(253, 29, 29, 0.28);
        transition: transform 0.18s ease, box-shadow 0.2s ease;
    }

    .btn-ig:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 22px rgba(253, 29, 29, 0.45);
    }

    footer {
        text-align: center;
        padding-top: 2rem;
        border-top: 1px solid var(--border-subtle);
        color: var(--text-muted);
        font-size: 0.85rem;
    }
    </style>
</head>

<body>

    <!-- LANGUAGE GATE / STICKY HEADER -->
    <header id="langGate" class="lang-gate">
        <div class="gate-inner">
            <div class="brand-badge">XelionCore Engine • Go Architecture</div>
            <h1 class="logo-title">XELION ONLINE</h1>
            <p class="gate-subtitle">Select your language to enter the portal / Selecciona tu idioma / Wähle deine
                Sprache</p>

            <div class="flags-row" role="group" aria-label="Language selector">
                <!-- English -->
                <button class="flag-btn" data-lang="en" onclick="selectLanguage('en')">
                    <svg class="flag-svg" viewBox="0 0 60 30" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="30" fill="#012169" />
                        <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6" />
                        <path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="2" />
                        <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10" />
                        <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6" />
                    </svg>
                    <span class="flag-label">English</span>
                </button>

                <!-- Español -->
                <button class="flag-btn" data-lang="es" onclick="selectLanguage('es')">
                    <svg class="flag-svg" viewBox="0 0 60 30" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="30" fill="#AA151B" />
                        <rect y="7.5" width="60" height="15" fill="#F1BF00" />
                    </svg>
                    <span class="flag-label">Español</span>
                </button>

                <!-- Deutsch -->
                <button class="flag-btn" data-lang="de" onclick="selectLanguage('de')">
                    <svg class="flag-svg" viewBox="0 0 60 30" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="10" y="0" fill="#000000" />
                        <rect width="60" height="10" y="10" fill="#DD0000" />
                        <rect width="60" height="10" y="20" fill="#FFCE00" />
                    </svg>
                    <span class="flag-label">Deutsch</span>
                </button>
            </div>
        </div>
    </header>

    <!-- MAIN PORTAL CONTENT -->
    <main id="mainContent" class="main-content">

        <!-- HERO + PRE-REGISTRATION -->
        <section class="hero-grid">
            <article class="card">
                <div class="hero-eyebrow" id="txt-eyebrow"></div>
                <h2 class="hero-title" id="txt-hero-title"></h2>
                <p class="hero-desc" id="txt-hero-p1"></p>
                <p class="hero-desc" id="txt-hero-p2"></p>

                <div class="tech-pills">
                    <div class="pill-box">
                        <strong id="txt-pill1-title"></strong>
                        <span id="txt-pill1-desc"></span>
                    </div>
                    <div class="pill-box">
                        <strong id="txt-pill2-title"></strong>
                        <span id="txt-pill2-desc"></span>
                    </div>
                    <div class="pill-box">
                        <strong id="txt-pill3-title"></strong>
                        <span id="txt-pill3-desc"></span>
                    </div>
                    <div class="pill-box">
                        <strong id="txt-pill4-title"></strong>
                        <span id="txt-pill4-desc"></span>
                    </div>
                </div>
            </article>

            <!-- FORM CARD -->
            <aside class="card">
                <h3 class="form-title" id="txt-form-title"></h3>
                <p class="form-sub" id="txt-form-sub"></p>

                <form id="preregForm" novalidate>
                    <!-- Honeypot anti-bot -->
                    <input type="text" name="website" id="hpWebsite" class="hp-field" tabindex="-1"
                        autocomplete="off" />

                    <div class="form-group">
                        <label for="email" id="lbl-email"></label>
                        <input type="email" id="email" name="email" required placeholder="adventurer@example.com" />
                    </div>

                    <div class="form-group">
                        <label for="country" id="lbl-country"></label>
                        <select id="country" name="country" required></select>
                    </div>

                    <div class="form-group">
                        <label for="age" id="lbl-age"></label>
                        <input type="number" id="age" name="age" min="13" max="99" required placeholder="24" />
                    </div>

                    <button type="submit" class="btn-submit" id="btn-submit"></button>
                    <div id="formFeedback" class="form-feedback" role="status"></div>
                </form>
            </aside>
        </section>

        <!-- FAQ SECTION -->
        <section class="section-block">
            <div class="section-header">
                <h2 id="txt-faq-title"></h2>
                <p id="txt-faq-sub"></p>
            </div>
            <div class="faq-list" id="faqContainer"></div>
        </section>

        <!-- CRYPTO SUPPORT / DONATE SECTION -->
        <section class="section-block">
            <div class="section-header">
                <h2 id="txt-donate-title"></h2>
                <p id="txt-donate-sub"></p>
            </div>
            <div class="crypto-grid" id="cryptoContainer"></div>

            <div class="support-extra">
                <p class="support-reward-note" id="txt-donate-reward"></p>
                <p class="support-alt-text" id="txt-donate-alt"></p>
                <a href="https://www.instagram.com/xeliononline" target="_blank" rel="noopener noreferrer"
                    class="btn-ig">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                    <span id="txt-donate-ig-btn"></span>
                </a>
            </div>
        </section>

        <footer>
            <p id="txt-footer"></p>
        </footer>
    </main>

    <script>
    // =========================================================
    // CONFIGURACIÓN PRINCIPAL (EDITAR ANTES DE SUBIR)
    // =========================================================
    const CONFIG = {
        // Cambiá esta URL a https://xc.latirus.com/register.php o https://latirus.com/xc/register.php
        API_ENDPOINT: "https://latirus.com/xc/register.php",

        // Billeteras Cripto para apoyar el desarrollo
        WALLETS: [{
                coin: "USDT (Tether)",
                network: "TRC20 (Tron)",
                address: "TZATU2w5b5rHvwznpnZvpnSPmPrDJxFGLH"
            },
            {
                coin: "USDT / USDC",
                network: "BEP20 (BNB Smart Chain)",
                address: "0xD4a02E99644dB245BcDEb2dE5e453F20c363ba73"
            },
            {
                coin: "Bitcoin (BTC)",
                network: "Bitcoin Native SegWit",
                address: "bc1q3ydalqj7sf59smttvfzrmldgdu0vlh6f2g6lt3"
            }
        ]
    };

    // =========================================================
    // LISTA DE PAÍSES
    // =========================================================
    const COUNTRIES = [
        "Argentina", "Germany", "Spain", "United States", "Mexico", "Chile",
        "Colombia", "Peru", "Brazil", "Uruguay", "Venezuela", "Ecuador",
        "Austria", "Switzerland", "United Kingdom", "Canada", "France",
        "Italy", "Netherlands", "Poland", "Portugal", "Turkey", "Other"
    ];

    // =========================================================
    // TRADUCCIONES (EN / ES / DE)
    // =========================================================
    const I18N = {
        en: {
            eyebrow: "Classic MMORPG Rebirth • Built From Scratch",
            heroTitle: "The Legacy of Isya, Reborn in Go",
            heroP1: "<strong>XelionCore</strong> is a 100% custom server emulator engineered completely from scratch in <strong>Go (Golang)</strong>—leaving behind legacy C++/C# bottlenecks for modern concurrency, low latency, and rock-solid stability.",
            heroP2: "Crafted by <strong>Tronic</strong> and inspired by the golden era and early classic versions of <em>Fiesta Online</em> (reviving the spirit of the original Xelion Online project), XelionCore aims to deliver an authentic, fair, and smooth adventure. Pre-register now to receive your private download link by email once closed testing begins (estimated <strong>2027</strong>).",
            pill1Title: "100% Go Engine",
            pill1Desc: "Written from zero for high tick-rate performance and stability.",
            pill2Title: "Classic Era Roots",
            pill2Desc: "Faithful to the early versions and original progression feel.",
            pill3Title: "Created by Tronic",
            pill3Desc: "Independent passion project built with long-term vision.",
            pill4Title: "2027 Test Phase",
            pill4Desc: "Early testers receive direct client links via email.",
            formTitle: "Alpha / Beta Pre-Registration",
            formSub: "Reserve your spot on the whitelist for the 2027 testing phase.",
            lblEmail: "Email Address",
            lblCountry: "Country",
            lblAge: "Age",
            selectCountryPlaceholder: "Select your country...",
            btnSubmit: "Pre-Register Now",
            btnSending: "Sending...",
            msgSuccess: "Registration confirmed! You will receive the download link via email when testing opens in 2027.",
            msgError: "Could not complete registration. Please check your connection or try again later.",
            msgInvalid: "Please enter a valid email, select your country, and enter a valid age (13-99).",
            faqTitle: "Frequently Asked Questions",
            faqSub: "Everything you need to know about XelionCore and the upcoming test stages.",
            faqs: [{
                    q: "What makes XelionCore different from other private servers?",
                    a: "Most private servers run on leaked, buggy 2008–2016 C++/C# binaries. XelionCore is a brand-new server architecture written 100% from scratch in Go by Tronic, allowing clean fixes, modern security, and custom mechanics without legacy limitations."
                },
                {
                    q: "Which version of Fiesta Online is it based on?",
                    a: "It takes direct inspiration from the earliest classic chapters of Fiesta Online (Levels 1–60/80 era), focusing on party grinding, Kingdom Quests, world bosses, and the original community spirit of Xelion Online."
                },
                {
                    q: "When will the server launch or open for testing?",
                    a: "Building a server core from zero takes time and precision. The first playable Alpha/Beta test waves are projected for 2027. Everyone who pre-registers here will receive an email with the client download link."
                },
                {
                    q: "Will Xelion Online be Free-to-Play or Pay-to-Win?",
                    a: "Strictly Free-to-Play and Anti-Pay-to-Win. Any future cash shop or supporter rewards will remain purely cosmetic or convenience-based without breaking game balance."
                },
                {
                    q: "Will my email be shared or used for spam?",
                    a: "Never. Your email is stored securely solely to notify you when the XelionCore test client becomes available for download."
                }
            ],
            donateTitle: "Support the Project (Crypto)",
            donateSub: "XelionCore is an independent development effort. Crypto contributions directly help fund dedicated test servers, infrastructure, and development time.",
            copyBtn: "Copy Address",
            copiedBtn: "Copied!",
            donateReward: "🎁 Crypto donations are anonymous: if you contribute, send us your receipt / TxID via Instagram DM so we can grant you an exclusive founder gift when the server opens!",
            donateAlt: "Want to support XelionCore in another way (testing, feedback, content, or community)? Reach out to us on Instagram:",
            donateIgBtn: "Message @xeliononline on Instagram",
            footer: "Xelion Online • XelionCore developed in Go by Tronic. Fan-made tribute project not affiliated with Gamigo or OnsOn Soft."
        },

        es: {
            eyebrow: "El Renacer de un MMORPG Clásico • Hecho desde Cero",
            heroTitle: "El Legado de Isya, Reconstruido en Go",
            heroP1: "<strong>XelionCore</strong> es un servidor diseñado <strong>100% desde cero</strong> en un lenguaje de programación moderno como <strong>Go (Golang)</strong>, dejando atrás las limitaciones, bugs y cuellos de botella de los antiguos archivos oficiales de <em>Fiesta Online</em>.",
            heroP2: "Desarrollado por <strong>Tronic</strong> basándose en la esencia y mecánicas de las primeras versiones clásicas del juego (retomando el espíritu original de Xelion Online), este proyecto busca ofrecer una experiencia fluida, estable y fiel a sus raíces. Pre-registrate para recibir por correo el enlace de descarga apenas comiencen las etapas de prueba (estimado para <strong>2027</strong>).",
            pill1Title: "Motor 100% en Go",
            pill1Desc: "Escrito desde cero con concurrencia moderna y alta estabilidad.",
            pill2Title: "Versiones Clásicas",
            pill2Desc: "Inspirado en las primeras etapas y progresión original del juego.",
            pill3Title: "Hecho por Tronic",
            pill3Desc: "Desarrollo independiente con foco en calidad y fidelidad.",
            pill4Title: "Pruebas en 2027",
            pill4Desc: "Recibirás el link de descarga por mail al abrir la beta.",
            formTitle: "Pre-Registro de Pruebas",
            formSub: "Anotate para recibir el enlace de descarga cuando inicien las pruebas en 2027.",
            lblEmail: "Correo Electrónico (Email)",
            lblCountry: "País",
            lblAge: "Edad",
            selectCountryPlaceholder: "Seleccioná tu país...",
            btnSubmit: "Pre-Registrarme",
            btnSending: "Enviando...",
            msgSuccess: "¡Pre-registro completado! Te enviaremos el enlace de descarga por mail cuando abran las pruebas en 2027.",
            msgError: "No se pudo completar el registro. Verificá tu conexión o intentá nuevamente más tarde.",
            msgInvalid: "Por favor completá un email válido, seleccioná tu país e ingresá una edad válida (13-99).",
            faqTitle: "Preguntas Frecuentes (FAQ)",
            faqSub: "Información clave sobre el desarrollo de XelionCore y las próximas etapas de prueba.",
            faqs: [{
                    q: "¿En qué se diferencia XelionCore de otros servidores privados?",
                    a: "La mayoría de los servidores usan archivos filtrados viejos en C++/C# llenos de errores difíciles de parchar. XelionCore está programado 100% desde cero en Go por Tronic, lo que garantiza rendimiento moderno, seguridad y control total sobre cada mecánica."
                },
                {
                    q: "¿En qué versión de Fiesta Online está basado?",
                    a: "Está basado en las primeras versiones clásicas de Fiesta Online, rescatando el ritmo de leveo en grupo, las Kingdom Quests clásicas, el comercio en Roumen y la esencia original de Xelion Online."
                },
                {
                    q: "¿Cuándo comienzan las pruebas o el lanzamiento?",
                    a: "Desarrollar un núcleo de MMORPG desde cero lleva trabajo minucioso. Estimamos abrir las primeras etapas de prueba (Alpha/Beta) durante 2027. Al pre-registrarte recibirás el link de descarga directamente en tu correo."
                },
                {
                    q: "¿Será Pay-to-Win?",
                    a: "No. El objetivo es mantener una economía justa y competitiva, sin ventajas desbalanceadas por dinero real."
                },
                {
                    q: "¿Para qué se usan los datos del formulario?",
                    a: "Únicamente para enviarte la invitación con el link de descarga cuando el cliente de pruebas esté listo y conocer desde qué regiones se conectarán los jugadores para dimensionar los servidores."
                }
            ],
            donateTitle: "Apoyar el Proyecto (Cripto)",
            donateSub: "XelionCore es un proyecto independiente. Si querés colaborar con el desarrollo y los futuros servidores de prueba, podés hacerlo mediante criptomonedas:",
            copyBtn: "Copiar Dirección",
            copiedBtn: "¡Copiado!",
            donateReward: "🎁 Las donaciones cripto son anónimas: si colaborás, envianos el comprobante por mensaje privado en Instagram para agendarte y darte un presente exclusivo cuando abra el servidor.",
            donateAlt: "¿Querés apoyar el proyecto de otra manera (testing, difusión, ideas o colaboración)? Comunicate con nosotros por Instagram:",
            donateIgBtn: "Escribir a @xeliononline en Instagram",
            footer: "Xelion Online • XelionCore desarrollado en Go por Tronic. Proyecto independiente sin afiliación oficial con Gamigo ni OnsOn Soft."
        },

        de: {
            eyebrow: "Klassisches MMORPG Neu Geboren • Von Grund Auf Entwickelt",
            heroTitle: "Das Erbe von Isya, Neu Entwickelt in Go",
            heroP1: "<strong>XelionCore</strong> ist ein zu <strong>100 % von Grund auf neu entwickelter Server</strong> in der modernen Programmiersprache <strong>Go (Golang)</strong> – frei von den alten Einschränkungen und Fehlern der offiziellen <em>Fiesta Online</em>-Serverarchitektur.",
            heroP2: "Entwickelt von <strong>Tronic</strong> und inspiriert von den ersten klassischen Versionen des Spiels (im Geiste des ursprünglichen Xelion Online), bietet XelionCore ein stabiles und authentisches Spielerlebnis. Registriere dich jetzt vorab, um den Download-Link per E-Mail zu erhalten, sobald die Testphase beginnt (voraussichtlich <strong>2027</strong>).",
            pill1Title: "100 % Go-Engine",
            pill1Desc: "Komplett neu programmiert für moderne Performance & Stabilität.",
            pill2Title: "Klassische Wurzeln",
            pill2Desc: "Basierend auf den ersten Versionen von Fiesta Online.",
            pill3Title: "Entwickelt von Tronic",
            pill3Desc: "Unabhängiges Herzensprojekt mit langfristiger Vision.",
            pill4Title: "Testphase 2027",
            pill4Desc: "Download-Link direkt per E-Mail zum Start der Tests.",
            formTitle: "Vorab-Registrierung (Pre-Register)",
            formSub: "Sichere dir deinen Platz und erhalte den Download-Link für die Tests 2027.",
            lblEmail: "E-Mail-Adresse",
            lblCountry: "Land",
            lblAge: "Alter",
            selectCountryPlaceholder: "Land auswählen...",
            btnSubmit: "Jetzt Vorregistrieren",
            btnSending: "Wird gesendet...",
            msgSuccess: "Registrierung erfolgreich! Du erhältst den Download-Link per E-Mail, sobald die Testphase 2027 startet.",
            msgError: "Registrierung fehlgeschlagen. Bitte überprüfe deine Verbindung oder versuche es später erneut.",
            msgInvalid: "Bitte gib eine gültige E-Mail-Adresse, dein Land und ein gültiges Alter (13–99) an.",
            faqTitle: "Häufig Gestellte Fragen (FAQ)",
            faqSub: "Alle wichtigen Informationen über XelionCore und die kommenden Testphasen.",
            faqs: [{
                    q: "Was unterscheidet XelionCore von anderen Privatservern?",
                    a: "Die meisten Server nutzen veraltete, fehleranfällige C++/C#-Dateien. XelionCore wird von Tronic zu 100 % neu in Go geschrieben – für maximale Stabilität, Sicherheit und moderne Server-Performance."
                },
                {
                    q: "Auf welcher Version von Fiesta Online basiert der Server?",
                    a: "Das Projekt orientiert sich an den frühen klassischen Versionen von Fiesta Online mit Fokus auf Gruppen-Leveling, Kingdom Quests und echtes Nostalgie-Feeling."
                },
                {
                    q: "Wann starten die ersten Tests?",
                    a: "Die Entwicklung eines kompletten Server-Kerns von Null braucht Zeit. Die ersten Alpha-/Beta-Tests sind für 2027 geplant. Alle vorregistrierten Spieler erhalten den Download-Link per E-Mail."
                },
                {
                    q: "Wird der Server Pay-to-Win sein?",
                    a: "Nein. Fairness und Spielbalance stehen an erster Stelle."
                },
                {
                    q: "Wofür werden meine Daten verwendet?",
                    a: "Ausschließlich, um dir den Download-Link zum Start der Testphase zuzusenden und die Serverkapazitäten nach Regionen zu planen."
                }
            ],
            donateTitle: "Projekt Unterstützen (Krypto)",
            donateSub: "XelionCore ist ein unabhängiges Projekt. Mit einer Krypto-Spende unterstützt du direkt die Entwicklung und zukünftige Testserver:",
            copyBtn: "Adresse Kopieren",
            copiedBtn: "Kopiert!",
            donateReward: "🎁 Krypto-Spenden sind anonym: Wenn du spendest, schick uns deinen Beleg per Instagram-DM, damit wir dir zum Serverstart ein exklusives Dankeschön-Geschenk gutschreiben können!",
            donateAlt: "Möchtest du XelionCore auf andere Weise unterstützen (Testing, Feedback oder Community)? Schreib uns auf Instagram:",
            donateIgBtn: "@xeliononline auf Instagram schreiben",
            footer: "Xelion Online • XelionCore entwickelt in Go von Tronic. Unabhängiges Fan-Projekt, nicht verbunden mit Gamigo oder OnsOn Soft."
        }
    };

    let currentLang = null;

    // =========================================================
    // RENDERIZADO DE IDIOMA Y UI
    // =========================================================
    function selectLanguage(lang) {
        if (!I18N[lang]) return;
        currentLang = lang;
        localStorage.setItem("xelion_lang", lang);
        document.documentElement.lang = lang;

        const t = I18N[lang];

        // Compactar selector superior y mostrar portal
        document.getElementById("langGate").classList.add("compact");
        document.getElementById("mainContent").classList.add("visible");

        // Marcar bandera activa
        document.querySelectorAll(".flag-btn").forEach(btn => {
            btn.classList.toggle("active", btn.dataset.lang === lang);
        });

        // Textos principales
        document.getElementById("txt-eyebrow").textContent = t.eyebrow;
        document.getElementById("txt-hero-title").textContent = t.heroTitle;
        document.getElementById("txt-hero-p1").innerHTML = t.heroP1;
        document.getElementById("txt-hero-p2").innerHTML = t.heroP2;

        document.getElementById("txt-pill1-title").textContent = t.pill1Title;
        document.getElementById("txt-pill1-desc").textContent = t.pill1Desc;
        document.getElementById("txt-pill2-title").textContent = t.pill2Title;
        document.getElementById("txt-pill2-desc").textContent = t.pill2Desc;
        document.getElementById("txt-pill3-title").textContent = t.pill3Title;
        document.getElementById("txt-pill3-desc").textContent = t.pill3Desc;
        document.getElementById("txt-pill4-title").textContent = t.pill4Title;
        document.getElementById("txt-pill4-desc").textContent = t.pill4Desc;

        // Formulario
        document.getElementById("txt-form-title").textContent = t.formTitle;
        document.getElementById("txt-form-sub").textContent = t.formSub;
        document.getElementById("lbl-email").textContent = t.lblEmail;
        document.getElementById("lbl-country").textContent = t.lblCountry;
        document.getElementById("lbl-age").textContent = t.lblAge;
        document.getElementById("btn-submit").textContent = t.btnSubmit;

        populateCountries(t.selectCountryPlaceholder);
        renderFAQs(t.faqs);
        renderCrypto(t.copyBtn, t.copiedBtn);

        document.getElementById("txt-faq-title").textContent = t.faqTitle;
        document.getElementById("txt-faq-sub").textContent = t.faqSub;
        document.getElementById("txt-donate-title").textContent = t.donateTitle;
        document.getElementById("txt-donate-sub").textContent = t.donateSub;

        document.getElementById("txt-donate-reward").textContent = t.donateReward;
        document.getElementById("txt-donate-alt").textContent = t.donateAlt;
        document.getElementById("txt-donate-ig-btn").textContent = t.donateIgBtn;

        document.getElementById("txt-footer").textContent = t.footer;

        // Limpiar mensajes previos
        const fb = document.getElementById("formFeedback");
        fb.className = "form-feedback";
        fb.textContent = "";
    }

    function populateCountries(placeholder) {
        const select = document.getElementById("country");
        const prevValue = select.value;
        select.innerHTML = `<option value="">${placeholder}</option>`;
        COUNTRIES.forEach(c => {
            const opt = document.createElement("option");
            opt.value = c;
            opt.textContent = c;
            select.appendChild(opt);
        });
        if (prevValue) select.value = prevValue;
    }

    function renderFAQs(faqs) {
        const container = document.getElementById("faqContainer");
        container.innerHTML = "";
        faqs.forEach((item, idx) => {
            const div = document.createElement("div");
            div.className = "faq-item" + (idx === 0 ? " open" : "");
            div.innerHTML = `
          <button type="button" class="faq-question">
            <span>${item.q}</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">${item.a}</div>
        `;
            div.querySelector(".faq-question").addEventListener("click", () => {
                div.classList.toggle("open");
            });
            container.appendChild(div);
        });
    }

    function renderCrypto(copyLabel, copiedLabel) {
        const container = document.getElementById("cryptoContainer");
        container.innerHTML = "";
        CONFIG.WALLETS.forEach(w => {
            const qrUrl =
                `https://api.qrserver.com/v1/create-qr-code/?size=200x200&margin=4&data=${encodeURIComponent(w.address)}`;
            const card = document.createElement("div");
            card.className = "crypto-card";
            card.innerHTML = `
          <div class="crypto-top">
            <span class="crypto-name">${w.coin}</span>
            <span class="crypto-net">${w.network}</span>
          </div>
          <div class="qr-wrapper">
            <img src="${qrUrl}" alt="QR ${w.coin}" loading="lazy" />
          </div>
          <div class="wallet-box">${w.address}</div>
          <button type="button" class="btn-copy">${copyLabel}</button>
        `;
            const btn = card.querySelector(".btn-copy");
            btn.addEventListener("click", async () => {
                try {
                    await navigator.clipboard.writeText(w.address);
                    btn.textContent = copiedLabel;
                    setTimeout(() => (btn.textContent = copyLabel), 2000);
                } catch (_) {
                    alert(w.address);
                }
            });
            container.appendChild(card);
        });
    }

    // =========================================================
    // ENVÍO DEL FORMULARIO AL ENDPOINT PHP
    // =========================================================
    document.getElementById("preregForm").addEventListener("submit", async (e) => {
        e.preventDefault();
        const t = I18N[currentLang || "es"];
        const fb = document.getElementById("formFeedback");
        const btn = document.getElementById("btn-submit");

        // Honeypot check
        if (document.getElementById("hpWebsite").value !== "") return;

        const email = document.getElementById("email").value.trim();
        const country = document.getElementById("country").value.trim();
        const age = parseInt(document.getElementById("age").value, 10);

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email) || !country || isNaN(age) || age < 13 || age > 99) {
            fb.className = "form-feedback error";
            fb.textContent = t.msgInvalid;
            return;
        }

        btn.disabled = true;
        btn.textContent = t.btnSending;
        fb.className = "form-feedback";

        try {
            const response = await fetch(CONFIG.API_ENDPOINT, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json"
                },
                body: JSON.stringify({
                    email,
                    country,
                    age,
                    lang: currentLang
                })
            });

            const data = await response.json();

            if (response.ok && data.ok) {
                fb.className = "form-feedback success";
                fb.textContent = t.msgSuccess;
                document.getElementById("preregForm").reset();
            } else {
                fb.className = "form-feedback error";
                fb.textContent = data.message || t.msgError;
            }
        } catch (err) {
            fb.className = "form-feedback error";
            fb.textContent = t.msgError;
        } finally {
            btn.disabled = false;
            btn.textContent = t.btnSubmit;
        }
    });

    // Restaurar idioma si ya eligió antes
    const savedLang = localStorage.getItem("xelion_lang");
    if (savedLang && I18N[savedLang]) {
        selectLanguage(savedLang);
    }
    </script>
</body>

</html>