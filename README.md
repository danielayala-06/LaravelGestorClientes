# Proyecto Laravel

## Requisitos
- PHP >= 8.2
- Composer
- MySQL
- Node.js y NPM

## Instalación

### Clonamos el repositorio
```bash
git clone https://github.com/danielayala-06/LaravelGestorClientes.git
```
### Entramos a la carpeta raiz del proyecto
```bash
cd Gestion-Clientes
```
### Creamos los archivo .env y los configuramos 
```bash
cp .env.example .env
```
### Instalamos las dependencias PHP
```bash
composer install
```
### Generamos la APP_KEY de laravel
```bash
php artisan key:generate
```
### Ejecutamos las migraciones
```bash
php artisan migrate
```
### Instalamos las dependencias de front-end
```bash
npm install && npm run dev
```
### Corremos el servidor
```bash
php artisan serve
```