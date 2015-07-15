(function () {

	var $video = $('#ch_video');
    var $ref = $video.attr('ref');
    var $modal = $('#modal');

    var $content = $('<div class="modal-content"/>');
    var $close = $('<button role="button" class="modal-close"><i class="fa fa-times"></i></button>');

    $.get($ref, function(data) {

        $content.empty().append(data, $close);

        $close.on('click', function (e) {
            e.preventDefault();
            modal.close($modal);
        });

        $modal.append($content);

        $video.on('ended', function (e) {
		    modal.open($modal);
		});

    }).fail(function() {

        $content.empty().append("<h1>Sorry, the content failed to load. Please refresh your page and try again.</h1>", $close);
        $modal.append($content);

    });

})();