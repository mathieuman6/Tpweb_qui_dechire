
function pgcd(a,b) { // a>0, b>0
  do {
    var r=a;
    a=b;
    b=r%a;
  } while (b>0);
  return a;
}
function plus_button(){
    $quantities = $(".quantity");
    $val = $(".nbpers")[0].innerHTML;
    $val = Number($val);

    if($val<15){
	    $.each($quantities,function(key, quant){
		    if(quant.firstChild.value==null)
			var quant_val = quant.firstChild.data;
		    else
			var quant_val = quant.firstChild.value;
		    var nums = Number(quant_val);
		    var ty = quant.childNodes[key+1];
		    nums += nums/$val;
		    if (nums>=1000 && ty!=null){
			nums = nums/1000;
			if (ty.innerHTML=="g")
			    ty.innerHTML = "kg";
		    }
		    quant.firstChild.value = nums;
		    nums = Math.round(nums*100)/100;
		    quant.firstChild.data = nums.toString();
	    });
	    $(".nbpers")[0].innerHTML = ($val+1).toString();
    }
}

function minus_button(){
    $quantities = $(".quantity");
    $val = $(".nbpers")[0].innerHTML;
    $val = Number($val);

    if($val>1){
	    $.each($quantities,function(key, quant){
		    if(quant.firstChild.value==null)
			var quant_val = quant.firstChild.data;
		    else
			var quant_val = quant.firstChild.value;
		    var nums = Number(quant_val);
		    var ty = quant.childNodes[key+1];
		    nums -= nums/$val;
		    if (nums<1 && ty!=null){
			nums = nums*1000;
			if (ty.innerHTML=="kg")
			    ty.innerHTML = "g";
		    }
		    quant.firstChild.value = nums;
		    nums = Math.round(nums*100)/100;
		    quant.firstChild.data = nums.toString();
	    });
	    $(".nbpers")[0].innerHTML = ($val-1).toString();
    }
}

var $plusBtn=$('.plus-button');
if($plusBtn.lenth > 0){
  $(".plus-button")[0].addEventListener("click",plus_button,false);
}

var $plusBtn=$('.minus-button');
if($plusBtn.lenth > 0){
  $(".minus-button")[0].addEventListener("click",minus_button,false);
}

var $addIngredient = $('#boutonAddIngredient');
if($addIngredient.length > 0){
  $('#boutonAddIngredient').on('click', function(e) {
    e.preventDefault();
    console.dir($(this).parent());
    var field=  $('<div class="columns is-mobile">'+
      '<div class="column is-11 is-offset-1">'+
        '<section class="formul">'+
          '<div class="field has-addons has-addons-right">'+
            '<p class="control">'+
                '<input class="input" type="text" placeholder="Quantité" style="width:40%;">'+
              '</span>'+
            '</p>'+
            '<p class="control">'+
              '<input class="input" type="text" placeholder="ingredient">'+
            '</p>'+
          '</div>'+
          '</section>'+
        '</div>'+
      '<div>');

    $(this).parent().before(field);

  });
}
