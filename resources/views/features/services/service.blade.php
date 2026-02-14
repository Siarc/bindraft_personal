@extends('layouts.app')

@section('title', 'Our Services · Digital Solutions')

@section('content')

<!-- Hero Section (Full 1920x1080 style) -->
<section class="service-hero relative">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/cosmos.jpg') }}" alt="Service Abstract" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-cyan-800/85 to-blue-900/90"></div>
    </div>
    <!-- Animated Wave Overlays -->
    <div class="absolute inset-0 z-10 pointer-events-none">
        <svg class="absolute bottom-0 w-full h-32" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path id="wave1" fill="rgba(6, 182, 212, 0.1)" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,101.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" />
        </svg>
        <svg class="absolute bottom-0 w-full h-32" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path id="wave2" fill="rgba(34, 211, 238, 0.1)" d="M0,224L48,213.3C96,203,192,181,288,186.7C384,192,480,224,576,224C672,224,768,192,864,165.3C960,139,1056,117,1152,122.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" />
        </svg>
    </div>
    
    <div class="service-hero-content relative z-10">
        <div data-aos="fade-up" data-aos-duration="1000">
            <h1>Our Services</h1>
            <p>Comprehensive software solutions designed to drive your business forward. From concept to deployment, we navigate every aspect of your digital journey.</p>
        </div>
    </div>
</section>

