programa {
    funcao vazio fibonacci(inteiro a){
        inteiro b = 0, c = 1, soma = 0, i = 1
        escreva(b," ")
        escreva(c," ")
        para(i = 2; i<a; i++){
            soma = b+c
            b = c
            c = soma
            escreva(soma, " ")
            
        }
    }
	funcao inicio() {
		 inteiro a
		escreva("Digite um numero: ")
		leia(a)
		fibonacci(a)
	}
}
