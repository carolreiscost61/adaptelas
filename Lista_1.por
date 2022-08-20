programa {
    funcao real Calcula_Area(real raio){
	    real pi, area
	    pi = 3.14
        area = 2*pi*raio
        retorne area
	}
	funcao inteiro idade_segundos(inteiro idade){
	    inteiro segundos
	    segundos = idade*365*24*60*60
	    retorne segundos
	}
    
	funcao inicio() {
	    escreva("Exercício 1")
	    real raio
		escreva("\nDigite o raio do cículo:")
		leia(raio)
		escreva("A área do circulo é ", Calcula_Area(raio))
		
		escreva("\nExercício 2")
		inteiro idade
		escreva("\nEscreva a idade que deve ser transformada em segundos:")
		leia(idade)
		escreva("A idade de ", idade, " em segundos é ", idade_segundos(idade))
		
	}

}
