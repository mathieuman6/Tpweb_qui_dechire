
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

$(".plus-button")[0].addEventListener("click",plus_button,false);
$(".minus-button")[0].addEventListener("click",minus_button,false);
