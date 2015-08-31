The Twentyfifteen Child
=======================

## Tweaks

In this child theme I have:

* Enabled Jquery
* Used filters, hooks etc.
* Added test JavaScript
* Experimented with SASS


## Display the avatar

~~~~ 
echo "<div class='avatar'>" 
. get_avatar( get_the_author_meta( 'ID' ), 32 ) 
. "</div>";
~~~~
# twentyfifteen-child
