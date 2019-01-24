$(document).ready(function () {
    var btn = $('#addDeputyBtn');
    var input = $('#deputyInput');
    var deputiesBlock = $('.deputies-block');
    var links = $('.deputies-block__link');

    btn.on('click', function (e) {
        deputiesBlock.addClass('active');
    });

    links.on('click', function (e) {
        e.preventDefault();
        input.val($(e.target).parent().find('.deputies-block__card-title').text());
        $(e.target).parents('.tabs').removeClass('active');
    });
});