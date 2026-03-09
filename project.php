<?php include 'include/header.html'; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

    /* ===== Hero ===== */
    .projects-hero {
        position: relative;
        padding: 180px 0 100px;
        background: linear-gradient(135deg, #fafafa 0%, #f0efe9 50%, #fafafa 100%);
        overflow: hidden;
        text-align: center;
    }

    .projects-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(ellipse at 30% 50%, rgba(245, 166, 35, 0.06) 0%, transparent 50%),
            radial-gradient(ellipse at 70% 50%, rgba(245, 166, 35, 0.04) 0%, transparent 50%);
        animation: heroGlow 8s ease-in-out infinite alternate;
    }

    @keyframes heroGlow {
        0% {
            transform: translate(0, 0) rotate(0deg);
        }

        100% {
            transform: translate(2%, -2%) rotate(3deg);
        }
    }

    .projects-hero .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(245, 166, 35, 0.1);
        border: 1px solid rgba(245, 166, 35, 0.25);
        border-radius: 100px;
        padding: 8px 24px;
        margin-bottom: 30px;
        color: #c78a1a;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        position: relative;
        z-index: 1;
    }

    .projects-hero .hero-badge .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #f5a623;
        animation: pulseDot 2s ease-in-out infinite;
    }

    @keyframes pulseDot {

        0%,
        100% {
            opacity: .4;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.3);
        }
    }

    .projects-hero h1 {
        font-family: 'Inter', sans-serif !important;
        font-size: clamp(42px, 7vw, 80px);
        font-weight: 800;
        line-height: 1.1;
        color: #1a1a1a;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
        letter-spacing: -2px;
    }

    .projects-hero h1 span {
        background: linear-gradient(135deg, #f5a623, #d4891a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .projects-hero .hero-subtitle {
        font-size: 18px;
        color: #6b6b6b;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.7;
        position: relative;
        z-index: 1;
    }

    .projects-hero .grid-pattern {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 80px;
        background: linear-gradient(to top, #fff, transparent);
        z-index: 1;
    }

    /* ===== Filter ===== */
    .projects-filter-section {
        background: #fff;
        padding: 0 0 50px;
    }

    .filter-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
        padding: 30px 0;
    }

    .filter-btn {
        padding: 10px 28px;
        border: 1px solid #e0e0e0;
        background: #fff;
        color: #666;
        border-radius: 100px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all .35s cubic-bezier(.4, 0, .2, 1);
        letter-spacing: .3px;
    }

    .filter-btn:hover {
        color: #c78a1a;
        border-color: rgba(245, 166, 35, 0.5);
        background: rgba(245, 166, 35, 0.05);
    }

    .filter-btn.active {
        background: linear-gradient(135deg, #f5a623, #e69a1e);
        color: #fff;
        border-color: #f5a623;
        font-weight: 600;
        box-shadow: 0 4px 20px rgba(245, 166, 35, 0.25);
    }

    /* ===== Grid ===== */
    .projects-grid-section {
        background: #fff;
        padding: 0 0 100px;
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    @media(max-width:991px) {
        .projects-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width:575px) {
        .projects-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }
    }

    /* ===== Card ===== */
    .project-card {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        background: #fff;
        border: 1px solid #eee;
        transition: all .5s cubic-bezier(.4, 0, .2, 1);
        cursor: pointer;
        text-decoration: none !important;
        display: block;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
    }

    .project-card:hover {
        transform: translateY(-8px);
        border-color: rgba(245, 166, 35, 0.3);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1), 0 0 30px rgba(245, 166, 35, 0.06);
    }

    .project-card .card-image {
        position: relative;
        width: 100%;
        height: 280px;
        overflow: hidden;
    }

    .project-card .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .7s cubic-bezier(.4, 0, .2, 1);
    }

    .project-card:hover .card-image img {
        transform: scale(1.08);
    }

    .project-card .card-image .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.05) 50%, transparent 100%);
        opacity: 0;
        transition: opacity .5s ease;
        display: flex;
        align-items: flex-end;
        padding: 24px;
    }

    .project-card:hover .card-image .overlay {
        opacity: 1;
    }

    .project-card .card-image .overlay .view-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #f5a623;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .project-card .card-image .overlay .view-link svg {
        transition: transform .3s ease;
    }

    .project-card:hover .card-image .overlay .view-link svg {
        transform: translate(3px, -3px);
    }

    .project-card .card-image .category-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(0, 0, 0, 0.06);
        border-radius: 100px;
        padding: 6px 16px;
        font-size: 12px;
        font-weight: 600;
        color: #333;
        z-index: 2;
        letter-spacing: .5px;
    }

    .project-card .card-body-content {
        padding: 24px;
    }

    .project-card .card-body-content .card-title {
        font-family: 'Inter', sans-serif !important;
        font-size: 20px;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 8px;
        line-height: 1.3;
        transition: color .3s ease;
    }

    .project-card:hover .card-body-content .card-title {
        color: #c78a1a;
    }

    .project-card .card-body-content .card-excerpt {
        font-size: 14px;
        color: #888;
        line-height: 1.6;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .project-card .card-body-content .card-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 16px;
        border-top: 1px solid #f0f0f0;
    }

    .project-card .card-body-content .card-meta .meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        color: #999;
    }

    .project-card .card-body-content .card-meta .meta-item i {
        color: #f5a623;
        font-size: 12px;
    }

    .project-card .card-body-content .card-meta .arrow-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: rgba(245, 166, 35, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all .3s ease;
    }

    .project-card:hover .card-body-content .card-meta .arrow-icon {
        background: #f5a623;
    }

    .project-card .card-body-content .card-meta .arrow-icon svg {
        transition: all .3s ease;
    }

    .project-card:hover .card-body-content .card-meta .arrow-icon svg path {
        fill: #fff;
    }

    /* ===== Stats ===== */
    .projects-stats {
        background: linear-gradient(135deg, #faf9f6 0%, #f5f3ef 100%);
        padding: 80px 0;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }

    @media(max-width:767px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .stat-item {
        text-align: center;
        padding: 30px 20px;
        border-radius: 16px;
        background: #fff;
        border: 1px solid #eee;
        transition: all .4s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    }

    .stat-item:hover {
        border-color: rgba(245, 166, 35, 0.25);
        box-shadow: 0 8px 30px rgba(245, 166, 35, 0.08);
        transform: translateY(-4px);
    }

    .stat-item .stat-number {
        font-family: 'Inter', sans-serif !important;
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, #f5a623, #d4891a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1;
        margin-bottom: 8px;
    }

    .stat-item .stat-label {
        font-size: 14px;
        color: #999;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-weight: 500;
    }

    /* ===== CTA ===== */
    .projects-cta {
        background: #fff;
        padding: 100px 0;
        text-align: center;
    }

    .cta-inner {
        max-width: 700px;
        margin: 0 auto;
        padding: 60px 40px;
        border-radius: 24px;
        background: linear-gradient(135deg, rgba(245, 166, 35, 0.06) 0%, rgba(245, 166, 35, 0.02) 100%);
        border: 1px solid rgba(245, 166, 35, 0.15);
        position: relative;
        overflow: hidden;
    }

    .cta-inner::before {
        content: '';
        position: absolute;
        top: -100px;
        right: -100px;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(245, 166, 35, 0.1) 0%, transparent 70%);
        border-radius: 50%;
    }

    .cta-inner h2 {
        font-family: 'Inter', sans-serif !important;
        font-size: clamp(28px, 4vw, 40px);
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 16px;
        line-height: 1.2;
        position: relative;
        z-index: 1;
    }

    .cta-inner p {
        font-size: 16px;
        color: #888;
        margin-bottom: 32px;
        position: relative;
        z-index: 1;
    }

    .cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 16px 40px;
        background: linear-gradient(135deg, #f5a623, #e69a1e);
        color: #fff;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 100px;
        text-decoration: none !important;
        transition: all .4s cubic-bezier(.4, 0, .2, 1);
        position: relative;
        z-index: 1;
        box-shadow: 0 4px 20px rgba(245, 166, 35, 0.25);
    }

    .cta-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(245, 166, 35, 0.35);
        color: #fff;
    }

    /* Animations */
    .fade-up {
        opacity: 0;
        transform: translateY(40px);
        transition: all .7s cubic-bezier(.4, 0, .2, 1);
    }

    .fade-up.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .project-card {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity .6s ease, transform .6s ease;
    }

    .project-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .floating-dot {
        position: absolute;
        border-radius: 50%;
        background: rgba(245, 166, 35, 0.1);
        animation: floatDot 6s ease-in-out infinite alternate;
    }

    @keyframes floatDot {
        0% {
            transform: translateY(0) scale(1);
        }

        100% {
            transform: translateY(-20px) scale(1.1);
        }
    }
