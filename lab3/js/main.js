
    // alert("Hello js!");
    var num = 10;
    let name = "Bryan";
    const arr = [10, 20, "Hey"];
    let obj = { name: 'jim, age:20' };
    const objMix = {
        data: [
            { name: "dum", pga: 3.15 },
            { name: "hum", age: 19, gpa: 3.13 }
        ],
    };
    console.log(num);
    console.log(arr[2]);
    console.log(objMix.data[1].age);

    $(function () {
        alert("Hello Bryan....")
        $("#btn1").click(function () {
            $("#div1").text("BRU");
        
    
    $("#btn2".bind("click",()=>{}))
        $(".in1").val("BRU");
    });
    $("#btn3").click(()=>{
        $(".in1:even").toggleClass("green");
    });
    $("#div_form").load("./pages/form.html")
});
