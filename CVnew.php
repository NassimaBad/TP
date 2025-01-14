<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Professionnel - Hind El Aroussi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            line-height: 1.6;
            color: #322443;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, #3B1E54, #9B7EBD);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .profile-img {
            width: 140px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 1rem;
            border: 3px solid white;
            background: #EEEEEE;
        }

        /* Navigation */
        nav {
            background: #3B1E54;
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #8d62be;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        section {
            margin-bottom: 3rem;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #9B7EBD;
            padding-bottom: 0.5rem;
        }

        /* About Section */
        .about {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            align-items: start;
        }

        .skills {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .skill-item {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* Experience Section */
        .experience-item {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .experience-item h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .date {
            color: #666;
            font-size: 0.9rem;
        }

        /* Portfolio Section */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .portfolio-item {
            background: #f8f9fa;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .portfolio-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .portfolio-item-content {
            padding: 1rem;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .contact-item {
            text-align: center;
            padding: 1rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about {
                grid-template-columns: 1fr;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
<header>
    <img src="me.jpg" alt="Profile Picture" class="profile-img">
    <h1>Hind El Aroussi</h1>
    <p>Développeuse Web & Ingénieure en Cybersécurité</p>
</header>

<nav>
    <ul>
        <li><a href="#about">À propos</a></li>
        <li><a href="#experience">Expérience</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<main class="container">
    <section id="about">
        <h2>À propos de moi</h2>
        <div class="about">
            <div>
                <p>Je suis une développeuse web passionnée et une ingénieure en cybersécurité, spécialisée dans la création de sites web sécurisés et réactifs. J'ai une forte capacité à concevoir des solutions fiables et performantes en utilisant des technologies modernes.</p>
            </div>
            <div class="skills">
                <div class="skill-item">
                    <h3>Développement Frontend</h3>
                    <p>HTML5, CSS3, JavaScript, React</p>
                </div>
                <div class="skill-item">
                    <h3>Cybersécurité</h3>
                    <p>Hacking éthique, Pentesting, Outils de sécurité</p>
                </div>
                <div class="skill-item">
                    <h3>Développement Backend</h3>
                    <p>Node.js, Python, SQL, MongoDB</p>
                </div>
            </div>
        </div>
    </section>

    <section id="experience">
        <h2>Expérience</h2>
        <div class="experience-item">
            <h3>Développeuse Web & Cybersécurité</h3>
            <p class="date">2021 - Présent</p>
            <p>Création d'applications web sécurisées et mise en place de mesures de protection contre les attaques sur des infrastructures en ligne.</p>
        </div>
        <div class="experience-item">
            <h3>Stagiaire Cybersécurité</h3>
            <p class="date">2020 - 2021</p>
            <p>Assistance dans l'analyse des vulnérabilités et l'amélioration de la sécurité des systèmes informatiques.</p>
        </div>
    </section>

    <section id="portfolio">
        <h2>Portfolio</h2>
        <div class="portfolio-grid">
            <div class="portfolio-item">

                <div class="portfolio-item-content">
                    <h3>Plateforme de Cybersécurité</h3>
                    <p>Développement d'une plateforme sécurisée de gestion des vulnérabilités pour entreprises</p>
                </div>
            </div>
            <div class="portfolio-item">

                <div class="portfolio-item-content">
                    <h3>Application Web de Chat</h3>
                    <p>Développement d'une application de chat sécurisée en utilisant Node.js</p>
                </div>
            </div>
            <div class="portfolio-item">

                <div class="portfolio-item-content">
                    <h3>Analyse de Réseau</h3>
                    <p>Analyse des protocoles et détection des anomalies réseau à l'aide de Wireshark</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <div class="contact-grid">
            <div class="contact-item">
                <h3>Email</h3>
                <p>hind.elaroussi@gmail.com</p>
            </div>
            <div class="contact-item">
                <h3>Téléphone</h3>
                <p>+212 662222334</p>
            </div>
            <div class="contact-item">
                <h3>Localisation</h3>
                <p>Casablanca, Maroc</p>
            </div>
        </div>
    </section>
</main>
</body>
</html>
