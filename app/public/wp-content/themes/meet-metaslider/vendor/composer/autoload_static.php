<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e9927b8e7d22b3be1a0e9419e9914c4
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'meet_metaslider_SuperbThemesCustomizer\\CustomizerController' => __DIR__ . '/../..' . '/src/customizer/class-customizer.php',
        'meet_metaslider_SuperbThemesCustomizer\\CustomizerControls' => __DIR__ . '/../..' . '/src/customizer/class-controls.php',
        'meet_metaslider_SuperbThemesCustomizer\\CustomizerPanels' => __DIR__ . '/../..' . '/src/customizer/class-panels.php',
        'meet_metaslider_SuperbThemesCustomizer\\CustomizerSections' => __DIR__ . '/../..' . '/src/customizer/class-sections.php',
        'meet_metaslider_SuperbThemesCustomizer\\Utils\\CustomizerItem' => __DIR__ . '/../..' . '/src/customizer/utils/class-customizer-item.php',
        'meet_metaslider_SuperbThemesCustomizer\\Utils\\CustomizerRefocusButton' => __DIR__ . '/../..' . '/src/customizer/utils/class-customizer-refocus-button.php',
        'meet_metaslider_SuperbThemesCustomizer\\Utils\\CustomizerType' => __DIR__ . '/../..' . '/src/customizer/utils/class-customizer-type.php',
        'meet_metaslider_SuperbThemesCustomizer\\Utils\\RefocusButtonControl' => __DIR__ . '/../..' . '/src/customizer/utils/class-customizer-refocus-control.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5e9927b8e7d22b3be1a0e9419e9914c4::$classMap;

        }, null, ClassLoader::class);
    }
}
