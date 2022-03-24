import java.util.*;
import java.util.HashSet;
import java.util.Set;

public class Forca
{

    public static char[] onlyUniqueElements(final char[] inputArray)
    {
        final Set<Object> set = new HashSet<>();
        final char[] tmp = new char[inputArray.length];
        int index = 0;
        for (int j = 0; j < inputArray.length; j++)
            if (set.add(inputArray[j]))
                tmp[index++] = inputArray[j];
    
        return Arrays.copyOfRange(tmp, 0, index);
    }    

    public static void main(String[] args) 
    {
        Scanner ler = new Scanner(System.in);  

        System.out.println("JOGADOR 1");          
        System.out.println("");          
        System.out.println("Digite a palavra a ser adivinhada:");  
        String palavra_escolhida = ler.next();
        palavra_escolhida = palavra_escolhida.toLowerCase();
        System.out.println("");          
        System.out.println("JOGADOR 2");          
        System.out.println("");          

        
        Scanner sc = new Scanner(System.in);  
          
        int forca = 1, vencer = 0, perder = 0, contador = 0, pontuacaoFinal = 0;  
        // Nesse caso o array não precisa ter o tamanho de 100, já que a pessoa se  
        // perder for = 5 ele perde e  
        // se vencer = 5, ele ganha, pode ser 10 para melhorar a performace do  
        // for criado abaixo, nesse caso vamos deixar com tamanho 20 no caso da pessoa   
        //digitar a mesma letra algumas vezes.  
        String digito, letrasDigitadas[] = new String[20];  

        char palavra[] = onlyUniqueElements(palavra_escolhida.toCharArray());
          
        while (forca == 1) {  
            int existePalavra = 0;  
            System.out.println("Digite a letra:");  
            digito = sc.next();  
            digito = digito.toLowerCase();
            
            /** for criado para verificar se a letra já foi digitada. */  
            for (int i = 0; i < letrasDigitadas.length; i++) {  
                if (letrasDigitadas[i] != null) {  
                    if (letrasDigitadas[i].equals(digito)) {  
                        existePalavra++;  
                    }  
                }  
            }  

            if(existePalavra < 1) {

                letrasDigitadas[contador++] = digito;  
                
                if (palavra_escolhida.contains(digito)) {                      
                    System.out.println("Letra correta.");  
                    vencer++;
                } else {  
                    perder++;
                    System.out.println("Letra incorreta.");  
                } 
                
            } else {
                System.out.println("Letra repetida. ");  
                perder++;

            }            
            if (perder >= 6) {  
                System.out.println("Você perdeu a partida. Tente novamente...");  
                System.exit(0);  
            } else if( vencer >= palavra.length) {
                System.out.println("Você venceu a partida. Parabéns!");  
                System.exit(0);  
            }

        }  
    }
}