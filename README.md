# Aplicación PHP Twitter - Configuración Docker

## Descripción
Esta configuración conteneriza la aplicación PHP Twitter con dos contenedores:
- **Contenedor Web**: PHP 8.1 con Apache sirviendo la aplicación
- **Contenedor Base de Datos**: MySQL 8.0 con la base de datos de ejemplo

## Inicio Rápido

### Opción 1: Construir localmente
```bash
docker-compose up --build
```

### Opción 2: Usar imágenes de Docker Hub
1. Reemplaza `yourusername` en `docker-compose-hub.yml` con tu nombre de usuario de Docker Hub
2. Ejecuta:
```bash
docker-compose -f docker-compose-hub.yml up
```

## Construir y Publicar Imágenes

1. **Construir la imagen:**
```bash
docker build -t yourusername/php-twitter-app:latest ./php-sample-application
```

2. **Subir a Docker Hub:**
```bash
docker login
docker push yourusername/php-twitter-app:latest
```

3. **O usar el script proporcionado:**
```bash
chmod +x build-and-push.sh
./build-and-push.sh
```

## Acceder a la Aplicación
- Aplicación Web: http://localhost:8080
- MySQL: localhost:3306

## Variables de Entorno
- `DB_HOST`: Host de la base de datos (por defecto: mysql)
- `DB_NAME`: Nombre de la base de datos (por defecto: sample)
- `DB_USER`: Usuario de la base de datos (por defecto: sampleuser)
- `DB_PASS`: Contraseña de la base de datos (por defecto: samplepass)

## Archivos Modificados
- Agregado `config-dev/db-connection-docker.php` para conexión DB compatible con contenedores
- Actualizado `dic/users.php` y `dic/tweets.php` para usar configuración DB de Docker
- Creado `Dockerfile` para la aplicación web
- Creado `docker-compose.yml` para desarrollo local
- Creado `docker-compose-hub.yml` para imágenes de Docker Hub