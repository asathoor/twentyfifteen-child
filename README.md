The Twentyfifteen Child
=======================

> A theme for the third semester Multimedia Design And Communicaiton Programme @BusinessAcademyAarhus [eaaa.dk](http://eaaa.dk).

## Tweaks

In this child theme I have:

* Enabled Jquery
* Used filters, hooks etc.
* Added test JavaScript
* Experimented with SASS


## Display an avatar

~~~~ 
echo "<div class='avatar'>" 
. get_avatar( get_the_author_meta( 'ID' ), 32 ) 
. "</div>";
~~~~

