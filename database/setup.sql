-- ============================================================
-- DMT Groupe - Form submissions database setup
-- Run this script once (e.g. phpMyAdmin Import or mysql < setup.sql)
-- to create the database and all tables for contact + service forms.
-- ============================================================

-- Create database (adjust name if needed)
CREATE DATABASE IF NOT EXISTS `dmt_group` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `dmt_group`;

-- Single table for all form submissions (contact + all service types)
-- Stores contact page submissions and every service form (certification, concept_design, etc.)
CREATE TABLE IF NOT EXISTS `form_submissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `form_type` varchar(50) NOT NULL COMMENT 'contact | certification | concept_design | digitalization | restaurant_marketing | staff_training | hotel_operations',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `services_selected` text DEFAULT NULL COMMENT 'JSON array of selected service checkboxes (for service forms only)',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `form_type` (`form_type`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Done. After running this script:
-- 1. Copy config/database.example.php to config/database.php
-- 2. Set your DB name, user, and password in config/database.php
-- 3. Configure config/email.php for dev/prod email destinations
-- ============================================================
