<script src="{{asset('elite/js/main.js')}}"></script>
<!-- for aos animation -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<script>
    AOS.init();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

<script>
    document.getElementById("resume-btn").addEventListener("click", function () {
        var fileUrl = "{{asset('elite/src/pdf/Elite Profile.pdf')}}";
        saveAs(fileUrl, "Resume.pdf");
    });
</script>
