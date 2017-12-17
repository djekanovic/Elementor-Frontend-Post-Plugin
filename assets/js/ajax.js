
jQuery( document ).ready( function ( $ ) {


    $( '.el-fr-post-submit' ).on( 'click', function(e) {

      // var tinymce = tinymce.activeEditor.getContent();
        e.preventDefault();
        var titlebro = $( '#el-fr-post-title' ).val();
        var contentbro = $( '#el-fr-post-content' ).val();
        // var contentbro = tinymce.activeEditor.getContent();
        if (!contentbro) {
        var contentbro =  tinymce.activeEditor.getContent();
        } else {
          var contentbro = $( '#el-fr-post-content' ).val();



        }
        var statusbro = 'publish';




        var data = {
            title: titlebro,
            content: contentbro,
            status: statusbro,
        };

        $.ajax({
            method: "POST",
            url: POST_SUBMITTER.root + 'wp/v2/posts',
            data: data,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', POST_SUBMITTER.nonce );
            },
            success : function( response ) {
                // console.log( response );
                alert( POST_SUBMITTER.success );
            },
            fail : function( response ) {
                // console.log( response );
                alert( POST_SUBMITTER.failure );
            }

        });

    });



} );
