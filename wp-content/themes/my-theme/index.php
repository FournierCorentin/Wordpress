<?php get_header(); ?>

    <div class="desc section" style="background:url(<?php the_field('banner_baseline'); ?>);">
        <h2 class="desc-subtitle"><?php the_field('banner_baseline'); ?></h2>
        <h1 class="desc-title"><?php the_field('banner_title_brown'); ?> <span><?php the_field('banner_title_green'); ?></span></h1>
        <a class="cta cta-primary" href="#">
            <?php the_field('banner_register_link'); ?>
        </a>
    </div>

    <div class="about section">
        <h2 class="section-title"><?php the_field('titre_de_la_conf');?></h2>
        <span class="section-title-separator"></span>
        <p class="section-body">
            <?php the_field('texte_conf');?>
        </p>
    </div>

    <div class="separator-image-section">
    </div>

    <div class="agenda section">
        <h2 class="section-title">Au programme</h2>
        <span class="section-title-separator"></span>
        <div class="columns">
            <div>
                <h3 class="agenda-col-title"><?php the_field('les_vegetaux_dans_la_chaine');?></h3>
                <ul class="agenda-col-content">
                    <?php the_field('programme');?>
                        <!--<li><span>8:30</span> Introduction par Christophe Fondation</li>
                    <li><span>9:00</span> Wim de Vries Wageningen University</li>
                    <li><span>9:45</span> Benjamin Alles Paris XIII University</li>
                    <li><span>10:15</span> Armando Perez Cueto Copenhagen University</li>
                    <li><span>10:45</span> Pause café</li>!-->
                </ul>
            </div>
            <div>
                <h3 class="agenda-col-title"><?php the_field('agenda_droite');?></h3>
                <ul class="agenda-col-content">
                    <?php the_field('liste_droite');?>
                        <li><span>11:15</span> Jacynthe Lafrenière, Lauréate du prix de Recherche</li>
                        <li><span>11:35</span> Le projet EPICALIM de la Fondation</li>
                        <li><span>12:00</span> Cérémonie du prix de recherche</li>
                        <li><span>12:30</span> Déjeuner</li>
                </ul>
            </div>
        </div>

        <a class="agenda-cta cta" href="#">S'inscrire aux rencontres</a>
    </div>
    <div class="speakers section">
        <h2 class="section-title">Les orateurs</h2>
        <span class="section-title-separator"></span>
        <p class="section-subtitle">Lorem ipsum calidae por portittor et sit amet dolor calis</p>
        <?php the_field('liste_perso');?>
    
        <div class="speakers-row">
            <div class="speaker">
                <img src="/assets/img/portrait.jpg" />
                <span class="speaker-name">Wim de Vries</span>
                <span class="speaker-desc">Lorem ipsum calideae (1)</span>
                <div class="speaker-cta">
                    <img src="source.jpg" class="speaker-cta-icon" />
                    <span class="speaker-cta-text">Lire la vidéo</span>
                </div>
            </div>
            <div class="speaker">
                <img src="/assets/img/portrait.jpg" class="speaker-photo" />
                <span class="speaker-name">Laurence Depezay</span>
                <span class="speaker-desc">Lorem ipsum calidae (6)</span>
                <div class="speaker-cta">
                    <img src="#" class="speaker-cta-icon" />
                    <span class="speaker-cta-text">En savoir plus</span>
                </div>
            </div>
            <div class="speaker">
                <img src="/assets/img/portrait.jpg" class="speaker-photo" />
                <span class="speaker-name">Armando Perez Cueto</span>
                <span class="speaker-desc">Lorem ipsum calidae</span>
                <div class="speaker-cta">
                    <img src="#" class="speaker-cta-icon" />
                    <span class="speaker-cta-text">Lire la vidéo</span>
                </div>
            </div>
            <div class="speaker">
                <img src="/assets/img/portrait.jpg" class="speaker-photo" />
                <span class="speaker-name">Wim de Vries</span>
                <span class="speaker-desc">Lorem ipsum calidae</span>
                <div class="speaker-cta">
                    <img src="#" class="speaker-cta-icon" />
                    <span class="speaker-cta-text">Lire la tribune</span>
                </div>
            </div>
        </div>
        <div class="speakers-row">
            <div class="speaker">
                <img src="/assets/img/portrait.jpg" class="speaker-photo" />
                <span class="speaker-name">Wim de Vries</span>
                <span class="speaker-desc">Lorem ipsum calidae</span>
                <div class="speaker-cta">
                    <img src="#" class="speaker-cta-icon" />
                    <span class="speaker-cta-text">Lire la tribune</span>
                </div>
            </div>
            <div class="speaker">
                <img src="/assets/img/portrait.jpg" class="speaker-photo" />
                <span class="speaker-name">Wim de Vries</span>
                <span class="speaker-desc">Lorem ipsum calidae</span>
                <div class="speaker-cta">
                    <img src="#" class="speaker-cta-icon" />
                    <span class="speaker-cta-text">Lire la vidéo</span>
                </div>
            </div>
        </div>
    </div>
