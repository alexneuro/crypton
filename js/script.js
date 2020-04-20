$(document).ready(function () {
    load();

    $('#email-btn').click(function () {
        send($('#email').val());

    });

});

function emailValidate(email) {
    if (email != '') {
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        if (pattern.test(email)) {
            return true;
        } else {
            alert("Введите корректный e-mail!")
        }
    } else {
        alert('Поле e-mail не должно быть пустым!');
    }
    return false;
}

function send(email) {
    if (emailValidate(email))
        $.ajax({
            type: "POST",
            url: "send.php",
            data: {email: email},
            success: function () {
                alert("Спасибо за Ваше обращение! С ответом не заставим долго ждать! ;)");
            }
        });
}

$(window).resize(load);


function load() {
    var video = $('#fullscreen-bg__video');

    var k = 1920 / 1080;
    var krev = 1080 / 1920;

    var wh = $(window).height();
    var ww = $(window).width();

    if (ww < 768)
        $('#footer').removeClass('fp-auto-height');

    if (ww > wh)
        if (wh * k > ww) {
            video.height(wh).width(wh * k);
            video.css('left', (ww / 2 - video.width() / 2) + "px");
        } else {
            video.width(ww).height(ww * krev);
            video.css('top', (wh / 2 - video.height() / 2) + "px");
        }
    else {
        if (ww * krev > wh) {
            video.width(ww).height(ww * krev);
            video.css('top', (wh / 2 - video.height() / 2) + "px");
        } else {
            video.height(wh).width(wh * k);
            video.css('left', (ww / 2 - video.width() / 2) + "px");
        }
    }



    $('#menu-btn').click(function () {
        $('#menu-wrapper').fadeIn();
        $(this).fadeOut();
        $('#menu-close').fadeIn();

        if ($(window).width() < 768)
            $('#follow').toggleClass('active');
    });

    $('#menu-close').click(function () {
        $('#menu-wrapper').fadeOut();
        $(this).fadeOut();
        $('#menu-btn').fadeIn();

        if ($(window).width() < 768)
            $('#follow').toggleClass('active');
    });
}
