#include <stdio.h>
#include <stdbool.h>

#define MAX 10 // estabelece o tamanho da fila

typedef int TIPO;

typedef struct 
{
    TIPO num;
}REGISTRO;

typedef struct 
{
    REGISTRO CONTENT[MAX];
    int numeroReg;
}FILA;

void incializa(FILA* F){
    F->numeroReg = 0;
}

int tamanhoDaFila(FILA* F){
    return F->numeroReg;
}

bool filaEstaCheia(FILA* F){
    if(tamanhoDaFila(F) < MAX)
        return false;
    printf("A fila esta' cheia!\n");
    return true;
}

bool enfileirar(FILA* F, TIPO element){
    if(filaEstaCheia(F))
        return false;
    printf("Enfileira: %d\n", element);
    F->CONTENT[F->numeroReg].num = element;
    F->numeroReg++;
    return true; 
}

bool desinfileirar(FILA* F){
    if(tamanhoDaFila==0)
        return false;

    int i = 0;
    printf("Desinfileirando: %i\n", F->CONTENT[0].num);
    for(i;i<F->numeroReg;i++){
        F->CONTENT[i].num = F->CONTENT[i+1].num;
    } 
    F->numeroReg--;
    return true;
}

bool desinfileirarTudo(FILA* F){
    if(tamanhoDaFila(F) > 0){
        int i = 0;
        for(i;i<F->numeroReg;i++){
            printf("Desinfileirando: %d\n", F->CONTENT[i].num);
            F->CONTENT[i].num = -1;
        }
        F->numeroReg = 0;
        printf("fila vazia!\n");
    }else{
        printf("Nao ha registros na Fila!\n");
    }
}

int buscaNaFila(FILA* F, TIPO element){
    if(tamanhoDaFila==0)
        return -2; // retorna -2 caso a fila esteja vazia.
    int i = 0;
    for(i;i<F->numeroReg;i++){
        if(F->CONTENT[i].num == element)
            return i; // retorna a posição do elemento buscado.
    }

    return -1; // retorna -1 caso não encontre o elemento.
}

void mostrarFila(FILA* F){
    
    printf("FILA: \n");

    if(F->numeroReg > 0){
        int i = 0;
        for(i;i<F->numeroReg;i++){
            printf("%i\n", F->CONTENT[i].num);
        }
    }else{
        printf("Nao ha registros na Fila!\n");
    }
}

int main(){

    FILA f;

    incializa(&f);
    
    enfileirar(&f,10);
    enfileirar(&f,20);
    enfileirar(&f,30);
    enfileirar(&f,40);
    enfileirar(&f,50);

    printf("Posicao: %i\n",buscaNaFila(&f, 30));
    
    /*
    desinfileirar(&f);
    mostrarFila(&f);
    desinfileirar(&f);
    mostrarFila(&f);
    */
    printf("Tamanho: %i\n", tamanhoDaFila(&f));
    return 0;

}