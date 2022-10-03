UpdatesFeed
===========

UpdatesFeed widget for Yii (1.1.25) display most recent RSS feed



Index
=====

1. FEATURES
2. REQUIREMENTS
3. INSTALLATION
4. USAGE


Content
=======

1. FEATURES

    - Display RSS feed on any page 
    - Apply templates

2. REQUIREMENTS

    - Depends on dg/rss-php v.1.5
    - Depends on PLS RSS feeds
    - Tested with Yii 1.1.25.
    - Tested with PHP 7.4.

3. INSTALLATION

    - Place the updatesFeed directory under protected/components/widgets

4. USAGE

    $config = array(
        'displayMostRecent' => 2,
    ); 

    $this->widget('application.components.widgets.updatesFeed.UpdatesFeed', $config);

