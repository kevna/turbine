#!/bin/php
<?php
for(;;) {
	try {
		$source = "http://pc1aam13.stunet.aber.ac.uk/rand.php";
		$response = file_get_contents($source);
		$xml = new SimpleXMLElement($response);
		$domdoc = new DOMDocument;
		$domdoc->LoadXML($xml->asXml());
		if ($domdoc->validate()) {
			echo "Valid XML<br />\n";
			if ($domdoc->doctype->name == "turbineData") {
				echo "Valid turbineData file<br />\n";
				echo $xml->state;
				//move current.xml to archive (by date)
				$xml->asXml("current.xml");
			} else {
				echo "Not turbineData file";
			}
		} else {
			echo "Invalid XML";
		}
	} catch(Exception $e) {echo "a problem occured: ", $e->getMessage();}
	sleep(150);
}
?>

