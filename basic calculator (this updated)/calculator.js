	var num1 = '';
	var num2 = '';
	var operator = '';
	var result = '';
	
	function input(element){ 
		var input = element.id;
		
		if (operator === '') {
			num1 += input;
			document.getElementById('display').innerHTML = num1;
		}else {
			num2 += input;
			document.getElementById('display').innerHTML = num2;
		}
		if(input == 'C'){
			num1 = '';
			num2 = '';
			operator = '';
			result = '';
			document.getElementById('display').innerHTML = '';
		}
	}
	
	function operators(ope){
		operator = ope;
		document.getElementById('display').innerHTML = operator;
	}
	
	function calculate(){
		if(num1 !== '' && num2 !== '' && operator !== '') {
			if(operator == '+'){
				result = parseFloat(num1) + parseFloat(num2);
			}
			else if(operator == '-'){
				result = parseFloat(num1) - parseFloat(num2);
			}
			else if(operator == '*'){
				result = parseFloat(num1) * parseFloat(num2);
			}
			else if(operator == '/'){
				result = parseFloat(num1) / parseFloat(num2);
			}
			document.getElementById('display').innerHTML = result;
		}
		else{
			document.getElementById('display').innerHTML = 'somthing went wrong';
		}
		result = num1;
		operator = '';
		num2 = '';
	}