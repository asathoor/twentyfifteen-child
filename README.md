# The Twentyfifteen Child

I like the Twenty Fifteen theme for blogs. This is a child theme based on Twenty Fifteen. I use this version on my blog [Research WordPress](http://research-wordpress.dk)

## Some Tweaks

In this child theme I have:

* Enabled Jquery
* Used filters, hooks etc.
* Added test JavaScript
* Enabled SASS
* Made a config.rb file for [Koala](http://koala-app.com/) so that the stylesheet is rendered in the theme's root dir.


## Costum page: page-timeline.php

I needed a timeline for my research project about WordPress. Of course the thing should be made in WordPress. In order to use the timeline costum page:

1. Create a page and let the slug be `timeline`.
2. Don't add any content apart from the headline.
3. Edit page-timeline.php according to your ideas for a timeline.


## Tip: Display the avatar / gravatar

Get your own avatar on [gravatar](https://en.gravatar.com/). Display it in the markup:

~~~~ 
echo "<div class='avatar'>" 
. get_avatar( get_the_author_meta( 'ID' ), 32 ) 
. "</div>";
~~~~

