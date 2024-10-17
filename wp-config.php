<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'iube' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'iubesite' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '#$fqw!15$s98%pOJM' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>*ou-MV5uzQgxE23q^4ap]W fKZzFV73Qs(_j`cyan P*/0FG]c,ZA..MjLc%V%N' );
define( 'SECURE_AUTH_KEY',  'v%5V;caYU|*;L3gG{>mIdw(>W]:5u:hOw:r~pYT|h2#VsyHYQLH8x|44g4TB^eZj' );
define( 'LOGGED_IN_KEY',    ':W^G|6Sz+fvHYKBW m6Pc8vtRTWz)._i>JpMSf10+L -]>8}yf~&.NE<alaLT{&6' );
define( 'NONCE_KEY',        'wXV?e^1Xmi(~SNZ[#G_<9^.p8&ACd=gZHZ{X! 1CYham ;%3>pn3j|V{:YWy4f_.' );
define( 'AUTH_SALT',        '8H]QAvf8 h,eQx.K9AodR0AOI^M4zNjfNWU/ds1bh(i{/f,p@)Gt@FV[GFRz}-=!' );
define( 'SECURE_AUTH_SALT', 'JYjCMI;sUCkcm^X`:1w`<NRs]7t;SPx&e)x}Fn}/&S^MR44M$hbeUve(G#7(cC*E' );
define( 'LOGGED_IN_SALT',   '2>[< y5q_;Q)b7fN(.Z+w^b|3OVo;2cB1bnWSJNibgq&t0qV:NU]JrqP(.gz%t/,' );
define( 'NONCE_SALT',       '1L:?7cJWlO(c`bRDljs+?KUG0=O>1hBd=`;^7DPO#xV,o@}v~c^SVuN4(7AKR&mV' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
   $_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
