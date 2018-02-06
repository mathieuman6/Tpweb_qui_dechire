
function pgcd(a,b) { // a>0, b>0  
  do {  
    var r=a;  
    a=b;  
    b=r%a;  
  } while (b>0);  
  return a;  
}

function plus-button(){    
    $quantities = $('.quantity');
    $.each($quantities,function(key, quant){
        quant_val = quant.innerHTML;
        $val = $('.nbpers')[0].innerHTML;
        $val = Number($val);
        if (/\//i.test(quant_val)){
            var nums = quant_val.split("/");
            nums[0] += nums[0];
            $pgd = pgcd(nums[0],nums[1]);
            $val1 = nums[0]/$pgd;
            $val2 = nums[1]/$pgd;
            $ret_val = $val1.toString()+"/"+$val2.toString();
            quant.innerHTML = $ret_val;
        }
        else{
            nums[0] += nums[0];
        }
    });
}


$('.plus-button')[0].addEventListener('click',plus-button,false);