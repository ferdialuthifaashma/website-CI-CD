FROM php:8.2-apache

# 1. Install dependensi sistem dan ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# 2. Aktifkan mod_rewrite Apache untuk routing Laravel
RUN a2enmod rewrite

# 3. Install Composer versi terbaru ke dalam container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Tentukan folder kerja di dalam container
WORKDIR /var/www/html

# 5. Copy semua file proyek Laravel kamu ke dalam container
COPY . .

# 6. Install dependensi Laravel menggunakan Composer
RUN composer install --no-dev --optimize-autoloader

# 7. Atur permission folder agar storage dan cache bisa ditulis oleh Apache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Ubah DocumentRoot Apache agar langsung mengarah ke folder public Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 9. Buka port 80 untuk akses web service
EXPOSE 80

CMD ["apache2-foreground"]