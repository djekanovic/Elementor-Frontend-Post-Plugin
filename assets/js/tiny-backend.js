
jQuery( document ).ready( function ( $ ) {

    $("html").on ("click", function(){



tinymce.init( {
    mode : "exact",
    selector: '#tinytext-backend',
    skin: "lightgray",
    menubar : false,
    statusbar : false,

    width: 500,
    toolbar: [
        "bold italic  | alignleft aligncenter alignright | bullist numlist outdent indent | undo redo",
    ],
    // plugins : "paste",
    // paste_auto_cleanup_on_paste : true,
    // paste_postprocess : function( pl, o ) {
    //     o.node.innerHTML = o.node.innerHTML.replace( /&nbsp;+/ig, " " );
    // }
    
} );

} );
} );






//
// jQuery( document ).ready( function( $ ) {
//   .console.log(test123)
//   $("div").on ("click", function(){
//
//
//     tinymce.init( {
//         mode : "exact",
//         selector: '#tinytext',
//         skin: "lightgray",
//         menubar : false,
//         statusbar : false,
//
//         width: 500,
//         toolbar: [
//             "bold italic  | alignleft aligncenter alignright | bullist numlist outdent indent | undo redo",
//         ],
//         // plugins : "paste",
//         // paste_auto_cleanup_on_paste : true,
//         // paste_postprocess : function( pl, o ) {
//         //     o.node.innerHTML = o.node.innerHTML.replace( /&nbsp;+/ig, " " );
//         // }
//     } );
//
//   });
//
// } );
