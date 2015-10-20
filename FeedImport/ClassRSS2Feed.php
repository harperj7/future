<?php

namespace FeedImport;

/**
 * Class ClassRSS2Feed
 * Extends the base ClassFeed class. Specific to the RSS2 feed.
 *
 * @package FeedImport
 */
class ClassRSS2Feed extends ClassFeed {

    protected $url;

    /**
     * Set the URL for this specific feed
     *
     * @param string $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * Output the parsed content from the feed
     */
    public function parseContent() {

        $content = $this->getFeed($this->url); //Get the content

        $xml = simplexml_load_string($content, 'SimpleXMLElement', LIBXML_NOCDATA); //Create a new simple XML element

        foreach ($xml->channel->item as $item) { //Parse the required data, output it to the screen
            echo '<h1>' . $item->title . '</h1>' . ' <small>' . $item->pubDate . '</small>';
            echo '<p>' . $item ->description . '</p><span style="width:100px;display:inline-block;float:right;"><img width="100" src="' . $item->enclosure->attributes()->url . '"></span></p>';
        }

    }

}