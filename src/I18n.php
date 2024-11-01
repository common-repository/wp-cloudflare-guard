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

declare(strict_types=1);

namespace TypistTech\WPCFG;

use TypistTech\WPCFG\Vendor\TypistTech\WPContainedHook\Action;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 */
final class I18n implements LoadableInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getHooks(): array
    {
        return [
            new Action('plugins_loaded', __CLASS__, 'loadPluginTextdomain'),
        ];
    }

    /**
     * Load the plugin text domain for translation.
     *
     * @return void
     */
    public function loadPluginTextdomain()
    {
        load_plugin_textdomain(
            'wp-cloudflare-guard',
            false,
            dirname(plugin_basename(__FILE__), 2) . '/languages/'
        );
    }
}
