<?php

/**
 * UpdatesFeed widget
 *
 * Parses data from the Rss feed and display it
 *
 */
class UpdatesFeed extends CWidget {

    /**
     * @var Parameters for updatesFeed
     */
    public $title;
    public $adminEmail;
    public $copyrightInfo;
    public $latestUpdatesFeedCacheDir;
    public $latestUpdatesFeedCacheExp;
    public $curlUserAgent;
    public $latestUpdatesFeedUrl;
    public $displayMostRecent = 5;
    public $viewTemplate = 'slider';
    public $buttonText;

    private $rss_feed;

    /**
	 * Renders the latest updates page based on an RSS feed.
	 *
	 */
	private function parseUpdates() {
		Feed::$userAgent = $this->curlUserAgent;
		Feed::$cacheDir = $this->latestUpdatesFeedCacheDir;
		Feed::$cacheExpire = $this->latestUpdatesFeedCacheExp;
		$feed = Feed::loadRss($this->latestUpdatesFeedUrl);
		$returnEntry = [];
		$i = 0;
		if (!empty($feed)) {
            foreach ($feed->item as $item) {
                $i++;

                $more = ' <a href="' . $item->link . '" target="_blank" id="link-'.$i.'">Read more</a>';
                $returnEntry[$i]['title'] = $item->title;
                $returnEntry[$i]['link'] = $item->link;
                $item->description = trim(str_replace(' [&#8230;]', '...' . $more, $item->description));
                $item->description = preg_replace('/The post.*appeared first on .*\./', '', $item->description);
                $returnEntry[$i]['description'] = $item->description;
                
                if ($i == $this->displayMostRecent) {
                    break;
                }
            }
            if ($this->buttonText) $returnEntry['buttonText'] = $this->buttonText;

        return $returnEntry;
	    }
    }

    /**
     * Initialises the widget
     */
    public function init() {

        $this->rss_feed = $this->parseUpdates();

    }

    /**
     * Display the Updates
     *
     */
    public function run() {
        if ($this->viewTemplate == 'slider') {
            $this->render('sliderFeed', ['updates' => $this->rss_feed]);
        } else {
            $this->render('updatesFeed', ['updates' => $this->rss_feed]);
        }
    }

}

?>
