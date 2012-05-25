<?php
// Data via brewerydb.com
$data = <<<XML
  <beers>
    <beer>
      <id>6204</id>
      <name>"My" Bock</name>
      <description>
      Amber, malty and not too heavy, all around favorite even for the drinkers of the yellow fizzy stuff
      </description>
      <brewery>1428</brewery>
      <created>2011-06-01T09:39:12+00:00</created>
      <updated/>
    </beer>
    <beer>
      <id>7219</id>
      <name>"Ptarmigan" Pilsner</name>
      <description>
      Ptarmigan Pilsner our GABF Silver Medal Winner is A traditional European Style Pilsner with a light hop aroma, smooth malt flavor and a distinctively clean finish.
      </description>
      <brewery>64</brewery>
      <created>2011-02-25T05:40:25+00:00</created>
      <updated/>
    </beer>
    <beer>
      <id>7218</id>
      <name>"Wheeler" Wheat</name>
      <description>
      Wheeler Wheat is a light and refreshing beer to quench your thirst after a hard day of adventure seeking. An American-style wheat beer with just a hint of orange peel and coriander, enjoy it with a slice of fruit if you like, we recommend a slice of orange!
      </description>
      <brewery>64</brewery>
      <created>2011-02-25T05:36:45+00:00</created>
      <updated/>
    </beer>
  </beers>
XML;

foreach(new RecursiveIteratorIterator(new SimpleXMLIterator($data)) AS $k=>$v) {
  echo $k . ": " . $v . "<br>\n";
}