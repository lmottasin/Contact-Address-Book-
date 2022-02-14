(function ($) {
    $(document).ready(function () {
        function drop_down_list() {
            //alert('hello');
            $.ajax({
                url: 'dropDownItem/state',
                success: function (data) {
                    // alert(data);
                    // $('#floor_plan_list_table_body').html(data);

                }
            });

        }

        drop_down_list();

        $('#type').on('change', function(){
           //alert($('#type').val());
            let type = $('#type').val();
            $('#drop_down_list_title').text('Select Your '+type );

            //fetch the data form database
            // let output=[];
            $.ajax({
                url: 'dropDownItem/'+type,
                success: function (data) {
                    // alert(data);
                    // $('#floor_plan_list_table_body').html(data);
                    let output = '';
                    // <option value="{{ $item->id.' '.$item->room_no}}">{{ $item->room_no }}</option>
                    for( let i in data){
                        output += '<option value="'+data[i]+'">'+data[i]+'</option>';
                    }
                    //console.log(output);
                    $('#drop_down_list').html(output);
                }
            });
        });



    });
})(jQuery)
