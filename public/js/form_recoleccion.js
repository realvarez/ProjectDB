$(document).ready(function() {
  alert('asa');
  // var contador=0;
  $('#dinamico').on('click',function (event){
    var form = $("<tr>");
    var input1 = $("<input>").attr("type","text").attr("name","elemento");
    var input2 = $("<input>").attr("type","number").attr("name","cantidad");
    form.append(input1);
    form.append(input2);
    $('#formc').append(form);
  });
});
