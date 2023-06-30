<?php
include '../../head.php';
?>
<?php
include '../../header.php';
?>
<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="../img/1.jpg">
    </div>
    <div class="mySlides fade">
        <img src="../img/2.jpg">
    </div>
    <div class="mySlides fade">
        <img src="../img/3.jpg">
    </div>
    <div class="mySlides fade">
        <img src="../img/4.jpg">
    </div>
    <div class="mySlides fade">
        <img src="../img/5.jpg">
    </div>
    <div class="mySlides fade">
        <img src="../img/6.jpg">
    </div>
    <div class="mySlides fade">
        <img src="../img/7.jpg">
    </div>
    <div class="mySlides fade">
        <img src="../img/8.jpg">
    </div>
    <div class="mySlides fade">
        <img src="../img/9.jpg">
    </div>
</div>
<br>
<div style="text-align:center">
    <script>
        for (i = 0; i < document.getElementsByClassName('mySlides').length; i++) {
            document.write("<span class='dot' onclick='setSlide(" + (i + 1) + ")'></span>");        }
    </script>
</div>
<a class="prev" onclick="plusSlides(-2)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<script>
    var slideIndex = 0;
    showSlides();
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < document.getElementsByClassName('mySlides').length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > document.getElementsByClassName('mySlides').length) { slideIndex = 1 }
        if (slideIndex < 1) { slideIndex = document.getElementsByClassName('mySlides').length }
        for (i = 0; i < document.getElementsByClassName('dot').length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    const interval = setInterval(showSlides, 4000);
    //onclick to skip or return img
    function plusSlides(n) {
        slideIndex += n;
        showSlides();
    }
    function setSlide(i){
        slideIndex = i-1;
        showSlides();
    }

</script>

<?php
include '../../footer.php';
?>

