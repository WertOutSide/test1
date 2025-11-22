<?php
// Небезопасная конфигурация базы данных
define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASS', 'password123');
define('DB_NAME', 'production_db');

// Пароль в открытом виде
$db_password = "secret123";

// Ключ API в конфигурации
$api_key = "sk_live_1234567890abcdef";

// Отладочный режим в продакшене
define('DEBUG_MODE', true);
?>
