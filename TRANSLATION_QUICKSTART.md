# Translation System - Quick Start

## What Was Done ✅

The **index.php** file has been fully translated as an example. Here's what was implemented:

### 1. Files Created:
- `languages/en.php` - English translations
- `languages/fr.php` - French translations
- `includes/language-switcher.php` - Ready-to-use language switcher
- `TRANSLATION_GUIDE.md` - Complete documentation

### 2. Updated Files:
- `config.php` - Added translation system
- `index.php` - Fully translated as example

---

## How to Test It Now 🧪

### View the homepage in different languages:

**English (default):**
```
http://localhost/dmt_group/index.php
```

**French:**
```
http://localhost/dmt_group/index.php?lang=fr
```

Once you select a language, it will be remembered in your session!

---

## How to Translate Other Pages 🌍

### Quick 3-Step Process:

#### Step 1: Add Translations to Language Files

**Example for About page** - Edit `languages/en.php`:
```php
'about' => [
    'title' => 'About Us',
    'description' => 'We are a leading company...',
],
```

Then add the same to `languages/fr.php`:
```php
'about' => [
    'title' => 'À Propos de Nous',
    'description' => 'Nous sommes une entreprise leader...',
],
```

#### Step 2: Replace Text in Your Page

**Before:**
```php
<h1>About Us</h1>
<p>We are a leading company...</p>
```

**After:**
```php
<h1><?php echo t('about.title'); ?></h1>
<p><?php echo t('about.description'); ?></p>
```

#### Step 3: Test It
```
http://localhost/dmt_group/pages/about.php?lang=en
http://localhost/dmt_group/pages/about.php?lang=fr
```

---

## Add Language Switcher to Header 🔄

To add a language switcher anywhere on your site, include this in your template:

```php
<?php include 'includes/language-switcher.php'; ?>
```

**Recommended location:** Add it to `includes/header.php` in the header section.

---

## Translation Function Reference 📚

### Basic Usage:
```php
<?php echo t('key.subkey'); ?>
```

### Examples from index.php:
```php
<!-- Banner title -->
<?php echo t('home.banner.title_part1'); ?>

<!-- Service name -->
<?php echo t('home.services.business_solution'); ?>

<!-- Button text -->
<?php echo t('buttons.get_quote'); ?>
```

---

## Adding New Languages 🌐

### To add Spanish (es):

**1. Create** `languages/es.php`:
```php
<?php
return [
    'nav' => [
        'home' => 'Inicio',
        'about' => 'Acerca de',
        // ... rest of translations
    ],
];
```

**2. Register it** in `config.php`:
```php
$available_languages = ['en', 'fr', 'es']; // Add 'es'
```

**3. Update language switcher** in `includes/language-switcher.php`:
```php
$languages = [
    'en' => 'English',
    'fr' => 'Français',
    'es' => 'Español', // Add this
];
```

That's it! Spanish is now available.

---

## File Organization 📁

```
dmt_group/
├── languages/
│   ├── en.php                    ← English translations
│   └── fr.php                    ← French translations
├── includes/
│   └── language-switcher.php     ← Language switcher component
├── config.php                    ← Translation system (already set up)
├── index.php                     ← Fully translated example
├── TRANSLATION_GUIDE.md          ← Complete documentation
└── TRANSLATION_QUICKSTART.md     ← This file
```

---

## Translation Key Structure 🗂️

All translations follow this pattern:
```
[page].[section].[element]
```

### Examples from index.php:

| Key | Value (EN) | Value (FR) |
|-----|------------|------------|
| `home.banner.welcome` | Welcome! | Bienvenue! |
| `home.services.title` | Service We Provide | Services Que Nous Fournissons |
| `buttons.contact_us` | Contact Us | Contactez-Nous |

---

## Tips for Your Teammate 💡

1. **Look at index.php** - It's fully translated and serves as a perfect example
2. **Keep keys consistent** - Use the same keys in all language files
3. **Test as you go** - Use `?lang=en` and `?lang=fr` to test each page
4. **Organize by sections** - Group related translations together
5. **Missing translations show as** `[MISSING: key.name]` - Makes debugging easy!

---

## Common Tasks 🛠️

### See what language is active:
```php
<?php echo get_current_lang(); ?> <!-- Outputs: 'en' or 'fr' -->
```

### Check if translation exists before using:
```php
<?php
$text = t('some.key');
if (strpos($text, '[MISSING:') === false) {
    echo $text;
} else {
    echo 'Default text';
}
?>
```

### Use variables in translations:
```php
// In language file:
'greeting' => 'Hello, %s!'

// In template:
<?php echo sprintf(t('greeting'), 'John'); ?> <!-- Hello, John! -->
```

---

## Need Help? 📖

- **Full Documentation**: See `TRANSLATION_GUIDE.md`
- **Example Implementation**: Check `index.php`
- **Translation Files**: Look in `languages/` folder

---

## Summary Checklist ✔️

For each new page you translate:

- [ ] Add translation keys to `languages/en.php`
- [ ] Add French translations to `languages/fr.php`
- [ ] Replace hardcoded text with `<?php echo t('key'); ?>`
- [ ] Test in both languages (`?lang=en` and `?lang=fr`)
- [ ] Verify all text displays correctly

---

**You're all set! Start translating! 🚀**
