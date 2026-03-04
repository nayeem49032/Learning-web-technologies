const calculator=document.createElement('div');
calculator.style.width='200px';
calculator.style.padding='20px';
calculator.style.background='#1fecff';
calculator.style.borderRadius='7px';
calculator.style.margin='70px auto'
//calculator.id='clc-container';
document.body.appendChild(calculator);


const display=document.createElement('input');
display.type='text';
display.disabled=true;
display.style.width='100%';
display.style.height='50px';
display.style.fontSize='24px';
display.style.textAlign='right';
display.style.marginBottom='15px';
display.style.borderRadius='5px';
calculator.appendChild(display);

const buttonArea=document.createElement('div');
buttonArea.style.display='grid';
buttonArea.style.gridTemplateColumns='repeat(4,1fr)';
buttonArea.style.gap='10px';
calculator.appendChild(buttonArea);

const buttons=['7','8','9','*',
            '4','5','6','-',
            '1','2','3','+',
            '0','C','=','/'
        ];

buttons.forEach(text=>{
    const btn=document.createElement('button');
    btn.innerText=text;
    btn.style.padding='';
    btn.style.fontSize='';
    btn.style.border='none';
    btn.style.borderRadius='5px';
    btn.style.cursor='pointer';
    btn.style.backgroundColor='#444';
    btn.style.color='white';
    btn.onclick=()=>{
        if(text=== '='){
            try{
                eval()
                display.value=eval(display.value);
            }
            catch{
                display.value="?????"
            }
        }
        else if(text=== 'C'){
            display.value="";
        }
       /*  else if(text=== '/'){
            display.value/=text;
        }
        else if(text=== '-'){
            display.value-=text;
        }
        else if(text=== '*'){
            display.value=text;
        } */
        else{
            display.value+=text;
        }
    };
    buttonArea.appendChild(btn);
})

//alert('test')