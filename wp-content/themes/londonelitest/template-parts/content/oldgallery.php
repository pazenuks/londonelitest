
<div id="gallery-modal" class="gallery-modal">
    <div class="close-wrapper"><span class="close">&times;</span></div>
    <img class="gallery-modal-content" id="img01">
</div>
<script type="text/javascript">

    var modal = document.getElementById("gallery-modal");
    var modalImg = document.getElementById("img01");

    var galleryImages = document.querySelectorAll(".london-gallery img");
    for (var i = 0; i < galleryImages.length; i++) {
        galleryImages[i].onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
        }
    }

    var span = document.querySelector(".gallery-modal .close");

    span.onclick = function() {
        modal.style.display = "none";
    }
</script>