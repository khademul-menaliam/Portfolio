# Use official PHP image
FROM php:8.2-cli

# Set working directory inside the container
WORKDIR /var/www/html

# Copy project files into container
COPY . .

# Copy composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Optimize Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Expose port 8000
EXPOSE 8000

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
