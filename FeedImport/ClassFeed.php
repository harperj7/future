<?php

namespace FeedImport;

/**
 * Class ClassFeed
 * Base class for importing a feed
 *
 * @package FeedImport
 */
class ClassFeed {

    protected $curl;

    /**
     * Initialise a curl resource. Set the required curl options
     */
    function __construct() {

        $this->curl = curl_init();

        curl_setopt_array($this->curl, [
            CURLOPT_USERAGENT => 'FeedImport',
            CURLOPT_TIMEOUT => 120,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_ENCODING => 'UTF-8'
        ]);

    }

    /**
     * Return the data from the given feed URL
     *
     * @param string $url
     * @return mixed
     */
    protected function getFeed($url) {

        curl_setopt($this->curl, CURLOPT_URL, $url);

        return curl_exec($this->curl);

    }

    function __destruct() {
        curl_close($this->curl);
    }

}