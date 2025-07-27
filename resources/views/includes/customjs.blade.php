<script type="text/javascript">

    // import {alert} from "../../../vendor/gloudemans/notify/resources/js/bootbox/bootbox";

    $(".profile_update_form input").prop("disabled", true);

    $(document).ready(function () {

        $(".tooltipped").tooltip();

        $('.footer-btn').click(function (){
            alert('Updating... check later')
        });

        // alert('hi');

        $(".profile_update_form input").prop("disabled", true);
        $(".account_update_form input").prop("disabled", true);
        $(".account_update_form select").prop("disabled", true);
        $(".security_update_form input").prop("disabled", true);

        $(".profile_update_button").hide();
        $(".account_update_button").hide();
        $(".security_update_button").hide();

        //EDIT PROFILE
        $(".edit_profile").click(function () {

            $(".profile_update_form input").prop("disabled", false);

            $("#username").prop("disabled", true);

            $("#password").prop("disabled", true);

            $(".profile_update_button").show();

        });

        //EDIT ACCOUNT

        $(".edit_account").click(function () {

            $(".account_update_form input").prop("disabled", false);
            $(".account_update_form select").prop("disabled", false);

            $("#username").prop("disabled", true);

            $("#password").prop("disabled", true);

            $(".account_update_button").show();

        });

        $(".edit_security").click(function () {

            $(".security_update_form input").prop("disabled", false);

            $("#username").prop("disabled", true);

            $("#password").prop("disabled", true);

            $(".security_update_button").show();

        });

        @if(app('current_user') && app('current_user')->stage == 0)

        var username = $("#username").val();

        $("#stage").LoadingOverlay("show");

        $("#level").LoadingOverlay("show");


        $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                }

            }
        );


        $.ajax({

            type: "GET",

            url: "{!! route('check_feeder_matrix') !!}",

            dataType: 'json',

            success: function (data) {

                if (data != null) {

                    $("#stage").html(data.stage);

                    $("#level").html(data.level);

                    $("#stage").LoadingOverlay("hide", true);

                    $("#level").LoadingOverlay("hide", true);


                } else alert('sorry an error occurred trying to load your STAGE and LEVEL; Please check your connection.');

            }

        });

        @endif

        @if(app('current_user') && app('current_user')->stage > 0)

        var username = $("#username").val();

        $("#stage").LoadingOverlay("show");

        $("#level").LoadingOverlay("show");

        $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                }

            }
        );

        $.ajax({

            type: "GET",

            url: "{!! route('check_stage_matrix') !!}",

            dataType: 'json',

            success: function (data) {

                if (data != null) {

                    $("#stage").html(data.stage);

                    $("#level").html(data.level);

                    $("#stage").LoadingOverlay("hide", true);

                    $("#level").LoadingOverlay("hide", true);


                } else alert('sorry an error occurred trying to load your STAGE and LEVEL; Please check your connection.');

            }

        });

        @endif





        //DOWNLINE COUNTS

        @if(app('current_user'))

        var username = $("#username").val();

        $("#downline_count").LoadingOverlay("show");

        $.ajax({

            type: "GET",

            url: "{!! route('get_downline_count') !!}",

            dataType: 'json',

            success: function (data) {

                if (data != null) {

                    $("#downline_count").html(data.count);

                    $("#downline_count").LoadingOverlay("hide", true);

                } else alert('sorry an error occurred trying to load your Downlines; Please check your connection.');

            }

        });

        @endif

        //CHECK PVS
        @if(app('current_user'))
        // alert('hi');
        var username = $("#username").val();

        $("#left_pvs").LoadingOverlay("show");
        $("#right_pvs").LoadingOverlay("show");
        $("#points").LoadingOverlay("show");
        $("#total_pvs").LoadingOverlay("show");

        $.ajax({

            type: "GET",

            url: "{!! route('member_get_pvs', app('current_user')->id ) !!}",

            dataType: 'json',

            success: function (data) {

                if (data != null) {
                    // alert(data);

                    $("#left_pvs").html(data.left);
                    $("#left_pvs").LoadingOverlay("hide", true);


                    $("#right_pvs").html(data.right);
                    // alert(data.right_pvs);
                    $("#right_pvs").LoadingOverlay("hide", true);

                    $("#points").html(parseInt(data.points));
                    $("#points").LoadingOverlay("hide", true);

                    $("#total_pvs").html(parseInt(data.total_pvs));
                    $("#total_pvs").LoadingOverlay("hide", true);

                    // Loading Matching Bonus from pvs
                    get_matching_bonus(data.left, data.right);

                    // alert('hi');
                    // Loading RANK from pvs
                    get_member_rank(data.left, data.right);

                } else alert('sorry an error occurred trying to load your PVs; Please check your connection.');

            }

        });

        @endif

        // GET MATCHING BONUS

        function get_matching_bonus(left_pvs, right_pvs) {
            @if(app('current_user'))
            // alert('hi');
            var username = $("#username").val();

            $("#matching_bonus").LoadingOverlay("show");

            // alert(right_pvs);

            $.ajaxSetup({
                "headers": {
                    "X-CSRF-TOKEN": $('meta[name="_token"]').attr('content')
                }
            })

            $.ajax({

                type: "POST",

                url: "{!! route('member_matching_bonus')!!}",

                dataType: 'json',
                data: {'left_pvs': left_pvs, 'right_pvs': right_pvs},
                success: function (data) {
                    if (data != null) {
                        // alert(data.amount);

                        $("#matching_bonus").html(data.amount);
                        $(".matched").html(data.matched);
                        $(".this_matching").html(data.this_match);
                        $("#matching_bonus").LoadingOverlay("hide", true);
                    } else alert('Error Loading; Check Internet');

                }

            });

            @endif

            return;
        }

        // GET RANK

        function get_member_rank(left_pvs, right_pvs) {
            @if(app('current_user'))
            // alert('hi');
            var username = "{{ app('current_user')->username}}";
            $("#current_rank").LoadingOverlay("show");

            // alert(right_pvs);

            $.ajaxSetup({
                "headers": {
                    "X-CSRF-TOKEN": $('meta[name="_token"]').attr('content')
                }
            })

            $.ajax({

                type: "POST",

                url: "{!! route('get_member_rank')!!}",

                dataType: 'json',
                data: {'left_pvs': left_pvs, 'right_pvs': right_pvs},
                success: function (data) {
                    if (data != null) {
                        // alert('i am here');
                        $("#current_rank").html(data.name)
                        $("#current_rank").LoadingOverlay("hide", true);

                    } else {
                        $("#current_rank").html(0)
                        $("#current_rank").LoadingOverlay("hide", true);
                    };

                }

            });

            @endif
        }

        //COPY REFERAL LINKS

        $('.copyRefLink').click(function () {

            var $temp = $("<input>");

            $("body").append($temp);

            $temp.val($(".reflink").text()).select();

            $temp.val($(".reflink").text()).select();

            document.execCommand('copy');

            $temp.remove();

            alert("Referral Link Copied; you can paste where needed");

        });

        $('.modal').modal();


