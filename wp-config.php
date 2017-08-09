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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'centrodoimigrante');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '2708');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ':OSmUVY8J1C.c6><l./QQf)GTq7g-)j`&c!tNsghW`+A<6%d#<_ Z|EHveo:S3@y');
define('SECURE_AUTH_KEY',  ' BW<~h/1.EO!VT5QiUQhsK$>*m-@A7?!xp|$B_5, ~ZJNv;q*+a^Q32G-5s4gs7.');
define('LOGGED_IN_KEY',    'xFHYJg#-&YVrsnn)8JHyKxm~m{2IXS<<U2KXuf8}D!ZsS$PnMJWFA9PzX7J*CaY`');
define('NONCE_KEY',        '(9:!qT2;x9CGi,ZRMhn+Y9-|4wN=Pyh+S6TbOop!`j$@L@^g8K<J/=6Pyqj!JAMT');
define('AUTH_SALT',        '}/rFyp}iV~KI6Wv:`jK&&]4Jm41pmwr@xiS=2pR1&BV/$},&$5Ndt(fr~zFE65+=');
define('SECURE_AUTH_SALT', '5t__qbw%4s>V2}D X-DH-kQy;CX(~|dDOl]@Vi.W[A~$u?[EJ20+G?(/^&+W`=^v');
define('LOGGED_IN_SALT',   'YuxwkAi2[12NCRCELa,RWjQE{b!F/1|.H3+dgnsBCSXy;6t2{`)^ b0,:*CzCA-l');
define('NONCE_SALT',       'Juq_;_OU~.d-cn}=A=q0i%b5#ACEd.E)4MwBp0}e]9|-2?SC+yTG!h[Fjc0BS~2{');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
