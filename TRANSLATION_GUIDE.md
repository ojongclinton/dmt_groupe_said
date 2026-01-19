# Translation System Guide

This guide explains how to use the translation system implemented in the DMT Group project.

## Table of Contents
1. [Overview](#overview)
2. [How It Works](#how-it-works)
3. [File Structure](#file-structure)
4. [Using Translations](#using-translations)
5. [Adding New Languages](#adding-new-languages)
6. [Translating Pages](#translating-pages)
7. [Language Switcher](#language-switcher)
8. [Best Practices](#best-practices)
9. [Troubleshooting](#troubleshooting)

---

## Overview

The translation system uses **PHP array-based language files** to store translations. This approach is:
- ✅ Fast and efficient
- ✅ Easy to maintain
- ✅ Version control friendly
- ✅ No database or external dependencies required

Currently implemented languages:
- **English (en)** - Default language
- **French (fr)** - Example translation

---

## How It Works

### 1. Language Files
All translations are stored in the `languages/` folder:
```
languages/
├── en.php    (English)
└── fr.php    (French)
```

Each file returns a PHP array with translations organized by sections.

### 2. Translation Function
The `t()` function (or its alias `__()`) retrieves translations using dot notation:

```php
<?php echo t('home.banner.title'); ?>
```

This fetches: `$translations['home']['banner']['title']`

### 3. Language Selection
Language is selected via:
1. **URL Parameter**: `?lang=fr`
2. **Session Storage**: Remembers user's choice
3. **Default**: Falls back to English if no preference is set

---

## File Structure

### config.php
Contains the translation system logic:
- Loads the selected language file
- Provides translation helper functions
- Manages language switching

### languages/en.php
Example structure:
```php
<?php
return [
    'nav' => [
        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact',
    ],
    'home' => [
        'banner' => [
            'title' => 'Welcome to Our Site',
            'subtitle' => 'We provide excellent services',
            'button' => 'Get Started',
        ],
        'about' => [
            'title' => 'About Us',
            'description' => 'We are a leading company...',
        ],
    ],
    'buttons' => [
        'learn_more' => 'Learn More',
        'contact_us' => 'Contact Us',
    ],
];
```

---

## Using Translations

### Basic Usage

#### In PHP Files:
```php
<!-- Simple text -->
<h1><?php echo t('nav.home'); ?></h1>

<!-- Button text -->
<button><?php echo t('buttons.contact_us'); ?></button>

<!-- Paragraph -->
<p><?php echo t('home.about.description'); ?></p>
```

#### Short Alias:
You can also use `__()` instead of `t()`:
```php
<h1><?php echo __('nav.home'); ?></h1>
```

### Nested Keys
Use dot notation for nested arrays:
```php
<!-- This accesses: $translations['home']['banner']['title'] -->
<?php echo t('home.banner.title'); ?>
```

### HTML in Translations
You can include HTML entities in your translations:
```php
// In language file:
'description' => 'We are a <strong>leading</strong> company...',

// In template:
<p><?php echo t('home.about.description'); ?></p>
```

---

## Adding New Languages

### Step 1: Create Language File

1. Copy an existing language file (e.g., `en.php`)
2. Rename it with the language code (e.g., `es.php` for Spanish)
3. Translate all values (keep keys the same!)

Example for Spanish (`languages/es.php`):
```php
<?php
return [
    'nav' => [
        'home' => 'Inicio',
        'about' => 'Acerca de',
        'contact' => 'Contacto',
    ],
    'home' => [
        'banner' => [
            'title' => 'Bienvenido a Nuestro Sitio',
            'subtitle' => 'Ofrecemos excelentes servicios',
            'button' => 'Comenzar',
        ],
    ],
];
```

### Step 2: Register Language

Add the language code to `config.php`:

```php
// Find this line in config.php:
$available_languages = ['en', 'fr'];

// Add your new language:
$available_languages = ['en', 'fr', 'es'];
```

That's it! The language is now available.

---

## Translating Pages

### Example: index.php (Already Translated)

**Before:**
```php
<h1 class="title">
    Innovative <span>Solutions,</span> Tailored for Your Success
</h1>
<p class="description">
    We provide the best business solutions
</p>
<a href="#" class="btn">Get Consultant</a>
```

**After:**
```php
<h1 class="title">
    <?php echo t('home.banner.title_part1'); ?>
    <span><?php echo t('home.banner.title_part2'); ?></span>
    <?php echo t('home.banner.title_part3'); ?>
</h1>
<p class="description">
    <?php echo t('home.banner.description'); ?>
</p>
<a href="#" class="btn"><?php echo t('home.banner.cta_button'); ?></a>
```

### Step-by-Step Process to Translate a Page:

#### 1. Identify Text Content
Go through the page and identify all hardcoded text that needs translation.

#### 2. Create Translation Keys
Add the text to your language files with logical keys.

**Example for About Page:**
```php
// In languages/en.php
'about' => [
    'page_title' => 'About Us',
    'intro_title' => 'Leading Business Consulting Agency',
    'intro_text' => 'We believe in the power of collaboration...',
    'mission_title' => 'Our Mission',
    'vision_title' => 'Our Vision',
],
```

#### 3. Replace Hardcoded Text
Replace the hardcoded text in your page with translation function calls:

```php
<h1><?php echo t('about.page_title'); ?></h1>
<h2><?php echo t('about.intro_title'); ?></h2>
<p><?php echo t('about.intro_text'); ?></p>
```

#### 4. Test
Switch between languages to verify translations work:
- English: `http://localhost/dmt_group/pages/about.php?lang=en`
- French: `http://localhost/dmt_group/pages/about.php?lang=fr`

---

## Language Switcher

### Add a Language Switcher to Your Pages

Add this code to `includes/header.php` or anywhere you want a language switcher:

```php
<div class="language-switcher">
    <?php foreach (get_available_languages() as $lang): ?>
        <a href="<?php echo lang_url($lang); ?>"
           class="<?php echo ($lang === get_current_lang()) ? 'active' : ''; ?>">
            <?php echo strtoupper($lang); ?>
        </a>
    <?php endforeach; ?>
</div>
```

### CSS for Language Switcher:
```css
.language-switcher {
    display: flex;
    gap: 10px;
}

.language-switcher a {
    padding: 5px 10px;
    text-decoration: none;
    color: #333;
}

.language-switcher a.active {
    font-weight: bold;
    color: #007bff;
}
```

---

## Best Practices

### 1. Organize by Sections
Group related translations together:
```php
// ✅ Good
'home' => [
    'banner' => [...],
    'about' => [...],
    'services' => [...],
]

// ❌ Bad - all translations at root level
'banner_title' => '...',
'about_title' => '...',
```

### 2. Use Descriptive Keys
```php
// ✅ Good
'home.services.business_solution'

// ❌ Bad
'home.srv.bs'
```

### 3. Keep Keys Consistent
Use the same keys across all language files:
```php
// en.php
'nav' => ['home' => 'Home']

// fr.php
'nav' => ['home' => 'Accueil']  // ✅ Same key 'nav.home'
```

### 4. Avoid Hardcoded Text
```php
// ❌ Bad - Mixing hardcoded and translated
<button><?php echo t('buttons.submit'); ?> Now!</button>

// ✅ Good - Everything translated
<button><?php echo t('buttons.submit_now'); ?></button>
```

### 5. Handle Plurals
For plurals, create separate keys:
```php
'product' => [
    'singular' => '1 product',
    'plural' => '%d products',
]

// In code:
$count = 5;
echo sprintf(t('product.plural'), $count); // "5 products"
```

---

## Troubleshooting

### Translation Not Showing

**Problem**: You see `[MISSING: some.key]` on the page.

**Solution**:
1. Check the translation key exists in the language file
2. Verify the key path is correct (case-sensitive)
3. Make sure the language file syntax is valid PHP

### Language Not Switching

**Problem**: Language stays the same after clicking switcher.

**Solution**:
1. Check that sessions are enabled (config.php has `session_start()`)
2. Verify the language code is in `$available_languages` array
3. Clear browser cookies/cache

### Wrong Language Loading

**Problem**: Wrong language appears on page load.

**Solution**:
1. Check `$_SESSION['lang']` value
2. Verify language file exists in `languages/` folder
3. Clear session: Add `?lang=en` to URL to reset

### Quotes Breaking HTML

**Problem**: Apostrophes or quotes break the HTML.

**Solution**:
Use `htmlspecialchars()` for user-facing content:
```php
<input type="text" value="<?php echo htmlspecialchars(t('form.placeholder')); ?>">
```

---

## Example: Complete Translation Workflow

### Scenario: Translate the Contact Page

**1. Create translation keys in `languages/en.php`:**
```php
'contact' => [
    'page_title' => 'Contact Us',
    'intro' => 'Let\'s Start a Conversation',
    'form' => [
        'name' => 'Your Name',
        'email' => 'Your Email',
        'message' => 'Your Message',
        'submit' => 'Send Message',
    ],
    'info' => [
        'call_us' => 'Call Us',
        'email_us' => 'Email Us',
        'visit_us' => 'Visit Us',
    ],
],
```

**2. Add French translations in `languages/fr.php`:**
```php
'contact' => [
    'page_title' => 'Contactez-Nous',
    'intro' => 'Commençons une Conversation',
    'form' => [
        'name' => 'Votre Nom',
        'email' => 'Votre Email',
        'message' => 'Votre Message',
        'submit' => 'Envoyer le Message',
    ],
    'info' => [
        'call_us' => 'Appelez-Nous',
        'email_us' => 'Envoyez-nous un Email',
        'visit_us' => 'Visitez-Nous',
    ],
],
```

**3. Update `pages/contact.php`:**
```php
<h1><?php echo t('contact.page_title'); ?></h1>
<h2><?php echo t('contact.intro'); ?></h2>

<form>
    <input type="text" placeholder="<?php echo t('contact.form.name'); ?>">
    <input type="email" placeholder="<?php echo t('contact.form.email'); ?>">
    <textarea placeholder="<?php echo t('contact.form.message'); ?>"></textarea>
    <button><?php echo t('contact.form.submit'); ?></button>
</form>

<div class="contact-info">
    <h3><?php echo t('contact.info.call_us'); ?></h3>
    <h3><?php echo t('contact.info.email_us'); ?></h3>
    <h3><?php echo t('contact.info.visit_us'); ?></h3>
</div>
```

**4. Test:**
- English: `pages/contact.php?lang=en`
- French: `pages/contact.php?lang=fr`

---

## Quick Reference

### Available Functions

| Function | Description | Example |
|----------|-------------|---------|
| `t($key)` | Get translation | `t('nav.home')` |
| `__($key)` | Alias for t() | `__('nav.home')` |
| `get_current_lang()` | Get current language code | `get_current_lang()` → `'en'` |
| `get_available_languages()` | Get array of available languages | `get_available_languages()` → `['en', 'fr']` |
| `lang_url($lang)` | Generate URL for language switch | `lang_url('fr')` → `'?lang=fr'` |

### Translation Key Naming Convention

```
[page].[section].[element]
```

Examples:
- `home.banner.title` - Homepage banner title
- `nav.contact` - Navigation contact link
- `buttons.learn_more` - Learn more button
- `footer.copyright` - Footer copyright text

---

## Summary

1. **Translations are stored** in `languages/[code].php` files
2. **Use the `t()` function** with dot notation to get translations
3. **Switch languages** via `?lang=fr` URL parameter
4. **Keep keys consistent** across all language files
5. **Organize by sections** for better maintainability

For any questions or issues, refer to the examples in `index.php` which is fully translated!

---

**Happy Translating! 🌍**
