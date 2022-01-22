function newModal() {
    $("#addModal").modal('show');
}

function deleteFun(mainID,route){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // $("#deleteForm").submit();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'DELETE',
                url:route,
                data:{mainID:mainID},
                success:function(data){
                    location.reload();
                }
            });
            location.reload();
        }
    });
}


function getQanoongoibyTehsilID(url) {

    $.ajax({
        type: 'GET',
        url: url,
        success: function(data) {
            if (data.length > 0) {
                $("#qanoongoi").empty();
                $.each(data, function (i, obj) {
                    var option = "<option value=" + obj.id + ">" + obj.name + "</option>";
                    $(option).appendTo('#qanoongoi');
                });
                $("#qanoongoi").attr('disabled',false);
            }else{
                toastr.error("No Qanoongoi found for this Tehsil");
                $("#qanoongoi").empty();
                $("#qanoongoi").attr("disabled", true);
            }
        },
        error: function (data) {
            $("#qanoongoi").attr("disabled", true);
            toastr.error("No Qanoongoi found for this Tehsil");
        }
    });

}



function getTehsilbyDistrictID(url) {

    $.ajax({
        type: 'GET',
        url: url,
        success: function(data) {
            if (data.length > 0) {
                $("#tehsil").empty();
                $.each(data, function (i, obj) {
                    var option = "<option value=" + obj.id + ">" + obj.name + "</option>";
                    $(option).appendTo('#tehsil');
                });
                $("#tehsil").attr('disabled',false);
            }else{
                toastr.error("No Tehsil found for this District");
                $("#tehsil").empty();
                $("#tehsil").attr("disabled", true);
            }
        },
        error: function (data) {
            $("#tehsil").attr("disabled", true);
            toastr.error("No Tehsil found for this District");
        }
    });

}



