// $(document).ready(function() {
//
//   // var contador=0;
//   // $('#dinamico').on('click',function (event){
//   //   var form1 = $("<td>");
//   //   var form2 = $("<td>");
//   //   var form4 = $("<th>");
//   //   var fila=$("<tr>");
//   //   var input1 = $("<input>").attr("type","text").attr("name","elemento");
//   //   var input2 = $("<input>").attr("type","number").attr("name","cantidad");
//   //   form1.append(input1);
//   //   form1.append(input2);
//   //   fila.append(form1);
//   //   fila.append(form2);
//   //   $('#formc').append(fila);
//   // });
// });


$(document).ready(function(){
    //group add limit
    // var maxGroup = 10;

    //add more fields group
    $(".addMore").click(function(){
      
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);

    });

    //remove fields group
    $("body").on("click",".remove",function(){
        $(this).parents(".fieldGroup").remove();
    });
});
