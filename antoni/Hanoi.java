import java.util.*;

public class Hanoi
{
    int iDiscos;
    int nrPassos = 0;
    
    public static void main( String args[] )
    {
        int torreOrigem = 1; 
        int torreDestino = 3; 
        int torreTemporaria = 2; 

        int nrDiscos = 0; 
        int nrPassos = 0;
        

        do{

            System.out.println("Digite a quantidade de discos:");
            Scanner ler = new Scanner(System.in);
            try{
                nrDiscos = ler.nextInt();
                if(nrDiscos <= 0) {
                    System.out.println("Digite a quantidade de discos (valor positivo):");
                }
            }catch(InputMismatchException e){
                System.out.println("Digite a quantidade de discos (valor inteiro):");
            }        
        }while(nrDiscos <=0 );


        Hanoi objTorres = new Hanoi( nrDiscos );

        objTorres.movimenta( nrDiscos, torreOrigem, torreDestino, torreTemporaria );
    }     

    public Hanoi( int pDiscos )
    {
        iDiscos = pDiscos;
    } 

    public void movimenta( int pDiscos, int pTorreOrigem, int pTorreDestino, int torreTemporaria )
    {
        if ( pDiscos == 1 )
        {
            nrPassos++;
            System.out.printf( "\nPasso %d| %d --> %d", nrPassos, pTorreOrigem, pTorreDestino );
            return;
        } 

        movimenta( pDiscos - 1, pTorreOrigem, torreTemporaria, pTorreDestino );
        nrPassos++;
        System.out.printf( "\nPasso %d| %d --> %d", nrPassos, pTorreOrigem, pTorreDestino );

        movimenta( pDiscos - 1, torreTemporaria, pTorreDestino, pTorreOrigem );
    } 
} 