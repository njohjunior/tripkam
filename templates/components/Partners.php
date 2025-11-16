<?php
$logo = "/tripkam/templates/assets/logoipsum.png";
$partners = [];

for ($i = 0; $i < 6; $i++) {
    $partners[] = $logo;
}
?>

<section class="partners">
    <div class="partners-track">
        <?php foreach ($partners as $img): ?>
            <img src="<?= $img ?>" alt="logo partenaire">
        <?php endforeach; ?>

        <!-- duplication pour une boucle fluide -->
        <?php foreach ($partners as $img): ?>
            <img src="<?= $img ?>" alt="logo partenaire">
        <?php endforeach; ?>
    </div>
</section>