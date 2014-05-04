var App = {
    init : function(){
        $(document).on('submit', "#downloadVideo", App.videoDownload);
    },

    videoDownload : function(e){
        e.preventDefault;
        var url = $(this).find('[name=address]').val();
        var btn = $('#btn-submit-form');
        
        if(!btn.attr('disabled') !== undefined){
            $.ajax({
                url      : 'protected/getVideo.php',
                data     : { address : url },
                type     : 'POST',
                dataType : 'json',
                beforeSend : function(){
                    btn.button('loading');
                },
                success  : function(data){
                    if(data.success === true){
                        App.videoRedirect(data.url);
                    }else{
                        alert('Url não pode ser vazia');
                    }
                }
            }).always(function () {
                btn.button('reset');
            });
        }
        return false;
    },

    videoRedirect : function(music){
        window.location.href = 'get.php?m=' + music;
    }
};
$(App.init);