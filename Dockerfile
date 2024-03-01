# Use the official PHP image
FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www/html

# Workaround for release file expired problem
RUN echo "Acquire::Check-Valid-Until \"false\";\nAcquire::Check-Date \"false\";" | cat > /etc/apt/apt.conf.d/10no--check-valid-until

# Use a mirror for the Ubuntu package repository
RUN sed -i 's/http:\/\/archive.ubuntu.com\/ubuntu/http:\/\/in.archive.ubuntu.com\/ubuntu/g' /etc/apt/sources.list

# Update package lists and install required packages
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libpng-dev \
        libjpeg-dev \
        libpq-dev \
        libzip-dev \
        unzip \
        npm \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql pdo_pgsql zip \
    && a2enmod rewrite

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory contents
COPY . /var/www/html

# Install Composer dependencies
RUN composer install --no-interaction

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install extensions
RUN docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql pdo_pgsql zip exif pcntl bcmath

# Set recommended PHP.ini settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Install npm packages and run Laravel Mix
RUN npm install \
    && npm run dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]