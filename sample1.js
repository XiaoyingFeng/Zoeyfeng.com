function main(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });

};

function track(){
  // or document.getElementById("txtHint").innerHTML = "";
     if($("#trackNumber").val() == "") {
         console.log('return');
        return;

     } else {
        var trackNumber = $("#trackNumber").val();
        console.log(trackNumber);
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","displayTable.php?q="+trackNumber,true);
        xmlhttp.send();
    }


};




function input () {
    //alert(" input submit button clicked");
    var udxNewShippment  = [];
    $("input").each(function(){
        var str = $(this).val();
        udxNewShippment.push(str);
    });
    var stringed = JSON.stringify(udxNewShippment);
    $.ajax(
    {
        type: 'post',
        url: 'insert.php',
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        data: $("form").serialize(),
        success: function( data, textStatus, jQxhr ){
          $('#response pre').html( data );
          alert(data);
        },
        error: function( jqXhr, textStatus, errorThrown ){
        console.log( errorThrown );
        }
    });
    return false;
  };

$(document).ready(main);