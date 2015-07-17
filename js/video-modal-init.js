(function () {

	var $video = $('#ch_video');
    var $ref = $video.attr('ref');
    var $modal = $('#modal');

    $.get($ref, function(data) {

        $modal.empty().append(data);

        $video.on('ended', function (e) {
		    modal.open($modal);
		});

    }).fail(function() {

        $modal.empty().append("<h1>Sorry, the content failed to load. Please refresh your page and try again.</h1>");

    });

})();