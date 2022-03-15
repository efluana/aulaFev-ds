$(document).ready(function(){

    $('.btn-send').click(function(e){

        e.preventDefault();

        let= dados = $ ('#form').serialize()

        $('#return').empty()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../model/return.php',
            success: function(dados){
                        $('#return').append(`
                    <div class="col-12 col-sm-8 col-md-6">
                    <div class="alert-primary">
                        <h1 class="text-center text-dark">
                            ${dados.mensagem}
                        </h1>
                    </div>
                    <img src="../img/${dados.tipo}" class="img-fluid">
                </div>
                `)

            }
        })
    })
})