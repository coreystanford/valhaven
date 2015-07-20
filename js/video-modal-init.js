(function () {

    var windowHeight = window.outerHeight;
	var $video = $('#ch_video');
    var $ref = $video.attr('ref');
    var $modal = $('#modal');
    
    $modal.css({
        left : "9999px",
        right: "-9999px"
    });

    $.get($ref, function(data) {

        $modal.empty().append(data);

        $video.on('ended', function (e) {
		    $modal.css({
                left : 0,
                right: 0
            });
		});

    }).fail(function() {

        $modal.empty().append("<h1>Sorry, the content failed to load. Please refresh your page and try again.</h1>");

    });

})();