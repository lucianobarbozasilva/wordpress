<?php
define( 'WP_CACHE', true );
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'inovaNutricao' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3Vom!XDpx.C!#B`Iz&~I:|R_dzpVRK4bud>Jq=~YVT-8Oz{Z!Tz#$}y[v.s+?9my' );
define( 'SECURE_AUTH_KEY',  'j1 2/ZN5Uo1IPEu^XD|rnS[E?QSa2(;ks5Ip``=P<#h3Y= Ax1?j36*GWD$9L91K' );
define( 'LOGGED_IN_KEY',    ')ICZ8lW3Ca561$W8TsRqm<<g%^|&Js_YjQn^yBM1q jBSs&Y%_>|!9.3.9)M1YI7' );
define( 'NONCE_KEY',        'FAR`_Km+;3Y+7v:q)Y!7}%&G9FWVtVYeO_OyVp|cZHc7^#d`r[pn}enyB>~Kw[@,' );
define( 'AUTH_SALT',        '6w%qTYwFb?2l#9AOx1WTK;s*P/gi<XU&tYX:,4/cSS) WhbxwB%ukZ=FYIs nxhJ' );
define( 'SECURE_AUTH_SALT', 'GG.sb|Lzf*^[=3p]aE@.ET4:@bk9E<+>8nx5g8-^h$z(N$>hb7,GJ$D2Ys4Myar7' );
define( 'LOGGED_IN_SALT',   'Da$d.Irm11CTwT_qUM!o39Db/`}0Jxg>DlP$8NU;E=l3I<<W<U]s`pS|i#K$@%jS' );
define( 'NONCE_SALT',       'Cwo@g8:]i0po@ EK:gM6Kmmm]po{VA{!-8W!@,T9`I@}2XII@%UCk7 pk@-HNh8t' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'inv_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
