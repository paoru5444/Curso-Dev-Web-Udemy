var timerId = null; //variavel que armazena a chamada da funcao timeout
function iniciaJogo(){
	var url = window.location.search;
	var nivel_jogo = url.replace("?", "");
	
	var tempo_segundos = 0;

	if (nivel_jogo == 1)
	// 1 facil - 120 segundos
		tempo_segundos = 120;

	if (nivel_jogo == 2)// 2 normal - 60 segundos 
		tempo_segundos = 60;

	if (nivel_jogo == 3)// 3 dificil - 30 segundos
		tempo_segundos = 30;
	

	document.getElementById('cronometro').innerHTML = tempo_segundos;

	var qtde_baloes = 500;
	cria_baloes(qtde_baloes);

	document.getElementById('baloes_inteiros').innerHTML = qtde_baloes;
	document.getElementById('baloes_estourados').innerHTML = 0;

	contagem_tempo(tempo_segundos + 1);
}

function game_over(){
	alert("Fim de jogo você é um lixo!;")
}

function contagem_tempo(segundos){
	segundos = segundos - 1;
	if (segundos == -1){
		clearTimeout(timerId); // para a execucao da funcao do settimeout
		game_over();
		return false;
	}

	document.getElementById('cronometro').innerHTML = segundos;
	timerId = setTimeout("contagem_tempo("+segundos+")", 1000);

}

function cria_baloes(qtde_baloes){
	for(var i = 0; i <= qtde_baloes; i++){
		var balao = document.createElement("img");
		balao.src = 'imagens/balao_azul_pequeno.png';
		balao.style.margin = '9px';
		balao.id = 'b'+i;
		balao.onclick = function(){
			estourar(this);
		}

	document.getElementById('cenario').appendChild(balao);
	}
}

function estourar(b){
	var id_balao = b.id;
	document.getElementById(id_balao).setAttribute("onclick", "");
	document.getElementById(id_balao).src = 'imagens/balao_azul_pequeno_estourado.png';
	pontucao(-1);
}

function pontucao(acao){
	var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML;
	var baloes_estourados = document.getElementById('baloes_estourados').innerHTML;

	baloes_inteiros = parseInt(baloes_inteiros);
	baloes_estourados = parseInt(baloes_estourados);

	baloes_inteiros += acao;
	baloes_estourados = baloes_estourados - acao;

	document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros;
	document.getElementById('baloes_estourados').innerHTML = baloes_estourados;

	situacao_jogo(baloes_inteiros);
}

function situacao_jogo(baloes_inteiros){
	if(baloes_inteiros == 0){
		alert("Parabéns você melhorou desde a ultima, voce venceu e nao é um lixo!")
		parar_jogo();
	}
}

function parar_jogo(){
	clearTimeout(timerId);
}