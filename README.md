# Proyecto Laravel

## Requisitos
- PHP >= 8.2
- Composer
- MySQL
- Node.js y NPM

## Instalación

```bash
git clone https://github.com/danielayala-06/LaravelGestorClientes.git
cd Gestion-Clientes
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan serve
