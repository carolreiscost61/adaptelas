programa {
    funcao vazio maioridade(inteiro id){
        se (id<18){
            escreva("Possui menos que 18 anos")
        }senao{
            escreva("Possui mais que 18 anos")
        }
    }
	funcao inicio() {
	    inteiro id
		escreva("Digite a idade: ")
		leia(id)
		maioridade(id)
	}
}
