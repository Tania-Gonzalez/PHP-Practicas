#include <iostream>
#include <fstream>
#include <sstream>
#include <string>
#include <cstring>

using namespace std;


void MenuPrincipal();
void SubMenu();
void LibrosDesordenados();
void Metodo1Burbuja();
void Metodo2Seleccion();
void Metodo3Insercion();



int main(){
	
	MenuPrincipal();

}

int RangoArreglo = 20; 

string Libros [] = { 
	"Divina Comedia",
	"Orgullo y prejuicio",
	"Viaje al fin de la noche",
	"Crimen y castigo",
	"El hombre invisible",
	"Odisea",
	"Grandes Esperanzas",
	"Jacques el fatalista",
	"Middlemarch",
	"Relatos cortos",
	"Juego de tronos",
	"Tiempo de migrar al norte",
	"Harry Potter y la piedra filosofal",
	"Vida y opiniones del caballero Tristram Shandy",
	"Eneida",
	"Memorias",
	"Cien años de soledad",
	"La iliada",
	"Don Quijote de la Mancha",
	"Amanecer"
};


void MenuPrincipal(){   
	
	int OpcionSelect;   		

	cout << "          =Menu de Opciones=" <<endl;
	cout << " 1) Visualiuzar lista de libros" <<endl;
	cout << " 2) Metodo de Ordenamiento Burbuja" <<endl;   	     
	cout << " 3) Metodo de Ordenamiento por Seleccion " <<endl;
	cout << " 4) Metodo de Ordenamiento por Insercion" <<endl;
	cout << " 5) Salir" << endl;
		        
	cout << "\nIngrese una opcion: ";		
    cin>>OpcionSelect;                  
    
    
    
	while (!cin.good()||OpcionSelect==0||OpcionSelect>5){    
		cin.clear();                                  		
		cin.ignore(INT_MAX,'\n');  
		system("cls");
		cout<<"Mensaje: *Ingresa una opcion valida*"<<endl<<endl; 	
		MenuPrincipal();										
	}
	        
	switch (OpcionSelect) {			
		case 1:
			system("cls");	
			LibrosDesordenados();					
			SubMenu();									 
		    break;									
		                
		case 2:
		    system("cls");		
		    Metodo1Burbuja();						
		    SubMenu();			
		    break;				

		case 3: 
			system("cls");				
			Metodo2Seleccion();			
			SubMenu();					
		    break;				
		                
		case 4:
		    system("cls");		
		    Metodo3Insercion();						
			SubMenu();      	
		    break;							
		case 5:
		    system("cls");	
			break;	
    }   
}

	
void SubMenu(){	
	
	int SubOpcionSelect;			

	
	cout<<endl;	        
	cout << "  =Menu de Opciones=" <<endl;
	cout << " 1) Menu principal" << endl;
	cout << " 2) Salir" << endl;
			        
	cout << "\n->Ingrese una opcion: ";
	cin >> SubOpcionSelect;					

	while (!cin.good()||SubOpcionSelect==0||SubOpcionSelect>2){ 
		cin.clear();                                 		
		cin.ignore(INT_MAX,'\n');                     		
		system("cls"); 											
		cout<<"Mensaje: *Ingresa una opcion valida*"<<endl<<endl;			
		SubMenu();												
	}
		        
	switch (SubOpcionSelect) {		
		case 1:
			system("cls");
			MenuPrincipal();	
		    break;     
			         
		case 2:
		    system("cls");									
		    break;
	}
}



void LibrosDesordenados(){
	
	cout << "  *Lista de libros desordenada*" << endl<<endl;
	
	for(int i=0; i < RangoArreglo; i++){
		
		cout<<i+1<<". "<<Libros[i]<<endl;
	}	
}


void Metodo1Burbuja(){
	

	string CopiaLibrosM1[RangoArreglo];	
	
	for(int i=0; i<RangoArreglo; i++){ 
		
		CopiaLibrosM1[i] = Libros[i];		
	}
	
	cout <<endl<< "  *Metodo 1: Ordenamiento Burbuja*" << endl<<endl;
	
	string ArregloAuxiliar[RangoArreglo]; 		
	
	for(int i=0; i<RangoArreglo; i++){	
		for(int j=0; j<RangoArreglo-1; j++){	
											
			
			if(CopiaLibrosM1[j] > CopiaLibrosM1[j+1]){ 
				ArregloAuxiliar[j]= CopiaLibrosM1[j];   
				CopiaLibrosM1[j] = CopiaLibrosM1[j+1];  
				CopiaLibrosM1[j+1] = ArregloAuxiliar[j];
			}
		}	
	}
	
	
	for(int m= 0; m<RangoArreglo; m++){
		cout<<m+1<<". "<<CopiaLibrosM1[m]<<endl; 
	}			
}
	
void Metodo2Seleccion(){

	string CopiaLibrosM2[RangoArreglo];  
	
	for(int i=0; i<RangoArreglo; i++){	
		
		CopiaLibrosM2[i] = Libros[i];
	}
	
	cout<<"*Metodo 2: Ordenamiento por Seleccion*"<< endl<<endl;
	
    int IndexMinimo; 
    string ArregloAuxiliar[20];	
	
    for (int i = 0; i < RangoArreglo - 1; i++) 
    {  
        IndexMinimo = i;  	
        
        for (int j = i+1; j < RangoArreglo; j++){
        	
        	if (CopiaLibrosM2[j] < CopiaLibrosM2[IndexMinimo]){ 
        		
            	IndexMinimo = j; 
         
				ArregloAuxiliar[i] = CopiaLibrosM2[IndexMinimo];
				CopiaLibrosM2[IndexMinimo] = CopiaLibrosM2[i];
				CopiaLibrosM2[i] = ArregloAuxiliar[i];		
			} 
        }
	}

	for(int m= 0; m<RangoArreglo; m++){
		cout<<m+1<<". "<<CopiaLibrosM2[m]<<endl; 
	}

}

void Metodo3Insercion(){
	

	 
	string CopiaLibrosM3[RangoArreglo]; 
	
	for(int i=0; i<RangoArreglo; i++){  
		
		CopiaLibrosM3[i] = Libros[i];
	}
	
	int i,j;
	string ClaveArregloAuxiliar[RangoArreglo];  
	
	
	for(i=1; i<RangoArreglo;i++ ){
		
		ClaveArregloAuxiliar[i] = CopiaLibrosM3[i];
		j= i - 1;
		
		
		while(j >= 0 && CopiaLibrosM3[j] > ClaveArregloAuxiliar[i]){  
			
			CopiaLibrosM3[j +1] = CopiaLibrosM3[j];
			j= j -1;	
		}
		
		CopiaLibrosM3[j + 1] = ClaveArregloAuxiliar[i];	
	}
	

	cout<<"     *Metodo 3: Ordenamiento por Insercion*"<<endl;
	for(int m= 0; m<RangoArreglo; m++){
		cout<<m+1<<". "<<CopiaLibrosM3[m]<<endl;
	}
	

}

