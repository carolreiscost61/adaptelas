programa {
    funcao vazio Pares(inteiro a){
        se(a<0){
            a = 0 - a
        }
        para(inteiro i=0; i<=a; i++){
            se(i%2==0){
                escreva(i, " ")
            }
        }
        
    }
	funcao inicio() {
	    inteiro a
		escreva("Digite um numero: ")
		leia(a)
		Pares(a)
	}
}