//    transfer panels

        $(".to-panel").hide();

        hide_others();

        $('input:radio[name="from"]').prop("checked", false);

        $('input:radio[name="to"]').prop("checked", false);

        hide_other_forms();


        $('input:radio[name="from"]').on('change',

            function () {

                if (this.checked) {

// alert($(this).attr('data-target'));

                    var to_container = "#" + $(this).attr("data-target");

                    $(".to-panel").show();

                    show_others();

                    $(to_container).hide();

                }

            });


        $('input:radio[name="to"]').on('change',

            function () {


                var to_form = "#" + $(this).attr("data-form");

// alert(to_form);

                hide_other_forms();


                $(to_form).show("slow");

            });


        function hide_other_forms() {

            $("#shop_form").hide("fast");

            $("#other_account_form").hide("fast");

            $("#investment_form").hide("fast");

            $("#cash_form").hide("fast");


        }


        function hide_others() {

            $(".to-shop").hide();

            $(".to-investment").hide();

            $(".to-another-account").hide();

        }


        function show_others() {

// $(".to-panel").append($("#to-shop"), $("#to-cash"), $("#to-investment"),$("#to-another-account") )

// alert('hmm');


            $("#to_shop").show();

            $("#to_cash").show();

            $("#to_investment").show();

            $("#to_another-account").show();

        }


        $('.dropdown-trigger').dropdown('open');


//        ADDING ITEMS TO CART

