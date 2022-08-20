programa {
    funcao vazio divide(inteiro a, inteiro b){
        se(b==0){
            escreva("Impossível dividir por 0.")
        }senao{
            inteiro c
            c = a/b
            escreva(c)
        }
    }
	funcao inicio() {
	    inteiro a, b
		escreva("Digite o numerador: ")
		leia(a)
		escreva("Digite o denominador: ")
		leia(b)
		divide(a, b)
	}
}
