var App = {
    init : function(){
        $(document).on('submit', "#downloadVideo", App.videoDownload);
    },

    videoDownload : function(e){

        e.preventDefault;
        var url = $(this).find('[name=address]').val();
        $.ajax({
            url      : 'protected/getVideo.php',
            data     : { address : url },
            type     : 'POST',
            dataType : 'HTML',
            success  : function(data){
                App.videoRedirect(data);
            }
        });
        return false;
    },

    videoRedirect : function(music){
        window.location.href = 'get.php?m=' + music;
    }
};
$(App.init);