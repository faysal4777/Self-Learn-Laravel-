$(document).ready(function(){
  console.log("ready");

  // for (var i = 1; i <= 20; i++) {
  //   $("#chapter"+i).hide();
  // }
  //
  // $("#chapter").on('change', function (){
  //
  //     var chapter = parseInt($("#chapter").val());
  //     console.log(chapter);
  //
  //     for (var i = 1; i <= 20; i++) {
  //       $("#chapter"+i).hide();
  //     }
  //
  //     for (var i = 1; i <= chapter; i++) {
  //       $("#chapter"+i).show();
  //     }
  //
  //
  //   });



});

function checkName(){

    var data = $("#coursename").val();
    if(!isValid){
      return;
    }
    else if(data == ""){
        $("#h1").text("Name can't be empty");
        $("#h1").show();
        isValid = false;
    }

    else{
        $("#h1").text("");
        $("#h1").hide();
        isValid = true;
    }
}

function checkDesc(){

    var data = $("#desc").val();
    if(!isValid){
      return;
    }
    else if(data == ""){
        $("#h2").text("Description can't be empty");
        $("#h2").show();
        isValid = false;
    }
    else{
        $("#h2").text("");
        $("#h2").hide();
        isValid = true;
    }
}

function checkChapterName(){

    //var re = /^[A-Z a-z0-9]+$/;

    var data = $("#chapterName").val();
    if(!isValid){
      return;
    }
    else if(data == ""){
        $("#h3").text("Name can't be empty");
        $("#h3").show();
        isValid = false;
    }

    else{
        $("#h3").text("");
        $("#h3").hide();
        isValid = true;
    }
}

function checkContent(){

    var data = $("#content").val();
    if(!isValid){
      return;
    }
    else if(data == ""){
        $("#h4").text("Content can't be empty");
        $("#h4").show();
        isValid = false;
    }
    else{
        $("#h3").text("");
        $("#h3").hide();
        isValid = true;
    }
}

function checkInfo() {

  isValid = true;

  $("h4").hide();

  checkName();
  checkDesc();
  checkChapterName();
  checkContent();

  if(!isValid){
    return false;
  }

  return true;
}
