# 🌿 Plantas Front

Prototipo de sistema CRUD construido con **Laravel** y el paquete **laravel-front**, que permite registrar y gestionar plantas desde un panel con autenticación de usuarios.

Este proyecto cuenta como una variante del prototipo [plantas-app](https://github.com/tu-usuario/plantas-app), construido con el mismo propósito pero utilizando laravel-front para generar el CRUD de forma más automatizada.

---

## ¿Qué hace esta aplicación?

Plantas Front permite llevar un registro básico de plantas desde el navegador, con acceso protegido por login. Con ella se puede:

- **Registrar e iniciar sesión** con tu cuenta de usuario
- **Registrar** una nueva planta con nombre común, especie, descripción y fecha de registro
- **Ver** todas las plantas registradas en una tabla
- **Eliminar** cualquier registro con confirmación previa

> La edición de registros no está incluida en este prototipo para esta version.

---

## Tecnologías utilizadas

- [Laravel 11](https://laravel.com/) — Framework PHP
- [Laravel Breeze](https://laravel.com/docs/starter-kits#breeze) — Autenticación ligera
- [laravel-front](https://github.com/weblabormx/laravel-front) — Paquete para generar paneles CRUD
- PHP >= 8.2
- SQLite — Base de datos local sin servidor externo
- Blade — Motor de plantillas de Laravel

---

## Requisitos previos

Antes de correr el proyecto, asegúrate de tener instalado en tu máquina:

| Herramienta | Versión mínima | Verificar con |
|---|---|---|
| PHP | 8.2 | `php -v` |
| Composer | 2.x | `composer -v` |
| Node.js | 18.x | `node -v` |
| Git | cualquier | `git -v` |

> SQLite ya viene incluido con PHP, no necesitas instalar nada adicional para la base de datos.

---

## Instalación y configuración local

Sigue estos pasos en orden para tener el proyecto corriendo en tu máquina:

**1. Clonar el repositorio**

```bash
git clone https://github.com/tu-usuario/plantas-front.git
cd plantas-front
```

**2. Instalar dependencias PHP**

```bash
composer install
```

**3. Instalar dependencias de frontend**

```bash
npm install
```

**4. Copiar el archivo de entorno**

```bash
cp .env.example .env
```

**5. Configurar la base de datos SQLite**

Abre el archivo `.env` y asegúrate de que la configuración de base de datos sea:

```env
DB_CONNECTION=sqlite
```

Elimina o comenta estas líneas si existen en tu `.env`:

```env
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

Luego crea el archivo de base de datos:

```bash
touch database/database.sqlite
```

> Para Windows se usa: `echo "" > database/database.sqlite` o puedes crearlo de forma manual.

**6. Generar la clave de aplicación**

```bash
php artisan key:generate
```

**7. Correr las migraciones**

```bash
php artisan migrate
```

Deberás ver una salida similar a:

```
INFO  Running migrations.
0001_01_01_000000_create_users_table ............. DONE
0001_01_01_000001_create_cache_table ............. DONE
xxxx_xx_xx_create_plantas_table .................. DONE
```

**8. Compilar los assets de frontend**

```bash
npm run build
```

**9. Levantar el servidor**

```bash
php artisan serve
```

**10. Abrir en el navegador y registrarse**

Visita: [http://127.0.0.1:8000/register](http://127.0.0.1:8000/register) ó http://plantas-front.test/register si posees Laravel Herd configurado en tu máquina.

Crea tu cuenta de usuario, luego navega al CRUD de plantas en:

```
http://127.0.0.1:8000/plantas (ó http://plantas-front.test/register)
```

---

## Diferencias con el prototipo plantas-app

| Característica | plantas-app | plantas-front |
|---|---|---|
| Autenticación | ❌ No requiere | ✅ Requerida |
| Generación del CRUD | Manual (controlador + vistas) | Automática vía laravel-front |
| Complejidad de setup | Menor | Mayor (más dependencias) |

