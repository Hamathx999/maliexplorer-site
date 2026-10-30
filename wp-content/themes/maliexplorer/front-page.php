<?php
/**
 * Template Name: Page d'accueil MaliExplorer (Design Vert Sombre & Or)
 *
 * @package MaliExplorer
 * @version 1.1.0
 */

get_header();
?>

<!-- ==========================================================================
     1. HERO SECTION
     ========================================================================== -->
<section class="hero-section" id="hero">
    <div class="hero-bg-media">
        <img src="<?php echo maliexplorer_asset_url('maliexplorer-djenne.jpg'); ?>" alt="Mosquée de Djenné, Mali">
        <div class="hero-bg-overlay"></div>
    </div>

    <div class="container hero-content">
        <div class="badge-gold" style="margin-bottom: 1.5rem;">
            <span>✨</span>
            <span><?php esc_html_e('Écosystème Culturel & Touristique du Mali', 'maliexplorer'); ?></span>
        </div>

        <h1 class="hero-title">
            <?php esc_html_e('Partez à la rencontre du Mali :', 'maliexplorer'); ?> <br>
            <span class="gold-gradient-text"><?php esc_html_e('un voyage immersif', 'maliexplorer'); ?></span> <?php esc_html_e('au cœur de son patrimoine et de ses trésors.', 'maliexplorer'); ?>
        </h1>

        <p class="hero-subtitle">
            <?php esc_html_e("Téléchargez l'application MaliExplorer et plongez au cœur de notre patrimoine culturel, de nos sites historiques et de nos événements majeurs.", 'maliexplorer'); ?>
        </p>

        <div class="hero-cta-group">
            <a href="#download" class="btn-gold">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/>
                </svg>
                <span><?php esc_html_e("Télécharger l'application", 'maliexplorer'); ?></span>
            </a>

            <a href="#immersion360" class="btn-outline-gold">
                <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                <span><?php esc_html_e('Explorer en 360°', 'maliexplorer'); ?></span>
            </a>
        </div>
    </div>
</section>

<!-- ==========================================================================
     2. LES 5 CATÉGORIES PRINCIPALES (Cartes clés)
     ========================================================================== -->
<section class="categories-section" id="categories">
    <div class="container">
        <div class="categories-grid">
            <!-- 1. Patrimoine & Culture -->
            <div class="glass-card category-card">
                <div class="category-icon">🏛️</div>
                <h3 class="category-title"><?php esc_html_e('Patrimoine & Culture', 'maliexplorer'); ?></h3>
                <span class="category-sub"><?php esc_html_e('Djenné, Tombouctou', 'maliexplorer'); ?></span>
            </div>

            <!-- 2. Tourisme & Événements -->
            <div class="glass-card category-card">
                <div class="category-icon">🎟️</div>
                <h3 class="category-title"><?php esc_html_e('Tourisme & Événements', 'maliexplorer'); ?></h3>
                <span class="category-sub"><?php esc_html_e('Festivals, Billetterie', 'maliexplorer'); ?></span>
            </div>

            <!-- 3. Économie & Investissement -->
            <div class="glass-card category-card">
                <div class="category-icon">📈</div>
                <h3 class="category-title"><?php esc_html_e('Économie & Investissement', 'maliexplorer'); ?></h3>
                <span class="category-sub"><?php esc_html_e('Opportunités régionales', 'maliexplorer'); ?></span>
            </div>

            <!-- 4. Éducation & Apprentissage -->
            <div class="glass-card category-card">
                <div class="category-icon">📖</div>
                <h3 class="category-title"><?php esc_html_e('Éducation & Apprentissage', 'maliexplorer'); ?></h3>
                <span class="category-sub"><?php esc_html_e('Quiz & Histoire orale', 'maliexplorer'); ?></span>
            </div>

            <!-- 5. Artisanat & Produits locaux -->
            <div class="glass-card category-card">
                <div class="category-icon">🏺</div>
                <h3 class="category-title"><?php esc_html_e('Artisanat & Produits locaux', 'maliexplorer'); ?></h3>
                <span class="category-sub"><?php esc_html_e('Bògòlanfini, Métiers d\'or', 'maliexplorer'); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     3. MOCKUPS SMARTPHONES EN ACTION
     ========================================================================== -->
