programa {
    funcao vazio Par_impar(inteiro a){
        se(a%2==0){
            escreva("Par.")
        }senao{
            escreva("Impar.")
        }
    }
	funcao inicio() {
		inteiro a
		escreva("Digite um n�mero: ")
		leia(a)
		Par_impar(a)
	}
}