</style>

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" name="search" placeholder="Search Here...">
            <button type="submit" aria-label="search submit" class="search-btn"><span><i class="fa-regular fa-magnifying-glass"></i></span></button>
        </form>
    </div>
</div>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <section class="projects-hero">
            <!-- <div class="floating-dot" style="width:80px;height:80px;top:20%;left:10%;"></div>
            <div class="floating-dot" style="width:40px;height:40px;top:60%;right:15%;animation-delay:2s;"></div>
            <div class="floating-dot" style="width:60px;height:60px;bottom:20%;left:30%;animation-delay:4s;"></div> -->
            <div class="container">
                <div class="hero-badge fade-up"><span class="dot"></span> Our Portfolio</div>
                <h1 class="fade-up">Our <span>Projects</span></h1>
                <p class="hero-subtitle fade-up">Explore our portfolio of impactful digital solutions — from custom web applications to stunning e-commerce platforms.</p>
            </div>
            <div class="grid-pattern"></div>
        </section>



        <section class="projects-grid-section">
            <div class="container">
                <div class="projects-grid">

                    <a href="projects/tailor-management-system" class="project-card" data-category="web-application">
                        <div class="card-image">
                            <img src="https://webspires.com.pk/wp-content/uploads/2026/01/Screenshot-2026-01-03-at-4.28.34-PM-1024x474.png" alt="Tailor Management System" loading="lazy">
                            <span class="category-badge">Web Application</span>
                            <div class="overlay"><span class="view-link">View Project <svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></span></div>
                        </div>
                        <div class="card-body-content">
                            <div class="card-title">Tailor Management System</div>
                            <p class="card-excerpt">A digital solution designed to simplify and organize the daily operations of tailoring businesses...</p>
                            <div class="card-meta">
                                <div class="meta-item"><i class="fa-solid fa-globe"></i> Pakistan</div>
                                <div class="arrow-icon"><svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>

                    <a href="projects/smile-hair-transplant" class="project-card" data-category="healthcare-website">
                        <div class="card-image">
                            <img src="https://webspires.com.pk/wp-content/uploads/2025/09/WhatsApp-Image-2025-08-13-at-12.06.09-PM.jpeg" alt="Smile Hair Transplant" loading="lazy">
                            <span class="category-badge">Healthcare Website</span>
                            <div class="overlay"><span class="view-link">View Project <svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></span></div>
                        </div>
                        <div class="card-body-content">
                            <div class="card-title">Smile Hair Transplant</div>
                            <p class="card-excerpt">Shahriyar Smile International Aesthetic Clinic — a modern destination for world-class dental and aesthetic treatments...</p>
                            <div class="card-meta">
                                <div class="meta-item"><i class="fa-solid fa-globe"></i> International</div>
                                <div class="arrow-icon"><svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>

                    <a href="projects/atv-dubai-buggy" class="project-card" data-category="tourism-website">
                        <div class="card-image">
                            <img src="https://webspires.com.pk/wp-content/uploads/2025/09/Canam-Maverick-2-Seater-2025-Model.jpg" alt="ATV Dubai Buggy" loading="lazy">
                            <span class="category-badge">Tourism Website</span>
                            <div class="overlay"><span class="view-link">View Project <svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></span></div>
                        </div>
                        <div class="card-body-content">
                            <div class="card-title">ATV Dubai Buggy</div>
                            <p class="card-excerpt">Experience the ultimate Arabian Desert Safari with thrilling dune bashing across the majestic red desert high dunes...</p>
                            <div class="card-meta">
                                <div class="meta-item"><i class="fa-solid fa-globe"></i> UAE</div>
                                <div class="arrow-icon"><svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>

                    <a href="projects/atv-dubai-guide" class="project-card" data-category="tourism-website">
                        <div class="card-image">
                            <img src="https://webspires.com.pk/wp-content/uploads/2025/09/IMG_6455.jpg" alt="ATV Dubai Guide" loading="lazy">
                            <span class="category-badge">Tourism Website</span>
                            <div class="overlay"><span class="view-link">View Project <svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></span></div>
                        </div>
                        <div class="card-body-content">
                            <div class="card-title">ATV Dubai Guide</div>
                            <p class="card-excerpt">Experience your dream adventure with Atvdubaiguide — exceptional service and personalized assistance...</p>
                            <div class="card-meta">
                                <div class="meta-item"><i class="fa-solid fa-globe"></i> UAE</div>
                                <div class="arrow-icon"><svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>

                    <a href="projects/al-nafi-travels" class="project-card" data-category="travel-and-visa">
                        <div class="card-image">
                            <img src="https://webspires.com.pk/wp-content/uploads/2025/05/imgi_43_3.jpg" alt="Al Nafi Travels" loading="lazy">
                            <span class="category-badge">Travel &amp; Visa</span>
                            <div class="overlay"><span class="view-link">View Project <svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></span></div>
                        </div>
                        <div class="card-body-content">
                            <div class="card-title">Al Nafi Travels</div>
                            <p class="card-excerpt">A professionally designed website for a travel and visa consultancy based in Pakistan...</p>
                            <div class="card-meta">
                                <div class="meta-item"><i class="fa-solid fa-globe"></i> Pakistan</div>
                                <div class="arrow-icon"><svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>

                    <a href="projects/khyber-wear" class="project-card" data-category="e-commerce">
                        <div class="card-image">
                            <img src="https://webspires.com.pk/wp-content/uploads/2025/02/person-sitting-bed-with-laptop-1024x683.jpg" alt="Khyber Wear" loading="lazy">
                            <span class="category-badge">E-Commerce</span>
                            <div class="overlay"><span class="view-link">View Project <svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></span></div>
                        </div>
                        <div class="card-body-content">
                            <div class="card-title">Khyber Wear</div>
                            <p class="card-excerpt">A custom-developed e-commerce platform for a modern ethnic clothing brand with cultural elegance...</p>
                            <div class="card-meta">
                                <div class="meta-item"><i class="fa-solid fa-globe"></i> Pakistan</div>
                                <div class="arrow-icon"><svg width="14" height="14" viewBox="0 0 13 13" fill="none">
                                        <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#f5a623" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </section>

        <section class="projects-stats">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item fade-up">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Projects Delivered</div>
                    </div>
                    <div class="stat-item fade-up">
                        <div class="stat-number">30+</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                    <div class="stat-item fade-up">
                        <div class="stat-number">5+</div>
                        <div class="stat-label">Countries Served</div>
                    </div>
                    <div class="stat-item fade-up">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects-cta">
            <div class="container">
                <div class="cta-inner fade-up">
                    <h2>Have a project in mind?</h2>
                    <p>Let's collaborate and build something extraordinary together. Your vision, our expertise.</p>
                    <a href="contact" class="cta-btn">Start a Project <svg width="16" height="16" viewBox="0 0 13 13" fill="none">
                            <path d="M10.021 3.414L1.414 12.021L0 10.607L8.60599 2H1.021V0H12.021V11H10.021V3.414Z" fill="#fff" />
                        </svg></a>
                </div>
            </div>
        </section>

        <?php include 'include/footer.html'; ?>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                });
                document.querySelectorAll('.fade-up, .project-card').forEach(function(el) {
                    observer.observe(el);
                });
                document.querySelectorAll('.filter-btn').forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        document.querySelectorAll('.filter-btn').forEach(function(b) {
                            b.classList.remove('active');
                        });
                        this.classList.add('active');
                        var filter = this.dataset.filter;
                        document.querySelectorAll('.project-card').forEach(function(card, i) {
                            card.style.transition = 'opacity .3s ease, transform .3s ease';
                            if (filter === 'all' || card.dataset.category === filter) {
                                card.style.display = 'block';
                                setTimeout(function() {
                                    card.style.opacity = '1';
                                    card.style.transform = 'translateY(0)';
                                }, i * 80);
                            } else {
                                card.style.opacity = '0';
                                card.style.transform = 'translateY(20px)';
                                setTimeout(function() {
                                    card.style.display = 'none';
                                }, 300);
                            }
                        });
                    });
                });
            });
        </script>