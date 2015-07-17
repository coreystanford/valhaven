var modal = (function () {

    return {

        open: function ($modal) {

            $modal.removeClass('off');

        },

        close: function ($modal, $content) {

            $content.detach();
            $modal.addClass('off');

        }

    };

}());