<?php
    function get_results($query, $type) {
        $url = "https://www.startpage.com/sp/search?query=" . urlencode($query) . "+" . urlencode($type);
		
        $ch = curl_init();
 
        curl_setopt($ch, CURLOPT_URL, $url);
		    //curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36');
 
        $response = curl_exec($ch);
		
        curl_close($ch);
        //var_dump($response);
        return $response;
    }
 
    function echo_response($response, $type) {
          if (!empty($response)) {
            $dom = new DOMDocument();
            @$dom->loadHTML($response);
            $xpath = new DOMXPath($dom);
          
            $results = $xpath->query('//a[contains(@class, "w-gl__result-title")]');

            foreach ($results as $result) {
              $title = $result->nodeValue;
              $link = $result->getAttribute('href');

              $parent = $result->parentNode;
              $description = $xpath->query('./following-sibling::p[contains(@class, "w-gl__description")]', $parent)[0]->nodeValue;
          
              if (strpos(strtolower($title), $type) !== false) {
                echo "<div class=\"a-result\">";
                echo "  <a href=\"$link\" class=\"title\">$title</a><br/>";
                echo "  <a href=\"$link\" class=\"minilink\">$link</a>";
                echo "  <p href=\"$link\" class=\"description\">$description</a>";
                echo "</div>";
              }
            }
          } else {
            echo "<p>The content service seems to be down, try again later.</p>";
          } 
    }

?>