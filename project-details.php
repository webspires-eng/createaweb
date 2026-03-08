<?php
// Static project data — no database needed
$projects = [
    'tailor-management-system' => [
        'title' => 'Tailor Management System',
        'category' => 'Web Application',
        'image' => 'https://webspires.com.pk/wp-content/uploads/2026/01/Screenshot-2026-01-03-at-4.28.34-PM-1024x474.png',
        'description' => 'A Tailor Management System is a digital solution designed to simplify and organize the daily operations of tailoring businesses. It replaces manual registers and paperwork with an efficient, centralized system that manages orders, customer details, measurements, payments, and delivery timelines in one place.

With a Tailor Management System, tailors can store accurate customer measurements permanently, reducing errors and saving time on repeat orders. Each order can be tracked from booking to stitching to final delivery, ensuring deadlines are met and customers stay satisfied. The system also helps manage different garment types, fabrics, styles, and special instructions, making complex orders easier to handle.

Payment tracking is another major benefit. Tailors can record advance payments, remaining balances, and generate invoices or receipts, improving transparency and professionalism. Staff management features allow shop owners to monitor tailor assignments, workload, and productivity.

For growing tailoring businesses, reporting and insights are extremely valuable. A Tailor Management System can generate reports on daily sales, pending orders, completed jobs, and customer history, helping owners make better decisions.

Overall, a Tailor Management System saves time, reduces mistakes, improves customer experience, and helps tailoring businesses scale smoothly. It brings structure, efficiency, and modern management to a traditionally manual industry.',
        'website_url' => 'https://webspires.com.pk/projects/tailor-management-system/',
        'country' => 'Pakistan',
        'services' => 'Web Application, Custom Software',
        'year' => '2026',
        'prev' => null,
        'next' => 'smile-hair-transplant'
    ],
    'smile-hair-transplant' => [
        'title' => 'Smile Hair Transplant',
        'category' => 'Healthcare Website',
        'image' => 'https://webspires.com.pk/wp-content/uploads/2025/09/WhatsApp-Image-2025-08-13-at-12.06.09-PM.jpeg',
        'description' => 'Shahriyar Smile International Aesthetic Clinic is a modern destination for world-class dental and aesthetic treatments. With advanced technology and expert practitioners, the clinic offers everything from smile makeovers and cosmetic dentistry to skin and facial aesthetics. Their mission is to blend science with artistry, giving every client renewed confidence through personalized care. Whether it\'s enhancing a smile or rejuvenating skin, they stand for precision, innovation, and trust.',
        'website_url' => 'https://smilehairtransplant.com/',
        'country' => 'International',
        'services' => 'Web Design, SEO, Branding',
        'year' => '2025',
        'prev' => 'tailor-management-system',
        'next' => 'atv-dubai-buggy'
    ],
    'atv-dubai-buggy' => [
        'title' => 'ATV Dubai Buggy',
        'category' => 'Tourism Website',
        'image' => 'https://webspires.com.pk/wp-content/uploads/2025/09/Canam-Maverick-2-Seater-2025-Model.jpg',
        'description' => 'Experience the ultimate Arabian Desert Safari with thrilling dune bashing across the majestic red desert high dunes. Enjoy the breathtaking scenery of rolling sands and stunning terrain as you ride through this adventure-filled landscape, capturing the true beauty and spirit of the Arabian desert.',
        'website_url' => 'https://atvdubaibuggy.com/',
        'country' => 'UAE',
        'services' => 'Web Design, SEO, Google Ads',
        'year' => '2025',
        'prev' => 'smile-hair-transplant',
        'next' => 'atv-dubai-guide'
    ],
    'atv-dubai-guide' => [
        'title' => 'ATV Dubai Guide',
        'category' => 'Tourism Website',
        'image' => 'https://webspires.com.pk/wp-content/uploads/2025/09/IMG_6455.jpg',
        'description' => 'Atvdubaiguide Tour Company is registered under the Nova Vista Tourism L.L.C Trade license. Experience your dream adventure with Atvdubaiguide – Tourism Company. Our travel experts provide exceptional service and personalized assistance to ensure a seamless trip. Contact us to book your tour or get help with any travel issues, and let us make your dream adventure a reality.',
        'website_url' => 'https://atvdubaiguide.com/',
        'country' => 'UAE',
        'services' => 'Web Design, SEO, Content',
        'year' => '2025',
        'prev' => 'atv-dubai-buggy',
        'next' => 'al-nafi-travels'
    ],
    'al-nafi-travels' => [
        'title' => 'Al Nafi Travels',
        'category' => 'Travel & Visa',
        'image' => 'https://webspires.com.pk/wp-content/uploads/2025/05/imgi_43_3.jpg',
        'description' => 'Al Nafi Travels is a professionally designed website for a travel and visa consultancy based in Pakistan. We created the full online presence — from layout to lead generation — to communicate trust, expertise, and fast service for visa applicants.

Key contributions:
- Modern, clean design tailored for travel consultancy audiences
- Service-focused layout for visa info, FAQs, and application forms
- Multilingual SEO setup to rank for Pakistan-to-Gulf country visa keywords
- Mobile-first UX with optimized performance for low-bandwidth visitors
- Conversion-led structure including CTA buttons and WhatsApp integration

This project balances credibility with clarity — ideal for a service-based business where trust matters most.',
        'website_url' => 'https://alnafitravels.pk/',
        'country' => 'Pakistan',
        'services' => 'Web Design, SEO, Lead Gen',
        'year' => '2025',
        'prev' => 'atv-dubai-guide',
        'next' => 'khyber-wear'
    ],
    'khyber-wear' => [
        'title' => 'Khyber Wear',
        'category' => 'E-Commerce',
        'image' => 'https://webspires.com.pk/wp-content/uploads/2025/02/person-sitting-bed-with-laptop-1024x683.jpg',
        'description' => 'Khyber Wear is a custom-developed e-commerce platform for a modern ethnic clothing brand. We designed and built the entire website experience with a focus on cultural elegance, easy navigation, and conversion-driven shopping flows.

Key features include:
- Complete UI/UX design tailored for traditional fashion lovers
- E-commerce integration (catalog, cart, checkout, order flow)
- Mobile-first performance for customers browsing on the go
- SEO optimization to target fashion and ethnic wear searches
- Marketing content strategy focused on brand storytelling and seasonal drops

The project showcases how cultural heritage and modern e-commerce can blend to create a seamless online shopping experience.',
        'website_url' => 'http://khyberwear.com/',
        'country' => 'Pakistan',
        'services' => 'E-Commerce, Web Design, SEO',
        'year' => '2025',
        'prev' => 'al-nafi-travels',
        'next' => null
    ]
];

