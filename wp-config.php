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
define('AUTH_KEY',         'rCg})=RR!3MV4Ik{Nht401:P89n`C`^jeID[EW45_.,&uePgh!m6!xaTY2AT-+#P');
define('SECURE_AUTH_KEY',  '$X*_/=a4Q;?B2I[weLa-oclSv|G6Tx+p&iA^.tFWm$(:~]_,eP$4^l%s`IeXmt53');
define('LOGGED_IN_KEY',    '.YV+(-NQ@gWj%:nvGGI-#3}%^_O8l5>9ZNi`8u1_*VXIA Y15(+x;!;Rz;B<+#f9');
define('NONCE_KEY',        'lxsu]uf91XPh5x9;wa^yaSC8Llj99v?=ZqoPq63KI2qcX{]%+Pnt|JY%/mjgFqUs');
define('AUTH_SALT',        '>7@<O|&O7[6BT[{8QuCSwK;:d<?B>ri{`.eA|x+v/<X!l;F;yY7(l(?{Q+tN7HaW');
define('SECURE_AUTH_SALT', '2R8!Xv3A^KiMAu-_*i!|8-m?i+~P)B)LwZHa({NA+tArX [/MK&IUw#*,n?~ZQ[E');
define('LOGGED_IN_SALT',   '@T(;so}4g1WQ?Xd&64{o^uL>L <VtKa(.@qF?GOY-EP2s&ZO?NN}(&I cbnC2KX(');
define('NONCE_SALT',       'YPt>CNMjX*`J*W~.[xf-2w`RqC3nt#14yp%PK%JI`Q_F$1yTP>ve$hYQ%c>j|#Tb');

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
