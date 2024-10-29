function validasiForm(){
    var nama = $("#nama").val();
    var email = $("#email").val();
    var pesan = $("#pesan").val();

    if(nama == ''){
        alert("nama tidak boleh kosong!");
        return false;
    }
    if(email == ''){
        alert("email tidak boleh kosong!");
        return false;
    }
    if(pesan == ''){
        alert("pesan tidak boleh kosong!");
        return false;
    }

    $.ajax({
        url: "../process/cu.php",
        type: "POST",
        data: { nama: nama, email: email, pesan: pesan},
        success: function(response){
            alert("pesan dikirim!");
        },
        error: function(errorThrown){
            alert("gagal mengirim pesan!");
        }
    });
}