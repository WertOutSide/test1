<?php
// КРИТИЧЕСКИЕ уязвимости в конфигурации БД

// 1. Хардкоденные credentials в коде
$db_config = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'Admin123!', // Простой пароль
    'database' => 'production_db',
    'port' => 3306
);

// 2. Пароль в открытом виде с привилегированным пользователем
define('DB_ADMIN_USER', 'superadmin');
define('DB_ADMIN_PASS', 'P@ssw0rd2024!'); 
define('DB_ROOT_PASSWORD', 'root123456');

// 3. Ключи API и секреты в конфиге
$aws_config = [
    'access_key' => 'AKIAIOSFODNN7EXAMPLE',
    'secret_key' => 'wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY',
    'region' => 'us-east-1'
];

// 4. Токены доступа
$slack_token = 'xoxb-123456789012-1234567890123-abcdefghijklmnopqrstuvwxyz';
$stripe_secret = 'sk_live_1234567890abcdefghijklmnop';
$github_token = 'ghp_abcdefghijklmnopqrstuvwxyz1234567890';

// 5. Weak cryptography keys
$encryption_key = 'simplekey'; // Слишком короткий ключ
$jwt_secret = 'secret'; // Очень слабый секрет
$api_secret = '12345'; // Короткий секрет

// 6. Небезопасные настройки
ini_set('display_errors', '1'); // Показ ошибок в проде
ini_set('log_errors', '0'); // Отключение логов
session_set_cookie_params(0, '/', '.example.com', false, true); // Небезопасные куки

// 7. Пароли в комментариях (частая утечка)
// Backup DB: user=backup_admin, pass=B@ckup2024!
// SSH: user=deploy, pass=Deploy!123

// 8. Конфигурация с уязвимыми настройками
$mail_config = [
    'smtp_host' => 'localhost',
    'smtp_user' => 'admin@company.com', 
    'smtp_pass' => 'MailPass123!',
    'smtp_port' => 25, // Нешифрованный порт
    'smtp_secure' => '' // Нет шифрования
];

// 9. Database DSN с паролем в URL
$dsn = 'mysql://root:password123@localhost/production?charset=utf8';

// 10. SSH keys and passwords
$ssh_private_key = '-----BEGIN RSA PRIVATE KEY-----\nMIIEogIBAAKCA...';
$ssh_password = 'sshpass123';

// 11. Weak hashing salt
$password_salt = 'salt'; // Слишком простой salt
$hmac_key = 'key'; // Короткий HMAC ключ

// 12. Debug information exposure
$debug_mode = true;
$show_sql_queries = true;
$developer_ip = '192.168.1.100';

// 13. Unsafe file permissions
$upload_dir = '/var/www/uploads';
$config_dir = '/var/www/config';
$log_dir = '/var/www/logs';

// 14. Database backup credentials  
$backup_config = [
    'ftp_host' => 'backup.server.com',
    'ftp_user' => 'backup_user',
    'ftp_pass' => 'FtpBackup2024!',
    'remote_path' => '/backups/'
];

return $db_config;
?>