<!-- Content Section (Overlapping Header) -->
<div class="services-page-wrapper">
    <div class="services-content-container">

        <!-- grid of cards -->
        <div class="services-grid">
            <!-- ENTERPRISE & BACKEND block -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-title">Custom Software Development</div>
                <ul class="offer-list">
                    <li>Enterprise application development</li>
                    <li>Legacy system modernization</li>
                    <li>API development and integration</li>
                    <li>Microservices architecture</li>
                    <li>Scalable cloud solutions</li>
                    <li>Custom CRM and ERP systems</li>
                </ul>
                <div class="service-separator">
                    <ul class="offer-list">
                        <li>RESTful & GraphQL APIs</li>
                        <li>Database design & optimization</li>
                        <li>Cloud infrastructure (AWS, Azure, GCP)</li>
                    </ul>
                </div>
            </div>

            <!-- MOBILE apps card -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-title">Mobile apps</div>
                <ul class="offer-list">
                    <li>iOS and Android native apps</li>
                    <li>Cross-platform (React Native)</li>
                    <li>Mobile UI/UX design</li>
                    <li>App store optimization</li>
                    <li>Push notifications & real-time sync</li>
                    <li>Offline-first capabilities</li>
                </ul>
            </div>

            <!-- AI & INTELLIGENCE card -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-title">AI Agent Development</div>
                <ul class="offer-list">
                    <li>Custom AI model training</li>
                    <li>Intelligent chatbots & virtual assistants</li>
                    <li>Predictive analytics engines</li>
                    <li>Natural Language Processing (NLP)</li>
                    <li>Computer Vision solutions</li>
                    <li>Automated workflow systems</li>
                </ul>
                <div class="service-separator">
                    <ul class="offer-list">
                        <li>OpenAI & LLM integration</li>
                        <li>Data pipeline engineering</li>
                        <li>AI ethics & compliance consulting</li>
                    </ul>
                </div>
            </div>

            <!-- FRONTEND excellence -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-title">Frontend excellence</div>
                <ul class="offer-list">
                    <li>React, Vue, Angular development</li>
                    <li>Responsive web design</li>
                    <li>Progressive Web Apps (PWA)</li>
                    <li>UI/UX design and prototyping</li>
                    <li>Performance optimization</li>
                    <li>Accessibility compliance (WCAG)</li>
                </ul>
            </div>

            <!-- BACKEND & DEVOPS dense -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                <div class="card-title">Backend & DevOps</div>
                <ul class="offer-list">
                    <li>RESTful and GraphQL APIs</li>
                    <li>Database design & optimization</li>
                    <li>Cloud infrastructure (AWS, Azure, GCP)</li>
                    <li>DevOps and CI/CD pipelines</li>
                    <li>Security and authentication</li>
                    <li>Performance optimization</li>
                </ul>
            </div>

            <!-- DIGITAL CONSULTANCY -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                <div class="card-title">Digital Consultancy</div>
                <ul class="offer-list">
                    <li>Technology strategy & roadmapping</li>
                    <li>Architecture design and review</li>
                    <li>Code audits and optimization</li>
                    <li>Team training and mentorship</li>
                    <li>Agile transformation</li>
                    <li>Digital transformation planning</li>
                </ul>
            </div>
        </div> <!-- end grid -->

        <!-- Our Process Section -->
        <div class="process-section">
            <div class="process-header" data-aos="fade-up">
                <h2>Our Process</h2>
                <p>A proven methodology that delivers results</p>
            </div>
            
            <div class="process-steps">
                <!-- Step 01 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <h3>Discovery & Planning</h3>
                        <p>We start by understanding your goals, challenges, and requirements through detailed consultations and research.</p>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <h3>Design & Strategy</h3>
                        <p>Our team creates comprehensive designs and technical strategies that align with your business objectives.</p>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <h3>Development & Testing</h3>
                        <p>We build your solution using agile methodologies, with continuous testing and quality assurance throughout.</p>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <h3>Launch & Support</h3>
                        <p>We deploy your solution and provide ongoing support, maintenance, and optimization to ensure continued success.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO MARQUEE SECTION -->
        <div class="logo-marquee-section" data-aos="fade-up">
            <div class="logo-marquee-header">
                <h2>Technologies We Use</h2>
            </div>
            <!-- ROW 1: Frontend & Core Backend -->
            <div class="marquee-container">
                <div class="marquee-track">
                    <!-- Set 1 -->
                    <div class="marquee-chip"><span class="chip-tech">React</span> <span class="chip-dot">•</span> <span class="chip-type">Frontend Library</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Next.js</span> <span class="chip-dot">•</span> <span class="chip-type">React Framework</span></div>
                    <div class="marquee-chip"><span class="chip-tech">TypeScript</span> <span class="chip-dot">•</span> <span class="chip-type">Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">JavaScript (ES6+)</span> <span class="chip-dot">•</span> <span class="chip-type">Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">HTML5</span> <span class="chip-dot">•</span> <span class="chip-type">Markup</span></div>
                    <div class="marquee-chip"><span class="chip-tech">CSS3</span> <span class="chip-dot">•</span> <span class="chip-type">Styling</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Tailwind CSS</span> <span class="chip-dot">•</span> <span class="chip-type">Utility-First CSS</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Framer Motion</span> <span class="chip-dot">•</span> <span class="chip-type">Animation</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Alpine.js</span> <span class="chip-dot">•</span> <span class="chip-type">Lightweight JS</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Node.js</span> <span class="chip-dot">•</span> <span class="chip-type">Backend Runtime</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Express.js</span> <span class="chip-dot">•</span> <span class="chip-type">Backend Framework</span></div>

                    <!-- Duplicate Set 1 -->
                    <div class="marquee-chip"><span class="chip-tech">React</span> <span class="chip-dot">•</span> <span class="chip-type">Frontend Library</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Next.js</span> <span class="chip-dot">•</span> <span class="chip-type">React Framework</span></div>
                    <div class="marquee-chip"><span class="chip-tech">TypeScript</span> <span class="chip-dot">•</span> <span class="chip-type">Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">JavaScript (ES6+)</span> <span class="chip-dot">•</span> <span class="chip-type">Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">HTML5</span> <span class="chip-dot">•</span> <span class="chip-type">Markup</span></div>
                    <div class="marquee-chip"><span class="chip-tech">CSS3</span> <span class="chip-dot">•</span> <span class="chip-type">Styling</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Tailwind CSS</span> <span class="chip-dot">•</span> <span class="chip-type">Utility-First CSS</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Framer Motion</span> <span class="chip-dot">•</span> <span class="chip-type">Animation</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Alpine.js</span> <span class="chip-dot">•</span> <span class="chip-type">Lightweight JS</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Node.js</span> <span class="chip-dot">•</span> <span class="chip-type">Backend Runtime</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Express.js</span> <span class="chip-dot">•</span> <span class="chip-type">Backend Framework</span></div>
                </div>
            </div>

            <!-- ROW 2: Backend, DB, Cloud (Reverse Scroll) -->
            <div class="marquee-container">
                <div class="marquee-track reverse">
                    <!-- Set 2 -->
                    <div class="marquee-chip"><span class="chip-tech">Python</span> <span class="chip-dot">•</span> <span class="chip-type">Backend Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Laravel</span> <span class="chip-dot">•</span> <span class="chip-type">PHP Framework</span></div>
                    <div class="marquee-chip"><span class="chip-tech">PHP</span> <span class="chip-dot">•</span> <span class="chip-type">Backend Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">REST API</span> <span class="chip-dot">•</span> <span class="chip-type">API Architecture</span></div>
                    <div class="marquee-chip"><span class="chip-tech">GraphQL</span> <span class="chip-dot">•</span> <span class="chip-type">API Query Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">PostgreSQL</span> <span class="chip-dot">•</span> <span class="chip-type">Relational Database</span></div>
                    <div class="marquee-chip"><span class="chip-tech">MySQL</span> <span class="chip-dot">•</span> <span class="chip-type">Relational Database</span></div>
                    <div class="marquee-chip"><span class="chip-tech">MongoDB</span> <span class="chip-dot">•</span> <span class="chip-type">NoSQL Database</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Redis</span> <span class="chip-dot">•</span> <span class="chip-type">Caching & In-Memory Store</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Firebase</span> <span class="chip-dot">•</span> <span class="chip-type">Realtime Database</span></div>
                    <div class="marquee-chip"><span class="chip-tech">AWS</span> <span class="chip-dot">•</span> <span class="chip-type">Cloud Infrastructure</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Google Cloud</span> <span class="chip-dot">•</span> <span class="chip-type">Cloud Platform</span></div>

                    <!-- Duplicate Set 2 -->
                    <div class="marquee-chip"><span class="chip-tech">Python</span> <span class="chip-dot">•</span> <span class="chip-type">Backend Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Laravel</span> <span class="chip-dot">•</span> <span class="chip-type">PHP Framework</span></div>
                    <div class="marquee-chip"><span class="chip-tech">PHP</span> <span class="chip-dot">•</span> <span class="chip-type">Backend Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">REST API</span> <span class="chip-dot">•</span> <span class="chip-type">API Architecture</span></div>
                    <div class="marquee-chip"><span class="chip-tech">GraphQL</span> <span class="chip-dot">•</span> <span class="chip-type">API Query Language</span></div>
                    <div class="marquee-chip"><span class="chip-tech">PostgreSQL</span> <span class="chip-dot">•</span> <span class="chip-type">Relational Database</span></div>
                    <div class="marquee-chip"><span class="chip-tech">MySQL</span> <span class="chip-dot">•</span> <span class="chip-type">Relational Database</span></div>
                    <div class="marquee-chip"><span class="chip-tech">MongoDB</span> <span class="chip-dot">•</span> <span class="chip-type">NoSQL Database</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Redis</span> <span class="chip-dot">•</span> <span class="chip-type">Caching & In-Memory Store</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Firebase</span> <span class="chip-dot">•</span> <span class="chip-type">Realtime Database</span></div>
                    <div class="marquee-chip"><span class="chip-tech">AWS</span> <span class="chip-dot">•</span> <span class="chip-type">Cloud Infrastructure</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Google Cloud</span> <span class="chip-dot">•</span> <span class="chip-type">Cloud Platform</span></div>
                </div>
            </div>

            <!-- ROW 3: DevOps, AI, Tools -->
            <div class="marquee-container" style="margin-bottom:0;">
                <div class="marquee-track">
                    <!-- Set 3 -->
                    <div class="marquee-chip"><span class="chip-tech">Docker</span> <span class="chip-dot">•</span> <span class="chip-type">Containerization</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Kubernetes</span> <span class="chip-dot">•</span> <span class="chip-type">Container Orchestration</span></div>
                    <div class="marquee-chip"><span class="chip-tech">GitHub Actions</span> <span class="chip-dot">•</span> <span class="chip-type">CI/CD</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Nginx</span> <span class="chip-dot">•</span> <span class="chip-type">Web Server</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Vercel</span> <span class="chip-dot">•</span> <span class="chip-type">Deployment Platform</span></div>
                    <div class="marquee-chip"><span class="chip-tech">OpenAI</span> <span class="chip-dot">•</span> <span class="chip-type">AI/ML APIs</span></div>
                    <div class="marquee-chip"><span class="chip-tech">TensorFlow</span> <span class="chip-dot">•</span> <span class="chip-type">ML Framework</span></div>
                    <div class="marquee-chip"><span class="chip-tech">LangChain</span> <span class="chip-dot">•</span> <span class="chip-type">LLM Framework</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Hugging Face</span> <span class="chip-dot">•</span> <span class="chip-type">AI Models</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Git</span> <span class="chip-dot">•</span> <span class="chip-type">Version Control</span></div>
                    <div class="marquee-chip"><span class="chip-tech">GitHub</span> <span class="chip-dot">•</span> <span class="chip-type">Code Hosting</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Jira</span> <span class="chip-dot">•</span> <span class="chip-type">Project Management</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Figma</span> <span class="chip-dot">•</span> <span class="chip-type">UI/UX Design</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Postman</span> <span class="chip-dot">•</span> <span class="chip-type">API Testing</span></div>

                    <!-- Duplicate Set 3 -->
                    <div class="marquee-chip"><span class="chip-tech">Docker</span> <span class="chip-dot">•</span> <span class="chip-type">Containerization</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Kubernetes</span> <span class="chip-dot">•</span> <span class="chip-type">Container Orchestration</span></div>
                    <div class="marquee-chip"><span class="chip-tech">GitHub Actions</span> <span class="chip-dot">•</span> <span class="chip-type">CI/CD</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Nginx</span> <span class="chip-dot">•</span> <span class="chip-type">Web Server</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Vercel</span> <span class="chip-dot">•</span> <span class="chip-type">Deployment Platform</span></div>
                    <div class="marquee-chip"><span class="chip-tech">OpenAI</span> <span class="chip-dot">•</span> <span class="chip-type">AI/ML APIs</span></div>
                    <div class="marquee-chip"><span class="chip-tech">TensorFlow</span> <span class="chip-dot">•</span> <span class="chip-type">ML Framework</span></div>
                    <div class="marquee-chip"><span class="chip-tech">LangChain</span> <span class="chip-dot">•</span> <span class="chip-type">LLM Framework</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Hugging Face</span> <span class="chip-dot">•</span> <span class="chip-type">AI Models</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Git</span> <span class="chip-dot">•</span> <span class="chip-type">Version Control</span></div>
                    <div class="marquee-chip"><span class="chip-tech">GitHub</span> <span class="chip-dot">•</span> <span class="chip-type">Code Hosting</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Jira</span> <span class="chip-dot">•</span> <span class="chip-type">Project Management</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Figma</span> <span class="chip-dot">•</span> <span class="chip-type">UI/UX Design</span></div>
                    <div class="marquee-chip"><span class="chip-tech">Postman</span> <span class="chip-dot">•</span> <span class="chip-type">API Testing</span></div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>
@endsection
