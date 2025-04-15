import java.util.*;

public class Main {
    public static void main(String[] args) {
      Lion l = new Lion();
      l.makeSound();
      
      System.out.println();
      
      Elephant e = new Elephant();
      e.makeSound();
  }
}

public class Animal{
  private  String name;
  private int age;
  
  public void makeSound(){
    System.out.print("test");
  }
}

public class Lion extends Animal{
  public void makeSound(){
    System.out.print("Roar");
  }
}

public class Elephant extends Animal{
  public void makeSound(){
    System.out.print("Trumpet");
  }
}