// Get slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// If not found, show 404
if (!isset($projects[$slug])) {
    include 'include/header.html';
    echo "<div style='min-height:60vh;display:flex;align-items:center;justify-content:center;flex-direction:column;background:#0d0d0d;padding:200px 20px 100px;'>
        <h2 style='color:#fff;font-size:36px;margin-bottom:20px;'>Project Not Found</h2>
        <p style='color:rgba(255,255,255,0.5);margin-bottom:30px;'>The project you're looking for doesn't exist or has been removed.</p>
        <a href='project' style='display:inline-flex;align-items:center;gap:8px;padding:14px 36px;background:linear-gradient(135deg,#f5a623,#e69a1e);color:#000;font-weight:700;border-radius:100px;text-transform:uppercase;letter-spacing:1px;text-decoration:none;'>Back to Projects</a>
    </div>";
    include 'include/footer.html';
    exit();
}

$p = $projects[$slug];
$prevSlug = $p['prev'];
$nextSlug = $p['next'];
$prevProject = $prevSlug ? $projects[$prevSlug] : null;
$nextProject = $nextSlug ? $projects[$nextSlug] : null;

// Get 3 other projects for "More Projects"
$otherSlugs = array_keys(array_diff_key($projects, [$slug => true]));
shuffle($otherSlugs);
$otherSlugs = array_slice($otherSlugs, 0, 3);

