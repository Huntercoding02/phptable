<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/asset/color.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div id="container">
        <h1>Register</h1>

        <table id="table_1" style="border-radius:5px; border-collapse:collapse;  ">
            <tr style=" width : 150px;">
                <td class="table_data2">UserName :</td>
                <td><input required type="text" name="username" id="username" placeholder="Enter Your Username">
                    <span style="color: red;">*</span>
                </td>

            </tr>
            <tr>
                <td class="table_data2">Password :</td>
                <td class="table_data"><input type="password" name="password" id="password" placeholder="Enter Your Password"><span style="color: red;"> *</span></th>
                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    Confirm-Password :
                </td>
                <td class="table_data">
                    <input placeholder="Enter Your Confirm-Password" type="password" name="c_password" id="c_password">
                    <span style="color: red;">*</span>
                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    Name :
                </td>
                <td class="table_data">
                    <input placeholder="Enter Your Name" type="text" name="name" id="name">
                    <span style="color: red;">*</span>
                    </th>

                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    Surname :
                </td>
                <td class="table_data">
                    <input placeholder="Enter Your Surname" type="text" name="surname" id="surname">
                    <span style="color: red;">*</span></th>
                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    Email :
                </td>
                <td class="table_data">
                    <input placeholder="Enter Your Email" type="email" name="email" id="email">
                    <span style="color: red;">*</span></th>
                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    Citizin ID :
                </td>
                <td class="table_data">
                    <input placeholder="Enter Your Citizin ID" type="text" name="cid" id="cid" pattern="\d" maxlength="13">
                    <span style="color: red;">*</span></th>
                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    Phone number :
                </td>
                <td class="table_data">
                    <input placeholder="Enter Your Phone number" type="number" name="phonenumber" id="phonenumber">
                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    Address :
                </td>
                <td class="table_data">
                    <textarea placeholder="Enter Your Address" id="address" name="address" rows="4" cols="21"></textarea>
                </td>
            </tr>
            <tr>
                <td class="table_data2">
                    Zipcode :
                </td>
                </td>
                <td class="table_data">
                    <input placeholder="Enter Your zip code" type="text" pattern="\d*" maxlength="5" name="zipcode" id="zipcode">
                    <span style="color: red;">*</span></th>
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td class="table_data2">
                    Province :
                </td>
                <td class="table_data">

                    <select name="province" id="province">
                        <option value="">-Province-</option>
                    </select>
                    <span style="color: red;">*</span></th>
                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    District :
                </td>
                <td class="table_data">
                    <select name="district" id="district">
                        <option value=" ">-District-</option>
                    </select>
                    <span style="color: red;">*</span></th>
                </td>

            </tr>
            <tr>
                <td class="table_data2">
                    Sub District :
                </td>
                <td class="table_data">

                    <select name="subdistricts" id="subdistricts">
                        <option value=" ">-Sub District-</option>
                    </select>
                    <span style="color: red;">*</span></th>
                </td>

            </tr>
            <tr>
                <td class="table_data2">

                </td>
                <td class="table_data" style="padding-top: 0px;">
                    <button id="btn" type="submit"> Register </button>
                </td>
            </tr>
            <tr>
                <td class="table_data2">

                </td>
                <td class="table_data" style="padding-top: 0px;">
                    <span id="wroning" style="color: red;">&nbsp;</span>
                </td>
            </tr>
        </table>
    </div>
    <script>
        //         function check() {
        //   let x = document.getElementById("zipcode");
        //   if(x.value.length == 5){
        //     console.log("fin");
        //   }


        // }
        $(document).ready(function() {
            console.log("ready!");
            $("#zipcode").keyup(function() {
                
                let zipcode = $("#zipcode").val()
                
                if (zipcode.length != 5) {
                    
                    $("#province").empty().append(new Option("-Province-", "-"));
                    $("#district").empty().append(new Option("-District-", "-"));
                    $("#subdistricts").empty().append(new Option("-Sub Districts-", "-"));
                   
                    return false
                }
                
                let Province = $('<option/>');
                    Province.text('-Province-');
                    Province.attr('value', '-');
                    // $('#province').append(newOption);

                    let district = $('<option/>');
                    district.text('-District-');
                    district.attr('value', '-');
                    // $('#district').append(newOption);

                    let subdistricts = $('<option/>');
                    subdistricts.text('-Sub Districts-');
                    subdistricts.attr('value', '-');
                    // $('#subdistricts').append(newOption);
                
                let dataString =
                    'zipcode=' + zipcode


                $.ajax({
                    type: "POST", //METHOD "GET","POST"
                    url: "selectzip", //File ที่ส่งค่าไปหา
                    data: dataString,
                    //cache: false,
                    success: function(data) {

                        // console.log(data, "hun");

                        var data_red = JSON.parse(data)
                        // console.log(data, 'hi1');
                        // //alert(data);
                        // console.log(data_red.ret_code);

                        if (data_red.ret == 101) {
                            // $("#province").html(data)
                            $("#province").empty();
                            $("#district").empty();
                           $("#subdistricts").empty();
                            function initSelBox_Product() {
                                console.log(data_red, 'real');

                                var length = data_red.length;
                                console.log(data_red.province.length);

                                var newOption = $('<option/>');
                                newOption.text('-Province-');
                                newOption.attr('value', '-');
                                $('#province').append(newOption);
                                $.each(data_red.province, function(id, name) {
                                    console.log("name = ", name, "id = ", id);
                                    var newOption = $('<option/>');
                                    newOption.text(name);
                                    newOption.attr('value', id);

                                    $('#province').append(newOption);
                                });

                                let firstValue = $("#province option:eq(1)").val();
                                if (firstValue) {
                                    $("#province").val(firstValue).trigger('change');
                                }

                                var newOption = $('<option/>');
                                newOption.text('-District-');
                                newOption.attr('value', '-');
                                $('#district').append(newOption);
                                $.each(data_red.district, function(id, name) {
                                    console.log("name = ", name, "id = ", id);
                                    newOption = $('<option/>');
                                    newOption.text(name);
                                    newOption.attr('value', id);
                                    $('#district').append(newOption);
                                });
                                var newOption = $('<option/>');
                                newOption.text('-Sub District-');
                                newOption.attr('value', '-');
                                $('#subdistricts').append(newOption);

                            }

                            // เรียกฟังก์ชัน
                            initSelBox_Product();

                        } else {
                            // console.log("hi",data_red.msg);
                            $("#wroning").fadeIn();
                            $("#wroning").html(data_red.msg);
                        }
                    }
                });
            })

            $("#district").change(function() {

                let district = $("#district").val()
                let dataString = 'district=' + district


                $.ajax({
                    type: "POST", //METHOD "GET","POST"
                    url: "selectdistric", //File ที่ส่งค่าไปหา
                    data: dataString,
                    //cache: false,
                    success: function(data) {
                        console.log(data);
                        var data_red = JSON.parse(data)
                        // //alert(data);
                        // console.log(data_red.ret_code);

                        if (data_red.ret == 101) {
                            // $("#province").html(data)                       
                            // เรียกฟังก์ชัน
                            
                            subdistrict_1(data_red);
                            
                        }
                    }
                });
            })
            $("#btn").click(function() {

                var username = $("#username").val();
                var password = $("#password").val();
                var c_password = $("#c_password").val();
                var name = $("#name").val();
                var surname = $("#surname").val();
                var email = $("#email").val();
                var cid = $("#cid").val();
                var phonenumber = $("#phonenumber").val();
                var address = $("#address").val();
                var province_id = $("#province").val();
                var zipcode = $("#zipcode").val();
                var districts = $("#district").val();
                var subdistricts = $("#subdistricts").val();
                // alert(numb_1);
                // console.log("zip =", zipcode);
                // console.log("districts =", districts);
                // console.log("subdistricts =", subdistricts);
                // console.log("province_id =", province_id);
                // $.ajax({
                //     type: "POST", //METHOD "GET","POST"
                //     url: "process_register", //File ที่ส่งค่าไปหา
                //     data: dataString,
                //     //cache: false,
                //     success: function(data) {
                //         console.log(data);
                //         var data_red = JSON.parse(data)
                //         // //alert(data);
                //         // console.log(data_red.ret_code);

                //         if (data_red.ret == 101) {
                //             window.location.href = "https://together-gladly-airedale.ngrok-free.app/service/login_form"
                //             // $("#c_password").focus();
                //         } else {
                //             // console.log("hi",data_red.msg);
                //             $("#wroning").fadeIn();
                //             $("#wroning").html(data_red.msg);
                //         }


                //         //     result = data_red.data.pros + "=" + data_red.data.result;
                //         // console.log(result);
                //         // $("#result").html(result);
                //         // }else{
                //         //     alert(data_red.msg)
                //         // }
                //         // else{
                //         //     alert("Unsuccess");
                //     }

                // });


                if (username == "") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter username");
                    $("#username").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (username.length < 8 || username.length > 16) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter username not less than 8 but not more than 16");
                    $("#username").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (!/^[a-z0-9]+$/.test(username)) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Pattern username is wrong!");
                    $("#username").focus();
                    return false;
                }
                if (password == "") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter password");
                    $("#password").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (password.length < 8 || password.length > 16) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter password not less than 8 but not more than 16");
                    $("#password").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (username == password) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("username can not same as password");
                    $("#password").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                //"/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/" "/[\u0E00-\u0E7F]/"
                if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password)) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Pattern password is wrong!. Password must contain 1 capital character number and special character");
                    $("#password").focus();
                    return false;
                }
                if (c_password == "") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter Confirm password");
                    $("#c_password").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (c_password.length < 8 || c_password.length > 16) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter password not less than 8 but not more than 16");
                    $("#c_password").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                // "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/"
                if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(c_password)) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Pattern confirm password is wrong!");
                    $("#c_password").focus();
                    return false;
                }
                if (c_password != password) {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Your password and Confirm password mismatch");
                    $("#c_password").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (name == "") {


                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter name");
                    $("#name").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }

                if (!/^[a-zA-Z\u0E00-\u0E7F]+$/.test(name)) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Pattern name is wrong!");
                    $("#name").focus();
                    return false;

                }
                if (surname == "") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter surname");
                    $("#surname").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (!/^[a-zA-Z\u0E00-\u0E7F]+$/.test(surname)) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Pattern surname is wrong!");
                    $("#surname").focus();
                    return false;

                }
                if (email == "") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter email");
                    $("#email").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }

                if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("Pattern email is wrong!");
                    $("#email").focus();
                    return false;
                }
                if (cid == "") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter Citizin ID");
                    $("#cid").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (cid.length !== 13) {
                    $("#wroning").fadeIn();
                    $("#wroning").html("your citizin is not collect");
                    $("#cid").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                $("#wroning").fadeOut(500);

                if (!zipcode) {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please enter zipcode");
                    $("#zipcode").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                if (!province_id|| province_id == "-") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please choose provinces");
                    $("#province").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                // $("#wroning").fadeOut(500);
                if (districts == "" || districts == "-") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please choose districts ");
                    $("#districts").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }
                // $("#wroning").fadeOut(500);
                if (subdistricts == ""|| subdistricts == "-") {

                    $("#wroning").fadeIn();
                    $("#wroning").html("Please choose subdistricts");
                    $("#subdistricts").focus();
                    // $("#wroning").fadeOut(5000);
                    return false;
                }

                var data_1 = 1;
                var dataString =
                    'username=' + username +
                    '&password=' + password +
                    '&c_password=' + c_password +
                    '&name=' + name +
                    '&surname=' + surname +
                    '&email=' + email +
                    '&cid=' + cid +
                    '&phonenumber=' + phonenumber +
                    '&address=' + address +
                    '&province_id=' + province_id +
                    '&districts=' + districts +
                    '&subdistricts=' + subdistricts; //ค่าที่จะส่งไปพร้อมตัวแปร
                console.log(dataString);

                $.ajax({
                    type: "POST", //METHOD "GET","POST"
                    url: "process_register", //File ที่ส่งค่าไปหา
                    data: dataString,
                    //cache: false,
                    success: function(data) {
                        console.log(data);
                        var data_red = JSON.parse(data)
                        // //alert(data);
                        // console.log(data_red.ret_code);

                        if (data_red.ret == 101) {
                            window.location.href = "https://together-gladly-airedale.ngrok-free.app/service/login_form"
                            // $("#c_password").focus();
                        } else {
                            // console.log("hi",data_red.msg);
                            $("#wroning").fadeIn();
                            $("#wroning").html(data_red.msg);
                        }


                        //     result = data_red.data.pros + "=" + data_red.data.result;
                        // console.log(result);
                        // $("#result").html(result);
                        // }else{
                        //     alert(data_red.msg)
                        // }
                        // else{
                        //     alert("Unsuccess");
                    }
                    // } 
                });

            });
        });

        function subdistrict_1(data_red) {
            console.log(data_red, 'real');
            $("#subdistricts").empty();
            let length = data_red.length;
            console.log(length);
            var newOption = $('<option/>');
                            newOption.text('-Sub District-');
                            newOption.attr('value', '-');
                            $('#subdistricts').append(newOption);
            $.each(data_red.sub_district, function(id, name) {
                console.log("name = ", name, "id = ", id);
                var newOption = $('<option/>');
                newOption.text(name);
                newOption.attr('value', id);

                $('#subdistricts').append(newOption);
            });


        }
    </script>
</body>

</html>
<?php
// $input_current = date("Y-m-d H:i:s") ;
// $input_username = md5($input_current."hunhunhun");
?>