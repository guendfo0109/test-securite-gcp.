FROM php:8.2-apache

# Configuration d'Apache pour écouter sur le port 8080 (requis par Cloud Run)
RUN sed -i 's/80/8080/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

WORKDIR /var/www/html

COPY . .

# On expose le port 8080
EXPOSE 8080

# Apache démarre automatiquement avec l'image PHP-Apache, pas besoin de CMD spécifique
