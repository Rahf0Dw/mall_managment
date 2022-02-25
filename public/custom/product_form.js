

$(document).on('click', '#add_product_details', function () {
    var id_component = $(this).parent().parent().find('specs');
    var id = 1;
    if(typeof id_component != "undefined"){
        id = 1;
    } else {
        id = id_component.data('id');
    }
    $('assad').remove();
    alert(id);
    // $.ajax({url: 'http://localhost:8080/qasioun_mall/public/add_specs?id='+id, success: function(data){
    //         $('.product_specs').append(data);
    //     }});
});
