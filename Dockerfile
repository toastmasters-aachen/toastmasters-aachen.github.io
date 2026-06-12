FROM php:8.2-cli

WORKDIR /app
COPY . .

# Render injects PORT at runtime; fall back to 10000 for local runs.
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-10000} router.php"]
