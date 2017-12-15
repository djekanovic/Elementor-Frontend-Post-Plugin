
jQuery( document ).ready( function ( $ ) {


    $( '.el-fr-post-submit' ).on( 'click', function(e) {
        e.preventDefault();
        var title = $( '#el-fr-post-title' ).val();
        var content = tinymce.activeEditor.getContent();

        if (content === null){
        var content =  $( '#el-fr-post-content' ).val();

        }

        var status = 'publish';



        var data = {
            title: title,
            content: content,
            status: status,
        };

        $.ajax({
            method: "POST",
            url: POST_SUBMITTER.root + 'wp/v2/posts',
            data: data,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', POST_SUBMITTER.nonce );
            },
            success : function( response ) {
                console.log( response );
                alert( POST_SUBMITTER.success );
            },
            fail : function( response ) {
                console.log( response );
                alert( POST_SUBMITTER.failure );
            }

        });

    });

} );
