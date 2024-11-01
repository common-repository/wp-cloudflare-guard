<?php
/**
 * WP Better Settings
 *
 * A simplified OOP implementation of the WP Settings API.
 *
 * @package   TypistTech\WPBetterSettings
 *
 * @author    Typist Tech <wp-better-settings@typist.tech>
 * @copyright 2017 Typist Tech
 * @license   GPL-2.0+
 *
 * @see       https://www.typist.tech/projects/wp-better-settings
 * @see       https://github.com/TypistTech/wp-better-settings
 */

declare(strict_types=1);

namespace TypistTech\WPCFG\Vendor\TypistTech\WPBetterSettings\Fields;

use TypistTech\WPCFG\Vendor\TypistTech\WPBetterSettings\Decorators\Fields\Input as InputDecorator;
use TypistTech\WPCFG\Vendor\TypistTech\WPBetterSettings\Views\ViewAwareInterface;

/**
 * Final class Url
 */
final class Url extends AbstractField
{
    /**
     * {@inheritdoc}
     */
    protected function getDefaultDecorator(): ViewAwareInterface
    {
        return new InputDecorator($this, 'url');
    }

    /**
     * {@inheritdoc}
     */
    public function getSanitizeCallback(): callable
    {
        return $this->sanitizeCallback ?? 'esc_url_raw';
    }
}