//        **************************************************************


        $(".add_to_cart").on('click', function () {

            var productId = $(this).attr('data-added');

            var price = $(this).attr('data-price');

            var name = $(this).attr('data-name');

            var qty = "#" + $(this).attr('data-qty');

            var quantity = $(qty).val();

            var image = $(this).attr('data-image');


            $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                    }

                }
            );


            $.ajax({

                type: "POST",

                url: "{!! route('addToCart') !!}",

                dataType: "html",

                data: {'productId': productId, 'quantity': quantity, 'price': price, 'name': name, 'image': image},


                success: function (data) {

//                    alert(data);

                    var result = data;

                    if (result !== null) {

                        $("#cartmenu").html(data);


                        var count = $(".cartcount").html();

                        $("#shopping_cart").html(count);


                        swal({

                            title: "Item Added To Basket!",

                            text: "successfully.",

                            timer: 2000,

                            buttons: false

                        });

                        window.location.replace("{!! route('checkout') !!}");


                    } else {

                        $("#cartmenu").html("<span class='span alert alert-danger'> No items in your basket</span>");

                    }

                }

            });

        });


//        ******************************************************************


//        CLICKING CHECK OUT


        $("#checkout").click(function () {

            window.location.href = "shop/checkout";

        });


//*****************************************************************************


        //CLEAR CART

//        ********************************************************************************


        $("#clearCart").on('click', function () {

//            alert('hi');

            swal({

                title: "Are you sure?",

                text: "You will not be able to recover deleted Items!",

                icon: 'warning',

                dangerMode: true,

                buttons: {

                    cancel: 'No, Please!',

                    delete: 'Yes, Delete It'

                }

            }).then(function (willDelete) {

                if (willDelete) {


                    $.ajaxSetup({

                            headers: {

                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                            }

                        }
                    );


//            alert('hi');


                    $.ajax({

                        type: "POST",

                        url: "shop/cart/clear",

                        dataType: "html",


                        success: function (data) {

                            if (data !== null) {

                                $("#cartmenu").html(data);


//                                var count = $(".cartcount").html();

//                                alert(count);

                                $("#shopping_cart").html(0);

                            }

                        }

                    });

                    swal("Cart Cleared Successfully!", {

                        icon: "success",

                    });

                } else {

                    swal("Cart was not cleared", {

                        title: 'Cancelled',

                        icon: "error",

                        timer: 2000,

                        button: false

                    });

                }

            });


//            var action = confirm('Are you sure you wish to CLEAR ALL ITEMS IN YOUR BASKET? This action cannot be undone.');


//            if (action === false) {

//                return false;

//            }


        });


//        CONTINUE SHOPPING


        function cartContinue() {

//            alert('clicked');

            $("#cart_alert").hide();

        }

//        REMOVING ITEMS FROM CART

//        *********************************************************************************

        $("body").on('click', ".remove-btn", function () {

            var id = $(this).attr('data-id');

//alert(id);

            swal({

                title: "Are you sure?",

                text: "You want to remove this item?",

                icon: 'warning',

                dangerMode: true,

                buttons: {

                    cancel: 'No',

                    delete: 'Yes'

                }

            }).then(function (willDelete) {

                if (willDelete) {


                    $.ajaxSetup({

                            headers: {

                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                            }

                        }
                    );


                    $(".data-row").LoadingOverlay('show', true);


                    $.ajax({

                        type: "POST",

                        url: "{!! route('cart_remove_item') !!}",

                        dataType: "html",

                        data: {"id": id},


                        success: function (data) {

                            var result = data;

                            if (result !== null) {

                                $(".items-div").html(data);

                            }

                            $(".data-row").LoadingOverlay('hide', true);

                            swal("Item removed Successfully!", {

                                icon: "success",

                                timer: 2000,

                                button: false

                            });

                        }

                    });

                } else {

                    swal("Item not removed!", {

                        title: 'Cancelled',

                        icon: "error",

                        timer: 2000,

                        button: false

                    });

                }

            });

        });


//        REMOVING ENDS


