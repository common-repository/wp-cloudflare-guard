<?php
/**
 * WP CloudFlare Guard
 *
 * Connecting WordPress with Cloudflare firewall,
 * protect your WordPress site at DNS level.
 * Automatically create firewall rules to block dangerous IPs.
 *
 * @package   WPCFG
 *
 * @author    Typist Tech <wp-cloudflare-guard@typist.tech>
 * @copyright 2017 Typist Tech
 * @license   GPL-2.0+
 *
 * @see       https://www.typist.tech/projects/wp-cloudflare-guard
 * @see       https://wordpress.org/plugins/wp-cloudflare-guard/
 */

/**
 * Plugin Name:     WP CloudFlare Guard
 * Plugin URI:      https://www.typist.tech/
 * Description:     Connecting WordPress with Cloudflare firewall.
 * Version:         0.2.0
 * Author:          Typist Tech
 * Author URI:      https://www.typist.tech/
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     wp-cloudflare-guard
 * Domain Path:     /languages
 */

declare(strict_types=1);

namespace TypistTech\WPCFG;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
require_once plugin_dir_path(__FILE__) . '/lib/julien731/wp-dismissible-notices-handler/handler.php';
require_once plugin_dir_path(__FILE__) . '/lib/julien731/wp-dismissible-notices-handler/includes/helper-functions.php';

/**
 * Begins execution of the plugin.
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @return void
 */
function run()
{
    $plugin = new WPCFG;
    $plugin->run();
}

run();