<section class="container" style="padding-top: 4rem; padding-bottom: 5rem;">
    <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem auto;">
        <div class="badge-gold" style="margin-bottom: 1rem;"><?php esc_html_e('Interface Mobile Flutter', 'maliexplorer'); ?></div>
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem;"><?php esc_html_e('MaliExplorer en Action', 'maliexplorer'); ?></h2>
        <p style="color: var(--color-text-muted);"><?php esc_html_e('Découvrez la richesse culturelle, historique et naturelle du Mali à travers une expérience mobile réactive, soignée et immersive.', 'maliexplorer'); ?></p>
    </div>

    <div class="mockups-grid">
        <!-- Mockup 1 : Accueil -->
        <div class="mockup-card">
            <div class="smartphone-frame">
                <img src="<?php echo maliexplorer_asset_url('maliexplorer-accueil.png.jpg'); ?>" alt="Accueil MaliExplorer">
            </div>
            <div class="mockup-info">
                <h3><?php esc_html_e('Navigation & Cartes', 'maliexplorer'); ?></h3>
                <p><?php esc_html_e('Accès instantané aux 19 régions du Mali, recherche interactive de sites historiques, météo culturelle et suggestions personnalisées.', 'maliexplorer'); ?></p>
                <a href="#download" class="link-gold"><span><?php esc_html_e('En savoir plus', 'maliexplorer'); ?></span> <span>&rarr;</span></a>
            </div>
        </div>

        <!-- Mockup 2 : Fiche Djenné -->
        <div class="mockup-card">
            <div class="smartphone-frame">
                <img src="<?php echo maliexplorer_asset_url('maliexplorer-djenne.jpg'); ?>" alt="Djenné MaliExplorer">
            </div>
            <div class="mockup-info">
                <h3><?php esc_html_e('Fiches Monuments & Sites', 'maliexplorer'); ?></h3>
                <p><?php esc_html_e('Récits historiques détaillés, guides audio intégrés, géolocalisation précise et documentation sur l\'architecture soudanaise.', 'maliexplorer'); ?></p>
                <a href="#immersion360" class="link-gold"><span><?php esc_html_e('En savoir plus', 'maliexplorer'); ?></span> <span>&rarr;</span></a>
            </div>
        </div>

        <!-- Mockup 3 : Gastronomie -->
        <div class="mockup-card">
            <div class="smartphone-frame">
                <img src="<?php echo maliexplorer_asset_url('maliexplorer-plat.jpg'); ?>" alt="Gastronomie MaliExplorer">
            </div>
            <div class="mockup-info">
                <h3><?php esc_html_e('Art Culinaire & Coutumes', 'maliexplorer'); ?></h3>
                <p><?php esc_html_e('Plats emblématiques : Tiga Diga Na, Mafé, Fakoye, Tô, découvrez les secrets des saveurs maliennes et leurs origines séculaires.', 'maliexplorer'); ?></p>
                <a href="#download" class="link-gold"><span><?php esc_html_e('En savoir plus', 'maliexplorer'); ?></span> <span>&rarr;</span></a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     4. IMMERSION 360°
     ========================================================================== -->
