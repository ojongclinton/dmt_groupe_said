<!-- Language Switcher Component -->
<div class="language-switcher">
    <?php
    $languages = [
        'en' => 'English',
        'fr' => 'Français',
    ];

    foreach ($languages as $code => $name):
        $is_current = ($code === get_current_lang());
    ?>
        <a href="<?php echo lang_url($code); ?>"
           class="lang-link <?php echo $is_current ? 'active' : ''; ?>"
           title="<?php echo $name; ?>">
            <?php echo strtoupper($code); ?>
        </a>
    <?php endforeach; ?>
</div>

<style>
/* Language Switcher Styles */
.language-switcher {
    display: inline-flex;
    gap: 8px;
    align-items: center;
}

.language-switcher .lang-link {
    padding: 5px 12px;
    text-decoration: none;
    color: #333;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.language-switcher .lang-link:hover {
    background-color: #f0f0f0;
    border-color: #ccc;
}

.language-switcher .lang-link.active {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
}
</style>
