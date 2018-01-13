/*
*
* product.js
* created by Sofia Moral
* js to format the displaying product list
*
*/
var container=$('<div id="mytable" class="container"></div>');

$("#div1").append(container);		   
var row='<div class="row listed-product-header">'; 
var col1='<div class="col-4 align-self-center">image</div>';
var col2='<div class="col-4 align-self-center">title</div>';
var col3='<div class="col-4 align-self-center">destination</div></div>';

$("#mytable").append(row+col1+col2+col3); 		    
for(var i=0;i<data.length;i++)
{

    var row='<div class="row">'; 
    if(data[i]["img_sml"]==undefined){
    	data[i]["img_sml"] = 'http://kingfoundationchennai.com/shankar/application/modules/themes/views/default/assets/images/image-placeholder.png';
    }
    var col1='<div class="col-4 align-self-center"><div class="media"><img class="align-self-center mr-3 listed-product-image" src="'+data[i]["img_sml"]+'" alt="'+data[i]["dest"]+'" title="'+data[i]["title"]+'" /></div></div>';
    var col2='<div class="col-4 align-self-center">'+data[i]["title"]+'</div>';
    var col3='<div class="col-4 align-self-center">'+data[i]["dest"]+'</div></div>';

   $("#mytable").append(row+col1+col2+col3); 
}

