SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `admins`;


CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `admins` VALUES('1', 'admin', '$2y$12$KynPlR1ELB2FfAMPf/UvQ.L9X6RZKHEcot.mpU/.jkiGtojhETeOa');



DROP TABLE IF EXISTS `blogs`;


CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `blogs` VALUES('1', 'SEO Fundamentals', 'For UK businesses, SEO fundamentals remain essential because search continues to be one of the primary ways customers discover products and services online. Ofcom research shows that Google Search is used by more than 80% of UK adults and still accounts for billions of searches each month, despite the growth of social media and AI-driven platforms. A strong SEO foundation begins with technical optimisation, ensuring websites are fast, mobile-friendly, secure, and easily crawlable by search engines. These elements allow search engines to accurately discover, understand, and rank content. Alongside technical performance, high-quality, intent-led content is critical. Google’s own guidance highlights the importance of creating content that clearly answers user needs, demonstrates expertise, and supports decision-making. Trust and authority signals also play a key role for UK consumers, including clear service pages, transparent business information, customer reviews, and case studies. As search results increasingly feature AI summaries and rich results, businesses must structure content with clear headings, concise explanations, and well-organised FAQs. This approach improves visibility while still driving qualified traffic and meaningful enquiries.\r\n', 'Jannat', 'assets/uploads/blog_1770803989_car recovery.jpg', '2026-02-11 09:32:55');
INSERT INTO `blogs` VALUES('2', 'Data Driven decision making', 'Data-driven decision making has become essential for UK businesses seeking sustainable growth and measurable marketing performance. Research from the Office for National Statistics shows that businesses using data analytics are significantly more likely to improve productivity, customer retention, and profitability. In marketing, this means moving beyond assumptions and using real performance data to guide strategy, from audience targeting and channel selection to content creation and budget allocation. Platforms such as analytics tools, CRM systems, and conversion tracking allow businesses to understand how users behave, where they drop off, and which actions drive results. Ofcom also highlights that UK consumers now interact with brands across multiple digital touchpoints, making accurate data analysis critical for consistent and effective messaging. When data is applied correctly, it enables continuous optimisation, clearer ROI measurement, and more confident decision making. This evidence-led approach helps businesses reduce wasted spend, respond faster to market changes, and build marketing strategies that are aligned with real customer behaviour rather than guesswork.\r\n', 'admin', '', '2026-02-11 10:01:21');
INSERT INTO `blogs` VALUES('3', 'Branding - Case studies ', 'A UK-based professional services firm partnered with Createaweb to address a disconnect between the quality of its services and how the brand was perceived in the market. While the business had a strong reputation with existing clients, its branding lacked clarity and consistency across its website, proposals, and marketing materials. This made it difficult for potential clients to understand its value proposition and reduced confidence at key decision-making stages.\r\nCreateaweb began the project with an in-depth brand discovery phase, including stakeholder workshops, audience analysis, and competitor research. This insight was used to define a clear brand position that reflected the firm’s expertise and commercial strengths. A cohesive visual identity and messaging framework were then developed and applied consistently across digital and offline touchpoints, ensuring the brand communicated credibility, professionalism, and differentiation at every stage of the customer journey.\r\nFollowing the rebrand, the business experienced a noticeable improvement in brand perception and engagement. Website dwell time increased, enquiry quality improved, and the sales team reported greater confidence when presenting the brand to prospective clients. By aligning brand strategy with business objectives, Createaweb helped the firm attract better-fit clients and strengthen trust, demonstrating how effective branding supports long-term growth rather than just visual appeal.\r\n', 'admin', '', '2026-02-11 10:01:38');
INSERT INTO `blogs` VALUES('4', 'AI in Marketing what actually works ', 'AI is transforming marketing, but the tools that deliver real value are those that support strategy rather than replace it. For UK businesses, AI works best when applied to specific, outcome-driven tasks such as data analysis, audience segmentation, content optimisation, and performance forecasting. Research from the Office for National Statistics shows that businesses adopting AI and data-driven technologies are more likely to see improvements in productivity and decision making. In marketing, this translates into faster insight generation, more accurate targeting, and smarter budget allocation. AI can identify patterns in customer behaviour, highlight inefficiencies across channels, and automate repetitive tasks, freeing teams to focus on creative and strategic work. However, AI is most effective when guided by human expertise, clear objectives, and quality data. Used this way, it becomes a powerful tool for improving efficiency, scaling performance, and delivering measurable results rather than a shortcut or replacement for sound marketing fundamentals.\r\nUnpopular Marketing Opinions (That Actually Work)\r\nMarketing is full of “best practices” that get repeated so often they’re treated as fact. The problem is that many of them no longer reflect how people actually behave. Below are a few unpopular marketing opinions we stand by, based on real-world results rather than industry noise.\r\nSEO Is Not Dead — Lazy SEO Is\r\nSEO hasn’t stopped working. Poor SEO has. Businesses that treat SEO as a one-off checklist or rely on outdated tactics struggle to see results. The brands that win are those investing in technical performance, high-quality content, and genuine authority. Search engines still reward relevance and usefulness, not shortcuts.\r\nMore Data Doesn’t Mean Better Decisions\r\nHaving access to dashboards, reports, and metrics is not the same as being data-driven. Many businesses collect huge volumes of data but fail to act on it effectively. The most successful marketing strategies focus on a small number of meaningful metrics that directly relate to business outcomes. Clarity beats complexity every time.\r\nSocial Media Is Not a Growth Channel for Every Business\r\nNot every brand needs to be active on every platform. For many UK businesses, social media delivers awareness but little commercial return. If your audience isn’t ready to buy or enquire on social platforms, your budget may be better spent on search, email, or conversion optimisation. Presence does not equal performance.\r\nConsistency Outperforms Creativity\r\nHighly creative campaigns get attention, but consistent messaging builds trust and drives long-term results. Brands that repeatedly communicate a clear value proposition outperform those constantly reinventing themselves. Familiarity reduces friction and makes buying decisions easier.\r\nTraffic Is a Vanity Metric\r\nMore visitors do not automatically mean more revenue. A smaller volume of highly relevant traffic will almost always outperform large volumes of poorly targeted users. Marketing should prioritise intent, usability, and conversion paths, not just clicks.\r\nMarketing Should Feel Boring Internally\r\nIf your marketing feels calm, structured, and predictable behind the scenes, that’s usually a good sign. Sustainable growth comes from repeatable systems, testing, and optimisation, not constant panic or trend-chasing. Good marketing often looks boring to the people running it.\r\n', 'admin', '', '2026-02-11 10:02:13');



