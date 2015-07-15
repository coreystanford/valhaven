var modal = (function () {

    return {

        open: function ($modal) {

            $modal.removeClass('off');

        },

        close: function ($modal) {

            $content.detach();
            $modal.addClass('off');

        }

    };

}());