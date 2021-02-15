<?php
/**
 * RSS feed fetcher
 * written in PHP
 * @Deni
 */
try {
    // enable error logging
    libxml_use_internal_errors(true);
    //load the xml rss, depending on which page the user is on
    $xml = simplexml_load_file($loadrss, "SimpleXMLElement", LIBXML_NOCDATA);
    //read content from dc:creator
    $dc = $xml
        ->channel
        ->item
        ->children("http://purl.org/dc/elements/1.1/");
    //get pubDate & remove the +0000 part
    $pubDate = $xml
        ->channel
        ->item->pubDate;
    $pubDate = strftime("%Y-%m-%d %H:%M:%S", strtotime($pubDate));
}
catch(Exception $err)
{
    echo "Exception has been found: " . $e->getMessage() . chr(10);
    echo "XML couldnt be loaded: " . chr(10);
    //parse errors
    foreach (libxml_get_errors() as $error)
    {
        echo "Error: " . $error->message;
    }
}
?>
