<?php
//strip_tags() function
//Remove all tags from the text
echo strip_tags("<b>PHP</b> is a popular <em>scripting</em> language");
//Remove all tags excluding <b> tag
echo strip_tags("<b>PHP</b> is a popular <em>scripting</em> language", "<b>");
?>