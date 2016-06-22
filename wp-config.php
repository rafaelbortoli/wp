<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'rafa');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'rafa');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j>$0pb1RmT2I8(?CG?}SK$]=C2Z9_|}QI eBVx6wQRSqV7OPBCa+r&eik|sC0nf?');
define('SECURE_AUTH_KEY',  '%>=unvo]{Fn(u_`sN0D9i174o7wa_ ddD~s7Rv/x5JbJyYE:nVZF[?])q$JL# 2Y');
define('LOGGED_IN_KEY',    ':c9dBmz~#E5+|_49#ekvGcItit l7wMW}4*Uj%7L.}[D!O#c;LGt}GC~QgUec~xS');
define('NONCE_KEY',        'k(HdM}2&?-=lJf{T mJ|QNb,`?3e/&}EiQiw;zS~~YOEw~,>.4E2_IKpSd?PSBFg');
define('AUTH_SALT',        'M.6&CsKO-J4&u`,fZIn {hMx4% x#^zzQ^|U+vs}wKC.1NXqqz0(Uz[j+KjGX{(+');
define('SECURE_AUTH_SALT', ' bi)>m$5B<|s$v/EDAX=hVT]YKo;geDfTqUMGBn`==K@*KqQ7;7pt5/els(1SS6J');
define('LOGGED_IN_SALT',   'B(t04n1#s6*0&}*G/i>n&`U[.=?^?&Wh~GE|BLQ9S2_Vp!+p%Mqu,+udtuqKa)dy');
define('NONCE_SALT',       '+W*RiqUjP6_ r&`kMX4t[G[@@~Jz`-s-D~h~VWd8Je|p:7C#9dIkf1!M![?<{bJI');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
