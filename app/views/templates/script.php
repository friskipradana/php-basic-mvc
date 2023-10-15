<script src="<?= BASEURL; ?>/js/zepto.min.js"></script>
<script src="<?= BASEURL; ?>/js/lottie.min.js"></script>
<script>
    $(document).ready(function() {
        bodymovin.loadAnimation({
            container: document.getElementById("love"),
            renderer: "svg",
            loop: true,
            autoplay: true,
            path: "<?= BASEURL; ?>/assets/anim/data.json"
        });
    })

    $("main section button").first().click(function(e) {

        if ($("#modal").hasClass("hidden")) {
            $("#modal").removeClass("hidden");
            $("#modal").addClass("flex");

            // clear data
            $("#modal input").val("");
            $("#modal select").val("");
        }
    });
    $("main section #ubah").click(function(e) {
        e.preventDefault();
        if ($("#modal").hasClass("hidden")) {
            $("#modal").removeClass("hidden");
            $("#modal").addClass("flex");

            $("#modal h3").text("Edit Mahasiswa");
            $("#modal button[type=submit]").text("Ubah");
            $("#modal form").attr("action", "http://localhost/public/mahasiswa/ubah");

            // data
            const id = $(this).data("id");

            $.post('http://localhost/public/mahasiswa/getubah', {
                data: {
                    id: id
                }
            }, function(response) {
                $('#id').val(response.id);
                $('#nama').val(response.nama);
                $('#nrp').val(response.nrp);
                $('#email').val(response.email);
                $('#jurusan').val(response.jurusan);

            }, "json")
        }
    });

    $("#close").click(function(e) {
        if ($("#modal").hasClass("flex")) {
            $("#modal").removeClass("flex");
            $("#modal").addClass("hidden");
        }
    })
    $("#close_flash").click(function(e) {
        $(this).parent().remove();
    })
</script>
</body>