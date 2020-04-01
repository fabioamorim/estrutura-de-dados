#include <stdio.h>
#include <stdbool.h>

#define MAX 10 // estabelece o tamanho da pilha

typedef int TIPO;

typedef struct{
    TIPO num;
}REGISTRO;

typedef struct{
    REGISTRO NUM[MAX];
    int numeroReg;
}PILHA;

void inicializa(PILHA* P){
    P->numeroReg = 0;
}

bool pilhaEstaCheia(PILHA* P){
    if(tamanhoDaPilha(P) < MAX)
        return false;
    printf("A pilha esta' cheia!\n");
    return true;
}

int tamanhoDaPilha(PILHA* P){
    return P->numeroReg;
}

bool empilha(PILHA* P, TIPO R){

    if(pilhaEstaCheia(P)){
        return false;
    } 
    printf("Empilhando: %d\n",R);
    P->NUM[P->numeroReg].num = R;
    P->numeroReg++;
    return true;
    
}

bool desempilha(PILHA* P){

    if(P->numeroReg <= 0){
        return false;
    }

    P->numeroReg --;
    return true;
}

void desempilhaTudo(PILHA* P){
    if(tamanhoDaPilha(P) > 0){
        int i = 0;
        int tamanho = P->numeroReg - 1;
        for(i;i<=tamanho;tamanho--){
            printf("Desempilhando: %d\n", P->NUM[tamanho].num);
            P->NUM[tamanho].num = -1;
        }
        P->numeroReg = 0;
        printf("Pilha vazia! \n");
        
    }else{
        printf("Não há registros na Pilha!\n");
    }
}

int buscaNaPilha(PILHA* P, TIPO element){

    if(tamanhoDaPilha(P)==0)
        return -2; // retorna -2 caso a pilha esteja vazia.
    int i = 0;
    for(i;i<P->numeroReg;i++){
        if(P->NUM[i].num == element)
            return i; // retorna a posição do elemento buscado.
    }

    return -1; // retorna -1 caso não encontre o elemento.
}

void mostraPilha(PILHA* P){
    int i=0;
    printf("Pilha: \n");

    if(P->numeroReg > 0){
        for(i;i<P->numeroReg;i++){
            printf("%i\n",P->NUM[i].num);
        }
    }else{
        printf("Nao ha registros na Pilha!\n");
    }    
}

int main(){
    PILHA p;
    inicializa(&p);
    empilha(&p, 1);
    empilha(&p, 2);
    empilha(&p, 3);
    empilha(&p, 4);
    empilha(&p, 5);
    empilha(&p, 6);
    empilha(&p, 7);
    empilha(&p, 8);
    empilha(&p, 9);
    empilha(&p, 10);
    empilha(&p, 11);
    empilha(&p, 12);
    //mostraPilha(&p);
    printf("Posicao encontrada: %i\n",buscaNaPilha(&p, 5));
    printf("Posicao encontrada: %i\n",buscaNaPilha(&p, 50));
    desempilhaTudo(&p);
    printf("Posicao encontrada: %i\n",buscaNaPilha(&p, 5));

    return 0;
}