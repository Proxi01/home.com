$(function () {
    $('.targets').submit((e) => {
// e.preventDefault(e);
        const formData = {
            'uri': window.location.pathname.split('/')[1],
            'month': $("#months :selected").text(),
            'prev': $('input[name=prev]').val(),
            'curr': $('input[name=curr]').val(),
            'sum': $('input[name=sum]').val()
        };
        console.log(formData);
        $.ajax({
            url: '/application/core/transfer.php',
            // url: '../application/controllers/controller_electricity.php',
            type: 'POST',
            // data: 'param=' + JSON.stringify(formData),
            data: {param: JSON.stringify(formData)},
            dataType: 'json',
            encode: true
        })
            .done(data => {
                console.log(data);
            })


    });

})