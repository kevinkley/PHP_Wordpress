<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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
define('DB_NAME', 'hakia690_hakianimes');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'hakia690_haki');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'su&343!7d71;');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FAaeU_xS`,YR1/4UQwpc1[gy_?gB]UO;]>boLq95gvtj5U_hjD/_QX1Ka*,^tegA');
define('SECURE_AUTH_KEY',  ']s6XMQznLV(pYZxwf~u<{e2+wQw>#|.xhK2`Tj|`awxXLfUiw^<2i`.dHPH-WyU%');
define('LOGGED_IN_KEY',    '9@0a.?|T^/v1$s5!$ s2Cd!do^`yF)h__9@=u`NGzds%f)<+Wj%;i.%Cpkxjb5ts');
define('NONCE_KEY',        '&}ALJ* CW.L;t[j^Xh|aJQR{5yh|yf#qk]HNmJy%r3TO|h9I=Vh{S(*.h:L5j!KH');
define('AUTH_SALT',        '[|AAHaAm+,&*CTn3C-HU:(2~6&0P_z>373&a|A2Uar.6}:Ice$8=dYyG%>b|JcQ-');
define('SECURE_AUTH_SALT', ' KFI_,H]G.Hc7VYr#DUV%u^^?/ds209d~aF2hGtQ=RHGUQ_zGsTrxu?v8m4`Jkxn');
define('LOGGED_IN_SALT',   '|navJK6MGB7 $}??N)n>rXDgmo|X/T2q:IVRG;Mk-C`-;ia._1|a:&a|+Gv*,Wjz');
define('NONCE_SALT',       '<UkN)_@6&,G)3yyJC]TY4L{UB{-n-NVsL4~P*,a!ZlEdgQ6B]LQxOi/pPA?enP:q');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ha_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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

define('WP_POST_REVISIONS', 3);
define("WP_CACHE", true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');