# Database setup for form submissions

Run the setup script **once** to create the database and the `form_submissions` table used by the contact and service forms.

## How to run

**Option A – phpMyAdmin**  
1. Open phpMyAdmin.  
2. Go to **Import**.  
3. Choose the file `setup.sql` and run the import.

**Option B – MySQL command line**  
```bash
mysql -u root -p < setup.sql
```
(Or: `mysql -u root -p your_database_name < setup.sql` if you already created the database.)

**Option C – From PHP (one-time)**  
Create a temporary file in the project root (e.g. `run-setup.php`) that reads `database/setup.sql` and executes it with PDO, then run it in the browser once and delete it.

## After running

1. Set your database credentials in `config/database.php` (host, database name, user, password).  
2. Set email destinations in `config/email.php`: use **dev** + test address for development, **prod** + real address for production.
