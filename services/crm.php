<?php
require_once __DIR__ . '/../include/db.php';
include __DIR__ . '/../include/header.html';

// $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
// $stmt->execute([$id]);
// $service = $stmt->fetch();

// if (!$service) {
//     echo "<div class='container pt-150 pb-150 text-center'><h2>Service not found</h2><a href='service.php' class='btn btn-primary mt-3'>Back to Services</a></div>";
//     include __DIR__ . '/../include/footer.html';
//     exit();
// }
// 
?>



<div id="smooth-wrapper">
    <div id="smooth-content">
        <div class="service-details-area">
            <div class="service-details-wrapper mb-10">
                <div class="thumb-content mb-40">
                    <div class="thumb">
                        <div class="service-header-content">
                            <h1 class="">CRM (Customer Relationship Management)</h1>
                            <p>Transform Your Customer Relationships with a Powerful, Custom-Built CRM System</p>
                        </div>
                        <img src="assets/services/imgs/1772258499_crm-business-company-strategy-marketing-concept.jpg" alt="CRM (Customer Relationship Management)" style="width: 100%; height: auto; border-radius: 0px;">
                    </div>

                </div>

                <div class="container">
                    <div class="section-title text-center">
                        <!-- <div class="sub-title">Service details</div> -->

                    </div>

                    <div class="main-content">


                        <div class="text-content mb-50">
                            <div class="text">

                                <div class="row mb-20">
                                    <div class="col-md-10 mx-auto text-center">
                                        <div class="text-title">
                                            <h4>CRM (Customer Relationship Management)
                                            </h4>
                                        </div>
                                        <div class="text">
                                            <p>At CreateAweb, we design and develop powerful CRM systems that simplify your operations, automate your follow-ups, and transform customer data into predictable, measurable growth.

                                                In today’s competitive market, businesses that respond faster, track data better, and nurture leads consistently are the ones that win. A well-implemented CRM system is no longer a “nice to have” it’s a growth engine.</p>
                                            <p>Whether you need a fully custom-built CRM from the ground up or want to improve and optimise your current system, we create tailored solutions that align seamlessly with your processes, team structure, and long-term business goals.

                                            </p>

                                            <h4>Our CRM Development Services</h4>

                                            <p>CreateAweb provides complete CRM solutions across the UK, helping businesses improve operational efficiency, increase visibility across sales pipelines, and maximise conversion performance. We don’t believe in one-size-fits-all platforms. Every business operates differently and your CRM should reflect that.</p>

                                            <div class="text-center">
                                                <a href="contact.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">Request a Free CRM Consultation</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!-- <div class="row align-items-center my-5 mb-20">
                                <div class="col-lg-5">
                                    <div class="img">
                                        <img src="assets/services/imgs/Integrating-CRM-and-ERP-Crucial-Sync-Points.jpg" width="100%" alt="CRM and ERP Integration">
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <div class="text-title">
                                        <h4>CRM (Customer Relationship Management)
                                        </h4>
                                    </div>
                                    <div class="text">
                                        <p>At CreateAweb, we design and develop powerful CRM systems that simplify your operations, automate your follow-ups, and transform customer data into predictable, measurable growth.

                                            In today’s competitive market, businesses that respond faster, track data better, and nurture leads consistently are the ones that win. A well-implemented CRM system is no longer a “nice to have” it’s a growth engine.</p>
                                        <p>Whether you need a fully custom-built CRM from the ground up or want to improve and optimise your current system, we create tailored solutions that align seamlessly with your processes, team structure, and long-term business goals.

                                        </p>

                                        <h4>Our CRM Development Services</h4>

                                        <p>CreateAweb provides complete CRM solutions across the UK, helping businesses improve operational efficiency, increase visibility across sales pipelines, and maximise conversion performance. We don’t believe in one-size-fits-all platforms. Every business operates differently and your CRM should reflect that.</p>

                                    </div>

                                </div>
                            </div> -->

                            <div class="row flex-row-reverse align-items-center my-5 mb-20">
                                <div class="col-lg-5">
                                    <div class="img">
                                        <img src="assets/services/imgs/7131715.jpg" width="100%" alt="Custom CRM Development">
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <div class="text-title">
                                        <h4>Custom CRM Development
                                        </h4>
                                    </div>
                                    <div class="text">
                                        <p>Your CRM should work around your workflow, not force you to change how you operate. We design and build CRM systems that are structured around your real-world processes, ensuring you and your team can work faster, smarter, and with full visibility.</p>
                                        <p>Our custom CRM development includes:</p>

                                        <ul>
                                            <li>Tailored lead capture and pipeline management</li>
                                            <li>Job and project tracking dashboards</li>
                                            <li>Automated sales workflows</li>
                                            <li>Team performance monitoring</li>
                                            <li>Custom reporting dashboards</li>
                                            <li>Integration with your existing tools and software</li>
                                        </ul>

                                        <p>By building a CRM specifically for your business model, we eliminate unnecessary complexity and focus only on features that deliver value. The result? Higher efficiency, clearer reporting, and improved conversion rates.</p>

                                    </div>

                                </div>
                            </div>

                            <div class="row  align-items-center my-5 mb-20">
                                <div class="col-lg-5">
                                    <div class="img">
                                        <img src="assets/services/imgs/25632136_7090027.jpg" width="100%" alt="CRM Strategy & Consulting">
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <div class="text-title">
                                        <h4>CRM Strategy & Consulting
                                        </h4>
                                    </div>
                                    <div class="text">
                                        <p>Before building or upgrading any CRM system, strategy matters.</p>
                                        <p>Many businesses struggle with CRM adoption not because the software is poor but because the implementation lacked clarity and structure.</p>
                                        <p>Our CRM consulting service begins with a detailed analysis of your:</p>

                                        <ul>
                                            <li>Current sales process</li>
                                            <li>Lead handling procedures</li>
                                            <li>Customer journey</li>
                                            <li>Internal communication systems</li>
                                            <li>Reporting requirements</li>
                                        </ul>

                                        <p>We identify bottlenecks, inefficiencies, and missed opportunities, then design a CRM roadmap that supports automation, growth, and scalability.</p>
                                        <p>The outcome is a structured CRM strategy that reduces admin, shortens response times, and increases revenue opportunities without overwhelming your team.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="row flex-row-reverse  align-items-center my-5 mb-20">
                                <div class="col-lg-5">
                                    <div class="img">
                                        <img src="assets/services/imgs/10603911_42939.jpg" width="100%" alt="CRM Data Migration">
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <div class="text-title">
                                        <h4>CRM Data Migration</h4>
                                    </div>
                                    <div class="text">
                                        <p>Switching CRM platforms can feel risky especially when valuable customer data is involved.</p>
                                        <p>At CreateAweb, we manage the entire migration process securely and professionally, ensuring:</p>

                                        <ul>
                                            <li>Complete data integrity</li>
                                            <li>No duplication or data loss</li>
                                            <li>Clean data structuring</li>
                                            <li>Secure transfer protocols</li>
                                            <li>Minimal disruption to daily operations</li>
                                        </ul>

                                        <p>We also take this opportunity to clean and organise your data, ensuring your new CRM starts with accurate, usable information that supports better reporting and automation.

                                            A smooth migration ensures business continuity while positioning you for long-term improvement.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="row  align-items-center my-5 mb-20">
                                <div class="col-lg-5">
                                    <div class="img">
                                        <img src="assets/services/imgs/29765876_7591475.svg" width="100%" alt="CRM Reporting & Analytics">
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <div class="text-title">
                                        <h4>CRM Reporting & Analytics</h4>
                                    </div>
                                    <div class="text">
                                        <p>Data is only powerful if you can understand and use it.</p>

                                        <p>Our CRM reporting systems provide real-time visibility into:</p>

                                        <ul>
                                            <li>Lead sources and conversion rates</li>
                                            <li>Sales team performance</li>
                                            <li>Customer acquisition cost</li>
                                            <li>ROI from marketing campaigns</li>
                                            <li>Customer lifetime value</li>
                                            <li>Pipeline forecasting</li>
                                        </ul>


                                        <p>Instead of guessing what’s working, you’ll have clear dashboards and actionable insights that help you make confident business decisions.</p>

                                        <p>We transform complex data into easy-to-read reports that allow you to:</p>

                                        <ul>
                                            <li>Optimise marketing spend</li>
                                            <li>Improve follow-up performance</li>
                                            <li>Identify your most profitable services</li>
                                            <li>Spot growth opportunities early</li>
                                        </ul>

                                        <p>When you can see the full picture, growth becomes intentional not accidental.</p>

                                    </div>

                                </div>
                            </div>

                            <div class="row flex-row-reverse  align-items-center my-5 mb-20">
                                <div class="col-lg-5">
                                    <div class="img">
                                        <img src="assets/services/imgs/25560321_7034379.svg" width="100%" alt="Ongoing CRM Support & Optimisation">
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <div class="text-title">
                                        <h4>Ongoing CRM Support & Optimisation</h4>
                                    </div>
                                    <div class="text">
                                        <p>A CRM is not a one-time setup — it’s a living system that should evolve with your business.</p>

                                        <p>As your company grows, launches new services, hires new team members, or changes strategy, your CRM needs to adapt accordingly.</p>

                                        <p>Our ongoing support includes:</p>

                                        <ul>
                                            <li>System updates and enhancements</li>
                                            <li>Workflow refinements</li>
                                            <li>Automation improvements</li>
                                            <li>Troubleshooting and technical assistance</li>
                                            <li>Team training and onboarding</li>
                                            <li>Performance optimisation reviews</li>
                                        </ul>

                                        <br />

                                        <p>We act as your long-term CRM partner, ensuring your system continues to improve efficiency, strengthen customer relationships, and increase profitability.</p>

                                    </div>

                                </div>
                            </div>

                            <!-- <?php echo $service['description']; ?> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <div class="contact-form-area">
        <div class="contact-form-wrapper pt-150 pb-150">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-xl-4 col-lg-4">
                        <div class="address-meta">
                            <div class="address-meta-items">
                                <div class="address-title">USA</div>
                                <span>New York,<br> 287 Park Avenue South</span>
                            </div>

                            <div class="address-meta-items">
                                <div class="address-title">Poland</div>
                                <span>Katowice,<br>Armii Krajowej St., 322</span>
                            </div>

                            <div class="address-meta-items">
                                <div class="address-title">Ukraine</div>
                                <span>Kyiv,<br>Goncharnaya St., 9a</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="form-title">
                            Get a design consultation free quote
                        </div>
                        <div class="contact-form">
                            <div class="container">
                                <form action="#" method="post">
                                    <div class="row gy-3">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="name">
                                        </div>

                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="email address">
                                        </div>

                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="about project">
                                        </div>

                                        <div class="col-lg-6">
                                            <select class="form-control" name="subject">
                                                <option value="" disabled selected>where did you hear about us?
                                                </option>
                                                <option value="web">Web Development</option>
                                                <option value="design">Web Design</option>
                                                <option value="consult">Consultation</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-12">
                                            <textarea class="form-control" name="message" rows="5"
                                                placeholder="write about project . . ." required></textarea>
                                        </div>

                                        <div class="col-xl-6 col-lg-12">
                                            <div class="move-btn">
                                                <div class="gt-hover-btn-wrapper mt-0">
                                                    <button type="submit"
                                                        class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                        <span class="gt-btn-circle-text-2">send message</span>
                                                        <i class="gt-btn-circle-dot"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section Start -->

    <?php include __DIR__ . '/../include/footer.html'; ?>