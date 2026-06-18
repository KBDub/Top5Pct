Top 5 Percent — Hosting.com Deployment Startup Guide
======================================================
Last updated: June 18, 2026

NODE.JS NOTE
------------
Node is NOT required on the hosting server. Frontend assets are compiled
locally before upload and the compiled output (public/build/) is included
in the upload. The production startup script (scripts/startup.sh) has no
Node or npm dependencies.


REQUIREMENTS (server)
----------------------
- PHP 8.4+
- Composer 2+
- PostgreSQL (production database)
- Meilisearch (self-hosted or cloud)
- FrankenPHP binary (auto-downloaded on first boot via Octane installer)


BEFORE YOU UPLOAD — compile assets locally
-------------------------------------------
Run this once on your local machine (Node required locally, not on server):

  npm install
  npm run build

This generates public/build/. Include that folder in your upload.
Once it is on the server, Node is never needed again.


STEP 1 — Upload files
---------------------
Upload the full project to your hosting root (e.g. /home/username/top5pct/).
Include public/build/ in the upload (compiled assets — see above).
Do NOT upload the /vendor or /node_modules folders.


STEP 2 — Install PHP dependencies
-----------------------------------
  composer install --no-dev --optimize-autoloader


STEP 2b — Create required storage directories
-----------------------------------------------
The .gitignore excludes /storage/* so these folders will not exist on a
fresh server. Laravel needs them before any artisan command can run.
Missing directories cause: "Please provide a valid cache path" (Compiler.php).

  mkdir -p storage/framework/views
  mkdir -p storage/framework/cache/data
  mkdir -p storage/framework/sessions
  mkdir -p storage/logs
  mkdir -p bootstrap/cache
  chmod -R 775 storage
  chmod -R 775 bootstrap/cache

Run this step before any php artisan command.


STEP 3 — Create and configure .env
------------------------------------
Copy .env.example to .env and fill in the values below.
Required changes from the defaults:

  APP_ENV=production
  APP_DEBUG=false
  APP_KEY=                        (generate with: php artisan key:generate)
  APP_URL=https://yourdomain.com

  DB_CONNECTION=pgsql
  DB_HOST=your-db-host
  DB_PORT=5432
  DB_DATABASE=your-db-name
  DB_USERNAME=your-db-user
  DB_PASSWORD=your-db-password

  MEILISEARCH_HOST=http://127.0.0.1:8000
  MEILISEARCH_KEY=your-meilisearch-master-key

  PAYMENTS_TYPE=stripe             (use "offline" to disable live payments)
  OCTANE_SERVER=frankenphp

  SESSION_DRIVER=database
  QUEUE_CONNECTION=database

  MAIL_MAILER=smtp
  MAIL_HOST=your-smtp-host
  MAIL_PORT=587
  MAIL_USERNAME=your-smtp-user
  MAIL_PASSWORD=your-smtp-password
  MAIL_FROM_ADDRESS=hello@top5pct.com
  MAIL_FROM_NAME="Top 5 Percent"


STEP 4 — Run migrations and seed data
--------------------------------------
  php artisan migrate --force
  php artisan db:seed --force


STEP 5 — Set up storage
-------------------------
  php artisan storage:link


STEP 6 — Cache config and routes for production
-------------------------------------------------
  php artisan config:cache
  php artisan route:cache
  php artisan view:cache
  php artisan event:cache


STEP 7 — Build the Meilisearch search index
--------------------------------------------
Make sure Meilisearch is running first, then:

  php artisan scout:import "App\Models\Product"


STEP 8 — Start Meilisearch
----------------------------
Run this as a background process or configure it as a service:

  meilisearch \
    --http-addr 0.0.0.0:8000 \
    --master-key YOUR_MASTER_KEY \
    --db-path ./storage/meilisearch \
    --env production \
    --log-level INFO


STEP 9 — Start the Laravel server (Octane + FrankenPHP)
---------------------------------------------------------
The production startup script handles FrankenPHP download, Meilisearch health
check, Laravel startup, and OPcache warm-up automatically. No Node involved.

  bash scripts/startup.sh

Or start Octane directly:

  php artisan octane:start \
    --server=frankenphp \
    --host=0.0.0.0 \
    --port=5000 \
    --admin-port=2019

FrankenPHP will be downloaded automatically on the first run if not present.


STEP 10 — Point your web server to port 5000
---------------------------------------------
Configure your hosting.com reverse proxy or virtual host to forward
requests to http://127.0.0.1:5000.

Apache example (.htaccess or VirtualHost):
  ProxyPass / http://127.0.0.1:5000/
  ProxyPassReverse / http://127.0.0.1:5000/

Nginx example:
  location / {
      proxy_pass http://127.0.0.1:5000;
      proxy_set_header Host $host;
      proxy_set_header X-Real-IP $remote_addr;
      proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
      proxy_set_header X-Forwarded-Proto $scheme;
  }


QUEUE WORKER (optional, recommended for production)
----------------------------------------------------
Run this as a supervised background process to handle queued jobs (emails, etc.):

  php artisan queue:work --sleep=3 --tries=3


ADMIN PANEL
-----------
The Lunar Hub admin panel is available at:
  https://yourdomain.com/hub


QUICK REFERENCE — useful artisan commands
------------------------------------------
  php artisan optimize:clear                       clear all caches
  php artisan scout:import "App\Models\Product"    rebuild search index
  php artisan queue:work                           start queue worker
  php artisan staff:reset-passwords               reset staff passwords (requires STAFF_ADMIN_HASH env var)
  php artisan octane:reload                        hot-reload Octane without downtime


NOTES
-----
- Set PAYMENTS_TYPE=offline in .env to disable Stripe during testing.
- The Meilisearch price filter uses cents (dollars x 100) internally.
- The public/storage symlink must exist for product images to load.
- FrankenPHP is gitignored and downloaded at runtime by the startup script.
- Do not set APP_DEBUG=true in production — it exposes stack traces.
- If you update CSS or JS after deployment, recompile locally (npm run build)
  and re-upload public/build/ — no Node needed on the server.
