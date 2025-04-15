import java.util.*;

public class ArraySumm {

    public static int sumArray(int[] arr) {
        int sum = 0;
        for (int num : arr) {
            sum += num;
        }
        return sum;
    }

    public static void main(String[] args) {
        
        int[] numbers = {1, 2, 3, 4};

        int result = sumArray(numbers);
        System.out.println("Result: " + result);
    }
}
