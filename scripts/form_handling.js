$(function () {
    $('.targets').submit((e) => {
// e.preventDefault();
        const formData = {
            'prev': $('input[name=prev]').val(),
            'curr': $('input[name=curr]').val(),
            'sum': $('input[name=sum]').val(),
            'uri': window.location.pathname.split('/')[1]
        };
        $.ajax({
            url: '../application/core/transfer.php',
            type: 'POST',
            data: "param=" + JSON.stringify(formData),
            dataType: 'json',
            encode: true,
        })
            .done(data => {
                console.log(data);
            })


    });

})