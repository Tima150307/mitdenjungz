# Makefile für Laravel & Vite

# Standard-Ziel, wenn man nur "make" tippt
.DEFAULT_GOAL := help

.PHONY: help install start dev build preview clean urls migrate

# ----------------------------------------------------------------------
# 1. SETUP & INSTALLATION
# ----------------------------------------------------------------------

install-project: ## Startet das Projekt komplett neu (Dependencies, .env, Key, Migration)
	@echo "--- 📦 Installiere Backend Dependencies ---"
	composer install
	@echo "--- 📦 Installiere Frontend Dependencies ---"
	npm install
	@echo "--- 📄 Erstelle .env Datei (falls nicht vorhanden) ---"
	php -r "file_exists('.env') || copy('.env.example', '.env');"
	@echo "--- 🔑 Generiere App Key ---"
	php artisan key:generate
	@echo "--- 🗄️ Datenbank Migration ---"
	php artisan migrate --force
	@echo "--- ✅ Installation fertig! Starte jetzt mit 'make start' ---"

# ----------------------------------------------------------------------
# 2. STARTEN & ENTWICKLUNG
# ----------------------------------------------------------------------

start: ## Startet den Laravel Server (Backend)
	php artisan serve

dev: ## Startet den Vite Server (Frontend Hot-Reload)
	npm run dev

urls: ## Öffnet die Lokale Seite im Browser (Windows)
	start http://127.0.0.1:8000

# ----------------------------------------------------------------------
# 3. BUILD & PRODUCTION
# ----------------------------------------------------------------------

build: ## Baut die Frontend Assets für Production
	npm run build

preview: ## Vorschau des Production-Builds
	npm run preview

# ----------------------------------------------------------------------
# 4. MAINTENANCE & CLEANING
# ----------------------------------------------------------------------

clearcache: ## Leert ALLE Caches (Config, Route, View, Event)
	@echo "--- 🧹 Leere Laravel Caches ---"
	php artisan optimize:clear
	php artisan config:clear
	php artisan route:clear
	php artisan view:clear
	php artisan event:clear
	@echo "--- ✨ Alles sauber! ---"

migrate: ## Führt Datenbank-Migrationen aus
	php artisan migrate

# ----------------------------------------------------------------------
# HELPER (Zeigt alle Befehle an)
# ----------------------------------------------------------------------
help:
	@echo "Verfügbare Befehle:"
	@echo "  make install-project  -> Erstinstallation (Composer, NPM, .env, Key, DB)"
	@echo "  make start            -> Startet Laravel Server (php artisan serve)"
	@echo "  make dev              -> Startet Vite (npm run dev)"
	@echo "  make urls             -> Öffnet Browser"
	@echo "  make clearcache       -> Leert alle Caches"
	@echo "  make build            -> Baut Frontend Assets"
