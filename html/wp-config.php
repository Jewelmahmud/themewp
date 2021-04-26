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
define( 'DB_NAME', 'wordpress2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'dbuser' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'DbUser135!' );

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
define( 'AUTH_KEY',         'OArk?*k$~T5ja.+a/oBj/DRDz{Lkjd<3Vm*Sl~{?,Q/Eaq#=jF7z8tRUW?FOI,*v' );
define( 'SECURE_AUTH_KEY',  '-`c+bbtt)X2?~+^Z|et|V}G!?Mp!mPl+0Nz1aTIxlF-9mhxC#K{F/@PEh?z7w3E#' );
define( 'LOGGED_IN_KEY',    '(P:?3aTh8R,%|=PrqKvR_Nus`rm`CsCrI]hKqx!nQt-T!AKUE;oQj8#AlyN^EY^&' );
define( 'NONCE_KEY',        'rA*)Hw6/_CBNAvs%4-JKCGgEW;zM7izM-:7v3x-/#k%> eVWy]k/zPDRn&85K[eO' );
define( 'AUTH_SALT',        '!h=rgvI]OjpxF-}1.TOe&Dy=uGH/h2BCI,RP)6Z7/^RY#].Td-BEZg=1YX6B,z(g' );
define( 'SECURE_AUTH_SALT', ' hd&gcG4#)Iy!4<<Ty+6U3y5f,P`6(5m018ijsu.n@&jlG7Y?U?cevnY?O8XGAr_' );
define( 'LOGGED_IN_SALT',   'LeB(DaKX}WlEW,EXe|M:%Y4gg Rh961+;j[}J7!hAoLcC@.x0XX.8yv39s]^ny?t' );
define( 'NONCE_SALT',       'U**3g@e-$ol0P#Z4jTb=:EQMO;ti=iJGZK1:eu6t(dB8|5(uy#Y{0Eq|&82=7:hT' );

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

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';