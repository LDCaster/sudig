<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>Tanda Tangan</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <form action="/surat/fungsi_tanda_tangan" enctype="multipart/form-data" method="post">
                    <div id="signature-pad">
                        <div style="border: solid 2px palevioletred; width:360px;height:110px; margin-bottom:-80px;"></div>
                        <div>
                            <div id="note" onmouseover="my_function();"></div>
                            <canvas id="the_canvas" width="350px" height="100px"></canvas>
                        </div>
                        <div style="margin:10px;">
                            <input type="hidden" id="signature" name="signature">
                            <button type="button" id="clear_btn" class="btn btn-danger" data-action="clear"><span class="glyphicon glyphicon-remove"></span> Bersihkan</button>
                            <button type="submit" id="save_btn" class="btn btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span> Simpan PNG</button>
                        </div>
                    </div>
                </form>
                <script text="text/javascript">
                    var wrapper = document.getElementById("signature-pad");
                    var clearButton = wrapper.querySelector("[data-action=clear]");
                    var savePNGButton = wrapper.querySelector("[data-action=save-png]");
                    var canvas = wrapper.querySelector("canvas");
                    var el_note = document.getElementById("note");
                    var signaturePad;
                    signaturePad = new SignaturePad(canvas);
                    clearButton.addEventListener("click", function(event) {
                        document.getElementById("note").innerHTML = "";
                        signaturePad.clear();
                    });
                    savePNGButton.addEventListener("click", function(event) {
                        if (signaturePad.isEmpty()) {
                            alert("Please provide signature first.");
                            event.preventDefault();
                        } else {
                            var canvas = document.getElementById("the_canvas");
                            var dataUrl = canvas.toDataURL();
                            document.getElementById("signature").value = dataUrl;
                        }
                    });

                    function my_function() {
                        document.getElementById("note").innerHTML = "";
                    }
                </script>


            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>