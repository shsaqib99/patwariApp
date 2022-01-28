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


function getMauzabyPatwarCircleID(url) {

    $.ajax({
        type: 'GET',
        url: url,
        success: function(data) {
            if (data.length > 0) {
                $("#mauza").empty();
                var option = "<option value=''> Select Mauza</option>";
                $.each(data, function (i, obj) {
                    option += "<option value=" + obj.id + ">" + obj.name + "</option>";
                });
                $(option).appendTo('#mauza');
                $("#mauza").attr('disabled',false);
            }else{
                toastr.error("No Mauza found for this Patwar Circle");
                $("#mauza").empty();
                $("#mauza").attr("disabled", true);
            }
        },
        error: function (data) {
            $("#patwar_circle").attr("disabled", true);
            toastr.error("No Mauza found for this Patwar Circle");
        }
    });

}




function getPatwarCirclebyQanoogoiID(url) {

    $.ajax({
        type: 'GET',
        url: url,
        success: function(data) {
            if (data.length > 0) {
                $("#patwar_circle").empty();
                var option = "<option value=''> Select Patwar Circle</option>";
                $.each(data, function (i, obj) {
                    option += "<option value=" + obj.id + ">" + obj.name + "</option>";
                });
                $(option).appendTo('#patwar_circle');
                $("#patwar_circle").attr('disabled',false);
            }else{
                toastr.error("No Qanoongoi found for this Qanoongoi");
                $("#patwar_circle").empty();
                $("#patwar_circle").attr("disabled", true);
            }
        },
        error: function (data) {
            $("#patwar_circle").attr("disabled", true);
            toastr.error("No PatwarCircle found for this Qanoongoi");
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
                var option = "<option value=''> Select Qanoongoi</option>";
                $.each(data, function (i, obj) {
                    option += "<option value=" + obj.id + ">" + obj.name + "</option>";
                });
                    $(option).appendTo('#qanoongoi');
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
                var option = "<option value=''> Select Tehsil</option>";
                $.each(data, function (i, obj) {
                    option += "<option value=" + obj.id + ">" + obj.name + "</option>";
                });
                $(option).appendTo('#tehsil');
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



