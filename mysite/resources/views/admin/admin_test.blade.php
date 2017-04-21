@extends ('admin.admin_panel')

@section ('input')

<link rel="stylesheet" href="css/gallery/blueimp-gallery.css">
<link rel="stylesheet" href="css/gallery/blueimp-gallery-indicator.css">
<link rel="stylesheet" href="css/gallery/blueimp-gallery-video.css">

<script src="js/gallery/blueimp-helper.js"></script>
<script src="js/gallery/gallery/blueimp-gallery.js"></script>
<script src="js/gallery/blueimp-gallery-fullscreen.js"></script>
<script src="js/gallery/blueimp-gallery-indicator.js"></script>
<script src="js/gallery/blueimp-gallery-video.js"></script>
<script src="js/gallery/blueimp-gallery-vimeo.js"></script>
<script src="js/gallery/blueimp-gallery-youtube.js"></script>
<script src="js/gallery/vendor/jquery.js"></script>
<script src="js/gallery/jquery.blueimp-gallery.js"></script>
<script src="js/gallery/demo/demo.js"></script>


<h2>Test for gallery</h2>
	
<h2>Carousel image gallery</h2>
<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
<div id="blueimp-image-carousel" class="blueimp-gallery blueimp-gallery-carousel">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="play-pause"></a>
</div>
<br>
<h2>Carousel video gallery</h2>
<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
<div id="blueimp-video-carousel" class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="play-pause"></a>
</div>
<br>
<h2>Lightbox image gallery</h2>
<!-- The container for the list of example images -->
<div id="links" class="links"></div>
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
	
	
	
@endsection

