programa {
    funcao vazio potencia(inteiro x, inteiro y){
        se(x<=1){
            escreva("O primeiro número deve ser maior que 1.")
        }senao{
            inteiro c=1
            para(inteiro i=0; i<x; i++){
                c = c*y
            }escreva(c)
        }
    }
    
	funcao inicio() {
		inteiro x, y
		escreva("Digite X: ")
		leia(x)
		escreva("Digite Y: ")
		leia(y)
		potencia(x, y)
	}
}