include 'include/header.html';
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

    .pd-hero {
        position: relative;
        min-height: 70vh;
        display: flex;
        align-items: flex-end;
        padding: 180px 0 80px;
        background: #0a0a0a;
        overflow: hidden;
    }

    .pd-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(10, 10, 10, 0.95) 0%, rgba(10, 10, 10, 0.5) 50%, rgba(10, 10, 10, 0.95) 100%);
        z-index: 1;
    }

    .pd-hero .bg-image {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: blur(2px) brightness(0.35);
    }

    .pd-hero .container {
        position: relative;
        z-index: 2;
    }

    .pd-breadcrumb {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 24px;
        flex-wrap: wrap;
    }

    .pd-breadcrumb a {
        color: rgba(255, 255, 255, 0.5);
        font-size: 14px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .pd-breadcrumb a:hover {
        color: #f5a623;
    }

    .pd-breadcrumb span {
        color: rgba(255, 255, 255, 0.3);
        font-size: 12px;
    }

    .pd-breadcrumb .current {
        color: #f5a623;
        font-size: 14px;
        font-weight: 500;
    }

    .pd-hero h1 {
        font-family: 'Inter', sans-serif !important;
        font-size: clamp(36px, 6vw, 64px);
        font-weight: 800;
        line-height: 1.1;
        color: #fff;
        margin-bottom: 24px;
        letter-spacing: -2px;
    }

    .pd-hero-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-top: 10px;
    }

    .pd-hero-meta .meta-pill {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 22px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 100px;
        backdrop-filter: blur(10px);
    }

    .pd-hero-meta .meta-pill i {
        color: #f5a623;
        font-size: 14px;
    }

    .pd-hero-meta .meta-pill .meta-label {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.4);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 500;
    }

    .pd-hero-meta .meta-pill .meta-value {
        font-size: 14px;
        color: #fff;
        font-weight: 600;
    }

    .pd-main-image {
        background: #0d0d0d;
        padding: 0 0 80px;
    }

    .pd-main-image .image-container {
        border-radius: 24px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .pd-main-image .image-container img {
        width: 100%;
        height: auto;
        max-height: 600px;
        object-fit: cover;
        display: block;
    }

    .pd-main-image .image-container .image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(245, 166, 35, 0.05) 0%, transparent 50%);
        pointer-events: none;
    }

    .pd-info {
        background: #0d0d0d;
        padding: 0 0 80px;
    }

    .pd-info-grid {
        display: grid;
        grid-template-columns: 1fr 360px;
        gap: 60px;
    }

    @media (max-width: 991px) {
        .pd-info-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }

    .pd-description .section-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        color: #f5a623;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }

    .pd-description .section-label::before {
        content: '';
        width: 30px;
        height: 2px;
        background: #f5a623;
        border-radius: 2px;
    }

    .pd-description h2 {
        font-family: 'Inter', sans-serif !important;
        font-size: 32px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 24px;
        line-height: 1.3;
    }

    .pd-description .desc-text {
        font-size: 16px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.6);
        white-space: pre-line;
    }

    .pd-description .desc-text p {
        margin-bottom: 16px;
        color: rgba(255, 255, 255, 0.6);
    }

    .pd-sidebar {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .pd-sidebar-card {
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        padding: 30px;
    }

    .pd-sidebar-card h4 {
        font-family: 'Inter', sans-serif !important;
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 24px;
        padding-bottom: 16px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .pd-sidebar-card .detail-row {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 12px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.04);
    }

    .pd-sidebar-card .detail-row:last-child {
        border-bottom: none;
    }

    .pd-sidebar-card .detail-row .detail-icon {
        width: 36px;
        height: 36px;
        min-width: 36px;
        border-radius: 10px;
        background: rgba(245, 166, 35, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f5a623;
        font-size: 14px;
    }

    .pd-sidebar-card .detail-row .detail-text {
        flex: 1;
    }

    .pd-sidebar-card .detail-row .detail-text .label {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.35);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 500;
        margin-bottom: 2px;
    }

    .pd-sidebar-card .detail-row .detail-text .value {
        font-size: 15px;
        color: #fff;
        font-weight: 600;
    }

    .pd-visit-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 16px 24px;
        background: linear-gradient(135deg, #f5a623, #e69a1e);
        color: #000;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 14px;
        text-decoration: none !important;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 20px rgba(245, 166, 35, 0.25);
    }

    .pd-visit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(245, 166, 35, 0.4);
        color: #000;
    }

    .pd-navigation {
        background: #0d0d0d;
        padding: 60px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .pd-nav-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }

    @media (max-width: 575px) {
        .pd-nav-grid {
            grid-template-columns: 1fr;
        }
    }

    .pd-nav-item {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 24px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        text-decoration: none !important;
        transition: all 0.4s ease;
    }

    .pd-nav-item:hover {
        border-color: rgba(245, 166, 35, 0.2);
        background: rgba(245, 166, 35, 0.04);
        transform: translateY(-3px);
    }

    .pd-nav-item.next {
        justify-content: flex-end;
        text-align: right;
        flex-direction: row-reverse;
    }

    .pd-nav-item .nav-arrow {
        width: 44px;
        height: 44px;
        min-width: 44px;
        border-radius: 50%;
        background: rgba(245, 166, 35, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f5a623;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .pd-nav-item:hover .nav-arrow {
        background: #f5a623;
        color: #000;
    }

    .pd-nav-item .nav-text .nav-label {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.4);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 4px;
    }

    .pd-nav-item .nav-text .nav-title {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        line-height: 1.3;
    }

    .pd-more-projects {
        background: #0a0a0a;
        padding: 80px 0 100px;
    }

    .pd-more-projects .section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .pd-more-projects .section-header h2 {
        font-family: 'Inter', sans-serif !important;
        font-size: clamp(28px, 4vw, 40px);
        font-weight: 800;
        color: #fff;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .pd-more-projects .section-header h2 span {
        background: linear-gradient(135deg, #f5a623, #f7c56e);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .pd-more-projects .section-header p {
        color: rgba(255, 255, 255, 0.45);
        font-size: 16px;
    }

    .more-projects-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    @media (max-width: 991px) {
        .more-projects-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 575px) {
        .more-projects-grid {
            grid-template-columns: 1fr;
        }
    }

    .more-projects-grid .mp-card {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none !important;
        display: block;
    }

    .more-projects-grid .mp-card:hover {
        transform: translateY(-8px);
        border-color: rgba(245, 166, 35, 0.25);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4), 0 0 40px rgba(245, 166, 35, 0.08);
    }

    .more-projects-grid .mp-card .mp-image {
        position: relative;
        width: 100%;
        height: 240px;
        overflow: hidden;
    }

    .more-projects-grid .mp-card .mp-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .more-projects-grid .mp-card:hover .mp-image img {
        transform: scale(1.08);
    }

    .more-projects-grid .mp-card .mp-image .mp-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(0, 0, 0, 0.65);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 100px;
        padding: 5px 14px;
        font-size: 11px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.85);
        z-index: 2;
    }

    .more-projects-grid .mp-card .mp-body {
        padding: 20px;
    }

    .more-projects-grid .mp-card .mp-body .mp-title {
        font-family: 'Inter', sans-serif !important;
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 6px;
        line-height: 1.3;
        transition: color 0.3s ease;
    }

    .more-projects-grid .mp-card:hover .mp-body .mp-title {
        color: #f5a623;
    }

    .more-projects-grid .mp-card .mp-body .mp-excerpt {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.4);
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .fade-up {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .fade-up.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<!-- GT Search Start -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" name="search" placeholder="Search Here...">
            <button type="submit" aria-label="search submit" class="search-btn">
                <span><i class="fa-regular fa-magnifying-glass"></i></span>
            </button>
        </form>
    </div>
</div>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- Hero Section -->
        <section class="pd-hero">
            <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['title']; ?>" class="bg-image">
            <div class="container">
                <div class="pd-breadcrumb">
                    <a href="index">Home</a>
                    <span>/</span>
                    <a href="project">Projects</a>
                    <span>/</span>
                    <span class="current"><?php echo $p['title']; ?></span>
                </div>
                <h1><?php echo $p['title']; ?></h1>
                <div class="pd-hero-meta">
                    <div class="meta-pill">
                        <i class="fa-solid fa-tag"></i>
                        <div>
                            <div class="meta-label">Category</div>
                            <div class="meta-value"><?php echo $p['category']; ?></div>
                        </div>
                    </div>
                    <div class="meta-pill">
                        <i class="fa-solid fa-globe"></i>
                        <div>
                            <div class="meta-label">Country</div>
                            <div class="meta-value"><?php echo $p['country']; ?></div>
                        </div>
                    </div>
                    <div class="meta-pill">
                        <i class="fa-solid fa-calendar"></i>
                        <div>
                            <div class="meta-label">Year</div>
                            <div class="meta-value"><?php echo $p['year']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Image -->
        <section class="pd-main-image">
            <div class="container">
                <div class="image-container fade-up">
                    <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['title']; ?>">
                    <div class="image-overlay"></div>
                </div>
            </div>
        </section>

        <!-- Project Info -->
        <section class="pd-info">
            <div class="container">
                <div class="pd-info-grid">
                    <div class="pd-description fade-up">
                        <div class="section-label">About This Project</div>
                        <h2><?php echo $p['title']; ?></h2>
                        <div class="desc-text"><?php echo nl2br(htmlspecialchars($p['description'])); ?></div>
                    </div>
                    <div class="pd-sidebar">
                        <div class="pd-sidebar-card fade-up">
                            <h4>Project Details</h4>
                            <div class="detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-user"></i></div>
                                <div class="detail-text">
                                    <div class="label">Client</div>
                                    <div class="value"><?php echo $p['title']; ?></div>
                                </div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-tag"></i></div>
                                <div class="detail-text">
                                    <div class="label">Category</div>
                                    <div class="value"><?php echo $p['category']; ?></div>
                                </div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-code"></i></div>
                                <div class="detail-text">
                                    <div class="label">Services</div>
                                    <div class="value"><?php echo $p['services']; ?></div>
                                </div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-globe"></i></div>
                                <div class="detail-text">
                                    <div class="label">Country</div>
                                    <div class="value"><?php echo $p['country']; ?></div>
                                </div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-calendar"></i></div>
                                <div class="detail-text">
                                    <div class="label">Year</div>
                                    <div class="value"><?php echo $p['year']; ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $p['website_url']; ?>" target="_blank" rel="noopener" class="pd-visit-btn">
                            <i class="fa-solid fa-external-link-alt"></i>
                            Visit Live Website
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Navigation -->
        <section class="pd-navigation">
            <div class="container">
                <div class="pd-nav-grid">
                    <?php if ($prevProject): ?>
                        <a href="project-details?slug=<?php echo $prevSlug; ?>" class="pd-nav-item prev">
                            <div class="nav-arrow"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="nav-text">
                                <div class="nav-label">Previous Project</div>
                                <div class="nav-title"><?php echo $prevProject['title']; ?></div>
                            </div>
                        </a>
                    <?php else: ?><div></div><?php endif; ?>

                    <?php if ($nextProject): ?>
                        <a href="project-details?slug=<?php echo $nextSlug; ?>" class="pd-nav-item next">
                            <div class="nav-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                            <div class="nav-text">
                                <div class="nav-label">Next Project</div>
                                <div class="nav-title"><?php echo $nextProject['title']; ?></div>
                            </div>
                        </a>
                    <?php else: ?><div></div><?php endif; ?>
                </div>
            </div>
        </section>

        <!-- More Projects -->
        <section class="pd-more-projects">
            <div class="container">
                <div class="section-header fade-up">
                    <h2>More <span>Projects</span></h2>
                    <p>Explore other projects from our portfolio</p>
                </div>
                <div class="more-projects-grid">
                    <?php foreach ($otherSlugs as $os):
                        $op = $projects[$os];
                        $shortDesc = mb_substr($op['description'], 0, 90) . '...';
                    ?>
                        <a href="project-details?slug=<?php echo $os; ?>" class="mp-card fade-up">
                            <div class="mp-image">
                                <img src="<?php echo $op['image']; ?>" alt="<?php echo $op['title']; ?>" loading="lazy">
                                <span class="mp-badge"><?php echo $op['category']; ?></span>
                            </div>
                            <div class="mp-body">
                                <div class="mp-title"><?php echo $op['title']; ?></div>
                                <p class="mp-excerpt"><?php echo htmlspecialchars($shortDesc); ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
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
                document.querySelectorAll('.fade-up').forEach(function(el) {
                    observer.observe(el);
                });
            });
        </script>