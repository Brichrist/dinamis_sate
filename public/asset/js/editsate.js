$(document).ready(function() {
    
    var tableslider =$('#sliderDataTable').DataTable();
    // console.log("test")
    tableslider.on('click','.Editslider',function (){
        // console.log("test")

        $tr = $(this).closest('tr');
        var data=tableslider.row($tr).data();
        console.log(data)
        $('.sliderFileName').text(data[2]);
        $('#sliderPreviewImage').attr('src', "/foto/sliderfoto/"+data[2]);
        
        var a = $(this).closest('tr').find('.status').text();
        console.log(a);

        if (a!="Active") {
            $("#sliderActiveCheck").removeAttr('checked');
        }
        let id=data[0];
        var y = $(window).scrollTop();
        $('#sliderForm').attr("action","/sliderupdate/"+id+"/"+y);
        console.log( $('#sliderForm').attr("action") );

        
    })

    var tableproduct =$('#productDataTable').DataTable();
    // console.log("test")
    tableproduct.on('click','.Editproduct',function (){
        // console.log("test")

        $tr = $(this).closest('tr');
        var data=tableproduct.row($tr).data();
        console.log(data)
        $('.productFileName').text(data[2]);
        $('#productPreviewImage').attr('src', "/foto/productfoto/"+data[2]);
        
        var a = $(this).closest('tr').find('.status').text();
        console.log(a);

        if (a!="Active") {
            $("#productActiveCheck").removeAttr('checked');
        }
        $('#productName').val(data[3]);
        $('#productDesc').val(data[4]);
        let id=data[0];
        var y = $(window).scrollTop();
        $('#productForm').attr("action","/productupdate/"+id+"/"+y);
        console.log( $('#productForm').attr("action") );

        
    })

    var tableevent =$('#eventDataTable').DataTable();
    // console.log("test")
    tableevent.on('click','.Editevent',function (){
        // console.log("test")

        $tr = $(this).closest('tr');
        var data=tableevent.row($tr).data();
        console.log(data)
        $('.eventFileName').text(data[2]);
        $('#eventPreviewImage').attr('src', "/foto/eventfoto/"+data[2]);
        
        var a = $(this).closest('tr').find('.status').text();
        console.log(a);

        if (a!="Active") {
            $("#eventActiveCheck").removeAttr('checked');
        }
        $('#eventevent').val(data[3]);
        let id=data[0];
        var y = $(window).scrollTop();
        $('#eventForm').attr("action","/eventupdate/"+id+"/"+y);
        console.log( $('#eventForm').attr("action") );

        
    })

    var tablewwd =$('#wwdDataTable').DataTable();
    // console.log("test")
    tablewwd.on('click','.Editwwd',function (){
        // console.log("test")

        $tr = $(this).closest('tr');
        var data=tablewwd.row($tr).data();
        console.log(data)
        $('.wwdFileName').text(data[2]);
        $('#wwdPreviewImage source').attr('src', "/foto/wwdfoto/"+data[2]);
        
        var a = $(this).closest('tr').find('.status').text();
        console.log(a);

        if (a!="Active") {
            $("#wwdActiveCheck").removeAttr('checked');
        }
        let id=data[0];
        var y = $(window).scrollTop();
        $('#wwdForm').attr("action","/wwdupdate/"+id+"/"+y);
        console.log( $('#wwdForm').attr("action") );

        
    })

    var tabletestimoni =$('#testimoniDataTable').DataTable();
    // console.log("test")
    tabletestimoni.on('click','.Edittestimoni',function (){
        // console.log("test")

        $tr = $(this).closest('tr');
        var data=tabletestimoni.row($tr).data();
        console.log(data)
        $('.testimoniFileName').text(data[2]);
        $('#testimoniPreviewImage').attr('src', "/foto/testimonifoto/"+data[2]);
        
        var a = $(this).closest('tr').find('.status').text();
        console.log(a);

        if (a!="Active") {
            $("#testimoniActiveCheck").removeAttr('checked');
        }
        $('#testimoniJudul').val(data[3]);
        $('#testimoniDesc').val(data[4]);
        $('#testimoniName').val(data[5]);
        let id=data[0];
        var y = $(window).scrollTop();
        $('#testimoniForm').attr("action","/testimoniupdate/"+id+"/"+y);
        console.log( $('#testimoniForm').attr("action") );

        
    })








    $('#slideraddbutton').click(function(){
        var y = $(window).scrollTop();
        $('#sliderFormadd').attr("action","/sliderstore/"+y);
        console.log( $('#sliderFormadd').attr("action") );
    });
    $('#productaddbutton').click(function(){
        var y = $(window).scrollTop();
        $('#productFormadd').attr("action","/productstore/"+y);
        console.log( $('#productFormadd').attr("action") );
    });
    $('#eventaddbutton').click(function(){
        var y = $(window).scrollTop();
        $('#eventFormadd').attr("action","/eventstore/"+y);
        console.log( $('#eventFormadd').attr("action") );
    });
    $('#wwdaddbutton').click(function(){
        var y = $(window).scrollTop();
        $('#wwdFormadd').attr("action","/wwdstore/"+y);
        console.log( $('#wwdFormadd').attr("action") );
    });
    $('#testimoniaddbutton').click(function(){
        var y = $(window).scrollTop();
        $('#testimoniFormadd').attr("action","/testimonistore/"+y);
        console.log( $('#testimoniFormadd').attr("action") );
    });

    


} );








$('#sliderImageFileadd').change(function(){
    document.getElementById("sliderPreviewImageadd").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#sliderPreviewImageadd').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});
$('#sliderImageFile').change(function(){
    // document.getElementById("sliderPreviewImage").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#sliderPreviewImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});

function scrollpst() {
    $yAxis=$(".yAxis").text();
    console.log($yAxis);
    window.scrollTo(0,$yAxis);
}


$('#productImageFileadd').change(function(){
    document.getElementById("productPreviewImageadd").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#productPreviewImageadd').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});
$('#productImageFile').change(function(){
    // document.getElementById("productPreviewImage").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#productPreviewImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});


$('#eventImageFileadd').change(function(){
    document.getElementById("eventPreviewImageadd").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#eventPreviewImageadd').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});
$('#eventImageFile').change(function(){
    // document.getElementById("eventPreviewImage").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#eventPreviewImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});

$('#wwdImageFileadd').change(function(){
    document.getElementById("wwdPreviewImageadd").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "video/mp4")
    {
        alert("Please choose mp4 files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#wwdPreviewImageadd').attr('src', e.target.result);
        $('#wwdPreviewImageaddvd').load()
    }
    reader.readAsDataURL(file);
});
$('#wwdImageFile').change(function(){
    // document.getElementById("wwdPreviewImage").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "video/mp4")
    {
        alert("Please choose mp4 files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#wwdPreviewImage').attr('src', e.target.result);
        $('#wwdPreviewImagevd').load()
    }
    reader.readAsDataURL(file);
});

$('#testimoniImageFileadd').change(function(){
    document.getElementById("testimoniPreviewImageadd").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#testimoniPreviewImageadd').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});
$('#testimoniImageFile').change(function(){
    // document.getElementById("testimoniPreviewImage").classList.remove("invisible");
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#testimoniPreviewImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});