-->
            <div class="section quick-info">
                <div class="quick-info-main">
                    <div class="quick-info-element">
                        <img src="wp-content/uploads/2019/12/picto-map.svg" />
                        <span>Square Brussels Mont des Arts 1000 Bruxelles Belgique</span>
                    </div>
                    <div class="quick-info-element">
                        <img src="wp-content/uploads/2019/12/picto-time.svg" />
                        <span>le 03.12.2019 de 8h30 à 12h30</span>
                    </div>
                    <div class="quick-info-element">
                        <img src="wp-content/uploads/2019/12/picto-dinner.svg" />
                        <span>Healtly Walking Dinner</span>
                    </div>
                </div>

                <div class="quick-info-cta">
                    <img class="quick-info-cta-icon" src="wp-content/uploads/2019/12/picto-map.svg" />
                    <span class="quick-info-cta-text">Voir sur la carte</span>
                </div>
            </div>

            <div class="videos section">
                <div class="videos-col">
                    <div class="main-video">
                        <span class="main-video-title">Le potager du roi</span>
                        <span class="main-video-author">ANTOINE JACOBSOHN</span>
                    </div>
                    <div class="secondary-video">
                        <img src="#" class="secondary-video-img" />
                        <div class="secondary-video-text">
                            <span class="secondary-video-title">Construction de la valeur des légumineuses</span>
                            <span class="secondary-video-author">Marie-Benoît Magrini</span>
                        </div>
                    </div>
                    <div class="secondary-video">
                        <img src="#" class="secondary-video-img" />
                        <div class="secondary-video-text">
                            <span class="secondary-video-title">Construction de la valeur des légumineuses</span>
                            <span class="secondary-video-author">Marie-Benoît Magrini</span>
                        </div>
                    </div>
                </div>
                <div class="videos-col">
                    <div class="main-video">
                        <span class="main-video-title">Le potager du roi</span>
                        <span class="main-video-author">Flora Joubier</span>
                    </div>
                    <div class="secondary-video">
                        <img src="#" class="secondary-video-img" />
                        <div class="secondary-video-text">
                            <span class="secondary-video-title">Construction de la valeur des légumineuses</span>
                            <span class="secondary-video-author">Marie-Benoît Magrini</span>
                        </div>
                    </div>
                    <div class="secondary-video">
                        <img src="#" class="secondary-video-img" />
                        <div class="secondary-video-text">
                            <span class="secondary-video-title">Construction de la valeur des légumineuses</span>
                            <span class="secondary-video-author">Marie-Benoît Magrini</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="actus section">
                <h2 class="section-title">Actus</h2>
                <span class="section-title-separator"></span>
                <div class="actus-container">
                    <div class="actu">
                        <img class="actu-img" src="#">
                        <div class="actu-body">
                            <h3 class="actu-title">Ville & agriculture: rapprochement ou distanciation ?</h3>
                            <p class="actu-text">Cette année, les 11ème Rencontres de la Fondation Louis Bonduelle se dérouleront le 12 juin...</p>
                            <a class="actu-cta" href="#">Lire la suite</a>
                            <span class="actu-date">4 octobre 2019</span>
                        </div>
                    </div>
                    <div class="actu">
                        <img class="actu-img" src="#">
                        <div class="actu-body">
                            <h3 class="actu-title">Ville & agriculture: rapprochement ou distanciation ?</h3>
                            <p class="actu-text">Cette année, les 11ème Rencontres de la Fondation Louis Bonduelle se dérouleront le 12 juin...</p>
                            <a class="actu-cta" href="#">Lire la suite</a>
                            <span class="actu-date">4 octobre 2019</span>
                        </div>
                    </div>
                    <div class="actu">
                        <img class="actu-img" src="#">
                        <div class="actu-body">
                            <h3 class="actu-title">Ville & agriculture: rapprochement ou distanciation ?</h3>
                            <p class="actu-text">Cette année, les 11ème Rencontres de la Fondation Louis Bonduelle se dérouleront le 12 juin...</p>
                            <a class="actu-cta" href="#">Lire la suite</a>
                            <span class="actu-date">4 octobre 2019</span>
                        </div>
                    </div>
                    <div class="actu">
                        <img class="actu-img" src="#">
                        <div class="actu-body">
                            <h3 class="actu-title">Ville & agriculture: rapprochement ou distanciation ?</h3>
                            <p class="actu-text">Cette année, les 11ème Rencontres de la Fondation Louis Bonduelle se dérouleront le 12 juin...</p>
                            <a class="actu-cta" href="#">Lire la suite</a>
                            <span class="actu-date">4 octobre 2019</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="downloads section">
                <div class="download-box">
                    <div class="download">
                        <img class="download-image" src="#" />
                        <div class="download-overlay">
                            <img class="download-icon" src="#" />
                            <span class="download-title">Le livre blanc</span>
                        </div>
                    </div>
                </div>
                <div class="download-box">
                    <div class="download">
                        <img class="download-image" src="#" />
                        <div class="download-overlay">
                            <img class="download-icon" src="#" />
                            <span class="download-title">L'alimentation végétale: une question d'équilibre</span>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_footer(); ?>
