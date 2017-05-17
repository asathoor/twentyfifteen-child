# The Twentyfifteen Child

I like the Twenty Fifteen theme for blogs. This is a child theme based on Twenty Fifteen. I use this version on my blog [Research WordPress](http://research-wordpress.dk)

## Some Tweaks

In this child theme I have:

* Enabled Jquery
* Used filters, hooks etc.
* Added test JavaScript
* Enabled SASS
* Made a config.rb file for [Koala](http://koala-app.com/) so that the stylesheet is rendered in the theme's root dir.


## Tip: Display the avatar / gravatar

~~~~ 
echo "<div class='avatar'>" 
. get_avatar( get_the_author_meta( 'ID' ), 32 ) 
. "</div>";
~~~~

Get your own avatar on [gravatar](https://en.gravatar.com/).