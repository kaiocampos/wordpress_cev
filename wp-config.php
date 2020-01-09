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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress_curso_video' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/** Permite a Exclusão de temas e plugins sem usar o ftp */
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         '[P.0]qRQR]R>5=OG*M88`llGfS-[HX;9/Q@bAvOpFzEH$BmAu:_Ge,PFUC~8 r*v' );
define( 'SECURE_AUTH_KEY',  'EVT;wWM/YQ>U0**HsT:uc1cT[`T5$<3bIBEv75Q!!nR*H;e*nP?rygr. a@-rs@4' );
define( 'LOGGED_IN_KEY',    ']I1Im.uAfNm<a}}mY7TIV=n7OKEpbw`W<leObkWE_MJ 5~F:*^|Ggz8/[N X6iGY' );
define( 'NONCE_KEY',        'JSRomIf>b@m=*YvaDC-.+jl<kQ|nK7o3e% j*-VSx}_8<7I(@;#xb|qNqHx1;,8o' );
define( 'AUTH_SALT',        '`JnL>F4b4?WrS,d_ffcdK)eVS}^Ue?K;GY@qs?wZ3jADM=!xjJvAd#8%iV;_U2;o' );
define( 'SECURE_AUTH_SALT', ']ZoiU[P0H`Bn*wqbC{A}9.j-H7^4J%_Xkpu7D_I?@lra9L9SRnQX:*LdF!o/c4J4' );
define( 'LOGGED_IN_SALT',   'WpSm4M:?;Bwm?BT@Hn_POuYtNjk[KRuwmW1@#4+2gl:H `Xm)m<]rerr;M}D-mg5' );
define( 'NONCE_SALT',       'cDd3~b}YX1IN78R2H4:5r/i5 d8_|?!I-|&J}.(+Rn9JS[4SHG1{YIz,O>7{*^pt' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