<section class="container" id="immersion360" style="padding-bottom: 5rem;">
    <div class="banner-360">
        <img src="<?php echo maliexplorer_asset_url('maliexplorer-djenne.jpg'); ?>" alt="Immersion 360 Djenné" class="banner-360-bg">
        <div class="banner-360-overlay"></div>

        <div class="banner-360-content">
            <div class="badge-gold" style="margin-bottom: 1.25rem;"><?php esc_html_e('Visite Virtuelle Interactive', 'maliexplorer'); ?></div>
            <h2 style="font-size: 2.25rem; margin-bottom: 1rem;"><?php esc_html_e('Explorez les lieux historiques du Mali en immersion 360°', 'maliexplorer'); ?></h2>
            <p style="color: var(--color-text-muted); margin-bottom: 2rem;"><?php esc_html_e('Pénétrez au cœur de la Grande Mosquée de Djenné, arpentez les ruelles de Tombouctou et contemplez les falaises de Bandiagara comme si vous y étiez.', 'maliexplorer'); ?></p>
            <a href="#hero" class="btn-gold"><?php esc_html_e('Lancer la visite 360°', 'maliexplorer'); ?></a>
        </div>

        <div class="badge-360-pulse">
            <span style="font-size: 1.85rem; line-height: 1;">360°</span>
            <span style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 700;">Immersion</span>
        </div>
    </div>
</section>

<!-- ==========================================================================
     5. COMMENT ÇA MARCHE (3 ÉTAPES)
     ========================================================================== -->
<section class="container" id="how-it-works" style="padding-bottom: 6rem;">
    <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem auto;">
        <div class="badge-gold" style="margin-bottom: 1rem;"><?php esc_html_e('Prise en main rapide', 'maliexplorer'); ?></div>
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem;"><?php esc_html_e('Comment ça marche ?', 'maliexplorer'); ?></h2>
        <p style="color: var(--color-text-muted);"><?php esc_html_e('Votre passerelle vers la culture malienne en trois étapes simples et accessibles à tous.', 'maliexplorer'); ?></p>
    </div>

    <div class="steps-grid">
        <div class="glass-card step-card">
            <div class="step-number">1</div>
            <h3 class="step-title"><?php esc_html_e('Télécharger & Créer un compte', 'maliexplorer'); ?></h3>
            <p class="step-desc"><?php esc_html_e('Téléchargez l\'application mobile MaliExplorer gratuitement sans aucun frais et créez votre profil en quelques secondes.', 'maliexplorer'); ?></p>
        </div>

        <div class="glass-card step-card">
            <div class="step-number">2</div>
            <h3 class="step-title"><?php esc_html_e('Sélectionner une région ou un site', 'maliexplorer'); ?></h3>
            <p class="step-desc"><?php esc_html_e('Naviguez sur la carte interactive à travers les 19 régions du Mali et choisissez les monuments, musées ou festivités qui vous inspirent.', 'maliexplorer'); ?></p>
        </div>

        <div class="glass-card step-card">
            <div class="step-number">3</div>
            <h3 class="step-title"><?php esc_html_e('Partir à l\'aventure et explorer', 'maliexplorer'); ?></h3>
            <p class="step-desc"><?php esc_html_e('Profitez d\'audioguides immersifs, de panoramas 360°, réservez vos billets pour les festivals et testez vos connaissances avec les quiz.', 'maliexplorer'); ?></p>
        </div>
    </div>
</section>

<!-- ==========================================================================
     6. CTA TÉLÉCHARGEMENT
     ========================================================================== -->
<section id="download" style="background: linear-gradient(180deg, #0A2518 0%, #06170E 100%); padding: 5rem 0; border-top: 1px solid var(--color-border-gold); text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem;"><?php esc_html_e('Prêt à vivre l\'expérience MaliExplorer ?', 'maliexplorer'); ?></h2>
        <p style="color: var(--color-text-muted); max-width: 600px; margin: 0 auto 2.5rem auto;"><?php esc_html_e('Téléchargez dès maintenant l\'application mobile et commencez votre exploration du patrimoine culturel malien.', 'maliexplorer'); ?></p>
        <a href="<?php echo maliexplorer_asset_url('maliexplorer-accueil.png.jpg'); ?>" download class="btn-gold">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/></svg>
            <span><?php esc_html_e('Télécharger le Package (.APK)', 'maliexplorer'); ?></span>
        </a>
    </div>
</section>

<?php
get_footer();
