var initModal = function (target) {

	var $target = $(target);
    var $ref = $target.attr('ref');
    var $modal = $('#modal');

    var $content = $('<div class="modal-content"/>');
    var $close = $('<button role="button" class="modal-close">Close</button>');

    console.log($target);

    $.get($ref, function(data) {

        $content.empty().append(data, $close);

        $modal.append($content);
		modal.open($modal);

        $close.on('click', function (e) {
            e.preventDefault();
            console.log("click");
            modal.close($modal, $content);
        });

    }).fail(function() {

        $content.empty().append("<h1>Sorry, the content failed to load. Please refresh your page and try again.</h1>", $close);
        $modal.append($content);

    });

};