DROP TABLE IF EXISTS `faqs`;


CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE IF EXISTS `projects`;


CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE IF EXISTS `services`;


CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `services` VALUES('4', 'Search Engine Optimisation (SEO)', '', 'Data-driven approach\r\nSEO helps your business appear more prominently in search engine results when potential customers are actively looking for your services. By improving your website\'s structure, content, and authority, SEO increases organic visibility, builds long-term credibility, and delivers consistent, high-quality traffic without relying solely on paid advertising.\r\n', '');
INSERT INTO `services` VALUES('5', 'Google Ads', '', 'Google-certified strategies\r\nGoogle Ads allow your business to appear at the top of search results instantly for high-intent keywords. With carefully managed campaigns, you can generate immediate enquiries, control your budget, and measure performance clearly to maximise return on investment.\r\n', '');
INSERT INTO `services` VALUES('6', 'Facebook Ads', '', 'Facebook Ads enable precise audience targeting based on demographics, interests, and behaviours. This makes them ideal for building awareness, promoting offers, and re-engaging previous visitors, helping you stay visible and relevant across social media channels.', '');
INSERT INTO `services` VALUES('7', 'Patient Acquisition', '', 'Patient acquisition focuses on attracting, converting, and retaining new patients through targeted marketing strategies. By understanding patient behaviour and intent, we create tailored campaigns that generate enquiries, build trust, and turn interest into confirmed bookings, helping your practice grow sustainably.\r\n', '');
INSERT INTO `services` VALUES('8', 'Seasonal Event Campaigns', '', 'Seasonal event campaigns are designed to capitalise on peak demand periods, promotions, or awareness events throughout the year. By aligning messaging, offers, and advertising with timely opportunities, these campaigns drive short-term boosts in bookings while keeping your brand relevant and engaging.\r\n', '');
INSERT INTO `services` VALUES('9', 'Practice Growth', '', 'Practice growth is about more than just attracting new patients – it\'s about increasing revenue, improving retention, and strengthening your brand. Through data-driven marketing, performance tracking, and strategic planning, we help practices scale efficiently while maintaining a high standard of patient care.\r\n', '');
INSERT INTO `services` VALUES('10', 'RM (Customer Relationship Management)', '', 'A CRM system helps you manage patient relationships more effectively by organising enquiries, tracking interactions, and automating follow-ups. This ensures no leads are missed, improves patient communication, and supports better long-term retention and satisfaction.', '');
INSERT INTO `services` VALUES('11', 'Website Hosting', '', 'Reliable website hosting ensures your site is fast, secure, and always accessible. High-quality hosting improves user experience, supports SEO performance, and protects your business and customer data, giving both you and your patients peace of mind.\r\n', '');
INSERT INTO `services` VALUES('12', 'Google Guarantee', '', 'Google-verified badge\r\nGoogle Guarantee builds instant trust by showing customers that your business has been vetted and verified by Google. This badge can increase click-through rates, improve lead quality, and give potential customers greater confidence in choosing your services over competitors.\r\n', '');



DROP TABLE IF EXISTS `teams`;


CREATE TABLE `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




SET FOREIGN_KEY_CHECKS=1;