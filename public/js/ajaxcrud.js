$(document).ready(function () {
    //delete data
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $(".deletebtn").on("click", function () {
        var id = $(this).data("id");
        confirm("Are You sure want to delete !");
        $.ajax({
            type: "GET",
            url: "ajaxcrud/delete/" + id,
            success: function (data) {
                console.log(data);
                // $("#ttt").ajax.reload();
                alert("Data Deleted");
            },
            error: function (error) {
                console.log(error);
                alert(" not deleted");
            },
        });
    });

    // edit data

    $(".editbtn").on("click", function () {
        // $("#maction").text("update");
        // $("#modal-block-vcenter").trigger("reset");
        $("#umodal-block-vcenter").modal("show");
        // $tr = $(this).closest("tr");
        // var data = $tr
        //     .children("td")
        //     .map(function () {
        //         return $(this).val();
        //     })
        //     .get();
        // $("#uname").val(data[2]);
        // $("#uclass").val(data[3]);
        // $("#uroll").val(data[4]);
        var id = $(this).data("id");
        $.ajax({
            url: "ajaxcrud/edit/" + id,
            type: "GET",
            success: function (data) {
                console.log(data);
                $("#uname").val(data["name"]);
                $("#uid").val(data["id"]);
                $("#uclass").val(data["class"]);
                $("#uroll").val(data["roll"]);
            },
        });
        // alert(id);
    });
    // update ajax
    $("#umaction").on("click", function (e) {
        e.preventDefault();
        var id = $("#uid").val();
        $.ajax({
            type: "POST",
            url: "ajaxcrud/update/" + id,
            data: $("#uinsertform").serialize(),
            success: function (result) {
                console.log(result);
                $("#umodal-block-vcenter").modal("hide");
                alert(result);
                // displaydata();
            },
            error: function (error) {
                console.log(error);
                alert("data not saved");
            },
        });
    });
    // //dispalay data
    // function displaydata() {
    //     // $.ajaxSetup({
    //     //     headers: {
    //     //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    //     //     },
    //     // });
    //     $.ajax({
    //         // headers: {
    //         //     "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    //         // },
    //         type: "POST",
    //         url: "ajaxcrud/read",
    //         success: function (responce) {
    //             console.log(responce);
    //             alert($responce);
    //         },
    //         error: function (error) {
    //             console.log(error);
    //             alert(" not displayed");
    //         },
    //     });
    // }

    $("#addbtn").on("click", function () {
        $("#upload").text("save");
        // $("#modal-block-vcenter").trigger("reset");
        $("#modal-block-vcenter").modal("show");
    });
    // insert ajax
    $("#maction").on("click", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "ajaxcrud/store",
            data: $("#insertform").serialize(),
            success: function (response) {
                console.log(response);
                $("#modal-block-vcenter").modal("hide");
                alert("Data Saved Successfully");
                // displaydata();
            },
            error: function (error) {
                console.log(error);
                alert("data not saved");
            },
        });
    });
});
