import java.util.Scanner;
import java.util.ArrayList;
import java.util.Collections;
public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int n=scanner.nextInt();
        int[] arr=new int[n];
        for(int i=0;i<n;i++){
            arr[i]=scanner.nextInt();
        }
        int m=scanner.nextInt();
        int[] arr2=new int[m];
        for(int i=0;i<m;i++){
arr2[i]=scanner.nextInt();
        }
        ArrayList<Integer> al=new ArrayList<>();
        int i=0,j=0;
        while(i<arr.length && j<arr2.length){
            if(arr[i]==arr2[j] && arr[i]%2!=0){
                    al.add(arr[i]);
                i++;
                j++;
            }else if(arr[i]<arr2[j]){
                i++;
            }
            else {
                j++;
            }
}
        if(al.isEmpty()){
            System.out.print("No common odd elements found.");
        }
        else{
            for(int a:al){
                System.out.print(a+" ");
            }
        }
    }
    }