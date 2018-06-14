# VueJS wrapping Existing tools into components

Wrapped carousel component Flickity into file (Carousel.vue)
on the welcome.blade.php used the Carounsel component, just changing the imgs
using <slot> tag.

In app.js
added the Carousel.vue component

On laravel application first use npm install (installs vue, etc)
then install flickity (npm i flickity --save-dev)