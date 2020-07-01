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
define( 'DB_NAME', 'homeblog' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Fe<bDuN}Z/+,v0@t%Ob~@?F|XlCrPoEf<D(OYqlfhGa@ %^jb(F5Im1Ds}I2ilGg' );
define( 'SECURE_AUTH_KEY',  't6#1C9?7k~kZ/Xe29kac}4.:qK^)WC5{r8dz[[^@sI4Q./MVWG0fZ&T8/;b:^^fQ' );
define( 'LOGGED_IN_KEY',    'yb.BDe}>WjJWEh:j0luQ_kl;a`.2f]iEq3?Ga.9AWh>JL[Lom?=oWw1$7&WtBuUG' );
define( 'NONCE_KEY',        '.)t9%D$j{V~]3N@3._yY19^h8;L:}hR{u3YjMJ&WzEz*HS#7%5p&av1d8}dN_r::' );
define( 'AUTH_SALT',        'oK+G(2HU%{ai5a!D`4RqR;MH4E77G~Z0Pj~~Ts7>yV6b:nw?(Ah%A>Ih>m-%bw6V' );
define( 'SECURE_AUTH_SALT', 'M_=5rg~BBezt6<.n*dx](ph17rN m{,p9QGL5tl~T&`vC) XD*{:nq>8#U3z6e%O' );
define( 'LOGGED_IN_SALT',   '/#qWrth#En!.zKj <k]pT]x.D528m!BT@Lf4[JAIIId^D/57CAs#(bxGliUMB9Wj' );
define( 'NONCE_SALT',       '%Tgi($$1wQp?9[oJ]/Ne|e<L*D-B$<sl,cve6v@s:xx>7rPrPR{v<n(-qc*8iZL=' );

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