//        GETTING USER NOTIFICATIONS



        @if(app('current_user') && app('current_user')->is_admin == 0)

        var username = $("#username").val();

        $("#notifications-dropdown").LoadingOverlay("show");


        $.ajax({

            type: "GET",

            url: "{!! route('get_user_notifications') !!}",

            dataType: 'html',

            success: function (data) {

                if (data != null) {

                    $("#notifications-dropdown").html(data);

                    $("#notifications-dropdown").LoadingOverlay("hide", true);

                    get_unread_notifications();


                } else alert('sorry an error occurred trying to load your Notifications; Please check your connection.');

            }

        });


        @endif



        $("#notifications_bell").on("click", function () {

            var notif_list = $(".notification_list");

            var read_at = notif_list.attr('data-read');


            if (read_at == 0) {

                setTimeout(function () {


//                    alert(read_at);

                    $.ajaxSetup({

                            headers: {

                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                            }

                        }
                    );


                    @if(app('current_user'))

                    $.ajax({

                        type: "POST",

                        url: "{!! route('mark_notifications_read', app('current_user')->id) !!}",

                        dataType: 'text',

                        success: function (data) {

                            notif_list.removeAttr("style");

                            read_at = 1;

                            notif_list.attr('data-read', 1);

                            $(".notif_inside_badge").html(0);

                            $("#notif_badge").html(0);


                        }

                    });



                    @endif





                }, 3000);


//

            }


        });


        /*UPDATING PROFILE PIX */
        function readProfilePixURL(input) {

            if (input.files && input.files[0]) {

                var file = input.files[0];


                var fileType = file["type"];

                var validImageTypes = ["image/gif", "image/jpeg", "image/png"];

                if ($.inArray(fileType, validImageTypes) < 0) {

                    alert('Selected file is not an Image.');

                    return false;

                } else {

                    var reader = new FileReader();


                    reader.onload = function (e) {

                        $('.profile_img').attr('src', e.target.result);

                    }


                    reader.readAsDataURL(file);

                }


            }

        }


//        EDITING PROFILE PIX ENDS
        $(".smart_card_validate").on('click', function () {


            var product_id = $(this).attr("data-product_id");

            var service_id = $(this).attr("data-service_id");

            var input_id = $(this).attr("data-smartcard");

            var bills_form = $(this).attr("data-form");

            var meter = $(input_id).val();


            var vaidated = validate_smartcard(meter, service_id, product_id, bills_form);

//           alert(meter + product_id + service_id);

        });

        function validate_smartcard(meter, service_id, product_id, form) {

//            alert("." + product_id + "_card_details");

//            return false;


            $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                    }

                }
            );


            $(form).LoadingOverlay('show', true);


            $.ajax({

                type: "POST",

                url: "{!! route('validate_smartcard') !!}",

                dataType: "json",

                data: {"meter": meter, "service_id": service_id, "product_id": product_id},


                success: function (data) {

//                    alert(data);

                    if (data !== null) {


                        $(".smartcard_details").show();

                        $("." + product_id + "_card_details").html(data.number);

                        $("." + product_id + "_account_details").html(data.name);

                        $("." + product_id + "_address_details").html(data.address);

                    }

                    $(".card_form").hide();


                    $(form).LoadingOverlay('hide', true);

                }

            }).fail(function () {

                $(form).LoadingOverlay('hide', true);

                alert("NOT FOUND")

            });

            return null;

        }


    });//end document.ready

    //**************************************************************************************************

    //****************************************************************************************************


    function get_unread_notifications() {

        $("#notif_badge").LoadingOverlay("show");

        $.ajax({

            type: "GET",

            url: "{!! route('get_unread_notifications') !!}",

            dataType: 'text',

            success: function (data) {

                if (data != null) {


                    $("#notif_badge").html(data);

                    $("#notif_badge").LoadingOverlay("hide", true)

                } else alert('sorry an error occurred trying to load your Notifications; Please check your connection.');

            }

        });

    }


    //DELIVERY OPTIONS


    $('input:radio[name="delivery_option"]').on('change',

        function () {

            if (this.checked) {


                var to_container = "#" + $("#del_option2").attr("data-target");


                if ($(this).attr("data-target") == "collection_form") {

//                    alert(to_container);

                    $("#delivery_form").hide();

                    $("#collection_form").show();


                } else if ($(this).attr("data-target") == "delivery_form") {

                    $(to_container).show();

                    $("#collection_form").hide();

                }

            }

        });


    function updateAmount(quantity, price, amountId, pid) {


        var total = quantity * price;


//        alert(total);


        var amountSelector = '#' + amountId;


        $(".load_item").LoadingOverlay("show");


        $.ajax({

            type: "POST",

            url: "{!! route('cartUpdate') !!}",

            dataType: "text",

            data: {'quantity': quantity, 'id': pid},


            success: function (data) {

//                    alert(data);

                if (data !== null) {

                    $("#cart_items").html(data);

                    $(".load_item").LoadingOverlay("hide", true);

                    $("#cart_alert").html("<span class='span alert alert-success'>Cart updated Successfully</span>");


                    setTimeout(function () {

                        $('#cart_alert').fadeOut('fast');

                    }, 3000); // <-- time in milliseconds

                } else {

                    $("#cart_alert").html("<span class='span alert alert-danger'>No items in your basket to clear</span>");

                }

            }

        });


        $(amountSelector).html(total);


    }


</script>

