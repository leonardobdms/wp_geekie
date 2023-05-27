<?php
defined("ABSPATH") || exit();

class SuperbInfoContentConfig
{
    const THEME_LINK = 'https://superbthemes.com/meet-metaslider/';
    const DEMO_LINK = 'https://superbthemes.com/demo/meet-metaslider/';

    private $FEATURES = array();

    public function __construct()
    {
        $this->AddFeature(__("Customize Header Logo, Text & Background Color", "meet-metaslider"), "purple-paint-brush.svg");
        $this->AddFeature(__("Translation Ready", "meet-metaslider"), "purple-article-medium.svg");
        $this->AddFeature(__("Fully SEO Optimized", "meet-metaslider"), "purple-gauge.svg");
        $this->AddFeature(__("Customize All Fonts", "meet-metaslider"), "purple-article-medium.svg");
        $this->AddFeature(__("Customize All Colors", "meet-metaslider"), "purple-paint-brush.svg");
        $this->AddFeature(__("Importable Demo Content", "meet-metaslider"), "purple-images.svg");
        $this->AddFeature(__("Elementor Compatible", "meet-metaslider"), "purple-elementor-logo.svg");
        $this->AddFeature(__("Replace Copyright Text", "meet-metaslider"), "purple-copyright.svg");
        $this->AddFeature(__("Full-Width Page Template", "meet-metaslider"), "purple-frame-corners.svg");
        $this->AddFeature(__("Access All Child Themes", "meet-metaslider"), "purple-images.svg");
        $this->AddFeature(__("Customer Support and Documentation", "meet-metaslider"), "purple-files.svg");
        $this->AddFeature(__("Multiple Website Support", "meet-metaslider"), "purple-files.svg");

        $this->AddFeature(__("Custom Header With Title, Tagline and Buttons", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Custom Header Background Image/Color", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Only Display Header Widgets on Front Page", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Hide/Show Author Name in Byline", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Show Full Posts or Excerpts on Blog", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Hide/Show Sidebar on Blog Page / Blog Feed", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Hide/Show Categories and Tags", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Hide/Show Sidebar on WooCommerce Pages", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Hide/Show Next/Previous Post Buttons", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Hide/Show WooCommerce Cart in Menu", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Show/Hide Tagline and/or Buttons for Mobile Devices on Custom Header", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Show Custom Header on All Pages or Front Page Only", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Full Width Page Template", "meet-metaslider"), "gear.svg");
        $this->AddFeature(__("Page Builder Template", "meet-metaslider"), "gear.svg");

        $this->AddFeature(__("Remove 'Tag' from Tag Page Title", "meet-metaslider"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Author' from Author Page Title", "meet-metaslider"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Category' from Category Page Title", "meet-metaslider"), "purple-article-medium.svg");
    }

    private function AddFeature($title, $icon)
    {
        $this->FEATURES[] = array(
            "title" => $title,
            "icon" => $icon
        );
    }

    public function GetFeatures()
    {
        return $this->FEATURES;
    }
}
