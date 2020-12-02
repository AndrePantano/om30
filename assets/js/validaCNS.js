function is_cns (cns)
{
	// var cns = cns.replace(".","");

	var validaTamanho = cns.length == 15;
	var validaInicio = ['1', '2', '7', '8', '9'].includes(cns[0]);

	if(validaTamanho && validaInicio)
	{
		//CNS Iniciados em 7, 8 ou 9
		if(['7', '8', '9'].includes(cns[0]))
		{
			var soma = cns.split('').reduce((total, value, index) => total + (value * (15 - index)), 0);
			return soma % 11 == 0;
		}

		//CNS Iniciados em 1, 2
		else
		{
			var pis = cns.substring(0,11);
			var soma = pis.split('').reduce((total, value, index) => total + (value * (15 - index)), 0);

			var resto = soma % 11;
			var dv = resto == 0 ? 0 : 11 - resto;

			var resultado = dv == 10 ? `${pis}001${(11 - ((soma + 2) % 11))}` : `${pis}000${dv}`
			return resultado == cns;
		}
	}

	return false;
}

function cnsCheck(el)
{
    document.getElementById('checkcns').innerHTML = !is_cns(el.value) ? '<span style="color:red">CNS inválido!</span>' : '';
    if(el.value=='') document.getElementById('checkcns').innerHTML = '';
}