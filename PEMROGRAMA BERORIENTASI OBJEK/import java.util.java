import java.util.Arrays;

public class Main {
    // Function to swap two strings
    static void swap(String[] arr, int i, int j) {
        String temp = arr[i];
        arr[i] = arr[j];
        arr[j] = temp;
    }

    // Function to check if string 'subStr' is a substring of string 'str'
    static boolean isSubstring(String str, String subStr) {
        return str.contains(subStr);
    }

    // Function to perform bubble sort based on the first column (nomor)
    static void sorting(String[][] matriks, int size) {
        for (int i = 0; i < size - 1; i++) {
            for (int j = 0; j < size - i - 1; j++) {
                if (Integer.parseInt(matriks[j][0]) > Integer.parseInt(matriks[j + 1][0])) {
                    for (int k = 0; k < 4; k++) {
                        swap(matriks[j], k, j + 1);
                    }
                }
            }
        }
    }

    // Function to search for a given name in the 'nama' column of the matrix
    static int searchName(String[][] matriks, int size, String name) {
        sorting(matriks, size);
        for (int i = 0; i < size; i++) {
            if (isSubstring(matriks[i][1], name)) {
                return i;
            }
        }
        return -1; // Return -1 if the name is not found in the 'nama' column
    }

    public static void main(String[] args) {
        String[][] matriks = {{"2200018394", "Syafiq", "Riau", "3"},
                {"2200018393", "Dapa", "Papua", "2"},
                {"2200018390", "Rey", "Palembang", "6"},
                {"2200018389", "Ivan", "Jawa", "7"}};
        int size = matriks.length;

        System.out.println("Unsorted Matrix:");
        for (String[] baris : matriks) {
            System.out.println(Arrays.toString(baris));
        }

        // Perform sorting based on nomor (the first column)
        sorting(matriks, size);

        System.out.println("\nSorted Matrix based on Nomor:");
        for (String[] baris : matriks) {
            System.out.println(Arrays.toString(baris));
        }

        // Search for a given name in the 'nama' column
        String searchNameStr = "Syafiq";
        int index = searchName(matriks, size, searchNameStr);
        if (index != -1) {
            System.out.println("\nFound " + searchNameStr + " at index " + index + " in the 'nama' column.");
        } else {
            System.out.println("\n" + searchNameStr + " not found in the 'nama' column.");
        }
    }
}
