<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit747d9945dd776d157838f3d4c9b52756
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TypistTech\\WPContainedHook\\' => 27,
            'TypistTech\\WPCFG\\' => 17,
            'TypistTech\\WPBetterSettings\\' => 28,
            'TypistTech\\Imposter\\Plugin\\' => 27,
            'TypistTech\\Imposter\\' => 20,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'League\\Container\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'C' => 
        array (
            'Cloudflare\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TypistTech\\WPContainedHook\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/wp-contained-hook/src',
        ),
        'TypistTech\\WPCFG\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'TypistTech\\WPBetterSettings\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/wp-better-settings/src',
        ),
        'TypistTech\\Imposter\\Plugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter-plugin/src',
        ),
        'TypistTech\\Imposter\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'League\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Cloudflare\\' => 
        array (
            0 => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare',
            1 => __DIR__ . '/..' . '/typisttech/cloudflare-wp-api/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'CloudFlare\\' => 
            array (
                0 => __DIR__ . '/..' . '/cloudflare/cf-ip-rewrite/src',
            ),
        ),
    );

    public static $classMap = array (
        'TypistTech\\Imposter\\ArrayUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/ArrayUtil.php',
        'TypistTech\\Imposter\\Config' => __DIR__ . '/..' . '/typisttech/imposter/src/Config.php',
        'TypistTech\\Imposter\\ConfigCollection' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollection.php',
        'TypistTech\\Imposter\\ConfigCollectionFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionFactory.php',
        'TypistTech\\Imposter\\ConfigCollectionInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionInterface.php',
        'TypistTech\\Imposter\\ConfigFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigFactory.php',
        'TypistTech\\Imposter\\ConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigInterface.php',
        'TypistTech\\Imposter\\Filesystem' => __DIR__ . '/..' . '/typisttech/imposter/src/Filesystem.php',
        'TypistTech\\Imposter\\FilesystemInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/FilesystemInterface.php',
        'TypistTech\\Imposter\\Imposter' => __DIR__ . '/..' . '/typisttech/imposter/src/Imposter.php',
        'TypistTech\\Imposter\\ImposterFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterFactory.php',
        'TypistTech\\Imposter\\ImposterInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterInterface.php',
        'TypistTech\\Imposter\\Plugin\\Capability\\CommandProvider' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Capability/CommandProvider.php',
        'TypistTech\\Imposter\\Plugin\\Command\\RunCommand' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Command/RunCommand.php',
        'TypistTech\\Imposter\\Plugin\\ImposterPlugin' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/ImposterPlugin.php',
        'TypistTech\\Imposter\\ProjectConfig' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfig.php',
        'TypistTech\\Imposter\\ProjectConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfigInterface.php',
        'TypistTech\\Imposter\\StringUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/StringUtil.php',
        'TypistTech\\Imposter\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter/src/Transformer.php',
        'TypistTech\\Imposter\\TransformerInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/TransformerInterface.php',
        'TypistTech\\WPCFG\\Admin' => __DIR__ . '/../..' . '/src/Admin.php',
        'TypistTech\\WPCFG\\Ads\\I18nPromoter' => __DIR__ . '/../..' . '/src/Ads/I18nPromoter.php',
        'TypistTech\\WPCFG\\Ads\\ReviewNotice' => __DIR__ . '/../..' . '/src/Ads/ReviewNotice.php',
        'TypistTech\\WPCFG\\BadLogin\\Admin' => __DIR__ . '/../..' . '/src/BadLogin/Admin.php',
        'TypistTech\\WPCFG\\BadLogin\\BadLogin' => __DIR__ . '/../..' . '/src/BadLogin/BadLogin.php',
        'TypistTech\\WPCFG\\Blacklist\\Event' => __DIR__ . '/../..' . '/src/Blacklist/Event.php',
        'TypistTech\\WPCFG\\Blacklist\\Handler' => __DIR__ . '/../..' . '/src/Blacklist/Handler.php',
        'TypistTech\\WPCFG\\Cloudflare\\AccessRules' => __DIR__ . '/../..' . '/src/Cloudflare/AccessRules.php',
        'TypistTech\\WPCFG\\Cloudflare\\Admin' => __DIR__ . '/../..' . '/src/Cloudflare/Admin.php',
        'TypistTech\\WPCFG\\Cloudflare\\Helper' => __DIR__ . '/../..' . '/src/Cloudflare/Helper.php',
        'TypistTech\\WPCFG\\Container' => __DIR__ . '/../..' . '/src/Container.php',
        'TypistTech\\WPCFG\\I18n' => __DIR__ . '/../..' . '/src/I18n.php',
        'TypistTech\\WPCFG\\LoadableInterface' => __DIR__ . '/../..' . '/src/LoadableInterface.php',
        'TypistTech\\WPCFG\\OptionStore' => __DIR__ . '/../..' . '/src/OptionStore.php',
        'TypistTech\\WPCFG\\Vendor\\CloudFlare\\IpRewrite' => __DIR__ . '/..' . '/cloudflare/cf-ip-rewrite/src/CloudFlare/IpRewrite.php',
        'TypistTech\\WPCFG\\Vendor\\CloudFlare\\IpUtils' => __DIR__ . '/..' . '/cloudflare/cf-ip-rewrite/src/CloudFlare/IpUtils.php',
        'TypistTech\\WPCFG\\Vendor\\Cloudflare\\Api' => __DIR__ . '/..' . '/typisttech/cloudflare-wp-api/src/Api.php',
        'TypistTech\\WPCFG\\Vendor\\Cloudflare\\BaseApi' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/BaseApi.php',
        'TypistTech\\WPCFG\\Vendor\\Cloudflare\\Exception\\AuthenticationException' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Exception/AuthenticationException.php',
        'TypistTech\\WPCFG\\Vendor\\Cloudflare\\Exception\\UnauthorizedException' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Exception/UnauthorizedException.php',
        'TypistTech\\WPCFG\\Vendor\\Cloudflare\\Zone\\Firewall\\AccessRules' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Firewall/AccessRules.php',
        'TypistTech\\WPCFG\\Vendor\\Dismissible_Notices_Handler' => __DIR__ . '/../..' . '/lib/julien731/wp-dismissible-notices-handler/handler.php',
        'TypistTech\\WPCFG\\Vendor\\Interop\\Container\\ContainerInterface' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/ContainerInterface.php',
        'TypistTech\\WPCFG\\Vendor\\Interop\\Container\\Exception\\ContainerException' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/Exception/ContainerException.php',
        'TypistTech\\WPCFG\\Vendor\\Interop\\Container\\Exception\\NotFoundException' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/Exception/NotFoundException.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Argument\\ArgumentResolverInterface' => __DIR__ . '/..' . '/league/container/src/Argument/ArgumentResolverInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Argument\\ArgumentResolverTrait' => __DIR__ . '/..' . '/league/container/src/Argument/ArgumentResolverTrait.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Argument\\RawArgument' => __DIR__ . '/..' . '/league/container/src/Argument/RawArgument.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Argument\\RawArgumentInterface' => __DIR__ . '/..' . '/league/container/src/Argument/RawArgumentInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Container' => __DIR__ . '/..' . '/league/container/src/Container.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ContainerAwareInterface' => __DIR__ . '/..' . '/league/container/src/ContainerAwareInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ContainerAwareTrait' => __DIR__ . '/..' . '/league/container/src/ContainerAwareTrait.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ContainerInterface' => __DIR__ . '/..' . '/league/container/src/ContainerInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Definition\\AbstractDefinition' => __DIR__ . '/..' . '/league/container/src/Definition/AbstractDefinition.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Definition\\CallableDefinition' => __DIR__ . '/..' . '/league/container/src/Definition/CallableDefinition.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Definition\\ClassDefinition' => __DIR__ . '/..' . '/league/container/src/Definition/ClassDefinition.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Definition\\ClassDefinitionInterface' => __DIR__ . '/..' . '/league/container/src/Definition/ClassDefinitionInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Definition\\DefinitionFactory' => __DIR__ . '/..' . '/league/container/src/Definition/DefinitionFactory.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Definition\\DefinitionFactoryInterface' => __DIR__ . '/..' . '/league/container/src/Definition/DefinitionFactoryInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Definition\\DefinitionInterface' => __DIR__ . '/..' . '/league/container/src/Definition/DefinitionInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Exception\\NotFoundException' => __DIR__ . '/..' . '/league/container/src/Exception/NotFoundException.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ImmutableContainerAwareInterface' => __DIR__ . '/..' . '/league/container/src/ImmutableContainerAwareInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ImmutableContainerAwareTrait' => __DIR__ . '/..' . '/league/container/src/ImmutableContainerAwareTrait.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ImmutableContainerInterface' => __DIR__ . '/..' . '/league/container/src/ImmutableContainerInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Inflector\\Inflector' => __DIR__ . '/..' . '/league/container/src/Inflector/Inflector.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Inflector\\InflectorAggregate' => __DIR__ . '/..' . '/league/container/src/Inflector/InflectorAggregate.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\Inflector\\InflectorAggregateInterface' => __DIR__ . '/..' . '/league/container/src/Inflector/InflectorAggregateInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ReflectionContainer' => __DIR__ . '/..' . '/league/container/src/ReflectionContainer.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ServiceProvider\\AbstractServiceProvider' => __DIR__ . '/..' . '/league/container/src/ServiceProvider/AbstractServiceProvider.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ServiceProvider\\AbstractSignatureServiceProvider' => __DIR__ . '/..' . '/league/container/src/ServiceProvider/AbstractSignatureServiceProvider.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ServiceProvider\\BootableServiceProviderInterface' => __DIR__ . '/..' . '/league/container/src/ServiceProvider/BootableServiceProviderInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ServiceProvider\\ServiceProviderAggregate' => __DIR__ . '/..' . '/league/container/src/ServiceProvider/ServiceProviderAggregate.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ServiceProvider\\ServiceProviderAggregateInterface' => __DIR__ . '/..' . '/league/container/src/ServiceProvider/ServiceProviderAggregateInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ServiceProvider\\ServiceProviderInterface' => __DIR__ . '/..' . '/league/container/src/ServiceProvider/ServiceProviderInterface.php',
        'TypistTech\\WPCFG\\Vendor\\League\\Container\\ServiceProvider\\SignatureServiceProviderInterface' => __DIR__ . '/..' . '/league/container/src/ServiceProvider/SignatureServiceProviderInterface.php',
        'TypistTech\\WPCFG\\Vendor\\Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'TypistTech\\WPCFG\\Vendor\\Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'TypistTech\\WPCFG\\Vendor\\Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\DecoratorAwareInterface' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/DecoratorAwareInterface.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\DecoratorAwareTrait' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/DecoratorAwareTrait.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\Fields\\AbstractField' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/Fields/AbstractField.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\Fields\\Checkbox' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/Fields/Checkbox.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\Fields\\Input' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/Fields/Input.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\Fields\\Textarea' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/Fields/Textarea.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\Pages\\TabbedPage' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/Pages/TabbedPage.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\Pages\\TabbedPageInterface' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/Pages/TabbedPageInterface.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Decorators\\Section' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Decorators/Section.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Fields\\AbstractField' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Fields/AbstractField.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Fields\\Checkbox' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Fields/Checkbox.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Fields\\Email' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Fields/Email.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Fields\\FieldInterface' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Fields/FieldInterface.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Fields\\Text' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Fields/Text.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Fields\\Textarea' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Fields/Textarea.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Fields\\Url' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Fields/Url.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\OptionStore' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/OptionStore.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\OptionStoreInterface' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/OptionStoreInterface.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\PageRegister' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/PageRegister.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Pages\\MenuPage' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Pages/MenuPage.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Pages\\PageInterface' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Pages/PageInterface.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Pages\\PageTrait' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Pages/PageTrait.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Pages\\SubmenuPage' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Pages/SubmenuPage.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Section' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Section.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\SettingRegister' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/SettingRegister.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Views\\View' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Views/View.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Views\\ViewAwareInterface' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Views/ViewAwareInterface.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Views\\ViewAwareTrait' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Views/ViewAwareTrait.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Views\\ViewFactory' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Views/ViewFactory.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPBetterSettings\\Views\\ViewInterface' => __DIR__ . '/..' . '/typisttech/wp-better-settings/src/Views/ViewInterface.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPContainedHook\\AbstractHook' => __DIR__ . '/..' . '/typisttech/wp-contained-hook/src/AbstractHook.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPContainedHook\\Action' => __DIR__ . '/..' . '/typisttech/wp-contained-hook/src/Action.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPContainedHook\\Filter' => __DIR__ . '/..' . '/typisttech/wp-contained-hook/src/Filter.php',
        'TypistTech\\WPCFG\\Vendor\\TypistTech\\WPContainedHook\\Loader' => __DIR__ . '/..' . '/typisttech/wp-contained-hook/src/Loader.php',
        'TypistTech\\WPCFG\\Vendor\\WP_Review_Me' => __DIR__ . '/../..' . '/lib/julien731/wp-review-me/review.php',
        'TypistTech\\WPCFG\\Vendor\\Yoast_I18n_WordPressOrg_v2' => __DIR__ . '/../..' . '/lib/yoast/i18n-module/src/i18n-module-wordpressorg.php',
        'TypistTech\\WPCFG\\Vendor\\Yoast_I18n_v2' => __DIR__ . '/../..' . '/lib/yoast/i18n-module/src/i18n-module.php',
        'TypistTech\\WPCFG\\WPCFG' => __DIR__ . '/../..' . '/src/WPCFG.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit747d9945dd776d157838f3d4c9b52756::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit747d9945dd776d157838f3d4c9b52756::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit747d9945dd776d157838f3d4c9b52756::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit747d9945dd776d157838f3d4c9b52756::$classMap;

        }, null, ClassLoader::class);
    }
}
