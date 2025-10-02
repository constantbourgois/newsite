    <!-- About Section -->
    <section class="about">
        <h2>Bonjour, je m'appelle Constant.</h2>
        <p>Développeur web freelance depuis 7 ans, j'aide agences et startups à transformer leurs idées en produits
            numériques performants.</p>
        <p>Habitué au travail à distance, j'ai collaboré avec des équipes variées sur des projets B2B et grand public.
        </p>
        <p>Curieux et passionné, je mêle sens du design et exigence technique pour créer des solutions élégantes et
            efficaces.</p>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="services-container">
            <div class="service-card">
                <h3>Frontend &amp; Design &amp; Intégration</h3>
                <p>Réflexion U.X., réalisation d' UI</p>
                <p>Html, Css, Twig, React, Gsap, Javascript</p>
                <p>Tailwind CSS, Bootstrap, Material UI, Figma, Git, Vscode</p>
            </div>
            <div class="service-card">
                <h3>Backend &amp; Engineering</h3>
                <p>Développement de thèmes et plugins Wordpress, utilisation d'API, prototypage, recherche & test de solutions </p>
                <p>Php, Node.js, CodeIgniter, Symfony, Wordpress & Wordpress REST API</p>
            </div>
            <div class="service-card">
                <h3>Relationnel</h3>
                <ul>
                    <li>
                        Écoute
                    </li>
                    <li>
                        Découverte du besoin
                    </li>
                    <li>
                        Gestion de projet
                    </li>
                    <li>
                        Collaboration
                    </li>
                    <li>
                        Vision produit
                    </li>
                     <li>
                       Français, anglais, espagnol
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects">
        <h2>Mes projets</h2>
        <p class="projects-intro">
            Voici quelques projets sur lesquels j'ai travaillé.<br>
            Envie d'en savoir plus ? <a onclick="openContact(event)" href="#"> <strong>Contactez-moi </strong></a>
        </p>
        <div class="projects-grid">
            <a class="project-logo" href="https://www.fff.fr/" target="_blank" rel="noopener">
                <img src="img/logo-fff.svg" alt="FFF logo stylized in bold letters representing the French Football Federation, modern and professional design, white background" />
            </a>
            <a class="project-logo" href="https://www.norgren.com/" target="_blank" rel="noopener">
                <img src="img/logo-norgren.png" alt="Norgren company logo with red and gray elements, industrial and technical atmosphere, clean and precise style" />
            </a>
            <a class="project-logo" href="https://asso-generationnumerique.fr/" target="_blank" rel="noopener">
                <img src="img/logo-gn.webp" alt="GN logo with overlapping letters in blue and green, representing Groupe Numérique, contemporary and innovative mood, minimal background" />
            </a>
            <a class="project-logo" href="https://duel.constantbourgois.com" target="_blank" rel="noopener">
                <img src="img/logo-duel.svg" alt="Duel logo with geometric shapes and the word Duel in uppercase, dynamic and energetic design, neutral background" />
            </a>
            <a class="project-logo" href="https://www.sunevasion.fr/" target="_blank" rel="noopener">
                <img src="img/logo-sunevasion.svg" alt="Sun Evasion logo with a stylized sun and wave, text Sun Evasion, bright and optimistic tone, evokes travel and leisure" />
            </a>
            <a class="project-logo" href="https://maisondelarchi-fc.fr/" target="_blank" rel="noopener">
                <img src="img/logo-mafc.png" alt="MAFC logo with blue and white color scheme, text MAFC, formal and trustworthy appearance, simple background" />
            </a>
        </div>
          <a class="contact-btn" href="#" onclick="openContact(event)">Contactez-moi</a>
    </section>
    <section style="display:none" class="contact">
        <div id="thankyou-message">
            Merci !
        </div>
        <form id="contactform" method="post">
            <h4 id="titlecontact">Contactez-moi !</h4>
            <label for="u_name">Nom</label>
            <input type="text" id="u_name" name="u_name" placeholder="Votre nom" required />
            <label for="u_email">Email</label>
            <input type="email" id="u_email" name="u_email" placeholder="Votre e-mail" required />
            <label for="message">Un petit mot</label>
            <textarea name="message" id="message" rows="6" cols="45" placeholder="Laissez-moi un petit mot" required></textarea>
            <input id="submit" type="submit" value="Envoyer" class="valider" />
        </form>
        <button class="close-btn" onclick="closeContact()" aria-label="Fermer le formulaire">×</button>
    </section>
    <!-- Skills Section -->
    <section class="skills">
        <h2>D'autres compétences</h2>
        <p class="skills-subtitle">qui pourraient s'avérer utiles</p>

        <div class="skills-chart">
            <div class="skill-bar">
                <div class="skill-name">Jedi</div>
                <div class="bar">
                    <div class="bar-fill" data-percentage="95"></div>
                </div>
                <div class="skill-percentage">95%</div>
            </div>
            <div class="skill-bar">
                <div class="skill-name">Ninja</div>
                <div class="bar">
                    <div class="bar-fill" data-percentage="90"></div>
                </div>
                <div class="skill-percentage">90%</div>
            </div>
            <div class="skill-bar">
                <div class="skill-name">Geek</div>
                <div class="bar">
                    <div class="bar-fill" data-percentage="95"></div>
                </div>
                <div class="skill-percentage">95%</div>
            </div>
            <div class="skill-bar">
                <div class="skill-name">Musicien</div>
                <div class="bar">
                    <div class="bar-fill" data-percentage="65"></div>
                </div>
                <div class="skill-percentage">65%</div>
            </div>
            <div class="skill-bar">
                <div class="skill-name">Surfeur</div>
                <div class="bar">
                    <div class="bar-fill" data-percentage="45"></div>
                </div>
                <div class="skill-percentage">45%</div>
            </div>
        </div>
    </section>